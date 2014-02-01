<?php 
require_once(DOCROOT."/include/dblib.php");
require_once(DOCROOT."/include/maillib.php");

function mailDbController($host, $user, $passwd, $database, $table) {
	if (_mailGetTo() != "") {
		insertIntoDb($host, $user, $passwd, $database, $table);
	}
}

function insertIntoDb($host, $user, $passwd, $database, $table, $from, $to, $subject, $msg) {
	$ip      = $_SERVER["REMOTE_ADDR"];
	
	$colsvals = "id=current_timestamp, ip='$ip', xto='$to', xfrom='$from', subject='$subject', msg='$msg'";
	dbInsRow($host, $user, $passwd, $database, $table, $colsvals);
}
?>
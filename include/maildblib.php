<?php 
require_once(DOCROOT."/include/dblib.php");
require_once(DOCROOT."/include/maillib.php");

define("TABLE", "jnotes");

function mailDbController($host, $user, $passwd, $database, $table) { // Required? 2015-06-20
	if (_mailGetTo() != "") {
		insertIntoDb($host, $user, $passwd, $database, $table);
	}
}

function sendMessageMetBevestiging($from, $to, $toMailAlias, $subject, $msg) {
	$subject =  "$subject van $from";
	insertIntoDb(HOST, USER, PASSWD, DATABASE, TABLE, $from, $to, $subject, $msg);
	mailSnd($to,   $subject,                            $msg, $from,          MAIL_SND_TRACE_FMT_LONG);
	mailSnd($from, "Mailbevestiging van jbn-aikido.nl", $msg, $toMailAlias,   MAIL_SND_TRACE_FMT_SHORT);
}
 

function insertIntoDb($host, $user, $passwd, $database, $table, $from, $to, $subject, $msg) {
	$ip      = $_SERVER["REMOTE_ADDR"];
	
	$colsvals = "id=current_timestamp, ip='$ip', xto='$to', xfrom='$from', subject='$subject', msg='$msg'";
	dbInsRow($host, $user, $passwd, $database, $table, $colsvals);
}
?>
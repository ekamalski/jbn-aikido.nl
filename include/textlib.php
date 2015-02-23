<?php
// Last update: 2015-02-23

require_once(DOCROOT."/include/datelib.php");
require_once(DOCROOT."/include/defslib.php");

define("TOT_EN_MET", "-1");

function dojos() {
	include(DOCROOT."/pages/dojos.php");
}

/**
 * @param string $datum   mon(yyyy, dd)
 * @param string $lokatie LOKATIE
 * @param string $txt1
 */
function examens($datum, $lokatie, $txt1) {
	if (!isDatumPast($datum)) {
		h2("Danexamens", $datum, $lokatie);
		if ($txt1 != "" ) {
			print("$txt1</br>\n");
		}
		examensDetails();
		hr();
	}
}

/**
 * Include /nieuws/${REF}
 */
function nieuwsitem($title, $ref) {
	print("<h2 style='clear: both;'>Nieuws item: $title</h2>\n");
	require_once(ABSPATH."/nieuws/$ref");
	hr();
}

/**
 * Link to: ?page=${REF}
 */
function nieuwspageLink($ref, $item, $more="") {
	print("<h2 style='clear: both;'>Nieuws: $item</h2>\n");
	if ($more != "") {
		print("$more<br/>\n");
	}
	print("Klik op de <a href='?page=$ref'>link</a> om het hele item te lezen\n");
	hr();
}

/**
 * Link to: ?page=nieuws&nieuwsitem=${REF}
 */
function nieuwsitemLink($ref,$item) {
	print("<h2 style='clear: both;'>Nieuws item: $item</h2>\n");
	print("Klik op de link <a href='?page=nieuws&nieuwsItem=$ref'>\n$item</a> om het hele nieuws item te lezen\n");
	hr();
}

/**
 * Link to: nieuws/${REF}
 */
function nieuwsitemPdfLink($ref,$item,$thumb="") {
	print("<h2 style='clear: both;'>Nieuws item: $item</h2>\n");
	
	if ($thumb == "") {
		$text = "Klik op de link <a href='nieuws/$ref'>\n$item</a> om het hele nieuws item te lezen\n";
		print($text);
	} else {
		$text = "Klik op de link<br/><a href='nieuws/$ref'>\n$item</a><br/>om het hele nieuws item te lezen\n";
		imgTextThumb($thumb, $text, $ref);
	}
	hr();
}

/** 
 * @param string $leraren LERAAR
 * @param string $datum   mon(yyyy, dd [, dd |, TOT_EN_MET, dd])
 * @param string $lokatie LOCATIE -- LOCATIE_L = street, city
 * @param string $thumb LERAAR_T (img to: events/${LERAAR_T}.jpg),  default: NO_T (no thumb)
 * @param string $txt1 left from thumb, max:11 lines, default: empty
 * @param string $txt2 below thumb, default: empty 
 * @param string $ref  link to events/${REF}, default: no link 
 */
function stage($leraren, $datum, $lokatie, $thumb=NO_T, $txt1="", $txt2="", $ref="") {
	if (!isDatumPast($datum)) {
		h2($leraren, $datum, $lokatie);
		if ($thumb == NO_T) {
			stageWithoutThumb($txt1, $ref);
		} else {
			stageWithThumb($thumb, $txt1, $txt2, $ref);
		}
		hr();
	}
}

/**
 * @param string $leraren LERAAR
 * @param string $datum   mon(yyyy, dd [, dd |, TOT_EN_MET, dd])
 * @param string $lokatie LOCATIE -- LOCATIE_L = street, city
 * @param string $thumb LERAAR_T (img to: events/${LERAAR_T}.jpg),  default: NO_T (no thumb)
 * @param string $txt1 left from thumb, max:11 lines, default: empty
 * @param string $txt2 below thumb, default: empty
 * @param string $ref  link to events/${REF}, default: no link
 */
function duoStage($leraren, $datum, $lokatie, $thumb1=NO_T, $txt1="", $thumb2=NO_T, $txt2="", $ref="") {
	if (!isDatumPast($datum)) {
		h2($leraren, $datum, $lokatie);
		if ($thumb1 == NO_T) {
			stageWithoutThumb($txt1, $ref);
			
		} else {
			if ($ref == "" ) {
				print("<img style='float: left;'  src='events/140x200_t/$thumb1'>");
				print("<img style='float: right;' src='events/140x200_t/$thumb2'>");
			} else {
				print("<a style='float: left;'  href='events/$ref'>\n<img src='events/140x200_t/$thumb1'></a>\n");
				print("<a style='float: right;' href='events/$ref'>\n<img src='events/140x200_t/$thumb2'></a>\n");
			}
			print("<div style='float: left; padding-left: 10px;'>\n$txt1");
			print("</div>\n");
			print("<p style='clear: both;'>\n");
			
			if ($txt2 != null || "$txt2" != "") {
				print("<br/>$txt2<br/>");
			}
			print("<br/>");
			
			detailsTeVinden();
			if ($ref != "") {
				txtRef($ref, "Flyer");
			}
			dekalender();
		}
		hr();
	}
}




/* Private
 */

/**
 * Handle monthName1(yyyy, dd).", ".monthName2(yyy, dd)
 */
function isDatumPast($datum) {
	if ($datum == DATE_IN_PAST) { return true; }
	else if ($datum == DATE_IN_PAST.", ".DATE_IN_PAST) { return true; }
	return false;
}

function getDays($day1, $day2, $day3) {
	$days = $day1;
    if ($day2 == TOT_EN_MET) { $days = "$day1 tot en met $day3"; }
    else if ($day2 != 0)     { $days = "$days, $day2"; }
    else if ($day3 != 0)     { $days = "$days, $day2 en $day3"; }
	return $days;
}

function trc($txt){
	print("TRC, $txt");
}

function brString($text) {
	return "$text<br/>\n";
}

function dekalender() {
	print("<a href='?page=kalender'>kalender</a>\n");
}

function details() {
	detailsTeVinden();
	dekalender();
}

function detailsTeVinden() {
	print("De details zijn te vinden in de\n");
}

function examensDetails() {
	detailsTeVinden();
	print("<a href='?page=examens'>examens</a> pagina\n");
}

function h2($leraren, $datum, $lokatie) {
	print("<h2 style='clear: both;'>$leraren, $datum, $lokatie</h2>\n");
}

function imgTextThumb($thumb, $txt1="", $ref="") {
	if ($ref == "" ) {
		print("<img style='float: left;' src='events/140x200_t/$thumb'>");
	} else {
		print("<a style='float: left;' href='events/$ref'>\n<img src='events/140x200_t/$thumb'></a>\n");
	}
	print("<div style='float: left; padding-left: 10px;'>\n$txt1");
	print("</div>\n");
	print("<p style='clear: both;'>\n");
}

/**
 * private function
 * +--
 * | txt1
 * | ref
 * +--
 */
function stageWithoutThumb($txt1="", $ref="") {
	if ($txt1 != "" ) {
		print("$txt1</br>\n");
	}
	
	detailsTeVinden();	
	if ($ref != "") {		
		txtRef($ref, "Flyer");
	}
	dekalender();
}

/**
 * private function
 * +--
 * | thumb txt1 (max: 11 lines)
 * | txt2
 * | ref
 * +--
 */
function stageWithThumb($thumb, $txt1="", $txt2="", $ref="") {
	imgTextThumb($thumb, $txt1, $ref);
		
	if ($txt2 != null || "$txt2" != "") {
		print("<br/>$txt2<br/>");
	}
	print("<br/>");
	
	detailsTeVinden();	
	if ($ref != "") {		
		txtRef($ref, "Flyer");
	}
	dekalender();
}

function txtRef($ref, $txt) {
	print("<a href='events/$ref'>\n$txt</a> en de \n");
}
	
	
?>
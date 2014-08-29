<?php
// Ident: 2014-08-29
define("TOT_EN_MET", "-1");

define("NO_T", 			"");
define("DATE_IN_PAST", 	"");

define("BENNEDETTI",    "Stefan Bennedetti");
define("BENNEDETTI_T",  "bennedetti_t.jpg");

define("CLAUDE",   	    "Claude Pellerin");
define("CLAUDE_T",      "claude_t.jpg");

define("CURTIS",   	    "Chris Curtis");
define("CURTIS_T",      "curtis_t.jpg");

define("DONOVAN",       "Donovan Waite");
define("DONOVAN_T",     "donovan_t.jpg");

define("FUKAKUSA",      "Fukakusa sensei");
define("FUKAKUSA_T",    "fukakusa_t.jpg");

define("IAS",           "IAS");
define("IAS_T",         "ias_t.jpg");

define("MICHAEL",       "Michael Martin");
define("MICHAEL_T",     "mickael_t.jpg");

define("ROINEL",        "Alain Roinel");

define("TIKI",          "Malcolm Tiki Shewan");
define("TIKI_T",        "tiki-shewan_t.jpg");

define("ALLARDSOOG",    "Allardsoog");
define("ALLARDSOOG_L",  "Jarig van de Wielenwei 42, 9343 TC Een-West");

define("AMERSFOORT",    "Amersfoort");
define("AMERSFOORT_L",  "Furglerplein 3, Amersfoort");

define("GENNEP",        "Gennep");
define("GENNEP_L",      "Picardie 36, Gennep");

define("HEERENVEEN",    "Heerenveen");
define("HEERENVEEN_L",  "Abe Lenstra boulevard 23Q, 8448 JA Heerenveen");

define("HELMOND",       "Helmond");
define("HELMOND_L",     "Barrierlaan 41, Helmond");

define("NIEUWEGEIN",    "Nieuwegein");
define("NIEUWEGEIN_L",  "Blokhoeve 5, Nieuwegein");

define("NIJMEGEN",      "Nijmegen");
define("NIJMEGEN_L",    "Tapirstraat 2, 6532 AL Nijmegen");

define("OOSTERHOUT",    "Oosterhout");
define("OOSTERHOUT_L",  "Slotjesveld 9, 4902 AA Oosterhout");

define("STROE",         "Stroe");
define("STROE_L",       "Tolnegenweg 53, 3776 PV Stroe");

define("VEGHEL",        "Veghel");
define("VEGHEL_L",      "Prins Willem Alexander Sportpark 8, 5461 XL Veghel");

define("WIJK_BIJ_DUURSTEDE",   "Wijk bij Duurstede");
define("WIJK_BIJ_DUURSTEDE_L", "Lekdijk oost 13a, AAWijk bij Duurstede");

function examens($datum, $lokatie, $txt1) {
	if ($datum != "") {
		h2("Danexamens", $datum, $lokatie);
		if ($txt1 != "" ) {
			print("$txt1</br>\n");
		}
		examensDetails();
	}
}

function nieuwsitemLink($ref,$item) {
	print("<h2 style='clear: both;'>Nieuws item: $item</h2>\n");
	print("Klik op de link <a href='?page=nieuws&nieuwsItem=$ref'>\n$item</a> om het hele nieuws item te lezen\n");
}

function nieuwsitem($title, $ref) {
	print("<h2 style='clear: both;'>Nieuws item: $title</h2>\n");
	require_once(ABSPATH."/nieuws/$ref");
}


function stage($leraren, $datum, $lokatie, $thumb="", $txt1="", $txt2="", $ref="") {
	if ($datum != DATE_IN_PAST) {
		h2($leraren, $datum, $lokatie);
		if ($thumb == NO_T) {
			stageWithoutThumb($txt1, $ref);
		} else {
			stageWithThumb($thumb, $txt1, $txt2, $ref);
		}
	}
}

function jan($year, $day1, $day2=0, $day3=0) {

	$days = getDays($day1, $day2, $day3);
	return "$days januari";
}

function feb($year, $day1, $day2=0, $day3=0) {
	$days = getDays($day1, $day2, $day3);
	return "$days februari";
}

function mar($year, $day1, $day2=0, $day3=0) {
	$days = getDays($day1, $day2, $day3);
	return "$days maart";
}

function apr($year, $day1, $day2=0, $day3=0) {
	$days = getDays($day1, $day2, $day3);
	return "$days april";
}

function may($year, $day1, $day2=0, $day3=0) {

	$days = getDays($day1, $day2, $day3);
	return "$days mei";
}

function jun($year, $day1, $day2=0, $day3=0) {
	$days = getDays($day1, $day2, $day3);
	return "$days juni";
}

function jul($year, $day1, $day2=0, $day3=0) {
	$days = getDays($day1, $day2, $day3);
	return "$days juli";
}

function aug($year, $day1, $day2=0, $day3=0) {
	$days = getDays($day1, $day2, $day3);
	return "$days augustus";
}

function sep($year, $day1, $day2=0, $day3=0) {
	$days = getDays($day1, $day2, $day3);
	return "$days september";
}

function oct($year, $day1, $day2=0, $day3=0) {
	$days = getDays($day1, $day2, $day3);
	return "$days oktober";
}

function nov($year, $day1, $day2=0, $day3=0) {
	$days = getDays($day1, $day2, $day3);
	return "$days november";
}

function dec($year, $day1, $day2=0, $day3=0) {
	$days = getDays($day1, $day2, $day3);
	return "$days december";
}

// Private

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
		print("<img style='float: left;' src='events/$thumb'>");
	} else {
		print("<a style='float: left;' href='events/$ref'>\n<img src='events/$thumb'></a>\n");
	}
	print("<div style='float: left; padding-left: 10px;'>\n$txt1");
	print("</div>\n");
	print("<p style='clear: both;'>\n");
}

function stageWithoutThumb($txt1="", $ref="") {
	if ($txt1 != "" ) {
		print("$txt1</br>\n");
	}
	
	detailsTeVinden();	
	if ($ref != "") {		
		txtRef($ref, "PDF-flyer");
	}
	dekalender();
}

function stageWithThumb($thumb, $txt1="", $txt2="", $ref="") {
	imgTextThumb($thumb, $txt1, $ref);
		
	if ($txt2 != null || "$txt2" != "") {
		print("<br/>$txt2<br/>");
	}
	print("<br/>");
	
	detailsTeVinden();	
	if ($ref != "") {		
		txtRef($ref, "PDF-flyer");
	}
	dekalender();
}

function txtRef($ref, $txt) {
	print("<a href='events/$ref'>\n$txt</a> en de \n");
}
	
	
?>
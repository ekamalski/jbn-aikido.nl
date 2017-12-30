<?php
// Last update: 2015-06-26

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
	if (!isDatumInHetVerleden($datum)) {
		h2("Danexamens", $datum, $lokatie);

		$txt = $txt1."<br>De details zijn te vinden in de <a href='?page=examens'>examens</a> pagina\n";
		imgTextThumb("examens_t.jpg", $txt, "");

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
function stage($leraren, $datum, $lokatie, $thumb, $txt1, $txt2, $ref) {
    if (!isDatumInHetVerleden($datum)) {
        h2($leraren, $datum, $lokatie);
        if ($thumb == NO_T) {
            stageWithoutThumb($txt1."<br>".$txt2, $ref);
        } else {
            stageWithThumb($thumb, $txt1, $txt2, $ref);
        }
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
	print("Klik op de <a class='btn-link' href='?page=$ref'>link</a> om het hele item te lezen\n");
	hr();
}

/**
 * Link to: ?page=nieuws&nieuwsitem=${REF}
 */
function nieuwsitemLink($ref, $item) {
	print("<h2 style='clear: both;'>Nieuws item: $item</h2>\n");
	print("Klik op de link <a class='btn-link' href='?page=nieuws&nieuwsItem=$ref'>\n$item</a> om het hele nieuws item te lezen\n");
	hr();
}

/**
 * Link to: nieuws/${REF}
 */
function nieuwsitemPdfLink($ref, $item, $thumb="") {
	print("<h2 style='clear: both;'>Nieuws item: $item</h2>\n");
	
	if ($thumb == "") {
		$text = "Klik op de link <a class='btn-link' href='nieuws/$ref'>\n$item</a> om het hele nieuws item te lezen\n";
		print($text);
	} else {
		$text = "Klik op de link<br/><a class='btn-link' href='nieuws/$ref'>\n$item</a><br/>om het hele nieuws item te lezen\n";
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
function duoStage($leraren, $datum, $lokatie, $thumb1=NO_T, $txt1="", $thumb2=NO_T, $txt2="", $ref="") {
	if (!isDatumInHetVerleden($datum)) {
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
			stageDetails($ref);
		}
		hr();
	}
}

/**
 * Format
 * - max: 11 strings that will be placed beside the thumb.
 * or
 * - strings that will be placed under the thumb.
 */
function formatText() {
	$text = "";
	 foreach (func_get_args() as $arg) {
		$text .= brString($arg);
	}
	return $text;
}


/* Private
 */

function error($message) {
    if (isLocalhost()) {
        print( _tag("span", "ERROR, $message", "style='background-color: yellow; border: solid 1px red;'") );
    }
}

function trc($txt){
	print("TRC, $txt");
}

function brString($text) {
	return "$text<br/>\n";
}

// function _dekalender() {
// 	print("<a class='btn-link' href='?page=kalender'>kalender</a>\n");
// }

function examensDetails() {
    detailsTeVinden();
    print("<a href='?page=examens'>examens</a> pagina\n");
}

function stageDetails($ref) {
	detailsTeVinden();
	if ($ref != "" && file_exists("events/$ref")) {
	    print("<a class='btn-link' href='events/$ref'>\n$txt</a> en de \n");
	} else if ($ref != "" && isLocalhost()) {
	    error("events/$ref does not exist");
	}
	print("<a class='btn-link' href='?page=kalender'>kalender</a>\n");
}


function detailsTeVinden() {
	print("De details zijn te vinden in de\n");
}



function h2($leraren, $datum, $lokatie) {
	print("<h2 style='clear: both;'>$leraren, $datum, $lokatie</h2>\n");
}

function imgTextThumb($thumb, $txt1="", $ref="") {
    if ($ref != "" && file_exists("events/$ref") ) {
        print("<a style='float: left;' href='events/$ref'>\n<img src='events/140x200_t/$thumb'></a>\n");
    } else {
        print("<img style='float: left;' src='events/140x200_t/$thumb'>");
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
function stageWithoutThumb($txt1=NO_TEXT1, $ref=NO_FLYER) {
	if ($txt1 != NO_TEXT1 ) {
		print("$txt1</br>\n");
	}	
	stageDetails($ref);
}

/**
 * private function
 * +--
 * | thumb txt1 (max: 11 lines)
 * | txt2
 * | ref
 * +--
 */
function stageWithThumb($thumb, $txt1=NO_TEXT1, $txt2=NO_TEXT2, $ref=NO_FLYER) {
	imgTextThumb($thumb, $txt1, $ref);
		
	if ($txt2 != null || "$txt2" != NO_FLYER) {
		print("<br/>$txt2<br/>");
	}
	print("<br/>");	
	stageDetails($ref);
}

?>
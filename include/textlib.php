<?php
// Ident: 2012-12-26
function dekalender() {
	print("<a href='?page=kalender'>kalender</a>\n");
}

function detailsTeVinden() {
	print("De details zijn te vinden in de\n");
}

function details() {
	detailsTeVinden();
	dekalender();
}

function examensDetails() {
	detailsTeVinden();
	print("<a href='?page=examens'>examens</a> pagina\n");
}

function h2($leraren, $datum, $lokatie) {
	print("<h2 style='clear: both;'>$leraren, $datum, $lokatie</h2>\n");
}

function imgRef($ref, $thumb) {
	print("<a style='float: left;' href='events/$ref'>\n<img src='events/$thumb'></a>\n");
}

function txtRef($ref, $txt) {
	print("<a href='events/$ref'>\n$txt</a> en de \n");
}

// --- templates ---
function nieuwsitemLink($ref,$item) {
	print("<h2 style='clear: both;'>Nieuws item: $item</h2>\n");
	print("Klik op de link <a href='?page=nieuws&nieuwsItem=$ref'>\n$item</a> om het hele nieuws item te lezen\n");
}

function nieuwsitem($title, $ref) {
	print("<h2 style='clear: both;'>Nieuws item: $title</h2>\n");
	require_once(ABSPATH."/nieuws/$ref");
}

function eenvoudig($leraren, $datum, $lokatie, $txt1) {
	h2($leraren, $datum, $lokatie);
	if ($txt1 != "" ) {
		print("$txt1</br></br>\n");
	}
	details();
}

function examens($datum, $lokatie, $txt1) {
	h2("Danexamens", $datum, $lokatie);
	if ($txt1 != "" ) {
		print("$txt1</br>\n");
	}
	examensDetails();
}

function eenvoudigGeenDetails($leraren, $datum, $lokatie, $txt1) {
	h2($leraren, $datum, $lokatie);
	if ($txt1 != "" ) {
		print("$txt1</br>\n");
	}
}

function pdf($leraren, $datum, $lokatie, $ref, $txt1) {
	h2($leraren, $datum, $lokatie);
	if ($txt1 != "" ) {
		print("$txt1</br></br>\n");
	}
	detailsTeVinden();
	txtRef($ref, "PDF-flyer");
	dekalender();
	print("</p>\n");
}

function thumb($leraren, $datum, $lokatie, $thumb, $txt1) {
	h2($leraren, $datum, $lokatie);
	print("<img style='float: left;' src='events/$thumb'>");
	print("<div style='float: left; padding-left: 10px;'>\n");
	if ($txt1 != null || "$txt1" != "") {
		print("$txt1<br/><br/>");
	}
	detailsTeVinden();
	// ....
	dekalender();
	print("</div>\n");
	print("<p style='clear: both;'><br/><br/>");
}



function thumbPdf($leraren, $datum, $lokatie, $ref, $thumb, $txt1, $txt2) {
	h2($leraren, $datum, $lokatie);
	imgRef($ref, $thumb);
	print("<div style='float: left; padding-left: 10px;'>\n$txt1");
	print("</div>\n");
	print("<p style='clear: both;'>\n");
	if ($txt2 != null || "$txt2" != "") {
		print("<br/>$txt2<br/>");	
	}
	print("<br/>");
	detailsTeVinden();
	txtRef($ref, "PDF-flyer");
	dekalender();
	print("</p>\n");
}

function thumbPdf2($leraren, $datum, $lokatie, $ref, $thumb, $txt1, $txt2) {
	h2($leraren, $datum, $lokatie);
	imgRef($ref, $thumb);
	print("<div style='float: left; padding-left: 10px;'>\n$txt1<br/><br/>");
	print("<br/><br/></div>\n");
	print("<p style='clear: both;'>\n");
	detailsTeVinden();
	txtRef($ref, "PDF-flyer");
	dekalender();
    print("<br/>$txt2");
	print("</p>\n");
}
?>
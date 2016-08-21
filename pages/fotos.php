<?php 
require_once(DOCROOT."/include/rqlib.php");
require_once(DOCROOT."/fotoalbums/include.php");

main();

function main() {

	fotosstagefukakusa();
    fotosaikdofestijn();
    
	showListOfAlbums();
}
	

// ------------------------------------------------------
function fotosaikdofestijn() {
	$foto  = rqGet("foto");
	
	print("<h2>Fotos aikidofestijn 2016</h2>\n");
	
	showFestijnThumbs();
	if ($foto != "") {
		showFestijnImg($foto);
	} else {
		print("Klik op de miniatuur weergave voor grotere afbeeldingen\n<br/><br/>");
	}
	
	aref("https://www.dropbox.com/sh/1i0n8snoqrfzqxo/AACdlPNgGfo-UPx7bVCic4g2a?dl=0", "Link naar alle foto's van het Aikidofestijn 2016");
	print("<br/><br/>\n");
	
}

function showFestijnThumbs() {
	print("<div style='width: 950px;'>\n");
	showFestijnThumb("AikidoFestijn_01_0471.jpg");

	showFestijnThumb("AikidoFestijn_01_0914.jpg");

	showFestijnThumb("AikidoFestijn_02_0054.jpg");

	print("</div>\n");
	print("<br/>\n");
}

function showFestijnThumb($img) {
	print("<a href='?page=fotos&foto=$img'><img src='fotoalbums/2016-aikidofestijn/thumbs/$img' alt='$img' border='0'></a>");
	print("&nbsp;&nbsp;&nbsp;");
}

function showFestijnImg($img) {
	$relUrl= "fotoalbums/2016-aikidofestijn/$img";
	$fpath = DOCROOT."/$relUrl";
	if (file_exists($fpath)) {
		$width = "625px";
		print("<div style='width: $width;'>\n");
		print("<img src='$relUrl' alt='$img-$width' border='0'>");
		print("</div>\n");
		print("<br/>\n");
	}
}

function showListOfAlbums() {
	print("<h2>Links naar andere foto albums</h2>\n");
	print("<ul style='list-style: none; padding-left: 0px;'>\n");
	liaref("https://www.dropbox.com/sh/nfhwyc561bo9t6c/AXe70qppOE", "Leraren examen 2013");
	liaref("http://www.flickr.com/photos/tijmen_r/sets/72157633517957311/", "Stage Fukakusa shihan 2013");
	
	liaref("https://www.dropbox.com/sh/r4hhucwgxw0zh1e/biLQbOdjdP", "Alardsoog 2012");
	print("</ul>\n");
}

function liaref($url, $text) {
	print("<li>");
    aref($url, $text);
	print("</li>");

}


?>


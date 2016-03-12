<?php 
require_once(ABSPATH."/include/rqlib.php");

main();

function main() {
	$foto  = rqGet("foto");

	print("<h2>Foto aikidofestijn 2016</h2>\n");
	
	showThumbs();
	if ($foto != "") {
		showImg($foto);			
	} else {
        print("Klik op de miniatuur weergave voor grotere afbeeldingen\n<br/><br/>");
    }
    
    aref("https://www.dropbox.com/sh/1i0n8snoqrfzqxo/AACdlPNgGfo-UPx7bVCic4g2a?dl=0", "Link naar alle foto's van het Aikidofestijn 2016");
	print("<br/><br/>\n");
    
    
	showListOfAlbums();
}

function showThumb($img) {
	print("<a href='?page=fotos&foto=$img'><img src='fotoalbums/2016-aikidofestijn/thumbs/$img' alt='$img' border='0'></a>");
	print("&nbsp;&nbsp;&nbsp;");
}

function showThumbs() {	
	print("<div style='width: 950px;'>\n");
    showThumb("AikidoFestijn_01_0471.jpg");

    showThumb("AikidoFestijn_01_0914.jpg");

    showThumb("AikidoFestijn_02_0054.jpg");
    
	print("</div>\n");
	print("<br/>\n");
}

function showImg($img) {
    $width = "625px";
	print("<div style='width: $width;'>\n");
	print("<img src='fotoalbums/2016-aikidofestijn/$img' alt='$img-$width' border='0'>");
	print("</div>\n");
	print("<br/>\n");
}

function showListOfAlbums() {
	print("<h2>Links naar andere foto albums</h2>\n");
	print("<ul style='list-style: none; padding-left: 0px;'>\n");
    // liaref("https://www.dropbox.com/sh/1i0n8snoqrfzqxo/AACdlPNgGfo-UPx7bVCic4g2a?dl=0", "Aikidofestijn 2016");
	liaref("https://www.dropbox.com/sh/nfhwyc561bo9t6c/AXe70qppOE", "Leraren examen 2013");
	liaref("http://www.flickr.com/photos/tijmen_r/sets/72157633517957311/", "Stage Fukakusa shihan 2013");
	
	liaref("https://www.dropbox.com/sh/r4hhucwgxw0zh1e/biLQbOdjdP", "Alardsoog 2012");
	print("</ul>\n");
}

function ___formatFotoAlbumText($fotoAlbum) {
    $date = preg_replace("/(^\d\d\d\d-\d\d-\d\d)(_)(.*)/", "$1",  $fotoAlbum);
    $text = preg_replace("/(^\d\d\d\d-\d\d-\d\d)(_)(.*)/", "$3",  $fotoAlbum);
    $text = preg_replace("/\.html$/", "",  $text);
    $text = preg_replace("/_/",       " ", $text);
    return "$date - ".ucfirst($text);
}

function liaref($url, $text) {
	print("<li>");
    aref($url, $text);
	print("</li>");

}

function aref($url, $text) {
	print("<a title='Opent een nieuw tabblad/window' target='_blank' href='$url'>$text</a>");
}
?>


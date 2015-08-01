<?php 
require_once(ABSPATH."/include/rqlib.php");

main();

function main() {
	$foto  = rqGet("foto");

	print("<h2>Foto zomerschool 2015</h2>\n");
	showThumbs();
	
	if ($foto != "") {
		showImg($foto);			
	}

	showListOfAlbums();
}

function showThumb($img) {
	print("<a href='?page=fotos&foto=$img'><img src='fotoalbums/2015-zomerschool/thumbs/$img' alt='$img' border='0'></a>");
	print("&nbsp;&nbsp;&nbsp;");
}

function showThumbs() {	
	print("<div style='width: 950px;'>\n");
	showThumb("zomerschool2015.jpg");
	showThumb("zomerschool2015-1.jpg");
	showThumb("zomerschool2015-2.jpg");
	print("</div>\n");
	print("<br/>\n");
}

function showImg($img) {
	print("<div style='width: 1000px;'>\n");
	print("<img src='fotoalbums/2015-zomerschool/$img' alt='$img-1000px' border='0'>");
	print("</div>\n");
	print("<br/>\n");
}

function showListOfAlbums() {
	print("<h2>Lijst van foto albums</h2>\n");
	print("<ul style='list-style: none; padding-left: 0px;'>\n");
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
	print("<li><a title='Opent een nieuw tabblad/window' target='_blank' href='$url'>$text</a></li>");

}

?>


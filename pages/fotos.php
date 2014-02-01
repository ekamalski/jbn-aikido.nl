<?php 
require_once(ABSPATH."/include/rqlib.php");

/* Main
 */
$album = rqPost("album");
$foto  = rqPost("foto");
if ($album == null) {
    showListOfAlbums();
} else if ($foto == null){
    print(" <b> album: $album </b>  ");
    // showAlbum($album);
} else {
    print(" <b> album: $album, $foto: $foto </b>  ");
    // showFoto($album, $foto);
}

function liaref($url, $text) {
    print("<li><a title='Opent een nieuw tabblad/window' target='_blank' href='$url'>$text</a></li>");

}

function showListOfAlbums() {
print("<h2>Lijst van foto albums</h2>\n");
print("<ul style='list-style: none; padding-left: 0px;'>\n");
liaref("https://www.dropbox.com/sh/nfhwyc561bo9t6c/AXe70qppOE", "Leraren examen 2013");
liaref("http://www.flickr.com/photos/tijmen_r/sets/72157633517957311/", "Stage Fukakusa shihan 2013");

liaref("https://www.dropbox.com/sh/r4hhucwgxw0zh1e/biLQbOdjdP", "Alardsoog 2012");
print("</ul>\n");

/*
    $serverNamePort=$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
 //   $serverNamePort="emk.localhost:473";
    
    chdir(ABSPATH."/fotoalbums");
    $files = glob("*");
    if (is_array($files) && sizeof($files) >= 1) {
        print("<h2>Lijst van foto albums</h2>\n");
        print("<ul style='list-style: none; padding-left: 0px;'>\n");

        rsort($files);
        foreach ($files as $fotoAlbum) {
            if (is_dir($fotoAlbum)) {
                $url  = "http://$serverNamePort/fotoalbums/$fotoAlbum/html/default.html";
                $text = formatFotoAlbumText($fotoAlbum);
                print("<li>");
                print("<a href=\"$url\">$text</a>");
                print("</li>\n");
            }
        }
        print("</ul>\n");
    } else {
        print("Er zijn geen foto albums<br/><br/>\n");
    }
*/    
}

/*
function showAlbum($fotoAlbum) {
    $header = formatFotoAlbumText($fotoAlbum);
    print("<h1>$header</h1>\n");        
    
    $serverNamePort=$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];

    chdir(ABSPATH."/fotoalbums/$fotoAlbum/thumbs");
    $files = glob("*.jpg");
    foreach ($files as $thumb) {
        $url  = "http://$serverNamePort/fotos/index.php?album=$fotoAlbum&amp;foto=$thumb";
        print("<div style='border: solid 1px red; float: left; height: 198px; width: 198px;'>\n");
        print("<a href=\"$url\">\n");
        print("<img style=' vertical-align: middle;' src='http://$serverNamePort/fotos/$fotoAlbum/thumbs/$thumb' />\n");
        print("</a>\n");
        print("</div>\n");
    }
        
    $url = "http://$serverNamePort/fotos/index.php";
    print("<p style='clear: both;'><br/><br/><a href=\"$url\">Terug naar de lijst van foto albums</a></p>");

}

function showFoto($fotoAlbum, $foto) {
    $header = formatFotoAlbumText($fotoAlbum);
//    print("<h1>$header</h1>\n");        
    
    $serverNamePort=$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];

    print("<img src='http://$serverNamePort/fotos/$fotoAlbum/$foto' />\n");
        
    $url1 = "http://$serverNamePort/fotos/index.php";
    $url2 = "http://$serverNamePort/fotos/index.php?album=$fotoAlbum";
    print("<p style='clear: both;'><br/><br/><a href=\"$url2\">Terug naar foto album</a> <a href=\"$url1\">Terug naar de lijst van foto albums</a></p>");

}

*/  
function formatFotoAlbumText($fotoAlbum) {
    $date = preg_replace("/(^\d\d\d\d-\d\d-\d\d)(_)(.*)/", "$1",  $fotoAlbum);
    $text = preg_replace("/(^\d\d\d\d-\d\d-\d\d)(_)(.*)/", "$3",  $fotoAlbum);
    $text = preg_replace("/\.html$/", "",  $text);
    $text = preg_replace("/_/",       " ", $text);
    return "$date - ".ucfirst($text);
}  
?>

<!-- 
</div>
 
</center>
</div>
</body>
</html>
-->

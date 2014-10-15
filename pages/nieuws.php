<?php 
require_once(ABSPATH."/include/rqlib.php");

    $newsFile = rqGet("nieuwsItem");
    if ($newsFile == null) {
        // showMostRecentNewsItem();
        showNewsList();
    } else {
        showNewsItem($newsFile);
    }

function showNewsList() {
    $serverNamePort=$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
    
    chdir(ABSPATH."/nieuws");
    $files = glob("*.pdf");
    $files += glob("*.html");
    if (is_array($files) && sizeof($files) >= 1) {
        print("<h2>Nieuws items</h2>\n");
        print("<ul style='list-style: none; padding-left: 0px;'>\n");

        rsort($files);
        $mostRecent = true;
        foreach ($files as $newsFile) {
            print("<li>");
        	if (stristr($newsFile, ".pdf")) {
        		$url  = "http://$serverNamePort/nieuws/$newsFile";
        		$text = formatNewsItemText($newsFile);
        		print("<a href=\"$url\">$text (PDF)</a>");
        	} else {
                $url  = "http://$serverNamePort/?page=nieuws&amp;nieuwsItem=$newsFile";
                $text = formatNewsItemText($newsFile);
                print("<a href=\"$url\">$text</a>");
        	}
            print("</li>\n");
        }
        print("</ul>\n");
    } else {
        print("Er is geen nieuws<br/><br/>\n");
    }
}

function showNewsItem($newsFile) {
    $header = formatNewsItemText($newsFile);
    print("<h1>$header</h1>\n");        
    require_once(ABSPATH."/nieuws/".$newsFile);
        
    $serverNamePort=$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
    $url = "http://$serverNamePort/?page=nieuws";
    print("<p style='clear: both;'><br/><br/><a href=\"$url\">Terug naar nieuws lijst</a></p>");

}
function showMostRecentNewsItem() {
    $newsItem =getMostRecentNewsItem();
    if ($newsItem != null) {
        showNewsItem($newsItem);
    }
}

function getMostRecentNewsItem() {
    $files = glob("*.html");
    if (is_array($files) && sizeof($files) >= 1) {

        rsort($files);
        return $files[0];
    }
    
    return  null;
}

function formatNewsItemText($newsFile) {
    $date = preg_replace("/(^\d\d\d\d-\d\d-\d\d)(_)(.*)/", "$1",  $newsFile);
    $text = preg_replace("/(^\d\d\d\d-\d\d-\d\d)(_)(.*)/", "$3",  $newsFile);
    $text = preg_replace("/\.html$/", "",  $text);
    $text = preg_replace("/\.pdf$/", "",  $text);
    $text = preg_replace("/_/",       " ", $text);
    return "$date - ".ucfirst($text);
}
    
 ?>

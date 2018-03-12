<?php

require_once(DOCROOT."/include/aikidoulib.php");
require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/fotoalbums/include.php");


function thumb($thumb, $ref) {
	tagBeginAttr("a", "target='_blank' href='$ref'");
	tagAttrSlash("img", "class='img-x img-responsive' src='$thumb'");
	tagEnd("a");
}

function fotos($title, $ref1, $thumb1,  $ref2, $thumb2,  $refAll, $textAll) {
	tag("h2", $title);
	tagBegin("div");
	thumb($thumb1, $ref1);
	thumb($thumb2, $ref2);

	tagSlash("br");
	tagSlash("br");
	tagAttr("a", "target='_blank' class='btn btn-default' href='$refAll'", $textAll);
	tagEnd("div");
	tagSlash("hr");
}

/**
 * Lijst van "upcoming" evenementen.
 * Out-of-date evenmenten worden niet getoont
 */
function showEvents() {
	$files = glob("pages/events/*.php");
	foreach ($files as $file) {
		require_once($file);
	}	
}
/*
 * Include functies for later use
 */
require_once("pages/examens/chris.php");
$files = glob("pages/home/*.php");
foreach ($files as $file) {
    require_once($file);
}

showEvents();

tagBeginAttr("div", "class='panel-group' id='accordion'");
  panel("shisei", "Shisei door Chris de Jongh", chrisShisei()); 
  panel("kokyo",  "Kokyo door Chris de Jongh",  chrisKokyo() ); 
  panel("kamae",  "Kamae door Chris de Jongh",  chrisKamae() ); 
  panel("maai",   "Ma-ai door Chris de Jongh",  chrisMaai(), "in" ); 
tagEnd("div");

aikidoelementair();

shihan();


// panel("maai",  "Ma-ai door Chris de Jongh",  chrisMaai(), "in" );
// tagAttr("a", "class='btn btn-default' href='?page=examencurriculum'", "Link naar de andere artikelen door Chris de Jongh");
    
aikidofestijnAfterMovie();

aikidofestijnFotos2017();

fukakusaFotos2016();

aikidofestijnFotos2016();

nieuwsitemLink("2016-02-22_Hyoho_Niten_Ichi-ryu_en_Miyamoto_Musashi.html", "Hyoho Niten Ichi ryu en Miyamoto Musashi");
?>


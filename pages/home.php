<?php

require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/include/textlib.php");
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

function ___fotoLocalhostOnly() {
	if (isLocalhost()) {
		fotos("Localhost only", 
			"https://www.dropbox.com/sh/1i0n8snoqrfzqxo/AACdlPNgGfo-UPx7bVCic4g2a?preview=AikidoFestijn_01_0471.jpg",
				"fotoalbums/2017_aikidofestijn/thumbs/AikidoFestijn_01_2017_224.jpg",
			"https://www.dropbox.com/sh/1i0n8snoqrfzqxo/AACdlPNgGfo-UPx7bVCic4g2a?preview=AikidoFestijn_02_0054.jpg",
				"fotoalbums/2017_aikidofestijn/thumbs/AikidoFestijn_01_2017_676.jpg",
				
			"https://www.dropbox.com/sh/gjefclkb6bjxfww/AADusGhYoqckVBNf7Q4ijh3ga?dl=0",
				"Link naar alle aikidofestijn 2017 foto's"
		);
	}
}



/*
 * Lijst van "upcoming" evenementen.
 * Out-ofdate evenmenten worden niet getoont
 */
$files = glob("events/*.php");
foreach ($files as $file) {
    require_once($file);
}

/*
 * Include functies for later use 
 */
$files = glob("pages/home/*.php");
foreach ($files as $file) {
    require_once($file);
}

ncoa();

chrisShisei();
chrisKokyo();

aikidofestijnAfterMovie();


aikidofestijnFotos2017();

fukakusaFotos2016();

aikidofestijnFotos2016();

nieuwsitemLink("2016-02-22_Hyoho_Niten_Ichi-ryu_en_Miyamoto_Musashi.html", "Hyoho Niten Ichi ryu en Miyamoto Musashi");
?>


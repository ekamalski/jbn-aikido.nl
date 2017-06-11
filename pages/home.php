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
//	tagAttr("a", "target='_blank' style='text-decoration: none;' class='btn btn-default' href='$refAll'", $textAll);
	tagAttr("a", "target='_blank' class='btn btn-default' href='$refAll'", $textAll);
	tagEnd("div");
	tagSlash("hr");
}

function isLocalhost() {
	return  (false && $_SERVER["REMOTE_ADDR"] == "127.0.0.1");
}

function fotoLocalhostOnly() {
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


function __stageX($leraren, $datum, $lokatie, $txt1, $ref=NO_FLYER) {
	if (!isDatumInHetVerleden($datum)) {
		h2($leraren, $datum, $lokatie);
		print("$txt1\n");
		if ($ref != NO_FLYER) {
			print("De details zijn te vinden in de <a href='events/$ref'>flyer</a>\n");
		}		
		hr();
	}
}


function aikidoFestijnAfterMovie() {
	?>
	<h2>Aftermovie tweede editie van het JBN aikidofestijn. </h2>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/fifZisV8yik" frameborder="0" allowfullscreen></iframe>
	<br>Op zondag 8 januari 2017 organiseerde de Nationale Commissie Aikido 
	<br>de tweede editie van het JBN aikidofestijn. 
	<br>Gefilmed en gemonteerd door: G&aacute;bor J&aacute;nosi
	<hr>
	<?php	
}


function fotosFukakusa2016() {
	?>
	<h2>Fotos van de stage in 2016 met Fukakusa shihan</h2>
	<div>
	<a target="_blank" href="http://www.flickr.com/photos/tijmen_r/sets/72157633517957311/"><img class="img-x img-responsive" src="fotoalbums/2016_stage_fukakusa/thumbs/fukakusa_2016_2.jpg"></a>
	<a target="_blank" href="http://www.flickr.com/photos/tijmen_r/sets/72157633517957311/"><img class="img-x img-responsive" src="fotoalbums/2016_stage_fukakusa/thumbs/fukakusa_2016_3.jpg"></a>
	<br><br><a target="_blank" style="text-decoration: none;" class="btn btn-default" href="http://www.flickr.com/photos/tijmen_r/sets/72157633517957311/">Link naar alle foto's van de stage in 2016 met Fukakusa shihan</a>
		
	</div>
	<hr>
	<?php	
}


function fotosAikidoFestijn2016() {
	fotos("Fotos aikidofestijn 2016",
		"https://www.dropbox.com/sh/1i0n8snoqrfzqxo/AACdlPNgGfo-UPx7bVCic4g2a?preview=AikidoFestijn_01_0471.jpg",
		"fotoalbums/2016_aikidofestijn/thumbs/AikidoFestijn_01_0471.jpg",

		"https://www.dropbox.com/sh/1i0n8snoqrfzqxo/AACdlPNgGfo-UPx7bVCic4g2a?preview=AikidoFestijn_02_0054.jpg",
		"fotoalbums/2016_aikidofestijn/thumbs/AikidoFestijn_02_0054.jpg",
	
		"https://www.dropbox.com/sh/1i0n8snoqrfzqxo/AACdlPNgGfo-UPx7bVCic4g2a?dl=0",
		"Link naar alle aikidofestijn 2016 foto's"			
	);
}

function fotosAikidoFestijn2017() {
	fotos("Fotos aikidofestijn 2017",
		"https://www.dropbox.com/sh/1i0n8snoqrfzqxo/AACdlPNgGfo-UPx7bVCic4g2a?preview=AikidoFestijn_01_0471.jpg",
		"fotoalbums/2017_aikidofestijn/thumbs/AikidoFestijn_01_2017_224.jpg",
			
		"https://www.dropbox.com/sh/1i0n8snoqrfzqxo/AACdlPNgGfo-UPx7bVCic4g2a?preview=AikidoFestijn_02_0054.jpg",
		"fotoalbums/2017_aikidofestijn/thumbs/AikidoFestijn_01_2017_676.jpg",
	
		"https://www.dropbox.com/sh/gjefclkb6bjxfww/AADusGhYoqckVBNf7Q4ijh3ga?dl=0",
		"Link naar alle aikidofestijn 2017 foto's"
		);
}

function __opleidingAl4() {
	?>
	<h2>Opleiding aikido leraar</h2>
	<div style='white-space: nowrap;'>
	De opleiding aikido leraar niveau 3 en niveau 4 gaat
	in september 2017 van start.
	<br>Interesse. Meld je aan voor de opleiding:
	<ul>
	<li><a target="_blank" href="https://survey.enalyzer.com/survey?sessionid=802a98b6-09ab-48da-b7f6-8f63cce7f12c">aikido leraar niveau 3</a>
	<li><a target="_blank" href="https://survey.enalyzer.com/survey?sessionid=df1f14df-58a2-4a00-806a-07aed3e8ed47">aikido leraar niveau 4</a>
	</ul>	
	</div>
	<hr>
	<?php
}

fotoLocalhostOnly();

stage(STEPHANE, jun(2017, 10, 11), VEGHEL, STEPHANE_T,
		formatText(
				STAGE_OLV,
				STEPHANE,
				EMPTY_LINE,
				"Zaterdag: 15.00 - 18.00",
				"Zondag:   10.00 - 13.00",
				EMPTY_LINE,
				LOKATIE,
				VEGHEL_L,
				EMPTY_LINE,
				STIJL_AIKIKAI
				),
		formatText(
				"Kosten:",
				"45.00 voor het hele weekend,",
				"25,00 per dag"
				),
		"2017-06-10_11_stephane_veghel.pdf"
		);

stage(CLAUDE, totEnMet(12, jul(2017, 16)), STROE, CLAUDE_T,
		formatText(
				ZOMERSCHOOL_OLV,
				CLAUDE,
				EMPTY_LINE,
				LOKATIE,
				STROE_L,
				EMPTY_LINE,
				STIJL_AIKIKAI
				),
		formatText(
				"Kosten:",
				"Hele zomerschool 100 euro",
				"4 dagen 85 euro",
				"3 dagen 65 euro",
				"2 dagen 45 euro",
				"1 dag 25 euro",
				"Woensdagmiddag 20 euro",
				"Halve dag 15 euro",
				"Kinderen t/m 12 jaar gratis"
				),
		"2017-07-12_16_zomerschool_stroe.pdf"
		);



aikidoFestijnAfterMovie();


fotosAikidoFestijn2017();

fotosFukakusa2016();

fotosAikidoFestijn2016();
		
nieuwsitemLink("2016-02-22_Hyoho_Niten_Ichi-ryu_en_Miyamoto_Musashi.html", "Hyoho Niten Ichi ryu en Miyamoto Musashi");

nieuwsitemLink("2015-05-20_Zomerschool_ter_gelegenheid_van_50_jaar_Aikikai_Australia.html", "Zomerschool ter gelegenheid van 50 jaar Aikikai Australia");

?>


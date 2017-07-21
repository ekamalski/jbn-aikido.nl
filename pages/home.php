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

function shisei() {
?>
<h2>Shisei door Chris de Jongh</h2>
<p>
De redactie van de aikido-nieuwsbrief heeft me gevraagd of ik de principes die in het examencurriculum zijn opgenomen zou willen bespreken. Dat doe ik natuurlijk met plezier.
<p>
Het eerste thema dat ik onder de aandacht wil brengen is het begrip houding (shisei in het Japans). Het woord houding heeft in de Nederlandse taal een gelaagdheid: het kan slaan op zowel de fysieke houding als op de attitude en presentie. Dit is in het Japans niet anders. Shisei wordt vertaald als positie, attitude, houding of pose, afhankelijk van de context waarin het woord wordt gebruikt. Het karakter Sugata of Shi betekent vorm of gedaante en het karakter Ikioi of Sei representeert kracht, levendigheid of energie. Shisei wordt samengesteld uit deze twee karakters en draagt beide betekenissen in zich. Shisei betekent dus niet alleen een juiste fysieke houding, maar ook een levendige en energieke presentie.
<p> 
Maar hoe verwerf je deze houding, iets waar we vanaf het begin dat we aikido beoefenen aan werken? Het eerste wat je moet doen is het ordenen van je fysieke houding, de container van je energie. Hiervoor strek je eerst uit alsof je je lichaam vanuit je voeten via je kruin naar de hemel richt, zonder dat dit op een militaire houding lijkt. Je staat actief en goed verticaal uitgelijnd. De schouders zijn ontspannen, er is een lichte druk in de onderbuik en de lage rug is licht afgevlakt, de aandacht en energie is geconcentreerd in de seika tanden. Het hele lichaam is ontspannen en kalm.
<p> 
Het volgende citaat komt uit de Gorin No Sho, een tekst geschreven door Miyamoto Musashi in 1643. Het behandelt de houding bij de beoefening van budo.
<p>
"The face is calm, neither turned up nor down, nor to any side, the eyes closed lightly, no movements of the ocular globes are shown, the forehead is without any wrinkle, the eyebrows are lightly pulled up, the bridge of the nose is straight, without advancing the chin to much, the neck is also straight, the cervical vertebrae are full of power. Beneath the falling shoulders, the body is perfectly relaxed, the vertebral column is in place, the buttocks are flexed; the knees down to the toes rely strongly to the ground, the hips aren't turned in a spiral, the stomach is firmly round."&nbsp;<span style="color: red;">&sup1;</span>
<p>
Er zijn diverse subcomponenten die zorgen dat de houding optimaal is. De blik wordt gericht daar waar de actie is (me-tsuke). De verticale as wordt zodanig georganiseerd dat er een minimale inspanning nodig is om te staan en een taak, zonder voorbereiding, met minimale moeite kan worden uitgevoerd (sei-chu-sen). De adem is afgestemd op de actie (ko-kyu-ho). De mentale instelling is erop gericht niet gehecht te raken (mu-ga-mu-shin). In aikido noemen we deze soepele en uitgebalanceerde houding san-ka-ku-tai.
<p>
[1] The book of five rings, translated by William Scott Wilson
<?php 
}
// fotoLocalhostOnly();

shisei();

aikidoFestijnAfterMovie();


fotosAikidoFestijn2017();

fotosFukakusa2016();

fotosAikidoFestijn2016();

nieuwsitemLink("2016-02-22_Hyoho_Niten_Ichi-ryu_en_Miyamoto_Musashi.html", "Hyoho Niten Ichi ryu en Miyamoto Musashi");



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

shisei();

aikidoFestijnAfterMovie();


fotosAikidoFestijn2017();

fotosFukakusa2016();

fotosAikidoFestijn2016();
		
nieuwsitemLink("2016-02-22_Hyoho_Niten_Ichi-ryu_en_Miyamoto_Musashi.html", "Hyoho Niten Ichi ryu en Miyamoto Musashi");

nieuwsitemLink("2015-05-20_Zomerschool_ter_gelegenheid_van_50_jaar_Aikikai_Australia.html", "Zomerschool ter gelegenheid van 50 jaar Aikikai Australia");

?>


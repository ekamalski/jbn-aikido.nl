<?php

require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/include/textlib.php");
require_once(DOCROOT."/fotoalbums/include.php");

function stageX($leraren, $datum, $lokatie, $txt1, $ref=NO_FLYER) {
	if (!isDatumInHetVerleden($datum)) {
		h2($leraren, $datum, $lokatie);
		print("$txt1\n");
		if ($ref != NO_FLYER) {
			print("De details zijn te vinden in de <a href='events/$ref'>flyer</a>\n");
		}
		
		hr();
	}
}
// <iframe width="560" height="315" src="https://www.youtube.com/embed/nglOZsakmcQ" frameborder="0" allowfullscreen></iframe>
?>
<h2>Aftermovie tweede editie van het JBN aikidofestijn. </h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/fifZisV8yik" frameborder="0" allowfullscreen></iframe>
<br>Op zondag 8 januari 2017 organiseerde de Nationale Commissie Aikido 
<br>de tweede editie van het JBN aikidofestijn. 
<br>Gefilmed en gemonteerd door: G&aacute;bor J&aacute;nosi
<hr>
<?php
stage(IAS, mar(2017, 25, 26), AMSTELVEEN, IAS_T,
		formatText(
				"Zaterdag: 13.00 - 17.00",
				"Zondag:   10.00 - 14.45",
				EMPTY_LINE,
				LOKATIE,
				AMSTELVEEN_L,
				EMPTY_LINE,
				"JBN-leden 15 euro per dag 25 euro voor twee dagen",
				"niet-leden 20 euro per dag 35 euro voor twee dagen"
				
				),		
		formatText(
				STAGE_OLV." verschillende Nederlandse leraren",
				"Carel Zappeij 7e dan, Hans Belder 5e dan, Edy Kamalski 5e dan, ",
				"Christiaan Zandt 4e dan en Yvon Mattaar 4e dan"
				),		
		"2017-03-26_ IAS_Amstelveen.pdf"
				);

stage(CLAUDE, apr(2017, 8, 9), HEERENVEEN, CLAUDE_T,
		formatText(
				STAGE_OLV,
				CLAUDE,
				EMPTY_LINE,
				"Zaterdag: 15.00 - 18.00",
				"Zondag:   09.00 - 12.00",
				EMPTY_LINE,
				LOKATIE,
				HEERENVEEN_L,
				EMPTY_LINE,
				STIJL_AIKIKAI
				),
		 		formatText(
"Weekend&sup1  35 euro ",
"Dagdeel&sup1  20 euro",
"Dagdeel (-16 jaar) 5 euro",
"1) Inclusief 5 euro korting voor JBN-leden"
				 				),
		"2017-04-09_Claude_Heerenveen.pdf"
		);
examens(apr(2017, 23), AMERSFOORT,
		formatText(
				"Van 9.00 tot 12.00",
				EMPTY_LINE,
				LOKATIE,
				AMERSFOORT_L
				)
		);
?>
<h2>Fotos aikidofestijn 2017</h2>
<div style='white-space: nowrap;'>
<a target="_blank" href="https://www.dropbox.com/sh/gjefclkb6bjxfww/AADusGhYoqckVBNf7Q4ijh3ga?preview=AikidoFestijn_01_2017_224.jpg"><img src="fotoalbums/2017_aikidofestijn/AikidoFestijn_01_2017_224.jpg" width=300 height=200></a>
&nbsp;&nbsp;
<a target="_blank" href="https://www.dropbox.com/sh/gjefclkb6bjxfww/AADusGhYoqckVBNf7Q4ijh3ga?preview=AikidoFestijn_01_2017_676.jpg"><img src="fotoalbums/2017_aikidofestijn/AikidoFestijn_01_2017_676.jpg" width=300 height=200></a>
<br><br><a target="_blank" class="btn btn-default" href="https://www.dropbox.com/sh/gjefclkb6bjxfww/AADusGhYoqckVBNf7Q4ijh3ga?dl=0">Link naar alle aikidofesteijn 2017 foto's</a>
</div>
<hr>
<?php
stageX(FUKAKUSA, may(2017, 16), HEERHUGOWAARD,
		formatText(
				LOKATIE, HEERHUGOWAARD_L				
				)
);

stage(FUKAKUSA, may(2017, 17), HEERHUGOWAARD, FUKAKUSA_T,
		formatText(
				STAGE_OLV, FUKAKUSA,
				EMPTY_LINE,
				LOKATIE, HEERHUGOWAARD_L,
				EMPTY_LINE,
				"Woensdag: 20.15 - 21.45",
				EMPTY_LINE,
				"Kosten: 20 euro"
				),
		NO_TEXT2, // formatText(""),
		"2017-05-17_Fukakusa_Heerhugowaard.jpg"
		);

stage(FUKAKUSA, may(2017, 18), AMSTELVEEN, FUKAKUSA_T,
		formatText(
				STAGE_OLV,
				FUKAKUSA,
				EMPTY_LINE,
				LOKATIE,
				AMSTELVEEN_L,
				EMPTY_LINE,
				"Donderdag: 19.30 - 21.00",
				EMPTY_LINE,
				"Kosten: 15 euro"
				),
		NO_TEXT2, // formatText(""),
		"2017-05-18_Fukakusa_Amstelveen.pdf"
		);

stageX(FUKAKUSA, may(2017, 19), HEERHUGOWAARD,
		formatText(
				LOKATIE, HEERHUGOWAARD_L
				)
		);
stage(FUKAKUSA, may(2017, 20, 21), EINDHOVEN, FUKAKUSA_T,
		formatText(
				STAGE_OLV,
				FUKAKUSA,
				EMPTY_LINE,
				"Zaterdag: 14.00 - 17.00",
				"Zondag:   10.00 - 13.00",
				EMPTY_LINE,
				LOKATIE,
				EINDHOVEN_L,
				EMPTY_LINE,
				STIJL_AIKIKAI
				),
		
		formatText(
				"Kosten per dag: 30 euro",
				"Gehele stage: 55 euro",
				"",
				"Deze stage is in samenwerking tot stand gekomen tussen JBN Aikido en Aikidoschool Ando,",
				"ter gelegenheid van het 15-jarig jubileum van Ando. "
				),
		"2017-05-21_Fukakusa_Eindhoven.pdf"
		);

		
nieuwsitemLink("2016-02-22_Hyoho_Niten_Ichi-ryu_en_Miyamoto_Musashi.html", "Hyoho Niten Ichi ryu en Miyamoto Musashi");

homepagefotosstagefukakusa();
hr();

stage(CLAUDE, totEnMet("6", jul(2016, 10)), STROE, CLAUDE_T, 
		formatText(
				"Zomerschool o.l.v.",
				CLAUDE,
				EMPTY_LINE,
				LOKATIE,
				STROE_L,
				EMPTY_LINE,
				STIJL_AIKIKAI
		), 
		NO_TEXT2, "2016-07-06_10_aikido_zomerschool.pdf");

nieuwsitemLink("2015-05-20_Zomerschool_ter_gelegenheid_van_50_jaar_Aikikai_Australia.html", "Zomerschool ter gelegenheid van 50 jaar Aikikai Australia");

?>


<?php

require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/include/textlib.php");
require_once(DOCROOT."/fotoalbums/include.php");

function stageX($leraren, $datum, $lokatie, $txt1) {
	if (!isDatumInHetVerleden($datum)) {
		h2($leraren, $datum, $lokatie);
		print("$txt1\n");
		hr();
	}
}

stage(AIKIDOFESTIJN, jan(2017, 8), ARNHEM_PAPENDAL, NO_T,
		formatText(
                "10.00 - 16.15",
				"Sportcentrum Papendal",
				ARNHEM_PAPENDAL_L,
				EMPTY_LINE,
				"<iframe width='560' height='315' src='https://www.youtube.com/embed/WaiPqU4p4ls' frameborder='0' allowfullscreen></iframe>",
				"Video: Gabor Janosi",
				EMPTY_LINE,
				"3 stijlen",
				"aiki-budo, aikikai aikido, ki-aikido",
				EMPTY_LINE,
				"16 lessen",
				"4x1 uur les, 4 trainingen tegelijk op 4 matten,",
				"4x aikikai aikido, 4x aiki-budo, 3x ki-aikido, 1x judo-kata"
				),
		formatText(
				"16 leraren"
				,"Ad Hoogendam, Ad van Dongen, Carel Zappeij, Carool Janssen,"
				,"Chris de Jongh, Eugène du Long, Harry Kat, Koos de Graaf, Marco"
				,"van Katwijk, Pierre Geraedts, Rob Breedveld, Tessa Huiskamp,"
				,"Teun Tromp, Toby Voogels, Ton Zwalve, Wil Lüschen"
				,EMPTY_LINE
				,"2 demonstraties"
				,"ju-no-kata en mugai ryu iai hyodo"
				,EMPTY_LINE
				,"<a href='events/2017-01-08_poster_programma_aikidofestijn.pdf'>Poster programma aikidofestijn</a>"
				,"<a href='events/2017-01-08_programmaboekje_aikidofestijn.pdf'>Programmaboekje aikidofestijn</a>"
				,EMPTY_LINE
				,"JBN-leden: <a target='_blank' href='https://survey.enalyzer.com/?pid=p7gid6km'>voorinschrijving</a> 25 euro aan de zaal 30 euro"
				,"niet-leden: <a target='_blank' href='https://survey.enalyzer.com/?pid=p7gid6km'>voorinschrijving</a> 30 euro aan de zaal 35 euro"
				,EMPTY_LINE
				,"<a target='_blank' href='https://survey.enalyzer.com/?pid=p7gid6km'>Voorinschrijven</a> bespaart je 5 euro en bespoedig je de toegang tot het aikidofestijn."
				),
		"2017-01-08_aikidofestijn.pdf"
		);

stage(PIERRE, nov(2016, 12), WIJK_BIJ_DUURSTEDE, PIERRE_T,
	formatText(
		STAGE_OLV,
		PIERRE,
		EMPTY_LINE,
		"Zaterdag: 14.00 - 17.00",
		EMPTY_LINE,
		LOKATIE,
		WIJK_BIJ_DUURSTEDE_L,
		EMPTY_LINE,
		STIJL_AIKIKAI
	),
	formatText(
		"JBN leden: 20 euro,",
		"niet-leden: 25 euro"
	),
	"2016-11-12_pierre.pdf"
);	

stage(LOUIS, feb(2017, 18, 19), AMSTELVEEN, LOUIS_T,
		formatText(
				STAGE_OLV,
				LOUIS,
				EMPTY_LINE,
				"Zaterdag: 14.00 - 17.00",
				"Zondag:   10.00 - 13.00",
				EMPTY_LINE,
				LOKATIE,
				AMSTELVEEN_L,
				EMPTY_LINE,
				STIJL_AIKIKAI
				),
 		formatText(
 				"Kosten per dag: 15 euro",
 				"Gehele stage: 25 euro"
 				),
		"2017-02-19_stage_louis_van_thieghem.pdf"
		);

stage(CLAUDE, mar(2017, 11, 12), OOSTERHOUT, CLAUDE_T,
		formatText(
				STAGE_OLV,
				CLAUDE,
				EMPTY_LINE,
				"Zaterdag: 15.00 - 18.00",
				"Zondag:   09.00 - 12.00",
				EMPTY_LINE,
				LOKATIE,
				OOSTERHOUT_L,
				EMPTY_LINE,
				STIJL_AIKIKAI
				),
		NO_TEXT2,
// 		formatText(
// 				"Kosten per dag: 25 euro",
// 				"Gehele stage: 45 euro"
// 				),
		"2017-03-12_claude.pdf"
		);

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

examens(apr(2017, 23), AMERSFOORT,
		formatText(
				"Van 9.00 tot 12.00",
				EMPTY_LINE,
				LOKATIE,
				AMERSFOORT_L
				)
		);

stageX(FUKAKUSA, may(2017, 16, 17), HEERHUGOWAARD,
		formatText(
				LOKATIE, HEERHUGOWAARD_L				
				)
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


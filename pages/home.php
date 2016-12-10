<?php

require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/include/textlib.php");
require_once(DOCROOT."/fotoalbums/include.php");



stage(AIKIDOFESTIJN, jan(2017, 8), PAPENDAL, NO_T,
		formatText(
                "10.00 - 16.15",
				"Sportcentrum Papendal",
				PAPENDAL_L,
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

examens(nov(2015, 13), LELYSTAD,
		formatText(
				"Van 9.00 tot 12.00",
				EMPTY_LINE,
				LOKATIE,
				LELYSTAD_L,
				EMPTY_LINE,
				"De nationale graden commissie gaat de aankomende examens",
				"werken met de vernieuwde <a href='pdfs/aikikai_aikido_dan-graad_curriculum.pdf'>exameneisen</a>."
				)
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
		"2016-02-19_stage_louis_van_thieghem.pdf"
		);

stage(CLAUDE, mar(2017, 11, 12), LOKATIE_NNB, CLAUDE_T,
		formatText(
				STAGE_OLV,
				CLAUDE,
				EMPTY_LINE,
				"Zaterdag: 14.00 - 14.00",
				"Zondag:   10.00 - 13.00",
				EMPTY_LINE,
//				LOKATIE,
//				NIEUWEGEIN_L,
				EMPTY_LINE,
				STIJL_AIKIKAI
				),
		NO_TEXT2,
// 		formatText(
// 				"Kosten per dag: 25 euro",
// 				"Gehele stage: 45 euro"
// 				),
		NO_FLYER
		);

stage(FUKAKUSA, feb(2017, 18, 19), VEGHEL, FUKAKUSA_T,
		formatText(
				STAGE_OLV,
				FUKAKUSA,
				EMPTY_LINE,
				"Zaterdag: 14.00 - 17.00",
				"Zondag:   10.00 - 13.00",
				EMPTY_LINE,
				LOKATIE,
				VEGHEL_L,
				EMPTY_LINE,
				STIJL_AIKIKAI
				),
		NO_TEXT2,
		// 		formatText(
				// 				"Kosten per dag: 25 euro",
				// 				"Gehele stage: 45 euro"
				// 				),
		NO_FLYER
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


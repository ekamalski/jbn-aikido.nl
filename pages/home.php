<?php

require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/include/textlib.php");
require_once(DOCROOT."/fotoalbums/include.php");



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
		
stage(TIKI, nov(2016, 26, 27), OOSTERHOUT, TIKI_T,
		formatText(
				STAGE_OLV,
				TIKI,
				EMPTY_LINE,
				"Zaterdag: 15.00 - 18.00",
				"Zondag:   10.00 - 13.00",
				EMPTY_LINE,
				LOKATIE,
				OOSTERHOUT_L,
				EMPTY_LINE,
				STIJL_AIKIKAI
				),
		formatText(
				"Kosten per dag: 25 euro",
				"Gehele stage: 45 euro"
				),
		"2016-11-27_tiki.pdf"
		);

stage(ROINEL, nov(2016, 26), NIEUWEGEIN, ROINEL_T,
		formatText(
				STAGE_OLV,
				ROINEL,
				EMPTY_LINE,
				"14.00 - 17.00",
				EMPTY_LINE,
				LOKATIE,
				NIEUWEGEIN_L,
				EMPTY_LINE,
				STIJL_AIKIBUDO
				),
		formatText(
				"Kosten per dag: 25 euro",
				"Gehele stage: 35 euro"
				),
		"2016-11-26_roinel.pdf"
		);

stage(ROINEL, nov(2016, 27), VIANEN, ROINEL_T,
		formatText(
				STAGE_OLV,
				ROINEL,
				EMPTY_LINE,
				"10.00 - 13.00",
				EMPTY_LINE,
				LOKATIE,
				VIANEN_L,
				EMPTY_LINE,
				STIJL_AIKIBUDO
				),
		formatText(
				"Kosten per dag: 25 euro",
				"Gehele stage: 35 euro"
				),
		"2016-11-26_roinel.pdf"
		);

stage(AIKIDOFESTIJN, jan(2017, 8), PAPENDAL, AIKIDOFESTIJN_T,
		formatText(
                "10.00 - 16.15",
				"Sportcentrum Papendal",
				PAPENDAL_L,
				EMPTY_LINE,
				"3 stijlen",
				"aiki-budo, aikikai aikido, ki-aikido",
				EMPTY_LINE,
				"16 lessen",
				"4x1 uur les, 4 trainingen tegelijk op 4 matten,",
				"4x aikikai aikido, 4x aiki-budo, 3x ki-aikido, 1x judo-kata"
				),
		formatText(
				"16 leraren",
				"Ad Hoogendam, Ad van Dongen, Carel Zappeij, Carool Janssen,",
				"Chris de Jongh, Eugène du Long, Harry Kat, Koos de Graaf, Marco",
				"van Katwijk, Pierre Geraedts, Rob Breedveld, Tessa Huiskamp,",
				"Teun Tromp, Toby Voogels, Ton Zwalve, Wil Lüschen",
				EMPTY_LINE,
				"2 demonstraties",
				"ju-no-kata en mugai ryu iai hyodo",
				EMPTY_LINE,
				"JBN-leden: voorinschrijving 25 euro aan de zaal 30 euro",
				"niet-leden: voorinschrijving 30 euro aan de zaal 35 euro"
				),
		"2017-01-08_aikidofestijn.pdf"
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


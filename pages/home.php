<?php

require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/include/textlib.php");

examens(apr(2016, 24), LELYSTAD,
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

stage(FUKAKUSA, may(2016, 21, 22), HAARLEM, FUKAKUSA_T,
		formatText(
				STAGE_OLV,
				FUKAKUSA,
				EMPTY_LINE,
				"Zaterdag: 14.00 - 16.30",
				"Zondag: 10.00 - 12.30",
				EMPTY_LINE,
				LOKATIE,
				HAARLEM_L,
				EMPTY_LINE,
				STIJL_AIKIKAI
		),
		formatText(
				"Prijs JBN leden/niet leden:",
				"25 euro/30 euro per dag",
				"45 euro/55 euro beide dagen"
				),
		"2016-05-21_22_fukakusa.pdf");

        
stage(CURTIS, may(2016, 21, 22), HELMOND, CURTIS_T,
		formatText(
				STAGE_OLV,
				CURTIS,
				EMPTY_LINE,
				"Zaterdag:",
				"10.00 - 12.00 : Ki - Aikido",
				"14.00 - 16.00 : Ki - Aikido",
				"16.00 - 17.00 : Dan Grades",
				EMPTY_LINE,
				"Zondag:",
				"10.00 - 12.00 : Misogi, Jo/ Bokken Class",
				"14.00 - 16.00 : Ki - Aikido Class, Q&amp;A"
		),
		formatText(
				LOKATIE,
				HELMOND_L,
				EMPTY_LINE,
				STIJL_KI_AIKIDO,
				"Prijs JBN leden/niet leden:",
				"13 euro/14 euro per uur",
				"100 euro/110 euro beide dagen"
				),
		"2016-05-21_22_curtis.pdf");
		
stage(BENNEDETTI, jun(2016, 25, 26), VEGHEL, BENNEDETTI_T,
		formatText(
				STAGE_OLV,
				BENNEDETTI,
				EMPTY_LINE,
				"Zaterdag: 15.00 - 18.00",
				"Zondag: 10.00 - 13.00",
				EMPTY_LINE,
				LOKATIE,
				VEGHEL_L,
				EMPTY_LINE,
				STIJL_AIKIKAI
		),
		NO_TEXT2,
		NO_FLYER);	

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
		NO_TEXT2, NO_FLYER);

nieuwsitemLink("2016-02-22_Hyoho_Niten_Ichi-ryu_en_Miyamoto_Musashi.html", "Hyoho Niten Ichi ryu en Miyamoto Musashi");
nieuwsitemLink("2015-05-20_Zomerschool_ter_gelegenheid_van_50_jaar_Aikikai_Australia.html", "Zomerschool ter gelegenheid van 50 jaar Aikikai Australia");
?>


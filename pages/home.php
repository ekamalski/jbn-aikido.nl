<?php

require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/include/textlib.php");


// nieuwsitem("Nieuwe aikikai aikido dan-graad examen eisen", "2016-04-24_Nieuwe_aikikai_aikido_dan-graad_examen_eisen.html");


stage(CLAUDE, apr(2016, 9, 10), DEN_HAAG, CLAUDE_T,
		formatText(
				STAGE_OLV,
				CLAUDE." 7de dan",
				EMPTY_LINE,
				"Zaterdag: 15.00 - 18.00",
				"Zondag: 9.00 - 12.00",
				EMPTY_LINE,
				"Prijs:",
				"20 euro per dag",
				EMPTY_LINE,
				STIJL_AIKIKAI
				),
		formatText(
				"Lokatie:",
				DEN_HAAG_L
				),
		"2016-04-10_claude.pdf");


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

stage(IAS, "30 april en ".may(2016, 1), WAGENINGEN, IAS_T,
		formatText(
				STAGE_OLV,
				CAREL,
				"Hans Belder",
				"en anderen",
				EMPTY_LINE,
				LOKATIE,
				WAGENINGEN_L,
				EMPTY_LINE,
				STIJL_AIKIKAI
				
		),
        "Wegwerkzaamheden op A12 afslag 25 Oosterbeek",
        "2016-05-01_ias.pdf"
);


stage(FUKAKUSA, may(2016, 21, 22), HAARLEM, FUKAKUSA_T,
		formatText(
				STAGE_OLV,
				FUKAKUSA,
				EMPTY_LINE,
				"Zaterdag: 14.00 - 16.30",
				"Zondag: 10.00 - 12.30",
				EMPTY_LINE,
				"Lokatie:",
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

stage(FUKAKUSA, "17 mei tot en met ".may(2016, 20), HEERHUGOWAARD, NO_T, "Overdag", NO_TEXT2, "2016-05-17_20_fukakusa.jpg");
stage(FUKAKUSA, may(2016, 18), HEERHUGOWAARD, NO_T, "'s Avonds 20.15 - 21.45", NO_TEXT2, "2016-05-18_fukakusa.jpg");
stage(FUKAKUSA, may(2016, 19), AMSTELVEEN, NO_T, NO_TEXT1, NO_TEXT2, "2016-05-19_fukakusa.pdf");
        
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
				"Lokatie:",
				HELMOND_L,
				EMPTY_LINE,
				STIJL_KI_AIKIDO,
				"Prijs JBN leden/niet leden:",
				"13 euro/14 euro per uur",
				"100 euro/110 euro beide dagen"
				),
		"2016-05-21_22_curtis.pdf");
				
nieuwsitemPdfLink("2015-01-07_English_Questions_Curtis_sensei.pdf", "Interview met Curtis sensei", "curtis_t.jpg");

nieuwsitemPdfLink("2015-01-07_English_Questions_Shaner_sensei.pdf", "Interview met Shaner sensei", "shaner_t.jpg");

?>


<?php

require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/include/textlib.php");
require_once(DOCROOT."/fotoalbums/include.php");

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

homepagefotosstagefukakusa();

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
		"Kosten: 20 euro per dag",
		"2016-06-25_26_benedetti.pdf");	

nieuwsitemLink("2016-02-22_Hyoho_Niten_Ichi-ryu_en_Miyamoto_Musashi.html", "Hyoho Niten Ichi ryu en Miyamoto Musashi");

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


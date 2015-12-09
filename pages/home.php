<?php

require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/include/textlib.php");



stage("Groot aikidofestijn", jan(2016, 31), PAPENDAL, "festijn_t.jpg",
		formatText(
				"10.00 - 16.00",
				EMPTY_LINE,
				"2 demonstraties",
				"3 stijlen",
				"15 leraren",
				"16 lessen",
				EMPTY_LINE,
				"Lokatie:",
				PAPENDAL_L
		),
		formatText(
				"Prijs:",
				"30 euro jbn leden",
				"35 euro niet jbn leden"
		),
		"2016-01-31_aikidofestijn.pdf"
);

stage(CLAUDE, feb(2016, 20, 21), HAARLEM, CLAUDE_T,
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
				"Stijl: Aikikai aikido"
				),
		formatText(
				"Lokatie:",
				HAARLEM_L
				),
		"");

duoStage(PIERRE." en ".CAREL, mar(2016, 13), WIJK_BIJ_DUURSTEDE,
		PIERRE_T, 
		formatText(
				"10.00 - 13.00",
				EMPTY_LINE,
				STAGE_OLV,
				PIERRE." 7de dan"." en",
				CAREL." 7de dan",
				EMPTY_LINE,
				"Lokatie: ",
				WIJK_BIJ_DUURSTEDE_L,
				EMPTY_LINE,
				"Stijl: Aikikai aikido"
				), 
		CAREL_T, 
		formatText(
				"Prijs:",
				"20 euro jbn leden",
				"25 euro niet jbn leden"
				),
		"2016-03-13_7dan_stage.pdf"
		);



nieuwsitemPdfLink("2015-01-07_English_Questions_Curtis_sensei.pdf", "Interview met Curtis sensei", "curtis_t.jpg");

nieuwsitemPdfLink("2015-01-07_English_Questions_Shaner_sensei.pdf", "Interview met Shaner sensei", "shaner_t.jpg");

?>


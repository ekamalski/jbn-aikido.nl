<?php

require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/include/textlib.php");


stage(TIKI, nov(2015, 28, 29), OOSTERHOUT, TIKI_T,
		formatText(
				STAGE_OLV,
				TIKI,
				EMPTY_LINE,
				"zaterdag: 15.00 - 18.00",
				"zondag: 10.00 -13.00",
				EMPTY_LINE,
				"Lokatie:",
				OOSTERHOUT_L,
				EMPTY_LINE,
				STIJL_AIKIKAI	
		),	
		formatText()
);


stage("Groot aikidofestijn", jan(2016, 31), PAPENDAL, "festijn_t.jpg",
		formatText(
				"zondag: 10.00 - 16.00",
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
		)
);

stage(CLAUDE, oct(2015, 10, 11), SITTARD, CLAUDE_T,
formatText(
"Stage o.l.v.",
CLAUDE,
EMPTY_LINE,		
"Zaterdag: 15.00 - 18.00",
"Zondag: 9.00 - 12.00",
EMPTY_LINE,
"Kosten:",
"20 euro per dag",
"35 euro voor de hele weekend"		
),
formatText(
"Lokatie:",
"Dojo budo ryu Zittard",
SITTARD_L
),
"2015-10-11_claude.jpg");


nieuwsitemPdfLink("2015-01-07_English_Questions_Curtis_sensei.pdf", "Interview met Curtis sensei", "curtis_t.jpg");

nieuwsitemPdfLink("2015-01-07_English_Questions_Shaner_sensei.pdf", "Interview met Shaner sensei", "shaner_t.jpg");

?>


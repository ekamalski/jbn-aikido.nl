<?php

require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/include/textlib.php");

stage(CURTIS, may(2015, 9, 10), HELMOND, CURTIS_T,
brString(HELMOND_L)
.brString("")
.brString("Zaterdag: 10.00 - 17.00 ")
.brString("Zondag: 9.00 - 16.00")
.brString("")
.brString("Stijl: Ki aikido")
);

stage(CLAUDE, jul(2015, 8, TOT_EN_MET, 13), STROE, CLAUDE_T,
formatText(
	STROE_L,
	EMPTY_LINE,
	"De lessen met Claude Pellerin zijn",
	"Woensdag 8 juli 15.00-18.00 uur",
	"Donderdag 9 juli t/m zaterdag 11 juli",
	"  09.30-12.00 uur en 16.00-18.00 uur",
	"Zondag 12 juli	 09.00-11.30 uur",
	EMPTY_LINE,
	STIJL_AIKIKAI,
	NCA_GEORGANISEERD			
),
formatText(
	"Zaterdag 11 juli 12.00-13.00 uur, Vragenuur NCA",
	"De Nationale Commissie Aikido nodigt je graag uit om zaterdag vragen te stellen",
	"en feedback te geven. Het NCA geeft ook een korte terugblik op het afgelopen jaar.",
	EMPTY_LINE,
	"Er is een ochtend training, aikido voor kinderen, een Sayonara-party.",
	"Kijk hiervoor in de flyer. In de flyer zijn ook de prijzen te vinden."
),
"2015-07-13_Aikido_Zomerschool.pdf"
);

stage(FUKAKUSA, sep(2015, 25, TOT_EN_MET, 27), "Brussel", FUKAKUSA_T,
formatText(
	"FEA/AEF stage met Fukakusa shihan",
	"en hoog gegradueerden",
	EMPTY_LINE,
	"Lokatie: ",
	"Hall des sports",
	"Campus Erasme",
	"Route de Lennik 808",
	"B-1070 BRUXELLES"
),
NO_TEXT2,
"2015-09-27_Fukakusa_Brussel.pdf"
);

nieuwsitemPdfLink("2015-01-07_English_Questions_Curtis_sensei.pdf", "Interview met Curtis sensei", "curtis_t.jpg");

nieuwsitemPdfLink("2015-01-07_English_Questions_Shaner_sensei.pdf", "Interview met Shaner sensei", "shaner_t.jpg");

nieuwspageLink("opleidingen", "2015 - start opleiding aikido leraar niveau 3",
brString("De opleiding van 12 lesdagen gaat van start op 17 september 2015.")
);

?>


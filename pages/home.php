<?php

require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/include/textlib.php");

stage("Geannuleerd", sep(2015, 5), "Examen voorbereidings stage", NO_T,
"Wegens een dubbele boeking van de dojo kan danexamentraining niet doorgaan.<br>"
);

// string $leraren LERAAR string $datum mon(yyyy, dd [, dd |, TOT_EN_MET, dd]) string $lokatie LOCATIE -- LOCATIE_L = street, city 
// string $thumb LERAAR_T (img to: events/${LERAAR_T}.jpg), default: NO_T (no thumb) string $txt1 left from thumb, max:11 lines, default: empty string $txt2 below thumb, default: empty string $ref link to events/${REF}, default: no link
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


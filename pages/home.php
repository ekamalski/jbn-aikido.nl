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

stage(MIMURO, may(2015, 16), WIJK_BIJ_DUURSTEDE, MIMURO_T,
brString(WIJK_BIJ_DUURSTEDE_L)
.brString("")
.brString("14.00 - 17.00")
.brString("")
.brString("Stijl: Aikikai")
.brString("")
.brString("Kosten:")
.brString("20 euro voor JBN leden,")
.brString("25 euro voor niet JBN leden")
,NO_TXT2
,"2015-05-16_Mimuro.pdf"
);

stage(FUKAKUSA, may(2015, 30, 31), GENNEP, FUKAKUSA_T,
brString(GENNEP_L)
.brString("")
.brString("Zaterdag: 14.00 - 17.00 ")
.brString("Zondag: 10.00 - 13.00")
.brString("")
.brString("Stijl: Aikikai")
,NO_TXT2
);

nieuwsitemPdfLink("2015-01-07_English_Questions_Curtis_sensei.pdf", "Interview met Curtis sensei", "curtis_t.jpg");

nieuwsitemPdfLink("2015-01-07_English_Questions_Shaner_sensei.pdf", "Interview met Shaner sensei", "shaner_t.jpg");

nieuwspageLink("opleidingen", "2015 - start opleiding aikido leraar niveau 3",
brString("De opleiding van 12 lesdagen gaat van start op 17 september 2015.")
);

?>


<?php

require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/include/textlib.php");

nieuwspageLink("opleidingen", "2015 - start opleiding aikido leraar niveau 3",
brString("Op 17 januari 2015 is er een startdag aikido leraar niveau 3 voor aspirant cursisten en hun praktijkbegeleiders.")
.brString("De opleiding van 12 lesdagen gaat definitief van start op 17 september 2015.")
);
tagSlash("hr");

nieuwspageLink("jeugdaikido", "2015 - start masterclass jeugdaikido",
brString("De opleiding jeugdaikido is een aanvulling op de opleiding aikidoleraar niveau 3")
.brString("De opleiding van 4 lesdagen start op 21 maart 2015")
);
tagSlash("hr");

stage(MICKAEL, jan(2015, 16, TOT_EN_MET, 18), GENNEP." en ".NIJMEGEN, MICKAEL_T,
brString("Vrijdag:")
.brString(GENNEP_L)
.brString("")
.brString("Zaterdag en zondag")
.brString(NIJMEGEN_L)
);

?>


<?php

require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/include/textlib.php");

stage(CLAUDE, feb(2015, 21, 22), HEERENVEEN, CLAUDE_T,
brString(HEERENVEEN_L)
.brString("")
.brString("Zaterdag 15.00 - 18.00")
.brString("Zondag 9.00 - 12.00")
.brString("11.00-13.00 uur splitsing")
.brString("")
.brString("Stijl: Aikikai")
.brString("Kosten: 20 euro per dag")
);
hr();


stage(FLOQUET, feb(2015, 28).", ".mar(2015, 1), WIJK_BIJ_DUURSTEDE, FLOQUET_T,
brString(WIJK_BIJ_DUURSTEDE_L)
.brString("")
.brString("Zaterdag 14.00 - 17.00")
.brString("Programma speciaal voor kyu graden,")
.brString("maar yudansha zijn ook welkom")
.brString("Zondag 10.00 - 13.00")
.brString("Programma speciaal voor yudansha,")
.brString("maar kyu graden zijn ook welkom")
.brString("Stijl: Aikibudo")
.brString("Kosten: 20 euro per dag, 30 euro hele weekend")
,""
,"2015-03-01_Stage_Floquet.jpg"
);
hr();

duoStage(PIERRE." en ".CAREL, mar(2015, 7), WIJK_BIJ_DUURSTEDE, PIERRE_T,
brString(WIJK_BIJ_DUURSTEDE_L)
.brString("")
.brString("Zaterdag 14.00 - 17.00")
.brString("Stijl: Aikikai")
.brString("Kosten:")
.brString("20 euro voor JBN leden")
.brString("25 euro voor niet JBN leden")
, CAREL_T
,""
,"2015-03-07_flyer_nl_7e_dan_stage.pdf"
);
hr();

nieuwsitemPdfLink("2015-01-07_English_Questions_Curtis_sensei.pdf", "Interview met Curtis sensei", "curtis_t.jpg");
hr();

nieuwsitemPdfLink("2015-01-07_English_Questions_Shaner_sensei.pdf", "Interview met Shaner sensei", "shaner_t.jpg");
hr();

nieuwspageLink("jeugdaikido", "2015 - start masterclass jeugdaikido",
brString("De opleiding jeugdaikido is een aanvulling op de opleiding aikidoleraar niveau 3")
.brString("De opleiding van 4 lesdagen start op 21 maart 2015")
);
hr();

nieuwspageLink("opleidingen", "2015 - start opleiding aikido leraar niveau 3",
brString("De opleiding van 12 lesdagen gaat van start op 17 september 2015.")
);

?>


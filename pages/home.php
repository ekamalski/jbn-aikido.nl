<?php

require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/include/textlib.php");

stage(CLAUDE, apr(2015, 18, 19), TETERINGEN, CLAUDE_T,
brString(TETERINGEN_L)
.brString("")
.brString("Zaterdag 15.00 - 18.00")
.brString("Zondag 9.00 - 12.00")
.brString("Stijl: Aikikai")
.brString("Kosten: 20 euro per dag, 35 euro hele weekend")
,"Route beschrijving is te vinden op: <a target='_blank' href='http://www.aikido-nantokanaru.nl/index.php?option=com_content&view=article&id=9&Itemid=12'>aikido-nantokanaru.nl</a>"	
,"2015-04-19_Stage_Claude.pdf"
);

stage(IAS, apr(2015, 30)." tot en met ".may(2015, 3), ALLARDSOOG, IAS_T,
brString(ALLARDSOOG_L)
.brString("")
.brString("Meer informatie volgt")
);

nieuwsitemPdfLink("2015-01-07_English_Questions_Curtis_sensei.pdf", "Interview met Curtis sensei", "curtis_t.jpg");

nieuwsitemPdfLink("2015-01-07_English_Questions_Shaner_sensei.pdf", "Interview met Shaner sensei", "shaner_t.jpg");

nieuwspageLink("opleidingen", "2015 - start opleiding aikido leraar niveau 3",
brString("De opleiding van 12 lesdagen gaat van start op 17 september 2015.")
);

?>


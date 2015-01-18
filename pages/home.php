<?php

require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/include/textlib.php");



stage("Sugino Yukihiro sensei", feb(2015, 1), WIJK_BIJ_DUURSTEDE, "yukihiro_t.jpg",
brString(WIJK_BIJ_DUURSTEDE_L)
.brString("")
.brString("Programma:")
.brString("10.00-11.00 uur basis")
.brString("11.00-13.00 uur splitsing")
.brString("")
.brString("kosten 27.50 euro")
,""
,"2015-02-05_Stage_Sugino.pdf"
);
hr();


stage("Sugino Yukihiro sensei", feb(2015, 3, 5), "", NO_T,
brString("20.00-22.00 uur")
.brString("Neem hiervoor contact op met Rob Breedveld")
,""
,"2015-02_05_Stage_Sugino.jpg"
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


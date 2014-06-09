<?php
// require_once(DOCROOT."/pages/dojos.php");

require_once(DOCROOT."/include/textlib.php");


// examens(mar(2014, 2), AMERSFOORT, 
// brString("Vanaf 9,00")
// .brString(AMERSFOORT_L)
// );

// leraren, datum, lokatie, thumb (xxx_t.jpg includes events/xxx_t.jpg), 
// txt1
// txt2
// ref

stage(CLAUDE, jun(2014, 14, 15), HEERENVEEN, CLAUDE_T,
brString("zaterdag, 15:00 - 18:00 uur")
.brString("zondag, 9.00-12.00 uur ")
.brString("")
.brString("20 euro per dag")
.brString("")
.brString(HEERENVEEN_L)
);

stage("Stage jeugd-aikidotrainers", jul(2014, 5), NIEUWEGEIN, NO_T, 
brString("13:00 – 16:00 uur")
.brString("")
.brString("Lesgevers: Toby Voogels, Chris de Jongh, Astrid Spangenberg")
.brString("10 euro")
.brString(NIEUWEGEIN_L)
.brString("")
.brString("Als je van plan bent om mee te doen stuur dan een mailtje naar <span id='secretaris_ncoa'></span>")
, 
"", 
"2015-07-05_stage_jeugd_aikidotrainers.pdf"
);

stage(CLAUDE, jul(2014, 9, TOT_EN_MET, 13), STROE, CLAUDE_T,
brString("Zomerschool")
.brString("")
.brString(STROE_L)
);


?>


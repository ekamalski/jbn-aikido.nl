<?php
// require_once(DOCROOT."/pages/dojos.php");

require_once(DOCROOT."/include/textlib.php");



// leraren, mon(yyyy, d1 [, TOT_EN_MET [, d3] ), lokatie, thumb (xxx_t.jpg includes events/xxx_t.jpg), 
// txt1
// txt2
// ref


stage(CLAUDE, sep(2014, 13, 14), NIJMEGEN, CLAUDE_T,
brString(NIJMEGEN_L)
.brString("")
.brString("Zaterdag 15.00 - 18.00")
.brString("Zondag 9.00 - 12.00")
.brString("")
.brString("Dag 20 euro")
.brString("Weekend 35 euro")
, 
"" // Brede text
, 
"" // Poster
);

stage("Waka sensei", sep(2014, 27, 28), "Zwitserland", "waka_sensei_t.jpg",
brString("Parkstrasse 2, 9000 St.Gallen, Zwitserland")
.brString("")
.brString("Meer informatie is te vinden op")
.brString("de Zwitserse website")
.brString("<a target='_blank' href='http://aikikai-jubilee.ch'>aikikai-jubilee.ch </a>")
.brString("(link opent nieuw venster of tab).")
, 
"" // Brede text
, 
"2014-09-28_waka_sensei.pdf" // Poster
);



examens(oct(2014, 12), LELYSTAD, 
brString("Vanaf 9,00")
.brString(LELYSTAD_L)
);

?>


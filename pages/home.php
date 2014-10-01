<?php
// require_once(DOCROOT."/pages/dojos.php");

require_once(DOCROOT."/include/textlib.php");

examens(oct(2014, 12), LELYSTAD, 
brString("Vanaf 9,00")
.brString(LELYSTAD_L)
);

// leraren, mon(yyyy, d1 [, TOT_EN_MET [, d3] ), lokatie, thumb (xxx_t.jpg includes events/xxx_t.jpg), 
// txt1
// txt2
// ref
stage(MIMURO, nov(2014, 9), ROERMOND, MIMURO_T,
brString("Van 10.00 tot 13.00")
.brString(ROERMOND_L)
.brString("")
.brString("Kosten:")
.brString("10.00 euro voor JBN leden")
.brString("12.50 euro voor niet JBN leden")
,
null,
"2014-11-09_Mimuro_Roermond.jpg");



?>


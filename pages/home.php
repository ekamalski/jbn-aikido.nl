<?php
// require_once(DOCROOT."/pages/dojos.php");

require_once(DOCROOT."/include/textlib.php");

function hr() {
	print("<hr style='color: #FF8800; background-color: #FF8800; height: 3px;'/>\n");
}

nieuwsitemPdfLink("2014-06-15_Evaluatie_seminar_Jeugdaikido_JBN 2014.pdf", "Evaluatie seminar Jeugdaikido 2014");
hr();

// leraren, mon(yyyy, d1 [, TOT_EN_MET [, d3] ), lokatie, thumb (xxx_t.jpg includes events/xxx_t.jpg), 
// txt1
// txt2
// ref
stage("District stage Limburg<br/>".MIMURO, nov(2014, 9), ROERMOND, MIMURO_T,
brString("Van 10.00 tot 13.00")
.brString(ROERMOND_L)
.brString("")
.brString("Kosten:")
.brString("10.00 euro voor JBN leden")
.brString("12.50 euro voor niet JBN leden")
,
null,
"2014-11-09_Mimuro_Roermond.jpg");

hr();

stage("District stage Zuid Nederland<br/>".TIKI, nov(2014, 28, TOT_EN_MET, 30), OOSTERHOUT, TIKI_T,
brString("Vrijdag: 19.00 tot 20.30")
.brString("Iaido")
.brString("Kosten: 10.00 euro")
.brString("")
.brString("Zaterdag: 15.00 tot 18.00")
.brString("Aikido")
.brString("Kosten: 17.50")
.brString("")
.brString("Zondag: 10.00 tot 13.00")
.brString("Aikido")
.brString("Kosten: 17.50")
,
brString("Kosten gehele weekend: 40.00 euro")
.brString("")
.OOSTERHOUT_L
,
"2014-2015_district_zuid_nederland.pdf");


?>


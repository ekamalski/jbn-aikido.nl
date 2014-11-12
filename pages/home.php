<?php
// require_once(DOCROOT."/pages/dojos.php");

require_once(DOCROOT."/include/textlib.php");

function hr() {
	print("<hr/>\n");
}

nieuwspageLink("opleidingen", "2015 - start opleiding aikido leraar A");
hr();

nieuwspageLink("jeugdaikidoleraar", "2015 - start opleiding jeugd aikido leraar");
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


<?php
// require_once(DOCROOT."/pages/dojos.php");

require_once(DOCROOT."/include/textlib.php");



// leraren, mon(yyyy, d1 [, TOT_EN_MET [, d3] ), lokatie, thumb (xxx_t.jpg includes events/xxx_t.jpg), 
// txt1
// txt2
// ref

stage(CURTIS, sep(2014, 6, 7), HELMOND, CURTIS_T,
brString(HELMOND_L)
.brString("")
.brString("Zaterdag:")
.brString("10.00-12.00 Ki-Aikido")
.brString("14.00-16.00 Ki-Aikido")
.brString("16.00-17.00 Dangraden")
.brString("19.00 diner bij Gasterij Mierle")
.brString("")
.brString("Let op: dojo open half uur voor aanvang van de les")
,
brString("Zondag:")
.brString("09.00-10.00 Misogi en Ki-ademhaling")
.brString("10.00-12.00 Jo en Bokken Vraag en antwoord")
.brString("14.00-16.00 Ki-Aikido en Examens")
.brString("")
.brstring("Prijs: betaling vóór 5 september:")
.brstring("Het hele weekend:")
.brstring("110 euro voor niet-dangraadhouders. (JBN-leden 100 euro)")
.brstring("120 euro voor dangraadhouders .(JBN-leden 110 euro)")
.brstring("Deze prijzen zijn inclusief een geheel verzorgde lunch (Brabantse koffietafel)")
.brstring("Het bedrag kunt u overmaken op giro: IBAN: NL20 INGB 0002 5902 39 t.n.v. A.Voogels,")
.brstring("Ten Culen 6, 5706 MC, Helmond; onder vermelding van Stage Curtis Sensei.")
.brstring("Bij betaling aan de deur (geen lunch):")
.brstring("")
.brstring("Het hele weekend:")
.brstring("110 euro voor niet-dangraadhouders.(JBN-leden 100 euro)")
.brstring("120 euro voor dangraadhouders. (JBN-leden 110 euro)")
.brstring("")
.brstring("Alle andere invullingen: 14,00 euro per uur. (JBN-leden 13,00 euro)")
.brstring("Lunch: 10,00 euro")
,
"2014-09-07_chris_curtis.pdf" // Poster
);

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


examens(oct(2014, 12), AMERSFOORT, 
brString("Vanaf 9,00")
.brString(AMERSFOORT_L)
.brstring("Let op: deze gegevens zijn niet definitief.")
);

?>


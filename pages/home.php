<?php

require_once(DOCROOT."/include/taglib.php");
require_once(DOCROOT."/include/textlib.php");



stage("Groot aikidofestijn", jan(2016, 31), PAPENDAL, "festijn_t.jpg",
		formatText(
				"10.00 - 16.00",
				EMPTY_LINE,
				"2 demonstraties",
				"3 stijlen",
				"15 <a href='events/2016-01-31_aikidofestijn_leraren.pdf'>leraren</a>",
				"16 <a href='events/2016-01-31_aikidofestijn_programma.pdf'>lessen</a> ",
				EMPTY_LINE,
				"Lokatie:",
				PAPENDAL_L
		),
		formatText(
				"Prijs:",
				"30 euro jbn leden bij <a target='_blank' title='Voorinschrijving is mogelijk tot vrijdag 29 januari 14.00 uur' href='https://survey.enalyzer.com/?pid=b7kecapa'>voorinschrijving </a>",
				"35 euro jbn leden",
				"40 euro niet jbn leden",
                EMPTY_LINE,
               
                "<a target='_blank' href='https://survey.enalyzer.com/?pid=b7kecapa'>Voorinschrijving </a> is mogelijk tot vrijdag 29 januari 14.00 uur.",
                EMPTY_LINE,
                "<a href='events/2016-01-31_aikidofestijn_programma.pdf'>Programma</a><table border><tr><td> &nbsp; <td> mat 1<br>ki-aikido <td> mat 2<br>aikikai-aikido <td> mat 3<br>aiki-budo <td> mat 4<br>aikikai-aikido",
                "<tr><td> 10.00 <td colspan='4'> welkom en mededelingen",
                "<tr><td> 10.10 <td> Eugène du Long <td> Gijs Schouten <td> Dave Daalmans <td> Carool Janssen",
                "<tr><td> 11.10 <td colspan='4'> demonstratie Hyoho Niten Ichi-ryu / korte pauze",
                "<tr><td> 11.25 <td> Eugène du Long <td> Ad van Dongen <td> Teun Tromp <td> Ton Zwalve",
                "<tr><td> 12.25 <td colspan='4'> grote pauze / lunch",
                "<tr><td> 14.00 <td> Toby Voogels <td> Jan Brand <td> Marco van Katwijk <td> Jan Rusman",
                "<tr><td> 15.00 <td colspan='4'> demonstratie Daito ryu / korte pauze",
                "<tr><td> 15.15 <td> Koos de Graaf <td> Chris de Jongh <td> Rob Breedveld <td> Harry Kat",
                "<tr><td> 16.15 <td colspan='4'> afsluiting / opruimen van de matten",
                "</table>",
                 "<a href='events/2016-01-31_aikidofestijn_leraren.pdf'>Cv's</a> van de leraren"
                
		),
		"2016-01-31_aikidofestijn.pdf"
);

stage(CLAUDE, feb(2016, 20, 21), HAARLEM, CLAUDE_T,
		formatText(
				STAGE_OLV,
				CLAUDE." 7de dan",
				EMPTY_LINE,
				"Zaterdag: 15.00 - 18.00",
				"Zondag: 9.00 - 12.00",
				EMPTY_LINE,
				"Prijs:",
				"20 euro per dag",
				EMPTY_LINE,
				"Stijl: Aikikai aikido"
				),
		formatText(
				"Lokatie:",
				HAARLEM_L
				),
		"");

duoStage(PIERRE." en ".CAREL, mar(2016, 13), WIJK_BIJ_DUURSTEDE,
		PIERRE_T, 
		formatText(
				"10.00 - 13.00",
				EMPTY_LINE,
				STAGE_OLV,
				PIERRE." 7de dan"." en",
				CAREL." 7de dan",
				EMPTY_LINE,
				"Lokatie: ",
				WIJK_BIJ_DUURSTEDE_L,
				EMPTY_LINE,
				"Stijl: Aikikai aikido"
				), 
		CAREL_T, 
		formatText(
				"Prijs:",
				"20 euro jbn leden",
				"25 euro niet jbn leden"
				),
		"2016-03-13_7dan_stage.pdf"
		);



nieuwsitemPdfLink("2015-01-07_English_Questions_Curtis_sensei.pdf", "Interview met Curtis sensei", "curtis_t.jpg");

nieuwsitemPdfLink("2015-01-07_English_Questions_Shaner_sensei.pdf", "Interview met Shaner sensei", "shaner_t.jpg");

?>


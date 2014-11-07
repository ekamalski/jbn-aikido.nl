<h2>Aanmelden/uitschrijven</h2>
Ben je ge&iuml;nteresseerd in de aikido nieuwsbrief meld je dan aan door een mail 
te sturen met onderwerp <span id="ajbna">aanmelden</span>.
<br/>
Wil je je uitschrijven stuur dan een mail met onderwerp <span id="ajbnu">uitschrijven</span>.
<br/><br/>

<?php 

showNieuwbriefArchive();

function showNieuwbriefArchive() {
 	print("<h2>Nieuwsbrief archief</h2>\n");
    print("<ul style='list-style: none; padding-left: 0px;'>\n");	
    
    linkNieuwbrief("2014/oktober");
    linkNieuwbrief("2014/februari");
    linkNieuwbrief("2014/januari");
    
    divider();
    linkNieuwbrief("2013/november");	
    linkNieuwbrief("2013/juni");	
    linkNieuwbrief("2013/mei");	
    linkNieuwbrief("2013/maart");	
    
    print("<ul>");
	
}

function divider() {
	print("<li>&nbsp;");
}

function linkNieuwbrief($text) {
	$ref="/nieuwsbrief/$text/index.html";
	print("<li><a target='_blank' href='$ref' title='Opent nieuw tab ofwindow'>$text</a>");
}
?>
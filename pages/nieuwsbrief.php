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
    /*
     * Remove "?e=39cadf4aaa" van mailchimp link
     * dan staat er "Beste aikido liefhebber"
     */
    linkMailchimp("https://mailchi.mp/78ac5151fc44/jbn-nieuwsbrief-aikido-maart", "2018/maart");
    linkMailchimp("https://mailchi.mp/3cf0fae0c57f/jbn-nieuwsbrief-aikido-december-2017-februari-2018", "2017/december-2018/februari");
	linkMailchimp("https://mailchi.mp/f853a6a57ffe/jbn-nieuwsbrief-april-226285", "2017/oktober-november");	

    linkMailchimp("https://mailchi.mp/d566aaba0798/nca-aikido-nieuwsbrief-juli-augustus-2017", "2017/juli-augustus");
    linkMailchimp("https://us14.campaign-archive2.com/?u=e3d2b31aa8f869e8d903a974c&id=f174e1e084", "2017/mei");
    linkMailchimp("https://us14.campaign-archive2.com/?u=e3d2b31aa8f869e8d903a974c&id=df7c11dc1c", "2017/februari");  
    divider();
    
    linkNieuwbrief("2016/12", "2016/december");
    linkNieuwbrief("2016/11", "2016/november");
    linkNieuwbrief("2016/10", "2016/oktober");
    linkNieuwbrief("2016/09", "2016/september");
    linkNieuwbrief("2016/08", "2016/augustus");
    linkNieuwbrief("2016/07", "2016/juli");
    linkNieuwbrief("2016/06", "2016/juni");
    linkNieuwbrief("2016/05", "2016/mei");	
    linkNieuwbrief("2016/04", "2016/april");
    linkNieuwbrief("2016/03", "2016/maart");
    linkNieuwbrief("2016/02", "2016/februari");
    linkNieuwbrief("2016/01", "2016/januari");
    divider();
    
    linkNieuwbrief("2015/12", "2015/december");
    linkNieuwbrief("2015/11", "2015/november");
    linkNieuwbrief("2015/10", "2015/oktober");
    linkNieuwbrief("2015/09", "2015/september");
    linkNieuwbrief("2015/07", "2015/juli");
    linkNieuwbrief("2015/03", "2015/maart");
    divider();
    
    linkNieuwbrief("2014/december");
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

function linkNieuwbrief($link, $text="") {
	$ref="/nieuwsbrief/$link/index.html";
	if (file_exists(DOCROOT.$ref)) {
    	$text = ($text == "") ? $link : $text;
		print("<li><a class='btn-link' target='_blank' href='$ref' title='Opent nieuw tab ofwindow'>$text</a>");
	}
}

function linkMailchimp($link, $text) {
	print("<li><a class='btn-link' target='_blank' href='$link' title='Opent nieuw tab ofwindow'>$text</a>");
}
?>
<?php 
// -------------------- 2018 --------------------

function aikidofestijnAfterMovie2018() {
tag("h2", "Aftermovie derde editie (2018) van het JBN aikidofestijn.");
print(<<<AIKIDO_FESTIJN_AFTERMOVIE_2018
<a title="Start video" target="_blank" href="https://drive.google.com/file/d/1cwEO5u5PNils6Iy9OI6NDTp8gpVUSSJu/view?usp=sharing">
<img "class='img-x img-responsive' src='fotoalbums/2018_aikidofestijn/AikidoFestijn_III_start_video.jpg' />
</a>
<br>Op zondag 28 januari 2018 organiseerde de Nationale Commissie Aikido 
<br>de derde editie van het JBN aikidofestijn. 
<br>
<br>Tijdens het aikidofestijn reikt de NCA voorzitter, Hans Belder, het
<br>shihan certificaat uit aan Carel Zappeij en Pierre Gereadts.
<br>
<br>Zelf ontving Hans uit de handen van Pierre zijn 6de dan diploma van de Hombu dojo.
<br> 
<br>Gefilmed en gemonteerd door: G&aacute;bor J&aacute;nosi
<hr>
AIKIDO_FESTIJN_AFTERMOVIE_2018
); 
} 

function aikidofestijnAfterMovie2018v() {
    tag("h2", "Aftermovie derde editie (2018) van het JBN aikidofestijn.");
    print(<<<AIKIDO_FESTIJN_AFTERMOVIE_2018_V
<video width="100%" height="100%" poster="videos/2018-aikidofestijn-aftermovie.jpg" controls>
<source src="videos/2018-aikidofestijn-aftermovie.m4v" type="video/mp4">
Your browser does not support the video tag.
</video> 
<br>Op zondag 28 januari 2018 organiseerde de Nationale Commissie Aikido 
<br>de derde editie van het JBN aikidofestijn. 
<br>
<br>Tijdens het aikidofestijn reikt de NCA voorzitter, Hans Belder, het
<br>shihan certificaat uit aan Carel Zappeij en Pierre Gereadts.
<br>
<br>Zelf ontving Hans uit de handen van Pierre zijn 6de dan diploma van de Hombu dojo.
<br> 
<br>Gefilmed en gemonteerd door: G&aacute;bor J&aacute;nosi
<hr>
AIKIDO_FESTIJN_AFTERMOVIE_2018_V
);
} 

function aikidofestijnFotos2018() {
    $dropboxUrl="https://www.dropbox.com/sh/gfuf8xrwo15hm3x/AAAUbfQJorf93q5reuYAEpuxa";
    fotos("Fotos aikidofestijn 2018",
        "$dropboxUrl?preview=AikidoFestijn_III_0326.jpg",
        "fotoalbums/2018_aikidofestijn/thumbs/AikidoFestijn_III_0326.jpg",
        
        "$dropboxUrl?preview=AikidoFestijn_III_2133.jpg",
        "fotoalbums/2018_aikidofestijn/thumbs/AikidoFestijn_III_2133.jpg",
        
        "$dropboxUrl?dl=0",
        "Link naar alle aikidofestijn 2018 foto's"
        );
}
// -------------------- 2017 --------------------

function aikidofestijnAfterMovie2017() { 
tag("h2", "Aftermovie tweede editie (2017) van het JBN aikidofestijn.");
 
tagIframe("width='560' height='315' src='https://www.youtube.com/embed/fifZisV8yik'");  // frameborder='0' allowfullscreen
print(<<<AIKIDO_FESTIJN_AFTERMOVIE_2017
<br>Op zondag 8 januari 2017 organiseerde de Nationale Commissie Aikido 
<br>de tweede editie van het JBN aikidofestijn. 
<br>Gefilmed en gemonteerd door: G&aacute;bor J&aacute;nosi
<hr>
AIKIDO_FESTIJN_AFTERMOVIE_2017
); 
} 

function aikidofestijnFotos2017() {
    $dropboxUrl="https://www.dropbox.com/sh/gjefclkb6bjxfww/AADusGhYoqckVBNf7Q4ijh3ga";
	fotos("Fotos aikidofestijn 2017",
		"$dropboxUrl?preview=AikidoFestijn_01_2017_224.jpg",
		"fotoalbums/2017_aikidofestijn/thumbs/AikidoFestijn_01_2017_224.jpg",
			
		"$dropboxUrl?preview=AikidoFestijn_01_2017_676.jpg",
		"fotoalbums/2017_aikidofestijn/thumbs/AikidoFestijn_01_2017_676.jpg",
	
		"$dropboxUrl?dl=0",
		"Link naar alle aikidofestijn 2017 foto's"
		);
}


// -------------------- 2016 --------------------

function aikidofestijnFotos2016() {
    $dropboxUrl="https://www.dropbox.com/sh/1i0n8snoqrfzqxo/AACdlPNgGfo-UPx7bVCic4g2a";
	fotos("Fotos aikidofestijn 2016",
		"$dropboxUrl?preview=AikidoFestijn_01_0471.jpg",
		"fotoalbums/2016_aikidofestijn/thumbs/AikidoFestijn_01_0471.jpg",

		"$dropboxUrl?preview=AikidoFestijn_02_0054.jpg",
		"fotoalbums/2016_aikidofestijn/thumbs/AikidoFestijn_02_0054.jpg",
	
		"$dropboxUrl?dl=0",
		"Link naar alle aikidofestijn 2016 foto's"			
	);
}
?>

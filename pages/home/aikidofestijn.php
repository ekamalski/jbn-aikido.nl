<?php 
// -------------------- 2018 --------------------

function aikidofestijnAfterMovie2018() {
tag("h2", "Aftermovie derde editie (2018) van het JBN aikidofestijn.");
print(<<<AIKIDO_FESTIJN_AFTERMOVIE_2018
<a title="Start video" target="_blank" href="https://drive.google.com/file/d/1cwEO5u5PNils6Iy9OI6NDTp8gpVUSSJu/view?usp=sharing">
<img "class='img-x img-responsive' src='fotoalbums/2018-aikidofestijn/AikidoFestijn_III_start_video.jpg' />
</a>
<br>Op zondag 28 januari 2018 organiseerde de Nationale Commissie Aikido 
<br>de derde editie van het JBN aikidofestijn. 
<br>Gefilmed en gemonteerd door: G&aacute;bor J&aacute;nosi
<hr>
AIKIDO_FESTIJN_AFTERMOVIE_2018
); 
} 

function aikidofestijnAfterMovie2018Video() {
    tag("h2", "Aftermovie derde editie (2018) van het JBN aikidofestijn.");
    print(<<<AIKIDO_FESTIJN_AFTERMOVIE_2018
<video width="100%" height="100%" poster="fotoalbums/2018-aikidofestijn/AikidoFestijn_III_start_video.jpg" controls>
<source src="https://drive.google.com/open?id=1cwEO5u5PNils6Iy9OI6NDTp8gpVUSSJu" type="video/mp4">
Your browser does not support the video tag.
</video> 
<br>Op zondag 28 januari 2018 organiseerde de Nationale Commissie Aikido
<br>de derde editie van het JBN aikidofestijn.
<br>Gefilmed en gemonteerd door: G&aacute;bor J&aacute;nosi
<hr>
AIKIDO_FESTIJN_AFTERMOVIE_2018
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
	fotos("Fotos aikidofestijn 2017",
		"https://www.dropbox.com/sh/1i0n8snoqrfzqxo/AACdlPNgGfo-UPx7bVCic4g2a?preview=AikidoFestijn_01_0471.jpg",
		"fotoalbums/2017_aikidofestijn/thumbs/AikidoFestijn_01_2017_224.jpg",
			
		"https://www.dropbox.com/sh/1i0n8snoqrfzqxo/AACdlPNgGfo-UPx7bVCic4g2a?preview=AikidoFestijn_02_0054.jpg",
		"fotoalbums/2017_aikidofestijn/thumbs/AikidoFestijn_01_2017_676.jpg",
	
		"https://www.dropbox.com/sh/gjefclkb6bjxfww/AADusGhYoqckVBNf7Q4ijh3ga?dl=0",
		"Link naar alle aikidofestijn 2017 foto's"
		);
}


// -------------------- 2016 --------------------

function aikidofestijnFotos2016() {
	fotos("Fotos aikidofestijn 2016",
		"https://www.dropbox.com/sh/1i0n8snoqrfzqxo/AACdlPNgGfo-UPx7bVCic4g2a?preview=AikidoFestijn_01_0471.jpg",
		"fotoalbums/2016_aikidofestijn/thumbs/AikidoFestijn_01_0471.jpg",

		"https://www.dropbox.com/sh/1i0n8snoqrfzqxo/AACdlPNgGfo-UPx7bVCic4g2a?preview=AikidoFestijn_02_0054.jpg",
		"fotoalbums/2016_aikidofestijn/thumbs/AikidoFestijn_02_0054.jpg",
	
		"https://www.dropbox.com/sh/1i0n8snoqrfzqxo/AACdlPNgGfo-UPx7bVCic4g2a?dl=0",
		"Link naar alle aikidofestijn 2016 foto's"			
	);
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JBN-Aikido</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/aikidou.css"   rel="stylesheet">
<link href='css/jquery.tablesorter.css' rel='stylesheet'/>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.10.2.min.js"></script>
<script src='js/jquery.tablesorter.min.js'></script> 
<script src="js/aikidou.js"></script>
<?php
define("ABSPATH", __DIR__);
define("DOCROOT", __DIR__);
require_once(DOCROOT."/include/rqlib.php");

function _tag($tag, $text) {
    $ANGLE_BR_OPEN=chr(0x3C);
    $ANGLE_BR_CLOSE=chr(0x3E);
    print($ANGLE_BR_OPEN.$tag.$ANGLE_BR_CLOSE.$text.$ANGLE_BR_OPEN."/".$tag.$ANGLE_BR_CLOSE);
}

function includeFile($h1text, $filename) {
    print( _tag("h1", ucfirst(preg_replace("/_/", " ", $h1text)) ));
    require_once($filename);
}

function includeContents() {
    $Q = "\"";
    $page = rqGet("page");
    if ($page != "") {
        $filename = DOCROOT."/pages/$page.php";
        if (is_file($filename)) {
            includeFile($page, $filename);
        } else {
            print(_tag("h2", "De pagina: ${Q}$page${Q} is ${Q}under construction${Q}"));
        }
        return true;
    } else {
        includeFile("Home", DOCROOT."/pages/home.php");
        return true;
    }
}
?>
</head>
<body>
<div id="wrapper">
<center>

<img src="img/banner1000.jpg" alt="banner">
<div class="navbar">
  <div class="navbar-inner">
    <div class="container">

<!-- Begin -->
<ul class="nav">
<li><a href="?">home</a></li>
<li><a href="?page=contact">contact</a></li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        commissies&nbsp;<b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="?page=nca">NCA</a></li>
        <li><a href="?page=ncoa">NCOA</a></li>
        <li><a href="?page=ngca">NGCA</a></li>
    </ul>
</li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        dojos&nbsp;<b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="?page=dojos">dojos</a></li>
        <li><a href="?page=dojo_aanmelden">dojo aanmelden</a></li>
    </ul>
</li>
<li><a href="?page=examens">examens</a></li>
<li><a href="?page=fotos">fotos</a></li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        kalender&nbsp;<b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="?page=kalender">kalender</a></li>
        <li><a href="https://www.google.com/calendar/embed?title=jbn-aikido.nl kalender&showTitle=0&hl=nl&
src=aikidou.nl@gmail.com&color=%23125A12&
src=8m1egbul3qn19ji1dimqstaodo@group.calendar.google.com&color=%23BE6D00&
ctz=Europe%2FAmsterdam" target="_blank">kalender (full screen)</a></li>
        <li><a href="?page=kalender_event">event aanmelden</a></li>
        <li><a href="?page=kalender_hulp">hulp voor kalender</a></li>
    </ul>
</li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        nieuws&nbsp;<b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="?page=nieuws">nieuws</a></li>
        <li><a href="?page=nieuwsbrief">nieuwsbrief</a></li>
    </ul>
</li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        opleidingen&nbsp;<b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="?page=opleidingen">aikido leraar</a></li>
        <li><a href="?page=jeugdaikido">jeugd aikido</a></li>
    </ul>
</li>
<li><a href="?page=organisaties">organisaties</a></li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        stijl&nbsp;<b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="?page=aikibudo">aiki-budo</a></li>
        <li><a href="?page=aikikai_aikido">aikikai</a></li>
        <li><a href="?page=ki_aikido">ki-aikido</a></li>
    </ul>
</li>
</ul><!-- nav -->
    </div>
  </div>
</div> <!-- navbar -->

<div id="contents"> 
<?php if (!includeContents()) { ?>
<!-- -->
<h1> Home </h1>

<h2> Welkom </h2>

Dit is de website van de aikido activiteiten georganiseerd door de NCA, NCGA, NOCA en de districten.
De <a href="?page=kalender">kalender</a> van seizoen 2011-2012 staat op de site en is actueel.

<h2> Voor vragen over danexamens Aikido </h2>

Voor vragen over danexamens Aikido kunt u contact opnemen met 
de afdeling Sportparticipatie (030-7073630, <span id="jjbn"> jbn </span>)

<h2> Contact </h2>

<dl>
<dt> Voorzitter NCA  </dt><dd id="voorzitter"> voorzitter </dd>
<dt> Secretaris NCA  </dt><dd id="secretaris"> secretaris </dd>
<dt> Secretaris NGCA </dt><dd id="secretaris_ngca"> ngca</dd>
<dt> Opleidingen </dt><dd id="secretaris_ncoa"> ncoa</dd>
<dt> Aanmelden </dt><dd id="ajbn"> nieuwsbrief </dd>
<dt> Webmaster </dt><dd id="webmaster"> webm </dd>
</dl>
<?php /* Remark: id="jbn" is already used, do not include here. */ ?>



<?php } ?>

</div><!-- contents -->

<?php
if (rqGet("page")!="fotos" && rqGet("page")!="kalender" && rqGet("page")!="dojos" && rqGet("page")!="organisaties") {?>
<div id="aktiviteiten">
<h1>&nbsp;<!-- Align with left div --></h1>
<h2>Affiliated organisations</h2>
<a target="_blank" title="aikikai.or.jp" href="http://www.aikikai.or.jp"><img src="img/aikikai_or_jp.jpg" alt="aikikai.or.jp" border="0"></a>
<a target="_blank" title="aikido-europe.com" href="http://www.aikido-europe.com"><img width=54 height=54  src="img/aikido_europe_com.png" alt="aikido-europe.com" border="0"></a>
<br/><br/>

<h2>Aktiviteiten</h2>
<iframe
src="https://www.google.com/calendar/embed?hl=nl&amp;
showTitle=0&amp;
showNav=1&amp;
showDate=1&amp;
showPrint=1&amp;
showTabs=0&amp;
showCalendars=0&amp;
showTz=0&amp;
mode=AGENDA&amp;
height=450&amp;
wkst=1&amp;
bgcolor=%23ffffff&amp;
src=aikidou.nl%40gmail.com&amp;color=%23125A12&amp;
src=8m1egbul3qn19ji1dimqstaodo%40group.calendar.google.com&amp;color=%23BE6D00&amp;
ctz=Europe%2FAmsterdam"
style=" border-width:0 "
width="400"
height="450"
frameborder="0"
scrolling="no"></iframe><br/>Legenda:
<br/>Groen gemarkeerde evenementen zijn definitief
<br/>Oranje gemarkeerde evenementen zijn gepland
<br/>[N] Aktiviteit georganiseerd door een nationale commissie
<br/>[D] Aktiviteit georganiseerd door een district commissie
</div><!-- aktiviteiten -->
<?php } ?>

<!-- >div id='trailer' style="">
<a target="_blank" title="Opent nieuw tab of window" href="http://www.aikikai.or.jp"><img src="img/aikikai_or_jp.jpg" alt="aikikai.or.jp" border="0"></a>
<a target="_blank" title="Opent nieuw tab of window" href="http://www.aikikai.or.jp"><img src="img/aikikai_or_jp.jpg" alt="aikikai.or.jp" border="0"></a>
<a target="_blank" title="Opent nieuw tab of window" href="http://www.aikikai.or.jp"><img src="img/aikikai_or_jp.jpg" alt="aikikai.or.jp" border="0"></a>
</div -->

</center>
</div><!-- wrapper -->
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/aikidou.js"></script>
</body>
</html>



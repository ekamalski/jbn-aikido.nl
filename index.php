<!doctype html>
<html>
<head>
<title>JBN Aikido</title>
<style>
div.col-sm-8_ { border: 1px solid red;  border-collapse: collapse; padding: 2px; }
div.col-sm-4_ { border: 1px solid navy; border-collapse: collapse; padding: 2px; }
</style>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet"    href="css/bootstrap/3.3.7/bootstrap.min.css">
<link rel="stylesheet"    href='css/jquery.tablesorter/0.0.0/jquery.tablesorter.css'>

<script src="js/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap/3.3.7/bootstrap.min.js"></script>
<script src='js/jquery.tablesorter/0.0.0/jquery.tablesorter.min.js'></script> 

<?php
define("ABSPATH", __DIR__);
define("DOCROOT", __DIR__);
require_once(DOCROOT."/include/rqlib.php");


/**
 * @param string $tag 
 * @param string $text 
 * @param string $attr optional
 * @return string &lt;tag[ attr]&gt;text&lt;/tag&gt;
 */
function _tag($tag, $text, $attr="") {
    $ANGLE_BR_OPEN=chr(0x3C);
    $ANGLE_BR_CLOSE=chr(0x3E);
    $tagAttr = ($attr == "") ? "$tag" : "$tag $attr"; 
    return("${ANGLE_BR_OPEN}${tagAttr}${ANGLE_BR_CLOSE}${text}${ANGLE_BR_OPEN}/${tag}${ANGLE_BR_CLOSE}\n");
}

function includeFile($h1text, $filename) {
    require_once($filename);
}

function includeExtraRows() {
    $file = DOCROOT."/pages/extra-rows.php";
    if ( file_exists($file) ) {
        require_once($file);
    }
    print("\n");
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


function includeKalender($height, $mode, $showCalendars, $showTabs) {
    print(_tag("iframe", "&nbsp;", "
src='https://www.google.com/calendar/embed?hl=nl&amp;
bgcolor=%23ffffff&amp;
ctz=Europe%2FAmsterdam&amp;
height=$height&amp;
mode=$mode&amp;
showCalendars=$showCalendars&amp;
showDate=1&amp;
showNav=1&amp;
showPrint=1&amp;
showTabs=$showTabs&amp;
showTitle=0&amp;
showTz=0&amp;
src=aikidou.nl%40gmail.com&amp;color=%23125A12&amp;
src=8m1egbul3qn19ji1dimqstaodo%40group.calendar.google.com&amp;color=%23BE6D00&amp;
wkst=2'

frameborder='0'  
height='$height' 
scrolling='no'
style=' border-width:0 ' 
width='100%' 
"));
}

function opleidingAikidoleraar() {
	?>
	<h2>Opleiding aikido leraar</h2>
	Interesse. 
	<br>Ga naar: <a class="btn-link" target="_blank" href="http://jbn.nl/opleidingen">jbn.nl/opleidingen</a>
    voor informatie en aanmelden.
	<hr>
	<?php
}
?>

<?php function navBgColor()    { print("#F47A20"); } ?>
<?php function navTxtColor()   { print("white");  } ?>
<?php function navHoverColor() { print("dimgray");    } ?>

<?php function navStyle() { ?>
body { border-radius: 0; }
 
nav.navbar-inverse 						{ border-color: <?php navBgColor(); ?>; background-color: <?php navBgColor(); ?>;  }

nav.navbar-inverse a.navbar-brand 		{ color: <?php navTxtColor(); ?>;  }
nav.navbar-inverse a.navbar-brand:hover { color: <?php navHoverColor(); ?>;  }

nav.navbar-inverse .navbar-nav > li > a 		{ color: <?php navTxtColor(); ?>; background-color: <?php navBgColor(); ?>  !important }
nav.navbar-inverse .navbar-nav > li > a:hover   { color: <?php navHoverColor(); ?>; }

.navbar-nav > .open > a:focus, 
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav :seleted {
    color:  <?php navHoverColor(); ?>; 
    background-color: <?php navBgColor(); ?>;
}

.dropdown-menu { border-color: <?php navHoverColor();  ?>; border-radius: 0; }  
<?php } ?> 

<?php function nav() { ?>
<nav class="navbar navbar-inverse" style="border-radius: 0px 0px 0px 0px;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="?page=home">JBN Aikido</a>
        </div>
    
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
    
        <li class="dropdown">
            <a href="?page=kalender" class="dropdown-toggle" data-toggle="dropdown">
                Kalender&nbsp;<b class="caret"></b></a>
                <ul class="dropdown-menu">
                <li><a href="?page=kalender">Kalender</a>
                <li><a href="https://www.google.com/calendar/embed?title=jbn-aikido.nl kalender&showTitle=0&hl=nl&
src=aikidou.nl@gmail.com&color=%23125A12&
src=8m1egbul3qn19ji1dimqstaodo@group.calendar.google.com&color=%23BE6D00&
ctz=Europe%2FAmsterdam" target="_blank">Kalender (full screen)</a>
                <li><a href="?page=kalender_event">Evenement aanmelden</a>
                </ul>
    

        <li><a href="?page=examens">Examens</a>
      
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Opleidingen&nbsp;<b class="caret"></b></a>
                <ul class="dropdown-menu">
                <li><a target='_blank' href="http://jbn.nl/opleidingen">
                    De informatie over opleidingen voor aikido leraar
                    <br>is te vinden op <span style='text-decoration: underline;'>jbn.nl/opleidingen</span>.
                    <br><br>Menu item opent nieuw window</a>
                </ul>


      
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Dojos&nbsp;<b class="caret"></b></a>
                <ul class="dropdown-menu">
                <li><a href="?page=dojos">Dojos</a>
                <li><a href="?page=dojo_aanmelden">Dojo aanmelden</a>
                </ul>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Archief&nbsp;<b class="caret"></b></a>
                <ul class="dropdown-menu">
                <li><a href="?page=nieuws">Nieuws</a>
                <li><a href="?page=nieuwsbrief">Nieuwsbrief</a>
                </ul>


        <li><a href="?page=organisaties">Organisaties</a>
        <li><a href="?page=contact">Contact</a>

        </ul>
        <!-- #myNavbar --></div>
    <!-- .container --></div>
</nav>
<?php } ?>




<style>
h2 { font-size: 18px;  }
a.btn { text-decoration: none; } 

a.btn-link { color: black; text-decoration: underline; } 
a.btn-link:hover { background-color: black; color: white; text-decoration: none; } 

a.btn-link-js { color: black; text-decoration: none; } 
a.btn-link-js:hover { background-color: black; color: white; text-decoration: none; } 

table.tablesorter a { color: black; text-decoration: none; } 

.img-x { display: inline; padding: 0 5px 5px 0; } 

sup {
    color: red;
    font-family: monospace;
    font-size: 110%;
}

span.legenda {
    color: red;
    font-family: monospace;
    font-weight: bold;
    font-size: 140%;
}

<?php navStyle(); ?>
</style>

<?php
/** Layout
 *
 *  nav ... /nav -- navigation bar 
 *
 *  div.container
 *    if (home):
 *
 *      div.row
 *        div.col-sm-4 ... /div -- aikikai
 *        div.col-sm-4 ... /div -- aiki-budo
 *        div.col-sm-4 ... /div -- ki-aikido
 *      /div.row
 *
 *      div.row
 *        div.col-sm-8 includeContents() /div 
 *        div.col-sm-4 includeKalender(AGENDA) /div 
 *      /div.row
 *
 *    elseif (kalender):
 *      div.row
 *        div.col-sm-12 includeKalender(MONTH) /div
 *      /div.row
 *
 *    else:
 *      div.row
 *        div.col-sm-8 includeContents() /div
 *      /div.row
 *
 *    endif;
 *  /div.container
 */
?>
</head>
<body>
<?php nav(); ?>

<div class="container">

<?php if (rqGet("page")=="" || rqGet("page")=="home" ): ?>
  <div class="row">
    <div class="col-sm-4">
        <h4>Aikikai<br><small>Traditie van de grondlegger</small></h4>
        <p><img src="img/aikikai.jpg" class="img-responsive" alt="Aikikai Doshu Moriteru Ueshiba"></p>
        <p>Ruim 40 dojo’s zijn aangesloten bij de Aikikai in Japan, onder leiding van Moriteru Ueshiba, kleinzoon van grondlegger Morihei Ueshiba.</p>
        <p><a class="btn btn-default" href="?page=aikikai_aikido">Aikikai aikido</a></p>
    <!-- col --></div>
    <div class="col-sm-4">
        <h4>Aiki-budo<br><small>Veelzijdig effectief</small></h4>
        <p><img src="img/aiki-budo.jpg" class="img-responsive" alt="Alain Floquet"></p>
        <p>Ruim 20 dojo’s zijn aangesloten bij de Fédération Internationale d’Aïkibudo in Frankrijk, onder leiding van Alain Floquet.</p>
        <p><a class="btn btn-default" href="?page=aikibudo">Aiki-budo</a></p>    
    <!-- col --></div>
    <div class="col-sm-4">
        <h4>Ki-aikido<br><small>Eenheid van geest en lichaam</small></h4>
        <p><img src="img/ki-aikido.jpg" class="img-responsive" alt="Shinichi Tohei"></p>
        <p>Negen dojo’s zijn aangesloten bij de Shinshin Toitsu Aikidokai in Japan, onder leiding van Shinichi Tohei, zoon van Koichi Tohei.</p>
        <p><a class="btn btn-default" href="?page=ki_aikido">Ki-aikido</a></p>
    <!-- col --></div>
  <!-- row --></div>
  <?php includeExtraRows(); ?>
  <div class="row">
    <div id="contents" class="col-sm-8">
        <?php includeContents(); ?>
    <!-- col --></div>
    <div class="col-sm-4">
    	<?php opleidingAikidoleraar(); ?>
        <?php includeKalender(450, "AGENDA", 0, 0); ?>
    <!-- col --></div>
  <!-- row --></div>
  

<?php elseif (rqGet("page")=="kalender" ): ?>
  <div class="row">
    <div class="col-sm-12">
        <?php includeKalender(600, "MONTH", 1, 1); ?>
    <!-- col --></div>
  <!-- row --></div>

<?php elseif (rqGet("page")=="dojo_aanmelden" ||  rqGet("page")=="kalender_event"): ?>  
  <div class="row">
    <div id="contents" class="col-sm-12">
      <?php includeContents(); ?>
    <!-- col --></div>
  <!-- row --></div>
  
<?php else: ?>
  <div class="row">
    <div id="contents" class="col-sm-8">
        <?php includeContents(); ?>
    <!-- col --></div>
  <!-- row --></div>
  
<?php endif; ?>

<!-- container --></div> 
<script src="js/aikidou.js"></script>
</body>
</html>



<!doctype html>
<html>
<head>
<title>JBN Aikido</title>
<style>
_div { border: 1px solid red; border-collapse: collapse; padding: 2px; }
</style>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet"    href="css/bootstrap/3.3.7/bootstrap.min.css">
<link rel="stylesheet"    href='css/jquery.tablesorter.css'>

<script src="js/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap/3.3.7/bootstrap.min.js"></script>
<script src='js/jquery.tablesorter.min.js'></script> 


<style>
h2 { font-size: 18px;  }
div#contents a  { color: black; text-decoration: underline; } 
</style>
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
    // print( _tag("h1", ucfirst(preg_replace("/_/", " ", $h1text)) ));
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


<nav class="navbar navbar-inverse" style="border-radius: 0px 0px 0px 0px;">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="?page=home">JBN Aikido</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown">
    <a href="?page=kalender" class="dropdown-toggle" data-toggle="dropdown">
        Kalender&nbsp;<b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="?page=kalender">Kalender</a></li>
        <li><a href="https://www.google.com/calendar/embed?title=jbn-aikido.nl kalender&showTitle=0&hl=nl&
src=aikidou.nl@gmail.com&color=%23125A12&
src=8m1egbul3qn19ji1dimqstaodo@group.calendar.google.com&color=%23BE6D00&
ctz=Europe%2FAmsterdam" target="_blank">Kalender (full screen)</a></li>
        <li><a href="?page=kalender_event">Evenement aanmelden</a></li>
    </ul>
</li>
      <li><a href="?page=examens">Examens</a></li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        Opleidingen&nbsp;<b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="?page=opleidingen">Aikido leraar</a></li>
        <li><a href="?page=jeugdaikido">Jeugd aikido</a></li>
    </ul>
</li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        Dojos&nbsp;<b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="?page=dojos">Dojos</a></li>
        <li><a href="?page=dojo_aanmelden">Dojo aanmelden</a></li>
    </ul>
</li>
<li><a href="?page=organisaties">Organisaties</a></li>
<li><a href="?page=contact">Contact</a></li>
    </ul>
  </div>
</nav>

<div class="container">

<?php if (rqGet("page")=="" || rqGet("page")=="home" ): ?>
  <div class="row">
    <div class="col-sm-4">
        <h4>Aikikai<br><small>Traditie van de grondlegger</small></h4>
        <p><img src="img/aikikai.jpg" class="img-responsive" alt="Aikikai Doshu Moriteru Ueshiba"></p>
        <p>Ruim 40 dojo’s zijn aangesloten bij de Aikikai in Japan, onder leiding van Moriteru Ueshiba, kleinzoon van grondlegger Morihei Ueshiba.</p>
        <p><a class="btn btn-default" href="?page=aikikai_aikido">Aikikai aikido</a></p>
    </div>
    <div class="col-sm-4">
        <h4>Aiki-budo<br><small>Veelzijdig effectief</small></h4>
        <p><img src="img/aiki-budo.jpg" class="img-responsive" alt="Alain Floquet"></p>
        <p>Ruim 20 dojo’s zijn aangesloten bij de Fédération Internationale d’Aïkibudo in Frankrijk, onder leiding van Alain Floquet.</p>
        <p><a class="btn btn-default" href="?page=aikibudo">Aiki-budo</a></p>    </div>
    <div class="col-sm-4">
        <h4>Ki-aikido<br><small>Eenheid van geest en lichaam</small></h4>
        <p><img src="img/ki-aikido.jpg" class="img-responsive" alt="Shinichi Tohei"></p>
        <p>Negen dojo’s zijn aangesloten bij de Shinshin Toitsu Aikidokai in Japan, onder leiding van Shinichi Tohei, zoon van Koichi Tohei.</p>
        <p><a class="btn btn-default" href="?page=ki_aikido">Ki-aikido</a></p>
    </div>
  </div>
  <div class="row">
    <div id="contents" class="col-sm-8">
      <?php includeContents(); ?>
    </div>
    <div class="col-sm-4"><br>
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
width="100%"
height="450"
frameborder="0"
scrolling="no"></iframe>
    </div>
  </div>
</div>
<?php elseif (rqGet("page")=="kalender" ): ?>
  <div class="row">
    <div class="col-sm-12">
<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;height=600&amp;wkst=2&amp;hl=nl&amp;bgcolor=%23ffffff&amp;
src=aikidou.nl%40gmail.com&amp;color=%23125A12&amp;
src=8m1egbul3qn19ji1dimqstaodo%40group.calendar.google.com&amp;color=%23BE6D00&amp;
ctz=Europe%2FAmsterdam" style=" border-width:0 " width="100%" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
  </div>
<?php else: ?>
  <div class="row">
    <div id="contents" class="col-sm-8">
<?php includeContents(); ?>
    </div>
  </div>
<?php endif; ?>

<script src="js/aikidou.js"></script>
</body>
</html>



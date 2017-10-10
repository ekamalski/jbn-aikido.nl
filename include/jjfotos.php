<?php 
/**
 * Use in combination with jojothumbs.
 * <ul>
 * <li>head()
 * <li>pagetitle()
 * <li>pagefooter()
 * </ul>
 */ 
?>


<?php /** @deprecated */ function head() {?>
<link rel="shortcut icon" href="favicon.ico">
<link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="/css/aikidou.css"   rel="stylesheet">
<?php } ?>

<?php /** @deprecated */ function pagetitle() { ?>
<div id="wrapper">
<center>

<img src="/img/banner1000.jpg" alt="banner">
<div class="navbar">
  <div class="navbar-inner">
    <div class="container">

<!-- Begin -->    
<ul class="nav">
<li><a href="?">home</a></li>
<li><a href="/?page=contact">contact</a></li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        commisies&nbsp;<b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="/?page=nca">NCA</a></li>
        <li><a href="/?page=ncoa">NCOA</a></li>
        <li><a href="/?page=ngca">NGCA</a></li>
    </ul>
</li>
<li><a href="/?page=examens">examens</a></li>
<li><a href="/?page=fotos">fotos</a></li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        kalender&nbsp;<b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="/?page=kalender">kalender</a></li>
        <li><a href="/?page=kalender_event">event aanmelden</a></li>
        <li><a href="/?page=kalender_hulp">hulp voor kalender</a></li>
    </ul>
</li>
<li><a href="/?page=nieuws">nieuws</a></li>
<li><a href="/?page=opleidingen">opleidingen</a></li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        stijl&nbsp;<b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="/?page=aikibudo">aiki budo</a></li>
        <li><a href="/?page=aikikai_aikido">aikikai aikido</a></li>
        <li><a href="/?page=ki_aikido">ki aikido</a></li>
    </ul>
</li>
</ul><!-- nav --> 
    </div>
  </div>
</div> <!-- navbar -->

<div><!-- do not use [div id="contents"], reason: width: ... --> 
<?php } ?>

<?php function /** @deprecated */ pagefooter() { ?>
</center>
</div>
<script src="/js/jquery-1.7.2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/aikidou.js"></script>
<?php } ?>



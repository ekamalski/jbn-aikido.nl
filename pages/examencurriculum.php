<?php require_once("pages/examens/chris.php"); 

function accordion___Panel($id, $header, $bodyText, $expand="") { ?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $id?>"><?php echo $header?></a>
      </h4>
    </div>
    <div id="<?php echo $id?>" class="panel-collapse collapse <?php echo $expand; ?>">
      <div class="panel-body"><?php echo $bodyText; ?></div>
    </div>
  </div>
<?php }
?>
<h2>Uitleg van de aikido principes</h2>

<p>
Onderstaande artikelen zijn verschenen in de NCA Aikido nieuwsbrief. 
Nieuwe artikelen worden toegevoegd na verschijning van de nieuwe
nieuwsbrief.
</p>

<div class="panel-group" id="accordion">
	<?php panel("shisei", "Shisei door Chris de Jongh", chrisShisei()); ?>
	<?php panel("kokyo",  "Kokyo door Chris de Jongh",  chrisKokyo() ); ?>
	<?php panel("kamae",  "Kamae door Chris de Jongh",  chrisKamae() ); ?>
	<?php panel("maai",   "Ma-ai door Chris de Jongh",  chrisMaai(), "in" ); ?>
</div> 


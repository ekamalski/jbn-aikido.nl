<?php  
define("MF_TOSTRING", 			"MF_TOSTRING");
define("MF_VIEW",     			"MF_VIEW");

require_once(DOCROOT."/include/rqlib.php");
require_once(DOCROOT."/include/maildblib.php");
require_once(DOCROOT."/include/mailformlib.php");

define("SUBJECT", "Aanmelding dojo");

function meldDojoAan() {
    if (rqIsPostSubmit()) {
        if (areRequiredFieldFilled()) {
            $email = rqPost("email");
            
            $msg   = "";
            $msg  .= getMailMsg();
            
            $subject = SUBJECT." met jbnnummer: ".rqPost("jbnnummer");
            sendMessageMetBevestiging($email, TO_WEBM, FROM_WEBM, $subject, $msg);
            $status  = "Dojo aanmelding van $email verzonden.";
            $status .= " Als u geen mail-bevestiging ontvangt, dan hebben wij uw even verzoek niet ontvangen.";
            $status .= " Probeer het opnieuw.";
        } else {
            $status = "Dojo aanmelding NIET verzonden. Niet alle verplichte velden zijn ingevuld";
        }        
    } else {
        $status = "";    
    }
    
    if ($status != "") {
        print("<script type='text/javascript'> alert(\"$status\"); </script>"); 
    } 
}


function areRequiredFieldFilled() {
    if (rqPost("email") == "" ) {
        return false;
    } else if (rqPost("jbnnummer") == "" ) {
        return false;
    } else {
        return true;
    }
}

function getMailMsg() {
    $ret  = "Dit zijn de gegevens die u ".date("d-m-Y H:i")." heeft verzonden\n\n";
    $ret .= mfGetIpAddress();      
    $ret .= mfGetKeyValue("jbnnummer");
    $ret .= "{tr}\n";
    $ret .= getTdKeyValue("district");
    $ret .= getTdKeyValue("plaats");
    $ret .= getTdAKeyValue("website");
    $ret .= getTdKeyValue("stijl");
    $ret .= "{/tr}\n";
    
    $ret .= "[Opmerkingen]\n";
    $ret .= rqPost("opmerkingen")."\n";
    
    return $ret;
}

function getTdKeyValue($key) {
	$value = rqPost($key);
	if ($value != "") {
		return "{td class='$key'}$value{/td}\n";
	} else {
		return "";
	}
}

function getTdAKeyValue($key) {
	$value = rqPost($key);
	if ($value != "") {
		return "{td}{a target='_blank' href='$value'}$value{/a}{/td}\n";
	} else {
		return "";
	}
}
$status = meldDojoAan();
?>
<form class="form-horizontal" action=""  method="post">
    <div class="form-group" data-toggle="tooltip" title="Email is een verplicht veld">
      <label class="control-label col-sm-3"><abbr title="Verplicht veld">Email van aanmelder</abbr>&nbsp;<sup>*</sup>:</label>
      <div class="col-sm-9">
        <input type="email" class="form-control" placeholder="email" name="email">
      </div>
    </div>

    <div class="form-group" data-toggle="tooltip" title="Jbnnummer is een verplicht veld">
      <label class="control-label col-sm-3"><abbr title="Verplicht veld">JBN school/vereniging nummer</abbr>&nbsp;<sup>*</sup>:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" placeholder="" name="jbnnummer">
      </div>
    </div>

    <div class="form-group">
      	<label class="control-label col-sm-3">District:</label>
      	<div class="col-sm-5">
		<select class="form-control" name="district">
		<option></option>
		<option>Limburg</option>
		<option>Midden Nederland</option>
		<option>Noord Holland</option>
		<option>Noord Nederland</option>
		<option>Oost Nederland</option>
		<option>Zuid Holland</option>
		<option>Zuid Nederland</option>
		</select>
      </div>
    </div>  
    
    <div class="form-group">
      <label class="control-label col-sm-3">Plaats:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="plaats">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3">Website:</label>
      <div class="col-sm-9">
        <input type="url" class="form-control" placeholder="http://jbn-aikido.nl" name="website">
      </div>
    </div>   
    
    <div class="form-group">
      	<label class="control-label col-sm-3">Stijl:</label>
      	<div class="col-sm-5">
		<select class="form-control" name="stijl">
		<option></option>
		<option>Aikibudo</option>
		<option>Aikido</option>
		<option>Ki-aikido</option>
		</select>
      </div>
    </div>  
       
    <div class="form-group">     	        
      <div class="col-sm-offset-3 col-sm-5">
        <button type="submit" class="btn btn-default" name="submit" value="submit"> Verzend </button>
        <button type="reset"  class="btn btn-default"> Cancel </button>
      </div>
      <div class="col-sm-4">
        <span class="legenda">*</span> verplicht veld
      </div>
    </div>
</form>
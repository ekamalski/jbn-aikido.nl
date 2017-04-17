<?php  
define("MF_TOSTRING", 			"MF_TOSTRING");
define("MF_VIEW",     			"MF_VIEW");

require_once(DOCROOT."/include/rqlib.php");
require_once(DOCROOT."/include/maildblib.php");
require_once(DOCROOT."/include/mailformlib.php");

define("SUBJECT", "Aanmelding dojo");

dojo_aanmelden();

function dojo_aanmelden() {
    if (rqIsPostSubmit()) {
        if (areRequiredFieldFilled()) {
            $email = rqPost("email");
            
            $msg   = "";
            $msg  .= getMailMsg();
            
            $subject = SUBJECT." jbnnummer: ".rqPost("jbnnummer");
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
    
    mailform(MF_VIEW);
    mailformBody(MF_VIEW);
    mailformEnd(MF_VIEW, "<b>(v) Verplicht veld</b>");
    
    if ($status != "") {
        print("<script type='text/javascript'> alert(\"$status\"); </script>"); 
    } 
}

function mailformBody($ctrl) {
    $ret  = "";
    $ret .= mfTextOnlyOnForm($ctrl, "Vul het formulier in om een dojo aan te melden<br/><br/>");
    $ret .= mfInput($ctrl, "email",         80, "<b>Email van aanmelder (v): </b>");
    $ret .= mfInput($ctrl, "jbnnummer",     80, "<b>JBN school/vereniging nummer (v): </b>");
    $ret .= mfEmptyLine($ctrl);

    $ret .= mfSelect($ctrl, "district", "District");
    $ret .= mfOption($ctrl, "");
    $ret .= mfOption($ctrl, "Limburg");
    $ret .= mfOption($ctrl, "Midden Nederland");
    $ret .= mfOption($ctrl, "Noord Holland");
    $ret .= mfOption($ctrl, "Noord Nederland");
    $ret .= mfOption($ctrl, "Oost Nederland");
    $ret .= mfOption($ctrl, "Zuid Holland");
    $ret .= mfOption($ctrl, "Zuid Nederland");
    $ret .= mfSelectEnd($ctrl);
    
    
    $ret .= mfInput($ctrl, "plaats",     80);
    $ret .= mfInput($ctrl,  "website",   80);
    $ret .= mfSelect($ctrl, "stijl", "Stijl");
    $ret .= mfOption($ctrl, "");
    $ret .= mfOption($ctrl, "Aiki-budo");
    $ret .= mfOption($ctrl, "Aikikai");
    $ret .= mfOption($ctrl, "Ki-aikido");
    $ret .= mfSelectEnd($ctrl);
    $ret .= mfEmptyLine($ctrl);

    
    $ret .= mfTextarea($ctrl, "opmerkingen", 100, 4);
    $ret .= mfEmptyLine($ctrl);

    return $ret;
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
    $ret  = "Dit zijn de gegevens die u heeft verzonden\n\n";
    $ret .= mailform(MF_TOSTRING);      
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
?>


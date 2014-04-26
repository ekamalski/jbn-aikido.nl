<?php  
define("MF_TOSTRING", 			"MF_TOSTRING");
define("MF_VIEW",     			"MF_VIEW");

require_once(DOCROOT."/include/rqlib.php");
require_once(DOCROOT."/include/maildblib.php");
require_once(DOCROOT."/include/mailformlib.php");

define("TO", 	"webmaster@jbn-aikido.nl");
define("TABLE", "jnotes");

kalender_event();

function kalender_event() {
    if (rqIsPostSubmit()) {
        if (areRequiredFieldFilled()) {
            $email = rqPost("email");
            
            $msg   = "";
            $msg  .= getMailMsg();
            
            sendMessage($email, TO, $msg);
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
    $ret .= mfOption($ctrl, "aikibudo");
    $ret .= mfOption($ctrl, "aikikai aikido");
    $ret .= mfOption($ctrl, "ki aikido");
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
    $ret .= mfGetKeyValue("district");
    $ret .= mfGetKeyValue("plaats");
    $ret .= mfGetKeyValue("website");
    $ret .= mfGetKeyValue("stijl");

    $ret .= "[Opmerkingen]\n";
    $ret .= rqPost("opmerkingen")."\n";
    
    return $ret;
}




function sendMessage($from, $to, $msg) {  
	$subject =  "Aanmelding dojo van $from";
	insertIntoDb(HOST, USER, PASSWD, DATABASE, TABLE, $from, $to, $subject, $msg);
    mailSnd($to,   $subject,                            $msg, $from, MAIL_SND_TRACE_FMT_LONG);
    mailSnd($from, "Mailbevestiging van jbn-aikido.nl", $msg, $to,    MAIL_SND_TRACE_FMT_SHORT);
}
   
?>


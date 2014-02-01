<?php  
define("MF_TOSTRING", 			"MF_TOSTRING");
define("MF_VIEW",     			"MF_VIEW");

require_once(DOCROOT."/include/rqlib.php");
require_once(DOCROOT."/include/maildblib.php");
require_once(DOCROOT."/include/mailformlib.php");

define("TO",    "aikidou.nl@gmail.com");
define("TABLE", "jnotes");

kalender_event();

function kalender_event() {
    if (rqIsPostSubmit()) {
        if (areRequiredFieldFilled()) {
            $email = rqPost("email");
            
            $msg   = "";
            $msg  .= getMailMsg();
            
            sendEvent($email, TO, $msg);
            $status  = "Event verzoek van $email verzonden.";
            $status .= " Als u geen mail-bevestiging ontvangt, dan hebben wij uw even verzoek niet ontvangen.";
            $status .= " Probeer het opnieuw.";
        } else {
            $status = "Event verzoek NIET verzonden. Niet alle verplichte velden zijn ingevuld";
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
    $ret .= mfTextOnlyOnForm($ctrl, "Vul het formulier in om een event aan te melden<br/><br/>");
    $ret .= mfInput($ctrl, "email",         60, "<b>Email van aanmelder (v): </b>");
    $ret .= mfEmptyLine($ctrl);

    $ret .= mfInput($ctrl, "leraren",       60, "Leraar/leraren");
    $ret .= mfEmptyLine($ctrl);

    $ret .= mfInput($ctrl, "stad",          60);
    $ret .= mfInput($ctrl, "straat",        60, "Straat en huismummer");
    $ret .= mfEmptyLine($ctrl);

    $ret .= mfInput($ctrl, "datum1",        60, "<b>Datum (v)</b>");
    $ret .= mfInput($ctrl, "begintijd11",   60, "Begin tijd eerste blok");
    $ret .= mfInput($ctrl,  "eindtijd11",   60, "Eind tijd eerste blok");
    $ret .= mfInput($ctrl, "begintijd12",   60, "Begin tijd tweede blok");
    $ret .= mfInput($ctrl,  "eindtijd12",   60, "Eind tijd tweede blok");
    $ret .= mfInput($ctrl, "begintijd13",   60, "Begin tijd derde blok");
    $ret .= mfInput($ctrl,  "eindtijd13",   60, "Eind tijd derde blok");
    $ret .= mfEmptyLine($ctrl);
    
    $ret .= mfInput($ctrl, "datum2",        60, "Datum");
    $ret .= mfInput($ctrl, "begintijd21",   60, "Begin tijd eerste blok");
    $ret .= mfInput($ctrl,  "eindtijd21",   60, "Eind tijd eerste blok");
    $ret .= mfInput($ctrl, "begintijd22",   60, "Begin tijd tweede blok");
    $ret .= mfInput($ctrl,  "eindtijd22",   60, "Eind tijd tweede blok");
    $ret .= mfInput($ctrl, "begintijd23",   60, "Begin tijd derde blok");
    $ret .= mfInput($ctrl,  "eindtijd23",   60, "Eind tijd derde blok");
    $ret .= mfEmptyLine($ctrl);

    $ret .= mfSelect($ctrl, "stijl", "<b>Stijl (v)</b>");
    $ret .= mfOption($ctrl, "");
    $ret .= mfOption($ctrl, "aikibudo");
    $ret .= mfOption($ctrl, "aikikai aikido");
    $ret .= mfOption($ctrl, "ki aikido");
    $ret .= mfSelectEnd($ctrl);
    $ret .= mfEmptyLine($ctrl);

    $ret .= mfSelect($ctrl, "type");
    $ret .= mfOption($ctrl, "school stage");
    $ret .= mfOption($ctrl, "nationale stage");
    $ret .= mfOption($ctrl, "district stage");
    $ret .= mfOption($ctrl, "ki aikido");
    $ret .= mfSelectEnd($ctrl);
    $ret .= mfEmptyLine($ctrl);

    $ret .= mfInput($ctrl,  "contact",   60);
    $ret .= mfInput($ctrl,  "website",   60);
    $ret .= mfInput($ctrl,  "folder",    60, "Locatie (PDF) folder/flyer");
    $ret .= mfEmptyLine($ctrl);
    
    $ret .= mfTextarea($ctrl, "kosten",     70, 4);
    $ret .= mfEmptyLine($ctrl);

    $ret .= mfTextarea($ctrl, "extra",      70, 4, "Extra informatie");
    $ret .= mfEmptyLine($ctrl);
    return $ret;
}

function areRequiredFieldFilled() {
        $email  = rqPost("email");
        $datum1 = rqPost("datum1");
        $stijl  = rqPost("stijl");
        if ($email != "" && $datum1 != "" && $stijl != "") {
            return true;
        } else {
            return false;
        }
}

function getMailMsg() {
    $ret  = "Dit zijn de gegevens die u heeft verzonden\n\n";
    $ret .= mailform(MF_TOSTRING);      
    $ret .= "[Titel]\n";
    $ret .= rqPost("stad").", ".rqPost("leraren")."\n";
    $ret .= "[Wanneer]\n";
    $ret .= mfGetKeyValue("datum1");
    $ret .= mfGetKeyValue("begintijd11");
    $ret .= mfGetKeyValue( "eindtijd11");
    $ret .= mfGetKeyValue("begintijd12");
    $ret .= mfGetKeyValue( "eindtijd12");
    $ret .= mfGetKeyValue("begintijd13");
    $ret .= mfGetKeyValue( "eindtijd13");
    $ret .= "\n";
    $ret .= mfGetKeyValue("datum2");
    $ret .= mfGetKeyValue("begintijd21");
    $ret .= mfGetKeyValue( "eindtijd21");
    $ret .= mfGetKeyValue("begintijd22");
    $ret .= mfGetKeyValue( "eindtijd22");
    $ret .= mfGetKeyValue("begintijd23");
    $ret .= mfGetKeyValue( "eindtijd23");
    $ret .= "[Waar]\n";
    $ret .= rqPost("straat").", ".rqPost("stad")."\n";
    $ret .= "[Beschrijving]\n";
    $ret .= mfGetKeyValue("leraren");
    $ret .= mfGetKeyValue("stijl");
    $ret .= mfGetKeyValue("type");
    $ret .= "[Kosten]\n";
    $ret .= rqPost("kosten")."\n";
    $ret .= "[Extra informatie]\n";
    $ret .= rqPost("extra")."\n";
    
    return $ret;
}




function sendEvent($from, $to, $msg) { 
    $subject = "Kalender event van $from";
    insertIntoDb(HOST, USER, PASSWD, DATABASE, TABLE, $from, $to, $subject, $msg);   
    mailSnd($to,   $subject,                           $msg, $from, MAIL_SND_TRACE_FMT_LONG);
    mailSnd($from,"Mailbevestiging van jbn-aikido.nl", $msg, $to,    MAIL_SND_TRACE_FMT_SHORT);
}
   
?>


<?php 
/**
 * Typical usage:
 *  mailController();
 *  mailDefaultForm(...);
 *  mailStatus();
 *
 * Altenative usage (alternative form layout):
 *  mailController();
 *  <form ...> ... </form>
 *  mailStatus();
 *
 * Low level usage:
 *  mailSnd(...);
 *  mailSnd(..., more);
 */
define("MAIL_METHOD", "post");

define("BORDER_BG_RED_YELLOW", "border: 1px solid red; background-color: yellow;");
define("BORDER_BG_LOCALHOST",  "border: 1px solid navy; background-color: purple; color: yellow;");

define("MAIL_SND_TRACE_FMT_LONG",   "MAIL_SND_TRACE_FMT_LONG");
define("MAIL_SND_TRACE_FMT_SHORT",  "MAIL_SND_TRACE_FMT_SHORT");

function mailController() {
    if (_mailIsLocalhost()) { _mailControllerTrace(); }
    if (_mailArg("submit") == "true" && _mailArg("email") != "") {
        $to   = _mailGetTo();
        mailSnd($to, _mailArg("subject"), _mailArg("message"), _mailArg("from"));
    }
}

/**
 * Also used to send "formulieren".
  * argument 5: "", MAIL_SND_TRACE_FMT_LONG or MAIL_SND_TRACE_FMT_SHORT
 */
function mailSnd($to, $subject, $msg, $from) {
    if ($from == null || $from == "") {
        $from = "noreply@".$_SERVER["SERVER_NAME"];
    }

    $mailSndTraceFmt = (func_num_args() == 5) ? func_get_arg(4) : MAIL_SND_TRACE_FMT_LONG; 

    if ($to == "example@example.com" || $from == "example@example.com") {
        _mailSndTrace($to, $subject, $msg, $from, BORDER_BG_RED_YELLOW, $mailSndTraceFmt);
        
    } else if (_mailIsLocalhost()) {
        _mailSndTrace($to, $subject, $msg, $from, BORDER_BG_LOCALHOST,  $mailSndTraceFmt);
        
    } else {
        mail($to, $subject, $msg, "From: ".$from);
    }
}

/** 
 * @deprecated
 * Used to send "inschrijfformulieren" and "opzegformulieren".
 */
function mailSnd2($to, $subject, $msg, $from) {
    return mailSnd($to, $subject, $msg, $from, MAIL_SND_TRACE_FMT_SHORT);
}

function mailDefaultForm($from, $subject) {
    if ($from != null) {
        $fromAttr = "readonly=readonly' value='$from'";
    } else {
        $fromAttr = "";
    }
    $subject = ($subject != null)? $subject : date("Y-m-d H:i:s");
?>
<form style="font-family: monospace;" method="<?php echo MAIL_METHOD ?>">
<br/>From .... : <input type="text" size="90" name="from" <?php echo $fromAttr ?>/>
<br/>To ...... : <input type="text" size="90" name="email"/>
<br/>Subject . : <input type="text" size="90"  name="subject" value="<?php echo $subject ?>" />
<br/><textarea cols="80" rows="10" name="message"></textarea>
<br/><button type="submit" name="submit" value="true"> Send </button> <button type="reset"> Cancel </button>
</form>
<?php
}

function mailStatus() {
    if (_mailArg("submit") == "true") {
        if (_mailArg("email") != "") {
            $to = _mailGetTo();
            _mailJsAlert("Mail verstuurt naar: $to."); 
        } else {
            $emptyFields = "";
            if (_mailArg("email")   == "") { $emptyFields .= ", To veld is leeg"; }
            if (_mailArg("subject") == "") { $emptyFields .= ", Subject veld is leeg"; }
            _mailJsAlert("Mail NIET verstuurt$emptyFields");
        }
    }
}


function _mailGetTo() {
    // $to = _mailArg("email").","._mailArg("from"); ## Comma list does not work.
    $to = _mailArg("email");
    
    return $to;
}

function _mailArg($argumentId) {
    if (MAIL_METHOD == "get" && isset($_GET["$argumentId"]) ){
        return $_GET["$argumentId"];
    
    } else if (MAIL_METHOD == "post" && isset($_POST["$argumentId"]) ){   
        return $_POST["$argumentId"];

    } else {
        return null;
    }
}

function _mailIsLocalhost() {
    if ($_SERVER["REMOTE_ADDR"] == "127.0.0.1") {
        return true;
    }
    return false;
}



function _mailJsAlert($message) {
    print("<script type='text/javascript'> alert(\"$message\"); </script>"); 
}

function _mailControllerTrace() {
    print("<pre style='".BORDER_BG_LOCALHOST."'>");
    print("method: ".MAIL_METHOD);
    print(", ");
    print("submit: "._mailArg("submit"));
    print(", ");
    print("email: "._mailArg("email"));
    print("</pre>");
}

function _mailSndTrace($to, $subject, $msg, $from, $style, $format) {
    switch ($format) {
    case MAIL_SND_TRACE_FMT_SHORT:
        return _mailSndTraceShort($to, $subject, $msg, $from, $style);
    default:
        return _mailSndTraceLong($to, $subject, $msg, $from, $style);
    }
}    

function _mailSndTraceLong($to, $subject, $msg, $from, $style) {
    print("<pre style='$style'>");
    print("to: $to");
    print("<br/>from: $from");
    print("<br/>subject: $subject");
    print("<br/><br/>".$msg);
    print("<br/><br/>");
    print("</pre>");
}

function _mailSndTraceShort($to, $subject, $msg, $from, $style) {
    print("<pre style='$style'>");
    print("to: $to, ");
    print("from: $from, ");
    print("subject: $subject");
    print("</pre>");
}


?>
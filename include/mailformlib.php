<?php 
/**
 * Version: 2011-11-23
 * 
 * Typical usage
 *  if (rqIsPostSubmit()) {
 *      if (areRequiredFieldFilled()) {
 *          $email = rqPost("email");
 *          
 *          $msg   = "";
 *          $msg  .= mailform(MF_TOSTRING);     // Optional, returns: IP-address
 *          $msg  .= mailformBody(MF_TOSTRING);
 *          $msg  .= mailformEnd(MF_TOSTRING);  // Optional.
 *          
 *          mailSnd($email, TO, $msg [, MAIL_SND_TRACE_FMT_SHORT]);
 *          $status = "Mail van $email verzonden.";
 *          $status .= " Als u geen mail-bevestiging ontvangt, dan hebben wij uw even verzoek niet ontvangen.";
 *          $status .= " Probeer het opnieuw.";
 *      } else {
 *          $status = "Mail NIET verzonden. Niet alle verplichte velden zijn ingevuld";
 *      }        
 *  } else {
 *      $status = "";    
 *  }
 *   
 *  mailform(MF_VIEW);
 *  mailformBody(MF_VIEW);
 *  mailformEnd(MF_VIEW, "<b>(v) Verplicht veld</b>");
 *   
 *  if ($status != "") {
 *      print("<script type='text/javascript'> alert(\"$status\"); </script>"); 
 *  } 
 *  
 * Implement: mailformBody($ctrl)
 * Using:     mfXxx($ctrl, ...) functions
 */

function mfGetIpAddress($prefix="IP Address") {
    return("$prefix: ".$_SERVER["REMOTE_ADDR"]."\n\n");
}
/**
 * Optional argument 3: Label
 */
function mfInput($ctrl, $name, $size) {
    if ($ctrl == MF_VIEW) {
        $label = (func_num_args() == 4) ? func_get_arg(3) : ucfirst($name);
        $value = rqPost($name);
        print("<tr><td> $label</td><td><input type='text' size='$size' name='$name' value='$value'/></td></tr>\n");
    
    } else if ($ctrl == MF_TOSTRING) {
        return mfGetKeyValue($name);
    } 
}


/**
 * Optional argument 4: Label
 */
function mfTextarea($ctrl, $name, $cols, $rows) {
    if ($ctrl == MF_VIEW) {
        $label = (func_num_args() == 5) ? func_get_arg(4) : ucfirst($name);
        $value = rqPost($name);
        print("<tr><td colspan='2'>$label</td></tr>\n");
        print("<tr><td colspan='2'><textarea cols='$cols' rows='$rows' name='$name'>$value</textarea> </td></tr>\n");
    } else if ($ctrl == MF_TOSTRING) {
        return("$name : [\n".rqPost("$name")."\n]\n");
    }
    return "";
}

function mfTextOnlyOnForm($ctrl, $text) {
    if ($ctrl == MF_VIEW) {
        print("<tr><td colspan='2'>$text</td></tr>\n");
    }
}

/**
 * Optional argument 2: Label
 */
function mfSelect($ctrl, $name) {
    $label = (func_num_args() == 3) ? func_get_arg(2) : ucfirst($name);
    if ($ctrl == MF_VIEW) {
        print("<tr><td>$label</td><td><select name='$name'>\n");
    } else if ($ctrl == MF_TOSTRING) {
        return mfGetKeyValue($name);
    }
}

function mfOption($ctrl, $option) {
    if ($ctrl == MF_VIEW) {
        print("<option>$option</option>\n");
    }
}

function mfSelectEnd($ctrl) {
    if ($ctrl == MF_VIEW) {
        print("</td></tr>\n");
    }
}

function mfEmptyLine($ctrl) {
    if ($ctrl == MF_VIEW) {
        print("<tr><td colspan='2'> &nbsp; </td></tr>\n");
    }
}

function mailform($ctrl) {
    if ($ctrl == MF_VIEW) {
        print("<form action='' method='post'><table>\n");
    } else if ($ctrl == MF_TOSTRING) {
        return("IP Address: ".$_SERVER["REMOTE_ADDR"]."\n\n");
    }
}

/**
 * Optional argument 2: Text after buttons
 */  
function mailformEnd($ctrl) {
    if ($ctrl == MF_VIEW) {
        $text = (func_num_args() == 2) ? func_get_arg(1) : ""; 
        print("</table>\n");
        print("<div>\n");
        print("<button type='submit' name='submit' value='true'> Verstuur</button>&nbsp;&nbsp;");
        print("<button type='reset'  name='reset' value='true'> Reset</button>&nbsp;&nbsp;");
        print("$text\n");
        print("</div>\n");
        print("</form>\n");
    } else if ($ctrl == MF_TOSTRING) {
        return "";
    }
}

function mfGetKeyValue($key) {
    $value = rqPost($key);
    if ($value != "") {
        return "$key : $value\n";
    } else {
        return "";
    }
}
?>
<?php

define("RQ_POST", "post");
function rqPost($argumentId) {
    if (isset($_POST[$argumentId])) {
        $ret = $_POST["$argumentId"];
        $ret = htmlspecialchars($ret);
//        $ret = nl2br($ret);
        return $ret;
    } else {
        return null;
    }
}

function rqGet($argumentId) {
    if (isset($_GET["$argumentId"]) ){
        $ret = $_GET["$argumentId"];
        $ret = htmlspecialchars($ret);
        return $ret;
    } else {
        return null;
    }
}

function rqIsPostSubmit() {
    return rqPost("submit");
}

function rqPrintGetPost() {
    rqPrintGet();
    rqPrintPost();
}

function rqPrintGet() {
    print("<hr/><b>Get</b>&nbsp;");
    rqPrintArray($_GET,  "background: lime; border: solid 1px navy;", "&nbsp;");
}

function rqPrintPost() {
    print("<hr/><b>Post</b>&nbsp;");
    rqPrintArray($_POST, "background: yellow; border: solid 1px navy;", "&nbsp;");
}

function rqPrintArray($ary, $style, $sep)  {
    if (is_array($ary) && sizeof($ary) >= 1) {
        foreach ($ary as $key => $item) {
            print("$key: <span style='$style'>&nbsp;$item&nbsp;</span> $sep");
        }
    }

}


?>
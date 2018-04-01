<?php
define("BTN_ADD",  "+");
define("BTN_DEL",  "X");
define("BTN_NEXT", "&raquo;");

define("BTN_SMALL",  "25px");
define("BTN_LARGE",  "100px");

define("TXT_SIZE",  "100");

/**
 * @return boolean
 */
function isLocalhost() {
    return $_SERVER["REMOTE_ADDR"] == "127.0.0.1" || $_SERVER["REMOTE_ADDR"] == "::1";
}

/**
 * &lt;hr/&gt;
 */
function hr() {
	tagSlash("hr");
}

/**
 * &lt;tag/&gt;
 */
function tagSlash($tag) {
    $ANGLE_BR_OPEN=chr(0x3C);
    $ANGLE_BR_CLOSE=chr(0x3E);
    print("$ANGLE_BR_OPEN$tag/$ANGLE_BR_CLOSE");
}

/**
 * &lt;tag&gt;
 */
function tagBegin($tag) {
	$ANGLE_BR_OPEN=chr(0x3C);
	$ANGLE_BR_CLOSE=chr(0x3E);
    print("$ANGLE_BR_OPEN$tag$ANGLE_BR_CLOSE");
}

/**
 * &lt;/tag&gt;
 */
function tagEnd($tag) {
	$ANGLE_BR_OPEN=chr(0x3C);
	$ANGLE_BR_CLOSE=chr(0x3E);
    print("$ANGLE_BR_OPEN/$tag$ANGLE_BR_CLOSE\n");
}

/**
 * &lt;tag attr&gt;
 */
function tagBeginAttr($tag, $attr) {
	$ANGLE_BR_OPEN=chr(0x3C);
	$ANGLE_BR_CLOSE=chr(0x3E);
	print("$ANGLE_BR_OPEN$tag $attr$ANGLE_BR_CLOSE");
}

/**
 * &lt;tag&gt;text &lt;/tag&gt;
 */
function tag($tag, $text) {
	tagBegin($tag);
	print($text);
	tagEnd($tag);
}

/**
 * &lt;tag attr&gt;text &lt;/tag&gt;
 */
function tagAttr($tag, $attr, $text) {
	tagBeginAttr($tag, $attr);
	print($text);
	tagEnd($tag);
}

/**
 * &lt;tag attr/&gt;
 */
function tagAttrSlash($tag, $attr) {
	$ANGLE_BR_OPEN=chr(0x3C);
	$ANGLE_BR_CLOSE=chr(0x3E);
	print("$ANGLE_BR_OPEN$tag $attr/$ANGLE_BR_CLOSE");
}

/**
 * if isLocalhost()  &lt;p style=...&gt;attr&lt;/p&gt;
 * <br>else &lt;ifame attr&gt;&lt;/ifame&gt;
 */
function tagIframe($attr) {
    if (isLocalhost()) {
        tagAttr("p", "style='background-color: yellow; border: solid 1px red;'", $attr);
    } else {
        tagAttr("iframe", $attr." frameborder='0' allowfullscreen", "");
    }
}
/**
 * &lt;form method=method arction=_ctrl2url(ctrl)&gt;
 */
function tagForm($method, $ctrl, $action) {
	$url   = _ctrl2url($ctrl);
    $title = "$url [$method] $action"; 
	print("<form action='$url' method='$method'>\n");
	tagAttrSlash("input", "type='hidden' size='".TXT_SIZE."' name='action' value='$action'");
	return $title; // Title?
}

/**
 *  &lt;button type=submit&gt;buttonText&lt;/button&gt; &lt;/form&gt;
 */
function tagFormEnd($submitText, $title, $id) {
	$width = BTN_LARGE;
	$title = "$title $id"; 
	print("<button title='$title' style='width: $width;' type='submit'> $submitText </button>\n");
	print("</form>\n");
}


/**
 * &lt;form xxx&gt; &lt;button type=submit&gt;buttonText&lt;/button&gt; &lt;/form&gt;
 */
function sFormButton($method, $ctrl, $action, $id, $submitText, $width) {
	$url   = _ctrl2url($ctrl);
	$title = "$url [$method] $action $id"; 
	return "<form action='$url' method='$method'>\n"
	."<input size='100' type='hidden' name='action' value='$action'/>\n"
	."<input size='100' type='hidden' name='id'     value='$id'/>\n"
	."<button title='$title' style='width: $width;' type='submit'> $submitText </button>\n"
	."</form>\n";
}

/**
 * &lt;input type=type xxx/&gt;
 */
function sFormInput($type, $size, $name, $value) {
	return "<input type='$type' size='$size' name='$name' value='$value'/>";
}

function _ctrl2url($ctrl) {
	$url1  = "http://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["PHP_SELF"];
	if ($ctrl == null || $ctrl == "") {
		$url = $url1;
	} else if (strpos($ctrl, "?") == 0) {
		$url = $ctrl;
	} else {
		$url = $ctrl;
	}
	return $url;
}
?>


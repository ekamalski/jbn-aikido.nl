<?php
define("BTN_ADD",  "+");
define("BTN_DEL",  "X");
define("BTN_NEXT", "&raquo;");

define("BTN_SMALL",  "25px");
define("BTN_LARGE",  "100px");

define("TXT_SIZE",  "100");

function tagSlash($tag) {
    $ANGLE_BR_OPEN=chr(0x3C);
    $ANGLE_BR_CLOSE=chr(0x3E);
    print("$ANGLE_BR_OPEN$tag/$ANGLE_BR_CLOSE");
}

function tagBegin($tag) {
	$ANGLE_BR_OPEN=chr(0x3C);
	$ANGLE_BR_CLOSE=chr(0x3E);
    print("$ANGLE_BR_OPEN$tag$ANGLE_BR_CLOSE");
}

function tagEnd($tag) {
	$ANGLE_BR_OPEN=chr(0x3C);
	$ANGLE_BR_CLOSE=chr(0x3E);
    print("$ANGLE_BR_OPEN/$tag$ANGLE_BR_CLOSE\n");
}

function tagBeginAttr($tag, $attr) {
	$ANGLE_BR_OPEN=chr(0x3C);
	$ANGLE_BR_CLOSE=chr(0x3E);
	print("$ANGLE_BR_OPEN$tag $attr$ANGLE_BR_CLOSE");
}

function tag($tag, $text) {
	tagBegin($tag);
	print($text);
	tagEnd($tag);
}

function tagAttr($tag, $attr, $text) {
	tagBeginAttr($tag, $attr);
	print($text);
	tagEnd($tag);
}

function tagAttrSlash($tag, $attr) {
	$ANGLE_BR_OPEN=chr(0x3C);
	$ANGLE_BR_CLOSE=chr(0x3E);
	print("$ANGLE_BR_OPEN$tag $attr/$ANGLE_BR_CLOSE");
}

function tagForm($method, $ctrl, $action) {
	$url   = _ctrl2url($ctrl);
    $title = "$url [$method] $action"; 
	print("<form action='$url' method='$method'>\n");
	tagAttrSlash("input", "type='hidden' size='".TXT_SIZE."' name='action' value='$action'");
	return $title; // Title?
}

function tagFormEnd($submitText, $title, $id) {
	$width = BTN_LARGE;
	$title = "$title $id"; 
	print("<button title='$title' style='width: $width;' type='submit'> $submitText </button>\n");
	print("</form>\n");
}


function sFormButton($method, $ctrl, $action, $id, $submitText, $width) {
	$url   = _ctrl2url($ctrl);
	$title = "$url [$method] $action $id"; 
	return "<form action='$url' method='$method'>\n"
	."<input size='100' type='hidden' name='action' value='$action'/>\n"
	."<input size='100' type='hidden' name='id'     value='$id'/>\n"
	."<button title='$title' style='width: $width;' type='submit'> $submitText </button>\n"
	."</form>\n";
}

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
</head>

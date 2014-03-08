

function _matos(ary) {
    var str = '';
    var i;
    for (i=0;i<ary.length;i++) {
        str+=String.fromCharCode(ary[i]);
    }
    
    return str;
}

function _mto() {    
    return _matos(new Array(109, 97, 105, 108, 116, 111, 58));
}

function _mat() {    
    return String.fromCharCode(64);
}

function _mja() {
    return _matos(new Array(106, 98, 110, 45, 97, 105, 107, 105, 100, 111));
}

function _mjb() {
    return _matos(new Array(106, 98, 110));
}

function _mnl() {
    return _matos(new Array(46, 110, 108));
}

function _mcom() {
    return _matos(new Array(46, 99, 111, 109));
}

function _mjanl(t, ary) {
    var str2 
        = _matos(ary)
        + _mat()
        + _mja()
        + _mnl();
        
    return('<a href="'+_mto()+str2+'">'+(t==""? str2: t)+'&nbsp;<i class="icon-envelope"></i><\/a>');
}

function _mjbnl(t, ary) {
    var str2 
        = _matos(ary)
        + _mat()
        + _mjb()
        + _mnl();
        
    return('<a href="'+_mto()+str2+'">'+(t==""? str2: t)+'&nbsp;<i class="icon-envelope"></i><\/a>');
}

function _mxxnl(t, n, d) {
    var str2 
        = _matos(n) 
        + _mat()
        + _matos(d) 
        + _mnl();
        
    return('<a href="'+_mto()+str2+'">'+(t==""? str2: t)+'&nbsp;<i class="icon-envelope"></i><\/a>');
}

function _mxxcom(t, n, d) {
    var str2 
        = _matos(n) 
        + _mat()
        + _matos(d) 
        + _mcom();
        
    return('<a href="'+_mto()+str2+'">'+(t==""? str2: t)+'&nbsp;<i class="icon-envelope"></i><\/a>');
}

function webm(t) { return _mjanl (t, new Array(119, 101, 98, 109, 97, 115, 116, 101, 114)); }
function vnca(t) { return _mjanl (t, new Array(118, 111, 111, 114, 122, 105, 116, 116, 101, 114)); }
function snca(t) { return _mjanl (t, new Array(115, 101,  99, 114, 101, 116,  97, 114, 105, 115)); }
function sncg(t) { return _mxxnl (t, new Array(100, 119, 108, 111, 107), new Array(100, 100, 115)); }
function snco(t) { return _mjanl (t, new Array(111, 112, 108, 101, 105, 100, 105, 110, 103, 101, 110) ); }
function svdt(t) { return _mxxnl (t, new Array(115, 46, 118, 97, 110, 100, 101, 114, 116, 111, 111, 114, 110), new Array(106, 98, 110)); }
function ajbn(t)  { return _mjbnl (t, new Array(97, 105, 107, 105, 100, 111)); }
function jjbn(t)  { return _mjbnl (t, new Array(106, 117, 100, 111,  98, 111, 110, 100)); }

function ff() {
    alert("ff: "+gg());
    return gg();
}

function gg() {
    return _matos(new Array(103, 109,  97, 105, 108)); 
}

(function() {
    $('#voorzitter').html(      vnca( $('#voorzitter').text()     ));
    $('#secretaris').html(      snca( $('#secretaris').text()     ));
    $('#webmaster').html(       webm( $('#webmaster').text()      ));
    $('#secretaris_ngca').html( sncg( $('#secretaris_ngca').text()));
    $('#secretaris_ncoa').html( snco( $('#secretaris_ncoa').text()));
    $('#ajbn').html(            ajbn(  $('#ajbn').text()            ));
    $('#jjbn').html(            jjbn(  $('#jjbn').text()            ));
})();
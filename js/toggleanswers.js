function toggleNext(el) {
var next=el.nextSibling;
while(next.nodeType != 1) next=next.nextSibling;
next.style.display=((next.style.display=="none") ? "block" : "none");
}
function getElementsByIdTagAndClassName(id,tag,cname) {
var tags=document.getElementById(id).getElementsByTagName(tag);
var cEls=new Array();
for (i=0; i<tags.length; i++) {
var rE=new RegExp("(^|\s)" + cname + "(\s|$)");
if (rE.test(tags[i].className)) {
cEls.push(tags[i]);
}
}
return cEls;
}
function toggleNextByIdTagAndClassName(id,tag,cname) {
var ccn="clicker";
clickers=getElementsByIdTagAndClassName(id,tag,cname);
for (i=0; i<clickers.length; i++) {
clickers[i].className+=" "+ccn;
clickers[i].onclick=function() {
toggleNext(this)
}
toggleNext(clickers[i]);
}
}
window.onload=function(){
toggleNextByIdTagAndClassName('collapsed_box','h2','toggleanswer')
}
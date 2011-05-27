// JavaScript Document
function switch1(div) {
var option=['one','two','three'];
for(var i=0; i<option.length; i++) {
  if (document.getElementById(option[i])) {
  obj=document.getElementById(option[i]);
  obj.style.display=(option[i]==div)? "block" : "none";
}
}
}
//

// switch content (unobtrusive)
function hidestories() {
var divs=document.getElementById('stories').getElementsByTagName('div');
for (j=0; j<divs.length; j++) {
    var rE = new RegExp("(^|\\s)" + 'story' + "(\\s|$)");
	if (rE.test(divs[j].className)) {
		divs[j].style.display="none";
		}
	}
}
function hidetstories() {
var divs=document.getElementById('tstories').getElementsByTagName('div');
for (j=0; j<divs.length; j++) {
    var rE = new RegExp("(^|\\s)" + 'story' + "(\\s|$)");
	if (rE.test(divs[j].className)) {
		divs[j].style.display="none";
		}
	}
}
function stories(first) {
var thebuttons=document.getElementById('thebuttons').getElementsByTagName('a');
for (i=0; i<thebuttons.length; i++) {
	thebuttons[i].onclick=function() {
		hidestories();
		var thestory=(this.href).split("#",2)[1];
		document.getElementById(thestory).style.display="block";
		return false;
		}
	}
	if (first) {
		var firstone=document.getElementById('stories').firstChild;
		if (firstone.nodeType != 1) {firstone = firstone.nextSibling;}
		firstone.style.display="block";
	}
}


function anon(el) {
	hidetstories();
	var thestory=(el.href).split("#",2)[1];
	document.getElementById(thestory).style.display="block";
	return false;
}
function tstories(first) {
var thebuttons=document.getElementById('thebuttons').getElementsByTagName('a');
for (i=0; i<thebuttons.length; i++) {
	thebuttons[i].onclick=function() {anon(this)}
	}
	var els=document.getElementsByTagName('a');
	var rE = new RegExp("(^|\\s)" + 'link' + "(\\s|$)");
	for (j=0; j<els.length; j++) {
	if (rE.test(els[j].className)) {
		els[j].onclick=function () {anon(this);}
		}
	}
	if (first) {
		var firstone=document.getElementById('tstories').firstChild;
		if (firstone.nodeType != 1) {firstone = firstone.nextSibling;}
		firstone.style.display="block";
	}
}

//

// switch content4 - for the 'current' style
function hidestories2() {
var divs=document.getElementById('stories2').getElementsByTagName('div');
for (j=0; j<divs.length; j++) {
    var rE = new RegExp("(^|\\s)" + 'story' + "(\\s|$)");
	if (rE.test(divs[j].className)) {
		divs[j].style.display="none";
		}
	var thebuttons=document.getElementById('thebuttons').getElementsByTagName('a');
	for (k=0; k<thebuttons.length; k++) { // loop throught the buttons and remove the 'current' class
		var li=thebuttons[k].parentNode;
		li.className=li.className.replace(new RegExp("current"+"\\b"), "");
		}
	}
}

function stories2(first) {
var thebuttons=document.getElementById('thebuttons').getElementsByTagName('a');
for (i=0; i<thebuttons.length; i++) {
	thebuttons[i].onclick=function() {
		hidestories2();
		var thestory=(this.href).split("#",2)[1];
		document.getElementById(thestory).style.display="block";
		this.parentNode.className+=" current";  // set the 'current' class to the clicked button
		return false;
		}
	}
	if (first) {
		var firstone=document.getElementById('stories2').firstChild;
		if (firstone.nodeType != 1) {firstone = firstone.nextSibling;}
		firstone.style.display="block";
		var firstbutton=document.getElementById('thebuttons').firstChild;
		if (firstbutton.nodeType != 1) {firstbutton = firstbutton.nextSibling;}
		firstbutton.className+=" current"; // set the 'current' class to the first button
	}
}
//

function switchlang(lang)
{
if (document.getElementById('switchlang')) {
var option=['english','french','spanish','japanese'];
for(var i=0; i<option.length; i++) {
	for(var j=1; j<5; j++) {
	obj=document.getElementById(option[i]+j);
    obj.style.display=(option[i]==lang)? "block" : "none";    }
	}
var option=['eng','fre','spa','jap']; //to show the 'active' language
for(var i=0; i<option.length; i++) {
	obj=document.getElementById(option[i]);
    obj.style.color=(option[i]==lang.substr(0,3))? "red" : "navy";    }
}
}
//
function switch2()
{
var option=['tel1','tel2'];
for(var i=0; i<option.length; i++)
{	obj=document.getElementById(option[i]);
    obj.className=(obj.className=="visible")? "hidden" : "visible";    }
}
//

//
function toggle(div)
{
var option=['wine1','beer1','whisky1'];

for(var i=0; i<option.length; i++)
{	obj=document.getElementById(option[i]);
    obj.style.display=(option[i]==div) && !(obj.style.display=="block")? "block" : "none"; }
}

//
function pmtoggle(div) {
var option=['wine1','beer1','whisky1'];
var c=0;
	for(var i=0; i<option.length; i++) {
	var obj=document.getElementById(option[i]);
	obj.style.display=(option[i]==div) && !(obj.style.display=="block")? "block" : "none";
	if (obj.style.display=="none"){c++;}
	if (c==3){document.images['plusminus'].src="plus.gif";}
	else {document.images['plusminus'].src="minus.gif";}
	}
}

//

function switchImg(i){
document.images["wine"].src = i;
}
//

function ads(div) {
obj=document.getElementById(div);
if (obj) {
	obj.style.display=(obj.style.display=="none")? "block" : "none";
	}
}

function tcform(div) {
obj=document.getElementById(div);
obj.style.display=!(obj.style.display=="block")? "block" : "none";
document.location.href="#end";
}

function bg() {
w=document.body.offsetWidth;
if (w<700){
	document.getElementById('body').style.background="white";
}
else{
	document.getElementById('body').style.background="transparent";
}
}
//
function tol () {
tl=document.getElementById('toplinks');
w=document.body.offsetWidth;
if (tl && w<700) {
	tl.style.display="none";
}
if (tl && w>700) {
	tl.style.display="block";
}
}
//

function fixH(one,two) {
if (document.getElementById(one)) {
	var lh=document.getElementById(one).offsetHeight;
	var rh=document.getElementById(two).offsetHeight;
	var nh = Math.max(lh, rh);
	document.getElementById(one).style.height=nh+"px";
	document.getElementById(two).style.height=nh+"px";
	}
}

//this does it for three
function sortNum(a,b) { return b-a}
function fixH2(one,two,three) {
	if (document.getElementById(one)) {
		var obj=new Array(3);
		var option=[one,two,three];
		for(var i=0; i<option.length; i++) {
			document.getElementById(option[i]).style.height="auto";
			obj[i]=document.getElementById(option[i]).offsetHeight;
			nh=obj.sort(sortNum);
			}
	 	nh1=nh.splice(1,2);
		for(var i=0; i<option.length; i++) {
			document.getElementById(option[i]).style.height=nh+"px";
			}
	}
}
//
////for the highlight page
function show(l){
var name=l.href;
var nam=name.substr(37,10);
var divs=document.getElementsByTagName('div');
for (var x=0;x<divs.length;x++)
{
divs[x].style.color="black";
}
var obj=document.getElementById(nam);
obj.style.color = "red" ;

}
function hili() {
if(document.getElementById('toplinks')) {
	document.getElementById('one').style.display="block";
	document.getElementById('two').style.display="block";
	document.getElementById('three').style.display="block";
var mn=document.getElementById('toplinks');
var as=mn.getElementsByTagName('a');
for (var i=0;i<as.length;i++) {
as[i].onclick=function(){show(this)};
}
}
}

/*
styTog() -- a function to toggle CSS style attributes
This function accepts four parameters from the calling event:
targ_id, which is the id of the target element;
sty_attrJ, which is the style attribute's name in JavaScript syntax;
sty_attrC, which is the style attribute's name in CSS syntax;
set_val, which is the second toggle state value;

The element id, "zedSpan" is reserved for this function's use.
*/
function styTog(targ_id,sty_attrJ,sty_attrC,set_val){
var targ=document.getElementById(targ_id);
var targ_stat="";
var targ_sty="";
var attr_chk=sty_attrC.toLowerCase()
var excp_flag=0;
 if(attr_chk.indexOf("color")!=-1 || attr_chk.indexOf("font")!=-1){
    	excp_flag=1;
    if(!document.getElementById("zedSpan")){
    	var insSpan=document.createElement("span");
    	insSpan.setAttribute("id","zedSpan");
    	document.body.appendChild(insSpan);
    	}
    var zS=document.getElementById("zedSpan").style
    zS[sty_attrJ]=set_val;
    }
    if(targ.currentStyle){  //code for IE
    if(excp_flag==1)set_val=zS[sty_attrJ];
    	targ_stat=targ.currentStyle[sty_attrJ];
    }else{  //code for W3C-spec-compatible
    if(excp_flag==1){
    var tst_span=document.getElementById("zedSpan");
    var tst_sty=document.defaultView.getComputedStyle(tst_span,"");
    	set_val=tst_sty.getPropertyValue(sty_attrC);
    	excp_flag=0;
    	}
targ_sty=document.defaultView.getComputedStyle(targ,"");
targ_stat=targ_sty.getPropertyValue(sty_attrC);
    }
targ_stat!=set_val ? targ.style[sty_attrJ]=set_val : targ.style[sty_attrJ]="";
}

//suckerfish//


sfHover = function() {
	var sfEls = document.body.getElementsByTagName("LI");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);


//

function twoWindows (one,two) {
window.open(one);
window.open(two);
}

/////////////////
function randImg() {
var links= new Array(3);
links[0]='wine.jpg';
links[1]='whisky.jpg';
links[2]='beer.jpg';
var ran_unrounded=Math.random()*2;
var rand=Math.round(ran_unrounded);
var image= links[rand];
var imagehtml='<img src="'+image+'" alt="'+image.replace(/.jpg/, "")+'" />';
p = document.getElementById('rand-img');
if (p) {
	range = document.createRange();
	range.setStartBefore(p);
	p.appendChild(range.createContextualFragment(imagehtml));
	}
}
///

function randImgLink() {
var links= new Array(3);
links[0]=new Array();
links[0]['img']='wine.jpg';
links[0]['link']='http://wine.com';
links[1]=new Array();
links[1]['img']='whisky.jpg';
links[1]['link']='http://whisky.com';
links[2]=new Array();
links[2]['img']='beer.jpg';
links[2]['link']='http://beer.com';
var ran_unrounded=Math.random()*2;
var rand=Math.round(ran_unrounded);
var link= links[rand];
var linkhtml='<a href="'+link['link']+'"><img src="'+link['img']+'" alt="'+link['img'].replace(/.jpg/, "")+'" /></a>';
p = document.getElementById('rand-img-link');
if (p) {
 range = document.createRange();
 range.setStartBefore(p);
 p.appendChild(range.createContextualFragment(linkhtml));
 }
}
window.onload=randImgLink;
///


// ie transition //
var filterstring="progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0, wipeStyle=1, Duration=1, motion='forward')";
var filterstringcapt="revealTrans(transition=6,duration=1)";

var choices= new Array(3);
choices[0]= new Array(5);
choices[0][0]= 'wine200.jpg'; // big image
choices[0][1]= 'wine'; // alt text
choices[0][2]= 'wine_cap.jpg'; // caption
choices[0][3]= 'Mmmm... WINE'; // caption alt
choices[0][4]= 'http://wine.com'; // link

choices[1]= new Array(5);
choices[1][0]= 'beer200.jpg'; // big image
choices[1][1]= 'beer'; // alt text
choices[1][2]= 'beer_cap.jpg'; // caption
choices[1][3]= 'Mmmm... BEER'; // caption alt
choices[1][4]= 'http://beer.com'; // link

choices[2]= new Array(5);
choices[2][0]= 'whisky200.jpg'; // big image
choices[2][1]= 'whisky'; // alt text
choices[2][2]= 'whisky_cap.jpg'; // caption
choices[2][3]= 'Mmmm... WHISKY'; // caption alt
choices[2][4]= 'http://whisky.com'; // link

function transition(image) {
	var list=['wine','beer','whisky'];
	for(var i=0; i<list.length; i++) {  // this finds which one you want to show
		if (list[i]==image) {
			var choice=i;
			}
	}

	theimg = document.getElementById("bigpic"); //  the original big pic
	thecaption = document.getElementById("caption"); // the original caption
	thelink = document.getElementById("bigpicLink"); // the original big pic link

		if (theimg.filters && window.createPopup) {
			theimg.style.filter=filterstring;
			theimg.filters[0].Apply();
			theimg.filters[0].Play();
			setTimeout("modifyImageSrc("+choice+", true)", 1000); // pauses before showing new image
			return false;
		}
		modifyImageSrc(choice);
		return false;
}

function modifyImageSrc(choice, filterInit)
{
	if(filterInit)
	{
		theimg.style.filter="blendTrans(duration=1)"; // IE-only style rule
		theimg.filters[0].Apply();
		theimg.filters[0].Play();

		thecaption.style.filter=filterstringcapt;
		thecaption.filters[0].Apply();
		thecaption.filters[0].Play();
	}
	theimg.src = choices[choice][0]; // change the image
	theimg.alt = choices[choice][1];
	thecaption.src= choices[choice][2];
	thecaption.alt= choices[choice][3];
	thelink.href = choices[choice][4];
}
// end ie transition //





var t
var lastUrl;
var once=false;

function checkURL() {
var url=window.location.href;
if (once==true && url!=lastUrl) {
	var content=url.split("=");
	contentL=content.length;
	theContent=content[contentL-1];
	ajaxSwitch(theContent);
}
t=setTimeout("checkURL()",200)
lastUrl=url;
once=true;
}



function link(menu) {
	oLinks=document.getElementById(menu).getElementsByTagName('a');
	for (i=0; i<oLinks.length; i++) {
			oLinks[i].onclick=function() {
			var content=(this.href).split("=");
			contentL=content.length;
			content=content[contentL-1];
			ajaxSwitch(content);
			var newUrl="br.php?page=ajaxfixed#content="+content;
			window.location=newUrl;
			return false;
		}
	}
}

// togglebynext

function toggleNext(el) {
	var next=el.nextSibling;
	while(next.nodeType != 1) next = next.nextSibling;
	next.style.display=((next.style.display=="none") ? "block" : "none");
}



function toggleNextById(el) {
	var ccn="clicker";
	var clicker=document.getElementById(el);
	clicker.className+=" "+ccn;
	clicker.onclick=function() {toggleNext(this)}
	toggleNext(clicker);
}

function toggleNextByTagName(tname) {
	var ccn="clicker";
	var clickers=document.getElementsByTagName(tname);
	for (i=0; i<clickers.length; i++) {
	clickers[i].className+=" "+ccn;
	clickers[i].onclick=function() {toggleNext(this)}
	toggleNext(clickers[i]);
	}
}


function getElementsByTagAndClassName(tag,cname) {
var tags = document.getElementsByTagName(tag);
var cEls = new Array();
for (i=0; i<tags.length; i++) {
    var rE = new RegExp("(^|\\s)" + cname + "(\\s|$)");
	if (rE.test(tags[i].className)) {
		cEls.push(tags[i]);
		}
	}
return cEls;
}

function toggleNextByTagAndClassName(tag,cname) {
	var ccn="clicker";
	clickers=getElementsByTagAndClassName(tag,cname);
	for (i=0; i<clickers.length; i++) {
		clickers[i].className+=" "+ccn;
		clickers[i].onclick=function() {toggleNext(this)}
		toggleNext(clickers[i]);
	}
}
//


//
function getElementsByIdTagAndClassName(id,tag,cname) {
var tags = document.getElementById(id).getElementsByTagName(tag);
var cEls = new Array();
for (i=0; i<tags.length; i++) {
    var rE = new RegExp("(^|\\s)" + cname + "(\\s|$)");
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
		clickers[i].onclick=function() {toggleNext(this)}
		toggleNext(clickers[i]);
	}
}
//


//start. This one gets children with a certain className that are children of a certain ID.
function getElementsByIdThenClassName(id,cname) {
var nodes = document.getElementById(id).childNodes;
var cEls = new Array();
for (i=0; i<nodes.length; i++) {
    var rE = new RegExp("(^|\\s)" + cname + "(\\s|$)");
	if (rE.test(nodes[i].className)) {
		cEls.push(nodes[i]);
		}
	}
return cEls;
}

function toggleNextByIdThenClassName(id,cname) {
	var ccn="clicker";
	clickers=getElementsByIdThenClassName(id,cname);
	for (i=0; i<clickers.length; i++) {
		clickers[i].className+=" "+ccn;
		clickers[i].onclick=function() {toggleNext(this)}
		toggleNext(clickers[i]);
	}
}
//end

//start. This one should get all elements (ggkids) with a certain className within a certain ID.
function getAllElementsByIdThenClassName(id,cname) {
var nodes = document.getElementById(id).childNodes;
var cEls = new Array();
for (i=0; i<nodes.length; i++) {
    var rE = new RegExp("(^|\\s)" + cname + "(\\s|$)");
	if (rE.test(nodes[i].className)) {
		cEls.push(nodes[i]);
		}
	if (nodes[i].hasChildNodes()==true) {
		var gkids=nodes[i].childNodes;
		for (j=0; j<gkids.length; j++) {
			if (rE.test(gkids[j].className)) {
				cEls.push(gkids[j]);
				}
			if (gkids[j].hasChildNodes()==true) {
				var ggkids=gkids[j].childNodes;
				for (k=0; k<ggkids.length; k++) {
					if (rE.test(ggkids[k].className)) {
						cEls.push(ggkids[k]);
						}
					}
				}
			}
		}
	}
return cEls;
}

function toggleAllNextByIdThenClassName(id,cname) {
	var ccn="clicker";
	clickers=getAllElementsByIdThenClassName(id,cname);
	for (i=0; i<clickers.length; i++) {
		clickers[i].className+=" "+ccn;
		clickers[i].onclick=function() {toggleNext(this)}
		toggleNext(clickers[i]);
	}
}
//end



// toggleNextByIdAndTag 1,2,3 are the same but toggleNext 1,2,3 are different
function toggleNextByIdAndTag1(el,tname) {
	var ccn="clicker";
	clickers=document.getElementById(el).getElementsByTagName(tname);
	for (i=0; i<clickers.length; i++) {
		clickers[i].className+=" "+ccn;
		clickers[i].onclick=function() {toggleNext(this)}
		toggleNext(clickers[i]);
	}
}





// show only one
function toggleNext2(el,tname,first) {
	var next=el.nextSibling;
	var tags=el.parentNode.getElementsByTagName(tname);
	while(next.nodeType != 1) next = next.nextSibling;
	next.style.display=((next.style.display=="none") ? "block" : "none");
	if (first!=1){
		for (i=0; i<tags.length; i++) {
			var tohide=tags[i].nextSibling;
			while(tohide.nodeType != 1) tohide = tohide.nextSibling;
			if (tohide!=next){tohide.style.display="none";}
		}
	}
}

function toggleNextByIdAndTag2(el,tname) {
	var ccn="clicker";
	clickers=document.getElementById(el).getElementsByTagName(tname);
	for (i=0; i<clickers.length; i++) {
		clickers[i].className+=" "+ccn;
		clickers[i].onclick=function() {toggleNext2(this,tname)}
		toggleNext2(clickers[i],tname,1);
	}
}
//

// show only one  (absolute positioning)
function toggleNext3(el,tname,first) {
	var abscn="abs";
	var selcn="selected";
	var next=el.nextSibling;
	var tags=el.parentNode.getElementsByTagName(tname);
	while(next.nodeType != 1) next = next.nextSibling;
	next.style.display=((next.style.display=="none") ? "block" : "none");
	var rE = new RegExp("(^|\\s)" + abscn + "(\\s|$)");
	if (rE.test(next.className)==false) {next.className+=" "+abscn;}
	if (first!=1){
		for (i=0; i<tags.length; i++) {
			var tohide=tags[i].nextSibling;
			while(tohide.nodeType != 1) tohide = tohide.nextSibling;
			if (tohide!=next){tohide.style.display="none";}
			tags[i].className=tags[i].className.replace(new RegExp(selcn+"\\b"), "");
			if (tags[i]==el && next.style.display=="block"){
				var rEx = new RegExp("(^|\\s)" + selcn + "(\\s|$)");
				if (rEx.test(tags[i].className)==false) {tags[i].className+=" "+selcn;}
			}
		}
	}
}

function toggleNextByIdAndTag3(el,tname) {
	var ccn="clicker";
	clickers=document.getElementById(el).getElementsByTagName(tname);
	for (i=0; i<clickers.length; i++) {
		clickers[i].className+=" "+ccn;
		clickers[i].onclick=function() {toggleNext3(this,tname)}
		toggleNext3(clickers[i],tname,1);
	}
}
//



// show only one (absolute positioning) and show first one to begin
function toggleNext4(el,tname,first) {
	var abscn="abs";
	var selcn="selected";
	var next=el.nextSibling;
	var tags=el.parentNode.getElementsByTagName(tname);
	while(next.nodeType != 1) next = next.nextSibling;
	next.style.display=((next.style.display=="none") ? "block" : "none");
	var rE = new RegExp("(^|\\s)" +abscn + "(\\s|$)");
	if (rE.test(next.className)==false) {next.className+=" "+abscn;}
	if (first!=1){
		for (i=0; i<tags.length; i++) {
			var tohide=tags[i].nextSibling;
			while(tohide.nodeType != 1) tohide = tohide.nextSibling;
			if (tohide!=next){tohide.style.display="none";}
			tags[i].className=tags[i].className.replace(new RegExp(selcn+"\\b"), "");
			if (tags[i]==el && next.style.display=="block"){
				var rEx = new RegExp("(^|\\s)" + selcn + "(\\s|$)");
				if (rEx.test(tags[i].className)==false) {tags[i].className+=" "+selcn;}
			}
		}
	}
	else {
		var firstone=tags[0].nextSibling;
		while(firstone.nodeType != 1) firstone = firstone.nextSibling;
		firstone.style.display="block";
		var rEx = new RegExp("(^|\\s)" + selcn + "(\\s|$)");
		if (rEx.test(tags[0].className)==false) {tags[0].className+=" "+selcn;}
	}
}

function toggleNextByIdAndTag4(el,tname) {
	var ccn="clicker";
	clickers=document.getElementById(el).getElementsByTagName(tname);
	for (i=0; i<clickers.length; i++) {
		clickers[i].className+=" "+ccn;
		clickers[i].onclick=function() {toggleNext4(this,tname)}
		toggleNext4(clickers[i],tname,1);
	}
}

//

// show first one to begin and always show one (absolute positioning)
function toggleNext5(el,tname,first) {
	var abscn="abs";
	var selcn="selected";
	var next=el.nextSibling;
	var tags=el.parentNode.getElementsByTagName(tname);
	while(next.nodeType != 1) next = next.nextSibling;
	next.style.display=((next.style.display=="none") ? "block" : "none");
	var rE = new RegExp("(^|\\s)" +abscn + "(\\s|$)");
	if (rE.test(next.className)==false) {next.className+=" "+abscn;}
	if (first!=1){
		for (i=0; i<tags.length; i++) {
			var tohide=tags[i].nextSibling;
			while(tohide.nodeType != 1) tohide = tohide.nextSibling;
			if (tohide!=next){tohide.style.display="none";}
			tags[i].className=tags[i].className.replace(new RegExp(selcn+"\\b"), "");
			if (tags[i]==el){
				next.style.display="block";
				var rEx = new RegExp("(^|\\s)" + selcn + "(\\s|$)");
				if (rEx.test(tags[i].className)==false) {tags[i].className+=" "+selcn;}
			}
		}
	}
	else {
		var firstone=tags[0].nextSibling;
		while(firstone.nodeType != 1) firstone = firstone.nextSibling;
		firstone.style.display="block";
		var rEx = new RegExp("(^|\\s)" + selcn + "(\\s|$)");
		if (rEx.test(tags[0].className)==false) {tags[0].className+=" "+selcn;}
	}
}

function toggleNextByIdAndTag5(el,tname) {
	var ccn="clicker";
	clickers=document.getElementById(el).getElementsByTagName(tname);
	for (i=0; i<clickers.length; i++) {
		clickers[i].className+=" "+ccn;
		clickers[i].onclick=function() {toggleNext5(this,tname)}
		toggleNext5(clickers[i],tname,1);
	}
}

//

// show first one to begin and always show one (in the document flow, below the list)
function toggleNext6(el,tname,first) {
	var selcn="selected";
	var parent=el.parentNode;
	var tags=parent.getElementsByTagName(tname);
	var next=el.nextSibling;
	var last=parent.lastChild;
	while(last.nodeType != 1) last = last.previousSibling;
	while(next.nodeType != 1) next = next.nextSibling;
	next.style.display="none";
	if (first!=1){
		for (i=0; i<tags.length; i++) {
			var tohide=tags[i].nextSibling;
			while(tohide.nodeType != 1) tohide = tohide.nextSibling;
			if (tohide!=next){tohide.style.display="none";}
			tags[i].className=tags[i].className.replace(new RegExp(selcn+"\\b"), "");
			if (tags[i]==el){
				var rEx = new RegExp("(^|\\s)" + selcn + "(\\s|$)");
				if (rEx.test(tags[i].className)==false) {tags[i].className+=" "+selcn;}
			}
		}
		var clone=next.cloneNode(true);
		clone.style.display="block";
		parent.removeChild(last);
		parent.appendChild(clone);
	}
	else {
		var firstone=tags[0].nextSibling;
		while(firstone.nodeType != 1) firstone = firstone.nextSibling;
		var clone=firstone.cloneNode(true);
		clone.style.display="block";
		if (last.innerHTML!=clone.innerHTML){parent.appendChild(clone);}
		var rEx = new RegExp("(^|\\s)" + selcn + "(\\s|$)");
		if (rEx.test(tags[0].className)==false) {tags[0].className+=" "+selcn;}
	}
}

function toggleNextByIdAndTag6(el,tname) {
	var ccn="clicker";
	clickers=document.getElementById(el).getElementsByTagName(tname);
	for (i=0; i<clickers.length; i++) {
		clickers[i].className+=" "+ccn;
		clickers[i].onclick=function() {toggleNext6(this,tname)}
		toggleNext6(clickers[i],tname,1);
	}
}
// end togglebynext

function checkform() {
	var nameF=document.commentform.name.value;
	var commentF=document.commentform.comment.value;
	var alertM="";
	if ((nameF.length==0) || (nameF==null)) {
		alertM+="No name?\n\r";
		var wrong=1;
	}
	if ((commentF.length==0) || (commentF==null)) {
		alertM+="No comment?";
		var wrong=1;
	}
	if (wrong) {
		alert(alertM);
		return false;
	}
	else {
		document.commentform.submit();
	}
}

// striped list

function stripedList(list) {
var items=document.getElementById(list).getElementsByTagName('li');
for (i=0; i<items.length; i++) {
	if ((i%2)?false:true) {
		items[i].className+=" odd";
		}
	else {
		items[i].className+=" even";
		}
	}
}

// remove background on guide
function no_bg() {
	if (document.getElementById('guide')) {
	document.getElementById('no_bg').onclick=function() {
		document.body.style.backgroundImage="url()";
		}
	}
}

// chain_select_js
var countries=new Array();

countries[0]=new Array();
countries[0]['country']="United Kingdom";
countries[0]['cities']=['London','Manchester','Birmingham','Liverpool','Edinburgh','Cardiff','Belfast'];
countries[1]=new Array();
countries[1]['country']="United States";
countries[1]['cities']=['Washington DC','New York','Los Angeles', 'Chicago'];
countries[2]=new Array();
countries[2]['country']="Australia";
countries[2]['cities']=['Canberra','Melbourne','Sydney', 'Brisbane'];
countries[3]=new Array();
countries[3]['country']="Japan";
countries[3]['cities']=['Tokyo','Osaka','Fukuoka','Sendai','Sapporo'];

function fillBox2(box2,country) {
for (i=0; i<countries.length; i++) {
	if (countries[i]['country']==country) {
	var cities=countries[i]['cities'];
	}
}
for (i=0; i<cities.length; i++) {
   var x=document.createElement('option');
   var y=document.createTextNode(cities[i]);
   x.appendChild(y);
   box2.appendChild(x);
 }
}

function initBoxes(box1,box2) {
var country=document.getElementById(box1);
var city=document.getElementById(box2);
for (i=0; i<countries.length; i++) {
   var x=document.createElement('option');
   var y=document.createTextNode(countries[i]['country']);
   x.appendChild(y);
   if (window.attachEvent) {x.setAttribute('value',y.nodeValue);} // for IE
   country.appendChild(x);
 }

country.onchange=function() {
 if(this.value!="") {
  var list=document.getElementById(box2);
  while (list.childNodes[0]) {
	list.removeChild(list.childNodes[0])
	}
  fillBox2(city,this.value);
  }
 }

 fillBox2(city,country.value);
}

function showsrc(div,picsrc){
if (div.childNodes[1]){
div.removeChild(div.childNodes[1]);
}
else {
var textbox = document.createElement('textarea');
textbox.innerHTML=picsrc;
textbox.setAttribute("class","src");
div.appendChild(textbox);
	}
}

function showTT(el) {
	var ttext=el.title;
	var tt=document.createElement('SPAN');
	var tnode=document.createTextNode(ttext);
	tt.appendChild(tnode);
	el.parentNode.insertBefore(tt,el.nextSibling);
	tt.className="tt";
	el.title="";
}
function hideTT(el) {
	var ttext=el.nextSibling.childNodes[0].nodeValue;
	el.parentNode.removeChild(el.nextSibling);
	el.title=ttext;
}

// tooltip
function tooltip() {
var imgs=document.getElementsByTagName('img');
for (i=0; i<imgs.length; i++) {
	imgs[i].onmouseover=function() {showTT(this);}
	imgs[i].onmouseout=function() {hideTT(this);}
	}
}

// switch_img_on_img_click
function changePic(el, pic1, pic2) {
var pic=((el.src.match(pic1)!=null)? pic2 : pic1);
el.src="images/"+pic+".jpg";
}

// check_all
function checkAll(ca) {
var fs=ca.id.split('-')[1];
var cboxes=document.getElementById('fs-'+fs).getElementsByTagName('input');
	for (j=0; j<cboxes.length; j++) {
		cboxes[j].checked=((ca.checked==true)? true : false);
	}
}
function initCheckAll() {
var fsets=document.getElementById('caForm').getElementsByTagName('fieldset');
	for (i=0; i<fsets.length; i++) {
	document.getElementById('ca-'+i).onclick=function() {checkAll(this)}
	}
}


// check ip format
function check_ip_format(ip_addr) {
var valid=true;
var rE = new RegExp("/^((127)|(192)|(10).*)$/");
   if (rE.test(ip_addr)) {
   valid = false;
   }
   else {
   var ip = ip_addr.split(".");
       if(ip.length!= 4) {
	   valid = false;
       }
       else {
	   for (i=0; i<ip.length; i++) {
			if (isNaN(ip[i])==true || ip[i] > 255 || ip[i] < 1) {
				valid = false;
               }
           }
       }
   }
   if (valid==false) {alert('Oy! Cut it out!');}
}

// external_links
function external() {
var as=document.getElementsByTagName('a');
	for (i=0; i<as.length; i++) {
		if (as[i].getAttribute('rel')=="external") {
			as[i].onclick=function() {
				!window.open(this.href);
				return false;
			}
		}
	}
}

// font-family select
function font() {
	var ff=document.getElementById('fontfamily');
	ff.onchange=function() {
		if (this.value!=null) {
			document.body.style.fontFamily=this.value;
			}
	}
}

// switch_img_plus
function changePicPlus(el, pic1, alt1, pic2, alt2) {
if ((el.src).match("images/"+pic1+".jpg")!=null) {
	el.src="images/"+pic2+".jpg";
	el.alt=alt2;
	el.title=alt2;
	}
	else {
	el.src="images/"+pic1+".jpg";
	el.alt=alt1;
	el.title=alt1;
	}
}

// for new menu
function toggleNextSpesh(el,clickers) {
if (clickers==1) {
var next=el.nextSibling;
while(next.nodeType != 1) next=next.nextSibling;
var rE = new RegExp("(^|\\s)thisun(\\s|$)");
   if (rE.test(next.className)==false) {
		next.style.display="none";
		}
	}
	else {
		for (i=0; i<clickers.length; i++) {
		 var next=clickers[i].nextSibling;
		 while(next.nodeType != 1) next=next.nextSibling;
			if(clickers[i]!=el) {
			next.style.display="none";
			}
			else {
			next.style.display=((next.style.display=="none") ? "block" : "none");
			}
		  }
	}
}

function toggleNextByTagAndClassNameSpesh(tag,cname) {
 var ccn="clicker";
 clickers=getElementsByTagAndClassName(tag,cname);
 for (i=0; i<clickers.length; i++) {
  clickers[i].className+=" "+ccn;
  clickers[i].onclick=function() {toggleNextSpesh(this,clickers); return false;}
  toggleNextSpesh(clickers[i],1);
 }
}

function fillBox22(box1,sel2,countries) {
boxNo=(box1.id).substring((box1.id).length-1);
box2=document.getElementById(sel2+'_'+boxNo);
 while (box2.childNodes[0]) {
	box2.removeChild(box2.childNodes[0])
	}
 for (i=0; i<countries.length; i++) {
	if (countries[i]['country']==box1.value) {
	var cities=countries[i]['cities'];
	}
 }
for (i=1; i<cities.length; i++) {
   var x=document.createElement('option');
   var y=document.createTextNode(cities[i]);
   x.appendChild(y);
   box2.appendChild(x);
 }
}


function buildBoxes(no,sel1,sel2) {


var countries=new Array();

countries[0]=new Array();
countries[0]['country']="";
countries[0]['cities']='';
countries[1]=new Array();
countries[1]['country']="United Kingdom";
countries[1]['cities']=['London','Manchester','Birmingham','Liverpool','Edinburgh','Cardiff','Belfast'];
countries[2]=new Array();
countries[2]['country']="United States";
countries[2]['cities']=['Washington DC','New York','Los Angeles', 'Chicago'];
countries[3]=new Array();
countries[3]['country']="Australia";
countries[3]['cities']=['Canberra','Melbourne','Sydney', 'Brisbane'];
countries[4]=new Array();
countries[4]['country']="Japan";
countries[4]['cities']=['Tokyo','Osaka','Fukuoka','Sendai','Sapporo'];


 var theForm=document.getElementById('theForm');

   for (j=0; j<no; j++) {

   label1=document.createElement('label');
   text1=document.createTextNode(sel1+' :');
   label1.appendChild(text1);
   box1=document.createElement('select');
   box1.id=sel1+"_"+j;
   z = document.createAttribute('name');
   z.value = sel1;
   box1.setAttributeNode(z);

   label2=document.createElement('label');
   text2=document.createTextNode(sel2+' :');
   label2.appendChild(text2);
   box2=document.createElement('select');
   box2.id=sel2+"_"+j;
   z = document.createAttribute('name');
   z.value = sel2;
   box2.setAttributeNode(z);


    for (i=0; i<countries.length; i++) {
     var x=document.createElement('option');
     var y=document.createTextNode(countries[i]['country']);
     x.appendChild(y);
     box1.appendChild(x);
    }

   label1.appendChild(box1);
   label2.appendChild(box2);
   para=document.createElement('p');
   para.appendChild(label1);
   para.appendChild(label2);

   theForm.appendChild(para);

   fillBox22(box1,sel2,countries);

    box1.onchange=function() {
    fillBox22(this,sel2,countries);
    }
 }
}


window.onload=function()
{
	switch1('one');
	switchlang('english');
	ads('commentform');
	bg ();
	tol();
	fixH('leftcolumn','rightcolumn');
	fixH2('left','right','centre');
	hili();
	randImg();
	randImgLink();
	no_bg();
	if (document.getElementById('css_sub')) {
	toggleNextByTagAndClassNameSpesh('a','sub');
	}
	if (document.getElementById('stories')) {
	hidestories();
	stories(1);
	}
	if (document.getElementById('tstories')) {
	hidetstories();
	tstories(1);
	}
	if (document.getElementById('stories2')) {
	hidestories2();
	stories2(1);
	}
	if (document.getElementById('togglenext')) {
		toggleNextById('salutation')
		toggleNextByTagName('h2')
		toggleNextByTagAndClassName('p','number')
		toggleNextByIdTagAndClassName('byidtagandclass','p','num')
		toggleNextByIdAndTag1('dlist1','dt')
		toggleNextByIdAndTag2('dlist2','dt')
		toggleNextByIdAndTag3('dlist3','dt')
		toggleNextByIdAndTag4('dlist4','dt')
		toggleNextByIdAndTag5('dlist5','dt')
		toggleNextByIdAndTag6('dlist6','dt')
		toggleNextByIdAndTag6('dlist7','dt')
	}
	if (document.getElementById('ajaxfixed')) {
	checkURL();
	link('options');
	}
	if (document.getElementById('stripedlist')) {
	stripedList('list');
	}
	if (document.getElementById('ajaxswitchcontent')) {
	showIt();
	}
	if (document.getElementById('chain_select')) {
	initCs();
	}
	if (document.getElementById('chain_select_js')) {
	initBoxes('country','city');
	}
	if (document.getElementById('chain_select_js_boxes')) {
	buildBoxes(6,'country','city');
	}
	if (document.getElementById('jstt')) {
	tooltip();
	}
	if (document.getElementById('caForm')) {
	initCheckAll();
	}
	if (document.getElementById('checkip')) {
	document.getElementById('checkip').onchange=function() {
		check_ip_format(this.value);
		}
	}

	if (document.getElementById('drink')) {
	var pic=document.getElementById("drink");
	pic.onclick=function(){changePic(this,"wine","beer");}
	}
	if (document.getElementById('external_links')) {
	external();
	}
	if (document.getElementById('fontfamily')) {
	font();
	}
	if (document.getElementById('theDrink')) {
	var pic=document.getElementById('theDrink');
	pic.onclick=function(){changePicPlus(this,'wine','a glass of wine','beer','some beer');}
	}

}
window.onresize=function()
{
	bg();
	tol();
}

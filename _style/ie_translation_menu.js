// Attaching a .ie6_has_js class to the body tag, so we can style specifically for ie6 with JavaScript.

window.onload = function(){
	document.body.className = "ie6_has_js";
	//alert(document.body.className);	
}

// Mimicking :hover behavior with SuckerFish script. 
// We are attaching a .sfhover class to the first div inside #just_for_ie7, when it's hovered.

sfHover = function() {
	var sfEls = document.getElementById("just_for_ie7").getElementsByTagName("div");
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

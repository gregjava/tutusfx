// These are Javascript media query variables
var browserwidth = window.matchMedia("(max-width: 1200px)"); var browserwidth1 = window.matchMedia("(max-width: 800px)");
	
// These are Javascript id selector and utility variables
var expandablecolumn = document.getElementsByClassName("expandableColumn");
var header = document.getElementById("topnav"); var rates = document.getElementById("ratebar"); var title = document.getElementById("headertitle"); var headercontent = document.getElementById("headercontent");
var ads = document.getElementById("ads"); var upperclosebtn = document.getElementById("upperclosebtn"); var headeroffset = header.offsetTop; var floatingcolumnclosed = false; var textclosed = false; var upperclosing = false; var floatingcolumn = document.getElementsByClassName("floatingColumn"); var topheadertitle = document.getElementById("headertitle"); var topheadercontent = document.getElementById("headercontent");

	/* Call screen resize listener function & attach listener function at run time to ensure consistency of 1-col layouts */	
	windowsize(browserwidth,browserwidth1); browserwidth.addListener(windowsize);
	
	/* Set element properties according to browser's current width; used for 1-col layouts */	
	function windowsize(browserwidth,browserwidth1) { // ensure mainColumn remains spread across the page once user closes the floatingColumn
		if (browserwidth1.matches) { /* Ensures mainColumn is spread across the page at browserwidth <=800px */ expandablecolumn.style.width="99%"; expandablecolumn.style.margin="0.5%"; } 
		else if (browserwidth.matches) { /* Maintain element properties using JQuery, at 800px < browserwidth <= 1200px */ if (floatingcolumnclosed==true) { expandablecolumn.style.width="99%"; expandablecolumn.style.margin="0.5%"; } else expandablecolumn.style.width="65%"; } 
		else { /* Maintain element properties using JQuery, at browserwidth > 1200px */ if (floatingcolumnclosed==true) { expandablecolumn.style.width="99%"; expandablecolumn.style.margin="0.5%"; } else expandablecolumn.style.width="65%"; }
	}
	
	/* Default Page-Setter Function */
	function myFunction() {
		if (window.pageYOffset > (headeroffset-(headeroffset/10)-50)) { 
			if (upperclosing==true) { if (window.pageYOffset > (headeroffset-(headeroffset/10))) { floatingcolumn.style.top="110px"; header.classList.remove("sticky"); header.classList.add("sticky2"); } } else { floatingcolumn.style.top="160px"; header.classList.remove("sticky2"); header.classList.add("sticky"); } 
		} else { if (upperclosing==true) { floatingcolumn.style.top="55px"; } else { floatingcolumn.style.top="105px"; }
			title.style.paddingTop = (window.pageYOffset+30)+"px"; title.style.fontSize = (90-(3*window.pageYOffset/25))+"px"; 
			headercontent.style.paddingTop = (window.pageYOffset-220)+"px"; headercontent.style.fontSize = (40-(window.pageYOffset/25))+"px";
			if (window.pageYOffset > 250) { (window.pageYOffset/2)+"px"; headercontent.style.fontSize = "0px"; } 
			if (upperclosing==true) { header.classList.remove("sticky2"); } else { header.classList.remove("sticky"); } 
		}
		if (upperclosing==true) { rates.classList.remove("upperbar"); rates.style.height = "0px"; rates.style.float = "top";  
			upperclosebtn.classList.remove("glyphicon-arrow-right"); upperclosebtn.classList.add("glyphicon-arrow-left"); ads.style.fontSize = "0%";
		} else { rates.classList.add("upperbar"); rates.style.height = "50px"; rates.style.top = "0px"; rates.style.zIndex = "1000";
			upperclosebtn.classList.remove("glyphicon-arrow-left"); upperclosebtn.classList.add("glyphicon-arrow-right"); ads.style.fontSize = "100%"; setBarTheme(rates,upperclosebtn); 
		} if (textclosed==true) { topheadertitle.hide(); topheadercontent.hide(); } else { topheadertitle.show(); topheadercontent.show(); } 
		windowsize(browserwidth,browserwidth1); // Call screen resize listener function to ensure consistency in browser properties for 1-col layouts
	} myFunction(); // call default page setter function at runtime
	
	window.onscroll = function() { myFunction(); } // call default page setter function on scroll
	/* Apply theme-specific colors to bar (footer/ratebar) elements */
	function setBarTheme(elementdiv,elementclosebtn){
		elementdiv.style.backgroundColor = "#004300"; elementclosebtn.style.background = "white"; elementclosebtn.style.color = "#004300"; 
	}
	/* Script is written in Javascript/JQuery */
	// These are tag selector variables
	var body = $("body"); var img = $("img"); var marquee = $("marquee"); var thisselect = $("select"); var paragraph = $("p"); var allinputs = $("input");
	var ul = $("ul"); var h3 = $("h3"); var h4 = $("h4"); var h5 = $("h5"); var h6 = $("h6"); var hr = $("hr"); var textinputarea = $("textarea");
	 
	// These are class selector variables
	var upperFooter = $(".upper-footer"); var upperFooterlink = $(".upper-footer a"); var footer = $(".footer"); var footercard = $(".footerCard"); var closethis = $(".floatingColumn .close"); var closethat = $(".expandableColumn .close");
	var trendingtrades = $(".trendingtrades"); var trendingtradescontent = $(".trendingtrades p"); var trendingtradeusername = $(".trendingtradeusername"); var expandablecolumn = $(".expandableColumn"); var siteassistant = $(".assistant");
	var card = $(".card"); var cardlist = $(".cardlist"); var picture = $(".picture"); var cardp = $(".card p"); var warningTextDiv = $(".warning"); var warningspan = $(".warning span"); var maincolumn = $(".mainColumn");
	var navcontainer = $(".navbar"); var drawer = $(".collapse"); var dropdown = $(".contactUs-regardingSelect"); var toggledrawer = $(".navbar-toggle"); var rightalign = $(".rightAlign"); var floatingcolumn = $(".floatingColumn");
	var atradeview = $(".tradeview"); var positiverate = $(".positiverate"); var negativerate = $(".negativerate"); var navbarcontainer = $(".container-fluid"); var navheaderinputs = $("li input"); var navheaderlinks = $("nav a");
	var itemlist = $(".dropdown"); var menutitle = $(".dropdown-toggle"); var topheader = $(".header"); var elevatedObj = $(".elevatedObj"); var afterrow = $(".row:after"); var afterfooter = $(".footer:after"); var fakeimg = $(".fakeimg");
	
	// These are id selector variables
	var closebtn = $("#close"); var ratebar = $("#ratebar"); var backbtn = $("#back"); var nextbtn = $("#next"); var footerdivheader = $("#footerDivHeader"); var footerdivtexts = $("#footerDivTexts"); 
	var menubar = $("#topnav"); var menuinput = $("#topnav input"); var menuimage = $("#topnav img"); var topheadertitle = $("#headertitle"); var topheadercontent = $("#headercontent");
	var segments = $("#segment"); var progressBar = $("#progressBar"); var toggleicons = [$("#icon-bar1"),$("#icon-bar2"),$("#icon-bar3"),$("#icon-bar4")]; var myprogress = $("#myProgress"); 
	
	// These are utility variables and flags
	var THEME; var i = 0; var HIDDEN = true; var footerclosing = true; var textclosed = false; var upperclosing = false; var floatingcolumnclosed = false; var QUERYING = false;
	
	// Set current theme or default to THEME[0]
	if (THEME==null) setTheme(THEME = 0); else setTheme(THEME);
	
	/* Set element properties according to the defined theme */
	function setTheme(THEME){
		body.css("margin","0").css("padding","8.05% 0 0 0").css("width","auto").css("font-family","Cambria, Cochin, Georgia, Times, 'Times New Roman', serif");
		navcontainer.css("border-radius","0px 0px 5px 5px").css("box-shadow","-3px 5px 3px #454");
		segments.css("text-shadow","-1px 1px 1px #010");
		paragraph.css("padding","2% 0.1%").css("margin","-1.5% 0"); 
		afterrow.css("content","").css("display","table").css("clear","both");
		card.css("margin","0 2.5% 10% 2.5%").css("padding","5%").css("width","95%").css("border-radius","3px").css("text-shadow","-1px 1px 1px #010");
		cardp.css("text-align","justify");
		cardlist.css("dropdown","100%"); 
		picture.css("height","100px"); 
		img.css("position","relative").css("top","0").css("left","0").css("width","100%").css("height","100%").css("float","left top").css("border-radius","1.5px");
		textinputarea.css("min-height","300px").css("height","80%").css("width","100%").css("top","0").css("left","0").css("text-align","justify").css("float","center").css("border-radius","5px").css("padding","16px 4px");
		topheader.css("text-align","center").css("text-shadow","-8px 8px 16px #B2D4B2").css("min-height","100%").css("height","450px");
		topheadertitle.css("display","inline-block").css("font-family","Garamond").css("font-stretch","expanded");
		topheadercontent.css("display","inline-block").css("font-style","italic").css("font-family","Garamond").css("font-stretch","condensed");
		drawer.css("height","100%").css("width","auto").css("text-align","justify");
		fakeimg.css("border-radius","2px").css("box-shadow","-3px 3px 2px #aba").css("transition","all 0.3s ease-in").css("-webkit-transition","all 0.3s ease-in").css("-moz-transition","all 0.3s ease-in").css("-o-transition","all 0.3s ease-in").css("transition-delay","0.05s");
		h3.css("margin","-1% 0").css("font-size","30px").css("font-weight","bolder").css("color","#003200").css("text-transform","capitalize"); 
		h4.css("margin","-2.5% 0").css("font-size","24px").css("font-weight","bold").css("font-stretch","ultra-condensed").css("color","#004300").css("float","left"); 
		h5.css("margin","1% 0 2.5% 0").css("font-size","18px").css("color","#005400").css("text-transform","capitalize"); 
		h6.css("margin","-1% 0").css("font-size","12px").css("color","#006500");
		hr.css("width","100%").css("box-shadow","-1px 1px 1px #010").css("margin","2% 0 -0.1% 0");
		ul.css("list-style-type","none"); 
		rightalign.css("float","right"); 
		marquee.css("width","99%"); 
		negativerate.css("font-family","Courier New, Times New Roman, Arial").css("font-size","100%").css("font-weight","lighter").css("font-stretch","condensed").css("text-decoration","blink");
		positiverate.css("font-family","Courier New, Times New Roman, Arial").css("font-size","100%").css("font-weight","lighter").css("font-stretch","condensed").css("text-decoration","blink");
		backbtn.css("border-radius","2.5px 0px 0px 2.5px").css("text-align","center").css("width","50px").css("height","39px").css("margin","10% 5% 5% 10%").css("padding","0").css("border","none").css("z-index","1000");
		nextbtn.css("border-radius","0px 2.5px 2.5px 0px").css("text-align","center").css("width","50px").css("height","39px").css("margin","11% 5% 5% 0").css("padding","0").css("border","none").css("z-index","1000");
		elevatedObj.css("display","inline-block").css("width","auto").css("height","auto").css("margin","0").css("padding","0").css("border","none").css("z-index","1000");
		trendingtrades.css("padding","3% 1%").css("margin","0");
		trendingtradescontent.css("padding","0").css("margin","-2% 0");
		upperFooter.css("padding","1%");
		toggledrawer.css("transition","all 0.3s ease-in"); 
		itemlist.css("z-index","1000").css("margin","0 0 -2.3% 0");
		menubar.css("z-index","1000").css("display","block").css("margin","0 0 50px 0");
		menutitle.css("font-size","100%").css("padding","5%").css("margin","0").css("min-width","80px");
		menuinput.css("text-align","center").css("padding","14px 8px").css("text-decoration","none").css("display","inline").css("transition","all 0.3s ease-in").css("-webkit-transition","all 0.3s ease-in").css("-moz-transition","all 0.3s ease-in").css("-o-transition","all 0.3s ease-in");
		allinputs.css("z-index","300");
		menuimage.css("width","40px");
		atradeview.css("height","650px").css("width","cover");
		floatingcolumn.css("text-align","center");
		expandablecolumn.css("margin","0").css("padding","0").css("left","0").css("top","0").css("height","100%");
		siteassistant.css("margin","50px 0px").css("padding","0").css("display","inline-block").css("background","URL('https://www.tutusfx.com/assets/images/open.gif')").css("background-size","cover").css("height","250px").css("width","250px").css("border-radius","40%");
		maincolumn.css("margin","0").css("padding","0").css("left","0").css("top","0");
		closethis.css("border-radius","50%").css("width","50px").css("height","50px").css("margin","10px"); 
		closethat.css("border-radius","50%").css("width","50px").css("height","50px").css("margin","10px"); 
		closebtn.css("display","block");
		footer.css("width","100%").css("height","600px").css("z-index","500").css("border-radius","5px 5px 0px 0px").css("margin-top","51px").css("padding","0").css("font-stretch","condensed").css("font-weight","lighter");
		footerdivheader.css("font-weight","bold").css("font-size","100%");
		footerdivtexts.css("text-align","justify").css("float","center").css("font-size","99%");
		footercard.css("float","left").css("text-align","justify").css("padding","0% 2%");
		afterfooter.css("content","").css("display","table").css("clear","both");
		
		closethat.hide(); // Hide the close button on expandableColumns on default. The button will only be needed if floatingColumn is closed
		
		/* Apply theme, revtheme, bodybkgd, header & fakeimg colors, according to the current theme */
		if (THEME==0){ applyTheme("#004300","#ffffff","#baf1ba","#fefefe","#bbfebb","#ff1234","#ff0e","#eeeeee","#B2D4B2"); } /* theme, revtheme, bodybkgd, header, fakeimg */ 
		else if (THEME==1) { applyTheme("#000000","#ffffff","#444444","#fefefe","#aaaaaa","#ff1234","#ff0e","#eeeeee","#B2D4B2"); } 
		else if (THEME==2) { applyTheme("#ffffff","#000000","#fefefe","#000000","#eeeeee","#ff1234","#ff0e","#eeeeee","#B2D4B2"); } 
		else if (THEME==3) { applyTheme("#1234ab","#ffffff","#babaf1","#fefefe","#5678ef","#ff1234","#ff0e","#eeeeee","#B2D4B2"); } 
		else if (THEME==4) { applyTheme("#ff1234","#ffffff","#f1baba","#fefefe","#44cdef","#1234ff","#ff0e","#eeeeee","#B2D4B2"); } 
		else if (THEME==5) { applyTheme("#ff12ff","#ffffff","#f1baf1","#fefefe","#aaaaaa","#ff1234","#ff0e","#eeeeee","#B2D4B2"); } 
		else if (THEME==6) { applyTheme("#12ffff","#ffffff","#baf1f1","#004300","#aaaaaa","#ff1234","#ff0e","#eeeeee","#B2D4B2"); } 
		else if (THEME==7) { applyTheme("#008080","#ffffff","#f1f1f1","#fefefe","#aaaaaa","#ff1234","#ff0e","#eeeeee","#B2D4B2"); } 
		else if (THEME==8) { applyTheme("#800080","#ffffff","#baf1f1","#fefefe","#aaaaaa","#ff1234","#ff0e","#eeeeee","#B2D4B2"); } 
		else if (THEME==9) { applyTheme("#c0c0c0","#ffffff","#f1f1f1","#004300","#aaaaaa","#ff1234","#ff0e","#eeeeee","#B2D4B2"); } 
		for (i=0; i<toggleicons.length; i++) { if (THEME==2) { toggleicons[i].css("background","#aaaaaa"); } else toggleicons[i].css("background","white"); } // Set menu button background color to white
	}
	
	/* Apply theme-specific colors to related elements using JQuery */
	function applyTheme(color1,color2,bodycolor,headercolor,fakeimgcolor,negratecolor,marqueecolor,selectcolor,trendingtradecolor){
		elevatedObj.css("background",color1);
		positiverate.css("color",color2);
		body.css("background",bodycolor); 
		topheader.css("background","none").css("color",headercolor);
		fakeimg.css("background",fakeimgcolor); 
		negativerate.css("color",negratecolor);
		marquee.css("color",marqueecolor);
		thisselect.css("background",selectcolor);
		trendingtradeusername.css("background","none").css("color",trendingtradecolor);
		topheadertitle.css("color",color2);
		topheadercontent.css("color",color2);
		backbtn.css("background","none").css("color",color2);
		nextbtn.css("background","none").css("color",color2);
		closethis.css("background",color2).css("color",color1); 
		closethat.css("background",color2).css("color",color1); 
		closebtn.css("background",color2); 
		card.css("background",color2);
		h3.css("color",color1); 
		navbarcontainer.css("background",color1); 
		navheaderlinks.css("background",color1).css("color",color2); 
		navheaderinputs.css("background",color1).css("color",color2);
		ratebar.css("background",color1); 
		toggledrawer.css("background",color1); 
		warningspan.css("background",color1).css("color",color2);
		myprogress.css("background",color2);
		progressBar.css("background",color1);	
		footer.css("background",color1).css("color",color2);
		footercard.css("background",color1).css("color",color2); 
		footerdivtexts.css("color",color2);
		footerdivheader.css("color",color2);
		upperFooterlink.css("background","none").css("color",color2);
		menubar.css("background",color1); 
		menuinput.css("background",color1).css("color",headercolor);
	}
	
	/* Apply theme-specific colors to bar (footer/ratebar) elements using Javascript */
	function setBarTheme(elementdiv,elementclosebtn){
		if (THEME==0) { elementdiv.style.backgroundColor = "#004300"; elementclosebtn.style.background = "white"; elementclosebtn.style.color = "#004300"; } 
		else if (THEME==1){ elementdiv.style.backgroundColor = "#000000"; elementclosebtn.style.background = "white"; elementclosebtn.style.color = "#000000"; } 
		else if (THEME==2){ elementdiv.style.backgroundColor = "#aaaaaa"; elementclosebtn.style.background = "black"; elementclosebtn.style.color = "#ffffff"; } 
		else if (THEME==3){ elementdiv.style.backgroundColor = "#1234ab"; elementclosebtn.style.background = "white"; elementclosebtn.style.color = "#1234ab"; } 
		else if (THEME==4){ elementdiv.style.backgroundColor = "#ff1234"; elementclosebtn.style.background = "black"; elementclosebtn.style.color = "#ff1234"; } 
		else if (THEME==5){ elementdiv.style.backgroundColor = "#ff12ff"; elementclosebtn.style.background = "white"; elementclosebtn.style.color = "#ff12ff"; }
		else if (THEME==6){ elementdiv.style.backgroundColor = "#12ffff"; elementclosebtn.style.background = "white"; elementclosebtn.style.color = "#12ffff"; }
		else if (THEME==7){ elementdiv.style.backgroundColor = "#008080"; elementclosebtn.style.background = "white"; elementclosebtn.style.color = "#008080"; }
		else if (THEME==8){ elementdiv.style.backgroundColor = "#800080"; elementclosebtn.style.background = "white"; elementclosebtn.style.color = "#800080"; }
		else if (THEME==9){ elementdiv.style.backgroundColor = "#c0c0c0"; elementclosebtn.style.background = "white"; elementclosebtn.style.color = "#c0c0c0"; }
	}
	
	/* Apply theme-specific colors to (upper/footer) Close buttons using Javascript */
	function setBtnTheme(closebtn,toggled){
		if (toggled){
			if (THEME==0) { closebtn.style.background="#004300"; closebtn.style.color="white"; } 
			else if (THEME==1) { closebtn.style.background="#000000"; closebtn.style.color="white"; } 
			else if (THEME==2) { closebtn.style.background="#ffffff"; closebtn.style.color="#004300"; } 
			else if (THEME==3) { closebtn.style.background="#1234ab"; closebtn.style.color="#000000"; } 
			else if (THEME==4) { closebtn.style.background="#ff1234"; closebtn.style.color="#000000"; } 
			else if (THEME==5) { closebtn.style.background="#ff12ff"; closebtn.style.color="#ffffff"; } 
			else if (THEME==6) { closebtn.style.background="#12ffff"; closebtn.style.color="#ffffff"; } 
			else if (THEME==7) { closebtn.style.background="#008080"; closebtn.style.color="#ffffff"; } 
			else if (THEME==8) { closebtn.style.background="#800080"; closebtn.style.color="#ffffff"; } 
			else if (THEME==9) { closebtn.style.background="#c0c0c0"; closebtn.style.color="#ffffff"; } 
		} else {
			if (THEME==0) { closebtn.style.background="white"; closebtn.style.color="#004300"; } 
			else if (THEME==1) { closebtn.style.background="white"; closebtn.style.color="#000000"; } 
			else if (THEME==2) { closebtn.style.background="#004300"; closebtn.style.color="#ffffff"; } 
			else if (THEME==3) { closebtn.style.background="#000000"; closebtn.style.color="#1234ab"; } 
			else if (THEME==4) { closebtn.style.background="#000000"; closebtn.style.color="#ff1234"; } 
			else if (THEME==5) { closebtn.style.background="#ffffff"; closebtn.style.color="#ff12ff"; } 
			else if (THEME==6) { closebtn.style.background="#ffffff"; closebtn.style.color="#12ffff"; } 
			else if (THEME==7) { closebtn.style.background="#ffffff"; closebtn.style.color="#008080"; } 
			else if (THEME==8) { closebtn.style.background="#ffffff"; closebtn.style.color="#800080"; } 
			else if (THEME==9) { closebtn.style.background="#ffffff"; closebtn.style.color="#c0c0c0"; } 
		}
	}
	
	/* Apply theme-specific colors to drawer elements using JQuery */
	function setDrawerTheme(thiselement){
		if (THEME==0) { thiselement.css("background","#004300"); } 
		else if (THEME==1) { thiselement.css("background","black"); } 
		else if (THEME==2) { thiselement.css("background","white"); } 
		else if (THEME==3) { thiselement.css("background","#1234ab"); } 
		else if (THEME==4) { thiselement.css("background","#ff1234"); } 
		else if (THEME==5) { thiselement.css("background","#ff12ff"); }  
		else if (THEME==6) { thiselement.css("background","#12ffff"); }  
		else if (THEME==7) { thiselement.css("background","#008080"); }  
		else if (THEME==8) { thiselement.css("background","#800080"); }  
		else if (THEME==9) { thiselement.css("background","#c0c0c0"); }  
	}
	
	/* Apply theme-specific colors and functionality to the upper close button using Javascript */
	$("#upperclosebtn:first").on("mouseover", function() { setBtnTheme(upperclosebtn,true); }).on("mouseout", function() { setBtnTheme(upperclosebtn,false); }).on("mousedown", function() {  doupperclosing(); });
	
	/* Apply theme-specific colors and functionality to the lower close button using Javascript */
	$("#close:first").on("mouseover", function() { setBtnTheme(footerclosebtn,true); }).on("mouseout", function() {  setBtnTheme(footerclosebtn,false); }).on("mousedown", function() {  dofooterclose(); });
	
	/* Apply theme-specific colors and functionality to the menu toggle button */
	$(".navbar-toggle:first").on("mouseover", function() { for (i=0; i<toggleicons.length; i++) { setDrawerTheme(toggleicons[i]); } if (THEME==2) { toggledrawer.css("background","#aaaaaa"); } else toggledrawer.css("background","white");
	}).on("mouseout", function() { for (i=0; i<toggleicons.length; i++) { if (THEME==2) { toggleicons[i].css("background","#aaaaaa"); } else toggleicons[i].css("background","white"); } setDrawerTheme(toggledrawer); 
	}).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });

	// These are Javascript media query variables
	var browserwidth = window.matchMedia("(max-width: 1200px)"); var browserwidth1 = window.matchMedia("(max-width: 880px)"); var browserwidth2 = window.matchMedia("(max-width: 480px)"); var browserwidth3 = window.matchMedia("(max-width: 345px)");
	
	// These are Javascript id selector and utility variables
	var menubar = document.getElementById("topnav"); var rates = document.getElementById("ratebar"); var title = document.getElementById("headertitle"); var headercontent = document.getElementById("headercontent");
	var footerdiv = document.getElementById("footerDiv"); var footerheader = document.getElementById("footerDivHeader"); var footertexts = document.getElementById("footerDivTexts"); var footerclosebtn = document.getElementById("close");
	var ads = document.getElementById("ads"); var upperclosebtn = document.getElementById("upperclosebtn"); var headeroffset = menubar.offsetTop;
	
	/* Apply functionality to elements using JQuery */	
	$(document).ready(function(){ $('.dropdown-submenu a.droplevel2').on("click", function(e){ $(this).next('ul').toggle(); e.stopPropagation(); e.preventDefault(); }); });
	
	/* Set Back button functionality using Javascript */	
	function prevPage(){ window.history.go(-1); }
	
	/* Set Next button functionality using Javascript */	
	function nextPage(){ window.history.go(+1); }
	
	/* Apply functionality to elements using JQuery */	
	$("#nature:first").on("mouseover", function() { THEME = 0; setTheme(THEME); setBarTheme(footerdiv,footerclosebtn); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#night:first").on("mouseover", function() { THEME = 1; setTheme(THEME); setBarTheme(footerdiv,footerclosebtn); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#sunny:first").on("mouseover", function() { THEME = 2; setTheme(THEME); setBarTheme(footerdiv,footerclosebtn); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#cloudy:first").on("mouseover", function() { THEME = 3; setTheme(THEME); setBarTheme(footerdiv,footerclosebtn); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#romance:first").on("mouseover", function() { THEME = 4; setTheme(THEME); setBarTheme(footerdiv,footerclosebtn); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#royal:first").on("mouseover", function() { THEME = 5; setTheme(THEME); setBarTheme(footerdiv,footerclosebtn); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#aqua:first").on("mouseover", function() { THEME = 6; setTheme(THEME); setBarTheme(footerdiv,footerclosebtn); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#teal:first").on("mouseover", function() { THEME = 7; setTheme(THEME); setBarTheme(footerdiv,footerclosebtn); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#deeproyal:first").on("mouseover", function() { THEME = 8; setTheme(THEME); setBarTheme(footerdiv,footerclosebtn); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#silver:first").on("mouseover", function() { THEME = 9; setTheme(THEME); setBarTheme(footerdiv,footerclosebtn); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	
	$("#tradebar:first").on("mousedown", function() { doupperclosing(); } );
	
	$(".header:first").on("mousedown", function() { dotextclosing(); } );
	
	$("#headertexts:first").on("mousedown", function() { dotextclosing(); } );
	
	$(".expandableColumn:first").on("mousedown", function() { floatingcolumn.show(); floatingcolumnclosed = false; windowsize(browserwidth,browserwidth1,browserwidth2,browserwidth3); closethat.hide(); } );
	
	$(".floatingColumn .close").on("mousedown", function() { floatingcolumn.hide(); floatingcolumnclosed = true; windowsize(browserwidth,browserwidth1,browserwidth2,browserwidth3); closethat.show(); } );
	
	$(".floatingColumn .card:first").on("mousedown", function() { floatingcolumn.hide(); floatingcolumnclosed = true; windowsize(browserwidth,browserwidth1,browserwidth2,browserwidth3); closethat.show(); } );
	
	$(".attendant:first").on("mousedown", function() { if (siteassistant.hide()) siteassistant.show(); else siteassistant.hide(); } );
	
	$("#attendant:first").on("mousedown", function() { if (siteassistant.hide()) siteassistant.show(); else siteassistant.hide(); } );
	
	$(".assistant:first").on("mouseover", function() { siteassistant.css("background","URL('https://www.tutusfx.com/assets/images/working.gif')").css("background-size","cover"); } )
		.on("mouseout", function() { siteassistant.css("background","URL('https://www.tutusfx.com/assets/images/open.gif')").css("background-size","cover"); } )
		.on("mousedown", function() { 
			if (!QUERYING) { siteassistant.css("background","URL('https://www.tutusfx.com/assets/images/busy.gif')").css("background-size","cover"); siteassistant.before("<input id='userquery' type='text' placeholder='Make your enquiries on Tutusfx or anything related' />"); QUERYING = true; } 
			else { $("#userquery").click(function(){ if ($("#userquery").val()!="") alert("Text: " + $("#userquery").val()); $("#userquery").remove(); QUERYING = false; }); } 
		});
	
	$("#sitefooter:first").on("mousedown", function() { dofooterclose(); } );
	
	/* Call screen resize listener function & attach listener function at run time to ensure consistency of 1-col layouts */	
	windowsize(browserwidth,browserwidth1,browserwidth2,browserwidth3); browserwidth.addListener(windowsize);
	
	/* Set element properties according to browser's current width; used for 1-col layouts */	
	function windowsize(browserwidth,browserwidth1,browserwidth2,browserwidth3) { // ensure mainColumn remains spread across the page once user closes the floatingColumn
		if (browserwidth1.matches) { /* Ensures mainColumn is spread across the page at browserwidth <=800px */ expandablecolumn.css("width","99%").css("margin","0.5%"); } 
		else if (browserwidth.matches) { /* Maintain element properties using JQuery, at 880px < browserwidth <= 1200px */ if (floatingcolumnclosed==true) expandablecolumn.css("width","99%").css("margin","0.5%"); else expandablecolumn.css("width","65%"); } 
		else { /* Maintain element properties using JQuery, at browserwidth > 1200px */ if (floatingcolumnclosed==true) expandablecolumn.css("width","99%").css("margin","0.5%"); else expandablecolumn.css("width","65%"); }
	}
	
	/* Default Page-Setter Function */
	function myFunction() {
		if (window.pageYOffset > (headeroffset-(headeroffset/10)-50)) { 
			if (upperclosing==true) { if (window.pageYOffset > (headeroffset-(headeroffset/10))) { floatingcolumn.css("top","110px"); menubar.classList.remove("sticky"); menubar.classList.add("sticky2"); } } else { floatingcolumn.css("top","160px"); menubar.classList.remove("sticky2"); menubar.classList.add("sticky"); } 
		} else { if (upperclosing==true) { floatingcolumn.css("top","55px"); } else { floatingcolumn.css("top","105px"); }
			if (upperclosing==true) { menubar.classList.remove("sticky2"); } else { menubar.classList.remove("sticky"); } 
		}
		if (upperclosing==true) { rates.classList.remove("upperbar"); rates.style.height = "0px"; rates.style.float = "top";  
			upperclosebtn.classList.remove("glyphicon-arrow-right"); upperclosebtn.classList.add("glyphicon-arrow-left"); ads.style.fontSize = "0%";
		} else { rates.classList.add("upperbar"); rates.style.height = "50px"; rates.style.top = "0px"; rates.style.zIndex = "1000";
			upperclosebtn.classList.remove("glyphicon-arrow-left"); upperclosebtn.classList.add("glyphicon-arrow-right"); ads.style.fontSize = "100%"; 
			setBarTheme(rates,upperclosebtn); 
		} if (textclosed==true) { topheadertitle.hide(); topheadercontent.hide(); } else { topheadertitle.show(); topheadercontent.show(); } 
		windowsize(browserwidth,browserwidth1,browserwidth2,browserwidth3); // Call screen resize listener function to ensure consistency in browser properties for 1-col layouts
	} myFunction(); // call default page setter function at runtime
	
	window.onscroll = function() { myFunction(); } // call default page setter function on scroll
	
	function doupperclosing() { // open/close ratebar
		if (upperclosing==true) { upperclosebtn.classList.remove("close-upper"); upperclosebtn.classList.add("open-upper"); upperclosing = false; } 
		else { upperclosebtn.classList.remove("open-upper"); upperclosebtn.classList.add("close-upper"); upperclosing = true; } myFunction(); // call default page setter function at state changes
	}
	
	function dotextclosing() { // open/close header texts 
		if (textclosed==true) { topheadertitle.show(); topheadercontent.show(); textclosed = false; } 
		else { topheadertitle.hide(); topheadercontent.hide(); textclosed = true; }
	}
	
	function dofooterclose() { // open/close footer warning panel
		if (footerclosing==true) { footerclosebtn.classList.remove("glyphicon-arrow-up"); footerclosebtn.classList.add("glyphicon-arrow-down");
			footerdiv.style.background = "none"; footerheader.style.fontSize = "0%"; footertexts.style.fontSize = "0%"; footerclosing = false;
		} else { setBarTheme(footerdiv,footerclosebtn); footerclosebtn.classList.remove("glyphicon-arrow-down"); footerclosebtn.classList.add("glyphicon-arrow-up");
			footerdiv.style.height = "30%"; footerdiv.style.top = "70%"; footerheader.style.fontSize = "100%"; footertexts.style.fontSize = "100%"; footerclosing = true;
		}
	}
	
	var width = 1; 
	function move(interval) { 
		if (width >= 100) { width = 1; } else { width+=interval; } 
		progressbar.style.width = width + '%'; 
		progressbar.innerHTML = width + '%'; 
	}
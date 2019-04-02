	/* Script is written in Javascript/JQuery */
	// These are element selector variables
	var body = $("body"); var img = $("img"); var marquee = $("marquee"); var thisselect = $("select"); var navheaderlinks = $("nav a");
	var navheaderinputs = $("li input"); var allinputs = $("input"); var h3 = $("h3"); var paragraph = $("p"); var textinputarea = $("textarea"); var links = $("a");
	 
	// These are class selector variables
	var pagefootertopicr = $(".upper-footer"); var pagefooter = $(".footer"); var footerlinks = $(".footer a"); var pagefootercard = $(".footerCard"); var closethis = $(".floatingColumn .close"); var closethat = $(".expandableColumn .close");
	var trendingtrades = $(".trendingtrades"); var trendingtradeusername = $(".trendingtradeusername"); var card = $(".card"); var cardlist = $(".cardlist"); var expandablecolumn = $(".expandableColumn"); var siteassistant = $(".assistant");
	var cardahov = $(".card a:hover"); var carda = $(".card a"); var cardp = $(".card p"); var warningdiv = $(".warning"); var warningspan = $(".warning span"); var pagefootertopics = $(".upper-footer a"); var maincolumn = $(".mainColumn");
	var navcontainer = $(".navbar"); var drawer = $(".collapse"); var dropdown = $(".contactUs-regardingSelect"); var toggledrawer = $(".navbar-toggle"); var rightalign = $(".rightAlign"); var floatingcolumn = $(".floatingColumn");
	var atradeview = $(".tradeview"); var positiverate = $(".positiverate"); var negativerate = $(".negativerate"); var fakeimg = $(".fakeimg"); var navbarcontainer = $(".container-fluid"); var contentrow = $(".row");
	
	// These are id selector variables
	var returner = $("#returner");  var returnerhov = $("#returner :hover"); var closebtn = $("#close"); var ratebar = $("#ratebar"); var backbtn = $("#back"); var nextbtn = $("#next"); 
	var topnavahov = $("#topnav a:hover"); var topnavin = $("#topnav input"); var pagefooterdivheader = $("#footerDivHeader"); var pagefooterdivtexts = $("#footerDivTexts"); var topnavimg = $("#topnav img");
	var topheader = $("#header"); var toolbar = $("#topnav"); var topheadertitle = $("#headertitle"); var topheadercontent = $("#headercontent"); var myprogress = $("#myProgress"); 
	var segments = $("#segment"); var topnava = $("#topnav a"); var progressBar = $("#progressBar"); var toggleicons = [$("#icon-bar1"),$("#icon-bar2"),$("#icon-bar3"),$("#icon-bar4")];
	
	// These are utility variables and flags
	var THEME; var i = 0; var HIDDEN = true; var footerclosing = true; var textclosed = false; var upperclosing = false; var QUERYING = false;
	
	// Apply theme
	if (THEME==null) setTheme(THEME = 0); else setTheme(THEME);
	
	/* Apply standard properties to related elements */
	function setTheme(THEME){
		img.css("position","relative").css("top","0").css("left","0").css("width","100%").css("height","100%").css("float","left top").css("border-radius","1.5px");
		textinputarea.css("min-height","300px").css("min-width","100%").css("height","80%").css("width","100%").css("top","0").css("left","0").css("text-align","justify").css("float","center").css("border-radius","5px").css("padding","16px 4px");
		topheader.css("text-align","center").css("text-shadow","-8px 8px 16px #B2D4B2").css("box-shadow","-3px 5px 3px #343").css("height","450px");
		topheadertitle.css("z-index","-1000").css("font-family","Garamond").css("font-weight","bolder").css("font-stretch","expanded").css("font-size","90px");
		topheadercontent.css("font-style","italic").css("font-family","Garamond").css("font-stretch","condensed").css("font-size","40px");
		drawer.css("height","100%").css("width","auto").css("text-align","justify");
		segments.css("padding","0.5% 5%").css("text-shadow","-1px 1px 1px #010").css("box-shadow","-5px 5px 3px #aba");
		fakeimg.css("width","100%").css("padding","2%").css("margin","20px 0").css("border-radius","2px").css("box-shadow","-3px 3px 2px #aba");
		body.css("font-family","Arial, Helvetica, sans-serif").css("padding","0.1% 0.1% 0.1% 0.1%");
		h3.css("font-weight","bolder").css("text-align","center"); rightalign.css("float","right"); marquee.css("color","#ff0e").css("width","98%"); 
		pagefootercard.css("float","left").css("text-align","justify").css("padding","0% 2%").css("font-size","90%").css("height","547px");
		negativerate.css("color","#ff0000").css("font-family","Courier New, Times New Roman, Arial").css("font-size","100%").css("font-weight","lighter").css("font-stretch","condensed").css("text-decoration","blink");
		positiverate.css("color","#ffffff").css("font-family","Courier New, Times New Roman, Arial").css("font-size","100%").css("font-weight","lighter").css("font-stretch","condensed").css("text-decoration","blink");
		backbtn.css("border-radius","2.5px 0px 0px 2.5px").css("text-align","center").css("width","70px").css("height","50px").css("padding","0").css("float","center").css("border","none").css("z-index","1000");
		nextbtn.css("border-radius","0px 2.5px 2.5px 0px").css("text-align","center").css("width","70px").css("height","50px").css("padding","0").css("float","center").css("border","none").css("z-index","1000");
		thisselect.css("background-color","#eeeeee");
		trendingtradeusername.css("background","none").css("color","#B2D4B2");
		pagefootertopicr.css("padding","1%").css("text-align","center");
		trendingtrades.css("padding","1%").css("margin-top","0.5%").css("color","#ffffff");
		returner.css("float","right").css("font-weight","bolder").css("font-stretch","condensed").css("padding","2.5%").css("margin-top","1%").css("border-radius","25px").css("box-shadow","-5px 5px 3px #aba");
		card.css("padding","2.5% 2.5% 12.5% 2.5%").css("margin-top","1%").css("border-radius","3px").css("box-shadow","-5px 5px 3px #aba");
		toggledrawer.css("transition","all 0.3s ease-in"); toolbar.css("z-index","1000").css("display","block").css("margin-bottom","50px");
		paragraph.css("padding","2%"); 
		topnava.css("z-index","0").css("text-align","center").css("color","#f2f2f2").css("padding","14px 8px").css("text-decoration","none").css("display","block").css("transition","all 0.3s ease-in").css("-webkit-transition","all 0.3s ease-in").css("-moz-transition","all 0.3s ease-in").css("-o-transition","all 0.3s ease-in");
		topnavahov.css("border-radius","2.5px").css("transition","all 0.3s ease-out").css("-webkit-transition","all 0.3s ease-out").css("-moz-transition","all 0.3s ease-out").css("-o-transition","all 0.3s ease-out");
		topnavin.css("text-align","center").css("color","#f2f2f2").css("padding","14px 8px").css("text-decoration","none").css("display","inline").css("transition","all 0.3s ease-in").css("-webkit-transition","all 0.3s ease-in").css("-moz-transition","all 0.3s ease-in").css("-o-transition","all 0.3s ease-in");
		allinputs.css("z-index","300");
		topnavimg.css("width","40px");
		atradeview.css("height","650px");
		cardahov.css("color","#B2D4B2");
		carda.css("text-decoration","none");
		floatingcolumn.css("text-align","center");
		cardp.css("text-align","justify");
		cardlist.css("dropdown","100%"); 
		expandablecolumn.css("margin","0").css("padding","0").css("left","0").css("top","0").css("height","100%");
		siteassistant.css("margin","50px 0px").css("padding","0").css("display","inline-block").css("background","URL('https://www.tutusfx.com/assets/images/open.gif')").css("background-size","cover").css("height","250px").css("width","250px").css("border-radius","40%");
		maincolumn.css("margin","0"); maincolumn.css("padding","0"); maincolumn.css("left","0"); maincolumn.css("top","0");
		closethis.css("border-radius","50%").css("width","50px").css("height","50px").css("margin","10px"); 
		closethat.css("border-radius","50%").css("width","50px").css("height","50px").css("margin","10px"); 
		closebtn.css("display","block").css("background-color","white");
		links.css("text-decoration","none").css("transition","all 0.3s ease-out").css("-webkit-transition","all 0.3s ease-out").css("-moz-transition","all 0.3s ease-out").css("-o-transition","all 0.3s ease-out");
		pagefooter.css("height","600px").css("z-index","500").css("border-radius","5px 5px 0px 0px").css("margin-top","100px").css("padding","0").css("text-align","center").css("font-stretch","condensed").css("font-weight","lighter");
		pagefooterdivheader.css("color","white").css("font-weight","bold").css("font-size","100%");
		pagefooterdivtexts.css("color","white").css("text-align","justify").css("float","justify").css("font-size","99%");
		navcontainer.css("border-radius","0px 0px 5px 5px").css("box-shadow","-3px 5px 3px #454");
		
		closethat.hide(); // hide Close button for main layout of 1 column pages on default
		
		 /* Apply colors for theme, revtheme, bodybkgd, header & UI cards (fakeimg) */ 
		if (THEME==0){ applyTheme("#004300","#ffffff","#baf1ba","#fefefe","#bbfebb"); }
		else if (THEME==1) { applyTheme("#000000","#ffffff","#444444","#fefefe","#aaaaaa"); } 
		else if (THEME==2) { applyTheme("#ffffff","#000000","#fefefe","#000000","#eeeeee"); } 
		else if (THEME==3) { applyTheme("#1234ab","#ffffff","#babaf1","#ffffff","#5678ef"); } 
		else if (THEME==4) { applyTheme("#ff1234","#ffffff","#f1baba","#ffffff","#44cdef"); } 
		else if (THEME==5) { applyTheme("#ff12ff","#ffffff","#f1baf1","#ffffff","#aaaaaa"); } 
		else if (THEME==6) { applyTheme("#12ffff","#ffffff","#baf1f1","#004300","#aaaaaa"); } 
		else if (THEME==7) { applyTheme("#008080","#ffffff","#f1f1f1","#ffffff","#aaaaaa"); } 
		else if (THEME==8) { applyTheme("#800080","#ffffff","#baf1f1","#ffffff","#aaaaaa"); } 
		else if (THEME==9) { applyTheme("#c0c0c0","#ffffff","#f1f1f1","#004300","#aaaaaa"); } 
		for (i=0; i<toggleicons.length; i++) { toggleicons[i].css("background","white"); } // Set background of drawer toggler to white on default
	}
	
	/* Apply theme-specific colors to related elements */
	function applyTheme(color1,color2,bodycolor,headercolor,fakeimgcolor){
			body.css("background",bodycolor).css("color",color1); 
			returnerhov.css("background",color2).css("color",color1); 
			topheader.css("background",color2).css("color",color1); 
			closethis.css("background",color2).css("color",color1); 
			closethat.css("background",color2).css("color",color1); 
			fakeimg.css("background-color",fakeimgcolor); 
			h3.css("color",headercolor); 
			topnavahov.css("background-color",headercolor); 
			navbarcontainer.css("background-color",color1); 
			navheaderlinks.css("background-color",color1).css("color",color2); 
			navheaderinputs.css("background-color",color1).css("color",color2);
			myprogress.css("background-color",color2); 
			card.css("background-color",color1).css("color",color2);
			returner.css("background-color",color1).css("color","white"); 
			pagefootertopics.css("background-color",color1).css("color",color2);
			topnava.css("background-color",color1); 
			topnavin.css("background-color",color1);
			ratebar.css("background-color",color1); 
			toggledrawer.css("background",color1); 
			pagefooterdivtexts.css("color",color2);
			warningspan.css("background-color",color1).css("color",color2);
			pagefooter.css("background-color",color1);
			pagefootercard.css("background-color",color1).css("color",color2); 
			toolbar.css("background-color",color1); 
			progressBar.css("background-color",color1);				
	}
	
	function hideDrawer(){ if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } }
	
	/* Apply theme-specific colors to footer elements */
	function setFooterTheme(){
		if (THEME==0) { footerdiv.style.backgroundColor = "#004300"; footerclosebtn.style.background = "white"; footerclosebtn.style.color = "#004300"; } 
		else if (THEME==1){ footerdiv.style.backgroundColor = "#000000"; footerclosebtn.style.background = "white"; footerclosebtn.style.color = "#000000"; } 
		else if (THEME==2){ footerdiv.style.backgroundColor = "#aaaaaa"; footerclosebtn.style.background = "black"; footerclosebtn.style.color = "#ffffff"; } 
		else if (THEME==3){ footerdiv.style.backgroundColor = "#1234ab"; footerclosebtn.style.background = "white"; footerclosebtn.style.color = "#1234ab"; } 
		else if (THEME==4){ footerdiv.style.backgroundColor = "#ff1234"; footerclosebtn.style.background = "black"; footerclosebtn.style.color = "#ff1234"; } 
		else if (THEME==5){ footerdiv.style.backgroundColor = "#ff12ff"; footerclosebtn.style.background = "white"; footerclosebtn.style.color = "#ff12ff"; }
		else if (THEME==6){ footerdiv.style.backgroundColor = "#12ffff"; footerclosebtn.style.background = "white"; footerclosebtn.style.color = "#12ffff"; }
		else if (THEME==7){ footerdiv.style.backgroundColor = "#008080"; footerclosebtn.style.background = "white"; footerclosebtn.style.color = "#008080"; }
		else if (THEME==8){ footerdiv.style.backgroundColor = "#800080"; footerclosebtn.style.background = "white"; footerclosebtn.style.color = "#800080"; }
		else if (THEME==9){ footerdiv.style.backgroundColor = "#c0c0c0"; footerclosebtn.style.background = "white"; footerclosebtn.style.color = "#c0c0c0"; }
	}
	
	/* Apply theme-specific colors to ratebar elements */
	function setRateBarTheme(){
		if (THEME==0) { rates.style.backgroundColor = "#004300"; upperclosebtn.style.background = "white"; upperclosebtn.style.color = "#004300"; } 
		else if (THEME==1){ rates.style.backgroundColor = "#000000"; upperclosebtn.style.background = "white"; upperclosebtn.style.color = "#000000"; } 
		else if (THEME==2){ rates.style.backgroundColor = "#aaaaaa"; upperclosebtn.style.background = "black"; upperclosebtn.style.color = "#ffffff"; } 
		else if (THEME==3){ rates.style.backgroundColor = "#1234ab"; upperclosebtn.style.background = "white"; upperclosebtn.style.color = "#1234ab"; } 
		else if (THEME==4){ rates.style.backgroundColor = "#ff1234"; upperclosebtn.style.background = "black"; upperclosebtn.style.color = "#ff1234"; } 
		else if (THEME==5){ rates.style.backgroundColor = "#ff12ff"; upperclosebtn.style.background = "white"; upperclosebtn.style.color = "#ff12ff"; }
		else if (THEME==6){ rates.style.backgroundColor = "#12ffff"; upperclosebtn.style.background = "white"; upperclosebtn.style.color = "#12ffff"; }
		else if (THEME==7){ rates.style.backgroundColor = "#008080"; upperclosebtn.style.background = "white"; upperclosebtn.style.color = "#008080"; }
		else if (THEME==8){ rates.style.backgroundColor = "#800080"; upperclosebtn.style.background = "white"; upperclosebtn.style.color = "#800080"; }
		else if (THEME==9){ rates.style.backgroundColor = "#c0c0c0"; upperclosebtn.style.background = "white"; upperclosebtn.style.color = "#c0c0c0"; }
	}
	
	/* Apply theme-specific colors and functionality to the upper close button */
	$("#upperclosebtn:first").on("mouseover", function() {
		if (THEME==0) { upperclosebtn.style.background="#004300"; upperclosebtn.style.color="white"; } 
		else if (THEME==1) { upperclosebtn.style.background="#000000"; upperclosebtn.style.color="white"; } 
		else if (THEME==2) { upperclosebtn.style.background="#ffffff"; upperclosebtn.style.color="#004300"; } 
		else if (THEME==3) { upperclosebtn.style.background="#1234ab"; upperclosebtn.style.color="#000000"; } 
		else if (THEME==4) { upperclosebtn.style.background="#ff1234"; upperclosebtn.style.color="#000000"; } 
		else if (THEME==5) { upperclosebtn.style.background="#ff12ff"; upperclosebtn.style.color="#ffffff"; } 
		else if (THEME==6) { upperclosebtn.style.background="#12ffff"; upperclosebtn.style.color="#ffffff"; } 
		else if (THEME==7) { upperclosebtn.style.background="#008080"; upperclosebtn.style.color="#ffffff"; } 
		else if (THEME==8) { upperclosebtn.style.background="#800080"; upperclosebtn.style.color="#ffffff"; } 
		else if (THEME==9) { upperclosebtn.style.background="#c0c0c0"; upperclosebtn.style.color="#ffffff"; } 
	}).on("mouseout", function() { 
		if (THEME==0) { upperclosebtn.style.background="white"; upperclosebtn.style.color="#004300"; } 
		else if (THEME==1) { upperclosebtn.style.background="white"; upperclosebtn.style.color="#000000"; } 
		else if (THEME==2) { upperclosebtn.style.background="#004300"; upperclosebtn.style.color="#ffffff"; } 
		else if (THEME==3) { upperclosebtn.style.background="#000000"; upperclosebtn.style.color="#1234ab"; } 
		else if (THEME==4) { upperclosebtn.style.background="#000000"; upperclosebtn.style.color="#ff1234"; } 
		else if (THEME==5) { upperclosebtn.style.background="#ffffff"; upperclosebtn.style.color="#ff12ff"; } 
		else if (THEME==6) { upperclosebtn.style.background="#ffffff"; upperclosebtn.style.color="#12ffff"; } 
		else if (THEME==7) { upperclosebtn.style.background="#ffffff"; upperclosebtn.style.color="#008080"; } 
		else if (THEME==8) { upperclosebtn.style.background="#ffffff"; upperclosebtn.style.color="#800080"; } 
		else if (THEME==9) { upperclosebtn.style.background="#ffffff"; upperclosebtn.style.color="#c0c0c0"; } 
	}).on("mousedown", function() {  doupperclosing(); });
	
	/* Apply theme-specific colors and functionality to the lower close button */
	$("#close:first").on("mouseover", function() {
		if (THEME==0) { footerclosebtn.style.background="#004300"; footerclosebtn.style.color="white"; } 
		else if (THEME==1) { footerclosebtn.style.background="#000000"; footerclosebtn.style.color="white"; } 
		else if (THEME==2) { footerclosebtn.style.background="#ffffff"; footerclosebtn.style.color="#004300"; } 
		else if (THEME==3) { footerclosebtn.style.background="#1234ab"; footerclosebtn.style.color="#000000"; } 
		else if (THEME==4) { footerclosebtn.style.background="#ff1234"; footerclosebtn.style.color="#000000"; } 
		else if (THEME==5) { footerclosebtn.style.background="#ff12ff"; footerclosebtn.style.color="#ffffff"; } 
		else if (THEME==6) { footerclosebtn.style.background="#12ffff"; footerclosebtn.style.color="#ffffff"; } 
		else if (THEME==7) { footerclosebtn.style.background="#008080"; footerclosebtn.style.color="#ffffff"; } 
		else if (THEME==8) { footerclosebtn.style.background="#800080"; footerclosebtn.style.color="#ffffff"; } 
		else if (THEME==9) { footerclosebtn.style.background="#c0c0c0"; footerclosebtn.style.color="#ffffff"; } 
	}).on("mouseout", function() { 
		if (THEME==0) { footerclosebtn.style.background="white"; footerclosebtn.style.color="#004300"; } 
		else if (THEME==1) { footerclosebtn.style.background="white"; footerclosebtn.style.color="#000000"; } 
		else if (THEME==2) { footerclosebtn.style.background="#004300"; footerclosebtn.style.color="#ffffff"; } 
		else if (THEME==3) { footerclosebtn.style.background="#000000"; footerclosebtn.style.color="#1234ab"; } 
		else if (THEME==4) { footerclosebtn.style.background="#000000"; footerclosebtn.style.color="#ff1234"; } 
		else if (THEME==5) { footerclosebtn.style.background="#ffffff"; footerclosebtn.style.color="#ff12ff"; } 
		else if (THEME==6) { footerclosebtn.style.background="#ffffff"; footerclosebtn.style.color="#12ffff"; } 
		else if (THEME==7) { footerclosebtn.style.background="#ffffff"; footerclosebtn.style.color="#008080"; } 
		else if (THEME==8) { footerclosebtn.style.background="#ffffff"; footerclosebtn.style.color="#800080"; } 
		else if (THEME==9) { footerclosebtn.style.background="#ffffff"; footerclosebtn.style.color="#c0c0c0"; } 
	}).on("mousedown", function() {  dofooterclose(); });
	
	/* Apply theme-specific colors and functionality to the menu toggle button */
	$(".navbar-toggle:first").on("mouseover", function() { 
		for (i=0; i<toggleicons.length; i++) { 
			if (THEME==0) { toggleicons[i].css("background","#004300"); } 
			else if (THEME==1) { toggleicons[i].css("background","black"); } 
			else if (THEME==2) { toggleicons[i].css("background","white"); } 
			else if (THEME==3) { toggleicons[i].css("background","#1234ab"); } 
			else if (THEME==4) { toggleicons[i].css("background","#ff1234"); } 
			else if (THEME==5) { toggleicons[i].css("background","#ff12ff"); }  
			else if (THEME==6) { toggleicons[i].css("background","#12ffff"); }  
			else if (THEME==7) { toggleicons[i].css("background","#008080"); }  
			else if (THEME==8) { toggleicons[i].css("background","#800080"); }  
			else if (THEME==9) { toggleicons[i].css("background","#c0c0c0"); }  
		} if (THEME==2) { toggledrawer.css("background","#aaaaaa"); } else toggledrawer.css("background","white");
	}).on("mouseout", function() { 
		for (i=0; i<toggleicons.length; i++) { if (THEME==2) { toggleicons[i].css("background","#aaaaaa"); } else toggleicons[i].css("background","white"); }
		if (THEME==0) { toggledrawer.css("background","#004300"); } 
		else if (THEME==1) { toggledrawer.css("background","black"); } 
		else if (THEME==2) { toggledrawer.css("background","white"); } 
		else if (THEME==3) { toggledrawer.css("background","#1234ab"); } 
		else if (THEME==4) { toggledrawer.css("background","#ff1234"); } 
		else if (THEME==5) { toggledrawer.css("background","#ff12ff"); }   
		else if (THEME==6) { toggledrawer.css("background","#12ffff"); }   
		else if (THEME==7) { toggledrawer.css("background","#008080"); }   
		else if (THEME==8) { toggledrawer.css("background","#800080"); }   
		else if (THEME==9) { toggledrawer.css("background","#c0c0c0"); }   
	}).on("mousedown", function() { hideDrawer(); });
	
	/* Apply functionality to elements using JQuery */	
	$("#nature:first").on("mouseover", function() { THEME = 0; setTheme(THEME); setFooterTheme(); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#night:first").on("mouseover", function() { THEME = 1; setTheme(THEME); setFooterTheme(); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#sunny:first").on("mouseover", function() { THEME = 2; setTheme(THEME); setFooterTheme(); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#cloudy:first").on("mouseover", function() { THEME = 3; setTheme(THEME); setFooterTheme(); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#romance:first").on("mouseover", function() { THEME = 4; setTheme(THEME); setFooterTheme(); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#royal:first").on("mouseover", function() { THEME = 5; setTheme(THEME); setFooterTheme(); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#aqua:first").on("mouseover", function() { THEME = 6; setTheme(THEME); setFooterTheme(); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#teal:first").on("mouseover", function() { THEME = 7; setTheme(THEME); setFooterTheme(); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#deeproyal:first").on("mouseover", function() { THEME = 8; setTheme(THEME); setFooterTheme(); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#silver:first").on("mouseover", function() { THEME = 9; setTheme(THEME); setFooterTheme(); }).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	$("#tradebar:first").on("mousedown", function() { doupperclosing(); } );
	$("#sitefooter:first").on("mousedown", function() { dofooterclose(); } );
	$("#header:first").on("mousedown", function() { dotextclosing(); } );
	$("#headertexts:first").on("mousedown", function() { dotextclosing(); } );
	$(".attendant:first").on("mousedown", function() { if (siteassistant.hide()) siteassistant.show(); else siteassistant.hide(); } );
	$("#attendant:first").on("mousedown", function() { if (siteassistant.hide()) siteassistant.show(); else siteassistant.hide(); } );
	$(".expandableColumn:first").on("mousedown", function() { floatingcolumn.show(); windowsize(browserwidth,browserwidth1,browserwidth2,browserwidth3); /* Call screen resize listener function to set columns accordingly.
		An alternative will be to call 'expandablecolumn.css("width","65%");' directly. However, this will be incorrect for screens of sizes less than 800px. */ closethat.hide(); } );
	$(".floatingColumn .card:first").on("mousedown", function() { floatingcolumn.hide(); expandablecolumn.css("width","100%"); closethat.show(); } );
	$(".floatingColumn .close:first").on("mousedown", function() { floatingcolumn.hide(); expandablecolumn.css("width","100%"); closethat.show(); } );
	$(".assistant:first").on("mouseover", function() { siteassistant.css("background","URL('https://www.tutusfx.com/assets/images/working.gif')").css("background-size","cover"); } )
		.on("mouseout", function() { siteassistant.css("background","URL('https://www.tutusfx.com/assets/images/open.gif')").css("background-size","cover"); } )
		.on("mousedown", function() { 
			if (!QUERYING) { siteassistant.css("background","URL('https://www.tutusfx.com/assets/images/busy.gif')").css("background-size","cover"); siteassistant.before("<input id='userquery' type='text' placeholder='Make your enquiries on Tutusfx or anything related' />"); QUERYING = true; } 
			else { $("#userquery").click(function(){ if ($("#userquery").val()!="") alert("Text: " + $("#userquery").val()); $("#userquery").remove(); QUERYING = false; }); } 
		});

	// These are Javascript media query variables for referencing various screen sizes
	var browserwidth = window.matchMedia("(max-width: 1200px)"); var browserwidth1 = window.matchMedia("(max-width: 800px)");
	var browserwidth2 = window.matchMedia("(max-width: 480px)"); var browserwidth3 = window.matchMedia("(max-width: 345px)");
	
	// Set column behaviours depending on referenced screen size
	function windowsize(browserwidth,browserwidth1,browserwidth2,browserwidth3) {
	  if (browserwidth3.matches) {  // do something as browserwidth <= 345px
	    expandablecolumn.css("width","99%").css("margin","-30% 0% 60% auto").css("margin-bottom","-100px").css("position","relative").css("float","none").css("left","0").css("padding","0").css("height","auto");
		floatingcolumn.css("width","99%").css("margin","0.5%").css("position","relative").css("float","none").css("left","0").css("padding","0").css("height","auto");
	  } else if (browserwidth2.matches) {  // do something as browserwidth <= 480px
		expandablecolumn.css("width","99%").css("margin","0.5%");
		floatingcolumn.css("width","99%").css("margin","-30% 0% 60% auto").css("position","relative").css("float","none").css("left","0").css("padding","0").css("height","auto");
	  } else if (browserwidth1.matches) { // do something as browserwidth <= 800px
		expandablecolumn.css("width","99%").css("margin","0.5%");
		floatingcolumn.css("width","99%").css("margin","-30% 0% 60% auto").css("position","relative").css("float","none").css("left","0").css("padding","0").css("height","auto");
	  } else if (browserwidth.matches) { // do something as browserwidth <= 1200px
		expandablecolumn.css("width","65%");
		floatingcolumn.css("width","34%").css("margin","0.5%").css("background","none").css("position","fixed").css("left","65%").css("padding","1%").css("height","auto");
	  } else { // do something as browserwidth >= 1200px
		expandablecolumn.css("width","65%"); 
		floatingcolumn.css("width","34%").css("margin","0.5%").css("background","none").css("position","fixed").css("left","65%").css("padding","1%").css("height","auto");
	  }
	} browserwidth.addListener(windowsize); // Attach listener function
	
	// These are Javascript id selector and utility variables
	var header = document.getElementById("topnav"); var rates = document.getElementById("ratebar");
	var title = document.getElementById("headertitle"); var headercontent = document.getElementById("headercontent");
	var footerdiv = document.getElementById("footerDiv"); var footerheader = document.getElementById("footerDivHeader"); 
	var footertexts = document.getElementById("footerDivTexts"); var footerclosebtn = document.getElementById("close");
	var ads = document.getElementById("ads"); var upperclosebtn = document.getElementById("upperclosebtn"); var headeroffset = header.offsetTop;
	
	
	/* Set behaviour of 2-level dropdown using JQuery */	
	$(document).ready(function(){ $('.dropdown-submenu a.droplevel2').on("click", function(e){ $(this).next('ul').toggle(); e.stopPropagation(); e.preventDefault(); }); });
	
	
	/* Set the back-button functionality */	
	function prevPage(){ window.history.go(-1); }
	/* Set the next-button functionality */
	function nextPage(){ window.history.go(+1); }

	/* Set header, ratebar and footer behaviour */
	function myFunction() { 
		if (window.pageYOffset > (headeroffset-(headeroffset/10)-50)) { 
			if (upperclosing) { if (window.pageYOffset > (headeroffset-(headeroffset/10))) { floatingcolumn.css("top","110px"); header.classList.remove("sticky"); header.classList.add("sticky2"); } } else { floatingcolumn.css("top","160px"); header.classList.remove("sticky2"); header.classList.add("sticky"); } 
		} else { if (upperclosing) { floatingcolumn.css("top","55px"); } else { floatingcolumn.css("top","105px"); }
			title.style.paddingTop = (window.pageYOffset+30)+"px"; title.style.fontSize = (90-(3*window.pageYOffset/25))+"px"; 
			headercontent.style.paddingTop = (window.pageYOffset-220)+"px"; headercontent.style.fontSize = (40-(window.pageYOffset/25))+"px";
			if (window.pageYOffset > 250) { (window.pageYOffset/2)+"px"; headercontent.style.fontSize = "0px"; } 
			if (upperclosing) { header.classList.remove("sticky2"); } else { header.classList.remove("sticky"); } 
		}
		if (upperclosing) { rates.classList.remove("upperbar"); rates.style.height = "0px"; rates.style.Float = "top";  
			upperclosebtn.classList.remove("glyphicon-arrow-right"); upperclosebtn.classList.add("glyphicon-arrow-left"); ads.style.fontSize = "0%";
		} else { rates.classList.add("upperbar"); rates.style.height = "50px"; rates.style.top = "0px"; rates.style.zIndex = "1000";
			upperclosebtn.classList.remove("glyphicon-arrow-left"); upperclosebtn.classList.add("glyphicon-arrow-right"); ads.style.fontSize = "100%"; setRateBarTheme(); 
		} if (textclosed) { topheadertitle.hide(); topheadercontent.hide(); } else { topheadertitle.show(); topheadercontent.show(); } 
	} myFunction(); // apply header/ratebar/footer settings at runtime
	
	/* Apply header, ratebar and footer behaviour on scrolling the UI */
	window.onscroll = function() { myFunction(); windowsize(browserwidth,browserwidth1,browserwidth2,browserwidth3); /* Call screen resize function to reset any bloated (1-col) layout accordingly.*/ }

	/* Set behaviour on closing the footer */
	function dofooterclose() { 
		if (footerclosing) { footerclosebtn.classList.remove("glyphicon-arrow-up"); footerclosebtn.classList.add("glyphicon-arrow-down");
			footerdiv.style.background = "none"; footerheader.style.fontSize = "0%"; footertexts.style.fontSize = "0%"; footerclosing = false;
		} else { setFooterTheme(); footerclosebtn.classList.remove("glyphicon-arrow-down"); footerclosebtn.classList.add("glyphicon-arrow-up");
			footerdiv.style.height = "30%"; footerdiv.style.top = "70%"; footerheader.style.fontSize = "100%"; footertexts.style.fontSize = "100%"; footerclosing = true;
		}
	}
	
	/* Set behaviour on closing the ratebar */
	function doupperclosing() { 
		if (upperclosing) { upperclosebtn.classList.remove("close-upper"); upperclosebtn.classList.add("open-upper"); upperclosing = false; } 
		else { upperclosebtn.classList.remove("open-upper"); upperclosebtn.classList.add("close-upper"); upperclosing = true; } myFunction(); // call default page setter function at state changes
	}
	
	/* Set behaviour on closing the header texts */
	function dotextclosing() { 
		if (textclosed) { topheadertitle.show(); topheadercontent.show(); textclosed = false; } 
		else { topheadertitle.hide(); topheadercontent.hide(); textclosed = true; }
	}
	/* Script is written in Javascript/JQuery */
	var body = $("body"); var img = $("img"); var topnavimg = $("#topnav img"); var marquee = $("marquee"); var thisselect = $("select"); var navheaderlinks = $("nav a");
	var navheaderinputs = $("li input"); var allinputs = $("input"); var h3 = $("h3"); var paragraph = $("p"); var textinputarea = $("textarea"); var links = $("a");
	 
	var pagefootertopicr = $(".upper-footer"); var pagefooter = $(".footer"); var pagefootercard = $(".footerCard"); 
	var trendingtrades = $(".trendingtrades"); var trendingtradeusername = $(".trendingtradeusername"); var card = $(".card"); var cardlist = $(".cardlist"); 
	var cardahov = $(".card a:hover"); var carda = $(".card a"); var cardp = $(".card p"); var warningspan = $(".warning span"); var pagefootertopics = $(".upper-footer a"); 
	var navcontainer = $(".navbar"); var drawer = $(".collapse"); var dropdown = $(".contactUs-regardingSelect"); var toggledrawer = $(".navbar-toggle"); var rightalign = $(".rightAlign");
	var atradeview = $(".tradeview"); var positiverate = $(".positiverate"); var negativerate = $(".negativerate"); var fakeimg = $(".fakeimg"); var navbarcontainer = $(".container-fluid");
	
	var returner = $("#returner");  var returnerhov = $("#returner :hover"); var closebtn = $("#close"); var ratebar = $("#ratebar"); 
	var topnavahov = $("#topnav a:hover"); var topnavin = $("#topnav input"); var pagefooterdivheader = $("#footerDivHeader"); var pagefooterdivtexts = $("#footerDivTexts");
	var topheader = $("#header"); var toolbar = $("#topnav"); var topheadertitle = $("#headertitle"); var topheadercontent = $("#headercontent"); var myprogress = $("#myProgress"); 
	var segments = $("#segment"); var topnava = $("#topnav a"); var progressBar = $("#progressBar"); var toggleicons = [$("#icon-bar1"),$("#icon-bar2"),$("#icon-bar3"),$("#icon-bar4")];
	
	var THEME; var HIDDEN = true; var i = 0; var footerclosing = true; var upperclosing = false;
	
	if (THEME==null) setTheme(THEME = 0); else setTheme(THEME);
	
	function setTheme(THEME){
		img.css("position","relative").css("top","0").css("left","0").css("width","100%").css("height","100%").css("float","left top").css("border-radius","1.5px");
		textinputarea.css("min-height","300px").css("min-width","100%").css("height","80%").css("width","100%").css("top","0").css("left","0").css("text-align","justify").css("float","center").css("border-radius","5px").css("padding","16px 4px");
		topheader.css("margin-left","-1.2%").css("text-align","center").css("text-shadow","-8px 8px 16px #B2D4B2").css("box-shadow","-3px 5px 3px #343");
		topheadertitle.css("z-index","-1000").css("font-family","Garamond").css("font-weight","bolder").css("font-stretch","expanded");
		topheadercontent.css("font-style","italic").css("font-family","Garamond").css("font-stretch","condensed");
		drawer.css("height","100%").css("width","auto").css("text-align","justify");
		segments.css("padding","0.5% 5%").css("text-shadow","-1px 1px 1px #010").css("box-shadow","-5px 5px 3px #aba");
		fakeimg.css("width","100%").css("padding","2%").css("margin","20px 0").css("border-radius","2px").css("box-shadow","-3px 3px 2px #aba");
		body.css("fontFamily","Arial, Helvetica, sans-serif").css("padding","0.1% 0.1% 0.1% 2.5%");
		h3.css("font-weight","bolder").css("text-align","center"); rightalign.css("float","right"); marquee.css("color","#ff0e").css("width","98%"); 
		pagefootercard.css("float","left").css("text-align","justify").css("padding","0% 2%").css("font-size","90%").css("height","547px");
		negativerate.css("color","#ff0000").css("font-family","Courier New, Times New Roman, Arial").css("font-size","100%").css("font-weight","lighter").css("font-stretch","condensed").css("text-decoration","blink");
		positiverate.css("color","#ffffff").css("font-family","Courier New, Times New Roman, Arial").css("font-size","100%").css("font-weight","lighter").css("font-stretch","condensed").css("text-decoration","blink");
		thisselect.css("background-color","#eeeeee");
		closebtn.css("display","block").css("background-color","white");
		trendingtradeusername.css("background","none").css("color","#B2D4B2");
		pagefootertopicr.css("padding","1%").css("text-align","center");
		trendingtrades.css("padding","1%").css("margin-top","0.5%").css("color","#ffffff");
		returner.css("float","right").css("font-weight","bolder").css("font-stretch","condensed").css("padding","2.5%").css("margin-top","1%").css("border-radius","25px").css("box-shadow","-5px 5px 3px #aba");
		card.css("padding","2.5% 2.5% 12.5% 2.5%").css("margin-top","1%").css("border-radius","3px").css("box-shadow","-5px 5px 3px #aba");
		toggledrawer.css("transition","all 0.3s ease-in"); toolbar.css("z-index","1000").css("display","block").css("margin-bottom","50px");
		paragraph.css("padding","2%"); 
		topnava.css("text-align","center").css("color","#f2f2f2").css("padding","14px 8px").css("text-decoration","none").css("display","block").css("transition","all 0.3s ease-in").css("-webkit-transition","all 0.3s ease-in").css("-moz-transition","all 0.3s ease-in").css("-o-transition","all 0.3s ease-in");
		topnavahov.css("border-radius","2.5px").css("transition","all 0.3s ease-out").css("-webkit-transition","all 0.3s ease-out").css("-moz-transition","all 0.3s ease-out").css("-o-transition","all 0.3s ease-out");
		topnavin.css("text-align","center").css("color","#f2f2f2").css("padding","14px 8px").css("text-decoration","none").css("display","inline").css("transition","all 0.3s ease-in").css("-webkit-transition","all 0.3s ease-in").css("-moz-transition","all 0.3s ease-in").css("-o-transition","all 0.3s ease-in");
		allinputs.css("z-index","300");
		topnavimg.css("width","40px");
		atradeview.css("height","650px");
		cardahov.css("color","#B2D4B2");
		carda.css("text-decoration","none");
		cardp.css("text-align","justify");
		cardlist.css("dropdown","100%");
		links.css("text-decoration","none").css("transition","all 0.3s ease-out").css("-webkit-transition","all 0.3s ease-out").css("-moz-transition","all 0.3s ease-out").css("-o-transition","all 0.3s ease-out");
		pagefooter.css("height","600px").css("z-index","500").css("border-radius","5px 5px 0px 0px").css("margin-top","100px").css("margin-left","-2.5%").css("padding","0").css("text-align","center").css("font-stretch","condensed").css("font-weight","lighter");
		pagefooterdivheader.css("color","white").css("font-weight","bold").css("font-size","100%");
		pagefooterdivtexts.css("color","white").css("text-align","justify").css("float","justify").css("font-size","99%");
		navcontainer.css("margin-left","-2.4%").css("border-radius","0px 0px 5px 5px").css("box-shadow","-3px 5px 3px #454");
		
		if (THEME==0){ applyTheme("#004300","#ffffff","#baf1ba","#fefefe","#bbfebb"); } /* theme, revtheme, bodybkgd, header, fakeimg */ 
		else if (THEME==1) { applyTheme("#000000","#ffffff","#444444","#fefefe","#aaaaaa"); } 
		else if (THEME==2) { applyTheme("#ffffff","#000000","#fefefe","#000000","#eeeeee"); } 
		else if (THEME==3) { applyTheme("#1234ab","#ffffff","#babaf1","#ffffff","#5678ef"); } 
		else if (THEME==4) { applyTheme("#ff1234","#ffffff","#f1baba","#ffffff","#44cdef"); } 
		else if (THEME==5) { applyTheme("#ff12ff","#ffffff","#f1baf1","#ffffff","#aaaaaa"); } 
		else if (THEME==6) { applyTheme("#12ffff","#ffffff","#baf1f1","#004300","#aaaaaa"); } 
		else if (THEME==7) { applyTheme("#008080","#ffffff","#f1f1f1","#ffffff","#aaaaaa"); } 
		else if (THEME==8) { applyTheme("#800080","#ffffff","#baf1f1","#ffffff","#aaaaaa"); } 
		else if (THEME==9) { applyTheme("#c0c0c0","#ffffff","#f1f1f1","#004300","#aaaaaa"); } 
		for (i=0; i<toggleicons.length; i++) { toggleicons[i].css("background","white"); } 
	}
	
	function applyTheme(color1,color2,bodycolor,headercolor,fakeimgcolor){
			body.css("background",bodycolor).css("color",color1); 
			returnerhov.css("background",color2).css("color",color1); 
			topheader.css("background",color2).css("color",color1); 
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
	
	$("#upperclosebtn:first").on("mouseover", function() { upperclosebtn.style.border="none";
		if (THEME==0) { upperclosebtn.style.background="#004300"; upperclosebtn.style.color="white"; } 
		else if (THEME==1) { upperclosebtn.style.background="#000000"; upperclosebtn.style.color="white"; } 
		else if (THEME==2) { upperclosebtn.style.background="#ffffff"; upperclosebtn.style.color="#004300"; } 
		else if (THEME==3) { upperclosebtn.style.background="#1234ab"; upperclosebtn.style.color="#000000"; } 
		else if (THEME==4) { upperclosebtn.style.background="#ff1234"; upperclosebtn.style.color="#000000"; } 
		else if (THEME==5) { upperclosebtn.style.background="#ff12ff"; upperclosebtn.style.color="#ffffff"; } 
	}).on("mouseout", function() { 
		if (THEME==0) { upperclosebtn.style.background="white"; upperclosebtn.style.color="#004300"; } 
		else if (THEME==1) { upperclosebtn.style.background="white"; upperclosebtn.style.color="#000000"; } 
		else if (THEME==2) { upperclosebtn.style.background="#004300"; upperclosebtn.style.color="#ffffff"; } 
		else if (THEME==3) { upperclosebtn.style.background="#000000"; upperclosebtn.style.color="#1234ab"; } 
		else if (THEME==4) { upperclosebtn.style.background="#000000"; upperclosebtn.style.color="#ff1234"; } 
		else if (THEME==5) { upperclosebtn.style.background="#ffffff"; upperclosebtn.style.color="#ff12ff"; } 
	});
	
	$("#close:first").on("mouseover", function() { 
		if (THEME==0) { pagefooterclosebtn.style.background="#004300"; pagefooterclosebtn.style.color="white"; } 
		else if (THEME==1) { pagefooterclosebtn.style.background="#000000"; pagefooterclosebtn.style.color="white"; } 
		else if (THEME==2) { pagefooterclosebtn.style.background="#ffffff"; pagefooterclosebtn.style.color="#004300"; } 
		else if (THEME==3) { pagefooterclosebtn.style.background="#1234ab"; pagefooterclosebtn.style.color="#000000"; } 
		else if (THEME==4) { pagefooterclosebtn.style.background="#ff1234"; pagefooterclosebtn.style.color="#000000"; } 
		else if (THEME==5) { pagefooterclosebtn.style.background="#ff12ff"; pagefooterclosebtn.style.color="#ffffff"; } 
	}).on("mouseout", function() { 
		if (THEME==0) { pagefooterclosebtn.style.background="white"; pagefooterclosebtn.style.color="#004300"; } 
		else if (THEME==1) { pagefooterclosebtn.style.background="white"; pagefooterclosebtn.style.color="#000000"; } 
		else if (THEME==2) { pagefooterclosebtn.style.background="#004300"; pagefooterclosebtn.style.color="#ffffff"; } 
		else if (THEME==3) { pagefooterclosebtn.style.background="#000000"; pagefooterclosebtn.style.color="#1234ab"; } 
		else if (THEME==4) { pagefooterclosebtn.style.background="#000000"; pagefooterclosebtn.style.color="#ff1234"; } 
		else if (THEME==5) { pagefooterclosebtn.style.background="#ffffff"; pagefooterclosebtn.style.color="#ff12ff"; } 
	});
	
	$(".navbar-toggle:first").on("mouseover", function() { 
		for (i=0; i<toggleicons.length; i++) { 
			if (THEME==0) { toggleicons[i].css("background","#004300"); } 
			else if (THEME==1) { toggleicons[i].css("background","black"); } 
			else if (THEME==2) { toggleicons[i].css("background","white"); } 
			else if (THEME==3) { toggleicons[i].css("background","#1234ab"); } 
			else if (THEME==4) { toggleicons[i].css("background","#ff1234"); } 
			else if (THEME==5) { toggleicons[i].css("background","#ff12ff"); }  
		} if (THEME==2) { toggledrawer.css("background","#aaaaaa"); } else toggledrawer.css("background","white");
	}).on("mouseout", function() { 
		for (i=0; i<toggleicons.length; i++) { if (THEME==2) { toggleicons[i].css("background","#aaaaaa"); } else toggleicons[i].css("background","white"); }
		if (THEME==0) { toggledrawer.css("background","#004300"); } 
		else if (THEME==1) { toggledrawer.css("background","black"); } 
		else if (THEME==2) { toggledrawer.css("background","white"); } 
		else if (THEME==3) { toggledrawer.css("background","#1234ab"); } 
		else if (THEME==4) { toggledrawer.css("background","#ff1234"); } 
		else if (THEME==5) { toggledrawer.css("background","#ff12ff"); }   
	}).on("mousedown", function() { if (!HIDDEN) { drawer.hide(); HIDDEN=true; } else { drawer.show(); HIDDEN=false; } });
	
	var header = document.getElementById("topnav"); var headeroffset = header.offsetTop; var rates = document.getElementById("ratebar"); var upperbar = rates.offsetTop;
	var title = document.getElementById("headertitle"); var headercontent = document.getElementById("headercontent");
	var footerdiv = document.getElementById("footerDiv"); var footerheader = document.getElementById("footerDivHeader"); 
	var footertexts = document.getElementById("footerDivTexts"); var footerclosebtn = document.getElementById("close");
	var ads = document.getElementById("ads"); var upperclosebtn = document.getElementById("upperclosebtn");
	
	$(document).ready(function(){
	  $('.dropdown-submenu a.droplevel2').on("click", function(e){
		$(this).next('ul').toggle();
		e.stopPropagation();
		e.preventDefault();
	  });
	});
	
	function prevPage(){ window.history.go(-1); }
	
	function nextPage(){ window.history.go(+1); }
				
	myFunction();
	
	window.onscroll = function() { myFunction() };

	function myFunction() { 
		if (window.pageYOffset > (headeroffset-(headeroffset/10)-50)) { 
			if (upperclosing==true) { if (window.pageYOffset > (headeroffset-(headeroffset/10))) { header.classList.remove("sticky"); header.classList.add("sticky2"); } } else { header.classList.remove("sticky2"); header.classList.add("sticky"); } 
		} else {
			title.style.paddingTop = (window.pageYOffset+30)+"px"; title.style.fontSize = (90-(3*window.pageYOffset/25))+"px"; 
			headercontent.style.paddingTop = (window.pageYOffset-220)+"px"; headercontent.style.fontSize = (40-(window.pageYOffset/25))+"px";
			if (window.pageYOffset > 250) { (window.pageYOffset/2)+"px"; headercontent.style.fontSize = "0px"; } 
			if (upperclosing==true) { header.classList.remove("sticky2"); } else { header.classList.remove("sticky"); } 
		}
		if (upperclosing==true) { rates.classList.remove("upperbar"); rates.style.height = "0px"; rates.style.float = "top";  
			upperclosebtn.classList.remove("glyphicon-arrow-right"); upperclosebtn.classList.add("glyphicon-arrow-left");
			ads.style.fontSize = "0%";
		} else { rates.classList.add("upperbar"); rates.style.height = "50px"; rates.style.top = "0px"; rates.style.zIndex = "1000";
			upperclosebtn.classList.remove("glyphicon-arrow-left"); upperclosebtn.classList.add("glyphicon-arrow-right");
			ads.style.fontSize = "100%"; setRateBarTheme(); 
		}
	}
	
	function doclose() { 
		if (footerclosing==true) {
			footerclosebtn.classList.remove("glyphicon-arrow-up"); footerclosebtn.classList.add("glyphicon-arrow-down");
			footerdiv.style.background = "none"; footerheader.style.fontSize = "0%"; footertexts.style.fontSize = "0%"; footerclosing = false;
		} else { setFooterTheme();
			footerclosebtn.classList.remove("glyphicon-arrow-down"); footerclosebtn.classList.add("glyphicon-arrow-up");
			footerdiv.style.height = "30%"; footerdiv.style.top = "70%"; footerheader.style.fontSize = "100%"; footertexts.style.fontSize = "100%"; footerclosing = true;
		}
	}
	
	function doupperclosing() { 
		if (upperclosing==true) { upperclosebtn.classList.remove("close-upper"); upperclosebtn.classList.add("open-upper"); upperclosing = false; } 
		else { upperclosebtn.classList.remove("open-upper"); upperclosebtn.classList.add("close-upper"); upperclosing = true; } myFunction();
	}
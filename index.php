<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"><title>Tutusfx.com | Incentivized Forex Brokerage with Smart Contracts</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="HandheldFriendly" content="True" />
		<meta name="MobileOptimized" content="320" />
		<script>
			date = new Date();
			date.setTime(date.getTime()+(30*24*60*60*1000));
			expires = "; expires="+date.toGMTString();
			document.cookie = "cookie0=cookie0" + expires + "; domain=.tutusfx.com; path=/";

			function check_test_cookie(){
				return (document.cookie.search('cookie0') != -1)
			}
		</script>
		<script>
			if(check_test_cookie()){
			var _vis_opt_account_id = 45848;
			var _vis_opt_protocol = (('https:' == document.location.protocol) ? 'https://' : 'http://');
			document.write('<s' + 'cript src="' + _vis_opt_protocol +
			'dev.visualwebsiteoptimizer.com/deploy/js_visitor_settings.php?v=1&a='+_vis_opt_account_id+'&url='
			+encodeURIComponent(document.URL)+'&random='+Math.random()+'" type="text/javascript">' + '<\/s' + 'cript>');
		}
		</script>
		<script>
			if(check_test_cookie()){
				if(typeof(_vis_opt_settings_loaded) == "boolean") { document.write('<s' + 'cript src="' + _vis_opt_protocol + 'd5phz18u4wuww.cloudfront.net/vis_opt.js" type="text/javascript">' + '<\/s' + 'cript>'); }
				// if your site already has jQuery 1.4.2, replace vis_opt.js with vis_opt_no_jquery.js above
			}
		</script>
		<script>
		if(check_test_cookie()){
			if(typeof(_vis_opt_settings_loaded) == "boolean" && typeof(_vis_opt_top_initialize) == "function") {
					_vis_opt_top_initialize(); vwo_$(document).ready(function() { _vis_opt_bottom_initialize(); });
			}
		}
		</script>
		<script type="text/javascript">
			window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(13),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,-1!==o.indexOf("dev")&&(s.dev=!0),-1!==o.indexOf("nr_dev")&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,e,n)])}catch(s){try{i("ierr",[s,(new Date).getTime(),!0])}catch(c){}}return"function"==typeof f?f.apply(this,a(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t){i("err",[t,(new Date).getTime()])}var i=t("handle"),a=t(14),s=t("ee"),c=t("loader"),f=window.onerror,u=!1,d=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(l){"stack"in l&&(t(7),t(6),"addEventListener"in window&&t(4),c.xhrWrappable&&t(8),u=!0)}s.on("fn-start",function(t,e,n){u&&(d+=1)}),s.on("fn-err",function(t,e,n){u&&(this.thrown=!0,o(n))}),s.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),s.on("internal-error",function(t){i("ierr",[t,(new Date).getTime(),!0])})},{}],3:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(7),s=t(6);t("loader").features.stn=!0,t(5);var c=NREUM.o.EV;o.on("fn-start",function(t,e){var n=t[0];n instanceof c&&(this.bstStart=Date.now())}),o.on("fn-end",function(t,e){var n=t[0];n instanceof c&&i("bst",[n,e,this.bstStart,Date.now()])}),a.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),a.on("fn-end",function(t,e){i("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),s.on("fn-start",function(){this.bstStart=Date.now()}),s.on("fn-end",function(t,e){i("bstTimer",[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),o.on("pushState-start",function(t){this.time=Date.now(),this.startPath=location.pathname+location.hash}),o.on("pushState-end",function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.clearResourceTimings?window.performance.addEventListener("resourcetimingbufferfull",function(t){i("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1):window.performance.addEventListener("webkitresourcetimingbufferfull",function(t){i("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1)),document.addEventListener("scroll",r,!1),document.addEventListener("keypress",r,!1),document.addEventListener("click",r,!1)}},{}],4:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty("addEventListener");)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){s.inPlace(t,["addEventListener","removeEventListener"],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),s=t(15)(a),c=t("gos");e.exports=a,o(window),"getPrototypeOf"in Object?(r(document),r(XMLHttpRequest.prototype)):XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&o(XMLHttpRequest.prototype),a.on("addEventListener-start",function(t,e){if(t[1]){var n=t[1];if("function"==typeof n){var r=c(n,"nr@wrapped",function(){return s(n,"fn-",null,n.name||"anonymous")});this.wrapped=t[1]=r}else"function"==typeof n.handleEvent&&s.inPlace(n,["handleEvent"],"fn-")}}),a.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{}],5:[function(t,e,n){var r=t("ee").get("history"),o=t(15)(r);e.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],6:[function(t,e,n){var r=t("ee").get("raf"),o=t(15)(r);e.exports=r,o.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],7:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration="number"==typeof t[1]?t[1]:0,t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(15)(i);e.exports=i,a.inPlace(window,["setTimeout","setImmediate"],"setTimer-"),a.inPlace(window,["setInterval"],"setInterval-"),a.inPlace(window,["clearTimeout","clearImmediate"],"clearTimeout-"),i.on("setInterval-start",r),i.on("setTimer-start",o)},{}],8:[function(t,e,n){function r(t,e){e=e||this;var n=a.context(e);e.readyState>3&&!n.resolved&&(n.resolved=!0,a.emit("xhr-resolved",[],e));try{f.inPlace(e,p,"fn-",o)}catch(r){}}function o(t,e){return e}function i(t,e){for(var n in t)e[n]=t[n];return e}var a=t("ee").get("xhr"),s=t(4),c=t(15),f=c(a),u=c(s),d=NREUM.o,l=d.XHR,p=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout","onreadystatechange"];e.exports=a,window.XMLHttpRequest=function(t){var e=new l(t);try{a.emit("new-xhr",[e],e),e.hasOwnProperty("addEventListener")&&u.inPlace(e,["addEventListener","removeEventListener"],"-",o),e.addEventListener("readystatechange",r,!1)}catch(n){try{a.emit("internal-error",[n])}catch(i){}}return e},i(l,XMLHttpRequest),XMLHttpRequest.prototype=l.prototype,f.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),a.on("send-xhr-start",r),a.on("open-xhr-start",r)},{}],9:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;l>r;r++)t.removeEventListener(d[r],this.listener,!1);if(!e.aborted){if(n.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var i=o(t,this.lastSize);if(i&&(n.rxSize=i),this.sameOrigin){var a=t.getResponseHeader("X-NewRelic-App-Data");a&&(e.cat=a.split(", ").pop())}}else e.status=0;n.cbTime=this.cbTime,u.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime])}}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return i(r)}function i(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}function a(t,e){var n=f(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}var s=t("loader");if(s.xhrWrappable){var c=t("handle"),f=t(10),u=t("ee"),d=["load","error","abort","timeout"],l=d.length,p=t("id"),h=t(12),m=window.XMLHttpRequest;s.features.xhr=!0,t(4),t(8),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,h&&(h>34||10>h)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},a(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var a=i(r);a&&(n.txSize=a)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var s=0;l>s;s++)e.addEventListener(d[s],this.listener,!1)}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof m&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{}],10:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("../index.html")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],11:[function(t,e,n){function r(t,e){return function(){o(t,[(new Date).getTime()].concat(a(arguments)),null,e)}}var o=t("handle"),i=t(13),a=t(14);"undefined"==typeof window.newrelic&&(newrelic=NREUM);var s=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit"],c=["addPageAction"],f="api-";i(s,function(t,e){newrelic[e]=r(f+e,"api")}),i(c,function(t,e){newrelic[e]=r(f+e)}),e.exports=newrelic,newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),o("err",[t,(new Date).getTime()])}},{}],12:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],13:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],14:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],15:[function(t,e,n){function r(t){return!(t&&"function"==typeof t&&t.apply&&!t[a])}var o=t("ee"),i=t(14),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;e.exports=function(t){function e(t,e,n,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof n?n(r,a):n||{}}catch(u){d([u,"",[r,a,o],s])}f(e+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(l){throw f(e+"err",[r,a,l],s),l}finally{f(e+"end",[r,a,c],s)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,u(t,nrWrapper),nrWrapper)}function n(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function f(e,n,r){if(!c){c=!0;try{t.emit(e,n,r)}catch(o){d([o,e,n,r])}c=!1}}function u(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){d([r])}for(var o in t)s.call(t,o)&&(e[o]=t[o]);return e}function d(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),e.inPlace=n,e.flag=a,e}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?s(t,a,i):i()}function n(n,r,o){t&&t(n,r,o);for(var i=e(o),a=l(n),s=a.length,c=0;s>c;c++)a[c].apply(i,r);var u=f[v[n]];return u&&u.push([w,n,r,i]),i}function d(t,e){m[t]=l(t).concat(e)}function l(t){return m[t]||[]}function p(t){return u[t]=u[t]||o(n)}function h(t,e){c(t,function(t,n){e=e||"feature",v[n]=e,e in f||(f[e]=[])})}var m={},v={},w={on:d,emit:n,get:p,listeners:l,context:e,buffer:h};return w}function i(){return new r}var a="nr@context",s=t("gos"),c=t(13),f={},u={},d=e.exports=o();d.backlog=f},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!m++){var t=h.info=NREUM.info,e=u.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){c(l,function(e,n){t[e]||(t[e]=n)});var n="https"===d.split(":")[0]||t.sslForHttp;h.proto=n?"https://":"http://",s("mark",["onload",a()],null,"api");var r=u.createElement("script");r.src=h.proto+t.agent,e.parentNode.insertBefore(r,e)}}}function o(){"complete"===u.readyState&&i()}function i(){s("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var s=t("handle"),c=t(13),f=window,u=f.document;NREUM.o={ST:setTimeout,XHR:f.XMLHttpRequest,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},t(11);var d=(""+location).split("?")[0],l={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-892.min.js"},p=window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent),h=e.exports={offset:a(),origin:d,features:{},xhrWrappable:p};u.addEventListener?(u.addEventListener("DOMContentLoaded",i,!1),f.addEventListener("load",r,!1)):(u.attachEvent("onreadystatechange",o),f.attachEvent("onload",r)),s("mark",["firstbyte",a()],null,"api");var m=0},{}]},{},["loader",2,9,3]);
			;NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"964aaddfde",applicationID:"13658517",sa:1,agent:"js-agent.newrelic.com/nr-892.min.js"}
		</script>
		<script type="text/javascript">
			WebFontConfig = {
				google: { families: [ 'Roboto:400,300,100,700italic,300italic,500,700:greek,latin,cyrillic' ] }
			};
			(function(d) {
				var wf = d.createElement('script'), s = d.scripts[0];
				wf.src = 'assets/ajavalue.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
				s.parentNode.insertBefore(wf, s);
			})(document);
		</script>
		<script type='text/javascript'> /* <![CDATA[ */ var ajaxurl = "\/wp-admin\/admin-ajavalue.php"; /* ]]> */ </script>
		<script type='text/javascript'> /* <![CDATA[ */ var save_like = {"ajaxurl":"\/wp-admin\/admin-ajavalue.php"}; /* ]]> */ </script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','assets/www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-112516938-1', 'auto');
			ga('send', 'pageview');
		</script>
		<link rel="canonical" href="/" />
		<meta property="og:locale" content="en_GB" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="tutusfx.com | Incentivized Forex Brokerage with Smart Contracts" />
		<meta property="og:url" content="https://www.tutusfx.com/" />
		<meta property="og:site_name" content="tutusfx.com" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:title" content="tutusfx.com" />
		<meta name="twitter:domain" content="tutusfx.com" />
		<meta name="generator" content="WPML ver:3.6.1 stt:5,39,1,4,3,27,40,42,44,47,2,52;" />
		<meta name="description" content="Tutusfx is an incentivized Forex/CFDs/Cryptocurrency trading platform built on blockchain technology. Trade Forex/CFDs/Cryptocurrency on our advanced, web-based trading platform designed with you, the user, in mind." />
		<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","url":"https:\/\/www.tutusfx.com\/","name":"tutusfx.com","potentialAction":{"@type":"SearchAction","target":"https:\/\/www.tutusfx.com\/?s={search_term}","query-input":"required name=search_term"}}</script>
		<link rel="icon" href="assets/images/new_logo.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="assets/images/new_logo.ico" type="image/x-icon" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css" type="text/css">
		<link rel="manifest" href="manifest.json" /> <!--server:header--> 
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script> 
		<script type="text/javascript">
			var _gaq = _gaq || [];
			// this is the init line, so that the ga lib will know which site it is tracking
			// !! need to make the second argument dynamic (the user can define which account to track)!!!!!
			_gaq.push(['_setAccount', 'UA-112516938-1']);
			// this is another method that simply sends the data that the ga js object collected, back to google analytics servers
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		<style>
			/* For Safari, Mozilla, Chrome and Opera browsers */
			@-webkit-keyframes pixAnimation {
				0%   {left:0px; top:0px; background:url("assets/images/forex_trading_10.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				7%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_8.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				14%  {left:0px; top:0px; background:url("assets/images/forex_trading_9.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				21%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_10.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				28% {left:0px; top:0px; background:url("assets/images/forex_trading_11.png") no-repeat center; color: #ff0e; -webkit-background-size: cover; background-size: cover;}
				35%   {left:0px; top:0px; background:url("assets/images/blockchain_technology_9.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				42%  {left:0px; top:0px; background:url("assets/images/forex_trading_13.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				50%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_11.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				57%  {left:0px; top:0px; background:url("assets/images/forex_trading_12.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				64% {left:0px; top:0px; background:url("assets/images/blockchain_technology_13.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				71%   {left:0px; top:0px; background:url("assets/images/forex_trading_16.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				78%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_12.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				85%  {left:0px; top:0px; background:url("assets/images/forex_trading_14.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				92%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_14.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				100% {left:0px; top:0px; background:url("assets/images/forex_trading_15.png") no-repeat center; color: #ff0e; -webkit-background-size: cover; background-size: cover;}
			}
			
			@-moz-keyframes pixAnimation {
				0%   {left:0px; top:0px; background:url("assets/images/forex_trading_10.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
				7%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_8.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
				14%  {left:0px; top:0px; background:url("assets/images/forex_trading_9.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
				21%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_10.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
				28% {left:0px; top:0px; background:url("assets/images/forex_trading_11.png") no-repeat center; color: #ff0e; -moz-background-size: cover; background-size: cover;}
				35%   {left:0px; top:0px; background:url("assets/images/blockchain_technology_9.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
				42%  {left:0px; top:0px; background:url("assets/images/forex_trading_13.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
				50%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_11.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
				57%  {left:0px; top:0px; background:url("assets/images/forex_trading_12.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
				64% {left:0px; top:0px; background:url("assets/images/blockchain_technology_13.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
				71%   {left:0px; top:0px; background:url("assets/images/forex_trading_16.png") no-repeat center; -moz-background-size: cover;background-size: cover;}
				78%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_12.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
				85%  {left:0px; top:0px; background:url("assets/images/forex_trading_14.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
				92%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_14.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
				100% {left:0px; top:0px; background:url("assets/images/forex_trading_15.png") no-repeat center; color: #ff0e; -moz-background-size: cover; background-size: cover;}
			}
			
			@-o-keyframes pixAnimation {
				0%   {left:0px; top:0px; background:url("assets/images/forex_trading_10.png") no-repeat center; -o-background-size: cover; background-size: cover;}
				7%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_8.png") no-repeat center; -o-background-size: cover; background-size: cover;}
				14%  {left:0px; top:0px; background:url("assets/images/forex_trading_9.png") no-repeat center; -o-background-size: cover; background-size: cover;}
				21%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_10.png") no-repeat center; -o-background-size: cover; background-size: cover;}
				28% {left:0px; top:0px; background:url("assets/images/forex_trading_11.png") no-repeat center; color: #ff0e; -o-background-size: cover; background-size: cover;}
				35%   {left:0px; top:0px; background:url("assets/images/blockchain_technology_9.png") no-repeat center; -o-background-size: cover; background-size: cover;}
				42%  {left:0px; top:0px; background:url("assets/images/forex_trading_13.png") no-repeat center; -o-background-size: cover; background-size: cover;}
				50%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_11.png") no-repeat center; -o-background-size: cover; background-size: cover;}
				57%  {left:0px; top:0px; background:url("assets/images/forex_trading_12.png") no-repeat center; -o-background-size: cover; background-size: cover;}
				64% {left:0px; top:0px; background:url("assets/images/blockchain_technology_13.png") no-repeat center; -o-background-size: cover; background-size: cover;}
				71%   {left:0px; top:0px; background:url("assets/images/forex_trading_16.png") no-repeat center; -o-background-size: cover; background-size: cover;}
				78%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_12.png") no-repeat center; -o-background-size: cover; background-size: cover;}
				85%  {left:0px; top:0px; background:url("assets/images/forex_trading_14.png") no-repeat center; -o-background-size: cover; background-size: cover;}
				92%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_14.png") no-repeat center; -o-background-size: cover; background-size: cover;}
				100% {left:0px; top:0px; background:url("assets/images/forex_trading_15.png") no-repeat center; color: #ff0e; -o-background-size: cover; background-size: cover;}
			}
			
			/* For IE, does not work on <IE9 */
			@keyframes pixAnimation {
				0%   {left:0px; top:0px; background:url("assets/images/forex_trading_10.png") no-repeat center; background-size: cover;}
				7%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_8.png") no-repeat center; background-size: cover;}
				14%  {left:0px; top:0px; background:url("assets/images/forex_trading_9.png") no-repeat center; background-size: cover;}
				21%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_10.png") no-repeat center; background-size: cover;}
				28% {left:0px; top:0px; background:url("assets/images/forex_trading_11.png") no-repeat center; color: #ff0e; background-size: cover;}
				35%   {left:0px; top:0px; background:url("assets/images/blockchain_technology_9.png") no-repeat center; background-size: cover;}
				42%  {left:0px; top:0px; background:url("assets/images/forex_trading_13.png") no-repeat center; background-size: cover;}
				50%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_11.png") no-repeat center; background-size: cover;}
				57%  {left:0px; top:0px; background:url("assets/images/forex_trading_12.png") no-repeat center; background-size: cover;}
				64% {left:0px; top:0px; background:url("assets/images/blockchain_technology_13.png") no-repeat center; background-size: cover;}
				71%   {left:0px; top:0px; background:url("assets/images/forex_trading_16.png") no-repeat center; background-size: cover;}
				78%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_12.png") no-repeat center; background-size: cover;}
				85%  {left:0px; top:0px; background:url("assets/images/forex_trading_14.png") no-repeat center; background-size: cover;}
				92%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_14.png") no-repeat center; background-size: cover;}
				100% {left:0px; top:0px; background:url("assets/images/forex_trading_15.png") no-repeat center; color: #ff0e; background-size: cover;}
			}
			
			.animatePix{ 
				width: 100%; -webkit-animation: pixAnimation 30s infinite; -moz-animation: pixAnimation 30s infinite;
				-o-animation: pixAnimation 30s infinite; animation: pixAnimation 30s infinite; font-weight: bolder;
			}
		</style>
	</head>
	<body>
		<script type="text/javascript">
			var has_cookie_a = false;
			if (typeof docCookies != 'undefined') {
				has_cookie_a = IsLoggedIn();
			} else {
				var docCookiesIns = {
					getItem: function (sKey) {
						return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;
					},
					setItem: function (sKey, sValue, vEnd, sPath, sDomain, bSecure) {
						if (!sKey || /^(?:expires|max\-age|path|domain|secure)$/i.test(sKey)) { return false; }
						var sExpires = "";
						if (vEnd) {
							switch (vEnd.constructor) {
								case Number: sExpires = vEnd === Infinity ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + vEnd; break;
								case String: sExpires = "; expires=" + vEnd; break;
								case Date: sExpires = "; expires=" + vEnd.toUTCString(); break;
							}
						} document.cookie = encodeURIComponent(sKey) + "=" + encodeURIComponent(sValue) + sExpires + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "") + (bSecure ? "; secure" : "");
						return true;
					},
					removeItem: function (sKey, sPath, sDomain) {
						if (!sKey || !this.hasItem(sKey)) { return false; }
						document.cookie = encodeURIComponent(sKey) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + ( sDomain ? "; domain=" + sDomain : "") + ( sPath ? "; path=" + sPath : "");
						return true;
					},
					hasItem: function (sKey) {
						return (new RegExp("(?:^|;\\s*)" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=")).test(document.cookie);
					},
					keys: /* optional method: you can safely remove it! */ function () {
						var aKeys = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/);
						for (var nIdx = 0; nIdx < aKeys.length; nIdx++) { aKeys[nIdx] = decodeURIComponent(aKeys[nIdx]); }
						return aKeys;
					}
				}; has_cookie_a = docCookiesIns.hasItem('a');
			}

			if(has_cookie_a){
				$('body').addClass( "login" );
				(function(LoggedUser){
					var accountType = LoggedUser.account_type === 'Standard' ? "Basic" : LoggedUser.account_type;
					$("#acct_type").html(accountType);
					$("#acct_name").html(LoggedUser.acct_name);
					$("#fname").html(LoggedUser.fName);
					$("#email").html(LoggedUser.email);
					$("#phone_num").html(LoggedUser.phone_num);
					$("#btcId").html(LoggedUser.btcId);
					$("#steemId").html(LoggedUser.steemId);
					$("#zcode").html(LoggedUser.zipcode);
					$("#jobpos").html(LoggedUser.jobpos);
					$("#jobdate").html(LoggedUser.jobdate);
					$("#posdate").html(LoggedUser.posdate);
					$("#company").html(LoggedUser.company);
					$("#compadd").html(LoggedUser.compadd);
					$("#city").html(LoggedUser.city);

				})( get_user_params() );
			}
			
			function IsLoggedIn(){ return <?php if ( isset($_SESSION['user']) && $_SESSION['user']!=="") echo true; else echo false; ?>; }
        </script>
		<div id="ratebar"><marquee id="ads" scrolldelay="1s" scrollamount="3">
			<span class="usdcad">USD/CAD: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="usdjpy">USD/JPY: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="usdchf">USD/CHF: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="eurchf">EUR/CHF: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="gbpusd">GBP/USD: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="audusd">AUD/USD: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="eurusd">EUR/USD: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="gbpcad">GBP/CAD: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="audgbp">AUD/GBP: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="gbpjpy">GBP/JPY: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="eurgbp">EUR/GBP: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="gbpchf">GBP/CHF: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="audcad">AUD/CAD: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="cadjpy">CAD/JPY: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="eurcad">EUR/CAD: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="chfcad">CHF/CAD: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="audjpy">AUD/JPY: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="euraud">EUR/AUD: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="audchf">AUD/CHF: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="eurjpy">EUR/JPY: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="chfjpy">CHF/JPY: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="usdsgd">USD/SGD: <span class="positiverate">000:0000</span></span> &nbsp;
			<span class="usdcad">USD/NGN: <span class="positiverate">000:0000</span></span></marquee>
			<button id="upperclosebtn" onclick="doupperclosing()" class="glyphicon glyphicon-arrow-right rightAlign close-upper"></button>
		</div>
		<div id="header" class="animatePix">
		  <h1 id="headertitle">Tutusfx</h1>
		  <p id="headercontent">An incentivized trade network built on blockchain technology</p>
		</div>
		
		<div id="topnav"><!-- sticky header -->
			<nav class="navbar navbar-inverse"><!-- right hidden menu -->
			  <div class="container-fluid">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span id="icon-bar1" class="icon-bar"></span>
					<span id="icon-bar2" class="icon-bar"></span>
					<span id="icon-bar3" class="icon-bar"></span>
					<span id="icon-bar4" class="icon-bar"></span>                        
				  </button><input type="search" value="" placeholder="Search item"></input><a class="navbar-brand" href="#"><img src="assets/images/logo_bar.png" alt="Tutusfx" /></a>
				</div>
				<div class="collapse navbar-collapse" id="navi">
				  <ul class="nav navbar-nav">
					<li class="active"><a href="">Home</a></li>
					<li><input type="button" id="back" value="Back" onclick="prevPage()" ></input></li>
					<li><input type="button" id="next" value="Next" onclick="nextPage()" ></input></li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="redirects/open-account/"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="redirects/login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="eu/faqs/index.html">Frequently Asked Questions</a></li>
						<li><a href="redirects/login.html">App Store</a></li>
						<li><a href="redirects/login.html">Third-Party Exchanges</a></li>
						<li><a href="redirects/login.html">Currency Markets</a></li>
						<li><a href="redirects/login.html">Chat</a></li>
						<li><a href="redirects/login.html">Sitemap</a></li>
						<li><a href="redirects/login.html">Vote for Witness</a></li>
						<li><a href="redirects/my-account/change-password/">Reset Password</a></li>
					  </ul>
					</li>
					<li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Legal <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="eu/about-us-eu/index.html">About Tutusfx</a></li>
						<li><a href="whitepaper.pdf">Tutusfx Whitepaper</a></li>
						<li><a href="redirects/login.html">Terms of Service</a></li>
						<li><a href="redirects/login.html">Privacy Policy</a></li>
					  </ul>
					</li>
					<li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Theme <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><input type="button" id="nature" value="Nature" onclick="<?php $_SESSION['theme']='0'; ?>"></input></li>
						<li><input type="button" id="night" value="Night" onclick="<?php $_SESSION['theme']='1'; ?>"></input></li>
						<li><input type="button" id="sunny" value="Sunny" onclick="<?php $_SESSION['theme']='2'; ?>"></input></li>
						<li><input type="button" id="cloudy" value="Cloudy" onclick="<?php $_SESSION['theme']='3'; ?>"></input></li>
						<li><input type="button" id="romance" value="Romance" onclick="<?php $_SESSION['theme']='4'; ?>"></input></li><li><input type="button" id="royal" value="Royal" onclick="<?php $_SESSION['theme']='5'; ?>"></input></li>
					  </ul>
					</li>
				  </ul>
				</div>
			  </div>
			</nav>
		</div>

		<div class="container row">
		  <div class="leftcolumn">
			<div class="card" id="segment">
			  <h3>Top Trades</h3>
			  <div class="fakeimg trendingtrades">
				<p class="trendingtradeusername">USD/AUD;</p>
				<p>Current Profit: +$309.82; Profit Margin: +31.01;</p>
				<p>Trade Volume: $10.00; Token Charges: $2.8;</p>
				<p><a href="@guest#609325cwq98">guest#609325cwq98;</a></p>
			  </div>
			  <div class="fakeimg trendingtrades">
				<p class="trendingtradeusername">USD/GBP;</p>
				<p>Current Profit: +$287.10; Profit Margin: +42.35;</p>
				<p>Trade Volume: $7.00; Token Charges: $9.35;</p>
				<p><a href="@guest#302q25%eo4j">guest#302q25%eo4j;</a></p>
			  </div>
			  <div class="fakeimg trendingtrades">
				<p class="trendingtradeusername">USD/CAD;</p>
				<p>Current Profit: +$684.37; Profit Margin: +13.70;</p>
				<p>Trade Volume: $50.00; Token Charges: $0.63;</p>
				<p><a href="@guest#48557310~u2">guest#48557310~u2;</a></p>
			  </div>
			</div>
			<div class="card" id="segment">
			  <h3>Vote a Witness</h3>
			  <h4> &nbsp; &nbsp; &nbsp; <em>List of top witnesses</em></h4>
			  <p>1. @darkspot</p>
			  <p>2. @kutygee</p>
			  <p>3. @thegenius</p>
			  <p>4. @yogolod</p>
			  <p>5. @ynl</p>
			  <p>6. @javakid</p>
			  <p>7. @icey</p>
			  <p>8. @barbie12</p>
			  <p>9. @ultra1</p>
			  <p>10. @futile</p>
			  <p class="rightAlign"><a href="">More...</a></p><br/><p>
			</div>
		  </div>
		  <div class="maincolumn">
			<div class="card" id="segment">
			  <h3>Trending Posts</h3>
			  <div class="fakeimg"><p>Image</p></div>
			  <div class="fakeimg"><p>Image</p></div>
			  <div class="fakeimg"><p>Image</p></div>
			</div>
			<div class="card tradeview" id="segment">
				<!-- TradingView Widget BEGIN -->
				<span id="tradingview-copyright"><a ref="nofollow noopener" target="_blank" href="http://www.tradingview.com/chart" style="color: rgb(255, 255, 255); font-family: &quot;Trebuchet MS&quot;, Tahoma, Arial, sans-serif; font-size: 13px;">Market Quotes by <span style="color: #3BB3E4">TradingView</span></a></span>
				<script type="text/javascript" src="http://s3.tradingview.com/external-embedding/embed-widget-market-overview.js">
				{ "showChart": true,
				  "locale": "en",
				  "width": "100%",
				  "height": "100%",
				  "plotLineColorGrowing": "rgba(60, 188, 152, 1)",
				  "plotLineColorFalling": "rgba(255, 74, 104, 1)",
				  "gridLineColor": "rgba(233, 233, 234, 1)",
				  "scaleFontColor": "rgba(000, 64, 000, 1)",
				  "belowLineFillColorGrowing": "rgba(60, 188, 152, 0.05)",
				  "belowLineFillColorFalling": "rgba(255, 74, 104, 0.05)",
				  "symbolActiveColor": "rgba(64, 64, 64, 1)",
				  "tabs": [
					{
					  "title": "Forex",
					  "symbols": [
						{ "s": "FX:EURUSD" },{ "s": "FX:GBPUSD" },{ "s": "FX:USDJPY" },{ "s": "FX:USDCHF" },{ "s": "FX:AUDUSD" },{ "s": "FX:AUDJPY" },{ "s": "FX:EURAUD" },{ "s": "FX:AUDJPY" },{ "s": "FX:AUDCHF" },{ "s": "FX:AUDCAD" },{ "s": "FX:USDCAD" },{ "s": "FX:GBPJPY" },{ "s": "FX:GBPCHF" },{ "s": "FX:GBPCAD" },{ "s": "FX:EURJPY" },{ "s": "FX:EURCHF" },{ "s": "FX:EURCAD" },{ "s": "FX:GBPAUD" }
					  ]
					}
				  ]
				} </script><!-- TradingView Widget END -->
			</div>
			<div class="card" id="segment">
			  <h3>About Tutusfx</h3>
			  <img class="fakeimg picture" src="assets/images/logo_bar.png" width="100%" height="100%" alt="Tutusfx logo" />
			  <p>The threshold to create and operate a Marketing Network is quite high! Therefore, a one-stop solution is provided by the Tutusfx Community for anyone to create a unique Network without any thresholds.</p>
			  <p class="rightAlign"><a href="eu/about-us-eu/index.html">More...</a></p><br/><p>
			</div>
		  </div>
		  <div class="rightcolumn">
			<div class="card" id="segment">
			  <h3>Blockchain Post 2</h3>
			  <h5><b> &nbsp; Title description</b>, Nov 22, 2018</h5>
			  <div class="fakeimg largepicture">Image</div>
			  <p>Some text from Post 2...</p>
			  <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			</div>
			<div class="card" id="segment">
			  <h3>Blockchain Post 1</h3>
			  <h5><b> &nbsp; Title description</b>, Nov 15, 2018</h5>
			  <div class="fakeimg largepicture">Image</div>
			  <p>Some text from Post 1...</p>
			  <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			</div>
			<div id="returner" class="card"> <a href="#">Return to top <span class="glyphicon glyphicon-arrow-up"></span></a> </div>
		  </div>
		</div>
		
		<div class="footer">
		  <div class="upper-footer"><a href="">Sponsorship</a><a href="">Fund Safety &amp; Security</a><a href="eu/sitemap-eu/index.html">Sitemap</a><a href="">Networks</a><a href="eu/contact-us-eu/">Contact Us</a></div>
		  <div class="card clearnav">
			<div class="footerCard"><h6>QUICK LINKS</h6>
				<a href="">DEVELOPERS</a><br/>
				<a href="">MARKETPLACE</a><br/>
				<a href="">BUY TT</a><br/>
				<a href="">EVENTS</a><br/>
				<a href="">NETWORKS</a><br/>
				<a href="">NEWS</a><br/>
				<a href="">PODCAST</a><br/>
				<a href="">APPSTORE</a><br/>
				<a href="">GETTING STARTED</a><br/>
				<a href="">PROMOTIONAL MATERIAL</a><br/>
				<a href="eu/contact-us-eu/">CONTACT US</a><br/>
				<a href="">WALLETS</a><br/>
				<a href="">GUIDE</a><br/>
				<a href="eu/faqs/index.html">FAQ</a><br/>
				<a href="redirects/trade/tradingview/index.html">CHARTS</a><br/>
				<a href="">DEVELOPER DISCORD</a><br/>
				<a href="">ADVERTISE</a><br/>
				<a href="">LEGAL</a><br/>
				<a href="">PRIVACY</a><br/>
				<a href="eu/about-us-eu/index.html">ABOUT US</a><br/>
				<a href="">PARTNERS</a><br/>
				<a href="">WIDGETS</a><br/>
			</div>
			<div class="footerCard"><h6>CHOOSE LANGUAGE</h6>
				<a href="">TUTUSFX.COM INTERNATIONAL</a><br/>
				<a href="de/index.html">TUTUSFX.COM DEUTSCHE</a><br/>
				<a href="it/index.html">TUTUSFX.COM ITALIANO</a><br/>
				<a href="fr/index.html">TUTUSFX.COM FRANCAISE</a><br/>
				<a href="es/index.html">TUTUSFX.COM ESPAÑOL</a><br/>
				<a href="zh-tw/index.html">TUTUSFX.COM 中文</a><br/>
				<a href="hi-in/index.html">TUTUSFX.COM HINDI</a><br/>
				<a href="ar-ar/index.html">العربية TUTUSFX.COM</a><br/>
				<a href="us/index.html">TUTUSFX.COM AMERICAN</a><br/>
				<a href="ru-ru/index.html">TUTUSFX.COM RUSSIAN</a><br/>
				<a href="ms/index.html">TUTUSFX.COM MALAY</a><br/>
				<a href="pt-pt/index.html">TUTUSFX.COM PORTUGUESE (EU)</a><br/>
				<!-- OTHER LANGUAGE VERSIONS -->
			</div>
			<div class="footerCard"><h6>RELATED SITES</h6>
				<a href="https://www.bitcoin.com">BITCOIN</a><br/>
				<a href="https://www.steemit.com">STEEMIT</a><br/>
				<a href="https://www.eos.com">EOS</a><br/>
				<a href="https://www.litecoin.com">LITECOIN</a><br/>
				<a href="https://www.dodgecoin.com">DODGECOIN</a><br/>
				<a href="https://www.alpari.com">ALPARI</a><br/>
				<a href="https://www.exnesslab.com">EXNESS OFFICIAL</a><br/>
				<a href="https://www.ig.com/en">IG</a><br/>
				<a href="https://www.etoro.com">ETORO</a><br/>
				<a href="https://en.swissquote.com">SWISSQUOTE</a><br/>
				<a href="https://www.cmcmarkets.com/en">CMC MARKETS</a><br/>
				<a href="https://www.fxpro.com">FXPRO</a><br/>
				<a href="https://www.forevalue.com">FOREX.COM</a><br/>
				<a href="https://www.dukascopy.com/land/trading/eu/forex">DUKASCOPY</a><br/>
			</div>
			<div class="footerCard warning"><h6><strong>GENERAL RISK WARNING</strong></h6>
				<span>TRADING IN CRYPTOCURRENCIES, FOREX & CFDS CARRY A HIGH LEVEL OF RISK AND MAY NOT BE APPROPRIATE FOR ALL INVESTORS.  IT IS POSSIBLE TO LOSE OF ALL OF YOUR INVESTED CAPITAL SO, YOU SHOULD NOT INVEST MONEY THAT YOU CANNOT AFFORD TO LOSE. FOR MORE INFORMATION ABOUT THE RISKS INVOLVED, PLEASE<a href="eu/terms-and-conditions-eu/risk-disclosure-eu/index.html"> CLICK HERE</a> .</span>
			</div>
			<div id="footerDiv"><h6 id="footerDivHeader">GENERAL RISK WARNING</h6><button id="close" onclick="doclose()" class="glyphicon glyphicon-arrow-up btn badge"></button><br/><br/>
				<span id="footerDivTexts">TRADING IN CRYPTOCURRENCIES, FOREX & CFDS CARRY A HIGH LEVEL OF RISK AND MAY NOT BE APPROPRIATE FOR ALL INVESTORS.  IT IS POSSIBLE TO LOSE OF ALL OF YOUR INVESTED CAPITAL SO, YOU SHOULD NOT INVEST MONEY THAT YOU CANNOT AFFORD TO LOSE. FOR MORE INFORMATION ABOUT THE RISKS INVOLVED, PLEASE<a href="eu/terms-and-conditions-eu/risk-disclosure-eu/index.html"> CLICK HERE</a> .</span>
            </div>
		  </div>
		</div>

		<script type="text/javascript">
			var header = document.getElementById("topnav"); var sticky = header.offsetTop;
			var rates = document.getElementById("ratebar"); var upperbar = rates.offsetTop;
			var title = document.getElementById("headertitle"); var headercontent = document.getElementById("headercontent");
			var footerdiv = document.getElementById("footerDiv"); var footerheader = document.getElementById("footerDivHeader"); 
			var footertexts = document.getElementById("footerDivTexts"); var footerclosebtn = document.getElementById("close"); var segment = document.getElementById("segment");
			var ads = document.getElementById("ads"); var progressBar = document.getElementById("progressBar"); var upperclosebtn = document.getElementById("upperclosebtn"); 
			var footerclosing = true; var upperclosing = false; var toggledrawer = $(".navbar-toggle"); var navheaderlinks = $("nav a"); var navheaderinputs = $("li input");
			var toggleicons = [document.getElementById("icon-bar1"),document.getElementById("icon-bar2"),document.getElementById("icon-bar3"),document.getElementById("icon-bar4")];
			var body = $("body"); var marquee = $("marquee"); var select = $("select"); var h3 = $("h3"); var ratebar = $("#ratebar");
			var positiverate = $(".positiverate"); var negativerate = $(".negativerate"); var fakeimg = $(".fakeimg"); var navbar = $(".container-fluid"); var drawer = $(".collapse");
			var trendingtrades = $(".trendingtrades"); var trendingtradeusername = $(".trendingtradeusername"); var card = $(".card"); var cardlist = $(".cardlist");
			var topnava = $("#topnav a"); var topnavin = $("#topnav input"); var back = $("#back"); var next = $("#next"); var warningspan = $(".warning span"); var footertopics = $(".upper-footer a");
			var footer = $(".footer"); var footerCard = $(".footerCard"); var footerDiv = $("#footerDiv"); var footerDivTexts = $("#footerDivTexts"); 
			var topheader = $("#header"); var myProgress = $("#myProgress"); var returner = $("#returner"); var THEME = 0; var HIDDEN = false; 
			
			function setTheme(THEME){
				if (THEME==0){
					body.css("background","#baf1ba").css("color","#004300").css("fontFamily","Arial, Helvetica, sans-serif"); 
					topheader.css("background","#ffffff").css("color","#004300"); 
					fakeimg.css("background-color","#aaaaaa"); h3.css("color","#fefefe");
					navbar.css("background-color","#004300"); navheaderlinks.css("background-color","#004300").css("color","#ffffff"); navheaderinputs.css("background-color","#004300").css("color","#ffffff");
					myProgress.css("background-color","#ffffff"); card.css("background-color","#004300").css("color","#ffffff");
					returner.css("background-color","#fefefe").css("color","#004300"); footertopics.css("background-color","#004300").css("color","#000000");
					topnava.css("background-color","#004300"); topnavin.css("background-color","#004300");
					back.css("background-color","#004300"); next.css("background-color","#004300");
					ratebar.css("background-color","#004300");
					footerDiv.css("background-color","#004300"); footerDivTexts.css("color","#000000");
					warningspan.css("background-color","#004300").css("color","#a1a1a1");
					footer.css("background-color","#004300");
					footerCard.css("background-color","#004300"); header.style.backgroundColor = "#004300"; progressBar.style.background="#004300";
				} else if (THEME==1) {
					body.css("background","#444444").css("color","#000000").css("fontFamily","Arial, Helvetica, sans-serif"); 
					topheader.css("background","#ffffff").css("color","#000000"); 
					fakeimg.css("background-color","#aaaaaa"); h3.css("color","#fefefe");
					navbar.css("background-color","#000000"); navheaderlinks.css("background-color","#000000").css("color","#ffffff"); navheaderinputs.css("background-color","#000000").css("color","#ffffff");
					myProgress.css("background-color","#ffffff"); card.css("background-color","#000000").css("color","#ffffff");
					returner.css("background-color","#fefefe").css("color","#000000"); footertopics.css("background-color","#000000").css("color","#ffffff");
					topnava.css("background-color","#000000").css("color","#ffffff"); topnavin.css("background-color","#000000").css("color","#ffffff");
					back.css("background-color","#000000").css("color","#ffffff"); next.css("background-color","#000000").css("color","#ffffff");
					ratebar.css("background-color","#000000");
					footerDiv.css("background-color","#000000"); footerDivTexts.css("color","#ffffff");
					warningspan.css("background-color","#000000").css("color","#ffffff");
					footer.css("background-color","#000000");
					footerCard.css("background-color","#000000"); header.style.backgroundColor = "#000000"; progressBar.style.background="#000000"; 
				} else if (THEME==2) {
					body.css("background","#fefefe").css("color","#ffffff").css("fontFamily","Arial, Helvetica, sans-serif"); 
					topheader.css("background","#000000").css("color","#ffffff");
					fakeimg.css("background-color","#aaaaaa"); h3.css("color","#000000");
					navbar.css("background-color","#aaaaaa"); navheaderlinks.css("background-color","#aaaaaa").css("color","#000000"); navheaderinputs.css("background-color","#aaaaaa").css("color","#000000");
					myProgress.css("background-color","#ffffff"); card.css("background-color","#ffffff").css("color","#000000");
					returner.css("background-color","#fefefe").css("color","#ffffff"); footertopics.css("background-color","#ffffff").css("color","#000000");
					topnava.css("background-color","#ffffff").css("color","#000000"); topnavin.css("background-color","#ffffff").css("color","#000000");
					back.css("background-color","#ffffff").css("color","#000000"); next.css("background-color","#ffffff").css("color","#000000");
					ratebar.css("background-color","#ffffff").css("color","#000000");
					footerDiv.css("background-color","#aaaaaa"); footerDivTexts.css("color","#000000");
					warningspan.css("background-color","#fefefe").css("color","#000000");
					footer.css("background-color","#ffffff").css("color","#000000");
					footerCard.css("background-color","#ffffff").css("color","#000000"); header.style.backgroundColor = "#ffffff"; progressBar.style.background="#ffffff"; 
				} else if (THEME==3) {
					body.css("background","#babaf1").css("color","#1234ab").css("fontFamily","Arial, Helvetica, sans-serif"); cardlist.css("color","#000000"); 
					topheader.css("background","#ffffff").css("color","#1234ab");
					fakeimg.css("background-color","#aaaaaa"); h3.css("color","#000000");
					navbar.css("background-color","#1234ab"); navheaderlinks.css("background-color","#1234ab").css("color","#ffffff"); navheaderinputs.css("background-color","#1234ab").css("color","#ffffff");
					myProgress.css("background-color","#ffffff"); card.css("background-color","#1234ab").css("color","#ffffff");
					returner.css("background-color","#fefefe").css("color","#1234ab"); footertopics.css("background-color","#1234ab").css("color","#000000");
					topnava.css("background-color","#1234ab"); topnavin.css("background-color","#1234ab");
					back.css("background-color","#1234ab"); next.css("background-color","#1234ab");
					ratebar.css("background-color","#1234ab");
					footerDiv.css("background-color","#1234ab"); footerDivTexts.css("color","#000000");
					warningspan.css("background-color","#1234ab").css("color","#000000");
					footer.css("background-color","#1234ab");
					footerCard.css("background-color","#1234ab"); header.style.backgroundColor = "#1234ab"; progressBar.style.background="#1234ab"; 
				} else if (THEME==4) { body.css("background","#f1baba").css("color","#ff1234").css("fontFamily","Arial, Helvetica, sans-serif"); 
					topheader.css("background","#ffffff").css("color","#ff1234");
					fakeimg.css("background-color","#aaaaaa"); h3.css("color","#004300");
					navbar.css("background-color","#ff1234"); navheaderlinks.css("background-color","#ff1234").css("color","#ffffff"); navheaderinputs.css("background-color","#ff1234").css("color","#ffffff");
					myProgress.css("background-color","#ffffff"); card.css("background-color","#ff1234").css("color","#000000");
					returner.css("background-color","#fefefe").css("color","#ff1234"); footertopics.css("background-color","#ff1234").css("color","#000000");
					topnava.css("background-color","#ff1234"); topnavin.css("background-color","#ff1234");
					back.css("background-color","#ff1234"); next.css("background-color","#ff1234");
					ratebar.css("background-color","#ff1234");
					footerDiv.css("background-color","#ff1234"); footerDivTexts.css("color","#000000");
					warningspan.css("background-color","#ff1234").css("color","#000000");
					footer.css("background-color","#ff1234");
					footerCard.css("background-color","#ff1234"); header.style.backgroundColor = "#ff1234"; progressBar.style.background="#ff1234"; 
				} else if (THEME==5) { body.css("background","#f1baf1").css("color","#ff12ff").css("fontFamily","Arial, Helvetica, sans-serif"); 
					topheader.css("background","#ffffff").css("color","#ff12ff");
					fakeimg.css("background-color","#aaaaaa"); h3.css("color","#004300");
					navbar.css("background-color","#ff12ff"); navheaderlinks.css("background-color","#ff12ff").css("color","#ffffff"); navheaderinputs.css("background-color","#ff12ff").css("color","#ffffff");
					myProgress.css("background-color","#ffffff"); card.css("background-color","#ff12ff").css("color","#000000");
					returner.css("background-color","#fefefe").css("color","#ff12ff"); footertopics.css("background-color","#ff12ff").css("color","#000000");
					topnava.css("background-color","#ff12ff"); topnavin.css("background-color","#ff12ff");
					back.css("background-color","#ff12ff"); next.css("background-color","#ff12ff");
					ratebar.css("background-color","#ff12ff");
					footerDiv.css("background-color","#ff12ff"); footerDivTexts.css("color","#000000");
					warningspan.css("background-color","#ff12ff").css("color","#000000");
					footer.css("background-color","#ff12ff");
					footerCard.css("background-color","#ff12ff"); header.style.backgroundColor = "#ff12ff"; progressBar.style.background="#ff12ff"; 
				} marquee.css("color","#ff0e"); negativerate.css("color","#ff0000");
				positiverate.css("font-family","Courier New, Times New Roman, Arial").css("color","#ffffff");
				select.css("background-color","#eeeeee");
				trendingtradeusername.css("background","none").css("color","#B2D4B2");
				trendingtrades.css("background-color","none").css("color","#ffffff");
			}
			
			$("#nature:first").on("mouseover", function() { THEME = 0; setTheme(THEME); }).on("mousedown", function() { drawer.hide(); HIDDEN = true; setTheme(THEME); });
			$("#night:first").on("mouseover", function() { THEME = 1; setTheme(THEME); }).on("mousedown", function() { drawer.hide(); HIDDEN = true; setTheme(THEME); });
			$("#sunny:first").on("mouseover", function() { THEME = 2; setTheme(THEME); }).on("mousedown", function() { drawer.hide(); HIDDEN = true; setTheme(THEME); });
			$("#cloudy:first").on("mouseover", function() { THEME = 3; setTheme(THEME); }).on("mousedown", function() { drawer.hide(); HIDDEN = true; setTheme(THEME); });
			$("#romance:first").on("mouseover", function() { THEME = 4; setTheme(THEME); }).on("mousedown", function() { drawer.hide(); HIDDEN = true; setTheme(THEME); });
			$("#royal:first").on("mouseover", function() { THEME = 5; setTheme(THEME); }).on("mousedown", function() { drawer.hide(); HIDDEN = true; setTheme(THEME); });
			
			function doclose() { 
				if (footerclosing==true) {
					if (THEME==0) { footerclosebtn.style.background="#004300"; footerclosebtn.style.color="white"; } else if (THEME==1) { footerclosebtn.style.background="#000000"; footerclosebtn.style.color="white"; } else if (THEME==2) { footerclosebtn.style.background="#ffffff"; footerclosebtn.style.color="#004300"; } else if (THEME==3) { footerclosebtn.style.background="#1234ab"; footerclosebtn.style.color="#000000"; } else if (THEME==4) { footerclosebtn.style.background="#ff1234"; footerclosebtn.style.color="#000000"; } else if (THEME==5) { footerclosebtn.style.background="#ff12ff"; footerclosebtn.style.color="#ffffff"; } footerclosebtn.classList.remove("glyphicon-arrow-up"); footerclosebtn.classList.add("glyphicon-arrow-down");
					footerdiv.style.height = "0px"; footerdiv.style.float = "bottom"; footerheader.style.fontSize = "0%"; footertexts.style.fontSize = "0%"; footerclosebtn.style.visibility = "none"; footerclosing = false;
				} else {
					 if (THEME==0) { footerclosebtn.style.background="white"; upperclosebtn.style.color="#004300"; } else if (THEME==1) { footerclosebtn.style.background="white"; footerclosebtn.style.color="#000000"; } else if (THEME==2) { footerclosebtn.style.background="#004300"; footerclosebtn.style.color="#ffffff"; } else if (THEME==3) { footerclosebtn.style.background="#000000"; footerclosebtn.style.color="#1234ab"; } else if (THEME==4) { footerclosebtn.style.background="#000000"; footerclosebtn.style.color="#ff1234"; } else if (THEME==5) { footerclosebtn.style.background="#ffffff"; footerclosebtn.style.color="#ff12ff"; }  footerclosebtn.classList.remove("glyphicon-arrow-down"); footerclosebtn.classList.add("glyphicon-arrow-up");
					footerdiv.style.height = "30%"; footerdiv.style.top = "70%"; footerheader.style.fontSize = "100%"; footertexts.style.fontSize = "100%"; footerclosing = true;
				}
			}
			
			function doupperclosing() { 
				if (upperclosing==true) { upperclosebtn.classList.remove("close-upper"); upperclosebtn.classList.add("open-upper"); upperclosing = false; } 
				else { upperclosebtn.classList.remove("open-upper"); upperclosebtn.classList.add("close-upper"); upperclosing = true; } myFunction();
			} myFunction();
			
			$("#upperclosebtn:first").on("mouseover", function() { if (THEME==0) { upperclosebtn.style.background="#004300"; upperclosebtn.style.color="white"; } else if (THEME==1) { upperclosebtn.style.background="#000000"; upperclosebtn.style.color="white"; } else if (THEME==2) { upperclosebtn.style.background="#ffffff"; upperclosebtn.style.color="#004300"; } else if (THEME==3) { upperclosebtn.style.background="#1234ab"; upperclosebtn.style.color="#000000"; } else if (THEME==4) { upperclosebtn.style.background="#ff1234"; upperclosebtn.style.color="#000000"; } else if (THEME==5) { upperclosebtn.style.background="#ff12ff"; upperclosebtn.style.color="#ffffff"; } })
			.on("mouseout", function() { if (THEME==0) { upperclosebtn.style.background="white"; upperclosebtn.style.color="#004300"; } else if (THEME==1) { upperclosebtn.style.background="white"; upperclosebtn.style.color="#000000"; } else if (THEME==2) { upperclosebtn.style.background="#004300"; upperclosebtn.style.color="#ffffff"; } else if (THEME==3) { upperclosebtn.style.background="#000000"; upperclosebtn.style.color="#1234ab"; } else if (THEME==4) { upperclosebtn.style.background="#000000"; upperclosebtn.style.color="#ff1234"; } else if (THEME==5) { upperclosebtn.style.background="#ffffff"; upperclosebtn.style.color="#ff12ff"; } });
			
			$("#close:first").on("mouseover", function() { if (THEME==0) { footerclosebtn.style.background="#004300"; footerclosebtn.style.color="white"; } else if (THEME==1) { footerclosebtn.style.background="#000000"; footerclosebtn.style.color="white"; } else if (THEME==2) { footerclosebtn.style.background="#ffffff"; footerclosebtn.style.color="#004300"; } else if (THEME==3) { footerclosebtn.style.background="#1234ab"; footerclosebtn.style.color="#000000"; } else if (THEME==4) { footerclosebtn.style.background="#ff1234"; footerclosebtn.style.color="#000000"; } else if (THEME==5) { footerclosebtn.style.background="#ff12ff"; footerclosebtn.style.color="#ffffff"; } })
			.on("mouseout", function() { if (THEME==0) { footerclosebtn.style.background="white"; footerclosebtn.style.color="#004300"; } else if (THEME==1) { footerclosebtn.style.background="white"; footerclosebtn.style.color="#000000"; } else if (THEME==2) { footerclosebtn.style.background="#004300"; footerclosebtn.style.color="#ffffff"; } else if (THEME==3) { footerclosebtn.style.background="#000000"; footerclosebtn.style.color="#1234ab"; } else if (THEME==4) { footerclosebtn.style.background="#000000"; footerclosebtn.style.color="#ff1234"; } else if (THEME==5) { footerclosebtn.style.background="#ffffff"; footerclosebtn.style.color="#ff12ff"; } })
			.on("mousedown", function() { if (footerclosing==true) { footerdiv.style.background="none"; } else { if (THEME==0) { footerdiv.style.background="#004300"; } else if (THEME==1) { footerdiv.style.background="#000000"; } else if (THEME==2) { footerdiv.style.background="#aaaaaa"; } else if (THEME==3) { footerdiv.style.background="#1234ab"; } else if (THEME==4) { footerdiv.style.background="#ff1234"; } else if (THEME==5) { footerdiv.style.background="#ff12ff"; } } });
			
			$(".navbar-toggle:first").on("mouseover", function() { toggledrawer.css("background","white").css("transition","0.3s ease-out"); for (i=0; i<4; i++) { if (THEME==0) { toggleicons[i].style.background="#004300"; } else if (THEME==1) { toggleicons[i].style.background="#000000"; } else if (THEME==2) { toggleicons[i].style.background="#ffffff"; } else if (THEME==3) { toggleicons[i].style.background="#1234ab"; } else if (THEME==4) { toggleicons[i].style.background="#ff1234"; } else if (THEME==5) { toggleicons[i].style.background="#ff12ff"; } } })
			.on("mouseout", function() { if (THEME==0) { toggledrawer.css("background","#004300").css("transition","0.3s ease-in"); } else if (THEME==1) { toggledrawer.css("background","#000000").css("transition","0.3s ease-in"); } else if (THEME==2) { toggledrawer.css("background","#aaaaaa").css("transition","0.3s ease-in"); } else if (THEME==3) { toggledrawer.css("background","#1234ab").css("transition","0.3s ease-in"); } else if (THEME==4) { toggledrawer.css("background","#ff1234").css("transition","0.3s ease-in"); } else if (THEME==5) { toggledrawer.css("background","#ff12ff").css("transition","0.3s ease-in"); } for (i=0; i<4; i++) { toggleicons[i].style.background="white"; } })
			.on("mousedown", function() { if (HIDDEN==true) drawer.show(); drawer.css("data-toggle","collapse"); if (THEME==0) { drawer.css("background","#004300"); } else if (THEME==1) { drawer.css("background","#000000"); } else if (THEME==2) { drawer.css("background","#aaaaaa"); } else if (THEME==3) { drawer.css("background","#1234ab"); } else if (THEME==4) { drawer.css("background","#ff1234"); } else if (THEME==5) { drawer.css("background","#ff12ff"); } });
			
			window.onscroll = function() { myFunction() };

			function myFunction() { 
				if (window.pageYOffset > (sticky-(sticky/10)-50)) { 
					if (upperclosing==true) { if (window.pageYOffset > (sticky-(sticky/10))) { header.classList.remove("sticky"); header.classList.add("sticky2"); } } else { header.classList.remove("sticky2"); header.classList.add("sticky"); } 
				} else {
					title.style.paddingTop = (window.pageYOffset+10)+"px"; title.style.fontSize = (90-(3*window.pageYOffset/25))+"px"; headercontent.style.fontSize = (40-(window.pageYOffset/25))+"px";
					if (window.pageYOffset > 250) { (window.pageYOffset/2)+"px"; headercontent.style.fontSize = "0px"; } 
					if (upperclosing==true) { header.classList.remove("sticky2"); } else { header.classList.remove("sticky"); } 
				}
				if (upperclosing==true) { rates.classList.remove("upperbar"); rates.style.height = "0px"; rates.style.float = "top";  
					upperclosebtn.style.background = "none"; upperclosebtn.style.color = "none"; upperclosebtn.classList.remove("glyphicon-arrow-right"); upperclosebtn.classList.add("glyphicon-arrow-left");
					ads.style.fontSize = "0%"; upperclosebtn.style.visibility = "none";
				} else { rates.classList.add("upperbar"); rates.style.height = "50px"; rates.style.top = "0px"; rates.style.zIndex = "1000"; 
					if (THEME==0) { rates.style.backgroundColor = "#004300"; } else if (THEME==1){ rates.style.backgroundColor = "#000000"; } else if (THEME==2){ rates.style.backgroundColor = "#aaaaaa"; } else if (THEME==3){ rates.style.backgroundColor = "#1234ab"; } else if (THEME==4){ rates.style.backgroundColor = "#ff1234"; } else if (THEME==5){ rates.style.backgroundColor = "#ff12ff"; }
					if (THEME==0) { upperclosebtn.style.background = "white"; upperclosebtn.style.color = "#004300"; } else if (THEME==1){ upperclosebtn.style.background = "white"; upperclosebtn.style.color = "#000000"; } else if (THEME==2){ upperclosebtn.style.background = "black"; upperclosebtn.style.color = "#ffffff"; } else if (THEME==3){ upperclosebtn.style.background = "white"; upperclosebtn.style.color = "#1234ab"; } else if (THEME==4){ upperclosebtn.style.background = "black"; upperclosebtn.style.color = "#ff1234"; } else if (THEME==5){ upperclosebtn.style.background = "white"; upperclosebtn.style.color = "#ff12ff"; }
					if (THEME==0) { segment.style.backgroundColor = "#004300"; } else if (THEME==1){ segment.style.backgroundColor = "#000000"; } else if (THEME==2){ segment.style.backgroundColor = "#aaaaaa"; } else if (THEME==3){ segment.style.backgroundColor = "#1234ab"; } else if (THEME==4){ segment.style.backgroundColor = "#ff1234"; } else if (THEME==5){ segment.style.backgroundColor = "#ff12ff"; }
					upperclosebtn.classList.remove("glyphicon-arrow-left"); upperclosebtn.classList.add("glyphicon-arrow-right");
					ads.style.fontSize = "100%"; 
				}
			}
			
			function prevPage(){ window.history.go(-1); }
			
			function nextPage(){ window.history.go(+1); }
		</script>
	</body>
</html>
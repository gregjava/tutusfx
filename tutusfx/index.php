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
			window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(13),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,-1!==o.indexOf("dev")&&(s.dev=!0),-1!==o.indexOf("nr_dev")&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,e,n)])}catch(s){try{i("ierr",[s,(new Date).getTime(),!0])}catch(c){}}return"function"==typeof f?f.apply(this,a(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t){i("err",[t,(new Date).getTime()])}var i=t("handle"),a=t(14),s=t("ee"),c=t("loader"),f=window.onerror,u=!1,d=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(l){"stack"in l&&(t(7),t(6),"addEventListener"in window&&t(4),c.xhrWrappable&&t(8),u=!0)}s.on("fn-start",function(t,e,n){u&&(d+=1)}),s.on("fn-err",function(t,e,n){u&&(this.thrown=!0,o(n))}),s.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),s.on("internal-error",function(t){i("ierr",[t,(new Date).getTime(),!0])})},{}],3:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(7),s=t(6);t("loader").features.stn=!0,t(5);var c=NREUM.o.EV;o.on("fn-start",function(t,e){var n=t[0];n instanceof c&&(this.bstStart=Date.now())}),o.on("fn-end",function(t,e){var n=t[0];n instanceof c&&i("bst",[n,e,this.bstStart,Date.now()])}),a.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),a.on("fn-end",function(t,e){i("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),s.on("fn-start",function(){this.bstStart=Date.now()}),s.on("fn-end",function(t,e){i("bstTimer",[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),o.on("pushState-start",function(t){this.time=Date.now(),this.startPath=location.pathname+location.hash}),o.on("pushState-end",function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.clearResourceTimings?window.performance.addEventListener("resourcetimingbufferfull",function(t){i("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1):window.performance.addEventListener("webkitresourcetimingbufferfull",function(t){i("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1)),document.addEventListener("scroll",r,!1),document.addEventListener("keypress",r,!1),document.addEventListener("click",r,!1)}},{}],4:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty("addEventListener");)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){s.inPlace(t,["addEventListener","removeEventListener"],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),s=t(15)(a),c=t("gos");e.exports=a,o(window),"getPrototypeOf"in Object?(r(document),r(XMLHttpRequest.prototype)):XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&o(XMLHttpRequest.prototype),a.on("addEventListener-start",function(t,e){if(t[1]){var n=t[1];if("function"==typeof n){var r=c(n,"nr@wrapped",function(){return s(n,"fn-",null,n.name||"anonymous")});this.wrapped=t[1]=r}else"function"==typeof n.handleEvent&&s.inPlace(n,["handleEvent"],"fn-")}}),a.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{}],5:[function(t,e,n){var r=t("ee").get("history"),o=t(15)(r);e.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],6:[function(t,e,n){var r=t("ee").get("raf"),o=t(15)(r);e.exports=r,o.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],7:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration="number"==typeof t[1]?t[1]:0,t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(15)(i);e.exports=i,a.inPlace(window,["setTimeout","setImmediate"],"setTimer-"),a.inPlace(window,["setInterval"],"setInterval-"),a.inPlace(window,["clearTimeout","clearImmediate"],"clearTimeout-"),i.on("setInterval-start",r),i.on("setTimer-start",o)},{}],8:[function(t,e,n){function r(t,e){e=e||this;var n=a.context(e);e.readyState>3&&!n.resolved&&(n.resolved=!0,a.emit("xhr-resolved",[],e));try{f.inPlace(e,p,"fn-",o)}catch(r){}}function o(t,e){return e}function i(t,e){for(var n in t)e[n]=t[n];return e}var a=t("ee").get("xhr"),s=t(4),c=t(15),f=c(a),u=c(s),d=NREUM.o,l=d.XHR,p=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout","onreadystatechange"];e.exports=a,window.XMLHttpRequest=function(t){var e=new l(t);try{a.emit("new-xhr",[e],e),e.hasOwnProperty("addEventListener")&&u.inPlace(e,["addEventListener","removeEventListener"],"-",o),e.addEventListener("readystatechange",r,!1)}catch(n){try{a.emit("internal-error",[n])}catch(i){}}return e},i(l,XMLHttpRequest),XMLHttpRequest.prototype=l.prototype,f.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),a.on("send-xhr-start",r),a.on("open-xhr-start",r)},{}],9:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;l>r;r++)t.removeEventListener(d[r],this.listener,!1);if(!e.aborted){if(n.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var i=o(t,this.lastSize);if(i&&(n.rxSize=i),this.sameOrigin){var a=t.getResponseHeader("X-NewRelic-App-Data");a&&(e.cat=a.split(", ").pop())}}else e.status=0;n.cbTime=this.cbTime,u.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime])}}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return i(r)}function i(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}function a(t,e){var n=f(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}var s=t("loader");if(s.xhrWrappable){var c=t("handle"),f=t(10),u=t("ee"),d=["load","error","abort","timeout"],l=d.length,p=t("id"),h=t(12),m=window.XMLHttpRequest;s.features.xhr=!0,t(4),t(8),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,h&&(h>34||10>h)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},a(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var a=i(r);a&&(n.txSize=a)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var s=0;l>s;s++)e.addEventListener(d[s],this.listener,!1)}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof m&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{}],10:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("../")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],11:[function(t,e,n){function r(t,e){return function(){o(t,[(new Date).getTime()].concat(a(arguments)),null,e)}}var o=t("handle"),i=t(13),a=t(14);"undefined"==typeof window.newrelic&&(newrelic=NREUM);var s=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit"],c=["addPageAction"],f="api-";i(s,function(t,e){newrelic[e]=r(f+e,"api")}),i(c,function(t,e){newrelic[e]=r(f+e)}),e.exports=newrelic,newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),o("err",[t,(new Date).getTime()])}},{}],12:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],13:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],14:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],15:[function(t,e,n){function r(t){return!(t&&"function"==typeof t&&t.apply&&!t[a])}var o=t("ee"),i=t(14),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;e.exports=function(t){function e(t,e,n,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof n?n(r,a):n||{}}catch(u){d([u,"",[r,a,o],s])}f(e+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(l){throw f(e+"err",[r,a,l],s),l}finally{f(e+"end",[r,a,c],s)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,u(t,nrWrapper),nrWrapper)}function n(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function f(e,n,r){if(!c){c=!0;try{t.emit(e,n,r)}catch(o){d([o,e,n,r])}c=!1}}function u(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){d([r])}for(var o in t)s.call(t,o)&&(e[o]=t[o]);return e}function d(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),e.inPlace=n,e.flag=a,e}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?s(t,a,i):i()}function n(n,r,o){t&&t(n,r,o);for(var i=e(o),a=l(n),s=a.length,c=0;s>c;c++)a[c].apply(i,r);var u=f[v[n]];return u&&u.push([w,n,r,i]),i}function d(t,e){m[t]=l(t).concat(e)}function l(t){return m[t]||[]}function p(t){return u[t]=u[t]||o(n)}function h(t,e){c(t,function(t,n){e=e||"feature",v[n]=e,e in f||(f[e]=[])})}var m={},v={},w={on:d,emit:n,get:p,listeners:l,context:e,buffer:h};return w}function i(){return new r}var a="nr@context",s=t("gos"),c=t(13),f={},u={},d=e.exports=o();d.backlog=f},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!m++){var t=h.info=NREUM.info,e=u.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){c(l,function(e,n){t[e]||(t[e]=n)});var n="https"===d.split(":")[0]||t.sslForHttp;h.proto=n?"https://":"http://",s("mark",["onload",a()],null,"api");var r=u.createElement("script");r.src=h.proto+t.agent,e.parentNode.insertBefore(r,e)}}}function o(){"complete"===u.readyState&&i()}function i(){s("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var s=t("handle"),c=t(13),f=window,u=f.document;NREUM.o={ST:setTimeout,XHR:f.XMLHttpRequest,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},t(11);var d=(""+location).split("?")[0],l={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-892.min.js"},p=window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent),h=e.exports={offset:a(),origin:d,features:{},xhrWrappable:p};u.addEventListener?(u.addEventListener("DOMContentLoaded",i,!1),f.addEventListener("load",r,!1)):(u.attachEvent("onreadystatechange",o),f.attachEvent("onload",r)),s("mark",["firstbyte",a()],null,"api");var m=0},{}]},{},["loader",2,9,3]);
			;NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"964aaddfde",applicationID:"13658517",sa:1,agent:"js-agent.newrelic.com/nr-892.min.js"}
		</script>
		<script type="text/javascript">
			WebFontConfig = {
				google: { families: [ 'Roboto:400,300,100,700italic,300italic,500,700:greek,latin,cyrillic' ] }
			};
			(function(d) {
				var wf = d.createElement('script'), s = d.scripts[0];
				wf.src = 'assets/ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
				s.parentNode.insertBefore(wf, s);
			})(document);
		</script>
		<script type='text/javascript'> /* <![CDATA[ */ var ajaxurl = "wp-admin\/admin-ajax.php"; /* ]]> */ </script>
		<script type='text/javascript'> /* <![CDATA[ */ var save_like = {"ajaxurl":"wp-admin\/admin-ajax.php"}; /* ]]> */ </script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','assets/www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-112516938-1', 'auto');
			ga('send', 'pageview');
		</script>
		<link rel="canonical" href="index.html" />
		<meta property="og:locale" content="en_GB" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="tutusfx.com | Incentivized trade platform with Smart Contracts" />
		<meta property="og:url" content="https://www.tutusfx.com/eu/index.html" />
		<meta property="og:site_name" content="tutusfx.com" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:title" content="tutusfx.com" />
		<meta name="twitter:domain" content="tutusfx.com" />
		<meta name="generator" content="WPML ver:3.6.1 stt:5,39,1,4,3,27,40,42,44,47,2,52;" />
		<meta name='description' content='Tutusfx is an incentivized Forex/CFDs/Cryptocurrency trading platform built on blockchain technology. Trade Forex/CFDs/Cryptocurrency on our advanced, web-based trading platform designed with you, the user, in mind.' />
		
		<link rel="icon" href="assets/images/42430.png" type="image/x-icon" />
		<link rel="shortcut icon" href="assets/images/42430.png" type="image/x-icon" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
			* { box-sizing: border-box; top: 0; left: 0; }
			
			.rightAlign { float: right; }

			body { font-family: Arial, Helvetica, sans-serif; padding: 0.5%; background: #f1f1f1; color: #002100; }

			/* Header/Blog Title */
			.header { padding-top: 2%; height: 450px; text-align: center; background: white; color: #002100; text-shadow: -8px 8px 16px #ff0e; }

			#headertitle { font-size: 90px; font-family: Garamond; font-weight: bolder; font-stretch: expanded; }

			#headercontent { font-size: 40px; font-style: italic; font-family: Garamond; font-stretch: condensed; }
			
			a{ transition: 0.3s ease-out; }
			
			p{ padding: 2%; }
			
			.navbar { background-color: #002100; border-radius: 0px 0px 5px 5px; box-shadow: -1px 1px 1px #010; }

			/* Style the sticky top navigation bar */
			#topnav { display: block; color:#002100; }

			/* Style the sticky top navigation links */
			#topnav a { float: left; display: block; color: #f2f2f2; text-align: center; padding: 14px 16px; text-decoration: none; }
			
			#topnav a:hover { background-color: #222; color: #ff0e; }

			/* Change properties of top navigation dropdown items */
			nav li a{ width: 100%; }
			
			nav li a, .navbar button{ margin:0; padding: 3px 5px; height: 50px; }
			
			#next, #back { width: 100%; transition: 0.3s ease-out; }

			/* Change properties of top navigation dropdown items */
			nav li button{ margin:0; padding: 5px; height: 50px; border-color: #232323ee; }

			/* Style the top navigation dropdown items */
			.navbar > button, .nav > li button{ float: center; background-color:#002100; color: #a1a1a1}

			/* Style the top navigation dropdown items when hovered */
			.navbar > button:hover, .nav > li button:hover{ color: #ff0e; background-color: #222; border: none; }

			/* Style the top navigation dropdown items */
			.nav > li a{ background-color:#002100ee; color: #a1a1a1}

			/* Style the top navigation dropdown items when hovered */
			.nav > li a:hover{ background-color:#232323ee; color: white; }

			/* Create two unequal columns that floats next to each other */
			/* Left column */
			.leftcolumn { float: left; width: 25%; padding: 1%; }

			/* Main column */
			.maincolumn { float: left; width: 50%; padding: 1%; }

			/* Right column */
			.rightcolumn { float: left; width: 25%; padding: 1%; }

			/* Fake image */
			.fakeimg { background-color: #aaa; width: 100%; padding: 1%; border-radius: 2px; box-shadow: -1px 1px 1px #aba; }
			
			.picture { height: 100px; }
			
			.largepicture { height: 200px; }

			/* Add a card effect for trending trades */
			.trendingtrades { color: white; padding: 1%; margin-top: 0.5%; }

			/* Add a card effect for trending trades usernames */
			.trendingtradeusername { color: #ff0e; }

			/* Add a card effect for articles */
			.card { background-color: white; padding: 1%; margin-top: 1%; border-radius: 3px; text-align: justify; box-shadow: -1px 1px 1px #aba; }
			
			.card a { text-decoration: none; color: #002100ee; }
			
			.cardlist { text-decoration: none; }
			
			.card a:hover { color: #ff0e; }
			
			.card > h3 { padding: 2.5% 0.5%; text-shadow: -1px -1px 1px #010; text-align: center; }

			/* Add a card effect for returner section at bottom of page */
			.returner { background-color: #f1f1f1; color: blue; float: right; font-weight: bolder; font-stretch: condensed; }

			/* Set container properties */
			.row { padding-left: 2%; width: 100%; }

			.sticky { position: fixed; top: 0; width: 100%; padding: 0 0.5%; }

			.sticky + .row { padding-top: 100px; }

			/* Clear floats after the columns */
			.row:after { content: ""; display: table; clear: both; }

			/* Footer */
			.footer { height: 600px; padding: 0; text-align: center; background-color: #002100ee; margin: 100px 0 -1px 0; font-stretch: condensed; font-weight: lighter; }
			
			.upper-footer { padding: 1%; }
			
			.footer a { transition: 0.3s ease-out; padding: 5% 0; margin: 0.5% 1%; color: #a1a1a1; text-align: justify;  }
			
			.footer a:hover { margin: 0% 1.2%; color: #ff0e; text-decoration: none; }
			
			.footerCard { float: left; padding: 0 2%; font-size: 90%; width: 25%; height: 547px; background-color: #002100ee; color: #a1a1a1;  }
			
			.footerCard blockquote { font-size: 70%; }
			
			.footer h6 { text-align: center; } #footerDiv { width: 100%; height: 0px; } #footerDiv h6 { font-size: 0%; } #footerDiv span { color: #ff0e; text-align: center; float: center;  font-size: 99%; } #footerDiv h6 { font-size: 100%; }
			
			#footerDivHeader { color: white; font-weight: bold; }
			
			#close { background-color: white; }
			
			#footerDiv { display: none; }
			
			.clearnav { box-shadow: none; text-shadow: none; margin: 0; padding: 0; left: 0; top: 0; } #close { display: none; }
			
			/* Responsive layout - when the screen is less than 1200px wide, make the two leftmost columns stack side by side and on top of the third */
			@media screen and (max-width: 1200px) {
				/* Set container properties */
				.row { padding-left: 2%; width: 100%; }
				
				/* Left column */
				.leftcolumn { float: left; width: 35%; padding-left: 2%; }
				
				/* Main column */
				.maincolumn {   float: left; width: 65%; padding-left: 2%; }

				/* Right column */
				.rightcolumn { float: left; width: 100%; padding-left: 2%; }
			
				.footerCard blockquote { font-size: 90%; }
				
				.footer a{ margin: 0.5% 1.6%; }
			}

			/* Responsive layout - when the screen is less than 800px wide, make the three columns stack on top of each other instead of next to each other */
			@media screen and (max-width: 800px) { 
				.row { padding-left: 2%; } .leftcolumn, .maincolumn, .rightcolumn {  width: 100%; padding-left: 2%; } .footer a{ margin: 0.5% 1.2%; } #footerDiv span { color: #ff0e; text-align: center; float: center;  font-size: 99%; } 
				
				#footerDiv { display: block; position: fixed; top: 70%; left: 0; width: 100%; height: 30%; margin: 0; padding: 5%; background-color: #002100; color: white; font-size: 60%; }
				
				#footerDivHeader { font-size: 100%; } #close { display: block; color: #002100; border-radius: 10px; float: right; }
			}

			/* Responsive layout - when the screen is less than 480px wide, make the navigation links stack on top of each other instead of next to each other */
			@media screen and (max-width: 480px) { 
				.topnav a { float: none; width: 100%; padding: 4%; } .row { padding-left: 6%; } .warning { display: none; } 
				
				.footer a{ font-size: 80%; margin: 0.5% 0.8%; } .footerCard { width: 33%; font-size: 80%; height: 547px; } .footerCard blockquote { font-size: 68%; }
                
                #footerDiv span { text-align: center; float: center; font-size: 98%; }
			}

			/* Responsive layout - when the screen is less than 345px wide, make the footer cards smaller so as to fit into container frame */
			@media screen and (max-width: 345px) { .row { padding-left: 10%; } .warning { display: none; } .footerCard { width: 33%; font-size: 70%; height: 522px; } }
			
			/* For Safari, Mozilla, Chrome and Opera browsers */
			@-webkit-keyframes pixAnimation {
				0%   {left:0px; top:0px; background:url("assets/images/forex_trading_2.jpg") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				7%  {left:0px; top:0px; background:url("assets/images/blockchain_technology.jpg") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				14%  {left:0px; top:0px; background:url("assets/images/forex_trading.jpg") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				21%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_3.png") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				28% {left:0px; top:0px; background:url("assets/images/forex_trading_3.jpg") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				35%   {left:0px; top:0px; background:url("assets/images/blockchain_technology_2.jpg") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				42%  {left:0px; top:0px; background:url("assets/images/forex_trading_5.jpg") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				50%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_4.jpg") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				57%  {left:0px; top:0px; background:url("assets/images/forex_trading_4.jpg") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				64% {left:0px; top:0px; background:url("assets/images/blockchain_technology_6.jpg") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				71%   {left:0px; top:0px; background:url("assets/images/forex_trading_8.jpg") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				78%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_5.jpg") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				85%  {left:0px; top:0px; background:url("assets/images/forex_trading_6.jpg") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				92%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_7.jpg") no-repeat center; -webkit-background-size: cover; background-size: cover;}
				100% {left:0px; top:0px; background:url("assets/images/forex_trading_7.jpg") no-repeat center; -webkit-background-size: cover; background-size: cover;}
			}
			
			@-moz-keyframes pixAnimation {
				0%   {left:0px; top:0px; background:url("assets/images/forex_trading_2.jpg") no-repeat center; -moz-background-size: cover; background-size: cover;}
				7%  {left:0px; top:0px; background:url("assets/images/blockchain_technology.jpg") no-repeat center; -moz-background-size: cover; background-size: cover;}
				14%  {left:0px; top:0px; background:url("assets/images/forex_trading.jpg") no-repeat center; -moz-background-size: cover; background-size: cover;}
				21%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_3.png") no-repeat center; -moz-background-size: cover; background-size: cover;}
				28% {left:0px; top:0px; background:url("assets/images/forex_trading_3.jpg") no-repeat center; -moz-background-size: cover; background-size: cover;}
				35%   {left:0px; top:0px; background:url("assets/images/blockchain_technology_2.jpg") no-repeat center; -moz-background-size: cover; background-size: cover;}
				42%  {left:0px; top:0px; background:url("assets/images/forex_trading_5.jpg") no-repeat center; -moz-background-size: cover; background-size: cover;}
				50%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_4.jpg") no-repeat center; -moz-background-size: cover; background-size: cover;}
				57%  {left:0px; top:0px; background:url("assets/images/forex_trading_4.jpg") no-repeat center; -moz-background-size: cover; background-size: cover;}
				64% {left:0px; top:0px; background:url("assets/images/blockchain_technology_6.jpg") no-repeat center; -moz-background-size: cover; background-size: cover;}
				71%   {left:0px; top:0px; background:url("assets/images/forex_trading_8.jpg") no-repeat center; -moz-background-size: cover;background-size: cover;}
				78%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_5.jpg") no-repeat center; -moz-background-size: cover; background-size: cover;}
				85%  {left:0px; top:0px; background:url("assets/images/forex_trading_6.jpg") no-repeat center; -moz-background-size: cover; background-size: cover;}
				92%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_7.jpg") no-repeat center; -moz-background-size: cover; background-size: cover;}
				100% {left:0px; top:0px; background:url("assets/images/forex_trading_7.jpg") no-repeat center; -moz-background-size: cover; background-size: cover;}
			}
			
			@-o-keyframes pixAnimation {
				0%   {left:0px; top:0px; background:url("assets/images/forex_trading_2.jpg") no-repeat center; -o-background-size: cover; background-size: cover;}
				7%  {left:0px; top:0px; background:url("assets/images/blockchain_technology.jpg") no-repeat center; -o-background-size: cover; background-size: cover;}
				14%  {left:0px; top:0px; background:url("assets/images/forex_trading.jpg") no-repeat center; -o-background-size: cover; background-size: cover;}
				21%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_3.png") no-repeat center; -o-background-size: cover; background-size: cover;}
				28% {left:0px; top:0px; background:url("assets/images/forex_trading_3.jpg") no-repeat center; -o-background-size: cover; background-size: cover;}
				35%   {left:0px; top:0px; background:url("assets/images/blockchain_technology_2.jpg") no-repeat center; -o-background-size: cover; background-size: cover;}
				42%  {left:0px; top:0px; background:url("assets/images/forex_trading_5.jpg") no-repeat center; -o-background-size: cover; background-size: cover;}
				50%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_4.jpg") no-repeat center; -o-background-size: cover; background-size: cover;}
				57%  {left:0px; top:0px; background:url("assets/images/forex_trading_4.jpg") no-repeat center; -o-background-size: cover; background-size: cover;}
				64% {left:0px; top:0px; background:url("assets/images/blockchain_technology_6.jpg") no-repeat center; -o-background-size: cover; background-size: cover;}
				71%   {left:0px; top:0px; background:url("assets/images/forex_trading_8.jpg") no-repeat center; -o-background-size: cover; background-size: cover;}
				78%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_5.jpg") no-repeat center; -o-background-size: cover; background-size: cover;}
				85%  {left:0px; top:0px; background:url("assets/images/forex_trading_6.jpg") no-repeat center; -o-background-size: cover; background-size: cover;}
				92%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_7.jpg") no-repeat center; -o-background-size: cover; background-size: cover;}
				100% {left:0px; top:0px; background:url("assets/images/forex_trading_7.jpg") no-repeat center; -o-background-size: cover; background-size: cover;}
			}
			
			/* For IE, does not work on <IE9 */
			@keyframes pixAnimation {
				0%   {left:0px; top:0px; background:url("assets/images/forex_trading_2.jpg") no-repeat center; background-size: cover;}
				7%  {left:0px; top:0px; background:url("assets/images/blockchain_technology.jpg") no-repeat center; background-size: cover;}
				14%  {left:0px; top:0px; background:url("assets/images/forex_trading.jpg") no-repeat center; background-size: cover;}
				21%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_3.png") no-repeat center; background-size: cover;}
				28% {left:0px; top:0px; background:url("assets/images/forex_trading_3.jpg") no-repeat center; background-size: cover;}
				35%   {left:0px; top:0px; background:url("assets/images/blockchain_technology_2.jpg") no-repeat center; background-size: cover;}
				42%  {left:0px; top:0px; background:url("assets/images/forex_trading_5.jpg") no-repeat center; background-size: cover;}
				50%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_4.jpg") no-repeat center; background-size: cover;}
				57%  {left:0px; top:0px; background:url("assets/images/forex_trading_4.jpg") no-repeat center; background-size: cover;}
				64% {left:0px; top:0px; background:url("assets/images/blockchain_technology_6.jpg") no-repeat center; background-size: cover;}
				71%   {left:0px; top:0px; background:url("assets/images/forex_trading_8.jpg") no-repeat center; background-size: cover;}
				78%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_5.jpg") no-repeat center; background-size: cover;}
				85%  {left:0px; top:0px; background:url("assets/images/forex_trading_6.jpg") no-repeat center; background-size: cover;}
				92%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_7.jpg") no-repeat center; background-size: cover;}
				100% {left:0px; top:0px; background:url("assets/images/forex_trading_7.jpg") no-repeat center; background-size: cover;}
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
					// var accountType = LoggedUser.account_type === 'Standard' ? "Basic" : LoggedUser.account_type;
					// $("#email").html(accountType);
					$("#name").html(LoggedUser.user);
					$("#acct_name").html(LoggedUser.acct_name);
					$("#email").html(LoggedUser.email);
					$("#phone_num").html(LoggedUser.phone_num);
					$("#zipcode").html(LoggedUser.zipcode);
					$("#city").html(LoggedUser.city);

				})( get_user_params() );
			}
			
			function IsLoggedIn(){ return <?php if ( isset($_SESSION['user']) && $_SESSION['user']!=="") echo true; else echo false; ?>; }
        </script>
		<div class="header animatePix">
		  <h1 id="headertitle">Tutusfx</h1>
		  <p id="headercontent">An incentivized trade network built on blockchain technology</p>
		</div>
		
		<div id="topnav"><!-- sticky header -->
			<nav class="navbar navbar-inverse"><!-- right hidden menu -->
			  <div class="container-fluid">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				  </button>
				  <a class="navbar-brand" href="#">Tutusfx</a>
				</div>
				<div class="collapse navbar-collapse" id="navi">
				  <ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="" name="back" onclick="prevPage()"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></li>
					<li><a href="" name="next" onclick="nextPage()">Next <span class="glyphicon glyphicon-arrow-right"></span></a></li>
					<li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="#">Subcontent 1</a></li>
						<li><a href="#">Subcontent 2</a></li>
						<li><a href="#">Subcontent 3</a></li>
					  </ul>
					</li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="redirects/open-account/"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="redirects/login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				  </ul>
				</div>
			  </div>
			</nav>
		</div>

		<div class="row">
		  <div class="leftcolumn">
			<div class="card">
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
			<div class="card">
			  <h3>User Account</h3>
			  <p>To trade or build Smart Networks for marketing or social interaction on Tutusfx, 
			  you are required to <a href="redirects/open-account/">Register an Account</a>. Registration might take up to 2 weeks to be approved.</a></p>
			  <p>Once your account has been approved, you can trade, chat, build your own Smart Network and gain rewards and incentives on Tutusfx.</p>
			  <p>If you are having difficulties with registration or simply want to know more about Tutusfx and/or how you can contribute to it and benefit, 
			  you can <a href="eu/contact-us-eu/index.html">Contact Us here</a>.</p>
			</div>
			<div class="card">
			  <h3>User Profile</h3>
			  <div class="fakeimg largepicture">Cover Image</div>
			  <p><a href="redirects/open-account/"><ul class="cardlist">About You:</ul></a>
				<a href="redirects/open-account/"><ul class="cardlist">First Name:</ul></a>
				<a href="redirects/open-account/"><ul class="cardlist">Last Name:</ul></a>
				<a href="redirects/open-account/"><ul class="cardlist">More...</ul></a>
			  </p>
			</div>
		  </div>
		  <div class="maincolumn">
			<div class="card">
			  <h3>Trending Posts</h3>
			  <div class="fakeimg"><p>Image</p></div>
			  <div class="fakeimg"><p>Image</p></div>
			  <div class="fakeimg"><p>Image</p></div>
			</div>
			<div class="card">
			  <h3>About Tutusfx</h3>
			  <div class="fakeimg picture">Image</div>
			  <p>The threshold to create and operate a Marketing Network is quite high! Therefore, a one-stop solution is provided by the Tutusfx Community for anyone to create a unique Network without any thresholds.</p>
			  <p class="rightAlign"><a href="eu/about-us-eu/index.html">More...</a></p><br/><p>
			</div>
			<div class="card">
			  <h3>Vote a Witness</h3>
			  <h4> &nbsp; &nbsp; &nbsp; <em>List of top witnesses</em></h4>
			  <p>1. @darkspot</p>
			  <p>2. @eurogee</p>
			  <p>3. @thegenius</p>
			  <p>4. @yogolod</p>
			  <p>5. @ynl</p>
			  <p>6. @javakid</p>
			  <p>7. @icey</p>
			  <p>8. @barbie23</p>
			  <p>9. @ultra1</p>
			  <p>10. @futile</p>
			  <p class="rightAlign"><a href="eu/about-us-eu/index.html">More...</a></p><br/><p>
			</div>
		  </div>
		  <div class="rightcolumn">
			<div class="card">
			  <h3>Blockchain Post 2</h3>
			  <h5><b> &nbsp; Title description</b>, Nov 22, 2018</h5>
			  <div class="fakeimg largepicture">Image</div>
			  <p>Some text from Post 2...</p>
			  <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			</div>
			<div class="card">
			  <h3>Blockchain Post 1</h3>
			  <h5><b> &nbsp; Title description</b>, Nov 15, 2018</h5>
			  <div class="fakeimg largepicture">Image</div>
			  <p>Some text from Post 1...</p>
			  <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			</div>
			<div class="card returner"> <a href="#">Return to top <span class="glyphicon glyphicon-arrow-up"></span></a> </div>
		  </div>
		</div>
		
		<div class="footer">
		  <div class="upper-footer"><a href="">Sponsorship</a><a href="">Fund Safety &amp; Security</a><a href="">Sitemap</a><a href="">Networks</a><a href="eu/contact-us-eu/index.html">CONTACT US</a></div>
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
				<a href="eu/contact-us-eu/index.html">CONTACT US</a><br/>
				<a href="">WALLETS</a><br/>
				<a href="">GUIDE</a><br/>
				<a href="">FAQ</a><br/>
				<a href="">CHARTS</a><br/>
				<a href="">DEVELOPER DISCORD</a><br/>
				<a href="">ADVERTISE</a><br/>
				<a href="">LEGAL</a><br/>
				<a href="">PRIVACY</a><br/>
				<a href="">ABOUT US</a><br/>
				<a href="">PARTNERS</a><br/>
				<a href="">WIDGETS</a><br/>
			</div>
			<div class="footerCard"><h6>CHOOSE LANGUAGE</h6>
				<a href="">TUTUSFX.COM INTERNATIONAL</a><br/>
				<a href="eu/de/index.html">TUTUSFX.COM DEUTSCHE</a><br/>
				<a href="eu/it/index.html">TUTUSFX.COM ITALIANO</a><br/>
				<a href="eu/fr/index.html">TUTUSFX.COM FRANCAISE</a><br/>
				<a href="eu/es/index.html">TUTUSFX.COM ESPAÑOL</a><br/>
				<a href="eu/cn/index.html">TUTUSFX.COM 中文</a><br/>
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
				<a href="https://www.forex.com">FOREX.COM</a><br/>
				<a href="https://www.dukascopy.com/land/trading/eu/forex">DUKASCOPY</a><br/>
			</div>
			<div class="footerCard warning"><h6><strong>GENERAL RISK WARNING</strong></h6>
				<span>TRADING IN CRYPTOCURRENCIES & CFDS CARRY A HIGH LEVEL OF RISK AND MAY NOT BE APPROPRIATE FOR ALL INVESTORS.  IT IS POSSIBLE TO LOSE OF ALL OF YOUR INVESTED CAPITAL SO, YOU SHOULD NOT INVEST MONEY THAT YOU CANNOT AFFORD TO LOSE. FOR MORE INFORMATION ABOUT THE RISKS INVOLVED, PLEASE<a href="eu/terms-and-conditions-eu/risk-disclosure-eu/index.html"> CLICK HERE</a> .</span>
			</div>
			<div id="footerDiv"><h6 id="footerDivHeader">GENERAL RISK WARNING</h6><button id="close" onclick="doclose()" class="glyphicon glyphicon-arrow-down btn badge"></button><br/><br/>
				<span id="footerDivTexts">TRADING IN CRYPTOCURRENCIES & CFDS CARRY A HIGH LEVEL OF RISK AND MAY NOT BE APPROPRIATE FOR ALL INVESTORS.  IT IS POSSIBLE TO LOSE OF ALL OF YOUR INVESTED CAPITAL SO, YOU SHOULD NOT INVEST MONEY THAT YOU CANNOT AFFORD TO LOSE. FOR MORE INFORMATION ABOUT THE RISKS INVOLVED, PLEASE<a href="eu/terms-and-conditions-eu/risk-disclosure-eu/index.html"> CLICK HERE</a> .</span>
            </div>
		  </div>
		</div>

		<script>
			var header = document.getElementById("topnav"); var sticky = header.offsetTop;
			var title = document.getElementById("headertitle"); var headercontent = document.getElementById("headercontent");
			var footerdiv = document.getElementById("footerDiv"); var footerheader = document.getElementById("footerDivHeader"); var footertexts = document.getElementById("footerDivTexts"); 
			var closebtn = document.getElementById("close"); var closing = true;
			
			function doclose() { 
				if (closing==true) {
					footerdiv.style.height = "0px"; footerdiv.style.float = "bottom"; footerdiv.style.background = "none"; 
					closebtn.style.backgroundColor = "#002100"; closebtn.style.color = "white";
					footerheader.style.fontSize = "0%"; footertexts.style.fontSize = "0%"; closebtn.style.visibility = "none"; closing = false;
				} else {
					footerdiv.style.height = "30%"; footerdiv.style.top = "70%"; footerdiv.style.backgroundColor = "#002100";
					closebtn.style.backgroundColor = "white"; closebtn.style.color = "#002100";
					footerheader.style.fontSize = "100%"; footertexts.style.fontSize = "100%"; closing = true;
				}
			}
			
			window.onscroll = function() { myFunction() };

			function myFunction() { 
				if (window.pageYOffset > sticky) { header.classList.add("sticky"); } 
				else {  
					title.style.paddingTop = (window.pageYOffset+10)+"px"; 
					title.style.fontSize = (90-(3*window.pageYOffset/25))+"px";
					headercontent.style.fontSize = (40-(window.pageYOffset/25))+"px";
					if (window.pageYOffset > 250) { (window.pageYOffset/2)+"px"; headercontent.style.fontSize = "0px"; } 
					header.classList.remove("sticky");
				} 
			}
			
			function prevPage(){ window.history.go(-1); }
			
			function nextPage(){ window.history.go(+1); }
		</script>
	</body>
</html>
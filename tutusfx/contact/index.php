<?php
if(isset($_POST['submit']))
{
	extract($_POST);
	$error ="";
	if(empty($subject) || strlen($subject)<3){
		$error .= "Please provide a valid subject for us.<br />";
	}
	elseif(empty($dept)){
		$error .= "Please select a valid department.<br />";
	}
	elseif(empty($email) || strlen($email)<7){
		$error .= "Please provide a valid email address.<br />";
	}
	elseif(empty($phone) || strlen($phone)<7 || strlen($phone)>15 || !is_numeric($phone)){
		$error .= "Please provide a valid phone number.<br />";
	}
	elseif(empty($content) || strlen($content)<7){
		$error .= "Please provide a valid content.<br />";
	}
	elseif(strlen($content)>1000){
		$error .= "Please summarize your content.<br />";
	}
	else{
		//ready to send to mail here.
		if($dept=="witness"){
			$to="witness@tutusfx.com";
		}
		else{
			if($dept=="support"){
				$to="support@tutusfx.com";
			}else{}
		}
		$sub = $subject;
    	$to = $email;
    	$message = $content;
		$header = "From:hello@tutusfx.com \r\n";
		$header .= "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html\r\n";
		$retval = mail ($to, $subject,$content,$header);
		if($retval){
			$error="We have successfully received your mail, we will get back to you soon.";
		}
		else{
			$error ="We encountered a problem processing your request please try again later or contact us on support@tutusfx.com";
		}
	}
}
else{}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"><title>Contact Us</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="HandheldFriendly" content="True" />
		<meta name="MobileOptimized" content="320" />
		<script type="text/javascript">
			WebFontConfig = {
				google: { families: [ 'Roboto:500,400,300,100,700italic,300italic,700:greek,latin,cyrillic' ] }
			};
			(function(d) {
				var wf = d.createElement('script'), s = d.scripts[0];
				wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
				s.parentNode.insertBefore(wf, s);
			})(document);
		</script>
		<script type='text/javascript'>
            /* <![CDATA[ */
            var ajaxurl = "wp-admin/admin-ajax.html"
            var siteurl = "eu/index.html"
            var wp_lang = "en" ;
            /* ]]> */
        </script>
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
		<meta property="og:title" content="tutusfx.com" />
		<meta property="og:url" content="https://www.tutusfx.com/eu/" />
		<meta property="og:site_name" content="tutusfx.com" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:title" content="tutusfx.com" />
		<meta name="twitter:domain" content="tutusfx.com" />
		<meta name="generator" content="WPML ver:3.6.1 stt:5,39,1,4,3,27,40,42,44,47,2,52;" />
		<meta name='description' content='Login now with your username and passkey, and begin to enjoy all of Tutusfx services and bonuses.' />
		<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","url":"https:\/\/www.tutusfx.com\/eu\/","name":"tutusfx.com","potentialAction":{"@type":"SearchAction","target":"https:\/\/www.tutusfx.com\/eu\/?s={search_term}","query-input":"required name=search_term"}}</script>
		<link rel="icon" href="" type="image/x-icon" />
		<link rel="shortcut icon" href="" type="image/x-icon" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
		<style>
			* { box-sizing: border-box; top: 0; left: 0; }
			body { font-family: Arial, Helvetica, sans-serif; padding: 10px; background: #f1f1f1; color: #002100; }
			/* Header/Blog Title */
			.header { padding: 30px; text-align: center; background: white; color: #002100; text-shadow: -4px 4px 8px #dd3; }
			.header h1 { font-size: 50px; font-family: Garamond; font-weight: bolder; font-stretch: expanded; }
			.header p { font-size: 15px; font-style: italic; font-family: Garamond; font-stretch: condensed; }
			
			.navbar-header{ color:#444; }
			/* Style the top navigation bar */
			.topnav { display: block; }
			/* Style the topnav links */
			.topnav a { background-color: #003200aa; float: left; display: block; color: #f2f2f2; text-align: center; padding: 14px 16px; text-decoration: none; }
			/* Change properties of dropdown menu items */
			nav li a{width: 100%; margin:0; padding: 5px; }
			/* Change properties of dropdown menu items */
			.nav > li a{background-color:#002100ee; color: #a1a1a1}
			/* Change properties of dropdown menu items */
			.nav > li a:hover{background-color:#232323ee; color: white; }
			
			form label{ width: 13%; margin: 1%; }
			
			form input, form select, form textarea{ background-color:#eeeeee; border-radius:5px; }
			
			input[type="text"], input[type="password"], input[type="phone"], input[type="email"], form select, form textarea{ width: 83%; margin: 1%; }
			
			input[type="submit"]{ background-color: #002100ee; color: #a1a1a1; box-shadow: -3px 2px 5px #aa7; border-radius: 5px; }
			/* Create two unequal columns that floats next to each other */
			/* Main column */
			.maincolumn {   float: left; width: 75%; padding-left: 20px; }
			/* Right column */
			.rightcolumn { float: left; width: 25%; padding-left: 20px; }
			/* Fake image */
			.fakeimg { background-color: #aaa; width: 100%; padding: 20px; }
			/* Add a card effect for articles */
			.card { background-color: white; padding: 20px; margin-top: 20px; }
			
			.sendSection, .additionalTxt{ text-align: center; }
			/* Add a card effect for returner section at bottom of page */
			.returner { background-color: #f1f1f1; color: blue; float: right; font-weight: bolder; font-stretch: condensed; }
			/* Add sticky header */
			.row { padding: 16px; width: 100%; }
			.sticky { position: fixed; top: 0; width: 98.6%; margin:0 10px; }
			.sticky + .row { padding-top: 102px; }
			/* Clear floats after the columns */
			.row:after { content: ""; display: table; clear: both; }
			/* Footer */
			.footer { padding: 20px; text-align: center; background-color: #002100ee; color: #a1a1a1; margin-top: 20px; font-stretch: condensed; font-weight: lighter; }
			
			.footer a{ margin: 0% 2%; }
			/* Responsive layout - when the screen is less than 1200px wide, make the two leftmost columns stack side by side and on top of the third */
			@media screen and (max-width: 1200px) {
				/* Set container properties */
				.row { padding: 16px; width: 100%; }
				
				/* Set columns */
				.maincolumn {   float: left; width: 70%; padding-left: 10px; }
				
				.rightcolumn { float: left; width: 30%; padding-left: 10px; }
				/* Set labels and inputs */
				form label{ width: 16%; }
				
				form input, form select, form textarea{ background-color:#eeeeee; border-radius: 5px; }
			
				input[type="text"], input[type="password"], input[type="phone"], input[type="email"], form select, form textarea{ width: 84%; }
			
				input[type="submit"]{ background-color: #002100ee; color: #a1a1a1; box-shadow: -2px 1px 2px #aa7; border-radius: 3px; }
				
				.footer a{ margin: 0% 1.6; }
			}
			/* Responsive layout - when the screen is less than 800px wide, make the three columns stack on top of each other instead of next to each other */
			@media screen and (max-width: 800px) { /* Set columns */ .maincolumn, .rightcolumn {  width: 100%; padding: 8px; }
				/* Set labels and inputs */
				form label{ width: 27%; }
				
				form input, form select, form textarea{ background-color: #eeeeee; border-radius: 5px; } 
			
				input[type="text"], input[type="password"], input[type="phone"], input[type="email"], form select, form textarea{ width: 73%; }
			
				input[type="submit"]{ background-color: #002100ee; color: #a1a1a1; box-shadow: -2px 1px 2px #aa7; border-radius: 3px; }
				
				.footer a{ margin: 0% 1.2%; }
			}
			/* Responsive layout - when the screen is less than 400px wide, make the navigation links and input fields stack on top of each other instead of next to each other */
			@media screen and (max-width: 400px) { /* Set navigation links */ .topnav a { float: none; width: 100%; padding: 4px; }
				/* Set labels and inputs */
				input[type="text"], input[type="password"], input[type="phone"], input[type="email"], form select, form textarea{ width: 100%; }
			
				input[type="submit"]{ background-color: #002100ee; color: #a1a1a1; box-shadow: -1px 1px 1px #aa7; border-radius: 3px; }
				
				.footer a{ margin: 0% 0.8%; }
			}
			
			/* For Safari, Mozilla, Chrome and Opera browsers */
			@-webkit-keyframes pixAnimation {
				0%   {left:0px; top:0px; background:url("assets/images/forex_trading_2.jpg") no-repeat center;
				-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
				25%  {left:0px; top:0px; background:url("assets/images/blockchain_technology.jpg") no-repeat center;
				-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
				50%  {left:0px; top:0px; background:url("assets/images/forex_trading.jpg") no-repeat center;
				-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
				75%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_3.png") no-repeat center;
				-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
				100% {left:0px; top:0px; background:url("assets/images/forex_trading_4.jpg") no-repeat center;
				-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
			}
			
			@-moz-keyframes pixAnimation {
				0%   {left:0px; top:0px; background:url("assets/images/forex_trading_2.jpg") no-repeat center;
				-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
				25%  {left:0px; top:0px; background:url("assets/images/blockchain_technology.jpg") no-repeat center;
				-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
				50%  {left:0px; top:0px; background:url("assets/images/forex_trading.jpg") no-repeat center;
				-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
				75%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_3.png") no-repeat center;
				-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
				100% {left:0px; top:0px; background:url("assets/images/forex_trading_4.jpg") no-repeat center;
				-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
			}
			
			@-o-keyframes pixAnimation {
				0%   {left:0px; top:0px; background:url("assets/images/forex_trading_2.jpg") no-repeat center;
				-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
				25%  {left:0px; top:0px; background:url("assets/images/blockchain_technology.jpg") no-repeat center;
				-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
				50%  {left:0px; top:0px; background:url("assets/images/forex_trading.jpg") no-repeat center;
				-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
				75%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_3.png") no-repeat center;
				-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
				100% {left:0px; top:0px; background:url("assets/images/forex_trading_4.jpg") no-repeat center;
				-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;}
			}
			
			/* For IE, does not work on <IE9 */
			@keyframes pixAnimation {
				0%   {left:0px; top:0px; background:url("assets/images/forex_trading_2.jpg") no-repeat center; background-size: cover;}
				25%  {left:0px; top:0px; background:url("assets/images/blockchain_technology.jpg") no-repeat center; background-size: cover;}
				50%  {left:0px; top:0px; background:url("assets/images/forex_trading.jpg") no-repeat center; background-size: cover;}
				75%  {left:0px; top:0px; background:url("assets/images/blockchain_technology_3.png") no-repeat center; background-size: cover;}
				100% {left:0px; top:0px; background:url("assets/images/forex_trading_4.jpg") no-repeat center; background-size: cover;}
			}
			
			.animatePix{ 
				width: 100%; -webkit-animation: pixAnimation 30s infinite; -moz-animation: pixAnimation 30s infinite;
				-o-animation: pixAnimation 30s infinite; animation: pixAnimation 30s infinite; font-weight: bolder;
			}
		</style>
	</head>
	<body>
		<div class="header animatePix">
		  <h1>Tutusfx</h1>
		  <p>An incentivized trade network built on blockchain technology</p>
		</div>
		
		<div class="topnav" id="topnav"><!-- sticky header -->
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
					<li><a href="welcome.html">Home</a></li>
					<li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="#">Subcontent 1</a></li>
						<li><a href="#">Subcontent 2</a></li>
						<li><a href="#">Subcontent 3</a></li>
					  </ul>
					</li>
					<li><a href="" name="back" onclick="prevPage()"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></li>
					<li><a href="" name="next" onclick="nextPage()">Next <span class="glyphicon glyphicon-arrow-right"></span></a></li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="registration.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li class="active"><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				  </ul>
				</div>
			  </div>
			</nav>
		</div>

		<div class="row">
		  <div class="maincolumn">
			<div class="card">
				<h3>Contact Tutusfx</h3>
				<h4>
					<?php
						if(isset($error) and !empty($error)){
							echo $error;
							$error =="";
							unset($error);
						}else{}
					?>
				</h4>
				<form method="POST">
					<div>
						<input type="text" name="subject" placeholder="Subject to your content" maxlength="70" required="required"><br />
						<select name="dept" required="required">
							<option value="">Please select a Department</option>
							<option value="witness">Witness</option>
							<option value="support">Support</option>
						</select><br />
						<input type="email" name="email" placeholder="Please provide your email address" maxlength="70" required="required"><br />
						<input type="phone" name="phone" placeholder="Please provide phone number" maxlength="70"><br />
						<textarea name="content" placeholder="Please provide content for the subject above"></textarea><br />
						<button type="submit" name="submit">Submit</button>
					</div>
				</form>
			</div>
		  </div>
		  <div class="rightcolumn">
			<div class="card">
			  <h3>Trending Post</h3>
			  <div class="fakeimg"><p>Image</p></div>
			  <div class="fakeimg"><p>Image</p></div>
			  <div class="fakeimg"><p>Image</p></div>
			</div>
			<div class="card">
			  <h3>Vote a Witness</h3>
			  <p>List of top 100 witnesses..</p>
			</div>
			<div class="card returner">
			  <p><a href="#">Return to top <span class="glyphicon glyphicon-arrow-up"></span></a></p>
			</div>
		  </div>
		</div>
		
		<div class="footer">
		  <a href="">Sponsorship</a><a href="">Safety &amp; Security of Funds</a><a href="">Sitemap</a><a href="">Forums</a><a href="">Contact Us</a>
		</div>

		<script>
			window.onscroll = function() { myFunction() };
			var header = document.getElementById("topnav");
			var sticky = header.offsetTop;
			function myFunction() { if (window.pageYOffset > sticky) { header.classList.add("sticky"); } else { header.classList.remove("sticky"); } }
			
			function prevPage(){ window.history.go(-1); }
			
			function nextPage(){ window.history.go(+1); }
		</script>
	</body>
</html>

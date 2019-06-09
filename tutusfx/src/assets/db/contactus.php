<?php
if(isset($_POST['submit'])){
	extract($_POST);
	$error ="";
	if(empty($subject) || strlen($subject)<3){
		$error .= "Please provide a valid subject for us.<br />";
	}
	else if(empty($dept)){
		$error .= "Please select a valid department.<br />";
	}
	else if(empty($email) || strlen($email)<7){
		$error .= "Please provide a valid email address.<br />";
	}
	else if(empty($phone) || strlen($phone)<7 || strlen($phone)>15 || !is_numeric($phone)){
		$error .= "Please provide a valid phone number.<br />";
	}
	else if(empty($content) || strlen($content)<7){
		$error .= "Please provide a valid content.<br />";
	}
	else if(strlen($content)>1000){
		$error .= "Please summarize your content.<br />";
	}
	else{ //ready to send to mail here.
		if($dept=="witness"){ $to="witness@tutusfx.com"; }
		else if($dept=="support"){ $to="support@tutusfx.com"; }
		else{}
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
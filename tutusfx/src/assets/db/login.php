<?php
	require 'config.php';
	/* set the cache limiter to 'private' */
	session_cache_limiter('private');
	$cache_limiter = session_cache_limiter();
	/* set the cache expire to 30 minutes */
	session_cache_expire(30);

	// it will never let you open this page if name is set
	if ( (isset($_SESSION['user']) && $_SESSION['user']==="Admin") ) {
		header("Location: http://www.tutusfx.com/admin/index.html");
		exit();
	} else if ( (isset($_SESSION['user']) && $_SESSION['user']==="Info") ) {
		header("Location: http://www.tutusfx.com/admin/info.html");
		exit();
	} else if ( (isset($_SESSION['user']) && $_SESSION['user']!=="") ) {
		header("Location: http://www.tutusfx.com/redirects/my-account/account-details/index.html");
		exit();
	} else { /* Create signin session */
		
		$error = false;
		$emailError = $passError = $_SESSION['errMSG'] = $_SESSION['errTyp'] = "";

		if( isset($_POST['btn-login']) ) {
			// prevent sqli injections/ clear user invalid inputs
			$email = trim($_POST['usr']);
			$email = strip_tags($email);
			$email = htmlspecialchars($email);

			$pass = trim($_POST['pswd']);
			$pass = strip_tags($pass);
			$pass = htmlspecialchars($pass);
			// prevent sqli injections / clear user invalid inputs

			if(empty($pass)){
				$error = true; $passError = "Please enter your password.";
			} else if(empty($email)){
				$error = true; $emailError = "Please enter your email address.";
			}

			// if there's no error, continue to login
			if (!$error) { // check if provided email exists or not
				try { if ( !(strpos($email,".com")>0 && strpos($email,"@")>0) ) { // address does not end with .com
				try { // assume input is a username and attempt to login
					if ($user2->doLogin($email,"",$pass)) {
						$error = false; 
						$_SESSION['errTyp'] = "Welcome"; $_SESSION['errMSG'] = " ".$_SESSION['user'] = $email;
						if ( isset($_SESSION['user']) && $_SESSION['user']==="Admin" ) header("Location: http://www.tutusfx.com/admin/index.html");
						else if ( isset($_SESSION['user']) && $_SESSION['user']==="Info" ) header("Location: http://www.tutusfx.com/admin/info.html");
						else header("Location: http://www.tutusfx.com/redirects/my-account/account-details/index.html");
						exit();
					}
				} catch(PDOException $e){ echo "Problem encountered applying PDO: ".$e->getMessage(); }  
			} else if ($user2->doLogin($email,$email,$pass)) {
						$_SESSION['errTyp'] = "Welcome";
						$_SESSION['errMSG'] = " ".$_SESSION['user'] = $email;
						if ( isset($_SESSION['user']) && $_SESSION['user']!=="" ) {
							if ( $_SESSION['user']==="Admin" ) header("Location: http://www.tutusfx.com/admin/index.html");
							else if ( $_SESSION['user']==="Info" ) header("Location: http://www.tutusfx.com/admin/info.html");
							else header("Location: http://www.tutusfx.com/redirects/my-account/account-details/index.html");
							exit();
						} else {
							$_SESSION['errTyp'] = "ERROR";
							$_SESSION['errMSG'] = "No session data for login...";
						}
					} else { $_SESSION['errTyp'] = "ERROR"; $_SESSION['errMSG'] = "Login failed, try again later...";
					} echo "<marquee>".$_SESSION['errTyp']."<br>".$_SESSION['errMSG']."</marquee>";
				} catch(PDOException $e){ echo "Problem encountered applying PDO: ".$e->getMessage(); }  
			} else {
				if ( isset($emailError) && $emailError!=="" ) echo "<marquee>".$_SESSION['errTyp']."<br>".$_SESSION['errMSG'] = $emailError."</marquee>";
				else if ( isset($passError) && $passError!=="" ) echo "<marquee>".$_SESSION['errTyp']."<br>".$_SESSION['errMSG'] = $passError."</marquee>";
				else echo "<marquee>".$_SESSION['errTyp']."<br>".$_SESSION['errMSG']."</marquee>";
			}
		}
	}

	// this will initialize mysql error reporting.
	error_reporting( ~E_NOTICE );
	// but I strongly suggest you use PDO.
?>
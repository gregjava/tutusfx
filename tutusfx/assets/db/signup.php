<?php
	require_once 'config.php';
	/* set the cache limiter to 'private' */
	$cache_limiter = session_cache_limiter('private');
	/* set the cache expire to 30 minutes */
	session_cache_expire(30);

	// it will never let you open this page if name is set
	if ( (isset($_SESSION['user']) && $_SESSION['user']==="Admin") ) {
		header("Location: https://www.tutusfx.com/admin/index.html");
		exit();
	} else if ( (isset($_SESSION['user']) && $_SESSION['user']==="Info") ) {
		header("Location: https://www.tutusfx.com/admin/info.html");
		exit();
	} else if ( (isset($_SESSION['user']) && $_SESSION['user']!=="") ) {
		header("Location: https://www.tutusfx.com/redirects/my-account/account-details/index.html");
		exit();
	} else { /* Register user */
		$error = false;
		$nameError = $emailError = $cityError = $phone_numError = $verCodeError = $zcodeError = $acct_nameError = $currencyError = $passError = $fnameError = $jobposError
		= $posdateError = $aboutuserError = $jobdateError = $compaddError = $btcIdError = $steemIdError = "";
		$name = $email = $city = $phone_num = $zcode = $acct_name = $currency = $pass = $fname = $jobpos = $posdate = $aboutuser = $jobdate = $compadd = $btcId = $steemId = "";
		$verCode = 0; // to be used as a var of type 'long'

		if ( isset($_POST['btn-signup']) ) { // clean user inputs to prevent sqli injections
			$acct_name = trim($_POST['acct_name']);
			$acct_name = strip_tags($acct_name);
			$acct_name = htmlspecialchars($acct_name);
			
			$fname = trim($_POST['fname']);
			$fname = strip_tags($fname);
			$fname = htmlspecialchars($fname);
			
			$name = trim($_POST['name']);
			$name = strip_tags($name);
			$name = htmlspecialchars($name);
			
			$jobpos = trim($_POST['jobpos']);
			$jobpos = strip_tags($jobpos);
			$jobpos = htmlspecialchars($jobpos);
			
			$posdate = trim($_POST['posdate']);
			$posdate = strip_tags($posdate);
			$posdate = htmlspecialchars($posdate);
			
			$jobdate = trim($_POST['jobdate']);
			$jobdate = strip_tags($jobdate);
			$jobdate = htmlspecialchars($jobdate);
			
			$compadd = trim($_POST['compadd']);
			$compadd = strip_tags($compadd);
			$compadd = htmlspecialchars($compadd);
			
			$email = trim($_POST['email']);
			$email = strip_tags($email);
			$email = htmlspecialchars($email);
			
			$zcode = trim($_POST['zcode']);
			$zcode = strip_tags($zcode);
			$zcode = htmlspecialchars($zcode);
			
			$btcId = trim($_POST['btcId']);
			$btcId = strip_tags($btcId);
			$btcId = htmlspecialchars($btcId);
			
			$steemId = trim($_POST['steemId']);
			$steemId = strip_tags($steemId);
			$steemId = htmlspecialchars($steemId);
			
			$phone_num = trim($_POST['phone_num']);
			$phone_num = strip_tags($phone_num);
			$phone_num = htmlspecialchars($phone_num);
			
			$pass = trim($_POST['pwd']);
			$pass = strip_tags($pass);
			$pass = htmlspecialchars($pass);
			
			$currency = trim($_POST['currency']);
			$currency = strip_tags($currency);
			$currency = htmlspecialchars($currency);
			
			$gender = trim($_POST['gender']);
			$gender = strip_tags($gender);
			$gender = htmlspecialchars($gender);
			
			$acct_type = trim($_POST['acct_type']);
			$acct_type = strip_tags($acct_type);
			$acct_type = htmlspecialchars($acct_type);
			
			$aboutuser = trim($_POST['aboutuser']);
			$aboutuser = strip_tags($aboutuser);
			$aboutuser = htmlspecialchars($aboutuser);
			
			$country = trim($_POST['country']);
			$country = strip_tags($country);
			$country = htmlspecialchars($country);
			
			$state = trim($_POST['state']);
			$state = strip_tags($state);
			$state = htmlspecialchars($state);
			
			$city = trim($_POST['regarding-select-menu']);
			$city = strip_tags($city);
			$city = htmlspecialchars($city);
			
			// Basic name validation
			if (empty($name)) {
				$error = true;
				$nameError = "Please enter your last name.";
			} else if (strlen($name) < 3) {
				$error = true;
				$nameError = "Enter your non-abbreviated last name.";
			} else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
				$error = true;
				$nameError = "Name must contain alphabets and space only <eg. John Doe>";
			} else { /* check if name exists or not */
				$query = "SELECT * FROM tutusfxc_blockchain.User WHERE name='$name'";
				$stmt = $user->runQuery($query);
				$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
				if( !($userRow['name']=="") ) { // Result returned, name already in db
					$query = "SELECT * FROM tutusfxc_blockchain.User WHERE fname='$fname'";
					$stmt = $user->runQuery($query);
					$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
					if( !($userRow['fname']=="") ) { // Result returned, name already in db
						$error = true;
						$nameError = "You may have already registered on tutusfx, please login using your username and passkey.";
					}
				}
			} 
			
			// Basic account username validation
			if (empty($acct_name)) {
				$error = true;
				$acct_nameError = "Please enter your account username.";
			} else if (strlen($acct_name) < 3) {
				$error = true;
				$acct_nameError = "Invalid account username.";
			} else if (!preg_match("/^[a-zA-Z0-9 ]+$/",$acct_name)) {
				$error = true;
				$acct_nameError = "Account username must contain numbers, alphabets and space only.";
			} else { /* check if acct username exists or not */
				$query = "SELECT * FROM tutusfxc_blockchain.User WHERE username='$acct_name'";
				$stmt = $user->runQuery($query);
				$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
				if( !($userRow['username']=="") ) { // Result returned, acct username already in db
					$error = true;
					$acct_nameError = "Username/Network already in use.";
				}
			} 
			
			/* Basic email validation */
			if (empty($email)){
				$error = true;
				$emailError = "Please enter email.";
			} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
				$error = true;
				$emailError = "Please enter valid email address.";
			} else { /* check if email exists or not */
				$query = "SELECT email FROM tutusfxc_blockchain.User WHERE email='$email'";
				$stmt = $user->runQuery($query);
				$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
				if( !($userRow['email']=="") ) { // Result returned, email already in db
					$error = true;
					$emailError = "Provided Email is already in use.";
				}
			} 
			
			// Basic phone number validation
			if (empty($phone_num)) {
				$error = true;
				$phone_numError = "Please enter your phone number.";
			} else if ((strlen($phone_num) < 5) || strlen($phone_num) >14 ) {
				$error = true;
				$phone_numError = "Enter a valid mobile number.";
			} else if (!preg_match("/^[0-9+ ]*$/",$phone_num)) {
				$error = true;
				$phone_numError = "Mobile number should only contain numeric digits.";
			} else { /* check if phone number has already been registered or not */
				$query = "SELECT * FROM tutusfxc_blockchain.User WHERE phone='$phone_num'";
				$stmt = $user->runQuery($query);
				$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
				if( empty($userRow['phone']=="") ) { // Result returned, phone number already in use
					$error = true;
					$phone_numError = "You may have already registered on tutusfx, please login with your registered details or contact support@tutusfx.com.";
				} else {
					$carrier = ""; // SET A CARRIER
					srand ( $_SESSION['verCode'] = $verCode ); // generate a random number and save it in session
					$message = wordwrap( $verCode, 70 ); // wrap the generated number as an sms
					$to = $_POST['phone_num'] . '@' . $carrier; // set the receiver address
					$result = @mail( $to, '', $message ); // attempt to send the sms
					if ($result) { // if mail is successfully sent,
						$_SESSION['errTyp'] = "DONE"; // set notification header
						$_SESSION['errMSG'] = "<div style='position:absolute; top:0; left:0; margin:0.1% auto; width:auto; height:auto; font-family:Courier New;'>
						Please enter the validation code received on your mobile phone. <span style='color:red; font-weight:lighter; font-family:Arial Black;'>
						Notification may take a few minutes to arrive. Please wait up to 30 minutes before retry (if desired). If verification fails, send mail to support@tutusfx.com</span>.
						</div>"; // set notification content
					} else { $error = true; $phone_numError = "Mobile number verification failed! Try again..."; }
				}
			}
			
			// Basic zip code validation
			if (empty($jobpos)) {
				$error = true;
				$jobposError = "Please enter your zip code.";
			}
			
			// Basic zip code validation
			if (empty($posdate)) {
				$error = true;
				$posdateError = "Please enter your zip code.";
			}
			
			// Basic zip code validation
			if (empty($jobdate)) {
				$error = true;
				$jobdateError = "Please enter your zip code.";
			}
			
			// Basic zip code validation
			if (empty($compadd)) {
				$error = true;
				$compaddError = "Please enter your zip code.";
			}
			
			// Basic zip code validation
			if (empty($zcode)) {
				$error = true;
				$zcodeError = "Please enter your zip code.";
			}
			
			// Basic zip code validation
			if (empty($btcId)) {
				$error = true;
				$btcIdError = "Please enter your zip code.";
			}
			
			// Basic zip code validation
			if (empty($steemId)) {
				$error = true;
				$steemIdError = "Please enter your zip code.";
			}
			
			// Basic currency validation
			if (empty($currency)) {
				$error = true;
				$currencyError = "Please select your transactional currency.";
			}
			
			// Basic currency validation
			if (empty($gender)) {
				$error = true;
				$genderError = "Please select your transactional currency.";
			}
			
			// Basic currency validation
			if (empty($acct_type)) {
				$error = true;
				$acct_typeError = "Please select your transactional currency.";
			}
			
			// Basic currency validation
			if (empty($aboutuser)) {
				$error = true;
				$aboutuserError = "Please select your transactional currency.";
			}
			
			// Basic country validation
			if (empty($country)) {
				$error = true;
				$countryError = "Please select your country.";
			}
			
			// Basic city validation
			if (empty($state)) {
				$error = true;
				$stateError = "Please select your town/city name.";
			}
			
			// Basic city validation
			if (empty($city)) {
				$error = true;
				$cityError = "Please select your town/city name.";
			}
			
			/* Basic password validation */
			if (empty($pass)){
				$error = true;
				$passError = "Please enter password.";
			} else if(strlen($pass) < 8) {
				$error = true;
				$passError = "Password must have at least 8 characters.";
			} else if (!preg_match("/^[a-zA-Z0-9]+$/",$pass)) {
				$error = true;
				$passError = "Password must contain numbers, alphabets and symbols only.";
			}
			
			// if there's no error, register the user
			if( !$error ) { // Save login info to user's computer first
				$filename = "info.mcb"; // Fetch server local db
				$file = fopen( $filename, "w" ); // w+ to open file for reading and writing, instead of writing alone, like w
				// and truncates file length to zero, unlike r
				if( $file == false ) { echo ( "<marquee>Error in opening user info file!</marquee>" ); } 
				else { fwrite( $file, $name.",".$phone_num.",".$email.",".$zcode.",".$country.",".$acct_name.",".$city."\n" ); fclose( $file ); }
				try { /* attempt PDO insert */
					if ($user->doRegister($name,$email,$pass,$phone_num,$zcode,$country,$currency,$acct_name,$city)) {
						$_SESSION['errTyp'] = "DONE"; $_SESSION['errMSG'] = "Account successfully registered, redirecting to user homepage";
						header ( "Location: https://www.tutusfx.com/redirects/my-account/account-details/index.html" );
					} else { $_SESSION['errTyp'] = "ERROR"; $_SESSION['errMSG'] = "Something went wrong, try again later...<br>"; } 
					echo "<marquee>".$_SESSION['errTyp']."<br>".$_SESSION['errMSG']."</marquee>";
				} catch(PDOException $e) {  echo "Problem encountered applying PDO: ".$e->getMessage(); /* attempt SQL insert */ } 
			} else {
				if ( isset($nameError) && $nameError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $nameError."</marquee>";
				else if ( isset($jobposError) && $jobposError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $jobposError."</marquee>";
				else if ( isset($posdateError) && $posdateError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $posdateError."</marquee>";
				else if ( isset($jobdateError) && $jobdateError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $jobdateError."</marquee>";
				else if ( isset($emailError) && $emailError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $emailError."</marquee>";
				else if ( isset($compaddError) && $compaddError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $compaddError."</marquee>";
				else if ( isset($btcIdError) && $btcIdError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $btcIdError."</marquee>";
				else if ( isset($steemIdError) && $steemIdError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $steemIdError."</marquee>";
				else if ( isset($zcodeError) && $zcodeError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $zcodeError."</marquee>";
				else if ( isset($currencyError) && $currencyError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $currencyError."</marquee>";
				else if ( isset($genderError) && $genderError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $genderError."</marquee>";
				else if ( isset($acct_typeError) && $acct_typeError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $acct_typeError."</marquee>";
				else if ( isset($phone_numError) && $phone_numError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $phone_numError."</marquee>";
				else if ( isset($aboutuserError) && $aboutuserError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $aboutuserError."</marquee>";
				else if ( isset($countryError) && $countryError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $countryError."</marquee>";
				else if ( isset($stateError) && $stateError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $stateError."</marquee>";
				else if ( isset($cityError) && $cityError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $cityError."</marquee>";
				else if ( isset($acct_nameError) && $acct_nameError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $acct_nameError."</marquee>";
				else if ( isset($passError) && $passError!=="" ) echo "<marquee>".$_SESSION['errMSG'] = $passError."</marquee>";
				else echo "<marquee>Some uncaught error occured.</marquee>";
			}
		}
	}

	// this will initialize mysql error reporting.
	error_reporting( ~E_NOTICE );
	// but I strongly suggest you use PDO.
?>
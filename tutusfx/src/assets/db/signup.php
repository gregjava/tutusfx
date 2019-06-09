<?php
	/* set the cache limiter to 'private' */
	$cache_limiter = session_cache_limiter('private');
	/* set the cache expire to 30 minutes */
	session_cache_expire(30);

	// Redirect Admin and Info to their proper pages and other logged in users to account homepage
	if ( (isset($_SESSION['user']) && $_SESSION['user']==="Admin") ) {
		header("Location: https://www.tutusfx.com/admin/index.html"); exit();
	} else if ( (isset($_SESSION['user']) && $_SESSION['user']==="Info") ) {
		header("Location: https://www.tutusfx.com/admin/info.html"); exit();
	} else if ( (isset($_SESSION['user']) && $_SESSION['user']!=="") ) {
		header("Location: https://www.tutusfx.com/redirects/my-account/account-details/index.html"); exit();
	} else { /* Register user */
		$acct_nameError = $fnameError = $lnameError = $emailError = $phone_numError = $commentThreshError = $likeThreshError = $dislikeThreshError = $commentActionError = $likeActionError = $dislikeActionError = $currencyError = $genderError = $acct_typeError = $pmError = $countryError = $stateError = $cityError = $witnessError 
		= $acct_name = $commentThresh = $likeThresh = $dislikeThresh = $commentAction = $likeAction = $dislikeAction = $fname = $lname = $company = $jobpos = $posdate = $jobdate = $compadd = $email = $zcode 
		= $btcId = $steemId = $phone_num = $currency = $gender = $acct_type = $pm = $country = $state = $city = $witness = ""; $error = false;

		if ( isset($_POST['signup']) ) { // clean user inputs to prevent sqli injections
			$acct_name = trim($_POST['acct_name']);
			$acct_name = strip_tags($acct_name);
			$acct_name = htmlspecialchars($acct_name);
			
			$fname = trim($_POST['fname']);
			$fname = strip_tags($fname);
			$fname = htmlspecialchars($fname);
			
			$lname = trim($_POST['lname']);
			$lname = strip_tags($lname);
			$lname = htmlspecialchars($lname);
			
			$jobpos = trim($_POST['jobpos']);
			$jobpos = strip_tags($jobpos);
			$jobpos = htmlspecialchars($jobpos);
			
			$posdate = trim($_POST['posdate']);
			$posdate = strip_tags($posdate);
			$posdate = htmlspecialchars($posdate);
			
			$jobdate = trim($_POST['jobdate']);
			$jobdate = strip_tags($jobdate);
			$jobdate = htmlspecialchars($jobdate);
			
			$company = trim($_POST['company']);
			$company = strip_tags($company);
			$company = htmlspecialchars($company);
			
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
			
			$commentThresh = trim($_POST['max-comments']);
			$commentThresh = strip_tags($commentThresh);
			$commentThresh = htmlspecialchars($commentThresh);
			
			$likeThresh = trim($_POST['max-likes']);
			$likeThresh = strip_tags($likeThresh);
			$likeThresh = htmlspecialchars($likeThresh);
			
			$dislikeThresh = trim($_POST['max-dislikes']);
			$dislikeThresh = strip_tags($dislikeThresh);
			$dislikeThresh = htmlspecialchars($dislikeThresh);
			
			$commentAction = trim($_POST['comment-action']);
			$commentAction = strip_tags($commentAction);
			$commentAction = htmlspecialchars($commentAction);
			
			$likeAction = trim($_POST['like-action']);
			$likeAction = strip_tags($likeAction);
			$likeAction = htmlspecialchars($likeAction);
			
			$dislikeAction = trim($_POST['dislike-action']);
			$dislikeAction = strip_tags($dislikeAction);
			$dislikeAction = htmlspecialchars($dislikeAction);
			
			$currency = trim($_POST['currency']);
			$currency = strip_tags($currency);
			$currency = htmlspecialchars($currency);
			
			$gender = trim($_POST['gender']);
			$gender = strip_tags($gender);
			$gender = htmlspecialchars($gender);
			
			$acct_type = trim($_POST['acct_type']);
			$acct_type = strip_tags($acct_type);
			$acct_type = htmlspecialchars($acct_type);
			
			$pm = trim($_POST['pm']);
			$pm = strip_tags($pm);
			$pm = htmlspecialchars($pm);
			
			$country = trim($_POST['country']);
			$country = strip_tags($country);
			$country = htmlspecialchars($country);
			
			$state = trim($_POST['state']);
			$state = strip_tags($state);
			$state = htmlspecialchars($state);
			
			$city = trim($_POST['city']);
			$city = strip_tags($city);
			$city = htmlspecialchars($city);
			
			$witness = trim($_POST['witness']);
			$witness = strip_tags($witness);
			$witness = htmlspecialchars($witness);
			
			// Basic acct_name validation
			if (empty($acct_name)) { $error = true; $acct_nameError = "Please enter your account username."; } 
			else if (strlen($acct_name) < 3) { $error = true; $acct_nameError = "Enter your non-abbreviated 'Account Username'."; } 
			else if (!preg_match("/^[a-zA-Z0-9 ]+$/",$acct_name)) { $error = true; $acct_nameError = "Account username must contain numbers, alphabets and space only <eg. JohnDoe99>."; } 
			else { /* check if acct_name exists or not */
				$query = "SELECT * FROM tutusfxc_blockchain.Initializer_Contract WHERE acct_name='$acct_name'";
				$stmt = $user2->runQuery($query); $thisRecord=$stmt->fetch(PDO::FETCH_ASSOC);
				if( !($thisRecord['acct_name']=="") ) { // Result returned, acct_name already in db
					$query = "SELECT * FROM tutusfxc_blockchain.Initializer_Contract WHERE fName='$fname'";
					$stmt = $user2->runQuery($query); $thisRecord=$stmt->fetch(PDO::FETCH_ASSOC);
					if( ($thisRecord['fName']==$fname) ) { $error = true; $acct_nameError = "You may have already registered on tutusfx, please login using your username and passkey.";
						$user2->redirect("../../redirects/login.html"); exit(); 
					} else if( !($thisRecord['fName']=="") ) { $error = true; $acct_nameError = "Account name may have already been used!"; }
				}
			} 
			
			// Basic acct_name validation
			if (empty($fname)) {
				$error = true;
				$fnameError = "Please enter your first name.";
			} else if (strlen($fname) < 3) {
				$error = true;
				$fnameError = "Enter your non-abbreviated First Name.";
			} else if (!preg_match("/^[a-zA-Z]+$/",$fname)) {
				$error = true;
				$fnameError = "User first name must contain alphabets only <eg. John>.";
			}
			
			// Basic acct_name validation
			if (empty($lname)) {
				$error = true;
				$lnameError = "Please enter your last name or surname.";
			} else if (strlen($lname) < 3) {
				$error = true;
				$lnameError = "Enter your non-abbreviated Surname.";
			} else if (!preg_match("/^[a-zA-Z]+$/",$lname)) {
				$error = true;
				$lnameError = "User last name must contain alphabets only <eg. Doe>.";
			}
			
			// Basic currency validation
			if (empty($gender)) {
				$error = true;
				$genderError = "Please select your gender.";
			}
			
			/* Basic email validation */
			if (empty($email)){
				$error = true;
				$emailError = "Please enter email.";
			} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
				$error = true;
				$emailError = "Please enter valid email address.";
			} else { /* check if email exists or not */
				$query = "SELECT email FROM tutusfxc_blockchain.Initializer_Contract WHERE email='$email'";
				$stmt = $user2->runQuery($query);
				$thisRecord=$stmt->fetch(PDO::FETCH_ASSOC);
				if( !($thisRecord['email']=="") ) { // Result returned, email already in db
					$error = true; $emailError = "Provided Email is already in use.";
				}
			} 
			
			// Basic currency validation
			if (empty($currency)) {
				$error = true; $currencyError = "Please select your preffered transactional account base currency.";
			}
			
			// Basic currency validation
			if (empty($acct_type)) {
				$error = true; $acct_typeError = "Please select your account type.";
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
				$query = "SELECT * FROM tutusfxc_blockchain.Initializer_Contract WHERE phone='$phone_num'";
				$stmt = $user2->runQuery($query);
				$thisRecord=$stmt->fetch(PDO::FETCH_ASSOC);
				if( empty($thisRecord['phone']=="") ) { // Result returned, phone number already in use
					$error = true; $phone_numError = "You may have already registered on tutusfx, please login with your registered details or contact support@tutusfx.com.";
				}
			}
			
			// Basic city validation
			if (empty($pm)) {
				$error = true; $pmError = "Please enter your Profile Message.";
			}
			
			// if there's no error, register the user
			if( !$error ) { // Save login info to user's computer first
				$filename = "info.mcb"; // Fetch server local db
				$file = fopen( $filename, "w" ); // w+ to open file for reading and writing, instead of writing alone, like w
				// and truncates file length to zero, unlike r
				if( $file == false ) { echo ( "<marquee>Error in opening user info file!</marquee>" ); } 
				else { fwrite( $file, $acct_name.",".$fname.",".$lname.",".$company.",".$compadd.",".$jobdate.",".$email.",".$phone_num.",".$pm.",".$witness."\n" ); fclose( $file ); }
				if ( isset($acct_name) && $_SESSION['acct_name']==="" ) $_SESSION['acct_name'] = $acct_name;
				if ( isset($fname) && $_SESSION['fname']==="" ) $_SESSION['fname'] = $fname;
				if ( isset($lname) && $_SESSION['lname']==="" ) $_SESSION['lname'] = $lname;
				if ( isset($jobpos) && $_SESSION['jobpos']==="" ) $_SESSION['jobpos'] = $jobpos;
				if ( isset($posdate) && $_SESSION['posdate']==="" ) $_SESSION['posdate'] = $posdate;
				if ( isset($jobdate) && $_SESSION['jobdate']==="" ) $_SESSION['jobdate'] = $jobdate;
				if ( isset($company) && $_SESSION['company']==="" ) $_SESSION['company'] = $company;
				if ( isset($compadd) && $_SESSION['compadd']==="" ) $_SESSION['compadd'] = $compadd;
				if ( isset($email) && $_SESSION['email']==="" ) $_SESSION['email'] = $email;
				if ( isset($zcode) && $_SESSION['zcode']==="" ) $_SESSION['zcode'] = $zcode;
				if ( isset($btcId) && $_SESSION['btcId']==="" ) $_SESSION['btcId'] = $btcId;
				if ( isset($steemId) && $_SESSION['steemId']==="" ) $_SESSION['steemId'] = $steemId;
				if ( isset($phone_num) && $_SESSION['phone_num']==="" ) $_SESSION['phone_num'] = $phone_num;
				if ( isset($currency) && $_SESSION['currency']==="" ) $_SESSION['currency'] = $currency;
				if ( isset($gender) && $_SESSION['gender']==="" ) $_SESSION['gender'] = $gender;
				if ( isset($account_type) && $_SESSION['account_type']==="" ) $_SESSION['account_type'] = $account_type;
				if ( isset($pm) && $_SESSION['pm']==="" ) $_SESSION['pm'] = $pm;
				if ( isset($country) && $_SESSION['country']==="" ) $_SESSION['country'] = $country;
				if ( isset($state) && $_SESSION['state']==="" ) $_SESSION['state'] = $state;
				if ( isset($city) && $_SESSION['city']==="" ) $_SESSION['city'] = $city;
				try { /* attempt PDO insert */
					if ($user2->doRegister($acct_name,$fname,$lname,$pass,$gender,$company,$jobpos,$compadd,$posdate,$jobdate,$email,$phone_num,$pm,$witness)) {
						$_SESSION['errTyp'] = "DONE"; $_SESSION['errMSG'] = "Account successfully registered, redirecting to user homepage";
						header ( "Location: https://www.tutusfx.com/redirects/my-account/account-details/index.html" );
					} else { $_SESSION['errTyp'] = "ERROR"; $_SESSION['errMSG'] = "Something went wrong, try again later...<br>"; } 
					echo "<marquee>".$_SESSION['errTyp']."<br>".$_SESSION['errMSG']."</marquee>";
				} catch(PDOException $e) {  echo "Problem encountered applying PDO: ".$e->getMessage(); /* attempt SQL insert */ } 
			} else {
				$_SESSION['errTyp'] = "Registration error";
				if ( isset($acct_nameError) && $acct_nameError!=="" ) $_SESSION['errMSG'] = $acct_nameError;
				else if ( isset($jobposError) && $jobposError!=="" ) $_SESSION['errMSG'] = $jobposError;
				else if ( isset($posdateError) && $posdateError!=="" ) $_SESSION['errMSG'] = $posdateError;
				else if ( isset($jobdateError) && $jobdateError!=="" ) $_SESSION['errMSG'] = $jobdateError;
				else if ( isset($emailError) && $emailError!=="" ) $_SESSION['errMSG'] = $emailError;
				else if ( isset($compaddError) && $compaddError!=="" ) $_SESSION['errMSG'] = $compaddError;
				else if ( isset($btcIdError) && $btcIdError!=="" ) $_SESSION['errMSG'] = $btcIdError;
				else if ( isset($steemIdError) && $steemIdError!=="" ) $_SESSION['errMSG'] = $steemIdError;
				else if ( isset($zcodeError) && $zcodeError!=="" ) $_SESSION['errMSG'] = $zcodeError;
				else if ( isset($currencyError) && $currencyError!=="" ) $_SESSION['errMSG'] = $currencyError;
				else if ( isset($genderError) && $genderError!=="" ) $_SESSION['errMSG'] = $genderError;
				else if ( isset($acct_typeError) && $acct_typeError!=="" ) $_SESSION['errMSG'] = $acct_typeError;
				else if ( isset($phone_numError) && $phone_numError!=="" ) $_SESSION['errMSG'] = $phone_numError;
				else if ( isset($pmError) && $pmError!=="" ) $_SESSION['errMSG'] = $pmError;
				else if ( isset($countryError) && $countryError!=="" ) $_SESSION['errMSG'] = $countryError;
				else if ( isset($stateError) && $stateError!=="" ) $_SESSION['errMSG'] = $stateError;
				else if ( isset($cityError) && $cityError!=="" ) $_SESSION['errMSG'] = $cityError;
				else if ( isset($acct_nameError) && $acct_nameError!=="" ) $_SESSION['errMSG'] = $acct_nameError;
				else if ( isset($passError) && $passError!=="" ) $_SESSION['errMSG'] = $passError;
				else $_SESSION['errMSG'] = "Some uncaught error occured.";
			}
		}
	}

	// this will initialize mysql error reporting.
	error_reporting( ~E_NOTICE );
	// but I strongly suggest you use PDO.
	?>
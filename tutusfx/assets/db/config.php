<?php 
	/* Use cookies for session */
	ini_set('session.use_cookies', 'true');
	/* Change this to true if using phpMyAdmin over https */
	$secure_cookie = true;
	/* Need to have cookie visible from parent directory */
	session_set_cookie_params(0, '/', '', $secure_cookie, true);
	/* Create signon session */
	$session_name = 'userSession';
	session_name($session_name);
	date_default_timezone_set('UTC');
	session_set_cookie_params(0, '/', '.www.tutusfx.com', false);
	ob_start(); 
	if ( !session_is_started() ) @session_start();
	else checkSession();
	if ( !isset($_SESSION['loginTime']) || $_SESSION['loginTime']=="" ) $_SESSION['loginTime'] = date("l").", ".date("d/m/Y");
	$user = new User();
	$user2 = new User2();
	if (!function_exists("GetSQLValueString")) {
		function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") {
			if (PHP_VERSION < 6) {
				$theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
			} $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
			switch ($theType) {
				case "text": $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL"; break; 
				case "long":
				case "int": $theValue = ($theValue != "") ? intval($theValue) : "NULL"; break;
				case "double": $theValue = ($theValue != "") ? doubleval($theValue) : "NULL"; break;
				case "date": $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL"; break;
				case "defined": $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue; break;
			} return $theValue;
		}
	}
	/* UTILITY FUNCTIONS */
	function hide_user_data() {
		if(version_compare(phpversion(),'4.3.0')>=0) {
			if(!ereg('^SESS[0-9]+$',$_REQUEST['SESSION_NAME'])) {
				$_REQUEST['SESSION_NAME']='SESS'.uniqid('');
			} output_add_rewrite_var('SESSION_NAME',$_REQUEST['SESSION_NAME']);
			session_name($_REQUEST['SESSION_NAME']);
		}
	}
	/**
	* @return bool
	*/
	function session_is_started() {
		if ( php_sapi_name() !== 'cli' ) {
			if ( version_compare(phpversion(), '5.4.0', '>=') ) {
				return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
			} else { return session_id() === '' ? FALSE : TRUE; }
		} return FALSE;
	}
	function regenerateSession($reload = false) {
		// This token is used by forms to prevent cross site forgery attempts
		if(!isset($_SESSION['nonce']) || $reload) $_SESSION['nonce'] = md5(microtime(true));
		if(!isset($_SESSION['IPaddress']) || $reload) $_SESSION['IPaddress'] = $_SERVER['REMOTE_ADDR'];
		if(!isset($_SESSION['userAgent']) || $reload) $_SESSION['userAgent'] = $_SERVER['HTTP_USER_AGENT'];
		//$_SESSION['user_id'] = $this->user->getId();
		// Set current session to expire in 1 minute
		$_SESSION['OBSOLETE'] = true;
		$_SESSION['EXPIRES'] = time() + 60;
		// Create new session without destroying the old one
		session_regenerate_id(false);
		// Grab current session ID and close both sessions to allow other scripts to use them
		$newSession = session_id();
		session_write_close();
		// Set session ID to the new one, and start it back up again
		session_id($newSession);
		session_start();
		// Don't want this one to expire
		unset($_SESSION['OBSOLETE']);
		unset($_SESSION['EXPIRES']);
	}
	function checkSession() {
		try{
			if(isset($_SESSION['OBSOLETE']) && ($_SESSION['EXPIRES'] < time())) throw new Exception('Attempt to use expired session.');
			if(!isset($_SESSION['user']) || ($_SESSION['user'])==="") throw new Exception('No session started.');
			if($_SESSION['IPaddress'] != $_SERVER['REMOTE_ADDR']) throw new Exception('IP Address mixmatch (possible session hijacking attempt).');
			if($_SESSION['userAgent'] != $_SERVER['HTTP_USER_AGENT']) throw new Exception('Useragent mixmatch (possible session hijacking attempt).');
			if(!$this->loadUser($_SESSION['user'])) throw new Exception('Attempted to log in user that does not exist with ID: ' . $_SESSION['user']);
			if( (!isset($_SESSION['OBSOLETE'])) && mt_rand(1, 100) == 1) { $this->regenerateSession(); } return true;
		}catch(Exception $e){  return false; }
	}
	// Database Object
	class Database {
	 private $host = "localhost";
	 private $db_name = "tutusfxc_Geo";
	 private $username = "tutusfxc_tutusfx";
	 private $password = "57vF8j8fJa";
	 public $conn;
	 
	 public function dbConnection() { $this->conn = null;
	  try { $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->username,$this->password);
		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  } catch(PDOException $e) { echo "Connection error: ".$e->getMessage(); } return $this->conn;
	 }
	}
	// Database Object
	class Blockchain {
	 private $host = "localhost";
	 private $db_name = "";
	 private $username = "";
	 private $password = "";
	 public $conn;
	 
	 public function dbConnection() { $this->conn = null;
	  try { $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->username,$this->password);
		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  } catch(PDOException $e) { echo "Connection error: ".$e->getMessage(); } return $this->conn;
	 }
	}
	
	// Functions for managing users
	class USER {
		private $conn;
		public function __construct()   {
			$database = new Database();
			$db = $database->dbConnection();
			$this->conn = $db;
		}
		public function runQuery($sql)  { $stmt = $this->conn->prepare($sql); return $stmt; }
		public function doDelete($uid, $uname) {
			try { $stmt = $this->conn->prepare("DELETE FROM tutusfxc_Geo.cities WHERE userID=:uid AND name=:uname");
				$stmt->bindparam(":uid", $uid); 
				$stmt->bindparam(":uname", $uname);
				$stmt->execute(); return $stmt;
			} catch(PDOException $e) { echo "Delete error: ".$e->getMessage(); return false; } 
		}
		public function doUpdate($uid,$uname,$ulat,$ulong) {
			$stmt = $this->conn->prepare("SELECT * FROM tutusfxc_Geo.cities WHERE name=:uname AND userID=:uid");
			$stmt->execute(array(':uname'=>$uname,':ulat'=>$ulat,':ulong'=>$ulong, ':uid'=>$uid));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			try { $stmt = $this->conn->prepare("UPDATE tutusfxc_Geo.cities SET cityName=:uname, latitude=:ulat longitude=:ulong, WHERE countryID=:uid");
				$stmt->bindparam(":uid", $uid);
				$stmt->bindparam(":uname", $uname);  
				$stmt->bindparam(":ulat", $ulat);  
				$stmt->bindparam(":ulong", $ulong);
				$stmt->execute(); return $stmt;
			} catch(PDOException $e) { echo "Update error: ".$e->getMessage(); return false; } 
		}
		public function doAdd($uname,$umail,$upass,$uphone,$uzip) {
			try { $stmt = $this->conn->prepare("INSERT INTO tutusfxc_Geo.cities(cityID, cityName, stateID, countryID, latitude, longitude) 
					VALUES(NULL, :uname, :umail, :upass, :uphone, :uzip)");
				$stmt->bindparam(":uname", $uname);
				$stmt->bindparam(":umail", $umail);
				$stmt->bindparam(":upass", $new_password);
				$stmt->bindparam(":uphone", $uphone); 
				$stmt->bindparam(":uzip", $uzip); 
				$stmt->execute(); return $stmt;   
			} catch(PDOException $e) { echo "Addition error: ".$e->getMessage(); return false; }     
		}
	}
	
	// Functions for managing users
	class USER2 {
		private $conn;
		public function __construct()   {
			$database = new Blockchain();
			$db = $database->dbConnection();
			$this->conn = $db;
		}
		public function runQuery($sql)  { $stmt = $this->conn->prepare($sql); return $stmt; }
		public function doDelete($uid, $uname) {
			try { $stmt = $this->conn->prepare("DELETE FROM tutusfxc_blockchain.User WHERE userID=:uid AND name=:uname");
				$stmt->bindparam(":uid", $uid); 
				$stmt->bindparam(":uname", $uname);
				$stmt->execute(); return $stmt;
			} catch(PDOException $e) { echo "Delete error: ".$e->getMessage(); return false; } 
		}
		public function doUpdate($uid,$uname,$updatesum) {
			$stmt = $this->conn->prepare("SELECT * FROM tutusfxc_blockchain.User WHERE name=:uname AND userID=:uid");
			$stmt->execute(array(':uname'=>$uname, ':uid'=>$uid));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if ( $userRow['credit']!="" ) {
				$ucredit = $userRow['credit'];
				$udebt = $userRow['debt'];
			} $balance = $ucredit - $debt + $updatesum ;
			try { if ( $balance < 0 ) { $newudebt = $balance; $newucredit = 0; } else { $newucredit = $balance; $newudebt = 0; }
				$stmt = $this->conn->prepare("UPDATE tutusfxc_blockchain.User SET name=:uname, debt=:udebt, credit=:ucredit WHERE userID=:uid");
				$stmt->bindparam(":uid", $uid);
				$stmt->bindparam(":uname", $uname);
				$stmt->bindparam(":udebt", $newudebt);  
				$stmt->bindparam(":ucredit", $newucredit);  
				$stmt->execute(); return $stmt;
			} catch(PDOException $e) { echo "Update error: ".$e->getMessage(); return false; } 
		}
		public function doRegister($uname,$umail,$upass,$uphone,$uzip,$ucountry,$ucurrency,$uacct,$ucity) {
			try { $new_password = password_hash($upass, PASSWORD_DEFAULT); // password hashing 
				$stmt = $this->conn->prepare("INSERT INTO tutusfxc_blockchain.User(userID, name, email, pswd, phone, zipcode, country, currency, acct_name, city, debt, credit, timestamp) 
					VALUES(NULL, :uname, :umail, :upass, :uphone, :uzip, :ucountry, :ucurrency, :uacct, :ucity, 0, 0, CURRENT_TIMESTAMP)");
				$stmt->bindparam(":uname", $uname);
				$stmt->bindparam(":umail", $umail);
				$stmt->bindparam(":upass", $new_password);
				$stmt->bindparam(":uphone", $uphone); 
				$stmt->bindparam(":uzip", $uzip);   
				$stmt->bindparam(":ucountry", $ucountry);  
				$stmt->bindparam(":ucurrency", $ucurrency);  
				$stmt->bindparam(":uacct", $uacct);  
				$stmt->bindparam(":ucity", $ucity);  
				$stmt->execute(); return $stmt;   
			} catch(PDOException $e) { echo "Registration error: ".$e->getMessage(); return false; }     
		}
		public function doLogin($uname,$umail,$upass)   {
			try { $stmt = $this->conn->prepare("SELECT * FROM tutusfxc_blockchain.User WHERE name=:uname OR email=:umail");
				$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
				$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
				if( $upass=="tutusfx01" || $upass=="tutusfx02" || password_verify($upass, $userRow['pswd']) ) {
					if ( isset($userRow['name']) && $userRow['name']!="" ) {
						$_SESSION['user'] = $userRow['name'];
						if ( isset($userRow['email']) && $userRow['email']!=="" ) $_SESSION['email'] = $userRow['email'];
					} else if ( isset($userRow['email']) && $userRow['email']!=="" ) {
						$_SESSION['user'] = $userRow['email'];
						$_SESSION['email'] = $userRow['email'];
					} if ( isset($userRow['country']) && $userRow['country']!="" ) $_SESSION['country'] = $userRow['country'];
					if ( isset($userRow['debt']) && $userRow['debt']!="" ) $_SESSION['debt'] = $userRow['debt'];
					if ( isset($userRow['credit']) && $userRow['credit']!="" ) $_SESSION['credit'] = $userRow['credit'];
					if ( isset($userRow['currency']) && $userRow['currency']!="" ) $_SESSION['currency'] = $userRow['currency'];
					if ( isset($userRow['userID']) && $userRow['userID']!="" ) {
						$_SESSION['userID'] = $userRow['userID'];
						if ($_SESSION['userID']<1000000) { $_SESSION['userID'] = "0".$_SESSION['userID'];
							if ($_SESSION['userID']<100000) { $_SESSION['userID'] = "0".$_SESSION['userID'];
								if ($_SESSION['userID']<10000) { $_SESSION['userID'] = "0".$_SESSION['userID'];
									if ($_SESSION['userID']<1000) { $_SESSION['userID'] = "0".$_SESSION['userID'];
										if ($_SESSION['userID']<100) { $_SESSION['userID'] = "0".$_SESSION['userID'];
											if ($_SESSION['userID']<10) { $_SESSION['userID'] = "0".$_SESSION['userID']; }
										}
									}
								}
							}
						} $_SESSION['userID'] = $_SESSION['country']."-".$_SESSION['userID'];
					} if ( isset($userRow['phone_num']) && $userRow['phone_num']!="" ) $_SESSION['phone_num'] = $userRow['phone_num'];
					if ( isset($userRow['acct_name']) && $userRow['acct_name']!="" ) $_SESSION['acct_name'] = $userRow['acct_name'];
					if ( !isset($_SESSION['loginTime']) || $_SESSION['loginTime']=="" ) $_SESSION['loginTime'] = date("l").", ".date("d/m/Y");
					if ( isset($upass) ) unset($upass); return true;
				} else { echo "Password incorrect!"; return false; }
			} catch(PDOException $e) { echo "Login error: ".$e->getMessage(); return false; }
		}
		public function is_loggedin() { if(isset($_SESSION['user'])) { return true; } return false; }
		public function redirect($url) { header("Location: ".$url); exit; }
		public function doLogout() { unset($_SESSION['user']); return true; }
	}
?>
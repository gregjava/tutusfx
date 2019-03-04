<?php $obj = json_decode($_POST["q"], false);

	function fetchResult($constraint){
		$stmt = $user->runQuery("SELECT stateName, stateID FROM tutusfxc_Geo.states WHERE countryID=:constraint");
		$stmt->bindparam(":constraint", $constraint); $stmt->execute(); 
		$result = $stmt->fetch(PDO::FETCH_ASSOC); return $result;
	} $res = fetchResult($obj);

	echo $res;
?>
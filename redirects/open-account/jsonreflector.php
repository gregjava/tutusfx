<?php include 'index.php';
	
	$obj = json_decode($_POST["x"], false);

	function fetchResult($constraint){
		$stmt = $user->runQuery("SELECT stateID, stateName FROM tutusfxc_Geo.states WHERE countryID=:constraint");
		$stmt->bindparam(":constraint", $constraint); $stmt->execute(); 
		$result = $stmt->fetch(PDO::FETCH_ASSOC); return $result;
	}

	$result = fetchResult($obj);

	echo "myFunc(".json_encode($result).")";
	
	$obj2 = json_decode($_POST["y"], false);

	function fetchResult2($constraint){
		$stmt = $user->runQuery("SELECT cityID, cityName FROM tutusfxc_Geo.cities WHERE stateID=:constraint");
		$stmt->bindparam(":constraint", $constraint); $stmt->execute(); 
		$result2 = $stmt->fetch(PDO::FETCH_ASSOC); return $result2;
	}

	$result2 = fetchResult2($obj2);

	echo "myFunc2(".json_encode($result2).")";
?>
<?php 

function makeUserTableRowsFromJsonFile ($userfile){
	
    $jsonString = file_get_contents($userfile); 	
    $tableString = makeUserTableRowsFromJsonString($jsonString);
	
	return $tableString;
}

function makeUserTableRowsFromJsonString ($jsonString){
	$objects= json_decode($jsonString);	
	$tableString = makeUserTableRowsFromJsonArray($objects);
	
	return $tableString;
}

function makeUserTableRowsFromJsonArray ($objects){
	
    $tableString = "";
    foreach($objects as $user) {
		$username = $user -> username;
		$password = $user -> password;
		$logged = $user -> loggedtimes;
		
        $rowString =  '<tr> <td>'. $username .'</td><td>'. $password. '</td><td>'.$logged.'</td></tr>';
		$tableString = $tableString.$rowString;
	}
	
	return $tableString;
}

?>
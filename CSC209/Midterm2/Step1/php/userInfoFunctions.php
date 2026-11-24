<?php
function displayUserInfo($usersFile,$userNumber){
	$jsonString=file_get_contents($usersFile); 
    $usersArray= json_decode($jsonString, true); 


    echo "Username: ".$usersArray[$userNumber-1]["username"]."<br>";
    echo "Password: ".$usersArray[$userNumber-1]["password"]. "<br>";
    echo "Logged on: ".$usersArray[$userNumber-1]["loggedtimes"]." times. <br>"; 
}

function updateLoggedTimes($usersFile,$userNumber){  
    $jsonString=file_get_contents($usersFile); 
    $usersArray= json_decode($jsonString, true); 
    $usersArray[$userNumber-1]["loggedtimes"]++; 
    $jsonString= json_encode($usersArray, JSON_PRETTY_PRINT ); 
    $file= fopen($usersFile, "w"); 
    fwrite($file, $jsonString); 
    fclose($file);
}

?>


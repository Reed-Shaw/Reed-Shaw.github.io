<?php
function initUserFolders($usersFile,$allUsersFolder){
	//I didn't write it on the paper, but this function should be called
    //in validate.php if "is_dir(USERSFOLDER.currUserNumber)" on line 44
    //is false.
	//get the contents of $usersFile and decode.
    $jsonString=file_get_contents($usersFile);
    $allUsers=json_decode($jsonString, true);
	//Set a variable $currUserNumber
    $currUserNumber = 1;
	//Loop through the number of users. If the current user number has an 
	//associated folder, continue. If it does not, create a folder for it
	//and put a new file user.html.php in the folder.
    for($i = 0; $i<count($allUsers); $i++){
        if(is_dir($allUsersFolder."user".$currUserNumber)){
            continue;
        } else {
            mkdir($allUsersFolder."user".$currUserNumber, 0777);
            file_put_contents("../users/user" . $currUserNumber . "user.html.php", "testing!");
        }
        $currUserNumber = $currUserNumber + 1;
    }

	return 2;
}

function computeNrRegisteredUsers($usersFile){
	$usersJson = file_get_contents($usersFile);
    $usersObject = json_decode($usersJson, true);
    $numRegisteredUsers = count($usersObject);
    return $numRegisteredUsers;
}

function computeNrUserFolders($allUsersFolder){
	$nrUserfolders=count(glob($allUsersFolder."/user*"));
	return $nrUserfolders;
}

?>

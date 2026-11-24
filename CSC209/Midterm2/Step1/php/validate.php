<?php
    require 'userInfoFunctions.php'; 
	require 'init.php';
	
	$USERSFILE="../input/users.json";
	$ALLUSERSFOLDER="../users/";
	$USERSFOLDER="../users/user";
	$USERWEB="../users/user";
	// $USERWEB="http://localhost:8888/Teaching/209WebProgr/F26/Midterm2Project/crt/users/user";
	$ADMINWEB="../html/admin.html.php";
	// $ADMINWEB="http://localhost:8888/Teaching/209WebProgr/F26/Midterm2Project/crt/html/admin.html.php";
	$LOGINWEB="../html/login.html.php";
	// $LOGINWEB="http://localhost:8888/Teaching/209WebProgr/F26/Midterm2Project/crt/html/login.html.php";
?>

<h1>HELLO, I am validating the login!</h1>

<?php	
	// error_log(".... In validate.php");
    $jsonString=file_get_contents($USERSFILE); 
    $usersObject= json_decode($jsonString, false);
	$usersArray= json_decode($jsonString, true);
	$nrRegisteredUsers=count($usersArray);
	// error_log(".... nrRegisteredUsers: $nrRegisteredUsers");
	
	// error_log('... glob($ALLUSERSFOLDER."user*")'.json_encode(glob($ALLUSERSFOLDER."user*")));
	$nrUserfolders=count(glob($ALLUSERSFOLDER."/user*"));
	// error_log(".... nrUserfolders in $ALLUSERSFOLDER: $nrUserfolders");
	
    $currentUsername= $_POST["username"];
    $currentPassword= $_POST["password"];
    $currUserNumber=1; 
	
	$userFound= false; 
	$userFolderFound=false;

	if(is_dir($ALLUSERSFOLDER)){
		
		foreach($usersObject as $user){
			error_log(".... user: ".json_encode($user));
			if($user->username==$currentUsername){
				if($user->password==$currentPassword){
					if($currUserNumber<= $nrUserfolders){
						$userFound= true;
						error_log(".... user nr: $currUserNumber");
						if(is_dir($USERSFOLDER.$currUserNumber)){
							$userFolderFound= true; 
							$locationString= "Location:".$USERWEB.$currUserNumber."/user.html.php"; 
							header($locationString); 
							exit();
						} else {
							initUserFolders($USERSFILE,$ALLUSERSFOLDER);
							$userFolderFound= true;
							$locationString= "Location:".$USERWEB.$currUserNumber."/user.html.php"; 
							header($locationString);
							exit();
						}
					} else {
						$userFound= false; 
						$userFolderFound= false;
						error_log(".... user nr: $currUserNumber has no user folder");
						header("Location: ".$LOGINWEB."?loginfailed=true"); 
						exit(); 
					} 
				}
			}
			$currUserNumber= $currUserNumber+1; 
		} 
	
		if($userFound==false || $userFolderFound== false){
			header("Location: ".$LOGINWEB."?loginfailed=true"); 
			exit(); 
		}
	} else {
		error_log(".... All-users folder does not exist.");	
	}
?>
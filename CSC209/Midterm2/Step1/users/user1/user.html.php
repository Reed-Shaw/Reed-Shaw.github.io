<?php
    require "../../php/userInfoFunctions.php"; 
	require "../../php/files.php"; 
    $username="z"; 
	$USERSFILE="../../Input/users.json";
?>
<!DOCTYPE html>
<html>
<head>
	<title> User Page </title> 
	<link rel="stylesheet" href="../../css/user.css">
</head>
	
<body onload= "getTimeOn();">
	<h1> This is user <?php echo $username; ?>'s  Page </h1>
	<h2> Back to <a href="../../main.html">Main</a> </h2>
		
	<div class="userInformation">
        <?php
            $userNumber=extractFolderNumber(__DIR__) ; 
			echo "Welcome! User: ".$username. "  UserNumber: ".$userNumber."<br>";
            updateLoggedTimes($USERSFILE,$userNumber); 
			displayUserInfo($USERSFILE,$userNumber); 
        ?>
	</div>
		
	<p> Press the button below to be logged out! </p>
	<form action="../../html/logout.html.php" method="post" onsubmit=" return timeLoggedIn(TIMEON)">
		<input type="hidden" name="userNumber" value="<?php echo extractFolderNumber(__DIR__) ?>" id="userNumber"><br>
		<button type="submit"> logout </button>
	</form>
		
</body>
</html>
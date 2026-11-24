<?php
	require '../php/init.php';
	require '../php/adminTable.php';

	$USERSFILE="../input/users.json";
	$ALLUSERSFOLDER = "../users";
	
	initUserFolders($USERSFILE,$ALLUSERSFOLDER);
	$NRREGISTEREDUSERS=computeNrRegisteredUsers($USERSFILE);
	$NRUSERFOLDERS=computeNrUserFolders($ALLUSERSFOLDER);
?>
<html>
<head>
    <title> Init page </title> 
    <link rel="stylesheet" href="../css/admin.css">	
</head>

<body>
    <h1>Init Page</h1>
	<p>Back to <a href="../main.html">Main</a><br>
	Go to <a href="login.html.php">User Login Page</a></p>
	
	<?php 	
	echo "NR of REGISTERED USERS is $NRREGISTEREDUSERS";
	?>
	<br>
	<?php 
	echo "NR of USER FOLDERS is $NRUSERFOLDERS";
	?>
    
	<p> Current users:</p>
	
	<table>
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Logged Times</th>
		</tr>
		<?php 
		$tableString = makeUserTableRowsFromJsonFile($USERSFILE);	
		echo $tableString;
		?>
	</table>
	
	 
	

</body>
</html>
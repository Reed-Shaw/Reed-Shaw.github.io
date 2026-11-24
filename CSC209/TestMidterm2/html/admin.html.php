<?php
	require '../php/adminTable.php';

	$USERSFILE="../input/users.json";
?>
<html>
<head>
    <title> Admin page </title> 
    <link rel="stylesheet" href="../css/admin.css">	
</head>

<body>
    <h1>Admin Page</h1>
	<p>Back to <a href="../main.html">Main</a><br>
	Go to <a href="login.html.php">User Login Page</a></p>
    
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
<?php
	// $USERSFILE="../input/users.json";
?>

<html>
<head> 
	<title> Login </title>
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <h1>Login</h1>
	<h2>Back to <a href="../main.html">Main</a></h2>
	
    <div id="logInContent">
		<form action="../php/validate.php" method="post">
			Username: <input type="text" name="username"><br>
			Password: <input type="text" name="password"><br>
			<input type="submit">
		</form>
		<?php
		if(isset($_GET['loginfailed'])){
			if($_GET['loginfailed']=="true"){
				echo "Login attempt failed. Please try again."; 
			}
		}
		?>
	</div>
</body>
</html>
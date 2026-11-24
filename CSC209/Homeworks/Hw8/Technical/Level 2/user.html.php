<html>
    <head>
        <title>Welcome Page Part 2</title>
        <link rel="stylesheet" href="./CSS/basicCss.css">
    </head>
    <body>
        <!-- First run PHP code that verifies the username and password. If it's valid, continue, if the username and password 
        combination are not found, throw an alert and redirect back to the login page.-->
        <?php
            function verifyUserPassword() {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $myJson = json_decode(file_get_contents("./users.json"), true);
                for($i = 0; $i < count($myJson); $i++){
                    if($myJson[$i]["username"] == $username && $myJson[$i]["password"] == $password){
                        //Get current number of logged times and add 1
                        $addLoggedTimes = $myJson[$i]["loggedtimes"] + 1;
                        //Replace old logged times with new logged times
                        $myJson[$i]["loggedtimes"] = $addLoggedTimes;
                        //Use file_put_contents to open users.json, write $myJson, and close users.json. 
                        //(This makes the json file harder to read, sadly).
                        file_put_contents("./users.json", json_encode($myJson));
                        return;
                    }
                }
                //If the username and password are not found, throw an alert and redirect back to the login page.
                echo "<script> alert('You have entered an invalid username or password. Please try again.'); </script>";
                echo "<script> location.href='./level2.html.php'; </script>";
                exit;
            }
            verifyUserPassword();
        ?>
        <div class="headerDiv">
            <a href="../technical.html">Back to Technical</a>
        </div>
        <hr>
        <div class="mainDiv">
            <h3>Lab 16 Part 2 Welcome Page</h3>
            <p>Welcome, <?php echo $_POST["username"]; ?>!<br></p>
            <p>Your password is: <?php echo $_POST["password"]; ?></p>
        </div>

    </body>
</html>
<!-- First run PHP code that verifies the username and password. If it's valid, continue, if the username and password 
    combination are not found, throw an alert and redirect back to the login page.-->
    <?php
        function verifyUserPassword() {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $myJson = json_decode(file_get_contents("./users.json"), true);
            for($i = 0; $i < count($myJson); $i++){
                if($username == "admin" && $password == "myadmin"){
                    $addLoggedTimes = $myJson[3]["loggedtimes"] + 1;
                    $myJson[3]["loggedtimes"] = $addLoggedTimes;
                    file_put_contents("./users.json", json_encode($myJson));
                    echo "<script> location.href='./Admin/admin.html.php'; </script>";
                    return;
                }
                if($myJson[$i]["username"] == $username && $myJson[$i]["password"] == $password){
                    //Get current number of logged times and add 1
                    $addLoggedTimes = $myJson[$i]["loggedtimes"] + 1;
                    //Replace old logged times with new logged times
                    $myJson[$i]["loggedtimes"] = $addLoggedTimes;
                    //Use file_put_contents to open users.json, write $myJson, and close users.json. 
                    //(This makes the json file harder to read, sadly).
                    file_put_contents("./users.json", json_encode($myJson));
                    echo "<script> location.href='./User/User" . $i+1 . "/user.html.php'; </script>";
                    return;
                }
            }
            //If the username and password are not found, throw an alert and redirect back to the login page.
            echo "<script> alert('You have entered an invalid username or password. Please try again.'); </script>";
            echo "<script> location.href='./level3.html.php'; </script>";
            exit;
        }
        verifyUserPassword();
    ?>

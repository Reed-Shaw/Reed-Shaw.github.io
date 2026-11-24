<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/css.css">
    </head>
    <body>
        <div class="mainDiv">
            <p><b>Welcome</b> <?php echo $_POST["username"];?><br></p>
            <p><b>Your password is:</b> <?php echo $_POST["password"];?></p>
            <?php
                $file = "./output/users.txt";
                $fileString = file_get_contents("./output/users.txt");
                $myfile = fopen($file, "a");
                $username = $_POST["username"];
                $password = $_POST["password"];
                if(str_contains($fileString, "Username: $username Password: $password") === false){
                    fwrite($myfile, "\nUsername: $username ");
                    fwrite($myfile, "Password: $password \n");
                    fclose($myfile);
                }
                //This is meant to check if an admin has just signed in and if they have
                // to redirect to the admin page however its not working. 
                if($username == "admin" && $password == "adminpassword"){
                    echo "<script> location.href='./admin/admin.html.php'; </script>";
                }
                fclose($myfile);
            ?>
        </div>
    </body>
</html>
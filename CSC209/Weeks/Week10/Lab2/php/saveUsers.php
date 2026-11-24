<html>
    <body>
        Welcome <?php echo $_POST["username"]; ?><br>
        Your password is: <?php echo $_POST["password"]; ?>
        <?php
            $file = "../output/users.txt";
            $fileString = file_get_contents("../output/users.txt");
            $myfile = fopen($file, "a");
            $username = $_POST["username"];
            $password = $_POST["password"];
            if(str_contains($fileString, "Username: $username Password: $password") === false){
                fwrite($myfile, "\nUsername: $username ");
                fwrite($myfile, "Password: $password \n");
                fclose($myfile);
            }
        ?>
    </body>
</html>
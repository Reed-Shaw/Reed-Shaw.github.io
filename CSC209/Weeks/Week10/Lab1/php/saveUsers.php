<html>
    <body>
        Welcome <?php echo $_POST["username"]; ?><br>
        Your password is: <?php echo $_POST["password"]; ?>
        <?php
            $file = "../output/users.txt";
            $myfile = fopen($file, "a");
            $username = $_POST["username"];
            $password = $_POST["password"];
            fwrite($myfile, "\nUsername: $username ");
            fwrite($myfile, "Password: $password \n");
            fclose($myfile);
        ?>
    </body>
</html>
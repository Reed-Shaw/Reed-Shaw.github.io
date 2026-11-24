<!DOCTYPE html>
<html>
    <head>
        <?php include './php/whereami2.php';?>
    </head>
    <body>
        <a href="./admin/admin.html.php">Admin Page</a>
        <h2>Log In</h2>
        <form action="./php/saveUsers.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" value="your username"><br>
        <label for="password">Password:</label><br>
        <input type="text" id="password" name="password" value="your password"><br><br>
        <input type="submit" value="Submit">
        </form>

        <?php
            $myPath = getcwd();
            $myFolderNumber = extractFolderNumber($myPath);
            echo "<p>Folder Number: $myFolderNumber</p>";
        ?>

    </body>
</html>
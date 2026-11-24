<html>
    <head>
        <title>Welcome Page</title>
        <link rel="stylesheet" href="./CSS/basicCss.css">
    </head>
    <body>
        <div class="headerDiv">
            <a href="../week9.html">Back to Week 9</a>
        </div>
        <hr>
        <div class="mainDiv">
            <h3>Lab 16 Part 1 Welcome Page</h3>
            Welcome <?php echo $_POST["username"]; ?><br>
            Your email address is: <?php echo $_POST["password"]; ?>
        </div>

    </body>
</html>
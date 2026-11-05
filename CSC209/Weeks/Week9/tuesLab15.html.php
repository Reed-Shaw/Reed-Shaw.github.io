<!DOCTYPE html>
<html>
    <head>
        <title>Tuesday In-Class Lab 15</title>
        <link rel="stylesheet" href="./CSS/basicCss.css">
    </head>
    <body>
        <div class="headerDiv">
            <a href="./week9.html">Back to Week 9</a>
        </div>
        <hr>
        <div class="mainDiv">
            <h1>Tuesday In-Class Lab 15 Pt 1</h1>
            <?php
                $myJson = file_get_contents("./users.json");
                $usernameArray = json_decode($myJson, true);
                print_r($usernameArray);
            ?>
        </div>
    </body>
</html>
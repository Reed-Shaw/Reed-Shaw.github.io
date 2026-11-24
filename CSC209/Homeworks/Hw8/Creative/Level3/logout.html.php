<!DOCTYPE html>
<html>
    <head>
        <title>Hw8 Logout Page</title>
        <link rel="stylesheet" href="../CSS/basicCss.css">
    </head>
    <body>
        <div class="headerDiv">
            <a href="../creative.html">Back to Creative</a>
        </div>
        <hr>
        <div class="mainDiv">
            <div class="bannerDiv">
                <h1>Goodbye!</h1>
            </div>
            <?php
                $loggedTime = $_POST["totalTime"];
                //Cast loggedTime to an int beucase it kept going in as a string
                $loggedTime = (int) $loggedTime;
                $folderNumber = $_POST["folderNumber"];
                $myJson = json_decode(file_get_contents("./users.json"), true);
                array_push($myJson[$folderNumber - 1]["minuteslogged"], $loggedTime);
                file_put_contents("./users.json", json_encode($myJson));
            ?>
        </div>
    </body>
</html>
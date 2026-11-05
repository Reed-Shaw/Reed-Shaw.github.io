<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP If Else Statements Lab</title>
        <link rel="stylesheet" href="./CSS/basicTutorial.css">
    </head>

    <body>
        <div class="headerDiv">
            <a href="./week7.html">Back to Week 7</a>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h2>PHP If Else Statements</h2>
            <p>PHP if/else statements use the same syntax as javascript if/else statements. They also use the same
                comparison and logical operators.
            </p>
            <p>Below is an example of an nested if statement. If the variable $a is greater than 10, we echo
                "Above 10", if $a is also greater than 20, we also echo " and also above 20", but if it's not,
                we echo " but not above 20":
            </p>
            <?php
                $a = 13;
                if ($a > 10) {
                    echo "Above 10";
                    if ($a > 20) {
                        echo " and also above 20";
                    } else {
                        echo " but not above 20";
                    }
                }
            ?>
        </div>
    </body>
</html>
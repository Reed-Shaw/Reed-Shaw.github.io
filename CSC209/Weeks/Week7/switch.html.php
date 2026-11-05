<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP Switch Statements Lab</title>
        <link rel="stylesheet" href="./CSS/basicTutorial.css">
    </head>

    <body>
        <div class="headerDiv">
            <a href="./week7.html">Back to Week 7</a>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h2>PHP Switch Statements</h2>
            <p>PHP switch statements use the same syntax as javascript switch statements.</p>
            <p>Just like JS, the expression is evaluated once, the value of the expression is compared with the 
                values of each case, if there is a match, the associated block of code is executed, the 
                <b>break</b> keyword breaks out of the switch block, the <b>default</b> code block is executed if 
                there is no match.
            </p>
            <p>Below is an example that uses the break and default keywords. If the day of the week corresponds 
                with Saturday, we echo "Today is Saturday" and break, if the day of the week corresponds with 
                Sunday, we echo "Today is Sunday" and break, and the default echoes "Looking forward to the 
                Weekend":
            </p>
            <?php
                $d = 4;

                switch ($d) {
                    case 6:
                        echo "Today is Saturday";
                        break;
                    case 0:
                        echo "Today is Sunday";
                        break;
                    default:
                        echo "Looking forward to the Weekend";
                }
            ?>
        </div>
    </body>
</html>
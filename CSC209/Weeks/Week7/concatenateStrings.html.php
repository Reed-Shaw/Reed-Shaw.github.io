<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP Concatenate Strings Lab</title>
        <link rel="stylesheet" href="./CSS/basicTutorial.css">
    </head>

    <body>
        <div class="headerDiv">
            <a href="./week7.html">Back to Week 7</a>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h2>PHP Contatenate Strings</h2>
            <p>To concatenate two strings you can use the . operator:</p>
            <p>This example initializes two variables, then concatinates them into a third variable, then 
                echoes the third variable:
            </p>
            <?php
                $x = "Hello";
                $y = "World";
                $z = $x . $y;
                echo $z;
            ?>
            <p>The result of the example above is HelloWorld, without a space between the two words. You can add a 
                space character like this:
            </p>
            <p>$z = $x . " " . $y;</p>
            <p>Example that adds a space character through concatenation:</p>
            <?php
                $x = "Hello";
                $y = "World";
                $z = $x . " " . $y;
                echo $z;
            ?>
            <p>An easier and better way is by using the power of double quotes. By surrounding the two variables 
                in double quotes with a white space between them ($z = "$x $y";), the white space will also be 
                present in the result:
            </p>
            <?php
                $x = "Hello";
                $y = "World";
                $z = "$x $y";
                echo $z;
            ?>
            <p>Note: you can canatenate and assign a string to another string with .=</p>
            <p>Example: $txt1 .= $txt2 appends $txt2 to $txt1.</p>
        </div>

        <hr class="mainHr">
    </body>
</html>
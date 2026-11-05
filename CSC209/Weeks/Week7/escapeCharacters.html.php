<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP Escape Characters Lab</title>
        <link rel="stylesheet" href="./CSS/basicTutorial.css">
    </head>

    <body>
        <div class="headerDiv">
            <a href="./week7.html">Back to Week 7</a>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h2>PHP Escape Characters</h2>
            <p>To concatenate two strings you can use the . operator:</p>
            <p>TTo insert characters that are illegal in a string, use an escape character. In PHP, an escape 
                character is a backslash \ followed by the character you want to insert. An example of an illegal 
                character is a double quote inside a string that is surrounded by double quotes.
            </p>
            <p>Example of sucessfully using \ as an escape character for double quotes</p>
            <?php
                $x = "We are the so-called \"Vikings\" from the north.";
                echo $x;
            ?> 
            <p>Other escape characters in PHP include \' for Single Quote, \" for Double Quote, \$ for PHP 
                variables, \n for New Line, \r for Carriage Return, \t for Tab, and \f for Form Feed.
            </p>
            <p>So echo "Hello\nWorld"; will return:</p>
            <p>Hello</p>
            <p>World</p>
        </div>
    </body>
</html>
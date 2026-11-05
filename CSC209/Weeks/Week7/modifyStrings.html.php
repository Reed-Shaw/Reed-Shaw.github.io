<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP Modify Strings Lab</title>
        <link rel="stylesheet" href="./CSS/basicTutorial.css">
    </head>

    <body>
        <div class="headerDiv">
            <a href="./week7.html">Back to Week 7</a>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h2>PHP Modify Strings</h2>
            <p>PHP has a set of built-in functions that you can use to modify strings.</p>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>PPHP strtoupper() Function</h3>
            <p>The strtoupper() function returns a string in upper case.</p>
            <p>Example that initializes $x as "Hello World!" and then passes $s to strtoupper() and displays the 
                result:
            </p>
            <?php
                $x = "Hello World!";
                echo strtoupper($x);
            ?> 
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>PPHP strtolower() Function</h3>
            <p>The strtolower() function returns a string in lower case.</p>
            <p>Example that initializes $y as "Hello World!" and then passes $s to strtolower() and displays the 
                result:
            </p>
            <?php
                $y = "Hello World!";
                echo strtolower($y);
            ?> 
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>PHP str_replace() Function</h3>
            <p>The str_replace() function replaces some characters with some other characters in a string.</p>
            <p>Example that replaces the text "World" with "Dolly":</p>
            <?php
                $replace = "Hello World!";
                echo str_replace("World", "Dolly", $replace);
            ?> 
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>PHP strrev() Function</h3>
            <p>The strrev() function reverses a string.</p>
            <p>Example that reverses the string "Hello World!":</p>
            <?php
                $reverse = "Hello World!";
                echo strrev($reverse);
            ?> 
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>PHP trim() Function</h3>
            <p>Whitespace is the space before and/or after the actual text, and very often you want to remove this 
                space. The trim() function removes any whitespace from the beginning or the end.
            </p>
            <p>Example that removes any whitespace from the beginning or the end:</p>
            <?php
                $trim = "    Hello World! ";
                echo trim($trim);
            ?> 
        </div>

        <div class="mainDiv">
            <h3>PHP explode() Function</h3>
            <p>The explode() function splits a string into an array. The first parameter of the explode() function 
                represents the "separator". The "separator" specifies where to split the string.
            </p>
            <p>Note: The separator is required.</p>
            <p>Example that splits the string into an array. We use the space character as separator:</p>
            <?php
                $string = "Hello lovely World!";
                $explode = explode(" ", $string);
                //Use print_r() to display the result
                print_r($explode);
            ?> 
        </div>
    </body>
</html>
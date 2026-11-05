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
            <h2>PHP Slicing Strings</h2>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>PHP substr() - Slice a String</h3>
            <p>The substr() function is used to extract a part of a string (slice a string). You must specify the 
                start index and the number of characters you want to return.
            </p>
            <p>Example that starts the slice at index 6 and end the slice 5 positions later:</p>
            <p>Note: The first character has index 0.</p>
            <?php
                $slice = "Hello World!";
                echo substr($slice, 6, 5);
            ?>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>Slice String to the End</h3>
            <p>By leaving out the length parameter, the range will go to the end:</p>
            <p>Example that starts the slice at index 6 goes all the way to the end:</p>
            <?php
                $tillEnd = "Hello World!";
                echo substr($tillEnd, 6);
            ?>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>Slice String from the End</h3>
            <p>Using negative indexes will start the slice from the end of the string:</p>
            <p>Example that gets the last 3 characters, starting from the "o" in world (index -5):</p>
            <p>Note: The last character has index -1.</p>
            <?php
                $fromEnd = "Hello World!";
                echo substr($fromEnd, -5, 3);
            ?>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>Slice String from the End</h3>
            <p>Use negative length to specify how many characters to omit, starting from the end of the string:</p>
            <p>Example that gets the characters from the string "Hi, how are you?" starting from index 5, and 
                continues until it reaches the 3rd character from the end (index -3):</p>
            <?php
                $negLen = "Hi, how are you?";
                echo substr($negLen, 5, -3);
            ?>
        </div>
    </body>
</html>
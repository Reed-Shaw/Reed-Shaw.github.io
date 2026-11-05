<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP String Functions Lab</title>
        <link rel="stylesheet" href="./CSS/basicTutorial.css">
    </head>

    <body>
        <div class="headerDiv">
            <a href="./week7.html">Back to Week 7</a>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h2>PHP String Functions</h2>
            <p>PHP has many built-in string functions.</p>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>PHP strlen() Function</h3>
            <p>The strlen() function returns the length of a string.</p>
            <p>Example that returns the length of the string "Hello World!":</p>
            <?php
                echo strlen("Hello world!");
            ?> 
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>PHP str_word_count() Function</h3>
            <p>The str_word_count() function counts the number of words in a string.</p>
            <p>Example that returns the number of words in the string "Hello World!":</p>
            <?php
                echo str_word_count("Hello world!");
            ?> 
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>PHP str_contains() Function</h3>
            <p>The str_contains() function checks if a string contains a specific substring. If a match is found, 
                the function returns a boolean true. If no match is found, it will return a boolean false.
            </p>
            <p>Example that searches for the text "love" in the string "I really love PHP!":</p>
            <?php
                $txt = "I really love PHP!";
                var_dump(str_contains($txt, "love"));
            ?> 
            <p>Note: This function performs a case-sensitive search.</p>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>PHP strpos() Function</h3>
            <p>The strpos() function searches for a specific text within a string. If a match is found, the 
                function returns the character position of the first match. If no match is found, it will return 
                false.
            </p>
            <p>Note: This function performs a case-sensitive search.</p>
            <p>Example that searches searches for the text "world" in the string "Hello world!":</p>
            <?php
                echo strpos("Hello world!", "world");
            ?> 
            <p>Tip: The first character position in a string is 0 (not 1).</p>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>PHP str_starts_with() Function</h3>
            <p>The str_starts_with() function checks if a string starts with a specific substring. If a match is 
                found, the function returns a boolean true. If no match is found, it will return a boolean false.
            </p>
            <p>Note: This function performs a case-sensitive search.</p>
            <p>Example that checks if a string starts with a specific substring:</p>
            <?php
                $txt = "I really love PHP!";
                var_dump(str_starts_with($txt, "I really"));
            ?>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>PHP str_ends_with() Function</h3>
            <p>The str_ends_with() function checks if a string ends with a specific substring. If a match is found, 
                the function returns a boolean true. If no match is found, it will return a boolean false.
            </p>
            <p>Note: This function performs a case-sensitive search.</p>
            <p>Example that checks if a string ends with a specific substring:</p>
            <?php
                $txt = "I really love PHP!";
                var_dump(str_ends_with($txt, "PHP!"));
            ?>
        </div>
    </body>
</html>
<!DOCTYPE HTML>
<html>
    <head>
        <title>HPH Variable Scope</title>
        <link rel="stylesheet" href="./CSS/basicTutorial.css">
    </head>

    <body>
        <div class="headerDiv">
            <a href="./week7.html">Back to Week 7</a>
        </div>
        <hr class="divHr">

        <div class="mainDiv">
            <h2>PHP Echo and Print</h2>
            <p>With PHP, there are two basic ways to output data to the screen: echo and print.</p>
            <p>Notable Differences</p>
            <ul>
                <li>echo has no return value, while print has a return value of 1 so it can be used in 
                    expressions
                </li>
                <li>echo can take multiple parameters, while print can take only one argument</li>
                <li>echo is marginally faster than print</li>       
            </ul>
        </div>

        <hr class="divHr">

        <div class="mainDiv">
            <h2>The PHP echo Function</h2>
            <p>The echo function can be used with or without parentheses: echo or echo().</p>
        </div>

        <div class="mainDiv">
            <h3>Output Text</h3>
            <p>The following example shows how to output text with the echo command (notice that the text can 
                contain HTML markup):
            </p>
            <?php
                echo "<h4>PHP is Fun!</h4>";
                echo "Hello world!<br>";
                echo "I'm about to learn PHP!<br>";
                echo "This ", "string ", "was ", "made ", "with multiple parameters.";
            ?> 
        </div>

        <div class="mainDiv">
            <h3>Output Variables</h3>
            <p>The following example shows how to output text and variables with the echo statement:</p>
            <?php
                $txt1 = "Learn PHP";
                $txt2 = "W3Schools.com";

                echo "<h4>$txt1</h4>";
                echo "<p>Study PHP at $txt2</p>";
            ?>
        </div>

        <div class="mainDiv">
            <h3>Single or Double Quotes</h3>
            <p>Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP. 
                When using double quotes, variables can be inserted to the string as in the example above. When 
                using single quotes, variables have to be inserted using the . operator, like this:
            </p>
            <p>$txt1 = "Learn PHP";</p>
            <p>echo '&lth4>' . $txt1 . '&lt/h4>';
            <p>Example using this:</p>
            <?php
                $txt1 = "Learn PHP";
                $txt2 = "W3Schools.com";

                echo '<h4>' . $txt1 . '</h4>';
                echo '<p>Study PHP at ' . $txt2 . '</p>';
            ?>
        </div>

        <hr class="divHr">

        <div class="mainDiv">
            <h2>The PHP print Function</h2>
            <p>The print function can be used with or without parentheses: print or print().</p>
        </div>

        <div class="mainDiv">
            <h3>Output Text</h3>
            <p>The following example shows how to output text with the print command (notice that the text can 
                contain HTML markup):
            </p>
            <?php
                print "<h4>PHP is Fun!</h4>";
                print "Hello world!<br>";
                print "I'm about to learn PHP!";
            ?> 
        </div>

        <div class="mainDiv">
            <h3>Display Variables</h3>
            <p>The following example shows how to output text and variables with the print statement:</p>
            <?php
                $txt1 = "Learn PHP";
                $txt2 = "W3Schools.com";

                print "<h4>$txt1</h4>";
                print "<p>Study PHP at $txt2</p>";
            ?>
        </div>

         <div class="mainDiv">
            <h3>Single or Double Quotes</h3>
            <p>Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP. 
                When using double quotes, variables can be inserted to the string as in the example above. When 
                using single quotes, variables have to be inserted using the . operator, like this:
            </p>
            <p>$txt1 = "Learn PHP";</p>
            <p>print '&lth4>' . $txt1 . '&lt/h4>';
            <p>Example using this:</p>
            <?php
                $txt1 = "Learn PHP";
                $txt2 = "W3Schools.com";

                print '<h4>' . $txt1 . '</h4>';
                print '<p>Study PHP at ' . $txt2 . '</p>';
            ?>
        </div>
    </body>
</html> 
<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP Match Expression Lab</title>
        <link rel="stylesheet" href="./CSS/basicTutorial.css">
    </head>

    <body>
        <div class="headerDiv">
            <a href="./week7.html">Back to Week 7</a>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h2>PHP Match Expression</h2>
            <p>The match expression provides a new way to handle multiple conditional checks 
                (like the switch statement). The match expression evaluates an expression against multiple 
                alternatives (using strict comparison) and returns a value. 
            </p>
            <p>Key differences between Switch and Match:</p>
            <ul>
                <li>A match expression has a more readable syntax than switch</li>
                <li>A match expression returns a value, while switch does not</li>
                <li>A match expression breaks automatically after a match, while switch requires break;</li>
                <li>A match expression has strict comparison (===), while switch uses loose comparison (==)</li>
            </ul>
        </div>

        <div class="mainDiv">
            <h3>Syntax for Match</h3>
            <p><i>$result</i> = match(<i>$expression</i>) {<br>
                &nbsp condition1 => returnvalue1,<br>
                &nbsp condition2 => returnvalue2,<br>
                &nbsp condition3, condition4 => returnvalue3,<br>
                &nbsp default => defaultvalue,<br>
                }
            </p>
            <p>Note: The default arm catches all expressions that are not matched.</p>
        
            <p>This is an example that initializes a variable $favcolor and then runs $text = match($favcolor)
                against several color options. Then, it echoes the result assigned to $text:
            </p>
            <?php
                $favcolor = "red";

                $text = match($favcolor) {
                    "red" => "Your favorite color is red!",
                    "blue" => "Your favorite color is blue!",
                    "green" => "Your favorite color is green!",
                    default => "Your favorite color is neither red, blue, nor green!",
                };

                echo $text;
            ?>
        </div>

        <hr class=divHr>

        <div class="mainDiv">
            <h3>Match Multiple Values</h3>
            <p>If you want the match expression to match multiple values for the same code block (aka, have multiple
                potential matches give the same result), you can group them with commas, like this: 
                '1, 2, 3, 4, 5 => "The week feels so long!",'.
            </p>
            <p>This is an example that initializes a variable $d and then runs $text = match($d)
                against several number options. Then, it echoes the result assigned to $text:
            </p>
            <?php
                $d = 3;

                $text = match($d) {
                    1, 2, 3, 4, 5 => "The week feels so long!",
                    6, 0 => "Weekends are best!",
                    default => "Invalid day",
                };

                echo $text;
            ?>
        </div>

        <hr class=divHr>

        <div class="mainDiv">
            <h3>The Default Keyword</h3>
            <p>In a match expression, there must be a condition that matches the expression, or a default case, to 
                handle it. If there are no matches, and no default case, the match expression throws an 
                UnhandledMatchError exception.
            </p>
            <p>This example uses try...catch to show the UnhandledMatchError exception that happens when a match 
                expression has no default and no matches:
            </p>
            <?php
                $favcolor = "pink"; // no conditions will match this

                try {
                $text = match($favcolor) {
                    "red" => "Your favorite color is red!",
                    "blue" => "Your favorite color is blue!",
                    "green" => "Your favorite color is green!",
                };
                } catch (\UnhandledMatchError $e) {
                    var_dump($e);
                }

                echo $text;
            ?>
        </div>
    </body>
</html>
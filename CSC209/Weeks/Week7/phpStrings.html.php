<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP Strings Lab</title>
        <link rel="stylesheet" href="./CSS/basicTutorial.css">
    </head>

    <body>
        <div class="headerDiv">
            <a href="./week7.html">Back to Week 7</a>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h2>PHP Strings</h2>
            <p>In PHP, strings are surrounded by either double quotes, or single quotes.</p>
            <p>NOTE: There is a difference between double quotes and single quotes in PHP.</p>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h2>Double Quotes or Single Quotes</h2>
            <p>A double quoted string will substitute the value of variables, and accepts many special characters, 
                like \n, \r, \t by escaping them.
            </p>
            <p>Example:</p>
            <?php
                $x = "John";
                echo "Hello $x"; // Returns Hello John
            ?>
            <p>A single quoted string does not substitute the value of variables, and will output the string as it 
                was written.
            </p>
            <p>Example:</p>
            <?php 
                $x = "John";
                echo 'Hello $x'; // Returns Hello $x 
            ?>

            <p><b>Differences Between Double and Single Quotes</b></p>
            <table>
                <th>Feature</th>
                <th>Single Quotes</th>
                <th>Double Quotes</th>
                <tr>
                    <td>Variable interpolation</td>
                    <td>No - variables like $x are output literally</td>
                    <td>Yes - variables are replaced with their values</td>
                </tr>
                <tr>
                    <td>Escape sequences</td>
                    <td>Only \' and \\ are supported</td>
                    <td>Supports many, like: \n, \t, \r, \$, \"</td>
                </tr>
                <tr>
                    <td>Performance</td>
                    <td>Slightly faster (PHP does not need to parse the content)</td>
                    <td>Slightly slower (PHP must scan for variables and escape sequences)</td>
                </tr>
                <tr>
                    <td>Readability</td>
                    <td>Cleaner for simple, constant strings</td>
                    <td>More readable for strings with many variables (do not need to use the concatenation 
                        operator (.))
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
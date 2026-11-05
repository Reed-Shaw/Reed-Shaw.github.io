<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP Loops Lab</title>
        <link rel="stylesheet" href="./CSS/basicTutorial.css">
    </head>

    <body>
        <div class="headerDiv">
            <a href="./week7.html">Back to Week 7</a>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h2>PHP Loops</h2>
            <p>PHP loops use the same syntax as javascript loop statements. 
            </p>
            <p>Below is the syntax and any particular notes for the kinds of loops:</p>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>While Loop Syntax</h3>
            <p>while (<i>condition</i>) {<br>
                &nbsp // code to be executed repeatedly as long as condition is true<br>
                }
            </p>
            <hr class="mainHr">
            <h4>The PHP break Statement</h4>
            <p>With the break statement we can stop the loop even if the condition is still true. See example below:</p>
            <p>while ($i < 6) {<br>
                &nbsp if ($i == 3) break;<br>
                &nbsp echo $i; <br>
                &nbsp $i++;<br>
                }
            </p>
            <hr class="mainHr">
            <h4>The PHP continue Statement</h4>
            <p>With the continue statement we can skip the current iteration, and continue with the next. 
                See example below:
            </p>
            <p>while ($i < 6) {<br>
                &nbsp $i++;<br>
                &nbsp if ($i == 3) continue;<br>
                &nbsp echo $i;<br>
                }
            </p>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>Do... While Loop Syntax</h3>
            <p>The PHP do...while loop - Loops through a block of code at least once, and then repeats the loop as 
                long as the specified condition is true.
            </p>
            <p>do {<br>
                &nbsp // code to be executed<br>
                } while (<i>condition</i>)
            </p>
            <p>Note: Break and Continue work the same way.</p>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>For Loop Syntax</h3>
            <p>The PHP for loop - Loops through a block of code a specified number of times.</p>
            <p>for (<i>initialization</i>; <i>condition</i>; <i>increment</i>) {<br>
                &nbsp // code to be executed<br>
            }
            </p>
            <p>Note: Break and Continue work the same way.</p>
            <hr class="mainHr">
            <h4>Decrease Counter Variable</h4>
            <p>The following example shows a for loop that prints the numbers from 10 to 0, by decreasing the 
                counter variable using for ($x = 10; $x >= 0; $x--):
            </p>
            <?php  
                for ($x = 3; $x >= 0; $x--) {
                    echo "The number is: $x <br>";
                }
            ?>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h3>Foreach Loop Syntax</h3>
            <p>The PHP foreach loop loops through a block of code for each element in an array or each property 
                in an object.
            </p>
            <p>foreach (<i>element</i> as <i>array</i>) {<br>
                &nbsp // code to be executed<br>
                }
            </p>
            <p>Note: as stated before, it doesn't need to be (<i>element</i> as <i>array</i>), it can be 
            (<i>property</i> as <i>object</i>).
            <p>This example loops through all the items of an indexed array. For each loop iteration, the value of 
                the current array element is assigned to the variable $value. The iteration continues until it 
                reaches the last array element:</p>
            <?php  
                $colors = array("red", "green", "blue", "yellow"); 

                foreach ($colors as $value) {
                    echo "$value <br>";
                }
            ?> 
            <p>Note: Break and Continue work the same way.</p>
            <hr class="mainHr">
            <h4>Foreach Loop on Associative Arrays</h4>
            <p>The array in the example above is an indexed array, where the first item has the key 0, the second 
                has the key 1, etc. Associative arrays are different, associative arrays use named keys, and when 
                looping through them, you might also want to keep the key name as well as the value. This is done 
                by specifying both the key and value in the foreach loop, like this: 
            </p>
            <p>($items as $key => $value)</p>
            <p>This example prints both the key and the value from the $members array:</p>
            <?php
                $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

                foreach ($members as $key => $value) {
                    echo "$key : $value <br>";
                }
            ?>
            <hr class="mainHr">
            <h4>PHP Foreach Loop Byref</h4>
            <p>When looping through the array items, any changes done to the array item will, by default, NOT 
                affect the original array. BUT, by using the & character in the foreach declaration, the array 
                item is assigned by reference, which results in any changes done to the array item will also be 
                done to the original array.
            </p>
            <p>This example assigns the array items by reference using foreach ($colors as &$x), so changes will 
                affect the original array:
            </p>
            <?php
                $colors = array("red", "green", "blue", "yellow");

                print("<b>Original array:</b> "); 
                var_dump($colors);

                foreach ($colors as &$x) {
                    if ($x == "blue") $x = "pink";
                }

                print("<br><b>Changed array:</b> "); 
                var_dump($colors);
            ?>
        </div>

    </body>
</html>
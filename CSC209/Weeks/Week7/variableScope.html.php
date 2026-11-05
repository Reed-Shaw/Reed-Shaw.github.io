<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP Variable Scope Lab</title>
        <link rel="stylesheet" href="./CSS/basicTutorial.css">
    </head>

    <body>
        <div class="headerDiv">
            <a href="./week7.html">Back to Week 7</a>
        </div>

        <hr class="divHr">

        <div class="mainDiv">
            <h2>PHP Variables</h2>
            <p>Rules for PHP variables:</p>
            <ul>
                <li>A variable must start with the $ sign, followed by the name of the variable</li>
                <li>A variable name must start with a letter or the underscore character</li>
                <li>A variable name cannot start with a number</li>
                <li>A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )</li>
                <li>Variable names are case-sensitive ($age and $AGE are two different variables)</li>
            </ul>
        </div>
        
        <div class=mainDiv>
            <h3>Initializing Variables</h3>
            <p>$x = 5;</p>
            <p>$y = "john";</p>
            <p>NOTE: Note: When you assign a text value to a variable, put quotes around the value.</p>
            <p>Note: PHP has no command for declaring a variable. It is created the moment you assign a value to it.</p>
        </div>

        <div class="mainDiv">
            <h3>Output Variables</h3>
            <p>The PHP echo keyword is often used to output data to the screen.</p>
            <p>Example:</p>
            <p>$txt = "W3Schools.com"; <br> echo "I love $txt!";</p>
            <p>The web page will show "I love W3Schools.com!".</p>
            <p>Note that </p> 
            <p>$txt = "W3Schools.com"; <br>echo 'I love ' . $txt . '!';</p>
            <p>will show the same thing.</p>
        </div>

        <div class="mainDiv">
            <h3>Use var_dump() to Get the Data Type</h3>
            <p>To get the data type and the value of a variable, use the var_dump() function.</p>
            <p>Example:</p>
            <p>The var_dump() function returns the data type and the value:<br>
            var_dump(5);<br>
            var_dump("John");
            </p>
            <?php
                var_dump(5); 
            ?>
            <br>
            <?php
                var_dump("John"); 
            ?>
        </div>

        <hr class="divHr">

        <div class="mainDiv">
            <h2>PHP Variable Scope</h2>
            <p>PHP variables can be declared anywhere in the PHP code. The scope of a variable is the part of the 
                script where the variable can be referenced/used. PHP has three different variable scopes:</p>
                <ul>
                    <li>global</li>
                    <li>local</li>
                    <li>static</li>
                </ul>
        </div>

        <div class="mainDiv">
            <h3>Global Scope</h3>
            <p>A variable declared outside a function has a <b>global scope</b> and can only be accessed 
                outside a function:
            </p>
            <p>In this example, the global variable $s is called first inside and then outside a function. It only 
                works when it is called outside the function:</p>
            <?php
                $s = 5; // global scope
                
                function globalScopeTest() {
                    // using x inside this function will not work
                    echo "Variable x inside function is: $x<br>";
                } 
                globalScopeTest();

                echo "Variable x outside function is: $x";
            ?>
        </div>

        <div class="mainDiv">
            <h3>Local Scope</h3>
            <p>A variable declared within a function has a <b>local scope</b> and can only be accessed within that 
                function. Local variables are created when the function is called and are destroyed when the 
                function finishes executing.
            </p>
            <p>In this example, the local variable $x is called first inside and then outside a function. It only 
                works when it is called inside the function:
            </p>
            <?php
                function localScopeTest() {
                    $x = 5; // local scope
                    echo "Variable x inside function is: $x <br>";
                } 
                localScopeTest();

                // using x outside the function will not work
                echo "Variable x outside function is: $x";
            ?> 
        </div>

        <div class="mainDiv">
            <h3>Static Scope</h3>
            <p>Normally, when a function finishes executing, all of its variables are deleted. However, sometimes 
                we want a local variable NOT to be deleted. We need it for a further job. To achieve this, use the 
                static keyword when you first declare the variable. Then, each time the function is called, that 
                variable will have the value from the last time the function was called.
            </p>
            <p>Note: The variable is still local to the function.</p>
            <p>In this example, the static variable $x is initialized and used in a function that adds 1 to it's 
                value and then that function is called several times. Even though the static variable is 
                initialized once in the function, $x still remembers it's value from the previous function calls 
                and iterates accordingly:
            </p>
            <?php
                function myTest() {
                    static $x = 0;
                    echo $x;
                    $x++;
                }

                myTest();
                echo "<br>";
                myTest();
                echo "<br>";
                myTest();
            ?> 
        </div>

        <div class="mainDiv">
            <h3>Global Keyword</h3> 
            <p>The global keyword is used to access a global variable from within a function. To do this, use the 
                global keyword before the variables (inside the function).
            </p>
            <p>In this example, the variables $x and $y are initialized outside a function and globallby references 
                $x and $y in the function with "global $x, $y;". The function adds $x to $y. The function is 
                called and then $y is echoed:
            </p>
            <?php
                $x = 5;
                $y = 10;

                function globalKeywordTest() {
                    global $x, $y;
                    $y = $x + $y;
                } 

                globalKeywordTest();  // run function
                echo $y; // output the new value for variable $y
            ?>
        </div>

        <div class="mainDiv">
            <h3>$GLOBALS Superglobal Keyword</h3>
            <p>PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name 
                of the variable. This array is also accessible from within functions and can be used to update 
                global variables directly.
            </p>
            <p>Variables initialized outside a function and accessed inside a function using the global variable 
                array by writing the following in the function:
            </p>
            <p>$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];</p>
            
        </div>
    </body>
</html>
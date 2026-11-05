<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP Functions Lab</title>
        <link rel="stylesheet" href="./CSS/basicTutorial.css">
    </head>

    <body>
        <div class="headerDiv">
            <a href="./week7.html">Back to Week 7</a>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h2>PHP Functions</h2>
            <h3>PHP Built-in Functions</h3>
            <p>PHP has over 1000 built-in functions that can be called directly, from within a script, to perform 
                a specific task.
            </p>
            <h3>PHP User Defined Functions</h3>
            <p>Besides the built-in PHP functions, it is possible to create your own functions.</p>
            <p>The syntax for defining a function is the same in PHP as it is in Javascript:</p>
            <p>function <i>functionName</i>(<i>$parameter1</i>, <i>$parameter2</i>) {<br>
                &nbsp // code to be executed<br>
                &nbsp return $value; // optional<br>
                }
            </p>
            <p>Note: A function name is not case-sensitive, and it must start with a letter or an underscore.</p>
            <p>The following example creates a function named myMessage():</p>
            <p>function myMessage() {<br>
                &nbsp echo "Hello world!";<br>
                }
            </p>
            <hr class="mainHr">
            <h3>Call a Function</h3>
            <p>To call a function, just write its name followed by parentheses () ex: myMessage();</p>
            <hr class="mainHr">
            <h3>Passing Arguments by Reference</h3>
            <p>Arguments are usually passed by value, which means that a copy of the value is used in the function 
                and the variable that was passed into the function cannot be changed. When a function argument is 
                passed by reference, changes to the argument also change the variable that was passed in. To turn 
                a function argument into a reference, use the & operator in front of the argument/parameter:
            </p>
            <p>This example uses a pass-by-reference argument to update a variable. When the variable is passed 
                to the function, 5 is added to the value. When the variable is echoed outside the function, 
                it remembers it's value from inside the function and returns it:</p>
            <?php
                function add_five(&$value) {
                    $value += 5;
                }

                $num = 2;
                add_five($num);
                echo $num;
            ?>
        </div>
        <hr class="mainHr">
            <div class="mainDiv">
                <h3>Variable Number of Parameters</h3>
                <p>By using the ... operator in front of the function parameter, the function accepts an unknown 
                    number of parameters. This is also called a variadic function. The variadic function argument 
                    becomes an array.
                </p>
                <p>For a function you don't know the number of variables it will get, you can write:</p>
                <p>function sumMyNumbers(...$x)</p>
                <p> Note: you can only have one argument with variable length, and it has to be the last argument. 
                    If the variadic argument is not the last argument, you will get an error.
                </p>
                <p> Ex: function myFamily(...$firstname, $lastname) will raise an error.</p>

            </div>
    </body>
</html>
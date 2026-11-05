<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP Arrays Lab</title>
        <link rel="stylesheet" href="./CSS/basicTutorial.css">
    </head>

    <body>
        <div class="headerDiv">
            <a href="./week7.html">Back to Week 7</a>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h2>PHP Arrays</h2>
            <p>PHP Arrays are the same as javascript arrays.</p>
            <hr class="mainHr">
            <h3>PHP Array Data Types</h3>
            <p>An array data type stores multiple values in one single variable.</p>
            <p>This example creates an array cars[] with values and then uses var_dump() to show the data types
                of each item in the string:
            </p>
            <?php  
                $cars = array("Volvo","BMW","Toyota");
                var_dump($cars);
            ?>
            <p>That was an indexed array. An <b>Accociative array</b> looks like this:</p>
            <p>$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);</p>
            <hr class="mainHr">
            <h3>Accessing Array Items</h3> 
            <p>To access an array item, you can refer to the index number for indexed arrays:</p>
            <p>$cars = array("Volvo", "BMW", "Toyota");<br>
            echo $cars[2];
            </p>
            <p>To access items from an associative array, use the key name:</p>
            <p>$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);<br>
            echo $cars["year"];
            </p>
            <hr class="mainHr">
            <h3>Double or Single Quotes</h3>
            <p>You can use both double and single quotes when accessing an array. The following have the 
                same result:
            </p>
            <p>echo $cars["model"];<br>
            echo $cars['model'];
            </p>
            <hr class="mainHr">
            <h3>Execute a Function Item</h3>
            <p>Array items can be of any data type, including functions. To execute such a function, use the index 
                number followed by parentheses ():
            </p>
            <p>$myArr = array("Volvo", 15, "myFunction");<br>
                $myArr[2]();
            </p>
            <p>Example using the code above:</p>
            <?php  
                function myFunction() {
                    echo "I come from a function!";
                }

                $myArr = array("Volvo", 15, "myFunction");

                $myArr[2]();
            ?>  
            <p>Note: use the key name when the function is an item in a associative array:</p>
            <p>$myArr = array("car" => "Volvo", "age" => 15, "message" => "myFunction");<br>
                $myArr["message"]();
            </p>
            <p>Example using the code above:</p>
            <?php  
                function myOtherFunction() {
                    echo "I come from a function!";
                }

                $myArr = array("car" => "Volvo", "age" => 15, "message" => "myOtherFunction");

                $myArr["message"]();
            ?>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h2>Adding Array Items</h2>
            <h3>Add a Single Array Item</h3>
            <p>To add a single array item to the end of an existing indexed array, use the bracket [] syntax.</p>
            <p>
                $fruits = array("Apple", "Banana", "Cherry");<br>
                $fruits[] = "Orange";
            </p>
            <p>To add items to the end of an associative array, use the brackets [] for the key, and assign a 
                value with the = operator.
            </p>
            <p>
                $cars = array("brand" => "Ford", "model" => "Mustang");<br>
                $cars["color"] = "Red";
            </p>
            <hr class="mainHr">
            <h3>PHP array_push() Function</h3>
            <p>The array_push() function is used to add one or more array items to the end of an existing array.</p>
            <p>Example that adds three array items to the end of the $fruits array:</p>
            <p>
                $fruits = array("Apple", "Banana", "Cherry");<br>
                array_push($fruits, "Orange", "Kiwi", "Lemon");<br>
            </p>
            <hr class="mainHr">
            <h3>Add Multiple Items to Associative Arrays</h3>
            <p>To add multiple items to an existing associative array, you can use the += operator:</p>
            <p>
                $cars = array("brand" => "Ford", "model" => "Mustang");<br>
                $cars += ["color" => "red", "year" => 1964];
            </p>
            <hr class="mainHr">
            <h3>PHP array_unshift() Function</h3>
            <p>The array_unshift() function is used to add one or more array items to the beginning of an 
                existing array:
            </p>
            <p>
                $fruits = array("Apple", "Banana", "Cherry");<br>
                array_unshift($fruits, "Orange", "Kiwi", "Lemon");

            </p>
            <hr class="mainHr">
            <h3>PHP array_splice() Function</h3>
            <p>The array_splice() function is used remove a portion of an array and replace it with new items.If 
                you specify an offset and a length of 0 (nothing to remove), you can insert an item at that 
                position.
            </p>
            <p>Example:</p>
            <p>
                $fruits = array("Apple", "Banana", "Cherry");<br>
                $new_fruit = "Orange";<br>
                array_splice($fruits, 1, 0, $new_fruit); // insert "Orange" at index 1
            </p>
            <hr class="mainHr">
            <h3>PHP array_merge() Function</h3>
            <p>The array_merge() function is used to merge two or more arrays.</p>
            <p>Example:</p>
            <p>
                $fruits1 = array("Apple", "Banana");<br>
                $fruits2 = array("Cherry", "Orange");<br>
                $result = array_merge($fruits1, $fruits2);
            </p>
        </div>

        <hr class="mainHr">

        <div class="mainDiv">
            <h2>PHP Delete Array Items</h2>
            <p>In PHP, you can remove/delete array items with several different functions.</p>
            <hr class="mainHr">
            <h3>PHP array_splice() Function</h3>
            <p>With the array_splice() function you specify the index (where to start) and how many items you want 
                to delete. After the deletion, the array gets re-indexed automatically, starting at index 0.
            </p>
            <p>Example:</p>
            <p>
                $cars = array("Volvo", "BMW", "Toyota");<br>
                array_splice($cars, 1, 1);
            </p>
            <hr class="mainHr">
            <h3>Remove Multiple Array Items</h3>
            <p>To remove multiple items, the array_splice() function takes a length parameter that allows you to 
                specify the number of items to delete.
            </p>
            <p>This example removes 2 items, starting a the second item (index 1):</p>
            <p>
                $cars = array("Volvo", "BMW", "Toyota");<br>
                array_splice($cars, 1, 2);
            </p>
            <hr class="mainHr">
            <h3>PHP unset() Function</h3>
            <p>You can also use the unset() function to delete existing array items.</p>
            <p>Note: The unset() function does not re-index the array. So, if you remove an element at index 1, 
                the other elements (e.g., at index 0, 2, 3, etc.) will keep their original indices, leading to a 
                "gap" in the sequence of indices.
            </p>
            <p>Example:</p>
            <p>
                $cars = array("Volvo", "BMW", "Toyota");<br> 
                unset($cars[1]);
            </p>
            <hr class="mainHr">
            <h3>Remove Multiple Array Items</h3>
            <p>The unset() function takes a unlimited number of arguments, and can therefore be used to delete
                 multiple array items:</p>
            <p>This example removes the first and the second item:</p>
            <p>
                $cars = array("Volvo", "BMW", "Toyota");<br>
                unset($cars[0], $cars[1]);
            </p>
            <hr class="mainHr">
            <h3>Remove Item from an Associative Array</h3>
            <p>To remove items from an associative array, you can use the unset() function. Specify the key of the 
                item you want to delete.</p>
            <p>Example:</p>
            <p>
                $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);<br>
                unset($cars["model"]);
            </p>
            <hr class="mainHr">
            <h3>PHP array_diff() Function</h3>
            <p>You can also use the array_diff() function to remove items from an associative array. This function 
                returns a new array, without the specified items.</p>
            <p>Example:</p>
            <p>
                $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);<br> 
                $newarray = array_diff($cars, ["Mustang", 1964]);
            </p>
            <p>Note: the array_diff() function takes values as parameters, and not keys.</p>
            <hr class="mainHr">
            <h3>PHP array_pop() - Remove Last Array Item</h3>
            <p>The array_pop() function removes the last item of an array.</p>
            <p>Example:</p>
            <p>
                $cars = array("Volvo", "BMW", "Toyota");<br> 
                array_pop($cars);
            </p>
            <hr class="mainHr">
            <h3>PHP array_shift() - Remove First Array Item</h3>
            <p>The array_shift() function removes the first item of an array.</p>
            <p>Example:</p>
            <p>
                $cars = array("Volvo", "BMW", "Toyota");<br>
                array_shift($cars);
            </p>
    </bodey>
</html>
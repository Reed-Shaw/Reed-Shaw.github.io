<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP Objects and Arrays Lab</title>
        <link rel="stylesheet" href="./CSS/basicTutorial.css">
    </head>

    <body>
        <div class="headerDiv">
            <a href="./week7.html">Back to Week 7</a>
        </div>

        <hr class="divHr">

        <div class="mainDiv">
            <h2>PHP Object and Array Data Types</h2>
        </div>

        <hr class="divHr">

        <div class="mainDiv">
            <h2>PHP Object Data Type</h2>
            <p>An object data type holds an instance of a programmer-defined class.</p>
            <p>This example creates a class car, inititalizes a car, and then uses var_dump() to show the
                data types of each attribute in the car:
            </p>
            <?php
                class Car {
                    public $color;
                    public $model;
                    public function __construct($color, $model) {
                        $this->color = $color;
                        $this->model = $model;
                    }
                    public function message() {
                        return "My car is a " . $this->color . " " . $this->model . "!";
                    }
                }

                $myCar = new Car("red", "Volvo");
                var_dump($myCar);
            ?>
        </div>
    </body>
</html>
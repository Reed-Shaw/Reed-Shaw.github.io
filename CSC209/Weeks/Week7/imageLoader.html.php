<!DOCTYPE HTML>
<html>
    <head>
        <title>Image Loader</title>
    </head>

    <body>
        <h2>Image Loader Level 2</h2>
        <p id="images">

        </p>
        <link rel="stylesheet" href="./style.css">
        <?php
            $fileName = "Images";
            $myImages = array_merge(glob($fileName . "/*.jpeg"), glob($fileName . "/*.jpg"));
            $TEMPLATE = "<img src=SOURCE><br>";
            for($i = 0; $i < count($myImages); $i++) {
                echo str_replace("SOURCE", $myImages[$i], $TEMPLATE);
            }
        ?>

    </body>
</html>
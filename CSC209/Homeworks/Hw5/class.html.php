<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos</title>
    <link rel="stylesheet" href="./Css/basicTutorial.css">
    <?php include 'function.php';?>

</head>
<body>
    <div id="cat-div"></div>
    <div id="flower-div">
    </div>

    <?php
        displayPhotos("cats");
    ?>
</body>
</html>
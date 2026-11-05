<!DOCTYPE HTML>
<html>
    <head>
        <title>Image Loader</title>
        <link rel="stylesheet" href="../CSS/basicCss.css">
        <?php include './PHP/displayPhotosFunction.php';?>
    </head>

    <body>
        <h2>Image Loader Level 3</h2>
        <p>Click on a button to show the picutre!</p>
        <button id="showImg1">Show Riverbank</button>
        <button id="showImg2">Show Rainbow</button>
        <button id="showImg3">Show Rainbow 2</button>  
        <button id="showImg4">Show Audubon Center</button>
        <button id="showImg5">Show Kayaker</button>
        <p id="images"> 
            <?php
                displayPhotos("Images");
            ?>
        </p>

        <script>
            document.getElementById("showImg1").addEventListener("click", function() {
                for(var i = 1; i <= 5; i++) {
                    document.getElementById("image" + i).style.display = "none";
                }
                document.getElementById("image1").style.display = "block";
            });
            document.getElementById("showImg2").addEventListener("click", function() {
                for(var i = 1; i <= 5; i++) {
                    document.getElementById("image" + i).style.display = "none";
                }
                document.getElementById("image2").style.display = "block";
            });
            document.getElementById("showImg3").addEventListener("click", function() {
                for(var i = 1; i <= 5; i++) {
                    document.getElementById("image" + i).style.display = "none";
                }
                document.getElementById("image3").style.display = "block";
            });
            document.getElementById("showImg4").addEventListener("click", function() {
                for(var i = 1; i <= 5; i++) {
                    document.getElementById("image" + i).style.display = "none";
                }
                document.getElementById("image4").style.display = "block";
            });
            document.getElementById("showImg5").addEventListener("click", function() {
                for(var i = 1; i <= 5; i++) {
                    document.getElementById("image" + i).style.display = "none";
                }
                document.getElementById("image5").style.display = "block";
            });
        </script>
    </body>
</html>
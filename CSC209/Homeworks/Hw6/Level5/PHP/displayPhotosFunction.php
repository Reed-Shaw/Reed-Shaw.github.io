<?php
    function displayPhotos($folderName) {
            $TEMPLATE = "<img src=SOURCE id=ID style=\"width:100%\">";
            $files = array_merge(glob($folderName . "/*.jpeg"), glob($folderName . "/*.jpg"));
            $iterator = 1;
            echo "<div class=\"slideshow-container\">";
            foreach($files as $file) {
                echo "<div class=\"mySlides fade\">";
                echo "<div class=\"numbertext\">$iterator / " . count($files) . "</div>";
                $myImage = str_replace("SOURCE", $file, $TEMPLATE);
                echo str_replace("ID", "image" . $iterator, $myImage);
                echo "<div class=\"text\">Image " . $iterator . "</div>";
                echo "</div>";
                $iterator++;
            }
            echo "</div>";
            echo "<br>";

            echo "<div style=\"text-align:center\">";
            for ($i = 0; $i < count($files); $i++) {
                echo "<span class=\"dot\"></span> ";
            }
            echo "</div>";
        }
?>  
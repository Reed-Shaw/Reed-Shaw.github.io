<?php
    //Function to insert the images and divs into the HTML.
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

    //Function to show slides. Does not work :/
    //Attempted to convert the JS function into something PHP can read. But PHP only makes a static page, 
    //not something that can change. 
    /*function showSlides(){
        $i = 0;
        $slideIndex = 0;
        $slides = document.getElementsByClassName("mySlides");
        $dots = document.getElementsByClassName("dot");
        for($i = 0; $i < count($slides); $i++){
            $slides[i].style.display = "none";
        }
        $slideIndex++;
        if ($slideIndex > count($slides)) {$slideIndex = 1}   
        for ($i = 0; $i < count($dots); $i++) {
            $dots[$i].className = $dots[$i].className.replace(" active", "");
        }
        $slides[$slideIndex-1].style.display = "block";  
            $dots[$slideIndex-1].className += " active";
            $setTimeout(showSlides, 2000); // Change image every 2 seconds
    }*/
?>  
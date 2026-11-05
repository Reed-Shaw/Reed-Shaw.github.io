<?php
    //Function to insert the images and divs into the HTML.
    function displayPhotos($folderName) {
            $TEMPLATE = "<img src=SOURCE id=ID style=\"width:100%\">";
            $files = array_merge(glob($folderName . "/*.jpeg"), glob($folderName . "/*.jpg"));
            $innerFolerName = substr($folderName, strrpos($folderName, '/') + 1);
            $iterator = 1;
            echo "<div class=\"slideshow-container\">";
            foreach($files as $file) {
                echo "<div class=\"mySlides$innerFolerName fade\">";
                echo "<div class=\"numbertext\">$iterator / " . count($files) . "</div>";
                $myImage = str_replace("SOURCE", $file, $TEMPLATE);
                echo str_replace("ID", "image" . $iterator, $myImage);
                //make caption for each image
                $noFolderName = substr($file, strlen($folderName) + 1);
                $noExtensionName = substr($noFolderName, 0, strrpos($noFolderName, '.'));
                //Split up the file name into words based on capital letters then use implode() to make 
                //it a string again.
                //Found preg_split on stackoverflow: https://stackoverflow.com/questions/8998382/split-words-in-a-camelcased-string-before-each-uppercase-letter 
                $splitUp = implode(" ", preg_split('/(?=[A-Z])/', $noExtensionName));
                //Uppercase the first letter of each word.
                $caption = ucwords($splitUp);
                echo "<div class=\"text\">" . $caption . "</div>";
                //close the div and iterate for next file.
                echo "</div>";
                $iterator++;
            }
            echo "</div>";
            echo "<br>";

            echo "<div style=\"text-align:center\">";
            for ($i = 0; $i < count($files); $i++) {
                echo "<span class=\"dot $innerFolerName\"></span> ";
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
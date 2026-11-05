<?php
    function displayPhotos($folderName) {
            $TEMPLATE = "<img src=SOURCE id=ID>";
            $files = array_merge(glob($folderName . "/*.jpeg"), glob($folderName . "/*.jpg"));
            $iterator = 1;
            foreach($files as $file) {
                $myImage = str_replace("SOURCE", $file, $TEMPLATE);
                echo str_replace("ID", "image" . $iterator, $myImage);
                $iterator++;
            }
        }
?>  
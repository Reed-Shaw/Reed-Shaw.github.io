<?php
    function displayPhotos($folderName) {
        $files = array_merge(glob($folderName . "/*.jpeg"), glob($folderName . "/*.jpg"));
        foreach($files as $file) {
            echo "<img src='$file'><br> ";
        }
    } 
?>

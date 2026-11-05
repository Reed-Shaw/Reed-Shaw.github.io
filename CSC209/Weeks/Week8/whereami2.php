
<?php
    function extractFolderNumber($someFolder) {
        //Find the path of this file and print it
        $path = realpath($someFolder);
        //Get rid of the file name so the end of the string is the folder and print it
        $myFolder = substr_replace($path,"",-12);
        //Get the basename of the string (the name of the folder we're in) and print it
        $folderBase = basename($myFolder);
        //Get the last character of the fodler name and print it
        $weekNrString = substr($folderBase, -1);
        //Make sure $weekNrString is an integer
        if(is_numeric($weekNrString) == true){
            $weekNr = (int) $weekNrString;
            return $weekNr;
        }
    }
?>
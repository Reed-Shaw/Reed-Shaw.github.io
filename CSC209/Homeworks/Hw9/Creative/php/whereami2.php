
<?php
    function extractFolderNumber($someFolder) {
        //Find the path of this file and print it
        $path = realpath($someFolder);
        //Make the path an array split by the slashes
        $pathArray = explode("\\", $path);
        //The index at -2 in $pathArray should have the week folder name.
        $thisWeek = $pathArray[6];
        //Get the basename of the string (the name of the folder we're in) and print it
        $folderBase = basename($thisWeek);
        //Get the last two characters of the fodler name and print it
        $weekNrString = substr($folderBase, -2);
        //Make sure $weekNrString is an integer
        if(is_numeric($weekNrString) == true){
            $weekNr = (int) $weekNrString;
            return $weekNr;
        }else{
            //The folder name might have a single digit number:
            $weekNrString = substr($folderBase, -1);
            if(is_numeric($weekNrString) == true){
                $weekNr = (int) $weekNrString;
                return $weekNr;
            }
        }
    }
?>
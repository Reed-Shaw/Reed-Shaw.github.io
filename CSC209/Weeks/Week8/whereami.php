<!DOCTYPE html>
<html>
    <head>
        <title>Where Am I Lab</title>
    </head>
    <body>
        <p>This page figures out its whereabouts</p>
        <?php
            //Find the path of this file and print it
            $path = realpath("whereami.php");
            //Get rid of the file name so the end of the string is the folder and print it
            $myFolder = substr_replace($path,"",-12);
            //Get the basename of the string (the name of the folder we're in) and print it
            $folderBase = basename($myFolder);
            //Get the last character of the fodler name and print it
            $weekNrString = substr($folderBase, -1);
            //Make sure $weekNrString is an integer
            if(is_numeric($weekNrString) == true){
                $weekNr = (int) $weekNrString;
                echo "<p>My week number is $weekNr</p>";
            }
        ?>
    </body>
</html>
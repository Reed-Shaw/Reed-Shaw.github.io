<?php
function extractFolderNumber($folderName){
    $folderPath=realpath($folderName); 

    $folderBaseName= strrchr($folderPath, "/"); 
    $folderBaseName= substr($folderBaseName, 1); 

    //find the first index of a number
    $currIdx=0; 
    $stringArray=str_split($folderBaseName); 
    for($x=0; $x<count($stringArray); $x++){
        if(is_numeric($stringArray[$x])==true){
            break; 
        }else{
            $currIdx++; 
        }
    }

    $folderLastChars= substr($folderBaseName, $currIdx); 
    

    if(is_numeric($folderLastChars)==true){
        $folderLastNum= (int)$folderLastChars; 
    }else{
        echo "error, the last digit is not a number"; 
    }

    return $folderLastNum; 

}
?>
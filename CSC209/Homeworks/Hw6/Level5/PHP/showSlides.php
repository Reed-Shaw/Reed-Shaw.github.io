<?php
    function showSlides(){
        $i = 0;
        $slideIndex = 0;
        $slides = document.getElementsByClassName("mySlides");
        $dots = document.getElementsByClassName("dot");
        for($i = 0; $i < $slides.length; $i++){
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
    }
?>
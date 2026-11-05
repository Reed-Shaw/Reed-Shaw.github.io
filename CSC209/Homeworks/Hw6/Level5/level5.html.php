<!DOCTYPE HTML>
<html>
    <head>
        <title>Slideshow</title>
        <link rel="stylesheet" href="./Css/basicCss.css">
        <?php include './PHP/displayPhotosFunction.php';?>
    </head>

    <body>
        <h2>Image Loader Level 5</h2>
        <div class="slideshow-container">
            <?php
                displayPhotos("Images");
            ?>

            <?php
                //Function does not work :/
                //Because PHP serves a static page, I can't make a php-only function that will change
                //slides over time.
                //showSlides();
            ?>
            <!--Using Script from level 4 to show the slides -->
            <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
        </div> 
    </body>
</html>
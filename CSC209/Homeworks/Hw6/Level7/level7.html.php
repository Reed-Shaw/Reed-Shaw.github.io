<!DOCTYPE HTML>
<html>
    <head>
        <title>Slideshow</title>
        <link rel="stylesheet" href="./Css/basicCss.css">
        <?php include './PHP/displayPhotosFunction.php';?>
    </head>

    <body>
        <div class="mainDiv">
            <div class="topnav">
                <a class="active" id="flowers">Show Flowers</a>
                <a id="cats">Show Cats</a>
            </div>
            <h2>Image Loader Level 7</h2>
            <div class="slideshow-container" style="display: block;" id="flowerSlideShow">
                <?php
                    displayPhotos("Images/Flowers");
                ?>
            </div>
            <div class="slideshow-container" style="display: none;" id="catSlideShow">
                <?php
                    displayPhotos("Images/Cats");
                ?>
            </div>

            <script>
                document.getElementById("flowers").addEventListener("click", function() {
                    document.getElementById("flowerSlideShow").style.display = "block";
                    document.getElementById("catSlideShow").style.display = "none";
                    document.getElementById("flowers").classList.add("active");
                    document.getElementById("cats").classList.remove("active");
                });
                document.getElementById("cats").addEventListener("click", function() {
                    document.getElementById("catSlideShow").style.display = "block";
                    document.getElementById("flowerSlideShow").style.display = "none";
                    document.getElementById("cats").classList.add("active");
                    document.getElementById("flowers").classList.remove("active");
                });
                
            </script>

            <script>
                let flowerSlideIndex = 0;
                function showFlowerSlides() {
                    let i;
                    let slides = document.getElementsByClassName("mySlidesFlowers");
                    let dots = document.getElementsByClassName("dot Flowers");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    flowerSlideIndex++;
                    if (flowerSlideIndex > slides.length) {flowerSlideIndex = 1}    
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[flowerSlideIndex-1].style.display = "block";  
                    dots[flowerSlideIndex-1].className += " active";
                    setTimeout(showFlowerSlides, 2000); // Change image every 2 seconds
                }
                showFlowerSlides();
            </script>
            <script>
                let catSlideIndex = 0;
                function showCatSlides() {
                    let i;
                    let slides = document.getElementsByClassName("mySlidesCats");
                    let dots = document.getElementsByClassName("dot Cats");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    catSlideIndex++;
                    if (catSlideIndex > slides.length) {catSlideIndex = 1}    
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[catSlideIndex-1].style.display = "block";  
                    dots[catSlideIndex-1].className += " active";
                    setTimeout(showCatSlides, 2000); // Change image every 2 seconds
                }
                showCatSlides();
            </script>
        </div>
    </body>
</html>
<<<<<<< HEAD
<!-- js slideshow -->
<script>
    // automatic slideshow
    let slideIndex = 0;
    showSlides();

    function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
</body>

=======
<!-- js slideshow -->
<script>
    // automatic slideshow
    let slideIndex = 0;
    showSlides();

    function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
</body>

>>>>>>> 4efff5ec34ac3df5b2a063c2e7e8c697533e8d7a
</html>
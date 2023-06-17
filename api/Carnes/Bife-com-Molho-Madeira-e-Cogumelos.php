<?php
    include '../header-comidas.php';
    include '../menu-comidas.php';
?>


<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="img-slide-1" style="background-image: url('../Imagens/Carnes/Bife-Molho-Madeira-Cogumenlos/Bife-Molho-Madeira-Cogumelos-SI-1.jpg')"></div>
    </div>
    <div class="mySlides fade">
        <div class="img-slide-1" style="background-image: url('../Imagens/Carnes/Bife-Molho-Madeira-Cogumenlos/Bife-Molho-Madeira-Cogumelos-SI-2.jpg')"></div>
    </div>
    
    <div class="slide-botoes" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span>
    </div>
    <a class="prev" onclick="plusSlides(-1)"></a>
    <a class="next" onclick="plusSlides(1)"></a>

</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>



<div style="min-height: 500px;">
    
</div>

<?php
    include '../rodape-comidas.php';
?>

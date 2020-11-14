<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
  color: #f2f2f2;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
<body>

<h2 style="text-align:center">Lightbox F*U</h2>
<div class="container">


    <div class="row">
      <div class="col-md-3 col-sm-12 mb-4"  style="" id="MyColum"> 
    
        <img src="{{ asset('image/img_nature.jpg') }}" style="width:100%height:100%; width:100%; border:1px solid #ddd;
        border-radius: 4px;
        padding: 5px; " onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
      </div>

      
      <div class="col-md-3 col-sm-12 mb-4"  style="" id="MyColum"> 
    
        <img src="{{ asset('image/img_snow.jpg') }}" style="width:100%height:100%; width:100%; border:1px solid #ddd;
        border-radius: 4px;
        padding: 5px; " onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
      </div>

      
      <div class="col-md-3 col-sm-12 mb-4"  style="" id="MyColum"> 
    
        <img src="{{ asset('image/img_mountains.jpg') }}" style="width:100%height:100%; width:100%; border:1px solid #ddd;
        border-radius: 4px;
        padding: 5px; " onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
      </div>

      <div class="col-md-3 col-sm-12 mb-4"  style="" id="MyColum"> 
    
        <img src="{{ asset('image/img_lights.jpg') }}" style="width:100%height:100%; width:100%; border:1px solid #ddd;
        border-radius: 4px;
        padding: 5px; " onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
      </div>

    </div>

</div>







          {{-- Modal Area --}}
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="{{ asset('image/img_nature_wide.jpg') }}" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="{{ asset('image/img_snow_wide.jpg') }}" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="{{ asset('image/img_mountains_wide.jpg') }}" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="{{ asset('image/img_lights_wide.jpg') }}" style="width:100%">
    </div>
    
    <i class="prev" onclick="plusSlides(-1)"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
    </svg></i>
    <i class="next" onclick="plusSlides(1)"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
    </svg></i>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

<div class="row d-block">
  <div class="column">
    <img class="demo cursor" src="{{ asset('image/img_nature_wide.jpg') }}" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
  </div>
  <div class="column">
    <img class="demo cursor" src="{{ asset('image/img_snow_wide.jpg') }}" style="width:100%" onclick="currentSlide(2)" alt="Snow gsfgsdf">
  </div>
  <div class="column">
    <img class="demo cursor" src="{{ asset('image/img_mountains_wide.jpg') }}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and ">
  </div>
  <div class="column">
    <img class="demo cursor" src="{{ asset('image/img_lights_wide.jpg') }}" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
  </div>
</div>
</div>
</div>
  

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>

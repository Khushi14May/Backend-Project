<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Welcome to CodingTechnology. A blog for coding enthusiasts">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="home.css">
        <script src="./home.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home Page</title>
</head>

<body>
<?php
    include '_nav.php';
?>    
  
 
   <!-- coursel part -->
   <div id="carouselExampleCaptions" class="carousel slide c1" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./image1.jpg" class="d-block w-100" alt="Technology" style="height: 400px;">
        <div class="carousel-caption d-none d-md-block" style="color:rgb(0, 0, 0); font-size:larger; font-weight: bold;">
          <h5>Technology</h5>
          <p>We provide u best Services and Technology</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./image2.jpg" class="d-block w-100" alt="Docters" style="height: 400px;">
        <div class="carousel-caption d-none d-md-block" style="color:rgb(0, 0, 0); font-size:larger; font-weight: bolder;">
          <h5>Docters</h5>
          <p>We provide you best Docters</p>
        </div>
      </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> 
  </div>
  <!-- details -->
  <div class="row row-cols-1 row-cols-md-4 g-4 my-3 " style="width: 1000px; margin: auto;">
    <div class="col">
        <div class="card" style="border:3px solid #16a3db;">
            <img src="./image5.jpg" class="card-img-top" alt="..."
                style="width: 100px; height: 100px; margin: auto;">
            <div class="card-body" style="text-align: center;">
                <h5 class="card-title">140+</h5>
                <p class="card-text"> Docters at work</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="border:3px solid #16a3db;">
            <img src="./image6.jpg" class="card-img-top" alt="..."
                style="width: 100px; height: 100px; margin: auto;">
            <div class="card-body" style="text-align: center;">
                <h5 class="card-title">1040+</h5>
                <p class="card-text">Satisfied Patients</p>
            </div>
        </div>
    </div>
    <div class="col">
      <div class="card" style="border:3px solid #16a3db;">
          <img src="./image7.png" class="card-img-top" alt="..."
              style="width: 100px; height: 100px; margin: auto;">
          <div class="card-body" style="text-align: center;">
              <h5 class="card-title">500+</h5>
              <p class="card-text">Bed Facilities</p>
          </div>
      </div>
  </div>
    <div class="col">
        <div class="card" style="border:3px solid #16a3db;">
            <img src="./image8.png" class="card-img-top" alt="..."
                style="width: 100px; height: 100px; margin: auto;">
            <div class="card-body" style="text-align: center;">
                <h5 class="card-title">30+</h5>
                <p class="card-text">Available Hospitals</p>
            </div>
        </div>
    </div>
</div>
<!-- contact us section -->
<section class="contact" id="contact">

  <h1 class="heading"> <span>Contact</span> Us </h1>

  <div class="row">

      <div class="content">
        <a href="#"> <i class="fas fa-phone"></i> +91 9993445678 </a> <br>
        <a href="#"> <i class="fas fa-phone"></i> +91 9675432674 </a><br>
        <a href="#"> <i class="fas fa-envelope"></i> shahkhushi@gmail.com </a><br>
        <a href="#"> <i class="fas fa-envelope"></i> shahhetvi21@gmail.com </a><br>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> Ahmedabad, india - 380001 </a><br>
      </div>

  </div>

</section>
  <footer style="background-color:#16a3db;">
    <p class="text-footer">
        Copyright @-All rights are reserved by AyuRythm
    </p>

</footer>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>
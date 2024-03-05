<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="body.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css' integrity='sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==' crossorigin='anonymous' />
    <style>
            body {
         font-family: "Baloo 2", cursive;
         font-size: 16px;
         color: #ffffff;
         text-rendering: optimizeLegibility;
         font-weight: initial;
      }

      .dark {
         background: #110f16;
      }


      .light {
         background: #f3f5f7;
      }

      a,
      a:hover {
         text-decoration: none;
         transition: color 0.3s ease-in-out;
      }

      #pageHeaderTitle {
         margin: 2rem 0;
         text-transform: uppercase;
         text-align: center;
         font-size: 2.5rem;
      }

      a {
            color: blue;
         }
    </style>
</head>
<body>
<?php 
  require_once "function.php";
  navbar("navbar")
  ?>
     <section id="Home" class="slider_section" id="home">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
         </div>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="gambar/1.png" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="gambar/2.png" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="gambar/3.png" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="gambar/4.png" class="d-block w-100 h-100" alt="...">
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
   </section>
   <section id="Contact">
      <footr>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <ul class="sociel">
                        <li> <a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li> <a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li> <a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li> <a href="#"><i class="fa-brands fa-github"></i></a></li>
                     </ul>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="contact">
                        <h3>Alamat</h3>
                        <span>SMKN 1 JAKARTA<br>
                           JL.Budi Utomo NO.7</span>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="contact">
                        <h3>Anyone Link</h3>
                        <ul class="lik">
                           <li> <a href="sejarah.php">Sejarah</a></li>
                           <li> <a href="#">Terms and conditions</a></li>
                           <li> <a href="#">Privacy policy</a></li>
                           <li> <a href="#">News</a></li>
                           <li> <a href="#">Contact us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="contact">
                        <h3>Perlombaan</h3>
                        <ul class="lik">
                           <li> <a href="#lomba">Cobration</a></li>
                           <li> <a href="#lomba">Galaseris</a></li>
                           <li> <a href="#lomba">Galaksi</a></li>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-5">
                     <div class="contact">
                        <h3>About</h3>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, animi assumenda veritatis architecto modi earum quae quidem distinctio illo ducimus libero ad? Pariatur, esse ut id vel quibusdam error modi. </span>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </footr>
   </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>
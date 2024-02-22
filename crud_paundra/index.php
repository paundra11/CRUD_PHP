<?php
include('konek.php');
?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <link rel="stylesheet" href="body.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css' integrity='sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==' crossorigin='anonymous' />
</head>

<body class="utama">
   <header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top">
         <div class="container">
            <a class="navbar-brand" href="#"><img id="valorant-logo" src="gambar/logo-paskib.png" alt="MDB Logo" draggable="false" style="height: 50px;" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ms-auto align-items-center">
               <li class="nav-item ms-3">
                     <a class="btn btn-primary btn-rounded" href="daftar.php">Sign Up</a>
                  </li>
                  <li class="nav-item ms-3">
                     <a class="btn btn-primary btn-rounded" href="login.php">Login</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Navbar -->
   </header>

   <section id="Home" class="slider_section" id="home">
   <div class="carousel-item active">
               <img src="gambar/banner.png" class="d-block w-100 h-100" alt="...">
            </div>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
   </section>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
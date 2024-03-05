<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css' integrity='sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==' crossorigin='anonymous' />
    <style>
        .card {
            position: relative;
            overflow: hidden;
        }

        .card-img-top {
            transition: filter 0.3s ease-in-out;
        }


        .card-img-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 10px;
            transition: opacity 0.4s ease-in-out;
            opacity: 1;
        }

        .card:hover .card-img-overlay {
            opacity: 0;
        }

        body {
            min-height: 100vh;
            background: #fafafa;
        }


        .social-link {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            border-radius: 50%;
            transition: all 0.3s;
            font-size: 0.9rem;
        }

        .social-link:hover,
        .social-link:focus {
            background: #ddd;
            text-decoration: none;
            color: #555;
        }

        .progress {
            height: 10px;
        }
    </style>

</head>

<body>
    <?php
    require_once "function.php";
    navbar("navbar")
    ?>
<section id="Home" class="slider_section" id="home">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500"> <!-- Interval diatur menjadi 3000 milidetik -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="gambar/banner.png" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="gambar/baner-utama.png" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="gambar/banner6.png" class="d-block w-100 h-100" alt="...">
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


    <div class="container py-5">
        <h2 class="font-weight-bold mb-2 text-center" id="struktur">Struktur Anggota</h2>
        <p class="font-italic text-muted mb-4 text-center">Tahun 2022-2023</p>


<div class="container">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 rounded mx-auto" style="width: 18rem;">
                <img src="https://bootstrapious.com/i/snippets/sn-cards/profile-1_dewapk.jpg" class="card-img-top blur" alt="Gambar">
                <div class="card-img-overlay">
                    <?php
                    include "konek.php";
                    $sql = "SELECT tabel_member.*, angkatan.tahun AS angkatan, jabatan.jabatan AS id_jabatan
                    FROM tabel_member
                    INNER JOIN angkatan ON tabel_member.angkatan = angkatan.id
                    INNER JOIN jabatan ON tabel_member.id_jabatan = jabatan.id_jabatan
                    WHERE jabatan.id_jabatan = 1 
                    ORDER BY tabel_member.id ASC LIMIT 1";

                    $query = mysqli_query($db, $sql);

                    while ($member = mysqli_fetch_array($query)) {
                    ?>
                        <h5 class="mb-2"><?php echo $member['nama']; ?></h5>
                        <p class="mb-0"><?php echo $member['id_jabatan']; ?></p>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 rounded mx-auto" style="width: 18rem;">
                <img src="https://bootstrapious.com/i/snippets/sn-cards/profile-1_dewapk.jpg" class="card-img-top blur" alt="Gambar">
                <div class="card-img-overlay">
                    <?php
                    include "konek.php";
                    $sql = "SELECT tabel_member.*, angkatan.tahun AS angkatan, jabatan.jabatan AS id_jabatan
                    FROM tabel_member
                    INNER JOIN angkatan ON tabel_member.angkatan = angkatan.id
                    INNER JOIN jabatan ON tabel_member.id_jabatan = jabatan.id_jabatan
                    WHERE jabatan.id_jabatan = 2 
                    ORDER BY tabel_member.id ASC LIMIT 1";

                    $query = mysqli_query($db, $sql);

                    while ($member = mysqli_fetch_array($query)) {
                    ?>
                        <h5 class="mb-2"><?php echo $member['nama']; ?></h5>
                        <p class="mb-0"><?php echo $member['id_jabatan']; ?></p>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 rounded mx-auto" style="width: 18rem;">
                <img src="https://bootstrapious.com/i/snippets/sn-cards/profile-1_dewapk.jpg" class="card-img-top blur" alt="Gambar">
                <div class="card-img-overlay">
                    <?php
                    include "konek.php";
                    $sql = "SELECT tabel_member.*, angkatan.tahun AS angkatan, jabatan.jabatan AS id_jabatan
                    FROM tabel_member
                    INNER JOIN angkatan ON tabel_member.angkatan = angkatan.id
                    INNER JOIN jabatan ON tabel_member.id_jabatan = jabatan.id_jabatan
                    WHERE jabatan.id_jabatan = 3
                    ORDER BY tabel_member.id ASC LIMIT 1";

                    $query = mysqli_query($db, $sql);

                    while ($member = mysqli_fetch_array($query)) {
                    ?>
                        <h5 class="mb-2"><?php echo $member['nama']; ?></h5>
                        <p class="mb-0"><?php echo $member['id_jabatan']; ?></p>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 rounded mx-auto" style="width: 18rem;">
                <img src="https://bootstrapious.com/i/snippets/sn-cards/profile-1_dewapk.jpg" class="card-img-top blur" alt="Gambar">
                <div class="card-img-overlay">
                    <?php
                    include "konek.php";
                    $sql = "SELECT tabel_member.*, angkatan.tahun AS angkatan, jabatan.jabatan AS id_jabatan
                    FROM tabel_member
                    INNER JOIN angkatan ON tabel_member.angkatan = angkatan.id
                    INNER JOIN jabatan ON tabel_member.id_jabatan = jabatan.id_jabatan
                    WHERE jabatan.id_jabatan = 4 
                    ORDER BY tabel_member.id ASC LIMIT 1";

                    $query = mysqli_query($db, $sql);

                    while ($member = mysqli_fetch_array($query)) {
                    ?>
                        <h5 class="mb-2"><?php echo $member['nama']; ?></h5>
                        <p class="mb-0"><?php echo $member['id_jabatan']; ?></p>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 rounded mx-auto" style="width: 18rem;">
                <img src="https://bootstrapious.com/i/snippets/sn-cards/profile-1_dewapk.jpg" class="card-img-top blur" alt="Gambar">
                <div class="card-img-overlay">
                    <?php
                    include "konek.php";
                    $sql = "SELECT tabel_member.*, angkatan.tahun AS angkatan, jabatan.jabatan AS id_jabatan
                    FROM tabel_member
                    INNER JOIN angkatan ON tabel_member.angkatan = angkatan.id
                    INNER JOIN jabatan ON tabel_member.id_jabatan = jabatan.id_jabatan
                    WHERE jabatan.id_jabatan = 5 
                    ORDER BY tabel_member.id ASC LIMIT 1";

                    $query = mysqli_query($db, $sql);

                    while ($member = mysqli_fetch_array($query)) {
                    ?>
                        <h5 class="mb-2"><?php echo $member['nama']; ?></h5>
                        <p class="mb-0"><?php echo $member['id_jabatan']; ?></p>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 rounded mx-auto" style="width: 18rem;">
                <img src="https://bootstrapious.com/i/snippets/sn-cards/profile-1_dewapk.jpg" class="card-img-top blur" alt="Gambar">
                <div class="card-img-overlay">
                    <?php
                    include "konek.php";
                    $sql = "SELECT tabel_member.*, angkatan.tahun AS angkatan, jabatan.jabatan AS id_jabatan
                    FROM tabel_member
                    INNER JOIN angkatan ON tabel_member.angkatan = angkatan.id
                    INNER JOIN jabatan ON tabel_member.id_jabatan = jabatan.id_jabatan
                    WHERE jabatan.id_jabatan = 6 
                    ORDER BY tabel_member.id ASC LIMIT 1";

                    $query = mysqli_query($db, $sql);

                    while ($member = mysqli_fetch_array($query)) {
                    ?>
                        <h5 class="mb-2"><?php echo $member['nama']; ?></h5>
                        <p class="mb-0"><?php echo $member['id_jabatan']; ?></p>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
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
                           <li> <a href="#">About us</a></li>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>
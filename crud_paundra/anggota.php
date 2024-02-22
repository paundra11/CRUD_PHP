<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css' integrity='sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==' crossorigin='anonymous' />
    <style>
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
    <div class="container py-5">
        <h2 class="font-weight-bold mb-2 text-center">Struktur Anggota</h2>
        <p class="font-italic text-muted mb-4 text-center">Tahun 2022-2023</p>


        <div class="card shadow-sm border-0 rounded mx-auto mb-4" style="width: 18rem;">
            <div class="card-body p-0">
                <img src="https://bootstrapious.com/i/snippets/sn-cards/profile-1_dewapk.jpg" alt="" class="w-100 card-img-top">
                <div class="p-4">
                    <?php
                    include "konek.php";
                    $sql = "SELECT tabel_member.*, angkatan.tahun AS angkatan, jabatan.jabatan AS id_jabatan
                    FROM tabel_member
                    INNER JOIN angkatan ON tabel_member.angkatan = angkatan.id
                    INNER JOIN jabatan ON tabel_member.id_jabatan = jabatan.id_jabatan
                    ORDER BY tabel_member.id ASC LIMIT 1"; 
            
                    $query = mysqli_query($db, $sql);

                    while ($member = mysqli_fetch_array($query)) {
                    ?>
                        <h5 class="mb-2"><?php echo $member['nama']; ?></h5>
                        <h5 class="mb-0"><?php echo $member['id_jabatan']; ?></h5>
                        <p class="small text-muted mb-2"><?php echo $member['email']; ?></p>
                        <p class="small text-muted">Angkatan: <?php echo $member['angkatan']; ?></p>
                    <?php
                    }
                    ?>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row pb-5 mb-4">
            <div class="col-lg-4 mb-4">
                <!-- Card 1-->
                <div class="card shadow-sm border-0 rounded mx-auto" style="width: 18rem;">
                    <div class="card-body p-0">
                        <img src="https://bootstrapious.com/i/snippets/sn-cards/profile-1_dewapk.jpg" alt="" class="w-100 card-img-top">
                        <div class="p-4">
                        <?php
                    include "konek.php";
                    $sql = "SELECT tabel_member.*, angkatan.tahun AS angkatan, jabatan.jabatan AS id_jabatan
                    FROM tabel_member
                    INNER JOIN angkatan ON tabel_member.angkatan = angkatan.id
                    INNER JOIN jabatan ON tabel_member.id_jabatan = jabatan.id_jabatan
                    WHERE tabel_member.id = 2
        ORDER BY tabel_member.id ASC"; 
            
                    $query = mysqli_query($db, $sql);

                    while ($member = mysqli_fetch_array($query)) {
                    ?>
                        <h5 class="mb-2"><?php echo $member['nama']; ?></h5>
                        <h5 class="mb-0"><?php echo $member['id_jabatan']; ?></h5>
                        <p class="small text-muted mb-2"><?php echo $member['email']; ?></p>
                        <p class="small text-muted">Angkatan: <?php echo $member['angkatan']; ?></p>
                    <?php
                    }
                    ?>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4"> <!-- Card 2 -->
                <div class="card shadow-sm border-0 rounded mx-auto" style="width: 18rem;">
                    <div class="card-body p-0">
                        <img src="https://bootstrapious.com/i/snippets/sn-cards/profile-1_dewapk.jpg" alt="" class="w-100 card-img-top">
                        <div class="p-4">
                        <?php
                    include "konek.php";
                    $sql = "SELECT tabel_member.*, angkatan.tahun AS angkatan, jabatan.jabatan AS id_jabatan
                    FROM tabel_member
                    INNER JOIN angkatan ON tabel_member.angkatan = angkatan.id
                    INNER JOIN jabatan ON tabel_member.id_jabatan = jabatan.id_jabatan
                    WHERE tabel_member.id = 2
        ORDER BY tabel_member.id ASC"; 
            
                    $query = mysqli_query($db, $sql);

                    while ($member = mysqli_fetch_array($query)) {
                    ?>
                        <h5 class="mb-2"><?php echo $member['nama']; ?></h5>
                        <h5 class="mb-0"><?php echo $member['id_jabatan']; ?></h5>
                        <p class="small text-muted mb-2"><?php echo $member['email']; ?></p>
                        <p class="small text-muted">Angkatan: <?php echo $member['angkatan']; ?></p>
                    <?php
                    }
                    ?>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4"> <!-- Card 3 -->
                <div class="card shadow-sm border-0 rounded mx-auto" style="width: 18rem;">
                    <div class="card-body p-0">
                        <img src="https://bootstrapious.com/i/snippets/sn-cards/profile-1_dewapk.jpg" alt="" class="w-100 card-img-top">
                        <div class="p-4">
                        <?php
                    include "konek.php";
                    $sql = "SELECT tabel_member.*, angkatan.tahun AS angkatan, jabatan.jabatan AS id_jabatan
                    FROM tabel_member
                    INNER JOIN angkatan ON tabel_member.angkatan = angkatan.id
                    INNER JOIN jabatan ON tabel_member.id_jabatan = jabatan.id_jabatan
                    WHERE tabel_member.id = 2
        ORDER BY tabel_member.id ASC"; 
            
                    $query = mysqli_query($db, $sql);

                    while ($member = mysqli_fetch_array($query)) {
                    ?>
                        <h5 class="mb-2"><?php echo $member['nama']; ?></h5>
                        <h5 class="mb-0"><?php echo $member['id_jabatan']; ?></h5>
                        <p class="small text-muted mb-2"><?php echo $member['email']; ?></p>
                        <p class="small text-muted">Angkatan: <?php echo $member['angkatan']; ?></p>
                    <?php
                    }
                    ?>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


</body>

</html>
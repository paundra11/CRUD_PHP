<?php
function navbar($navbar)
{
?>
   <header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-light navbar-light 
      <?php
                  if (basename($_SERVER['PHP_SELF']) == 'anggota.php') {
                     echo 'fixed-top';
                  }
                  ?>">
         <div class="container">
            <a class="navbar-brand" href="#"><img id="valorant-logo" src="gambar/logo-paskib.png" alt="MDB Logo" draggable="false" style="height: 50px;" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ms-auto align-items-center">
                  <?php
                  // Periksa apakah halaman saat ini adalah anggota.php
                  if (basename($_SERVER['PHP_SELF']) == 'anggota.php') {
                     // Jika halaman saat ini adalah anggota.php, tampilkan kode HTML
                     echo '<li class="nav-item">
                     <a class="nav-link mx-2" href="#struktur"><i class="fa-solid fa-address-card"></i> Struktur</a>
                     </li>';
                  }
                  ?>
                  <li class="nav-item">
                     <a class="nav-link mx-2" href="halmut.php"><i class="fa-solid fa-house"></i> Home</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Navbar -->
   </header>
<?php
}
?>
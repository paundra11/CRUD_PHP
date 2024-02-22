<?php
  include("konek.php");
?>
<html>
<body>
<head>
<title>Website Exercise GYM</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<div class="container">
<form method="POST" action="proses-daftar.php" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input type="text" name="nama"class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">NO HP/WA</label>
    <input type="number" name="hp"class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Jenis Kelamin</label>
    <select name="jk" id="inputState" class="form-select">
      <option selected>Pilih Jenis kelamin</option>
      <option value="laki-laki">Laki Laki</option>
      <option value="perempuan">Perempuan</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Jabatan</label>
    <select name="jabatan" id="inputState" class="form-select">
        <option selected>Pilih</option>
        <?php
        // Koneksi ke database
        include "konek.php";

        // Query untuk mengambil daftar jabatan
        $query = "SELECT * FROM jabatan";
        $result = mysqli_query($db, $query);

        // Loop melalui hasil query dan menambahkan opsi ke dalam elemen select
        while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['id_jabatan'] . "'>" . $row['jabatan'] . "</option>";
        }
        ?>
    </select>
  </div>
  <div class="col-md-6">
  <label for="inputState" class="form-label">Angkatan</label>
  <select name="angkatan" id="inputState" class="form-select">
        <option selected>Pilih</option>
        <?php
        // Koneksi ke database
        include "konek.php";

        // Query untuk mengambil daftar jabatan
        $query = "SELECT * FROM angkatan";
        $result = mysqli_query($db, $query);

        // Loop melalui hasil query dan menambahkan opsi ke dalam elemen select
        while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['id'] . "'>" . $row['tahun'] . "</option>";
        }
        ?>
    </select>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" name="daftar" class="btn btn-primary">Daftar Sekarang</button>
  </div>
</form>
</div>

</body>
</html>

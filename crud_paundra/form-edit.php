<?php
include("konek.php");

if ( !isset($_GET['id'])){
  header('Location: daftar-member.php');
}

$id = $_GET['id'];

$sql= "SELECT * FROM tabel_member WHERE id=$id";
$query= mysqli_query($db, $sql);
$member= mysqli_fetch_assoc($query);


if(mysqli_num_rows($query) < 1){
    die("Data Tidak ada");
}


?>
<html>
<body>
<head>
<title>Paskibra RFTO</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<div class="container">
<form method="POST" action="proses-edit.php" class="row g-3">

<input type="hidden" name="id" value="<?php echo $member['id'] ?>"/>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama</label>
    <input type="text" name="nama"class="form-control" id="inputEmail4" value="<?php echo $member['nama'] ?>"/>
  </div>

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputPassword4" value="<?php echo $member['email'] ?>"/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">NO HP/WA</label>
    <input type="number" name="hp"class="form-control" id="inputEmail4" value="<?php echo $member['hp'] ?>"/>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Jenis Kelamin</label>
    <?php $jk = $member['jk']; ?>
    <select name="jk" id="inputState" class="form-select">
      <option selected>Pilih Jenis kelamin</option>
      <option <?php echo ($jk == 'laki-laki') ? "selected": "" ?>>Laki Laki</option>
      <option <?php echo ($jk == 'perempuan') ? "selected": "" ?>>Perempuan</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Jabatan</label>
    <?php $id_jabatan = $member['id_jabatan']; ?>
    <select name="jabatan" id="inputState" class="form-select">
        <option selected disabled>Pilih</option>
        <?php
        // Koneksi ke database
        include "konek.php";

        // Query untuk mengambil daftar jabatan
        $query = "SELECT * FROM jabatan";
        $result = mysqli_query($db, $query);

        while ($row = mysqli_fetch_array($result)) {
            $selected = ($row['id_jabatan'] == $id_jabatan) ? 'selected' : '';
            echo "<option value='" . $row['id_jabatan'] . "' $selected>" . $row['jabatan'] . "</option>";
        }
        ?>
    </select>
</div>

<div class="col-md-6">
    <label for="inputState" class="form-label">Angkatan</label>
    <?php $angkatan = $member['angkatan']; ?>
    <select name="angkatan" id="inputState" class="form-select">
        <option disabled>Pilih</option>
        <?php
        // Koneksi ke database
        include "konek.php";

        // Query untuk mengambil daftar angkatan
        $query = "SELECT * FROM angkatan";
        $result = mysqli_query($db, $query);

        // Loop melalui hasil query dan menambahkan opsi ke dalam elemen select
        while ($row = mysqli_fetch_array($result)) {
            $selected = ($row['tahun'] == $angkatan) ? 'selected' : '';
            echo "<option value='" . $row['id'] . "' $selected>" . $row['tahun'] . "</option>";
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
    <button type="submit" name="simpan" class="btn btn-primary">Simpan Perubahan</button>
  </div>
</form>
</div>

</body>
</html>

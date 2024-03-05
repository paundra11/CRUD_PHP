<?php
include('konek.php');

session_start();
if (!isset($_SESSION['role_id'])){
    // Jika pengguna belum login, arahkan kembali ke halaman login
    header('location: login.php');
    exit(); // Pastikan kode di bawah tidak dijalankan jika belum login
};

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css' integrity='sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==' crossorigin='anonymous' />

</head>

<body>
  <?php 
  require_once "function.php";
  navbar("navbar")
  ?>
  <div class="content">
    <section id="home">

      <div class="container">
        <center class="text h3 mt-5 mb-5 ">Daftar member</center>
        <div class="row justify-content-center mt-5">
          <nav>
            <a href="form.php" class="btn btn-primary mb-3">Tambah Member Baru</a>
          </nav>
          <br>

          <div class="table-responsive">

            <table id="example" class="display" style="width:100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Jenis Kelamin</th>
                  <th>Jabatan</th>
                  <th>Tahun</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "konek.php";
                $sql = "SELECT tabel_member.*, angkatan.tahun AS angkatan, jabatan.jabatan AS id_jabatan
                FROM tabel_member
                INNER JOIN angkatan ON tabel_member.angkatan = angkatan.id
                INNER JOIN jabatan ON tabel_member.id_jabatan = jabatan.id_jabatan";       
                $query = mysqli_query($db, $sql);
                $no = 1;

                while ($member = mysqli_fetch_array($query)) {
                ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo htmlspecialchars($member['nama'])?></td>
                    <td><?php echo htmlspecialchars($member['email']) ?></td>
                    <td><?php echo htmlspecialchars($member['jk']) ?></td>
                    <td><?php echo htmlspecialchars($member['id_jabatan']) ?></td>
                    <td><?php echo htmlspecialchars($member['angkatan']) ?></td>
                    <td> 
                      <a class="btn btn-primary btn-sm" href="form-edit.php?id=<?php echo $member['id'] ?>">Edit</a>
                      <a class="btn btn-danger btn-sm" href="hapus.php?id=<?php echo $member['id'] ?>">Hapus</a>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>

          </div>
          <p>Total : <?php echo mysqli_num_rows($query) ?></p>
        </div>


      </div>
    </section>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>

</body>

</html>

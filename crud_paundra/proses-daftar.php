<?php
include("konek.php");

// Pastikan hanya eksekusi saat metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan variabel yang diterima dari formulir sudah diinisialisasi dan bersihkan dari karakter berbahaya
    $nama = mysqli_real_escape_string($db, $_POST['nama']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $hp = mysqli_real_escape_string($db, $_POST['hp']);
    $jk = mysqli_real_escape_string($db, $_POST['jk']);
    $jabatan = mysqli_real_escape_string($db, $_POST['jabatan']);
    $angkatan = mysqli_real_escape_string($db, $_POST['angkatan']);

    // Query SQL untuk menyisipkan data ke dalam tabel
    $sql = "INSERT INTO tabel_member (nama, email, hp, jk, id_jabatan, angkatan) VALUES ('$nama', '$email', '$hp', '$jk', '$jabatan', '$angkatan')";
    $query = mysqli_query($db, $sql);

    // Periksa apakah query berhasil dieksekusi
    if ($query) {
        echo "<script>alert('Data Berhasil Disimpan');
        window.location='halmut.php';</script>";
    } else {
        // Jika query gagal, alihkan pengguna kembali ke halaman utama dengan parameter status=gagal
        header('Location: index.php?status=gagal');
        exit; // Sebaiknya tambahkan exit setelah melakukan redirect untuk menghentikan eksekusi skrip
    }
} else {
    // Jika tidak ada permintaan POST, tampilkan pesan akses ditolak
    die("Akses Ditolak");
}
?>


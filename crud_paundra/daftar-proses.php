<?php
require_once 'konek.php'; // Sesuaikan dengan lokasi file koneksi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Role ID default
    $role_id = 2;

    // Buat koneksi ke database

    // Cek koneksi
    if (!$db) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Query untuk menyimpan data
    $query = "INSERT INTO users (username, email, password, role_id) VALUES ('$username', '$email', '$password', $role_id)";

    if (mysqli_query($db, $query)) {
        echo "header('location: login.php')";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    // Tutup koneksi
    mysqli_close($db);
}
?>

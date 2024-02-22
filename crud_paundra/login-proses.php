<?php 
session_start(); // Mulai sesi

require_once 'konek.php'; 

$email    = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); 

    // Set session untuk username dan role_id
    $_SESSION['username'] = $row['username'];
    $_SESSION['role_id'] = $row['role_id'];

    // Redirect berdasarkan role_id
    if ($_SESSION['role_id'] == 1) {
        header('location: admin.php');
    } elseif ($_SESSION['role_id'] == 2) {
        header('location: halmut.php');
    } else {
        // Jika role_id tidak valid, arahkan ke halaman masuk
        header('location: login.php');
    }
} else {
    header('location: login.php');
}

$db->close();
?>

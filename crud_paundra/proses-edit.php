<?php

include("konek.php");
if(isset($_POST['simpan'])){

    $id = mysqli_real_escape_string($db, $_POST['id']);
    $nama = mysqli_real_escape_string($db, $_POST['nama']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $hp = mysqli_real_escape_string($db, $_POST['hp']);
    $jk = mysqli_real_escape_string($db, $_POST['jk']);
    $jabatan = mysqli_real_escape_string($db, $_POST['jabatan']);
    $angkatan = mysqli_real_escape_string($db, $_POST['angkatan']);

    $sql = "UPDATE tabel_member SET nama=?, email=?, hp=?, jk=?, id_jabatan=?, angkatan=? WHERE id=?";
    $stmt = mysqli_prepare($db, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssiii", $nama, $email, $hp, $jk, $jabatan, $angkatan, $id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        
        if ($result) {
            header('Location: admin.php');
            exit();
        } else {
            echo "Gagal melakukan pembaruan.";
        }
    } else {
        echo "Kesalahan dalam persiapan statement SQL.";
    }
    

}else{
    die("akses dilarang");
}
?>
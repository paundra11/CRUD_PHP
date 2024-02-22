<?php 

include("konek.php");

if(isset($_GET['id'])){

    $id=$_GET['id'];

    $sql= "DELETE FROM tabel_member WHERE id=$id";
    $query=mysqli_query($db, $sql);

    if($query){
        echo "<script> alert ('data berhasil dihapus'); </script>";
        header('Location: admin.php');
    }else{
        die("data tidak ada");
    }
}else{
    ("akses ditolak");
}

?>
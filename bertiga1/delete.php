<?php
    require_once "koneksi.php";

    $id=$_GET['id'];

    $sql= "DELETE FROM jadwal WHERE id='$id'";
    mysqli_query($koneksi, $sql);
    header("location: index_jadwal.php");
?>


<?php

    require_once "koneksi.php";
    $nokursi = $_POST['nokursi'];
    $namapembeli = $_POST['namapembeli'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $noktp = $_POST['noktp'];
    $jk = $_POST['jk'];


    $insert = mysqli_query($koneksi, "insert into data_pembeli set nokursi='$nokursi', namapembeli='$namapembeli', 
    email='$email', telepon='$telepon', noktp='$noktp', 
    jk='$jk'");
echo("data berhasil disimpan")
?>
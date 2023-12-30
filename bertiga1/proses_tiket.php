<?php

    require_once "koneksi.php";
    $id = $_POST['id'];
    $pertandingan = $_POST['pertandingan'];
    $tanggal_pertandingan = $_POST['tanggal_pertandingan'];
    $waktu_pertandingan = $_POST['waktu_pertandingan'];
    $stadion = $_POST['stadion'];
    $harga = $_POST['harga'];



    $insert = mysqli_query($koneksi, "insert into tiket set id='$id', pertandingan='$pertandingan', 
    tanggal_pertandingan='$tanggal_pertandingan', waktu_pertandingan='$waktu_pertandingan', stadion='$stadion', 
    harga='$harga'");
echo("data berhasil disimpan")
?>
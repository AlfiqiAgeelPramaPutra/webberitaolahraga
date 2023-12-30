<?php
require_once 'koneksi.php';
// menyimpan data kedalam variabel
$id             = $_POST['id'];
$query  = "SELECT foto FROM jadwal WHERE id='$id'";
$result = mysqli_query($koneksi, $query);
$data   = mysqli_fetch_array($result);

if(strlen($data['foto']) && $_FILES["foto"]["name"] != "")
        unlink($data['foto']);

$target_dir     = "./foto/";
$target_file    = $target_dir . basename($_FILES["foto"]["name"]);
$foto        = '';

if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        $foto = $target_file;
}
$kandang        = $_POST['Kandang'];
$query  = "SELECT foto2 FROM jadwal WHERE id='$id'";
$result = mysqli_query($koneksi, $query);
$data   = mysqli_fetch_array($result);

if(strlen($data['foto2']) && $_FILES["foto2"]["name"] != "")
        unlink($data['foto2']);

$target_dir     = "./foto/";
$target_file    = $target_dir . basename($_FILES["foto2"]["name"]);
$foto2         = '';

if (move_uploaded_file($_FILES["foto2"]["tmp_name"], $target_file)) {
        $foto2 = $target_file;
}
$tandang        = $_POST['Tandang'];
$tanggal        = $_POST['tanggal'];
$waktu          = $_POST['waktu'];
$liga           = $_POST['liga'];
$stadion        = $_POST['stadion'];
$harga          = $_POST['harga'];
// query SQL untuk insert data
$query="UPDATE jadwal SET foto='$foto',Kandang='$kandang',foto2='$foto2',Tandang='$tandang',tanggal='$tanggal',waktu='$waktu',liga='$liga',stadion='$stadion',harga='$harga' where id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index_jadwal.php");
?>
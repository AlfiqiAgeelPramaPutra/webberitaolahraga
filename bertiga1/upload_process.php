<?php
require_once 'koneksi.php';

$target_dir     = "./foto/";
$target_file    = $target_dir . basename($_FILES["gambar"]["name"]);


if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {

    $sql = "INSERT INTO gambar(lokasi) VALUES('$target_file')";
    mysqli_query($koneksi, $sql);
    
    echo "The file ". htmlspecialchars( basename( $_FILES["gambar"]["name"])). " has been uploaded.";
}

?>
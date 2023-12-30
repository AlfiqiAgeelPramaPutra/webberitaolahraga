<?php

    require_once "koneksi.php";
    $id = $_POST['id'];
    $target_dir     = "./foto/";
    $target_file    = $target_dir . basename($_FILES["foto"]["name"]);
    
    $foto         = '';

    
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            $foto = $target_file;
            
    }
    $kandang = $_POST['Kandang'];
    $target_file    = $target_dir . basename($_FILES["foto2"]["name"]);
    
    $foto2         = '';

    
    if (move_uploaded_file($_FILES["foto2"]["tmp_name"], $target_file)) {
            $foto2 = $target_file;
            
    }
    $tandang = $_POST['Tandang'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $liga = $_POST['liga'];
    $stadion = $_POST['stadion'];



    $insert = mysqli_query($koneksi, "insert into jadwal set id='$id', foto='$foto', Kandang='$kandang', foto2='$foto2', Tandang='$tandang',  tanggal='$tanggal',  waktu='$waktu',  liga='$liga',  stadion='$stadion'");
echo("data berhasil disimpan")
?>


<?php
require_once 'koneksi.php';
$id         = $_GET['id'];
$jadwal     = mysqli_query($koneksi, "select * from jadwal where id='$id'");
$jad        = mysqli_fetch_array($jadwal);


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form Edit Jadwal</title>
    </head>
    <body>
        <form method="post" action="update.php" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $jad['id'];?>" name="id">
            <table>
                <tr><td>Foto</td><td><input type="file" value="<?php echo $jad['foto'];?>" name="foto"></td></tr>
                <tr><td>Kandang</td><td><input type="text" value="<?php echo $jad['Kandang'];?>" name="Kandang"></td></tr>
                <tr><td>Foto 2</td><td><input type="file" value="<?php echo $jad['foto2'];?>" name="foto2"></td></tr>
                <tr><td>Tandang</td><td><input type="text" value="<?php echo $jad['Tandang'];?>" name="Tandang"></td></tr>
                <tr><td>Tanggal</td><td><input type="date" value="<?php echo $jad['tanggal'];?>" name="tanggal"></td></tr>
                <tr><td>Waktu</td><td><input type="time" value="<?php echo $jad['waktu'];?>" name="waktu"></td></tr>
                <tr><td>Liga</td><td><input type="text" value="<?php echo $jad['liga'];?>" name="liga"></td></tr>
                <tr><td>Stadion</td>
                <td>
                <select name="stadion" id="stadion">

                    <option value="Stadion Segiri" <?php if($jad['stadion'] == "Stadion Segiri")  echo "selected"; ?>>Stadion Segiri, Samarinda</option>
                    <option value="Stadion Gelora Madura Ratu Pamelingan" <?php if($jad['stadion'] == "Stadion Gelora Madura Ratu Pamelingan")  echo "selected"; ?>>Stadion Gelora Madura Ratu Pamelingan</option>
                    <option value="Stadion Gelora Bung Tomo" <?php if($jad['stadion'] == "Stadion Gelora Bung Tomo")  echo "selected"; ?>>Stadion Gelora Bung Tomo, Surabaya</option>
                    <option value="Stadion Patriot Candrabhaga" <?php if($jad['stadion'] == "Stadion Patriot Candrabhaga")  echo "selected"; ?>>Stadion Patriot Candrabhaga, Bekasi</option>
                    <option value="Jakarta International Stadium" <?php if($jad['stadion'] == "Jakarta International")  echo "selected"; ?>>Jakarta International Stadium</option>
                    <option value="Gelora Bung Karno" <?php if($jad['stadion'] == "Gelora Bung Karno")  echo "selected"; ?>>Gelora Bung Karno, Jakarta</option>
                    <option value="Gelora Bandung Lautan Api" <?php if($jad['stadion'] == "Gelora Bandung Lautan Api")  echo "selected"; ?>>Gelora Bung Karno, Jakarta</option>
                    <option value="Stadion Gelora Joko Samudro" <?php if($jad['stadion'] == "Stadion Gelora Joko Samudro")  echo "selected"; ?>>Stadion Gelora Joko Samudro, Gresik</option>
                    <option value="Stadion Gelora Delta" <?php if($jad['stadion'] == "Stadion Gelora Delta")  echo "selected"; ?>>Stadion Gelora Delta, Sidoarjo</option>
                    <option value="Stadion Wijayakusuma" <?php if($jad['stadion'] == "Stadion Wijayakusuma")  echo "selected"; ?>>Stadion Wijayakusuma, Cilacap</option>
                    <option value="Stadion Haji Agus Salim" <?php if($jad['stadion'] == "Stadion Haji Agus Salim")  echo "selected"; ?>>Stadion Haji Agus Salim, Padang</option>
                    <option value="Stadion Riau Main" <?php if($jad['stadion'] == "Stadion Riau Main")  echo "selected"; ?>>Stadion Riau Main, Pekanbaru</option>
                    <option value="Stadion Mandala Krida" <?php if($jad['stadion'] == "Stadion Mandala Krida")  echo "selected"; ?>>Stadion Mandala Krida, Yogyakarta</option>
                    
                    </select></td></tr>

                    <tr><td>Harga</td><td><input type="text" value="<?php echo $jad['harga'];?>" name="harga"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="index_jadwal.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>
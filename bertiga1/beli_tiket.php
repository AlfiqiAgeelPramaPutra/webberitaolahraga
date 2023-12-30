<?php
require_once "koneksi.php";
$id         = $_GET['id'];
$data_pembeli = mysqli_query($koneksi, "select * from data_pembeli where id='$id'");
$dat        = mysqli_fetch_array($data_pembeli);

?>

<h2>Isi Data Anda</h2>
<form method="POST" action="proses_beli.php">
    <table>
        <tr>
            <td>No Kursi</td>
            <td><input type="text" name="nokursi" disabled value="<?= rand(1, 2000)?>"></input></td>
        </tr>
        <tr>
            <td>Nama Anda</td>
            <td><input type="text" name="namapembeli"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td><input type="text" name="telepon"></input></td>
        </tr>
        <tr>
            <td>No KTP</td>
            <td><input type="text" name="noktp"></input></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="radio" id="Laki-laki"name="jk" value="Laki-laki">
                <label for="Laki-laki">Laki-laki</label><br>
                <input type="radio" id="Perempuan"name="jk" value="perempuan">
                <label for="Perempuan">Perempuan</label>
            </td>
            </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="kirim"></td>
        </tr>
    </table>
</form>
<div class="page">
<h2><center>Beli Tiket</center></h2>
<table border="1">
    <tr>
        <th>No</th>
        <th>Pertandingan</th>
        <th>Tanggal</th>
        <th>Waktu</th>
        <th>Stadion</th>
        <th>Harga Tiket</th>
        <th>Action</th>
    </tr>
    <?php
    require_once 'koneksi.php';
    $tiket = mysqli_query($koneksi, "SELECT * from tiket");
    
    while ($tik = mysqli_fetch_assoc($tiket)){
    $id = $tik['id_tiket'];
    $pertandingan = $tik['pertandingan'];
    $tanggal_pertandingan = $tik['tanggal_pertandingan'];
    $waktu_pertandingan = $tik['waktu_pertandingan'];
    $stadion = $tik['stadion'];
    $harga = $tik['harga'];
    
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$pertandingan</td>";
    echo "<td>$tanggal_pertandingan</td>";
    echo "<td>$waktu_pertandingan WIB</td>";
    echo "<td>$stadion</td>";
    echo "<td>Rp.$harga</td>";
    echo "<td>
    <a class='tombol tombol-pesan' href='http://localhost/bertiga1/beli_tiket.php?id=$id'>Beli Tiket</a>
    </a></td>";
    echo"</tr>";
}
    ?>
</table>
</div>
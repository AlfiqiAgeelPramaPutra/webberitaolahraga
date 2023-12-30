<div class="page">
<h2><center>Jadwal Pertandingan</center></h2>
<table border="1">
    <tr>
        <th>No</th>
        <th>foto</th>
        <th>Kandang</th>
        <th>foto 2</th>
        <th>Tandang</th>
        <th>Tanggal</th>
        <th>Waktu</th>
        <th>Liga</th>
        <th>Stadion</th>
        <th>Action</th>
    </tr>
    <?php
    require_once 'koneksi.php';
    $jadwal = mysqli_query($koneksi, "SELECT * from jadwal");
    
    while ($jad = mysqli_fetch_assoc($jadwal)){
    $id = $jad['id'];
    $foto = $jad['foto'];
    $kandang = $jad['Kandang'];
    $foto2 = $jad['foto2'];
    $tandang = $jad['Tandang'];
    $tanggal = $jad['tanggal'];
    $waktu = $jad['waktu'];
    $liga = $jad['liga'];
    $stadion = $jad['stadion'];
    
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td><img width='100' height='100' 
    src ='http://localhost/bertiga1/$foto'></td>";
    echo "<td>$kandang</td>";
    echo "<td><img width='100' height='100' 
    src ='http://localhost/bertiga1/$foto2'></td>";
    echo "<td>$tandang</td>";
    echo "<td>$tanggal</td>";
    echo "<td>$waktu</td>";
    echo "<td>$liga</td>";
    echo "<td>$stadion</td>";
    echo "<td>
    <a href='http://localhost/bertiga1/delete.php?id=$id'>
    Hapus</a>|
    <a href='http://localhost/bertiga1/form_update_jadwal.php?id=$id'>
    Edit</a>
         </td>";
    echo"</tr>";
}
    ?>
</table>
</div>
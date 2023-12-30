<h2>Input Data jadwal Pertandingan</h2>
<form method="post" action="proses_input.php" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Id</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type="file" name="foto"></td>
        </tr>
        <tr>
            <td>Kandang</td>
            <td><input type="text" name="Kandang"></td>
        </tr>
        <tr>
            <td>Foto 2</td>
            <td><input type="file" name="foto2"></td>
        </tr>
        <tr>
            <td>Tandang</td>
            <td><input type="text" name="Tandang"></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td><input type="date" name="tanggal"></td>
        </tr>
        <tr>
            <td>Waktu</td>
            <td><input type="time" name="waktu"></td>
        </tr>
        <tr>
            <td>liga</td>
            <td><input type="text" name="liga"></td>
        </tr>
        <tr>
            <td>Stadion</td>
            <td><select name="stadion" id="stadion">
            <option value="Stadion Segiri">Stadion Segiri, Samarinda</option>
            <option value="Stadion Gelora Madura Ratu Pamelingan">Stadion Gelora Madura Ratu Pamelingan</option>
            <option value="Stadion Gelora Bung Tomo">Stadion Gelora Bung Tomo, Surabaya</option>
            <option value="Stadion Patriot Candrabhaga">Stadion Patriot Candrabhaga, Bekasi</option>
            <option value="Jakarta International Stadium">Jakarta International Stadium</option>
            <option value="Gelora Bung Karno">Gelora Bung Karno, Jakarta</option>
            <option value="Gelora Bandung Lautan Api">Gelora Bandung Lautan Api, Bandung</option>
            <option value="Stadion Gelora Joko Samudro">Stadion Gelora Joko Samudro, Gresik</option>
            <option value="Stadion Gelora Delta">Stadion Gelora Delta, Sidoarjo</option>
            <option value="Stadion Wijayakusuma">Stadion Wijayakusuma, Cilacap</option>
            <option value="Stadion Haji Agus Salim">Stadion Haji Agus Salim, Padang</option>
            <option value="Stadion Riau Main">Stadion Riau Main, Pekanbaru</option>
            <option value="Stadion Mandala Krida">Stadion Mandala Krida, Yogyakarta</option>
        </select></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="kirim"></td>
        </tr>
    </table>
</form>
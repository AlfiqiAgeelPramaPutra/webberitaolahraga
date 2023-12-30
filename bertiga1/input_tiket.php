<h2>Input Data Tiket</h2>
<form method="post" action="proses_tiket.php">
    <table>
        <tr>
            <td>Id</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Pertandingan</td>
            <td><input type="text" name="pertandingan"></input></td>
        </tr>
        <tr>
            <td>Tanggal Pertandingan</td>
            <td><input type="date" name="tanggal_pertandingan"></input></td>
        </tr>
        <tr>
            <td>Waktu Pertandingan</td>
            <td><input type="time" name="waktu_pertandingan"></input></td>
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
            <td>Harga Tiket</td>
            <td><input type="text" name="harga"></input></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="kirim"></td>
        </tr>
    </table>
</form>
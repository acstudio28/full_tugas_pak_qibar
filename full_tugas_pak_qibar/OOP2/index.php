<?php include 'fungsi.php'; ?>
<html>
    <head>
        <title>Zodiac</title>
    </head>
    <body>
        <h1>Zodiac = </h1>
        <form action="" method="get">
            <label for="">Bulan</label>
            <select name="bulan">
                <option value="januari">Januari</option>
                <option value="februari">Februari</option>
                <option value="maret">Maret</option>
                <option value="april">April</option>
                <option value="mei">Mei</option>
                <option value="juni">Juni</option>
                <option value="juli">Juli</option>
                <option value="agustus">Agustus</option>
                <option value="september">September</option>
                <option value="oktober">Oktober</option>
                <option value="november">November</option>
                <option value="desember">Desember</option>
            </select>

            <br>
            <label for="">Tanggal</label>
            <input type="number" name="Tgl">
            <input type="submit" value="Cek Zodiac">
        </form>
    </body>
</html>
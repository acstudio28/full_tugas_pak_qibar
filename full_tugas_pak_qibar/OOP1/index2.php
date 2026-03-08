<?php include 'olah.php'; ?>

<html>
    <head>
        <title>OOP SEDERHANA</title>
    </head>
    <body>
        <h1>Nama Anda = <?= $a->cek_data('nama'); ?></h1>
        <h1>Tanggal Anda = <?= $a->cek_data('nama'); ?></h1>
        <h1>Hobi Anda = <?= $a->cek_data('nama'); ?></h1>

        <hr>

        <form action="" method="get">
            <label>Masukan Nama</label>
            <input type="text" name="nama">
            <input type="submit" value="kirim">
            <br>
            <label>Masukan Tanggal Lahir</label>
            <input type="date" name="tgl">]
            <br>
            <label>Masukan Hobi</label>
            <input type="text" name="hobi">
            <br>
            <input type="submit" value="kirim">
        </form>
    </body>
</html>
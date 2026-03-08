<?php
$angka1 = isset($_GET['angka1']) ? $_GET['angka1'] : 0;
$angka2 = isset($_GET['angka2']) ? $_GET['angka2'] : 0;
?>

<html>
    <head>
        <title>Kalkulator Sederhana</title>
    </head>
    <body>
        <h1>Hasil Tambah = <?= $ObjKal->get_data("angka1"); ?> </h1>
        <h1>Hasil Kurang = <?= $ObjKal->get_data("angka2"); ?> </h1>
        <h2>Hasil = </h2>
        
        <form action="" method="get">
            <label for="">Angka 1</label>
            <input type="number" name="angka1">
            <br>
            
            <label for="">Angka 2</label>
            <input type="number" name="angka2">
            <br>
            
            <input type="submit" name="dor" value="Tambah">
            <input type="submit" name="dor" value="Kurang">
            <input type="submit" name="dor" value="Kali">
            <input type="submit" name="dor" value="Bagi">
        </form>
    </body>
</html>
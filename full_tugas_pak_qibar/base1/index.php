<?php
$koneksi = mysqli_connect(
    'localhost', 
    'root', 
    '', 
    'xii_pplg1'
);
echo var_dump($koneksi);
// var dump (melihat isi variabel yang sudah dibuat)
?>

<html>
    <head>
        <title>Mengambil data dari database</title>
    </head>
    <body>
        <h1>Koneksi/h1></h1>
        <php echo $koneksi?>
        <br>
        <?= $koneksi?>
        <hr>
    </body>

</html>
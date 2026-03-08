<?php
// function pass test
function nilai(){
    
}

// function handle isset
$nama = $_GET['nama'];
$nilai = $_GET['nilai'];
function cek_data($data){
    if (isset($data)) {
        echo $data;
    }else{
        return "data belum diinput";
    }
}
?>

// tambahkan function nilai

<html>
    <head>
        <title>Kalkulator</title>
    </head>
    <body>
        <h1><?php echo cek_data('nama'); ?></h1>
        <h1><?php echo cek_data('nilai'); ?></h1>
        <hr
        <form action="" method="get">
            <label>Nama Peserta</label>
            <input type="text" name="nama">
            <label>Nilai LSP</label>
            <input type="number" name="nilai">
            <input type="submit" value="cek">
        </form>
    </body>
</html>
<?php

function get_data($data){
    if(isset($_GET[$data])){
        return $_GET[$data];
    }else{
        return "tidak ada data";
    }
}

?>

<html>
    <head>

    </head>
    <body>
        <h1><?php echo get_data('nama') ?></h1>
        <h1><?php 
        if(get_data('nilai') >= 78){
            echo "selamat kamu lulus! Nilai = ",get_data('nilai');
        }else{
            echo "anda tidak lulus! Nilai = ",get_data('nilai');
        }
        ?></h1>
        <hr>
        <form action="" method="get">
            <label>Nama</label>
            <input type="text" name="nama">
            <br>
            <label>Nilai</label>
            <input type="number" name="nilai">
            <br>
            <input type="submit" value="cek nilai">
        </form>
    </body>
</html>

//return dan echo
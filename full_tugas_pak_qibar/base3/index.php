<!-- Lempar data -->
<!-- Cara lempar ada dua -->
<!-- 1. Post (invicible , dilempar ke viewport) -->
<!-- 2. Get (vicible , dilempar ke url) -->

<?php

// Super global variable

// method super global ['name input']
// echo $_GET['woi']; 

echo tampil();
function tampil(){
    // isset = apakah sudah ada 

    $data = isset($_GET['woi']) ? $_GET['woi'] : null;
    echo $data;
}

?>

<html>
    <head>
        <title>Lempar data episode 1</title>
    </head>
    <body>
        <form action="" method="get">
            <label>Nama Panggilan</label>
            <input type="text" name="woi">
            <input type="submit" value="Tampilkan nama">
        </form>
    </body>
</html>


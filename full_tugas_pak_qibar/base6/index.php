<?php include 'db.php';

// query = permintaan perintah untuk db
$data = mysqli_query(
    $db, 
    "SELECT * FROM belajar"
);

?>
<html>
    <head>
        <title>Ambil data dari db</title>
    </head>
    <body>
        <?php
        // foreach (target as alias)
        foreach ($data as $x) {
            echo $x['id'];
            echo $x['nama_pelajaran'];
            echo $x['guru'];
            echo $x['hari'];
        }
        ?>
    </body>
</html>


<?php

function cek_data($data){
    if (isset($_GET[$data])) {
        if ($_GET[$data] === "" || $_GET[$data] === NULL) {
            return 0;
        } else {
            return $_GET[$data];
        }
    } else {
        return 0;
    }
}

function hasil($a, $b){
    $angka1 = cek_data($a);
    $angka2 = cek_data($b);
    $aksi   = cek_data('dor');

    if ($aksi == "Tambah") {
        return $angka1 + $angka2;
    } elseif ($aksi == "Kurang") {
        return $angka1 - $angka2;
    } elseif ($aksi == "Kali") {
        return $angka1 * $angka2;
    } elseif ($aksi == "Bagi") {
        if ($angka2 == 0) {
            return "inf";
        }
        return $angka1 / $angka2;
    } else {
        return 0;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator using function</title>
</head>
<body>

<h2>Angka Pertama = <?php echo cek_data('angka1'); ?></h2>
<h2>Angka Kedua = <?php echo cek_data('angka2'); ?></h2>
<h2>Hasil = <?php echo hasil('angka1','angka2'); ?></h2>

<hr>

<form action="" method="get">
    <label>Angka Pertama</label><br>
    <input type="number" name="angka1" value="<?php echo cek_data('angka1'); ?>">
    <br><br>

    <label>Angka Kedua</label><br>
    <input type="number" name="angka2" value="<?php echo cek_data('angka2'); ?>">
    <br><br>

    <input type="submit" name="dor" value="Tambah">
    <input type="submit" name="dor" value="Kurang">
    <input type="submit" name="dor" value="Kali">
    <input type="submit" name="dor" value="Bagi">
</form>

</body>
</html>

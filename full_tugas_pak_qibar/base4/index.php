<?php
// atur database = controller

function tambah(){
    $a = isset($_GET['angka1']) ? $_GET['angka1'] : null;
    $b = isset($_GET['angka2']) ? $_GET['angka2'] : null;
    return $a + $b;
}

function kurang(){
    $a = isset($_GET['angka1']) ? $_GET['angka1'] : null;
    $b = isset($_GET['angka2']) ? $_GET['angka2'] : null;
    return $a - $b;
}

function kali(){
    $a = isset($_GET['angka1']) ? $_GET['angka1'] : null;
    $b = isset($_GET['angka2']) ? $_GET['angka2'] : null;
    return $a * $b;
}

function bagi(){
    $a = isset($_GET['angka1']) ? $_GET['angka1'] : null;
    $b = isset($_GET['angka2']) ? $_GET['angka2'] : null;
    return $a / $b;
}

?>

<html>

<head>
    <title>Kalkulator (fungsi eps 3)</title>
</head>

<body>
    <form>
        <div>
            <label>angka pertama</label>
            <input type="number" name="angka1">
        </div>
        <div>
            <label>angka 2</label>
            <input type="number" name="angka2">
        </div>
        <input type="submit" value="hasil pertambahan">
    </form>

    <h1>hasil tambah = <?= tambah(); ?></h1>
    <h1>hasil kurang = <?= kurang(); ?></h1>
    <h1>hasil kali = <?= kali(); ?></h1>
    <h1>hasil bagi = <?= bagi(); ?></h1>
</body>

</html>
<?php

// function tanpa parameter
function lulus() {
    $namaku = "Natsuki";
    echo $namaku . " lulus CUMLAUDE";
}
lulus();

// function dengan parameter
function tambah($a, $b) {
    $rumus = $a + $b;
    return $rumus;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator dengan Params & Arguments</title>
</head>
<body>

<form action="" method="get">
    <label>Angka 1</label>
    <input type="number" name="angka1" required>

    <label>Angka 2</label>
    <input type="number" name="angka2" required>

    <input type="submit" value="( + ) Tambah">
</form>

<?php if (isset($_GET['angka1']) && isset($_GET['angka2'])) : ?>
    <div>
        <h1>Hasil Pertambahan</h1>
        <h2>
            <?= tambah($_GET['angka1'], $_GET['angka2']); ?>
        </h2>
    </div>
<?php endif; ?>

</body>
</html>

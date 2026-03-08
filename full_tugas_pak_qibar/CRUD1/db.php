<?php
// Koneksi Database
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "perpustakaan"
);

// Check koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>

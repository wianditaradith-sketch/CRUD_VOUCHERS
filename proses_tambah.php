<?php
include 'connect.php';

$kode = $_POST['kode'];
$jenis = $_POST['jenis'];
$nilai = $_POST['nilai'];
$syarat = $_POST['syarat'];

$query = "INSERT INTO vouchers (kode, jenis, nilai, syarat) VALUES ('$kode', '$jenis', '$nilai', '$syarat')";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Gagal menambahkan data: " . mysqli_error($conn);
}
?>
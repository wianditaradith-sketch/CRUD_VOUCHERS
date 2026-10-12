<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db   = "db_voucher";
$port = 3306;

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
<?php
$host = '153.92.9.1';
$user = 'u1659760_azrilmuzaki'; // default untuk XAMPP
$pass = 'K7#NmJem';     // kosongkan kalau default XAMPP
$db   = 'u1659760_azrilmuzaki';

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

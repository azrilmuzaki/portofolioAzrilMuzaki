<?php
session_start();

$host = '153.92.9.1';
$user = 'u1659760_azrilmuzaki';
$pass = 'K7#NmJem';
$db   = 'u1659760_azrilmuzaki';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

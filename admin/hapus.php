<?php
include 'koneksi.php';
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
$id = $_GET['id'];
$sql = "DELETE FROM kegiatan WHERE id=$id";
if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data.";
}
?>

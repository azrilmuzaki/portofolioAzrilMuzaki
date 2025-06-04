<?php include 'koneksi.php'; 
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kegiatan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tambah Kegiatan</h1>
    <form method="POST" action="">
        <label>Nama Kegiatan</label>
        <input type="text" name="nama" required>
        <label>Lokasi Kegiatan</label>
        <input type="text" name="lokasi" required>
        <label>Link Bukti</label>
        <input type="text" name="link" required>
        <button type="submit" name="simpan">Simpan</button>
    </form>
    <a href="index.php" class="btn">Kembali</a>

    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $lokasi = $_POST['lokasi'];
        $link = $_POST['link'];
        $sql = "INSERT INTO kegiatan (nama_kegiatan, lokasi_kegiatan, link_bukti) VALUES ('$nama', '$lokasi', '$link')";
        if ($conn->query($sql)) {
            echo "<p class='success'>Data berhasil ditambahkan.</p>";
        } else {
            echo "<p class='error'>Gagal menambahkan data.</p>";
        }
    }
    ?>
</body>
</html>

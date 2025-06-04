
<?php
include 'koneksi.php';
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM kegiatan WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Kegiatan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Kegiatan</h1>
    <form method="POST" action="">
        <label>Nama Kegiatan</label>
        <input type="text" name="nama" value="<?php echo $data['nama_kegiatan']; ?>" required>
        <label>Lokasi Kegiatan</label>
        <input type="text" name="lokasi" value="<?php echo $data['lokasi_kegiatan']; ?>" required>
        <label>Link Bukti</label>
        <input type="text" name="link" value="<?php echo $data['link_bukti']; ?>" required>
        <button type="submit" name="update">Update</button>
    </form>
    <a href="index.php" class="btn">Kembali</a>

    <?php
    if (isset($_POST['update'])) {
        $nama = $_POST['nama'];
        $lokasi = $_POST['lokasi'];
        $link = $_POST['link'];
        $sql = "UPDATE kegiatan SET nama_kegiatan='$nama', lokasi_kegiatan='$lokasi', link_bukti='$link' WHERE id=$id";
        if ($conn->query($sql)) {
            echo "<p class='success'>Data berhasil diupdate.</p>";
        } else {
            echo "<p class='error'>Gagal mengupdate data.</p>";
        }
    }
    ?>
</body>
</html>

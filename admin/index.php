<?php include 'koneksi.php';
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
} ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - Data Kegiatan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Kegiatan</h1>
    <a href="tambah.php" class="btn">+ Tambah Kegiatan</a>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Kegiatan</th>
            <th>Lokasi</th>
            <th>Link Bukti</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $sql = "SELECT * FROM kegiatan";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>$no</td>
                <td>{$row['nama_kegiatan']}</td>
                <td>{$row['lokasi_kegiatan']}</td>
                <td><a href='{$row['link_bukti']}' target='_blank'>Lihat</a></td>
                <td>
                    <a href='edit.php?id={$row['id']}' class='btn-edit'>Edit</a>
                    <a href='hapus.php?id={$row['id']}' class='btn-hapus' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
                </td>
            </tr>";
            $no++;
        }
        ?>
    </table>
    <a href="logout.php" class="btn">Logout</a>

</body>
</html>

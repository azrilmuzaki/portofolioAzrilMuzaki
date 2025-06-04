<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>portofolio</title>
</head>
<body>
    <header class="header">
    <ul>
        <li><a href="#beranda">BERANDA</a></li>     
        <li><a href="#tentang-saya">TENTANG SAYA</a></li>
        <li><a href="#portofolio">PORTOFOLIO</a></li>
        <li>
            <a href= "#">LAINNYA</a>
            <ul class="dropdown">
                <li><a href="https://www.instagram.com/ajrilll__/" target="_blank">Instagram</a></li>
                <li><a href="https://www.tiktok.com/@azrilr_" target="_blank">TikTok</a></li>
                <li><a href="https://www.linkedin.com/in/moh-azril-998880310/" target="_blank">Linkdin</a></li>
            </ul>
        </li>
    </ul>
</header>

  <section class="beranda">
    <div class="pertama" id="beranda">
        <img src="image/azrilnonbg.png" alt="foto" class="fotopertama">
        <h2 class="ppertama">
            Halo Nama Saya Adalah Moh. Azril Muzaki <br>
            Seorang Mahasiswa di UNUGIRI Bojonegoro
        </h2>
    </div>
  </section>

    <section class="tentangsaya">
    <div class="tentang" id="tentang-saya" >
        <h2 class="ptentang">TENTANG SAYA</h2>
    
        <div class="content-container">
            <h3 class="p2tentang">
                Saya biasa dipanggil Azril. Saya merupakan lulusan SMK Sunan Drajat Lamongan, dengan jurusan Teknik Komputer dan Jaringan.  
                Setelah lulus dari SMK, saya melanjutkan pendidikan di Universitas Nahdlatul Ulama Sunan Giri (UNUGIRI) Bojonegoro, 
                pada program studi Teknik Informatika, Fakultas Sains dan Teknologi.
            </h3>
            <img src="image/duaa.jpg" alt="Foto Azril" class="imgtentang">
        </div>
    </div>
  </section>

<?php include 'config/koneksi.php'; ?>
<section class="portofolio">
    <div class="judul-portofolio" id="portofolio">
        <h2 class="ppor">PORTOFOLIO KEGIATAN SAYA</h2>
    </div>
    
    <div class="table-container">
        <table class="tabelku">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama kegiatan</th>
                    <th>Lokasi Kegiatan</th>
                    <th>Bukti Kegiatan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM kegiatan";
                $result = $conn->query($sql);
                $no = 1;

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . htmlspecialchars($row['nama_kegiatan']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['lokasi_kegiatan']) . "</td>";
                        echo "<td><a href='" . htmlspecialchars($row['link_bukti']) . "' target='_blank'>Lihat Bukti</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Belum ada data kegiatan.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</section>

    <div class="opini"> 
        <h2 class="opiniku">OPINI</h2>
    </div>
    <section class="kotak-container">
      <div class="kotak-card">
        <img src="image/img1.jpg" alt="pict1" class="kotak-img">
          <h3 class="judul-kotak">Wisuda Santri</h3>
      </div>
    
      <div class="kotak-card">
        <img src="image/img2.jpg" alt="pict2" class="kotak-img">
          <h3 class="judul-kotak">Siip Babat</h3>
      </div>
    
      <div class="kotak-card">
        <img src="image/img3.jpg" alt="pict3" class="kotak-img">
          <h3 class="judul-kotak">Jakarta</h3>
      </div>

      <div class="kotak-card">
          <img src="image/img4.jpg" alt="pict4" class="kotak-img">
            <h3 class="judul-kotak">Kemantren</h3>
        </div>

        <div class="kotak-card">
          <img src="image/img5.jpg" alt="pict5" class="kotak-img">
            <h3 class="judul-kotak">Dermaga Beach</h3>
        </div>

        <div class="kotak-card">
          <img src="image/img6.jpg" alt="pict6" class="kotak-img">
            <h3 class="judul-kotak">Mahkota Babat</h3>
        </div>
    </section>

      <div class="hubungi">
        <h2 class="hubungiku">HUBUNGI SAYA</h2>
    </div>

      <div class="form-container">
        <div class="form-left">
          <h2>Formulir Kontak</h2>
          <form action="#" method="POST" class="contact-form">
            <div class="input-group">
              <label for="name">Nama:</label>
              <input type="text" id="name" name="name" required />
            </div>
            
            <div class="input-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required />
            </div>
            
            <div class="input-group">
              <label for="subject">Subject:</label>
              <input type="text" id="subject" name="subject" required />
            </div>
            
            <div class="input-group">
              <label for="message">Isi Pesan:</label>
              <textarea id="message" name="message" rows="6" required></textarea>
            </div>
            
            <button type="submit" class="submit-btn">Kirim</button>
          </form>
        </div>
    
        <div class="form-right">
          <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d780.9933689310968!2d112.12748316203731!3d-7.175813553884573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sid!2sid!4v1745461220128!5m2!1sid!2sid" width="600" height="850" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      
      <footer class="footer">
        <div class="footer-container">
          <div class="footer-left">
            <h3>Azril Portofolio</h3>
            <p>&copy; 2025 - All Rights Reserved</p>
          </div>
          <div class="footer-center">
            <p>Hubungi Saya:</p>
            <a href="mailto:azrilmuzaki99@gmail.com">azrilmuzaki99@gmail.com</a><br>
            <a href="https://github.com/azril" target="_blank">GitHub</a>
          </div>
          <div class="footer-right">
            <p>Ikuti Sosial Media</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/ajrilll/?locale=id_ID" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/145/145802.png" alt="Facebook" /></a>
              <a href="https://www.instagram.com/ajrilll__/" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" /></a>
              <a href="https://www.linkedin.com/in/moh-azril-998880310/" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/145/145807.png" alt="LinkedIn" /></a>
            </div>
          </div>
        </div>
      </footer>
      
      
</body>
</html>
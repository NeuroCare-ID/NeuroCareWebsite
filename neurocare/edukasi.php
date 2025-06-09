<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NeuroCare | Edukasi</title>
    <link rel="stylesheet" href="edukasi.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>

<body>
<header>
    <img src="logo.png" alt="NeuroCare Logo"/>
    <nav>
  <a href="dashboard.php">Home</a>
  <a href="konsultasi.php">Konsultasi</a>
  <a href="edukasi.php">Edukasi</a>
  <a href="komunitas.php">Komunitas</a>
  <a href="edukasi.php">Emergency</a>

  <form action="" method="POST" style="display:inline;">
    <button type="submit" name="logout" class="logout-btn">Logout</button>
  </form>
</nav>

  </header>


    <section class="edukasi-container">
        <h1>Edukasi</h1>
        <div class="search-bar">
            <input type="text" id="articleSearch" placeholder="Cari Artikel">
            <i class="fas fa-search search-icon"></i>
        </div>

        <div class="popular-articles">
            <h2>Artikel Populer</h2>
            <div class="popular-article-card">
                <img src="Frame 19.png" alt="Makanan Sehat">
                <h3>Makanan Sehat untuk Penderita Stroke</h3>
            </div>
        </div>

        <div class="recent-articles">
            <h2>Artikel Terbaru</h2>
            <div class="recent-articles-grid">
                <div class="recent-article-card enhanced-card"> <img src="Gambar Artikel.png" alt="Gejala Stroke">
                    <h3>Mengenal Gejala Awal Stroke: Jangan Abaikan Tanda Ini!</h3>
                    <p>Pelajari ciri-ciri awal stroke seperti mati rasa, sulit bicara, dan gangguan penglihatan agar kamu bisa segera mengambil tindakan medis.</p>
                </div>
                <div class="recent-article-card enhanced-card"> <img src="Gambar Artikel.png" alt="Gejala Stroke">
                    <h3>Mengenal Gejala Awal Stroke: Jangan Abaikan Tanda Ini!</h3>
                    <p>Pelajari ciri-ciri awal stroke seperti mati rasa, sulit bicara, dan gangguan penglihatan agar kamu bisa segera mengambil tindakan medis.</p>
                </div>
                <div class="recent-article-card enhanced-card"> <img src="Gambar Artikel.png" alt="Gejala Stroke">
                    <h3>Mengenal Gejala Awal Stroke: Jangan Abaikan Tanda Ini!</h3>
                    <p>Pelajari ciri-ciri awal stroke seperti mati rasa, sulit bicara, dan gangguan penglihatan agar kamu bisa segera mengambil tindakan medis.</p>
                </div>
                <div class="recent-article-card enhanced-card"> <img src="Gambar Artikel.png" alt="Gejala Stroke">
                    <h3>Mengenal Gejala Awal Stroke: Jangan Abaikan Tanda Ini!</h3>
                    <p>Pelajari ciri-ciri awal stroke seperti mati rasa, sulit bicara, dan gangguan penglihatan agar kamu bisa segera mengambil tindakan medis.</p>
                </div>
                <div class="recent-article-card enhanced-card"> <img src="Gambar Artikel.png" alt="Gejala Stroke">
                    <h3>Mengenal Gejala Awal Stroke: Jangan Abaikan Tanda Ini!</h3>
                    <p>Pelajari ciri-ciri awal stroke seperti mati rasa, sulit bicara, dan gangguan penglihatan agar kamu bisa segera mengambil tindakan medis.</p>
                </div>
                <div class="recent-article-card enhanced-card"> <img src="Gambar Artikel.png" alt="Gejala Stroke">
                    <h3>Mengenal Gejala Awal Stroke: Jangan Abaikan Tanda Ini!</h3>
                    <p>Pelajari ciri-ciri awal stroke seperti mati rasa, sulit bicara, dan gangguan penglihatan agar kamu bisa segera mengambil tindakan medis.</p>
                </div>
            </div>
            <button class="view-more-button">Lihat Lainnya</button>
        </div>
    </section>

    <footer>
        <div>
          <img src="logo.png" alt="NeuroCare Logo"/>
          <p>Solusi prediksi risiko stroke & telekonsultasi terpercaya.</p>
        </div>
    
          <div class="footer-left">
            <h4>Layanan</h4>
            <ul>
            <li><a href="dashboard.php" target="_blank">Cek Risiko Stroke</a></li>
            <li><a href="konsultasi.php" target="_blank">Konsultasi</a></li>
            <li><a href="edukasi.php" target="_blank">Edukasi</a></li>
            <li><a href="komunitas.php" target="_blank">Komunitas</a></li>
            </ul>
          </div>
    
          <div class="footer-right">
            <h4>Hubungi Kami</h4>
            <ul>
              <li>
                <a href="#" target="_blank">
                  <i class="fab fa-instagram"></i> Instagram</a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <i class="fab fa-twitter"></i> Twitter</a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <i class="fab fa-tiktok"></i> Tiktok </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <i class="fab fa-whatsapp"></i> WhatsApp</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>

      <script>
        (function(d,t) {
          var BASE_URL="https://app.chatwoot.com";
          var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
          g.src=BASE_URL+"/packs/js/sdk.js";
          g.defer = true;
          g.async = true;
          s.parentNode.insertBefore(g,s);
          g.onload=function(){
            window.chatwootSDK.run({
              websiteToken: 'oGkwZT9KGPvKV6kVS3GmsBSo',
              baseUrl: BASE_URL
            })
          }
        })(document,"script");
      </script>
</body>

</html>
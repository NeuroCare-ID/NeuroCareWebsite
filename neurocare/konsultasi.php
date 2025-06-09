<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>NeuroCare|Konsultasi</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="konsultasi.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>

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
<body>
    <div class="container">
        <h1>Rekomendasi Dokter</h1>
        <p>Konsultasi online dengan dokter kami</p>
        <div class="search-container">
          <input type="text" id="searchInput" placeholder="Cari nama dokter...">
          <span class="search-icon"></span>
        </div>
      
        <div class="doctor-grid" id="doctorGrid"></div>
      </div>


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

  <script src="script.js"></script>
</body>
</html>

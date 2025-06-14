<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>NeuroCare|Home</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>

  <header>
    <img src="logo.png" alt="NeuroCare Logo"/>
    <nav>
      <a href="#">Home</a>
      <a href="#">Konsultasi</a>
      <a href="#">Edukasi</a>
      <a href="#">Komunitas</a>
      <a href="#">Emergency</a>
      <a href="register.php" class="register-btn">Sign Up</a>
     <a href="login.php" class="login-btn">Log In</a>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h1>Prediksi Risiko Stroke dan Dapatkan Dukungan Kesehatan yang Tepat</h1>
      <p>Gunakan NeuroCare untuk mendeteksi risiko stroke sejak dini dan konsultasi langsung dengan dokter ahli kami.</p>
      <button>Cek Resiko Anda</button>
    </div>
    <img src="dokter.png" alt="Dokter"/>
  </section>

  <section class="layanan">
    <h2>Layanan Kami</h2>
    <div class="layanan-box">
      <div class="layanan-item">
        <h3>Konsultasi</h3>
        <p>Konsultasi dengan dokter ahli secara online.</p>
        <button>Konsultasi</button>
      </div>
      <div class="layanan-item">
        <h3>Edukasi</h3>
        <p>Informasi penting seputar stroke & kesehatan.</p>
        <button>Edukasi</button>
      </div>
      <div class="layanan-item">
        <h3>Komunitas</h3>
        <p>Gabung dalam diskusi dan dukungan bersama.</p>
        <button>Komunitas</button>
      </div>
    </div>
  </section>

  <section class="emergency">
    <h2>Emergency One-Click</h2>
    <a href="https://wa.me/081358451112">
    <button>Call 112</button></a>
  </section>
  
  
    <footer>
      <div>
        <img src="logo.png" alt="NeuroCare Logo"/>
        <p>Solusi prediksi risiko stroke & telekonsultasi terpercaya.</p>
      </div>
  
        <div class="footer-left">
          <h4>Layanan</h4>
          <ul>
            <li><a href="#" target="_blank">Cek Risiko Stroke</a></li>
            <li><a href="#" target="_blank">Konsultasi</a></li>
            <li><a href="#" target="_blank">Edukasi</a></li>
            <li><a href="#" target="_blank">Komunitas</a></li>
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

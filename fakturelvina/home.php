<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/home.css" />
    <!-- Tambahkan library untuk slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    <style>
      .search-box-image {
        text-align: center; /* Center the image */
        margin-top: 200px; /* Add space between search box and image */
      }

      .search-box-image img {
        width: 1000px; /* Make sure the image is responsive */
        height: auto; /* Maintain aspect ratio */
      }
    </style>
  </head>
  <body>
    <div class="home">
      <div class="div">
        <div class="overlap">
          <!-- Navbar -->
          <div class="navbar">
            <a href="../elvina/petugas/petugaslihat.php" class="text-wrapper">Petugas</a>
            <a href="../elvina/kendaraan/kendaraanlihat.php" class="text-wrapper-2">Kendaraan</a>
            <a href="../elvina/customer/custlihat.php" class="text-wrapper-3">Customer</a>
            <a href="../elvina/faktur/fakturlihat.php" class="text-wrapper-4">Faktur</a>
            <a href="../elvina/perlengkapan/perlihat.php" class="text-wrapper-5">Perlengkapan</a>
          </div>
          <!-- Logo -->
          <img class="garuda-universal" src="gambar/garuda_universal_motor-removebg-preview.png" />
        </div>
        <!-- Group tengah -->
        <div class="overlap-group">
          <!-- Info lebih lanjut, Logout, dan Pencarian -->
          <div class="overlap-2">
            <div class="group">
              <div class="text-wrapper-6">Info lebih lanjut</div>
            </div>
            <div class="overlap-wrapper">
              <div class="overlap-3"></div>
            </div>
            <div class="iconly-bold-profile-wrapper">
              <img class="iconly-bold-profile" src="gambar/Profile.png" />
            </div>
            <a href="../elvina/index.php" class="iconly-light-logout-wrapper">
              <img class="iconly-light-logout" src="gambar/Logout.png" />
            </a>
            <div class="overlap-group-wrapper">
              <input placeholder="Cari" class="overlap-4">
              <img class="icon-search" src="gambar/Search_.png" />
            </div>
          </div>
        </div>
        <!-- Group tengah -->
        <div class="group-2">
          <div class="div-wrapper">
            <div class="overlap-group-2">
              <!-- Contact person -->
              <div class="rectangle"></div>
              <div class="text-wrapper-9">(021)555999</div>
              <img class="call-removebg" src="gambar/call-removebg-preview 1.png" />
            </div>
          </div>
          <!-- Alamat -->
          <div class="group-3">
            <div class="overlap-5">
              <div class="rectangle"></div>
              <div class="text-wrapper-10">Babelan, Bekasi</div>
              <img class="loc-removebg-preview" src="gambar/loc-removebg-preview (1) 1.png" />
            </div>
          </div>
          <!-- Digital Catalog -->
          <div class="group-4">
            <div class="overlap-6">
              <div class="text-wrapper-11">Digital Catalog</div>
              <img class="loc-removebg-preview" src="gambar/catalog-removebg-preview 1.png" />
            </div>
          </div>
        </div>
        <!-- Slider -->
        <div class="search-box">
          <input type="text" placeholder="Cari produk...">
          <button>Cari</button>
        </div>
       
        <!-- Tambahkan gambar di bawah kotak pencarian -->
        <div class="search-box-image">
          <img src="gambar/motor.png" alt="Gambar Motor" />
        </div>
       
        <!-- Batas bawah -->
        <div class="rectangle-2"></div>
      </div>
    </div>
  </body>
</html>

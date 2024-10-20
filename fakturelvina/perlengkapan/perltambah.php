<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/perltambah.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="perlengkapan-tambah">
      <div class="div">
        <div class="group">
          <input placeholder="Cari" class="overlap-group">
            <img class="icon-search" src="../gambar/Search_.png" />
</input>
        </div>
        <div class="overlap">
          <div class="iconly-bold-profile-wrapper"><img class="iconly-bold-profile" src="../gambar/Profile.png" /></div>
          <div class="div-muistack-root">
            <div class="heading"><div class="text-wrapper-2">Elvina</div></div>
            <div class="p-muitypography-root"><div class="text-wrapper-3">vinapw@gmail.com</div></div>
          </div>
          <div class="link"><div class="text-wrapper-4">Ubah Profil</div></div>
          <div class="group-2">
            <div class="group-3">
              <div class="text-wrapper-5">Faktur</div>
              <img class="iconly-light" src="../gambar/Document.png" />
            </div>
            <div class="group-4">
              <img class="iconly-light-user" src="../gambar/3 User.png" />
              <div class="text-wrapper-6">Customer</div>
            </div>
            <div class="group-5">
              <div class="text-wrapper-7">Petugas</div>
              <img class="img" src="../gambar/Work.png" />
            </div>
            <div class="group-6">
              <div class="text-wrapper-8">Kendaraan</div>
              <img class="img" src="../gambar/Activity.png" />
            </div>
            <div class="group-7">
              <div class="text-wrapper-8">Perlengkapan</div>
              <img class="iconly-broken-bag" src="../gambar/Bag.png" />
            </div>
          </div>
          <div class="group-8">
            <img class="img" src="../gambar/Home.png" />
            <div class="text-wrapper-7">Home</div>
          </div>
        </div>
        <img class="garuda-universal" src="../gambar/garuda_universal_motor-removebg-preview.png" />
        
        <form  style="width:300px;margin-left:380px;margin-top:250px" method="post">
        <legend>Form Perlengkapan Tambah</legend>
  <div class="mb-3">
    <label for="kodeperlengkapan" class="form-label">Kode Perlengkapan</label>
    <input type="kode" name="kodeperlengkapan" class="form-control" id="kodeperlengkapan">
  </div>
  <div class="mb-3">
    <label for="namaperlengkapan" class="form-label">Nama Perlengkapan</label>
    <input type="nama" name="namaperlengkapan" class="form-control" id="namaperlengkapan">
  </div>
  <div class="mb-3">
    <label for="banyakperlengkapan" class="form-label">Banyak Perlengkapan</label>
    <input type="banyak" name="banyakperlengkapan" class="form-control" id="banyakperlengkapan">
  </div>
  <div class="mb-3 form-check">
    
  </div>
  <button type="submit" name="submit" class="btn btn-primary" value="Simpan">Simpan</button>
  <a class="btn btn-primary" href="../perlengkapan/perlihat.php">Batal</a>
  
</form>


       
        
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
  </body>
</php>
<?php

if (isset($_POST['submit'])){
    include '../koneksi.php';
  
    $kodeperlengkapan = $_POST['kodeperlengkapan'];
    $namaperlengkapan = $_POST['namaperlengkapan'];
    $banyakperlengkapan = $_POST['banyakperlengkapan'];
    
    mysqli_query($conn, "INSERT INTO perlengkapan (kodeperlengkapan,namaperlengkapan,banyakperlengkapan) VALUES('$kodeperlengkapan','$namaperlengkapan','$banyakperlengkapan')");
    header("location:perlihat.php");
}
?>

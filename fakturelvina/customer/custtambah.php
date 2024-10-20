<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/custtambah.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <div class="cust-tambah">
      <div class="div">
        <div class="group">
          <div class="overlap-group">
            <div class="text-wrapper">Cari</div>
            <img class="icon-search" src="../gambar/Search_.png" />
          </div>
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
        <legend>Form Customer Tambah</legend>
  <div class="mb-3">
    <label for="idcustomer" class="form-label">ID Customer</label>
    <input type="text" name="idcustomer" class="form-control" id="idcustomer">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="alamat">
  </div>
  <div class="mb-3 form-check">
    
  </div>
  <button type="submit" name="proses" class="btn btn-primary" value="Simpan">Simpan</button>
  <a class="btn btn-primary" href="../customer/custlihat.php">Batal</a>
  
</form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</php>
<?php

if (isset($_POST['proses'])){
    include '../koneksi.php';
  
    $idcustomer = $_POST['idcustomer'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    
    mysqli_query($conn, "INSERT INTO customer VALUES('$idcustomer','$nama','$alamat')");
    header("location:custlihat.php");
}
?>

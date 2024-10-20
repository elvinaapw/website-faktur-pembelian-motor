<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/fakturtambah.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="faktur-tambah">
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
            <div class="p-muitypography-root"><div class="text-wrapper-3">elvinaapw@gmail.com</div></div>
          </div>
          <div class="link"><div class="text-wrapper-4">Ubah Profil</div></div>
          <div class="group-2">
            <a href="../faktur/fakturlihat.php" class="group-3">
              <div class="text-wrapper-5">Faktur</div>
              <img class="iconly-light" src="../gambar/Document.png" />
            </a>
            <a href="../customer/custlihat.php" class="group-4">
              <img class="iconly-light-user" src="../gambar/3 User.png" />
              <div class="text-wrapper-6">Customer</div>
            </a>
            <a href="../petugas/petugaslihat.php" class="group-5">
              <div class="text-wrapper-7">Petugas</div>
              <img class="img" src="../gambar/Work.png" />
            </a>
            <a href="../kendaraan/kendaraanlihat.php" class="group-6">
              <div class="text-wrapper-8">Kendaraan</div>
              <img class="img" src="../gambar/Activity.png" />
            </a>
            <a href="../perlengkapan/perlihat.php" class="group-7">
              <div class="text-wrapper-8">Perlengkapan</div>
              <img class="iconly-broken-bag" src="../gambar/Bag.png" />
            </a>
          </div>
          <a href="../home.php" class="group-8">
            <img class="img" src="../gambar/Home.png" />
            <div class="text-wrapper-7">Home</div>
          </a>
        </div>
        <div class="faktur">FAKTUR</div>
        <img class="garuda-universal" src="../gambar/garuda_universal_motor-removebg-preview.png" />
        
        <!-- Adding the table form below -->
        <div style="margin-top: 300px; margin-left: 400px; width: 50%;">
          <form action="" method="post">
          <div class="row">
              <div class="col-md-6 mb-3">
              <label for="tanggal" class="form-label">Tanggal</label>
              <input type="date" name="tanggal" class="form-control" id="tanggal">
              <div></div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="nofaktur" class="form-label">No Faktur</label>
              <input type="text" name="nofaktur" class="form-control" id="nofaktur">
            </div>
            <div class="col-md-6 mb-3">
      <label for="disabledSelect" class="form-label">Customer</label>
      <select id="disabledSelect" name="idcustomer" class="form-select">
        <option></option>
        <?php
        include '../koneksi.php';
        $query=mysqli_query($conn, "SELECT * FROM customer");
        while ($data = mysqli_fetch_array($query)) {
        ?>
          
            <option value="<?php echo $data['idcustomer'];?>" >
            <?php echo $data['nama'];?></option>
        <?php
        }
        ?>
      </select>
    </div>
    <div class="col-md-6 mb-3">
      <label for="disabledSelect" class="form-label">Petugas</label>
      <select id="disabledSelect" name="kodepetugas" class="form-select">
        <option></option>
        <?php
        include '../koneksi.php';
        $query=mysqli_query($conn, "SELECT * FROM petugas");
       
        while ($data = mysqli_fetch_array($query)) {
        ?>
            
            <option value="<?php echo $data['kodepetugas'];?>" >
            <?php echo $data['namapetugas'];?></option>
        <?php
        }
        ?>
      </select>
    </div>
    <div class="col-md-6 mb-3">
      <label for="disabledSelect" class="form-label">Perlengkapan</label>
      <select id="disabledSelect" name="kodeperlengkapan" class="form-select">
        <option></option>
        <?php
        include '../koneksi.php';
        $query=mysqli_query($conn, "SELECT * FROM perlengkapan");
       
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <option value="<?php echo $data['kodeperlengkapan'];?>" >
            <?php echo $data['namaperlengkapan'];?></option>
        <?php
        }
        ?>
      </select>
    </div>
    <div class="col-md-6 mb-3">
              <label for="penerima" class="form-label">Penerima</label>
              <input type="text" name="penerima" class="form-control" id="penerima">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <div class="col-12">
            <button type="submit" name="proses" class="btn btn-primary" value="Tambah">Tambah</button>
  <a class="btn btn-primary" href="../faktur/fakturlihat.php">Batal</a>
            </div>
          </form>
        </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</php>
<?php

if (isset($_POST['proses'])){
    include '../koneksi.php';
  
    $tanggal = $_POST['tanggal'];
    $nofaktur = $_POST['nofaktur'];
    $idcustomer = $_POST['idcustomer'];
    $kodepetugas = $_POST['kodepetugas'];
    $kodeperlengkapan = $_POST['kodeperlengkapan'];
     $penerima = $_POST['penerima'];

    
    
    mysqli_query($conn, "INSERT INTO faktur VALUES('$tanggal','$nofaktur','$idcustomer','$kodepetugas','$kodeperlengkapan','$penerima')");
    
        // Gunakan nilai $kodenota untuk keperluan selanjutnya
      //  echo "<script>window.location.href = 'fakturlihat.php?nofaktur=".$nofaktur."';</script>";
echo "<script>window.location.href = 'detailtambah.php?nofaktur=".$nofaktur."';</script>";
    
}
?>

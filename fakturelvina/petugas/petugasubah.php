<?php
include '../koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM petugas WHERE kodepetugas = '$_GET[kodepetugas]'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/petugasubah.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
      <div class="petugas-ubah">
        <div class="div">
          <div>
            <div></div>
            <div class="overlap"></div>
          </div>
          <input placeholder="Cari" class="overlap-2">
          <img class="icon-search" src="../gambar/Search_.png" />
        </div>
        
        <div class="group">
          <form method="post" style="margin-top:-100px;">
          <legend>Form Perlengkapan Ubah</legend>
    <div class="mb-3">
      <label for="kodepetugas" class="form-label">Kode Petugas</label>
      <input class="form-control" type="text" name="kodepetugas" value="<?php echo $data['kodepetugas'];?>" readonly>
    </div>
    <div class="mb-3">
      <label for="namapetugas" class="form-label">Nama Petugas</label>
      <input class="form-control" type="text" name="namapetugas" value="<?php echo $data['namapetugas'];?>">
    </div>
    <div class="mb-3">
      <label for="jabatan" class="form-label">Jabatan</label>
      <input class="form-control" type="text" name="jabatan" value="<?php echo $data['jabatan'];?>">
    </div>
    <div class="mb-3">
      
      <div class="form-checSk"></div>
    </div>
    
    <button type="submit" name="proses" class="btn btn-primary">Simpan</button>
    <a class="btn btn-primary" href="../perlengkapan/perlihat.php">Batal</a>
          

        </div>
        <div class="overlap-3">
          <div class="iconly-bold-profile-wrapper">
            <img class="iconly-bold-profile" src="../gambar/Profile.png" />
          </div>
          <div class="div-muistack-root">
            <div class="heading">
              <div class="text-wrapper-7">Elvina</div>
            </div>
            <div class="p-muitypography-root">
              <div class="text-wrapper-8">vinapw@gmail.com</div>
            </div>
          </div>
          <div class="link">
            <div class="text-wrapper-9">Ubah Profil</div>
          </div>
          <div class="group-2">
            <div class="group-3">
              <div class="text-wrapper-10">Faktur</div>
              <img class="iconly-light" src="../gambar/Document.png" />
            </div>
            <div class="group-4">
              <img class="iconly-light-user" src="../gambar/3 User.png" />
              <div class="text-wrapper-11">Customer</div>
            </div>
            <div class="group-5">
              <div class="text-wrapper-12">Petugas</div>
              <img class="img-2" src="../gambar/Work.png" />
            </div>
            <div class="group-6">
              <div class="text-wrapper-13">Kendaraan</div>
              <img class="img-2" src="../gambar/Activity.png" />
            </div>
            <div class="group-7">
              <div class="text-wrapper-13">Perlengkapan</div>
              <img class="iconly-broken-bag" src="../gambar/Bag.png" />
            </div>
          </div>
          <div class="group-8">
            <img class="img-2" src="../gambar/Home.png" />
            <div class="text-wrapper-12">Home</div>
          </div>
        </div>
        <div class="petugas"></div>
        <img class="garuda-universal" src="../gambar/garuda_universal_motor-removebg-preview.png" />
       
         
        </div>
        
        </div>
      </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</php>
<?php
if (isset($_POST['proses'])) {
    include '../koneksi.php';
    $kodepetugas = $_POST['kodepetugas'];
    $namapetugas = $_POST['namapetugas'];
    $jabatan = $_POST['jabatan'];
    

    mysqli_query($conn, "UPDATE petugas SET namapetugas='$namapetugas', jabatan='$jabatan' WHERE kodepetugas='$kodepetugas'");
    header("location:petugaslihat.php");
}
?>

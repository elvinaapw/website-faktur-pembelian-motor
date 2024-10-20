<?php
            include '../koneksi.php';
            $query = mysqli_query($conn, "Select*from perlengkapan where kodeperlengkapan = '$_GET[kodeperlengkapan]'");
            $data = mysqli_fetch_array($query);
            
                ?>
  
<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/perlubah.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <form method="post">
    <div class="perlengkapan-ubah">
      <div class="div">
        <div class="overlap">
          
        <legend>Form Perlengkapan Ubah</legend>
    <div class="mb-3">
      <label for="kodeperlengkapan" class="form-label">Kode Perlengkapan</label>
      <input class="form-control" type="text" name="kodeperlengkapan" value="<?php echo $data['kodeperlengkapan'];?>" readonly>
    </div>
    <div class="mb-3">
      <label for="namaperlengkapan" class="form-label">Nama Perlengkapan</label>
      <input class="form-control" type="text" name="namaperlengkapan" value="<?php echo $data['namaperlengkapan'];?>">
    </div>
    <div class="mb-3">
      <label for="banyakperlengkapan" class="form-label">Banyak Perlengkapan</label>
      <input class="form-control" type="text" name="banyakperlengkapan" value="<?php echo $data['banyakperlengkapan'];?>">
      <div class="form-checSk"></div>
    </div>
    <button type="submit" name="proses" class="btn btn-primary">Simpan</button>
    <a class="btn btn-primary" href="../perlengkapan/perlihat.php">Batal</a>
          <img class="line-3" src="img/line-12.svg" />
        </div>
        
        <div class="group">
          <input placeholder="Cari" class="overlap-group">
            <img class="icon-search" src="../gambar/Search_.png" />
          </div>
        </div>
        
        <div class="overlap-2">
          <div class="iconly-bold-profile-wrapper"><img class="iconly-bold-profile" src="../gambar/Profile.png" /></div>
          <div class="div-muistack-root">
            <div class="heading"><div class="text-wrapper-6">Elvina</div></div>
            <div class="p-muitypography-root"><div class="text-wrapper-7">vinapw@gmail.com</div></div>
          </div>
          <div class="link"><div class="ubah-profil">Ubah&nbsp;&nbsp;Profil</div></div>
          <div class="group-3">
            <div class="group-4">
              <div class="text-wrapper-8">Faktur</div>
              <img class="iconly-light" src="../gambar/Document.png" />
            </div>
            <div class="group-5">
              <img class="iconly-light-user" src="../gambar/3 User.png" />
              <div class="text-wrapper-9">Customer</div>
            </div>
            <div class="group-6">
              <div class="text-wrapper-10">Petugas</div>
              <img class="img-2" src="../gambar/Work.png" />
            </div>
            <div class="group-7">
              <div class="text-wrapper-11">Kendaraan</div>
              <img class="img-2" src="../gambar/Activity.png" />
            </div>
            <div class="group-8">
              <div class="text-wrapper-11">Perlengkapan</div>
              <img class="iconly-broken-bag" src="../gambar/Bag.png" />
            </div>
          </div>
          <div class="group-9">
            <img class="img-2" src="../gambar/Home.png" />
            <div class="text-wrapper-10">Home</div>
          </div>
        </div>
        
        <img class="garuda-universal" src="../gambar/garuda_universal_motor-removebg-preview.png" />
        
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </form>
</php>
<?php

if (isset($_POST['proses'])){
    include '../koneksi.php';
    $kodeperlengkapan = $_POST['kodeperlengkapan'];
    $namaperlengkapan = $_POST['namaperlengkapan'];
    $banyakperlengkapan = $_POST['banyakperlengkapan'];
 
    mysqli_query($conn, "update perlengkapan set 
                            namaperlengkapan='$namaperlengkapan',banyakperlengkapan='$banyakperlengkapan' where kodeperlengkapan='$kodeperlengkapan'");
    header("location:perlihat.php");
}
?>


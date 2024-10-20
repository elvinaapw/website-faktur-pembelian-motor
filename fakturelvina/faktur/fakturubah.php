<?php
            include '../koneksi.php';
            $query = mysqli_query($conn, "Select*from faktur where nofaktur = '$_GET[nofaktur]'");
            $data = mysqli_fetch_array($query);
            
                ?>
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
        <div></div>
        <img class="garuda-universal" src="../gambar/garuda_universal_motor-removebg-preview.png" />
        
        <form action="" method="post">
          <fieldset style="margin: 150 auto; max-width: 600px; padding: 30px; border: 1px solid #ccc; border-radius: 5px;">
            <legend>Form Faktur Ubah</legend>
            <div class="mb-3">
              <label for="tanggal" class="form-label">Tanggal</label>
              <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?php echo $data['tanggal'];?>" >
            </div>
            <div class="mb-3">
              <label for="nofaktur" class="form-label">No Faktur</label>
              <input type="text" name="nofaktur" id="nofaktur" class="form-control" value="<?php echo $data['nofaktur'];?>" readonly>
            </div>
            <div class="mb-3">
              <label for="idcustomer" class="form-label">Customer</label>
              <select id="idcustomer" name="idcustomer" class="form-select"> 
                <?php
        include '../koneksi.php';
        $ambilcustomer=mysqli_query($conn, "SELECT * FROM customer");
        while ($customer = mysqli_fetch_array($ambilcustomer)) {
            $selected = ($data['idcustomer'] == $customer['idcustomer']) ? 'selected' : '';
            echo "<option value='$customer[idcustomer]' $selected>$customer[nama]</option>";
        }
        ?> 
              </select>
            </div>
            <div class="mb-3">
              <label for="petugas" class="form-label">Petugas</label>
              <select id="petugas" name="kodepetugas" class="form-select">
              <?php
        include '../koneksi.php';
        $ambilpetugas=mysqli_query($conn, "SELECT * FROM petugas");
        while ($petugas = mysqli_fetch_array($ambilpetugas)) {
            $selected = ($data['kodepetugas'] == $petugas['kodepetugas']) ? 'selected' : '';
            echo "<option value='$petugas[kodepetugas]' $selected>$petugas[namapetugas]</option>";
        }
        ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="petugas" class="form-label">Perlengkapan</label>
              <select id="kodeperlengkapan" name="kodeperlengkapan" class="form-select">
              <?php
        include '../koneksi.php';
        $ambilperlengkapan=mysqli_query($conn, "SELECT * FROM perlengkapan");
        while ($perlengkapan = mysqli_fetch_array($ambilperlengkapan)) {
            $selected = ($data['kodeperlengkapan'] == $perlengkapan['kodeperlengkapan']) ? 'selected' : '';
            echo "<option value='$perlengkapan[kodeperlengkapan]' $selected>$perlengkapan[namaperlengkapan]</option>";
        }
        ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="penerima" class="form-label">penerima</label>
              <input type="text" name="penerima" id="penerima" class="form-control" value="<?php echo $data['penerima'];?>" >
            </div>
            <div class="mb-3">
              <div class="form-check">
                
                
              </div>
            </div>
            <button type="submit" name="proses" class="btn btn-primary">Ubah</button>
  <a class="btn btn-primary" href="../faktur/fakturlihat.php">Batal</a>
          </fieldset>
        </form>
        
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</php>

<?php

if (isset($_POST['proses'])){
    include '../koneksi.php';

    $nofaktur = $_POST['nofaktur'];
    $tanggal = $_POST['tanggal'];
    $idcustomer = $_POST['idcustomer'];
    $kodepetugas = $_POST['kodepetugas'];
    $kodeperlengkapan = $_POST['kodeperlengkapan'];
    $penerima = $_POST['penerima'];
    
    

    
    
    
    mysqli_query($conn, "update faktur set tanggal='$tanggal',idcustomer='$idcustomer',
                             kodepetugas='$kodepetugas' ,kodeperlengkapan='$kodeperlengkapan',  penerima='$penerima' where nofaktur='$nofaktur'");
    echo "<script>window.location.href = 'fakturlihat.php?nofaktur=".$nofaktur."';</script>";
}
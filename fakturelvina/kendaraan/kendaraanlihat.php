<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/kendaraanlihat.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <div class="kendaraan-lihat">
      <div class="div">
      <table class="table table-striped" style="margin-top:350px; margin-left:350px; width:800px;">
        <tr>
        <th>BPKB</th>
        <th>Tipe</th>
        <th>Warna</th>
        <th>STNK</th>
        <th>No Rangka</th>
        <th>No Mesin</th>
        <th>Aksi</th>
        </tr>
        <tr>
        <?php
            include '../koneksi.php';
            $limit = 10; // Jumlah baris per halaman
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start = ($page - 1) * $limit;
        
            $query = mysqli_query($conn, "SELECT * FROM kendaraan LIMIT $start, $limit");
            while ($data=mysqli_fetch_array($query)){
                ?>
                <tr>
                <td><?php echo $data['BPKB']   ;?></td>
                <td><?php echo $data['tipe'] ;?></td>
                <td><?php echo $data['warna'] ;?></td>
                <td><?php echo $data['STNK']   ;?></td>
                <td><?php echo $data['norangka'] ;?></td>
                <td><?php echo $data['nomesin'] ;?></td>
                <td>
				<a class="edit" href="kendaraanubah.php?BPKB=<?php echo $data['BPKB'];?>" >Edit</a> |
				<a class="hapus" href="kendaraanhapus.php?BPKB=<?php echo $data['BPKB']; ?>" onclick="return confirm('yakin hapus?')">Hapus</a>				
			</td>
            </tr>
            </tr>
            <?php } ?>
        </tr>

      </table>
     
      
          

        <div class="overlap-2">
          <div class="rectangle-2"></div>
          <div class="iconly-bold-profile-wrapper"><img class="iconly-bold-profile" src="../gambar/Profile.png" /></div>
          <div class="div-muistack-root">
            <div class="heading"><div class="text-wrapper-8">Elvina</div></div>
            <div class="p-muitypography-root"><div class="text-wrapper-9">vinapw@gmail.com</div></div>
          </div>
          <div class="link"><div class="text-wrapper-10">Ubah Profil</div></div>
          <div class="group-2">
            <a href="../faktur/fakturlihat.php" class="group-3">
              <div class="text-wrapper-11">Faktur</div>
              <img class="iconly-light" src="../gambar/Document.png" />
</a>
            <a href="../customer/custlihat.php" class="group-4">
              <img class="iconly-light-user" src="../gambar/3 User.png" />
              <div class="text-wrapper-12">Customer</div>
</a>
            <a href="../petugas/petugaslihat.php" class="group-5">
              <div class="text-wrapper-13">Petugas</div>
              <img class="img-2" src="../gambar/Work.png" />
</a>
            <a href="../kendaraan/kendaraanlihat.php" class="group-6">
              <div class="text-wrapper-14">Kendaraan</div>
              <img class="img-2" src="../gambar/Activity.png" />
</a>
            <a href="../perlengkapan.perlihat.php" class="group-7">
              <div class="text-wrapper-14">Perlengkapan</div>
              <img class="iconly-broken-bag" src="../gambar/Bag.png" />
</a>
          </div>
          <a href="home.php" class="group-8">
            <img class="img-2" src="../gambar/Home.png" />
            <div class="text-wrapper-13">Home</div>
</a>
        </div>
        <div class="overlap-group-wrapper">
          <input placeholder="Cari" class="overlap-group-2">
            <img class="icon-search" src="../gambar/Search_.png" />
</input>
        </div>
        <div class="rectangle-3"></div>
        <a href="../kendaraan/kendaraantambah.php" class="group-9">
          <div class="text-wrapper-16">Tambah</div>
          <img class="img-2" src="../gambar/Paper Plus.png" /></a>


        <div class="kendaraan">KENDARAAN</div>
        <img class="garuda-universal" src="../gambar/garuda_universal_motor-removebg-preview.png" />
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</php>


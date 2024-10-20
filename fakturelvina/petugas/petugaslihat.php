<!DOCTYPE php>
<php>
  <head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/petugaslihat.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="petugas-lihat">
        
      <div class="div">
      <table class="table table-striped" style="margin-top:300px; margin-left:350px; width:800px;">
  ...<tr>
        <th>Kode Petugas</th>
        <th>Nama Petugas</th>
        <th>Jabatan</th>
        
        <th>Aksi</th>
    </tr>
    <tr>
        <?php
            include '../koneksi.php';
            $limit = 10; // Jumlah baris per halaman
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start = ($page - 1) * $limit;
        
            $query = mysqli_query($conn, "SELECT * FROM petugas LIMIT $start, $limit");
            while ($data=mysqli_fetch_array($query)){
                ?>
                <tr>
                <td><?php echo $data['kodepetugas']   ;?></td>
                <td><?php echo $data['namapetugas'] ;?></td>
                <td><?php echo $data['jabatan'] ;?></td>
                
                <td>
				<a class="edit" href="petugasubah.php?kodepetugas=<?php echo $data['kodepetugas'];?>" >Edit</a> |
				<a class="hapus" href="petugashapus.php?kodepetugas=<?php echo $data['kodepetugas']; ?>" onclick="return confirm('yakin hapus?')">Hapus</a>				
			</td>
            </tr>
            </tr>
            <?php } ?>

</table>
    
      </div>
      
        <div>
        </div>

        <div class="overlap-group-wrapper">
          <input placeholder="Cari" class="overlap-group">
            <img class="icon-search" src="../gambar/Search_.png" />
</input>
        </div>
        <a href="../petugas/petugastambah.php" class="group-2">
          <div class="text-wrapper-7">Tambah</div>
          <img class="img-2" src="../gambar/Paper Plus.png" />
</a>
        <div class="overlap-2">
          <div class="iconly-bold-profile-wrapper"><img class="iconly-bold-profile" src="../gambar/Profile.png" /></div>
          <div class="div-muistack-root">
            <div class="heading"><div class="text-wrapper-8">Elvina</div></div>
            <div class="p-muitypography-root"><div class="text-wrapper-9">vinapw@gmail.com</div></div>
          </div>
          <div class="link"><div class="text-wrapper-10">Ubah Profil</div></div>
          <div class="group-3">
            <div class="group-4">
              <div class="text-wrapper-11">Faktur</div>
              <img class="iconly-light" src="../gambar/Document.png" />
            </div>
            <div class="group-5">
              <img class="iconly-light-user" src="../gambar/3 User.png" />
              <div class="text-wrapper-12">Customer</div>
            </div>
            <div class="group-6">
              <div class="text-wrapper-13">Petugas</div>
              <img class="img-2" src="../gambar/Work.png" />
            </div>
            <div class="group-7">
              <div class="text-wrapper-14">Kendaraan</div>
              <img class="img-2" src="../gambar/Activity.png" />
            </div>
            <div class="group-8">
              <div class="text-wrapper-14">Perlengkapan</div>
              <img class="iconly-broken-bag" src="../gambar/Bag.png" />
            </div>
          </div>
          <div class="group-9">
            <img class="img-2" src="../gambar/Home.png" />
            <div class="text-wrapper-13">Home</div>
          </div>
        </div>
        <div class="petugas">PETUGAS</div>
        <img class="garuda-universal" src="../gambar/garuda_universal_motor-removebg-preview.png" />
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</php>

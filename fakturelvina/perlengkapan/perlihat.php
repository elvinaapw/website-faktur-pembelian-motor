<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/perllihat.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <form>
  <body>
    
    <div class="perlengkapan-lihat">
      
      <div class="div">
        
      <table class="table table-striped" style="margin-top:300px; margin-left:350px; width:800px;">
        <tr>
        <th>Kode Perlengkapan</th>
        <th>Nama Perlengkapan</th>
        <th>Banyak Perlengkapan</th>
        <th>Aksi</th>
        </tr>
        <tr>
        <?php
            include '../koneksi.php';
            $limit = 10; // Jumlah baris per halaman
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start = ($page - 1) * $limit;
        
            $query = mysqli_query($conn, "SELECT * FROM perlengkapan LIMIT $start, $limit");
            while ($data=mysqli_fetch_array($query)){
                ?>
                <tr>
                <td><?php echo $data['kodeperlengkapan']   ;?></td>
                <td><?php echo $data['namaperlengkapan'] ;?></td>
                <td><?php echo $data['banyakperlengkapan'] ;?></td>
                <td>
				<a class="edit" href="perlubah.php?kodeperlengkapan=<?php echo $data['kodeperlengkapan'];?>" >Edit</a> |
				<a class="hapus" href="perlhapus.php?kodeperlengkapan=<?php echo $data['kodeperlengkapan']; ?>" onclick="return confirm('yakin hapus?')">Hapus</a>				
			</td>
            </tr>
            </tr>
            <?php } ?>
        </tr>

      </table>
<a class="kembali" href="perltambah.php" style="margin-left:1000px">Tambah Perlengkapan </a>|<a class="kembali" href="../home.php">Kembali</a>
</a>
</form>
        <div class="overlap-group-wrapper">
          <input placeholder="Cari" class="overlap-group">
            <img class="icon-search" src="../gambar/Search_.png" />
</input>
        </div>
        
        <div class="overlap-2">
          <div class="iconly-bold-profile-wrapper"><img class="iconly-bold-profile" src="../gambar/Profile.png" /></div>
          <div class="div-muistack-root">
            <div class="heading"><div class="text-wrapper-7">Elvina</div></div>
            <div class="p-muitypography-root"><div class="text-wrapper-8">vinapw@gmail.com</div></div>
          </div>
          <div class="link"><div class="ubah-profil">Ubah&nbsp;&nbsp;Profil</div></div>
          <div class="group-3">
            <div class="group-4">
              <div class="text-wrapper-9">Faktur</div>
              <img class="iconly-light" src="../gambar/Document.png" />
            </div>
            <div class="group-5">
              <img class="iconly-light-user" src="../gambar/3 User.png" />
              <div class="text-wrapper-10">Customer</div>
            </div>
            <div class="group-6">
              <div class="text-wrapper-11">Petugas</div>
              <img class="img-2" src="../gambar/Bag.png" />
            </div>
            <div class="group-7">
              <div class="text-wrapper-12">Kendaraan</div>
              <img class="img-2" src="../gambar/Activity.png" />
            </div>
            <div class="group-8">
              <div class="text-wrapper-12">Perlengkapan</div>
              <img class="iconly-broken-bag" src="../gambar/Bag.png" />
            </div>
          </div>
          <div class="group-9">
            <img class="img-2" src="../gambar/Home.png" />
            <div class="text-wrapper-11">Home</div>
          </div>
        </div>
        <div class="perlengkapan">PERLENGKAPAN</div>
        <img class="garuda-universal" src="../gambar/garuda_universal_motor-removebg-preview.png" />

      </div>
      
      
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</php>

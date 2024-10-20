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
      
  
    <div>
      <div>
       
      </div>
    </div>
    
  </fieldset>
  
  
</form>
<div class="tombol-back" style="margin-left:350px; position: relative; display: flex; top: 240px;">
<a class="kembali" href="fakturtambah.php">Tambah faktur </a>|<a class="kembali" href="../home.php">Kembali</a>
</div>


      <table class="table table-striped" style="margin-top:250px; margin-left:345px; width:900px;">
        <tr>
          <th>Tanggal</th>
          <th>No Faktur</th>
          <th>Customer</th>
          <th>Petugas</th>
          <th>Perlengkapan</th>
          <th>Penerima</th>
          <th>Aksi</th>
          <th>Keterangan</th>
        </tr>
        <tr>
        <?php
            include '../koneksi.php';
            $limit = 10; // Jumlah baris per halaman
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start = ($page - 1) * $limit;
        
            $query = mysqli_query($conn, "SELECT faktur.tanggal, faktur.nofaktur, customer.idcustomer, customer.nama, petugas.kodepetugas, petugas.namapetugas, perlengkapan.kodeperlengkapan, perlengkapan.namaperlengkapan, faktur.penerima FROM faktur INNER JOIN customer ON faktur.idcustomer=customer.idcustomer INNER JOIN petugas ON faktur.kodepetugas=petugas.kodepetugas INNER JOIN perlengkapan ON faktur.kodeperlengkapan=perlengkapan.kodeperlengkapan LIMIT $start, $limit");
            while ($data=mysqli_fetch_array($query)){
                ?>
                <tr>
                <td><?php echo $data['tanggal']   ;?></td>
                <td><?php echo $data['nofaktur'] ;?></td>
                <td><?php echo $data['nama'] ;?></td>
                <td><?php echo $data['namapetugas'] ;?></td>
                <td><?php echo $data['namaperlengkapan'] ;?></td>
                <td><?php echo $data['penerima'] ;?></td>
                <td>
                <a class="edit" href="fakturubah.php?nofaktur=<?php echo $data['nofaktur'];?>" >Edit</a> |
                <a class="hapus" href="fakturhapus.php?nofaktur=<?php echo $data['nofaktur']; ?>" onclick="return confirm('yakin hapus?')">Hapus</a>
			</td>
      <td>
				<a class="detail" href="fakturdetail.php?nofaktur=<?php echo $data['nofaktur'];?>" >Detail</a> |
        <a class="cetak" href="fakturcetak.php?nofaktur=<?php echo $data['nofaktur'];?>" >Cetak</a> |		
			</td>

            </tr>
            </tr>
            <?php } ?>
            
        </tr>

      </table>
      
      

</form>
        <div class="overlap-group-wrapper">
          <input placeholder="Cari" class="overlap-group">
            <img class="icon-search" src="../gambar/Search_.png">
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
            <a href="../customer/custlihat.php" class="group-5">
              <img class="iconly-light-user" src="../gambar/3 User.png" />
              <div class="text-wrapper-10">Customer</div>
            </a>
            <a href="../petugas/petugaslihat.php" class="group-6">
              <div class="text-wrapper-11">Petugas</div>
              <img class="img-2" src="../gambar/Work.png" />
            </a>
            <a href="../kendaraan/kendaraanlihat.php" class="group-7">
              <div class="text-wrapper-12">Kendaraan</div>
              <img class="img-2" src="../gambar/Activity.png" />
            </a>
            <a href="../perlengkapan/perlengkapanlihat.php" class="group-8">
              <div class="text-wrapper-12">Perlengkapan</div>
              <img class="iconly-broken-bag" src="../gambar/Bag.png" />
            </>
          </div>
          <a href="home.php" class="group-9">
            <img class="img-2" src="../gambar/Home.png" />
            <div class="text-wrapper-11">Home</div>
            </a>
        </div>
        <div class="perlengkapan">Faktur</div>
        <img class="garuda-universal" src="../gambar/garuda_universal_motor-removebg-preview.png" />
        

      </div>
      
      
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</php>

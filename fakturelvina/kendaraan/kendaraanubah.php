<?php
include '../koneksi.php';

if (isset($_POST['proses'])){
    $BPKB = $_POST['BPKB'];
    $tipe = $_POST['tipe'];
    $warna = $_POST['warna'];
    $STNK = $_POST['STNK'];
    $norangka = $_POST['norangka'];
    $nomesin = $_POST['nomesin'];

    mysqli_query($conn, "UPDATE kendaraan SET 
        tipe='$tipe', warna='$warna', STNK='$STNK', norangka='$norangka', nomesin='$nomesin' 
        WHERE BPKB='$BPKB'");
    header("Location: kendaraanlihat.php");
    exit; // Pastikan untuk menghentikan eksekusi setelah header
}

$query = mysqli_query($conn, "SELECT * FROM kendaraan WHERE BPKB = '$_GET[BPKB]'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/kendaraanubah.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form Kendaraan Ubah</title>
</head>
<body>
    <div class="kendaraan-ubah">
        <div class="div">
            <div class="overlap">
                <div class="rectangle"></div>
                <div class="group"><img class="iconly-bold-profile" src="../gambar/Profile.png" /></div>
                <div class="div-muistack-root">
                    <div class="heading"><div class="text-wrapper">Elvina</div></div>
                    <div class="p-muitypography-root"><div class="text-wrapper-2">vinapw@gmail.com</div></div>
                </div>
                <div class="link"><div class="text-wrapper-3">Ubah Profil</div></div>
                <div class="group-2">
                    <a href="../faktur/fakturlihat.php" class="group-3">
                        <div class="text-wrapper-4">Faktur</div>
                        <img class="iconly-light" src="../gambar/Document.png" />
                    </a>
                    <a href="../customer/custlihat.php" class="group-4">
                        <img class="iconly-light-user" src="../gambar/3 User.png" />
                        <div class="text-wrapper-5">Customer</div>
                    </a>
                    <a href="../petugas/petugaslihat.php" class="group-5">
                        <div class="text-wrapper-6">Petugas</div>
                        <img class="img" src="../gambar/Work.png" />
                    </a>
                    <a href="../kendaraan/kendaraanlihat.php" class="group-6">
                        <div class="text-wrapper-7">Kendaraan</div>
                        <img class="img" src="../gambar/Activity.png" />
                    </a>
                    <a href="../perlengkapan/perlihat.php" class="group-7">
                        <div class="text-wrapper-7">Perlengkapan</div>
                        <img class="iconly-broken-bag" src="../gambar/Bag.png" />
                    </a>
                </div>
                <a href="../home.php" class="group-8">
                    <img class="img" src="../gambar/Home.png" />
                    <div class="text-wrapper-6">Home</div>
                </a>
            </div>
            <div class="overlap-group-wrapper">
                <input placeholder="Cari" class="overlap-group">
                <img class="icon-search" src="../gambar/Search_.png" />
                </input>
            </div>
            <img class="garuda-universal" src="../gambar/garuda_universal_motor-removebg-preview.png" />
            <form method="post" style="width:600px;margin-left:380px;margin-top:250px">
                <legend>Form Kendaraan Ubah</legend>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="BPKB" class="form-label">BPKB</label>
                            <input class="form-control" type="text" name="BPKB" value="<?php echo $data['BPKB'];?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="tipe" class="form-label">Tipe</label>
                            <input class="form-control" type="text" name="tipe" value="<?php echo $data['tipe'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="warna" class="form-label">Warna</label>
                            <input class="form-control" type="text" name="warna" value="<?php echo $data['warna'];?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="STNK" class="form-label">STNK</label>
                            <input class="form-control" type="text" name="STNK" value="<?php echo $data['STNK'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="norangka" class="form-label">No Rangka</label>
                            <input class="form-control" type="text" name="norangka" value="<?php echo $data['norangka'];?>">
                        </div>
                        <div class="mb-3">
                            <label for="nomesin" class="form-label">No Mesin</label>
                            <input class="form-control" type="text" name="nomesin" value="<?php echo $data['nomesin'];?>">
                        </div>
                    </div>
                </div>
                <button type="submit" name="proses" class="btn btn-primary">Simpan</button>
                <a class="btn btn-primary" href="../kendaraan/kendaraanlihat.php">Batal</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

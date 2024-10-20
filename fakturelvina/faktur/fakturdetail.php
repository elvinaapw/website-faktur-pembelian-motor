<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fakturubah.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Faktur Detail</title>
</head>
<body>
<?php
include '../koneksi.php';
$query = mysqli_query($conn, "SELECT * from faktur f ,customer c, petugas p, perlengkapan l where f.idcustomer=c.idcustomer AND f.kodepetugas=p.kodepetugas AND f.kodeperlengkapan=l.kodeperlengkapan AND nofaktur = '$_GET[nofaktur]'");
$data = mysqli_fetch_array($query);

// Periksa apakah $data memiliki nilai sebelum digunakan
if ($data) {
?>
    <div class="faktur-ubah">
        <div class="div">
            <div class="overlap">
                <div class="overlap-group">
                    <div class="overlap-group-wrapper">
                        <div class="overlap-group-2">
                            <div class="text-wrapper-13">Cari</div>
                            <img class="icon-search" src="../gambar/Search_.png">
                        </div>
                    </div>
                    <img class="garuda-universal" src="../gambar/garuda_universal_motor-removebg-preview.png" alt="Garuda Universal">
                    <form method="post" style="margin-top: 180px; margin-left: 300px; width: 100%;">
                        <fieldset disabled>
                            <legend>Faktur Detail</legend>
                            <div class="col-md-6 mb-3 d-flex align-items-center">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" id="tanggal" class="form-control" style="margin-left: 55px;" value="<?php echo htmlspecialchars($data['tanggal']); ?>">
                            </div>
                            <div class="col-md-6 mb-3 d-flex align-items-center">
                                <label for="nofaktur" class="form-label">NoFaktur</label>
                                <input type="text" id="nofaktur" class="form-control" style="margin-left: 45px;" value="<?php echo htmlspecialchars($data['nofaktur']); ?>">
                            </div>
                            <div class="col-md-6 mb-3 d-flex align-items-center">
                                <label for="idcustomer" class="form-label">Customer</label>
                                <input type="text" id="idcustomer" class="form-control" style="margin-left: 40px;" value="<?php echo htmlspecialchars($data['nama']); ?>">
                            </div>
                            <div class="col-md-6 mb-3 d-flex align-items-center">
                                <label for="kodepetugas" class="form-label">Petugas</label>
                                <input type="text" id="kodepetugas" class="form-control" style="margin-left: 50px;" value="<?php echo htmlspecialchars($data['namapetugas']); ?>">
                            </div>
                            <div class="col-md-6 mb-3 d-flex align-items-center">
                                <label for="kodeperlengkapan" class="form-label">Perlengkapan</label>
                                <input type="text" id="kodeperlengkapan" class="form-control" style="margin-left: 10px;" value="<?php echo htmlspecialchars($data['namaperlengkapan']); ?>">
                            </div>
                            <div class="col-md-6 mb-3 d-flex align-items-center">
                                <label for="penerima" class="form-label">Penerima</label>
                                <input type="text" id="penerima" class="form-control" style="margin-left: 40px;" value="<?php echo htmlspecialchars($data['penerima']); ?>">
                            </div>
                        </fieldset>
                        <a class="tambah" href="../faktur/detailtambah.php?nofaktur=<?php echo htmlspecialchars($data['nofaktur']); ?>" style="margin-left:700px;">Tambah</a>
                        |<a class="kembali" href="../faktur/fakturlihat.php">Kembali</a>
                    </form>
                    <table class="table table-striped" style="margin-top: 20px; margin-left: 300px; width: 800px;">
                        <thead>
                            <tr>
                                <th>Unit</th>
                                <th>Tipe</th>
                                <th>Warna</th>
                                <th>No Rangka</th>
                                <th>No Mesin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../koneksi.php';
                            if (isset($_GET['nofaktur'])) {
                                $nofaktur = $_GET['nofaktur'];
                                $index = 1;
                                $query = mysqli_query($conn, "SELECT d.unit, k.tipe, k.warna, k.norangka, k.nomesin, f.nofaktur, k.BPKB
                                FROM faktur f
                                JOIN detail d ON f.nofaktur = d.nofaktur
                                JOIN kendaraan k ON k.BPKB = d.BPKB
                                WHERE f.nofaktur = '$nofaktur'");
                                while ($data = mysqli_fetch_array($query)) {
                            ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($data['unit']); ?></td>
                                        <td><?php echo htmlspecialchars($data['tipe']); ?></td>
                                        <td><?php echo htmlspecialchars($data['warna']); ?></td>
                                        <td><?php echo htmlspecialchars($data['norangka']); ?></td>
                                        <td><?php echo htmlspecialchars($data['nomesin']); ?></td>
                                        <td>
                                            <a class="hapus" href="detailhapus.php?nofaktur=<?php echo htmlspecialchars($data['nofaktur']); ?>&BPKB=<?php echo htmlspecialchars($data['BPKB']); ?>" onclick="return confirm('Yakin hapus?')">Hapus</a> |
                                            <a class="edit" href="detailubah.php?nofaktur=<?php echo htmlspecialchars($data['nofaktur']); ?>">Edit</a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "<tr><td colspan='6'>No faktur not provided.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="rectangle-12"></div>
            </div>
        </div>
    </div>
<?php
} else {
    echo "Data tidak ditemukan.";
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

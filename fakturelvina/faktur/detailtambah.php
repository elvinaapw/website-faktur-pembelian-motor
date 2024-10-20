<?php
include '../koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM faktur WHERE nofaktur = '$_GET[nofaktur]'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faktur Detail Ubah</title>
    <link rel="stylesheet" href="../css/detailtambah.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="faktur-ubah">
        <h3 class="text-center mt-5">DETAIL FAKTUR TAMBAH</h3>
        <form method="post" class="mt-5">
            <h4 class="mb-4">no faktur : <?php echo $data['nofaktur']; ?></h4>
            <div class="row mb-3">
                <label for="nofaktur" class="col-sm-2 col-form-label">No Faktur</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nofaktur" name="nofaktur" value="<?php echo $data['nofaktur']; ?>" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="BPKB" class="col-sm-2 col-form-label">BPKB</label>
                <div class="col-sm-10">
                    <select class="form-select" id="BPKB" name="BPKB">
                        <option value="">--Pilih--</option>
                        <?php
                        include '../koneksi.php';
                        $query=mysqli_query($conn, "SELECT * FROM kendaraan");
                        while ($row = mysqli_fetch_array($query)) {
                            echo "<option value='$row[BPKB]' tipe='$row[tipe]'>$row[BPKB] - $row[warna] - $row[tipe]</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="unit" class="col-sm-2 col-form-label">Unit</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="unit" name="unit">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary" name="proses">Simpan Detail Faktur</button>
                    <a href="../faktur/fakturlihat.php" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php   
include '../koneksi.php';

if (isset($_POST['proses'])) {
    $nofaktur = $_POST['nofaktur'];
    $BPKB = $_POST['BPKB'];
    $unit = $_POST['unit'];

    $query_insert = "INSERT INTO detail VALUES('$nofaktur','$BPKB','$unit')";
    $result_insert = mysqli_query($conn, $query_insert);

    if ($result_insert) {
        header("Location: fakturdetail.php?nofaktur=$nofaktur");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

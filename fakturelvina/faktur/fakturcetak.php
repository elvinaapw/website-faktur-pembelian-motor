<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bukti Serah Terima Kendaraan</title>
    <style>
        body {
            min-height: 80vh;
            background-color: azure;
            font-family: serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .wrapper {
            background-color: white;
            margin-bottom: -100px;
            box-shadow: 2px 2px 2px 3px grey;
            padding: 25px;
        }
        @media print {
       
        body {
            font-size: 12px; 
        }
        
    }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="padding: 20px;">
            <div class="col-8 offset-2">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-6">
                            <h3><b>PT. GARUDA UNIVERSAL MOTOR</b></h3>
                            <h10><b>DEALER RESMI SEPEDA MOTOR HONDA</b></h10>
                            <p>Jl. Kalianyar 2 H, Surabaya 60273
                                Telp(031)376373 Fax(031)3735885
                                <?php
                                    include '../koneksi.php';
                                    $nofaktur = $_GET['nofaktur'];
                                    $query = mysqli_query($conn, "SELECT * FROM faktur f JOIN customer c ON f.idcustomer = c.idcustomer WHERE f.nofaktur = '$nofaktur'");
                                    $data = mysqli_fetch_array($query);
                                    
                                ?>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-8 offset-3">
                                    <p>
                                        <?php
                                            $query = mysqli_query($conn, "SELECT c.alamat FROM faktur f JOIN customer c ON f.idcustomer = c.idcustomer WHERE f.nofaktur = '$nofaktur'");
                                            $data = mysqli_fetch_array($query);
                                            echo $data['alamat'];
                                        ?>,   </p>
                                        <div id="date">
                                            <?php
                                                $query = mysqli_query($conn, "SELECT tanggal FROM faktur WHERE nofaktur = '$nofaktur'");
                                                $data = mysqli_fetch_array($query);
                                                echo $data['tanggal'];
                                            ?>
                                        </div>
                                    
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-12">
                                    <p>Kepada Yth : <span id="recipient-name">
                                        <?php
                                            $query = mysqli_query($conn, "SELECT c.nama FROM faktur f JOIN customer c ON f.idcustomer = c.idcustomer WHERE f.nofaktur = '$nofaktur'");
                                            $data = mysqli_fetch_array($query);
                                            echo $data['nama'];
                                        ?>
                                    </span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p>STNK/PBKB : <span id="BPKB">
                                        <?php
                                            $query = mysqli_query($conn, "SELECT k.BPKB FROM faktur f JOIN detail d ON f.nofaktur = d.nofaktur JOIN kendaraan k ON k.BPKB = d.BPKB WHERE f.nofaktur = '$nofaktur'");
                                            $data = mysqli_fetch_array($query);
                                            echo $data['BPKB'];
                                        ?>
                                    </span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <h6><b>BUKTI SERAH TERIMA KENDARAAN</b></h6>
                    </div>
                    <div class="row">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th><center>Unit</center></th>
                                    <th><center>Type</center></th>
                                    <th><center>Warna</center></th>
                                    <th><center>No.Rangka</center></th>
                                    <th><center>No.Mesin</center></th>
                                </tr>
                            </thead>
                            <tbody id="vehicle-data">
                                <?php
                                    $query = mysqli_query($conn, "SELECT d.unit, k.tipe, k.warna, k.norangka, k.nomesin FROM faktur f JOIN detail d ON f.nofaktur = d.nofaktur JOIN kendaraan k ON k.BPKB = d.BPKB WHERE f.nofaktur = '$nofaktur'");
                                    while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><center><?php echo htmlspecialchars($data['unit']); ?></center></td>
                                    <td><center><?php echo htmlspecialchars($data['tipe']); ?></center></td>
                                    <td><center><?php echo htmlspecialchars($data['warna']); ?></center></td>
                                    <td><center><?php echo htmlspecialchars($data['norangka']); ?></center></td>
                                    <td><center><?php echo htmlspecialchars($data['nomesin']); ?></center></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-2 text-center">
                    <div class="col-3" style="border: 1px solid black;">
        <p>Perlengkapan</p>
        <ul style="text-align: left; list-style-type: none; padding-left: 0;">
            <li><input type="checkbox" id="toolSet"><label for="toolSet"> Tool Set</label></li>
            <li><input type="checkbox" id="helmStandart"><label for="helmStandart"> Helm Standart</label></li>
            <li><input type="checkbox" id="spion"><label for="spion"> Spion</label></li>
            <li><input type="checkbox" id="jaketExclusive"><label for="jaketExclusive"> Jaket Exclusive</label></li>
            <li><input type="checkbox" id="bukuService"><label for="bukuService"> Buku Service</label></li>
            <li><input type="checkbox" id="bukuPedoman"><label for="bukuPedoman"> Buku Pedoman</label></li>
        </ul>
    </div>
                       
                        <div class="col-2" style="border: 1px solid black;">
                            <p>Dibuat oleh :</p>
                           
                        </div>
                        <div class="col-2" style="border: 1px solid black;">
                            <p>Pengirim 1 :</p>
                            <p>
                                <?php
                                    $query = mysqli_query($conn, "SELECT p.namapetugas FROM faktur f JOIN petugas p ON f.kodepetugas = p.kodepetugas WHERE f.nofaktur = '$nofaktur'");
                                    $data = mysqli_fetch_array($query);
                                    echo $data['namapetugas'];
                                ?>
                            </p>
                        
                            <hr>
                            <p>Tanggal :</p>
                        </div>
                        <div class="col-2" style="border: 1px solid black;">
                            <p>Pengirim 2 :</p>
                            <p>
                                <?php
                                    $query = mysqli_query($conn, "SELECT p.namapetugas FROM faktur f JOIN petugas p ON f.kodepetugas = p.kodepetugas WHERE f.nofaktur = '$nofaktur'");
                                    $data = mysqli_fetch_array($query);
                                    echo $data['namapetugas'];
                                ?>
                            </p>
                        
                            <hr>
                            <p>Jam :</p>
                        </div>
                        <div class="col-3" style="border: 1px solid black;">
                            <p>Penerima :</p>
                            <p>
                                <?php
                                    $query = mysqli_query($conn, "SELECT penerima FROM faktur WHERE nofaktur = '$nofaktur'");
                                    $data = mysqli_fetch_array($query);
                                    echo $data['penerima'];
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-5">
                            <h6><b>GARUDA Customer Care (031) 7780 8800</b></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        window.onload = function() {
            window.print();
        }
    </script>
        
    </body>
</html>

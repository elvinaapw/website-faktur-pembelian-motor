<?php
// include database connection file
include '../koneksi.php';
 
// Get id from URL to delete that user
if (isset($_GET['BPKB'])) {
    $BPKB=$_GET['BPKB'];
}
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM kendaraan WHERE BPKB='$BPKB'");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:kendaraanlihat.php");
?>
<?php
// include database connection file
include '../koneksi.php';
 
// Get id from URL to delete that user
if (isset($_GET['kodeperlengkapan'])) {
    $kodeperlengkapan=$_GET['kodeperlengkapan'];
}
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM perlengkapan WHERE kodeperlengkapan='$kodeperlengkapan'");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:perlihat.php");
?>
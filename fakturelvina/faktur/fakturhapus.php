<?php
// include database connection file
include '../koneksi.php';
 
// Get id from URL to delete that user
if (isset($_GET['nofaktur'])) {
    $nofaktur=$_GET['nofaktur'];
}
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM faktur WHERE nofaktur='$nofaktur'");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:fakturlihat.php");
?>
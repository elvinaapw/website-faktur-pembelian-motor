<?php
// include database connection file
include '../koneksi.php';
 
// Get id from URL to delete that user
if (isset($_GET['idcustomer'])) {
    $idcustomer=$_GET['idcustomer'];
}
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM customer WHERE idcustomer='$idcustomer'");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:custlihat.php");
?>
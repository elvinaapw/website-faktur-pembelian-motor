<?php
// include database connection file
include '../koneksi.php';
 
// Get id from URL to delete that user
if (isset($_GET['nofaktur'])) {
    $nofaktur=$_GET['nofaktur'];
}

if (isset($_GET['BPKB'])) {
    $BPKB=$_GET['BPKB'];
}

 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM detail
WHERE nofaktur = '$nofaktur' AND BPKB = '$BPKB'");
 


// After delete redirect to Home, so that latest user list will be displayed.
if(isset($_GET['nofaktur'])){
    $kodenota = $_GET['nofaktur'];
    // Gunakan nilai $kodenota untuk keperluan selanjutnya
    header("Location: fakturdetail.php?nofaktur=$nofaktur");
}
?>
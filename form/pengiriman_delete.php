<?php
 include "../koneksi.php";
$no_pengiriman=$_GET['no_pengiriman'];

$query=mysqli_query($conn,"DELETE FROM pengiriman WHERE no_pengiriman='$no_pengiriman'");

header("Location: ../tabledata/table_pengiriman.php");
?>
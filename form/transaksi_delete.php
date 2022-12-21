<?php
 include "../koneksi.php";
$no_invoice=$_GET['no_invoice'];

$query=mysqli_query($conn,"DELETE FROM transaksi WHERE no_invoice='$no_invoice'");

header("Location: ../tabledata/table_transaksi.php");
?>
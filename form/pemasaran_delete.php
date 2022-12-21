<?php
 include "../koneksi.php";
$id_pemasaran=$_GET['id_pemasaran'];

$query=mysqli_query($conn,"DELETE FROM pemasaran WHERE id_pemasaran='$id_pemasaran'");

header("Location: ../tabledata/table_pemasaran.php");
?>
<?php
 include "../koneksi.php";
$id_perusahaan=$_GET['id_perusahaan'];

$query=mysqli_query($conn,"DELETE FROM perusahaan WHERE id_perusahaan='$id_perusahaan'");

header("Location: ../tabledata/table_perusahaan.php");
?>
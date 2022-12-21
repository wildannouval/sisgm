<?php
 include "../koneksi.php";
$id_stok=$_GET['id_stok'];

$query=mysqli_query($conn,"DELETE FROM stok WHERE id_stok='$id_stok'");

header("Location: ../tabledata/table_stok.php");
?>
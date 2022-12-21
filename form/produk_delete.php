<?php
 include "../koneksi.php";
$id_produk=$_GET['id_produk'];

$query=mysqli_query($conn,"DELETE FROM produk WHERE id_produk='$id_produk'");

header("Location: ../tabledata/table_produk.php");
?>
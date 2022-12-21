<?php
 include "../koneksi.php";
$id_pengguna=$_GET['id_pengguna'];

$query=mysqli_query($conn,"DELETE FROM user WHERE id_pengguna='$id_pengguna'");

header("Location: ../tabledata/table_pengguna.php");
?>
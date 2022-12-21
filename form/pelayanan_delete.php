<?php
 include "../koneksi.php";
$id_pelayanan=$_GET['id_pelayanan'];

$query=mysqli_query($conn,"DELETE FROM pelayanan WHERE id_pelayanan='$id_pelayanan'");

header("Location: ../tabledata/table_pelayanan.php");
?>
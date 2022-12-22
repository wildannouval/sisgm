<?php
include "koneksi.php";
session_start();
?>

<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        ul.myUl{
            display: inline-block;
            text-align: left;
        }
    </style>
</head>

<body>

<div style="text-align:left;width: 300px;margin: 0 auto;">
    <?php
    $nama_user=$_SESSION['nama'];
    echo "<H3>Informasi Pengiriman $nama_user</H3>";
    $no=1;
    $query=mysqli_query($conn,"SELECT * FROM pengiriman WHERE nama_penerima='$nama_user'");
    while($data=mysqli_fetch_assoc($query)){
        echo "
        <p>Tabel Ke : $no</p>
        <ol>
            <li>No.pengiriman :     $data[no_pengiriman]</li>
            <li>Tanggal Pengiriman :$data[tgl_pengiriman]</li>
            <li>No Invoice :        $data[no_invoice]</li>
            <li>Waktu Pengiriman :  $data[wkt_pengiriman]</li>
            <li>Nama Penerima :     $data[nama_penerima]</li>
            <li>Alamat Penerima :   $data[almt_penerima]</li>
            <li>No HP Penerima :    $data[no_hp_penerima]</li>
            <li>Nama Barang :       $data[nama_barang]</li>
            <li>Qty Barang :        $data[qty_barang]</li>
            <li>Total :             $data[total]</li>
            <li>Keterangan :        $data[keterangan]</li>
            <li>Terms :             $data[terms]</li>
            <li>Nama Sopir :        $data[nama_sopir]</li>
            <li>No HP Sopir :       $data[no_hp_sopir]</li>
            <li>Status :            $data[status]</li>
            <li>Lokasi Terkini :    $data[lokasi_terkini]</li>
        </ol>
        <br><br>
        ";$no++;
    }
    ?>
    <a href="index.php" class="btn btn-info">Kembali Ke index</a>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
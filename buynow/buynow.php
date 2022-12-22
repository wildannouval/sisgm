<?php
include "../koneksi.php";
session_start();
$id_buynow=$_GET['id_buynow'];
$query=mysqli_query($conn,"SELECT * FROM produk WHERE id_produk='$id_buynow'");
$data=mysqli_fetch_assoc($query);
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
    <link rel="stylesheet" href="buynowstyle.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400" type="text/css">

    <!--   CSS for 147 Colors   -->
    <link href="http://www.colorname.xyz/style.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<header class="lv-bg">
    <h1 class="site-title">Buy Now!</h1>
</header>


<!--    color palettes       -->
<div class="container mx-auto">
    <h3>Data yang dipilih:</h3>
    <table width="100%">
        <tr>
            <td>ID Produk</td>
            <td>:</td>
            <td><?php echo $data['id_produk'];?></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>: </td>
            <td><?php echo $data['nama_produk'];?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>: </td>
            <td><?php echo $data['harga'];?></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>: </td>
            <td><?php echo $data['deskripsi'];?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>: </td>
            <td><?php echo $data['harga'];?></td>
        </tr>
        <tr>
            <td>Stock</td>
            <td>: </td>
            <td><?php echo $data['stock'];?></td>
        </tr>
        <tr>
            <td>Gambar Produk</td>
            <td>: </td>
            <td><img src="<?php echo '../form/file/'.$data['gambar_produk'];?>" width="100"></td>
        </tr>
    </table>
</div>
<div class="container mx-auto">
<h3 class="m-auto">Tata Cara Tranfer uang antara bank melalui ATM:</h3>
<table>
    <tr>
        <td>1.</td>
        <td>Masukkan kartu ATM ke mesin ATM</td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Piih Bahasa Indonesia</td>
    </tr>
    <tr>
        <td>3.</td>
        <td>Masukkan nomor PIN ATM</td>
    </tr>
    <tr>
        <td>4.</td>
        <td>Pilih Transaksi Lainnya, lalu pilih Transfer</td>
    </tr>
    <tr>
        <td>5.</td>
        <td>Pada pilihan bank tujuan transfer, pilih Bank Lain</td>
    </tr>
    <tr>
        <td>6.</td>
        <td>Masukkan kode bank dan nomor rekening tujuan</td>
    </tr>
    <tr>
        <td>7.</td>
        <td>Masukkan jumlah Tranfer</td>
    </tr>
    <tr>
        <td>8.</td>
        <td>Pastikan kembali kode bank, nomor rekening dan nominal transfer benar</td>
    </tr>
    <tr>
        <td>9.</td>
        <td>Pilih Bahasa Indonesia</td>
    </tr>
    <tr>
        <td>10.</td>
        <td>Pilih benar dan konfirmasi kebenaran data</td>
    </tr>
</table>
</div>
<div class="container-fluid inner">
    <table class="tableizer-table">
        <tr class="tableizer-firstrow">
            <th>No</th>
            <th>Nama Bank</th>
            <th>Kode Bank</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Bank BCA</td>
            <td>014</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Bank BNI</td>
            <td>009</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bank BNI Syariah</td>
            <td>427</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Bank BRI Syariah</td>
            <td>422</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Bank BRI</td>
            <td>002</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Bank BTN</td>
            <td>200</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Bank BTPN</td>
            <td>213</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Bank Bukopin</td>
            <td>441</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Bank CIMB Niaga</td>
            <td>022</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Bank Citibank</td>
            <td>031</td>
        </tr>
        <tr>
            <td>11</td>
            <td>Bank Danamon</td>
            <td>011</td>
        </tr>
        <tr>
            <td>12</td>
            <td>Bank Mega</td>
            <td>014</td>
        </tr>
        <tr>
            <td>13</td>
            <td>Bank Mandiri</td>
            <td>008</td>
        </tr>
        <tr>
            <td>14</td>
            <td>Bank Muamalat</td>
            <td>147</td>
        </tr>
        <tr>
            <td>15</td>
            <td>Bank OCBC NISP</td>
            <td>028</td>
        </tr>
        <tr>
            <td>16</td>
            <td>Bank Panin</td>
            <td>019</td>
        </tr>
        <tr>
            <td>17</td>
            <td>Bank Permata</td>
            <td>013</td>
        </tr>
        <tr>
            <td>18</td>
            <td>Bank Sinarmas</td>
            <td>153</td>
        </tr>
        <tr>
            <td>19</td>
            <td>Bank Syariah Mandiri</td>
            <td>451</td>
        </tr>
        <tr>
            <td>20</td>
            <td>Bank UOB Indonesia</td>
            <td>023</td>
        </tr>
        <tr>
            <td><p>Silahkan hubungi / chat nomor dibawah ini :</p></td>
            <td colspan="2"><a href="<?php echo 'https://api.whatsapp.com/send?phone=62895336889774&text=nama_customer%3A'.$_SESSION['nama'].'%2CId_barang%3A'.$data['id_produk'].'%2C%3A'.$data['nama_produk'].'%2CApakah%20Ready%3F'?>" class="btn btn-info">Contact For Buy</a></td>
        </tr>
    </table>
    
    
</div>
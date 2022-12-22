<?php
include "../koneksi.php";
if(isset($_POST['submit'])){
  $tgl_invoice = $_POST['tgl_invoice'];
  $nama_customer = $_POST['nama_customer'];
  $no_hp_customer = $_POST['no_hp_customer'];
  $id_produk = $_POST['id_produk'];
  $nama_produk = $_POST['nama_produk'];
  $qty_produk = $_POST['qty_produk'];
  $harga_produk = $_POST['harga_produk'];
  $total = $_POST['total'];
  
  $query = mysqli_query($conn,"UPDATE transaksi SET tgl_invoice='$tgl_invoice',nama_customer='$nama_customer',no_hp_customer='$no_hp_customer',id_produk='$id_produk',nama_produk='$nama_produk',qty_produk='$qty_produk',harga_produk='$harga_produk',total='$total' WHERE no_invoice='$no_invoice'");
  if($query){
    echo "<script>alert('Data berhasil di tambah');</script>"; 
    header("Location: ../tabledata/table_transaksi.php");
  }else{
    echo "<script>alert('Data gagal di tambah');</script>"; 
    header("Location: transaksi_form.php");
  }
}

$no_invoice=$_GET['no_invoice'];
$query=mysqli_query($conn,"SELECT * FROM transaksi");
$data=mysqli_fetch_assoc($query);
?>

<html>
  <head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" rel="stylesheet" />
  <link href="styleform.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js" crossorigin="anonymous"></script>
  <script src="scriptform.js"></script>
  </head>
  <body>
    <div class="container">

      <form class="well form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <fieldset>

          <!-- Form Name -->
          <legend>
            <center>
              <h2><b>Form Transaksi</b></h2>
            </center>
          </legend><br>

          <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label">Tanggal Invoice</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="tgl_invoice" placeholder="Tanggal Invoice" class="form-control" type="date" value="<?php echo $data['tgl_invoice'];?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Nama Customer</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="nama_customer" placeholder="nama customer" class="form-control" type="text" value="<?php echo $data['nama_customer'];?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">No HP Customer</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="no_hp_customer" placeholder="no hp customer" class="form-control" type="text" value="<?php echo $data['no_hp_customer'];?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Id Produk</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="id_produk" placeholder="id produk" class="form-control" type="text" value="<?php echo $data['id_produk'];?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Nama Produk</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="nama_produk" placeholder="nama produk" class="form-control" type="text" value="<?php echo $data['nama_produk'];?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Qty Produk</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="qty_produk" placeholder="qty produk" class="form-control" type="text" value="<?php echo $data['qty_produk'];?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Harga Produk</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="harga_produk" placeholder="harga produk" class="form-control" type="text" value="<?php echo $data['harga_produk'];?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Total</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="total" placeholder="total" class="form-control" type="text" value="<?php echo $data['total'];?>">
              </div>
            </div>
          </div>

          <!-- Select Basic -->

          <!-- Success message -->
          <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4"><br>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" name="submit">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
            </div>
          </div>

        </fieldset>
      </form>
    </div>
    </div><!-- /.container -->
    </body>
</html>
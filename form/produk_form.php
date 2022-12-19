<?php
include "../koneksi.php";
if(isset($_POST['submit'])){
  $nama_produk = $_POST['nama_produk'];
  $deskripsi = $_POST['deskripsi'];
  $harga = $_POST['harga'];
  $stock = $_POST['stock'];
  $ekstensi_diperbolehkan	= array('png','jpg');
  $nama_file = $_FILES['gambar_produk']['name'];
	$x = explode('.', $nama_file);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['gambar_produk']['size'];
	$file_tmp = $_FILES['gambar_produk']['tmp_name'];

  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){			
      move_uploaded_file($file_tmp, 'file/'.$nama_file);
      $query = mysqli_query($conn,"INSERT INTO produk (nama_produk,deskripsi,harga,stock,gambar_produk) VALUES ('$nama_produk','$deskripsi','$harga','$stock','$nama_file')");
      if($query){
        echo "<script>alert('File Berhasil di Upload');</script>"; 
        header("Location: ../tabledata/table_produk.php");
      }else{
        echo 'GAGAL MENGUPLOAD GAMBAR';
      }
    }else{
      echo 'UKURAN FILE TERLALU BESAR';
    }
  }else{
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
  }
}
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

      <form class="well form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <fieldset>

          <!-- Form Name -->
          <legend>
            <center>
              <h2><b>Form Produk</b></h2>
            </center>
          </legend><br>

          <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label">Nama Produk</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="nama_produk" placeholder="Nama Produk" class="form-control" type="text">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Deskripsi</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <textarea name="deskripsi" placeholder="Deskripsi Produk" class="form-control" rows="3"></textarea>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Harga Produk</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input name="harga" placeholder="Harga Produk" class="form-control" type="text">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Stock Produk</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input name="stock" placeholder="Stock Produk" class="form-control" type="text">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Gambar Produk</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input name="gambar_produk" placeholder="Gambar Produk" class="form-control" type="file">
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
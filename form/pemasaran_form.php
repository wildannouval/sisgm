<?php
include "../koneksi.php";
if(isset($_POST['submit'])){
  $id_produk = $_POST['id_produk'];
  $deskripsi = $_POST['deskripsi'];
  $harga = $_POST['harga'];
  $promo = $_POST['promo'];
  
  $query = mysqli_query($conn,"INSERT INTO pemasaran (id_produk,deskripsi,harga,promo) VALUES ('$id_produk','$deskripsi','$harga','$promo')");
  if($query){
    echo "<script>alert('Data berhasil di tambah');</script>"; 
    header("Location: ../tabledata/table_pemasaran.php");
  }else{
    echo "<script>alert('Data gagal di tambah');</script>"; 
    header("Location: pemasaran_form.php");
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

      <form class="well form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <fieldset>

          <!-- Form Name -->
          <legend>
            <center>
              <h2><b>Form Pemasaran</b></h2>
            </center>
          </legend><br>

          <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label">ID Produk</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="id_produk" placeholder="id produk" class="form-control" type="text">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Deskripsi</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <textarea name="deskripsi" placeholder="deskripsi" class="form-control" rows="3"></textarea>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Harga</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="harga" placeholder="harga" class="form-control" type="text">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Promo</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <textarea name="promo" placeholder="promo" class="form-control" rows="3"></textarea>
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
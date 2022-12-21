<?php
include "../koneksi.php";
if(isset($_POST['submit'])){
  $nama_customer = $_POST['nama_customer'];
  $keluhan = $_POST['keluhan'];
  $solusi = $_POST['solusi'];
  
  $query = mysqli_query($conn,"INSERT INTO pelayanan (nama_customer,keluhan,solusi) VALUES ('$nama_customer','$keluhan','$solusi')");
  if($query){
    echo "<script>alert('Data berhasil di tambah');</script>"; 
    header("Location: ../tabledata/table_pelayanan.php");
  }else{
    echo "<script>alert('Data gagal di tambah');</script>"; 
    header("Location: pelayanan_form.php");
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
              <h2><b>Form Pengiriman</b></h2>
            </center>
          </legend><br>

          <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label">Tanggal Pengiriman</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="tgl_pengiriman" placeholder="tanggal pengiriman" class="form-control" type="date">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">No Invoice</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="no_invoice" placeholder="nomer invoice" class="form-control" type="text">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Waktu Pengiriman</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="wkt_pengiriman" placeholder="waktu pengiriman" class="form-control" type="time">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Nama Penerima</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="nama_penerima" placeholder="nama penerima" class="form-control" type="text">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Alamat Penerima</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <textarea name="almt_penerima" placeholder="alamat penerima" class="form-control" rows="3"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">No HP Penerima</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="no_hp_penerima" placeholder="nomer hp penerima" class="form-control" type="text">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Nama Barang</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="nama_barang" placeholder="nama barang" class="form-control" type="text">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Qty Barang</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="qty_barang" placeholder="jumlah barang" class="form-control" type="text">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">total</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="total" placeholder="total" class="form-control" type="text">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Keterangan</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <textarea name="keterangan" placeholder="keterangan" class="form-control" rows="3"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Eqpt pengiriman</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="eqpt_pengiriman" placeholder="eqpt pengiriman" class="form-control" type="text">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Terms</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <textarea name="terms" placeholder="terms" class="form-control" rows="3"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Nama Sopir</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="nama_sopir" placeholder="nama sopir" class="form-control" type="text">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">No HP Sopir</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="no_hp_sopir" placeholder="nomer hp sopir" class="form-control" type="text">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Status</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="status" placeholder="status" class="form-control" type="text">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Lokasi Terkini</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="lokasi_terkini" placeholder="lokasi terkini" class="form-control" type="text">
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
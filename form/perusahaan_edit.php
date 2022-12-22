<?php
include "../koneksi.php";
if(isset($_POST['submit'])){
  $nama_perusahaan = $_POST['nama_perusahaan'];
  $no_tlp_perusahaan = $_POST['no_tlp_perusahaan'];
  $alamat_perusahaan = $_POST['alamat_perusahaan'];
  $laporan = $_POST['laporan'];
  
  $query = mysqli_query($conn,"UPDATE perusahaan SET nama_perusahaan='$nama_perusahaan',no_tlp_perusahaan='$no_tlp_perusahaan',alamat_perusahaan='$alamat_perusahaan',laporan='$laporan' WHERE id_perusahaan='$id_perusahaan'");
  if($query){
    echo "<script>alert('Data berhasil di tambah');</script>"; 
    header("Location: ../tabledata/table_perusahaan.php");
  }else{
    echo "<script>alert('Data gagal di tambah');</script>"; 
    header("Location: perusahaan_form.php");
  }
}

$id_perusahaan = $_GET['id_perusahaan'];
$query = mysqli_query($conn,"SELECT * FROM perusahaan WHERE id_perusahaan='$id_perusahaan'");
$data= mysqli_fetch_assoc($query);
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
              <h2><b>Form Perusahaan</b></h2>
            </center>
          </legend><br>

          <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label">Nama Perusahaan</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="nama_perusahaan" placeholder="Nama Perusahaan" class="form-control" type="text" value="<?php echo $data['nama_perusahaan'];?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">No Tlp Perusahaan</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="no_tlp_perusahaan" placeholder="no tlp perusahaan" class="form-control" type="text" value="<?php echo $data['no_tlp_perusahaan'];?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Alamat Perusahaan</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <textarea name="alamat_perusahaan" placeholder="alamat perusahaan" class="form-control" rows="3"><?php echo $data['alamat_perusahaan'];?></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">laporan</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <textarea name="laporan" placeholder="laporan" class="form-control" rows="3"><?php echo $data['laporan'];?></textarea>
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
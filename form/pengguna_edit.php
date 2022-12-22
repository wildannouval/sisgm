<?php
include "../koneksi.php";
if(isset($_POST['submut'])){
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_hp'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = $_POST['role'];
  
  $query = mysqli_query($conn,"UPDATE user SET nama='$nama',alamat='$alamat',no_hp='$no_hp',email='$email',password='$password',role='$role' WHERE id_pengguna='$id_pengguna'");
  if($query){
    echo "<script>alert('Data berhasil di tambah');</script>"; 
    header("Location: ../tabledata/table_pengguna.php");
  }else{
    echo "<script>alert('Data gagal di tambah');</script>"; 
    header("Location: pengguna_form.php");
  }

  
}

  $id_pengguna=$_GET['id_pengguna'];
  $query=mysqli_query($conn,"SELECT * FROM user WHERE id='$id_pengguna'");
  $data = mysqli_fetch_assoc($query);
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
              <h2><b>Form Pengguna</b></h2>
            </center>
          </legend><br>

          <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label">Nama</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="nama" placeholder="Nama Lengkap" class="form-control" type="text" value="<?php echo $data['nama'];?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Alamat</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <textarea name="alamat" placeholder="Alamat" class="form-control" rows="3"><?php echo $data['alamat'];?></textarea>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">No handphone</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input name="no_hp" placeholder="+62" class="form-control" type="text" value="<?php echo $data['no_hp'];?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Email</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input name="email" placeholder="placeholder@email.com" class="form-control" type="email" value="<?php echo $data['email'];?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Password</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input name="password" placeholder="*****" class="form-control" type="text" value="<?php echo $data['password']; ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Role</label>
            <div class="col-md-4 selectContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
                <select name="role" class="form-control selectpicker">
                  <option value="<?php echo $data['role'] ?>">Select Role</option>
                  <option>Owner</option>
                  <option>Admin</option>
                  <option>Suppliew</option>
                  <option>Marketing</option>
                  <option>Treasury</option>
                  <option>Sopir</option>
                  <option>Customer Service</option>
                  <option>Customer</option>
                </select>
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
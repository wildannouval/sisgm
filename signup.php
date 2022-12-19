<?php
include "koneksi.php";
session_start();
if(isset($_POST['signup'])){
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_hp'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = "customer";
  if(!empty(trim($nama)) && !empty(trim($alamat)) && !empty(trim($no_hp)) && !empty(trim($email)) && !empty(trim($password))){
    $query = "INSERT INTO user (nama,alamat,no_hp,email,password,role) VALUES ('$nama','$alamat','$no_hp','$email','$password','$role')";
    $result   = mysqli_query($conn, $query);
    if($result){
      header("Location: login.php");
    }else{

    }
  }else{

  }
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gopal Motor Showroom - Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background: rgb(107,183,190);
            background: linear-gradient(145deg, rgba(107,183,190,1) 0%, rgba(248,150,70,1) 100%);
        }
    </style>
  </head>

  <body >
    <div class="vh-100 d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-md-8 col-lg-6">
            <div class="card bg-white">
              <div class="card-body p-5 shadow-lg rounded-lg">
                <form class="mb-3 mt-md-4" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                  <p class="small"><a class="text-primary" href="index.php">👈Kembali</a></p>
                  <h2 class="fw-bold mb-2 text-uppercase ">Sign Up</h2>
                  <p class=" mb-2">Masukkan name, address, handphone, email, and password anda!</p>
                  <div class="mb-3">
                    <label class="form-label ">Nama lengkap</label>
                    <input name="nama" type="text" class="form-control" placeholder="John Legend">
                  </div>
                  <div class="mb-3">
                    <label class="form-label ">Alamat rumah</label>
                    <input name="alamat" type="text" class="form-control" placeholder="Pemuda St. Jakarta">
                  </div>
                  <div class="mb-3">
                    <label class="form-label ">Nomor handphone</label>
                    <input name="no_hp" type="text" class="form-control" placeholder="08123456789">
                  </div>
                  <div class="mb-3">
                    <label class="form-label ">Email</label>
                    <input name="email" type="email" class="form-control" placeholder="email@email.com">
                  </div>
                  <div class="mb-3">
                    <label class="form-label ">Password</label>
                    <input name="password" type="password" class="form-control" placeholder="*******">
                  </div>
                  <!-- <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p> -->
                  <div class="d-grid">
                    <button name="signup" class="btn btn-outline-dark" type="submit">Sign Up</button>
                  </div>
                </form>
                <div>
                  <p class="mb-0  text-center">Sudah punya akun? <a href="login.php" class="text-primary fw-bold">Login</a></p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>

</html>
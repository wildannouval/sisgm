<?php
include "koneksi.php";
session_start();
if(isset($_SESSION['email']) ) header('Location: index.php');
if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  if(!empty(trim($email)) && !empty(trim($password))){
    $query      = "SELECT * FROM user WHERE email = '$email'";
    $result     = mysqli_query($conn, $query);
    $rows       = mysqli_fetch_array($result);
    if ($rows != 0) {
      $_SESSION['email'] = $email;
      $_SESSION['nama'] = $rows['nama'];
      $_SESSION['role'] = $rows['role'];
      header('Location: index.php');
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
    <title>Gopal Motor Showroom - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background: rgb(107, 183, 190);
        background: linear-gradient(145deg, rgba(107, 183, 190, 1) 0%, rgba(248, 150, 70, 1) 100%);
    }
    </style>
</head>

<body>
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card bg-white">
                        <div class="card-body p-5 shadow-lg rounded-lg">
                            <form class="mb-3 mt-md-4" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <p class="small"><a class="text-primary" href="index.php">👈Kembali</a></p>
                                <h2 class="fw-bold mb-2 text-uppercase ">Login</h2>
                                <p class=" mb-5">Masukkan email and password anda!</p>
                                <div class="mb-3">
                                    <label class="form-label ">Email</label>
                                    <input name="email" type="email" class="form-control"
                                        placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label ">Password</label>
                                    <input name="password" type="password" class="form-control" placeholder="*******">
                                </div>
                                <!-- <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p> -->
                                <div class="d-grid">
                                    <button class="btn btn-outline-dark" type="submit" name="login">Login</button>
                                </div>
                            </form>
                            <div>
                                <p class="mb-0  text-center">Belum punya akun? <a href="signup.php"
                                        class="text-primary fw-bold">Sign
                                        Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
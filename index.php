<?php
include "koneksi.php";
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Gopal Motor Showroom</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php">
          <span>
            Showroom Gopal Motor
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.php">Product</a>
              </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About</a>
                </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
            <?php
            if(isset($_SESSION['email'])){
              $text_login = $_SESSION['nama'];
              $role = $_SESSION['role'];
              if($role == "owner"){
                echo "
              <div class='nav-item dropdown'>
				          <a href='#' data-toggle='dropdown' class='nav-item nav-link dropdown-toggle'><span>$text_login</span><i class='fa fa-user' aria-hidden='true'></i></a>
				            <div class='dropdown-menu'>					
					          <a href='dashboardpage/dashboardowner.php' class='dropdown-item'>Dashboard</a>
					          <a href='destroy.php' class='dropdown-item'>logout</a>
                    </div>
              </div>";
              }else if($role == "admin"){
                echo "
              <div class='nav-item dropdown'>
				          <a href='#' data-toggle='dropdown' class='nav-item nav-link dropdown-toggle'><span>$text_login</span><i class='fa fa-user' aria-hidden='true'></i></a>
				            <div class='dropdown-menu'>					
					          <a href='dashboardpage/dashboardadmin.php' class='dropdown-item'>Dashboard</a>
					          <a href='destroy.php' class='dropdown-item'>logout</a>
                    </div>
              </div>";
              }else if($role == "marketing"){
                echo "
              <div class='nav-item dropdown'>
				          <a href='#' data-toggle='dropdown' class='nav-item nav-link dropdown-toggle'><span>$text_login</span><i class='fa fa-user' aria-hidden='true'></i></a>
				            <div class='dropdown-menu'>					
					          <a href='dashboardpage/dashboardmarketing.php' class='dropdown-item'>Dashboard</a>
					          <a href='destroy.php' class='dropdown-item'>logout</a>
                    </div>
              </div>";
              }else if($role == "treasury"){
                echo "
              <div class='nav-item dropdown'>
				          <a href='#' data-toggle='dropdown' class='nav-item nav-link dropdown-toggle'><span>$text_login</span><i class='fa fa-user' aria-hidden='true'></i></a>
				            <div class='dropdown-menu'>					
					          <a href='dashboardpage/dashboardtreasury.php' class='dropdown-item'>Dashboard</a>
					          <a href='destroy.php' class='dropdown-item'>logout</a>
                    </div>
              </div>";
              }else if($role == "sopir"){
                echo "
              <div class='nav-item dropdown'>
				          <a href='#' data-toggle='dropdown' class='nav-item nav-link dropdown-toggle'><span>$text_login</span><i class='fa fa-user' aria-hidden='true'></i></a>
				            <div class='dropdown-menu'>					
					          <a href='dashboardpage/dashboardsopir.php' class='dropdown-item'>Dashboard</a>
					          <a href='destroy.php' class='dropdown-item'>logout</a>
                    </div>
              </div>";
              }else if($role == "cs"){
                echo "
              <div class='nav-item dropdown'>
				          <a href='#' data-toggle='dropdown' class='nav-item nav-link dropdown-toggle'><span>$text_login</span><i class='fa fa-user' aria-hidden='true'></i></a>
				            <div class='dropdown-menu'>					
					          <a href='dashboardpage/dashboardcs.php' class='dropdown-item'>Dashboard</a>
					          <a href='destroy.php' class='dropdown-item'>logout</a>
                    </div>
              </div>";
              }else if($role == "customer"){
                echo "
                <div class='nav-item dropdown'>
                    <a href='#' data-toggle='dropdown' class='nav-item nav-link dropdown-toggle'><span>$text_login</span><i class='fa fa-user' aria-hidden='true'></i></a>
                      <div class='dropdown-menu'>					
                      <a href='pengirimanproduk.php' class='dropdown-item'>pengiriman produk</a>
                      <a href='destroy.php' class='dropdown-item'>logout</a>
                      </div>
                </div>";
              }else if($role == "supplier"){
                echo "
              <div class='nav-item dropdown'>
				          <a href='#' data-toggle='dropdown' class='nav-item nav-link dropdown-toggle'><span>$text_login</span><i class='fa fa-user' aria-hidden='true'></i></a>
				            <div class='dropdown-menu'>					
					          <a href='dashboardpage/dashboardsupplier.php' class='dropdown-item'>Dashboard</a>
					          <a href='destroy.php' class='dropdown-item'>logout</a>
                    </div>
              </div>";
              }
      
            }else{
              $text_login = "Login";
              echo "<a href='login.php'>
              <span>
                $text_login
              </span>
              <i class='fa fa-user' aria-hidden='true'></i>
            </a>";
            }
            ?>
            <!-- <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form> -->
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section long_section">
      <div id="customCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      Cari <br>
                      Mobil ?
                    </h1>
                    <p>
                      Gopal Showroom adalah piliihan yang tepat dalam untuk anda.
                    </p>
                    <div class="btn-box">
                      <a href="product.php" class="btn1">
                        Buy Now!
                      </a>
                      <!-- <a href="" class="btn2">
                        Daftar
                      </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/mobil-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      Cari <br>
                      Mobil ?
                    </h1>
                    <p>
                      Gopal Showroom adalah piliihan yang tepat dalam untuk anda.
                    </p>
                    <div class="btn-box">
                      <a href="product.php" class="btn1">
                        Buy Now!
                      </a>
                      <!-- <a href="" class="btn2">
                        About Us
                      </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/mobil-img2.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      Cari <br>
                      Mobil ?
                    </h1>
                    <p>
                      Gopal Showroom adalah piliihan yang tepat dalam untuk anda.
                    </p>
                    <div class="btn-box">
                      <a href="product.php" class="btn1">
                         Buy Now!
                      </a>
                      <!-- <a href="" class="btn2">
                        About Us
                      </a> -->
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/mobil-img3.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel" data-slide-to="1"></li>
          <li data-target="#customCarousel" data-slide-to="2"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- furniture section -->

  <section class="furniture_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Product
        </h2>
        <p>
          Pilih produk sesuai dengan keinginginan anda.
        </p>
      </div>
      <div class="row">
      <?php
              $query="SELECT * FROM produk";
              $result=mysqli_query($conn,$query);
              while($row = mysqli_fetch_array($result)){
                $harga_rp = number_format($row['harga'],0,",",".");
                echo "
              <div class='col-md-6 col-lg-4'>
              <div class='box'>
              <div class='img-box'>
                <img src='form/file/$row[gambar_produk]'>
              </div>
              <div class='detail-box'>
              <h5>
                $row[nama_produk]
              </h5>
              <div class='price_box'>
                <h6 class='price_heading'>
                  <span>Rp</span> $harga_rp
                </h6>
                <a href='buynow/buynow.php?id_buynow=$row[id_produk]'>
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
              ";
              }
              
            ?>
      </div>
    </div>
  </section>

  <!-- end furniture section -->


  <!-- about section -->

  <section class="about_section layout_padding long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
            VISI :<br>
            Menjadi Showroom Mobil terbaik di Indonesia dengan kualitas pelayanan paling memuaskan bagi pelanggan.
            </p>
            <a href="about.php">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- info section -->
  <section class="info_section long_section">

    <div class="container">
      <div class="contact_nav">
        <a href="<?php echo 'https://api.whatsapp.com/send?phone=62895336889774';?>">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : +62895336889700
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : gopalshowroom@gmail.com
          </span>
        </a>
        <a href="https://www.google.com/maps/search/?api=1&query=-7.432478%2C109.339545">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            Location
          </span>
        </a>
      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Sistem Informasi Showroom Gopal Motor</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>
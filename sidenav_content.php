<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mx-auto">
                        <h1 class="mt-4"><?php echo 'Selamat Datang Di Dashboard '.$_SESSION['nama'];?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><?php echo 'Nama :'.$_SESSION['nama'];?></li>
                            <li class="breadcrumb-item active"><?php echo 'Email : '.$_SESSION['email'];?></li>
                        </ol>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
<?php
include "../koneksi.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../dashboardstyle/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
        include "../navbar.php";
        ?>
        <div id="layoutSidenav">
            <?php
            include "../sidenav_nav.php";
            ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Table Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <a href="../form/produk_form.php" class="btn btn-info">Add Produk</a>
                            <a href="../form/exportproduk.php" class="btn btn-success">Export Laporan</a>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Table Data Produk
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>id_produk</th>
                                            <th>nama_produk</th>
                                            <th>deskripsi</th>
                                            <th>harga</th>
                                            <th>stok</th>
                                            <th>gambar_produk</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id_produk</th>
                                            <th>nama_produk</th>
                                            <th>deskripsi</th>
                                            <th>harga</th>
                                            <th>stok</th>
                                            <th>gambar_produk</th>
                                            <th>aksi<th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM produk";
                                        $result = mysqli_query($conn,$query);
                                        while($row = mysqli_fetch_array($result)){
                                            $harga_rp = number_format($row['harga'],0,",",".");
                                            echo "
                                            <tr>
                                            <td>$row[id_produk]</td>
                                            <td>$row[nama_produk]</td>
                                            <td>$row[deskripsi]</td>
                                            <td>$harga_rp</td>
                                            <td>$row[stock]</td>
                                            <td><img src='../form/file/$row[gambar_produk]' width='50'></td>
                                            <td>
                                            <a href='../form/produk_edit.php?id_produk=$row[id_produk]' class='btn btn-warning'>Edit</a>
                                            <a href='../form/produk_delete.php?id_produk=$row[id_produk]' class='btn btn-danger'>Delete</a>
                                            </td>
                                        </tr>
                                        ";
                                        }
                                        
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../dashboardstyle/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../dashboardstyle/assets/demo/chart-area-demo.js"></script>
        <script src="../dashboardstyle/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../dashboardstyle/js/datatables-simple-demo.js"></script>
    </body>
</html>

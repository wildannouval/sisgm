<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?php echo 'dashboard'.$_SESSION['role'].'.php'; ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Table
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <?php
                                    if($_SESSION['role'] == "owner"){
                                        echo '
                                        <a class="nav-link" href="../tabledata/table_produk.php">Table Produk</a>
                                        <a class="nav-link" href="../tabledata/table_perusahaan.php">Table Perusahaan</a>
                                        <a class="nav-link" href="../tabledata/table_transaksi.php">Table Transaksi</a>
                                        <a class="nav-link" href="../tabledata/table_stok.php">Table Stok</a>
                                        <a class="nav-link" href="../tabledata/table_pengiriman.php">Table Pengiriman</a>
                                        <a class="nav-link" href="../tabledata/table_pelayanan.php">Table Pelayanan</a>
                                        <a class="nav-link" href="../tabledata/table_pengguna.php">Table Pengguna</a>
                                        <a class="nav-link" href="../tabledata/table_pemasaran.php">Table Pemasaran</a>
                                        ';
                                    }else if($_SESSION['role'] == "admin"){
                                        echo '
                                        <a class="nav-link" href="../tabledata/table_produk.php">Table Produk</a>
                                        <a class="nav-link" href="../tabledata/table_perusahaan.php">Table Perusahaan</a>
                                        <a class="nav-link" href="../tabledata/table_transaksi.php">Table Transaksi</a>
                                        <a class="nav-link" href="../tabledata/table_stok.php">Table Stok</a>
                                        <a class="nav-link" href="../tabledata/table_pengiriman.php">Table Pengiriman</a>
                                        <a class="nav-link" href="../tabledata/table_pelayanan.php">Table Pelayanan</a>
                                        <a class="nav-link" href="../tabledata/table_pengguna.php">Table Pengguna</a>
                                        <a class="nav-link" href="../tabledata/table_pemasaran.php">Table Pemasaran</a>
                                        ';
                                    }else if($_SESSION['role'] == "supplier"){
                                        echo '
                                        <a class="nav-link" href="../tabledata/table_produk.php">Table Produk</a>
                                        <a class="nav-link" href="../tabledata/table_stok.php">Table Stok</a>
                                        ';
                                    }else if($_SESSION['role'] == "marketing"){
                                        echo '
                                        <a class="nav-link" href="../tabledata/table_produk.php">Table Produk</a>
                                        <a class="nav-link" href="../tabledata/table_transaksi.php">Table Transaksi</a>
                                        ';
                                    }else if($_SESSION['role'] == "treasury"){
                                        echo '
                                        <a class="nav-link" href="../tabledata/table_transaksi.php">Table Transaksi</a>
                                        ';
                                    }else if($_SESSION['role'] == "sopir"){
                                        echo '
                                        <a class="nav-link" href="../tabledata/table_pengiriman.php">Table Pengiriman</a>
                                        ';
                                    }else if($_SESSION['role'] == "cs"){
                                        echo '
                                        <a class="nav-link" href="../tabledata/table_produk.php">Table Produk</a>
                                        <a class="nav-link" href="../tabledata/table_pelayanan.php">Table Pelayanan</a>
                                        ';
                                    }
                                    ?>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Setting</div>
                            <a class="nav-link" href="../index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Home
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['role'];?>
                    </div>
                </nav>
            </div>
<?php
require 'function.php';
require 'cek.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Rekapan Data</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Var Express</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="datacustomer.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Data Customer
                            </a>
                            <a class="nav-link" href="hargacustomer.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Harga Customer
                            </a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Rekapan Pesanan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="gudangflashcargo.php">Gudang FlashCargo</a>
                                    <a class="nav-link" href="gudangfasdeli.php">Gudang Fasdeli</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="logout.php">
                                Logout
                            </a>
                            
                            

</div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Harga Customer</h1>
                    

                        <div class="card mb-4">
                            <div class="card-header">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    Add Data
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Marking</th>
                                            <th>Nama Customer</th>
                                            <th>Kategori Barang</th>
                                            <th>Harga Barang</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                        $ambilsemuadataharga = mysqli_query($conn,"SELECT * FROM hargacustomer");
                                        $i = 1;
                                        while($data=mysqli_fetch_array($ambilsemuadataharga)){
                                           
                                            $kodemarking = $data['kodemarking'];
                                            $namacustomer = $data['namacustomer'];
                                            $kategoribarang = $data['kategoribarang'];
                                            $hargabarang = $data['hargabarang'];
                                        
                                        ?>
                                        <tr>
                                        <td><?=$i++;?></td>
                                        <td><?=$kodemarking;?></td>
                                        <td><?=$namacustomer;?></td>
                                        <td><?=$kategoribarang;?></td>
                                        <td><?=$hargabarang;?></td>
                                            
                                        </tr>
                                        <?php
                                        };

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Var Express 2023</div>
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>

    <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Data Harga</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="post">
        <div class="modal-body">
            
         <input type="text" name="kodemarking" placeholder="Kode Marking" class="form-control" required>
         <br>
         <input type="text" name="namacustomer" placeholder="Nama Customer" class="form-control" required>
         <br>
         <input type="text" name="kategoribarang" placeholder="Kategori Barang" class="form-control" required>
         <br>
         <input type="text" name="hargabarang" placeholder="Harga Barang" class="form-control" required>
         <br>
         <button type="submit" class="btn btn-danger" name="adddatoharga">submit</button>
         <br>

        </div>
        </form>
        
        <!-- Modal footer -->
        
      </div>
    </div>
  </div>
</html>

<?php
session_start();
if (isset($_SESSION['admin'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Pengolahan Data BBM </title>

        <!-- Custom fonts for this template-->
        <link href="../assets/sb_admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="../assets/sb_admin/css/sb-admin-2.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/af-2.3.3/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-print-1.5.6/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-2.0.0/sl-1.3.0/datatables.min.css" />
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/af-2.3.3/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-print-1.5.6/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-2.0.0/sl-1.3.0/datatables.min.js"></script>
        <!-- Date Picker -->
        <link rel="stylesheet" href="../assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="../assets/bootstrap-daterangepicker/daterangepicker.css">

    </head>
    <?php
        array_key_exists('page', $_GET) ? $page = $_GET['page'] : $page = '';
        ?>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

                    <div class="sidebar-brand-text mx-3">Data BBM </div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item ">
                    <a class="nav-link" href="index1.php?page=Home">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Input Data
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item ">
                    <a class="nav-link" href="index1.php?page=Lihat-data-bbm">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Input Data BBM</span></a>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Input Data Pendukung</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Input :</h6>
                            <a class="collapse-item" href="index1.php?page=Lihat-data-kendaraan">Input Data Kendaraan</a>
                            <a class="collapse-item" href="index1.php?page=Lihat-data-jenis-bbm">Input Data Jenis BBM</a>
                            <a class="collapse-item" href="index1.php?page=Lihat-data-user">Input Data User</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Laporan
                </div>


                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="index1.php?page=Laporan-BBM">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Laporan</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">


                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>


                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <img class="img-profile rounded-circle" src="../assets/images/user/<?= $_SESSION['gambar'] ?>">
                                    <span class="hidden-xs text-gray-900"><?= $_SESSION['nama'] ?></span>


                                </a>

                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../controlers/login/logout.php">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <?php


                        if ($page == "Home") {
                            include "../pages/home/home.php";
                        }
                        if ($page == "") {
                            include "../pages/home/home.php";

                            //Kendaraan
                        }
                        if ($page == "input-data-kendaraan") {
                            include "../pages/kendaraan/input-data-kendaraan.php";
                        }
                        if ($page == "proses-simpan-kendaraan") {
                            include "../controlers/kendaraan/Simpan-data-kendaraan.php";
                        }
                        if ($page == "Lihat-data-kendaraan") {
                            include "../pages/kendaraan/lihat-data-kendaraan.php";
                        }
                        if ($page == "view-detail-kendaraan") {
                            include "../pages/kendaraan/view-detail-kendaraan.php";
                        }
                        if ($page == "update-data-kendaraan") {
                            include "../pages/kendaraan/update-data-kendaraan.php";
                        }
                        if ($page == "proses-edit-kendaraan") {
                            include "../controlers/kendaraan/proses-edit-kendaraan.php";
                        }
                        if ($page == "delete-kendaraan") {
                            include "../controlers/kendaraan/proses-delete-kendaraan.php";
                        }
                        if ($page == "kwitansi") {
                            include "../pages/laporan/kwitansi/kwitansi.php";
                        }

                        //User
                        if ($page == "input-data-user") {
                            include "../pages/user/input-data-user.php";
                        }
                        if ($page == "proses-simpan-user") {
                            include "../controlers/user/Simpan-data-user.php";
                        }
                        if ($page == "Lihat-data-user") {
                            include "../pages/user/lihat-data-user.php";
                        }
                        if ($page == "view-detail-user") {
                            include "../pages/user/view-detail-user.php";
                        }
                        if ($page == "update-user") {
                            include "../pages/user/update-data-user.php";
                        }
                        if ($page == "proses-edit-user") {
                            include "../controlers/user/proses-edit-user.php";
                        }
                        if ($page == "delete-user") {
                            include "../controlers/user/proses-delete-user.php";

                            //BBM
                        }
                        if ($page == "input-data-bbm") {
                            include "../pages/bbm/input-data-bbm.php";
                        }
                        if ($page == "Lihat-data-bbm") {
                            include "../pages/bbm/lihat-data-bbm.php";
                        }
                        if ($page == "view-detail-bbm") {
                            include "../pages/bbm/view-detail-bbm.php";
                        }
                        if ($page == "proses-simpan") {
                            include "../controlers/bbm/Simpan-data-bbm.php";
                        }
                        if ($page == "Laporan-BBM") {
                            include "../pages/laporan/bbm/laporan_bbm.php";
                        }
                        if ($page == "proses-laporan") {
                            include "../pages/laporan/bbm/lap-bbm.php";
                        }
                        if ($page == "update-bbm") {
                            include "../pages/bbm/update-data-bbm.php";
                        }
                        if ($page == "proses-edit-bbm") {
                            include "../controlers/bbm/proses-edit-bbm.php";
                        }
                        if ($page == "delete-bbm") {
                            include "../controlers/bbm/proses-delete-bbm.php";
                        }

                        if ($page == "input-data-jenis-bbm") {
                            include "../pages/jenis/input-data-jenis-bbm.php";
                        }
                        if ($page == "Lihat-data-jenis-bbm") {
                            include "../pages/jenis/lihat-data-jenis-bbm.php";
                        }
                        if ($page == "delete-jenis") {
                            include "../controlers/jenis_bbm/proses-delete-jenis.php";
                        }
                        if ($page == "proses-simpan-jenis-bbm") {
                            include "../controlers/jenis_bbm/Simpan-data-jenis-bbm.php";
                        }
                        if ($page == "update-jenis-bbm") {
                            include "../pages/jenis/update-data-jenis-bbm.php";
                        }
                        if ($page == "proses-edit-jenis") {
                            include "../controlers/jenis_bbm/proses-edit-jenis.php";
                        }
                        if ($page == "backup") {
                            include "../pages/backup-restore/backup-db.php";
                        }
                        if ($page == "restore") {
                            include "../pages/backup-restore/restore-db.php";
                        } ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->

                        <!-- Content Row -->

                        <!-- Footer -->
                        <footer class="sticky-footer bg-white">
                            <div class="container my-auto">
                                <div class="copyright text-center my-auto">
                                    <span>Copyright &copy; Fabian Fadhil Azmi 2019</span>
                                </div>
                            </div>
                        </footer>
                        <!-- End of Footer -->

                    </div>
                    <!-- End of Content Wrapper -->

                </div>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="../controlers/login/logout.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="../assets/sb_admin/vendor/jquery/jquery.min.js"></script>
                <script src="../assets/sb_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="../assets/sb_admin/vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="../assets/sb_admin/js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="../assets/sb_admin/vendor/chart.js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="../assets/sb_admin/js/demo/chart-area-demo.js"></script>
                <script src="../assets/sb_admin/js/demo/chart-pie-demo.js"></script>
                <!-- daterangepicker -->
                <script src="../assets/moment/min/moment.min.js"></script>
                <script src="../assets/js/bootstrap.js"></script>
                <script src="../assets/js/jquery.min.2.0.js"></script>
                <script src="../assets/bootstrap-daterangepicker/daterangepicker.js"></script>
                <!-- datepicker -->
                <script src="../assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

                <script src="../assets/datatables.net/js/jquery.dataTables.min.js"></script>
                <script src="../assets/datatables.net-bs/js/dataTables.bootstrap4.min.js"></script>
                <script src="../assets/ckeditor/ckeditor.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#myTable').DataTable();
                    });
                </script>

                <script type="text/javascript">
                    $(document).ready(function() {
                        $('.tanggal').datepicker({
                            format: "dd-mm-yyyy",
                            autoclose: true,
                        });
                    });
                </script>

                <script>
                    $(function() {
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace('editor1')
                        //bootstrap WYSIHTML5 - text editor
                        $('.textarea').wysihtml5()
                    })
                </script>
                <script type="text/javascript">
                    <?php echo $jsArray; ?>

                    function changeValue(jenis_bahan_bakar) {
                        document.getElementById('nm').value = dtMhs[jenis_bahan_bakar].harga;
                    };

                    function sum() {
                        var txtFirstNumberValue = document.getElementById('nm').value;
                        var txtSecondNumberValue = document.getElementById('txt2').value;
                        var result = parseFloat(txtFirstNumberValue) * parseFloat(txtSecondNumberValue);
                        if (!isNaN(result)) {
                            document.getElementById('txt3').value = result;
                        }
                    };
                </script>


    </body>

    </html>
<?php

} else {

    echo "
  <script type='text/javascript'>
  setTimeout(function () {  
    swal({
      title: 'Peringatan',
      text:  'Mohon Maaf Anda Tidak Di Izinkan Masuk Anda Harus Login Terlebih Dahulu',
      icon: 'warning',
      timer: 5000,
      showConfirmButton: true
      });   
      },10);  
      window.setTimeout(function(){ 
        document.location.href='../index.php';
        } ,3000); 
        </script>";
}
?>
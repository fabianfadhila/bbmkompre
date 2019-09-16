<?php
session_start();
if (isset($_SESSION['username'])) {
  ?>
  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Aplikasi Pengolahan BBM | Dinas</title>
    <!-- Tell the browser to be responsive to screen width -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../assets/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../assets/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../assets/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../assets/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../assets/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


  </head>
  <?php
    array_key_exists('page', $_GET) ? $page = $_GET['page'] : $page = '';
    ?>


  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index.php?page=home" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>B</b>BM</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Pengolahan</b> BBM</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../assets/images/user/<?= $_SESSION['gambar'] ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?= $_SESSION['username'] ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../assets/images/user/<?= $_SESSION['gambar'] ?>" class="img-circle" alt="User Image">

                    <p>
                      <?= $_SESSION['username'] ?>
                      <small><?= $_SESSION['jabatan'] ?></small>
                      <small><?= $_SESSION['email'] ?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="row">
                      <div class="col-xs-4 text-center">

                      </div>
                      <div class="col-xs-4 text-center">
                        <?= $_SESSION['no_telepon'] ?>
                      </div>
                      <div class="col-xs-4 text-center">

                      </div>
                    </div>
                    <!-- /.row -->
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="index.php?page=view-detail-user&id_user=1" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="../index.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../assets/images/user/<?= $_SESSION['gambar'] ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?= $_SESSION['username'] ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="index.php?page=" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="index.php?page=Home"><i class="fa fa-dashboard"></i> <span>Dasboard</span></a></li>
            <li>
              <a href="index.php?page=Lihat-data-bbm">
                <i class="fa fa-files-o"></i>
                <span>Form Input Data BBM</span>

              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Forms Inputan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php?page=Lihat-data-kendaraan"><i class="fa fa-circle-o"></i>Form Data Kendaraan</a></li>
                <li><a href="index.php?page=Lihat-data-jenis-bbm"><i class="fa fa-circle-o"></i>Form Data Jenis BBM</a></li>
                <li><a href="index.php?page=Lihat-data-user"><i class="fa fa-circle-o"></i>Form Data User</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Laporan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php?page=Laporan-BBM"><i class="fa fa-circle-o"></i>Laporan BBM</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Backup / Restore Data</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php?page=backup"><i class="fa fa-circle-o"></i>Backup DB</a></li>
                <li><a href="index.php?page=restore"><i class="fa fa-circle-o"></i>Restore DB</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

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
            include "../controlers/jenis_bbm/proses-edit-bbm.php";
          }
          if ($page == "backup") {
            include "../pages/backup-restore/backup-db.php";
          }
          if ($page == "restore") {
            include "../pages/backup-restore/restore-db.php";
          } ?>
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2018 <a href="#">Fabian Fadhil Azmi</a>.</strong> All rights
        reserved. Theme By <a href="#">Almsaeed Studio</a>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript:void(0)">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <i class="menu-icon fa fa-user bg-yellow"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>

                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript:void(0)">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul>
            <!-- /.control-sidebar-menu -->

          </div>
          <!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
          <!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>

                <p>
                  Some information about this general settings option
                </p>
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>

                <p>
                  Other sets of options are available
                </p>
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>

                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div>
              <!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div>
              <!-- /.form-group -->
            </form>
          </div>
          <!-- /.tab-pane -->
        </div>
      </aside>
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="../assets/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../assets/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="../assets/raphael/raphael.min.js"></script>
    <script src="../assets/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="../assets/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../assets/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../assets/moment/min/moment.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/jquery.min.2.0.js"></script>
    <script src="../assets/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../assets/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <script src="../assets/jquery/dist/jquery.min.js"></script>
    <script src="../assets/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap-datepicker.js"></script>


    <!-- CK Editor -->
    <script src="../assets/ckeditor/ckeditor.js"></script>
    <script>
      $(function() {
        $('#example1').DataTable()({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        })
      })
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
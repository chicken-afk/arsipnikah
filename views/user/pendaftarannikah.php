<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" href="../../assets/gambar/profil2.png">
<?php
    include '../../controller/cekLoginUser.php'
?>
  <title>Sistem Informasi Kearsipan Surat Nikah</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../assets/AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/AdminLTE-3.0.5/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/AdminLTE-3.0.5/plugins/daterangepicker/daterangepicker.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home.php" class="brand-link">
      <img src="../../assets/gambar/profil2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Kearsipan Surat Nikah</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../assets/AdminLTE-3.0.5/dist/img/default.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nama'];  ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
            <a href="home.php" class="nav-link  ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Profil KUA
                <i class="fas "></i>
              </p>
            </a>
        </li>

        <li class="nav-item has-treeview">
            <a href="pendaftarannikah.php" class="nav-link active ">
              <i class="nav-icon fas fa-venus-mars"></i>
              <p>
                Pendaftaran Nikah
                <i class="fas "></i>
              </p>
            </a>
        </li>

        <li class="nav-item has-treeview">
            <a href="berkas.php" class="nav-link  ">
              <i class="nav-icon fas fa-upload"></i>
              <p>
                Upload berkas
                <i class="fas "></i>
              </p>
            </a>
        </li>

       

        <li class="nav-item has-treeview">
            <a href="../../controller/logout.php" class="nav-link  ">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Keluar
                <i class="fas "></i>
              </p>
            </a>
        </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pendaftaran Nikah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Nikah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     <!-- SELECT2 EXAMPLE -->
     <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Masukan Data Pernikahan</h3>
            <?php 
                        if(isset($_GET['pesan'])){
                        echo ' <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> ';
                        if($_GET['pesan'] == "update"){
                            echo "&nbsp; Berhasil Disimpan!";
                        }else if($_GET['pesan'] == "gagal"){
                            echo "&nbsp; Data gagal disimpan";
                        }
                        else if($_GET['pesan'] == "sudah"){
                          echo "&nbsp;Tidak dapat melakukan pengisian data!! Anda sudah melakukan pengisian data sebelumnya";
                      }
                        echo '</div>';
                        }
                        ?>

            <div class="card-tools">
              <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> -->
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="../../controller/user/inputPasangan.php" method="post" enctype="multipart/form-data">
            <div class="row">

              <div class="col">
                
                <div class="form-group">
                  <label>Nama Mempelai Pria</label>
                  <input type="text" class="form-control" name="nmPria" placeholder="nama mempelai pria" required="required">
                </div>
                
                <div class="form-group">
                <label>Nomor KTP Pria</label>
                  <input type="text" class="form-control" name="ktpPria" placeholder="Nomor KTP Pria" required="required">
                </div>
                <div class="form-group">
                <label>Tempat Lahir Pria</label>
                  <input type="text" class="form-control" name="tempat_lahir_pria" placeholder="Tempat Lahir Pria" required="required">
                </div>
                <div class="form-group">
                <label>Tanggal Lahir Pria</label>
                
                <input type="date" class="form-control" name="tlPria" placeholder="Tanggal Lahir Pria" required="required">
 
                </div>
                <div class="form-group">
                <label>Foto Pria</label>
                 <input type="file" class="form-control" name="fotoPria" required="required">
                </div>
               <input type="hidden" value="<?php echo $_SESSION['idUser']; ?>" name="id_user">
              </div>
              <!-- /.col -->
              <div class="col">
              <div class="form-group">
                  <label>Nama Mempelai Wanita</label>
                  <input type="text" class="form-control" name="nmWanita" placeholder="nama mempelai Wanita" required="required">
                </div>
                
                <div class="form-group">
                <label>Nomor KTP Wanita</label>
                  <input type="text" class="form-control" name="ktpWanita" placeholder="Nomor KTP Wanita" required="required">
                </div>
                <div class="form-group">
                <label>Tempat Lahir Wanita</label>
                  <input type="text" class="form-control" name="tempat_lahir_Wanita" placeholder="Tempat Lahir Pria" required="required">
                </div>
                <div class="form-group">
                <label>Tanggal Lahir Wanita</label>
                  <input type="date" class="form-control" name="tlWanita" placeholder="Tanggal Lahir Wanita" required="required">
                </div>
                <div class="form-group">
                <label>Foto Wanita</label>
                  <input type="file" class="form-control" name="fotoWanita" required="required">
                </div>
                <!-- /.form-group -->

              </div>
              <!-- /.col -->
 

             
            </div>
            <!-- /.row -->
            <div class="row">
              <button type="submit" class="btn btn-success">Simpan</button>
              </div>
            </form>

            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">

          </div>
        </div>
        <!-- /.card -->

        <!-- SELECT2 EXAMPLE -->
        </div>
        </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../assets/AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../assets/AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/AdminLTE-3.0.5/dist/js/adminlte.min.js"></script>
<script src="../../assets/AdminLTE-3.0.5/plugins/daterangepicker/daterangepicker.js"></script>
<script src="../../assets/AdminLTE-3.0.5/plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function () {
  

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    })

  })
</script>
</body>
</html>

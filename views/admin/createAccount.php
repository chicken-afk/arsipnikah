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
    include '../../controller/cekLogin.php'
?>
  <title>Sistem Informasi Kearsipan Surat Nikah</title>

 <!-- Font Awesome -->
 <link rel="stylesheet" href="../../assets/AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../assets/AdminLTE-3.0.5/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../assets/AdminLTE-3.0.5/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/AdminLTE-3.0.5/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- jQuery -->
    <script src="../../assets/AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../assets/AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../assets/AdminLTE-3.0.5/dist/js/adminlte.min.js"></script>
    <!-- DataTables -->
    <script src="../../assets/AdminLTE-3.0.5/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../assets/AdminLTE-3.0.5/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets/AdminLTE-3.0.5/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../assets/AdminLTE-3.0.5/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


 
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
          <a href="#" class="d-block"><?php echo $_SESSION['nama']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
            <a href="home.php" class="nav-link ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Profil KUA
                <i class="fas "></i>
              </p>
            </a>
        </li>

        <li class="nav-item has-treeview">
            <a href="dataNikah.php" class="nav-link  ">
              <i class="nav-icon fas fa-venus-mars"></i>
              <p>
                Pendaftaran Nikah
                <i class="fas "></i>
              </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="arsip.php" class="nav-link  ">
              <i class="nav-icon fas fa-upload"></i>
              <p>
                Upload berkas NB
                <i class="fas "></i>
              </p>
            </a>
        </li>

        <li class="nav-item has-treeview">
            <a href="akta.php" class="nav-link  ">
              <i class="nav-icon fas fa-book"></i>
              <p>
                 Akta Nikah
                <i class="fas "></i>
              </p>
            </a>
        </li>

        <li class="nav-item has-treeview">
            <a href="penghulu.php" class="nav-link  ">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Data Penghulu
                <i class="fas "></i>
              </p>
            </a>
        </li>

        <li class="nav-item has-treeview">
            <a href="saksi.php" class="nav-link  ">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Data Saksi
                <i class="fas "></i>
              </p>
            </a>
        </li>

        <li class="nav-item has-treeview">
            <a href="createAccount.php" class="nav-link active ">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Buat Akun
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
            <h1 class="m-0 text-dark">Buat Akun</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Buat Akun</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
       
            <!-- /.card -->
            <div class="card">
              <div class="card-header">

                <h2 class="card-title">Data akun mempelai</h2>
                <?php 
                        if(isset($_GET['pesan'])){
                        echo ' <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> ';
                        if($_GET['pesan'] == "update"){
                            echo "&nbsp; Berhasil Disimpan!";
                        }else if($_GET['pesan'] == "gagal"){
                            echo "&nbsp; Data gagal disimpan";
                        }
                        echo '</div>';
                        }
                        ?>
                <ol class=" float-sm-right">
                <a href="#" type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#inputModal">+</a>
                </ol>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>

                  <tbody>
                  <?php 
                              $query_mysql = mysqli_query($koneksi,"SELECT * FROM tbuser")or die(mysqli_error());
                              while($data = mysqli_fetch_array($query_mysql)){
                              ?>
                  <tr>
                    <td><?php echo $data['Nama_User']; ?></td>
                    <td><?php echo $data['Username']; ?></td>
                    <td>
                    <a href="#" type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal<?php echo $data['idUser']; ?>">Edit</a>
                    </td>
                  </tr> 
                  <!-- Modal -->
    <div class="modal fade" id="myModal<?php echo $data['idUser']; ?>" role="dialog">
    <div class="modal-dialog">

    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Ganti Password</h4>
    <button type="button" class="close" data-dismiss="modal"></button>
    
    </div>
    <div class="modal-body">
    <form role="form" action="../../controller/editPassword.php" method="get">

    <?php
    $id = $data['idUser']; 
    $query = mysqli_query($koneksi,"select * from tbuser where idUser = '$id'")or die(mysqli_error());
    //$result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($query)) {  
    ?>

    <input type="hidden" name="idUser" value="<?php echo $row['idUser']; ?>">

    <div class="form-group">
    <label>Nama</label>
    <input type="text" name="name" class="form-control" value="<?php echo $row['Nama_User']; ?>" disabled="disabled">      
    </div>
    <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" class="form-control" value="<?php echo $row['Username']; ?>" disabled="disabled">      
    </div>

    <div class="form-group">
    <label>Password</label>
    <input type="password" name="Password" class="form-control">      
    </div>
    <div class="modal-footer">  
    <button type="submit" class="btn btn-success">Update</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>

    <?php 
    }
    ?></form>
    </div>
    </div>
    
    </div>
    </div>
                  <?php } ?>
                   
                </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
    <!-- Modal -->
    <div class="modal fade" id="inputModal" role="dialog">
    <div class="modal-dialog">

    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Buat akun</h4>
    <button type="button" class="close" data-dismiss="modal"></button>
    
    </div>
    <div class="modal-body">
    <form role="form" action="../../controller/createUser.php" method="post">

   


    <div class="form-group">
    <label>Nama</label>
    <input type="text" name="name" class="form-control" >      
    </div>
    <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" class="form-control" >      
    </div>

    <div class="form-group">
    <label>Password</label>
    <input type="password" name="Password" class="form-control">      
    </div>
    <div class="modal-footer">  
    <button type="submit" class="btn btn-success">Simpan</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </form>
    </div>
    </div>
    
    </div>
    </div>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


</body>
</html>

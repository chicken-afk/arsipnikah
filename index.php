<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html-templates.multipurposethemes.com/bootstrap-4/admin/minimallite-admin/minimallite-admin-rtl/ser/pages/samplepage/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jun 2018 13:25:27 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/gambar/profil2.png">

    <title>Login - Sistem Informasi Kearsipan Surat Nikah</title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
	
	<!-- Theme style -->
	<link rel="stylesheet" href="assets/css/master_style.css">

	<!-- MinimalLite Admin Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="assets/css/skins/_all-skins.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Sistem Informasi </b>Kearsipan Surat Nikah</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login</p>
   
        <?php 
        if(isset($_GET['pesan'])){
          echo ' <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> ';
          if($_GET['pesan'] == "gagal"){
            echo "&nbsp; Login gagal! username dan password salah!";
          }else if($_GET['pesan'] == "logout"){
            echo "&nbsp; Anda telah berhasil logout";
          }else if($_GET['pesan'] == "belum_login"){
            echo "&nbsp; Anda harus login untuk mengakses halaman";
          }
          echo '</div>';
        }
        ?>
    


    <form method="post" action="controller/proses_login.php">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username">
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-info btn-block margin-top-10">LOGIN</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


	<!-- jQuery 3 -->
	<script src="assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

<!-- Mirrored from html-templates.multipurposethemes.com/bootstrap-4/admin/minimallite-admin/minimallite-admin-rtl/ser/pages/samplepage/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jun 2018 13:25:27 GMT -->
</html>

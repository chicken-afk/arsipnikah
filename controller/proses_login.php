<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
$query = mysqli_query($koneksi,"select * from tbuser where username='$username' and password='$password'")or die(mysqli_error());
$cek = mysqli_num_rows($query);
	if ($cek == '1') {
		$tbuser = mysqli_fetch_array($query);
		$nama = $tbuser['Nama_User'];
        $role = $tbuser['role'];
        $idUser = $tbuser['idUser'];
		$_SESSION['nama'] = $nama;
	    $_SESSION['status'] = "login";
        $_SESSION['role'] = $role;
        $_SESSION['idUser'] = $idUser;
        if($role == 'admin'){
            header("location:../views/admin/home.php");
        }
        elseif($role == 'user'){
            header("location:../views/user/home.php");
        }

    }
    else{
		header("location:../index.php?pesan=gagal");
		exit();
	}
		
?>
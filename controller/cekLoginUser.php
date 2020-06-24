<?php 
  session_start();
  if($_SESSION['status']!="login" || $_SESSION['role']!="user"){
    header("location:../../index.php?pesan=belum_login");
  }
  include '../../koneksi.php'

  ?> 
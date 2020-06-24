<?php

include '../koneksi.php';

$name = $_POST['name'];
$username = $_POST['username'];
$password = md5($_POST['Password']);
$role = 'user';
//query update
$insert = 	mysqli_query($koneksi,"INSERT into tbuser values('','$name','$username','$password','$role')");
    if ($insert) {
    # credirect ke page index
    header("location:../views/admin/createAccount.php?pesan=update"); 
    }
    else{
        header("location:../views/admin/createAccount.php?pesan=gagal"); 
    }

//mysql_close($host);
?>
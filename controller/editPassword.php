<?php

include '../koneksi.php';

$id = $_GET['idUser'];
$password = md5($_GET['Password']);

//query update
$update = mysqli_query($koneksi,"UPDATE tbuser SET `Password` ='$password' WHERE `idUser`='$id' ");
    if ($update) {
    # credirect ke page index
    header("location:../views/admin/createAccount.php?pesan=update"); 
    }
    else{
        header("location:../views/admin/createAccount.php?pesan=gagal"); 
    }

//mysql_close($host);
?>
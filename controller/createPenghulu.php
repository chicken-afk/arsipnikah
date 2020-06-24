<?php

include '../koneksi.php';

$name = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$kua = $_POST['kua'];

//query update
$insert = 	mysqli_query($koneksi,"INSERT into tb_penghulu values('','$name','$jabatan','$kua')");
    if ($insert) {
    # credirect ke page index
    header("location:../views/admin/Penghulu.php?pesan=update"); 
    }
    else{
        header("location:../views/admin/Penghulu.php?pesan=gagal"); 
    }

//mysql_close($host);
?>
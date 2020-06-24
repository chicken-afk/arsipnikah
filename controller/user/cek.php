<?php

include '../../koneksi.php';
include '../../controller/cekLoginUser.php';
$id=$_SESSION['idUser'];

//query update

    $search = mysqli_query($koneksi,"select * from tb_pasangan where id_user='$id'")or die(mysqli_error());
    $cek = mysqli_fetch_array($search);
    
    $id_pasangan = $cek['id_pasangan'];
    $search = mysqli_query($koneksi,"select * from tb_akta where id_pasangan='$id_pasangan'")or die(mysqli_error());
    $cek = mysqli_num_rows($search);
    if($cek == '1')
    {
        header("location:../../views/user/home.php");
    }
    else{
        $search = mysqli_query($koneksi,"select * from tb_arsipDone where idUSer='$id'")or die(mysqli_error());
        $cek = mysqli_num_rows($search);
        if($cek=='1'){
            header("location:../../views/user/inputTanggal.php");
        }
        else{
            header("location:../../views/user/home.php");
        }
    }


//mysql_close($host);
?>
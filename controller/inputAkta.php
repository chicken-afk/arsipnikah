<?php

include '../koneksi.php';

$akta = $_POST['akta'];
$tanggal = $_POST['tanggal'];
$tahun = $_POST['tahun'];
$agama = $_POST['agama'];
$id_penghulu = $_POST['id_penghulu'];
$ktpPria = $_POST['ktpPria'];

$search = mysqli_query($koneksi,"select * from tb_pasangan where ktpPria='$ktpPria'")or die(mysqli_error());
$cek = mysqli_num_rows($search);
var_dump($search);
$tbuser = mysqli_fetch_array($search);

$id_pasangan = $tbuser['id_pasangan'];

	if ($cek == '1'){
        //query update
        $insert = 	mysqli_query($koneksi,"INSERT into tb_akta values('','$id_pasangan','$id_penghulu','$akta','$tanggal','$tahun','$agama')");
        $update = mysqli_query($koneksi,"UPDATE tb_pasangan SET `status` ='menikah' WHERE `id_pasangan`='$id_pasangan' ");
        if ($insert) {
        # credirect ke page index
            header("location:../views/admin/akta.php?pesan=update"); 
        }
        else{
            header("location:../views/admin/akta.php?pesan=gagal"); 
        }
    }
    else{
        header("location:../views/admin/akta.php?pesan=ktp");
    }




//mysql_close($host);
?>
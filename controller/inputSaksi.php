<?php

include '../koneksi.php';

$nmSaksi = $_POST['nmSaksi'];
$umurSaksi1 = $_POST['umurSaksi1'];
$wargaNegara1 = $_POST['wargaNegara1'];
$agama1 = $_POST['agama1'];
$pekerjaan1 = $_POST['pekerjaan1'];
$nmSaksi2 = $_POST['nmSaksi2'];
$umurSaksi2 = $_POST['umurSaksi2'];
$wargaNegara2 = $_POST['wargaNegara2'];
$agama2 = $_POST['agama2'];
$pekerjaan2 = $_POST['pekerjaan2'];
$ktpPria = $_POST['ktpPria'];

$search = mysqli_query($koneksi,"select * from tb_pasangan where ktpPria='$ktpPria'")or die(mysqli_error());
$cek = mysqli_num_rows($search);

$tbuser = mysqli_fetch_array($search);

$id_pasangan = $tbuser['id_pasangan'];

	if ($cek == '1'){
        //query update
        $insert = 	mysqli_query($koneksi,"INSERT into tb_saksi values('','$id_pasangan','$nmSaksi','$nmSaksi2','$umurSaksi1','$umurSaksi2','$wargaNegara1','$wargaNegara2','$agama1','$agama2','$pekerjaan1','$pekerjaan2')");
        if ($insert) {
        # credirect ke page index
            header("location:../views/admin/saksi.php?pesan=update"); 
        }
        else{
            header("location:../views/admin/saksi.php?pesan=gagal"); 
        }
    }
    else{
        header("location:../views/admin/saksi.php?pesan=ktp");
    }




//mysql_close($host);
?>
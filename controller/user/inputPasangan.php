<?php

include '../../koneksi.php';
$id_user = $_POST['id_user'];
$nmPria = $_POST['nmPria'];
$ktpPria = $_POST['ktpPria'];
$tempat_lahir_pria = $_POST['tempat_lahir_pria'];
$tlPria = $_POST['tlPria'];
$rand = rand();
$filename = $_FILES['fotoPria']['name'];
$fotoPria = $rand.'_'.$filename;
$tmp_file = $_FILES['fotoPria']['tmp_name'];
move_uploaded_file($tmp_file, '../../assets/gambar/pasangan/'.$fotoPria);

$nmWanita = $_POST['nmWanita'];
$ktpWanita = $_POST['ktpWanita'];
$tempat_lahir_Wanita = $_POST['tempat_lahir_Wanita'];
$tlWanita = $_POST['tlWanita'];
$rand = rand();
$filename = $_FILES['fotoPria']['name'];
$tmp_file = $_FILES['fotoWanita']['tmp_name'];
$fotoWanita = $rand.'_'.$filename;
move_uploaded_file($tmp_file, '../../assets/gambar/pasangan/'.$fotoWanita);


//query update
$search = mysqli_query($koneksi,"select * from tb_pasangan where id_user='$id_user'")or die(mysqli_error());
$cek = mysqli_num_rows($search);
if($cek=='1'){
    header("location:../../views/user/pendaftarannikah.php?pesan=sudah"); 
}
else{
    $insert = 	mysqli_query($koneksi,"INSERT into tb_pasangan values('','$id_user','$nmPria','$ktpPria','$tempat_lahir_pria','$tlPria','$fotoPria','$nmWanita','$ktpWanita','$tempat_lahir_Wanita','$tlWanita','$fotoWanita','Verisikasi Berkas','')");
    if ($insert) {
    # credirect ke page index
    header("location:../../views/user/pendaftarannikah.php?pesan=update"); 
    }
    else{
        header("location:../../views/user/pendaftarannikah.php?pesan=gagal"); 
    }
}


//mysql_close($host);
?>
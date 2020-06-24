<?php

include '../../koneksi.php';
include '../../controller/cekLoginUser.php';
$id_user = $_SESSION['idUser'];
$tanggalNikah = $_POST['tanggalNikah'];

//query update
$update = mysqli_query($koneksi,"UPDATE tb_pasangan SET `tanggalNikah` ='$tanggalNikah' WHERE `id_user`='$id_user' ");
    if ($update) {
    # credirect ke page index
    header("location:../../views/user/inputTanggal.php?pesan=update"); 
    }
    else{
        header("location:../../views/user/inputTanggal.php?pesan=gagal"); 
    }


//mysql_close($host);
?>
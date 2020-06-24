<?php

include '../koneksi.php';

$id_pasangan = $_GET['id'];

$search = mysqli_query($koneksi,"select * from tb_arsip where idUSer='$id_pasangan'")or die(mysqli_error());
$cek = mysqli_num_rows($search);
$tbarsip = mysqli_fetch_array($search);

	if ($cek == '1'){
        $gambar=array();
        $gambar[0] = '../assets/gambar/arsip/'.$tbarsip['N1'];
        $gambar[1] = '../assets/gambar/arsip/'.$tbarsip['N2'];
        $gambar[2] = '../assets/gambar/arsip/'.$tbarsip['N3'];
        $gambar[3] = '../assets/gambar/arsip/'.$tbarsip['N4'];
        $gambar[4] = '../assets/gambar/arsip/'.$tbarsip['N5'];
        $gambar[5] = '../assets/gambar/arsip/'.$tbarsip['N6'];
        $rand = rand();
        $zipname = $rand.'_file.zip';
        $zip = new ZipArchive;
        $zip->open($zipname, ZipArchive::CREATE);
        foreach ($gambar as $file) {
        $zip->addFile($file);
        }
        $zip->close();
        // // for($i=0;$i<6;$i++){
            
        // // }
        header('Content-Type: application/zip');
        header('Content-disposition: attachment; filename='.$zipname);
        header('Content-Length: ' . filesize($zipname));
        readfile($zipname);
      
    }

    else{
        header("location:../views/admin/dataNikah.php?pesan=belum");
    }




//mysql_close($host);
?>
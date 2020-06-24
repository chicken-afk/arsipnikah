<?php

include '../../koneksi.php';
$id=$_SESSION['idUser'];

//query update

    $search = mysqli_query($koneksi,"select * from tb_pasangan where id_user='$id'")or die(mysqli_error());
    $cek = mysqli_num_rows($search);
 
    if($cek=='1'){
        $cek=mysqli_fetch_array($search);
        $id_pasangan = $cek['id_pasangan'];
        $search = mysqli_query($koneksi,"select * from tb_akta where id_pasangan='$id_pasangan'")or die(mysqli_error());
        $cek = mysqli_num_rows($search);
        if($cek == '1')
        {
            $data = 'Akta Nikah Sudah Dapat Diambil';
        }
        else{
            $search = mysqli_query($koneksi,"select * from tb_arsipDone where idUSer='$id'")or die(mysqli_error());
            $cek = mysqli_num_rows($search);
            if($cek=='1'){
               
                $data = 'Berkas Telah Terverifikasi lakukan pengisian tanggal pernikahan';
            }
            else{
                $data = 'Berkas masih dalam tahap verifikasi';
            }
        }
    }
    else{
        $data = 'Anda Belum Melakukan Pengisian Data';
    }



//mysql_close($host);
?>
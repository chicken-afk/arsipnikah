<?php

include '../koneksi.php';


$ktpPria = $_POST['ktpPria'];

$search = mysqli_query($koneksi,"select * from tb_pasangan where ktpPria='$ktpPria'")or die(mysqli_error());
$cek = mysqli_num_rows($search);
	if ($cek == '1'){
                    $tbuser = mysqli_fetch_array($search);
                    $id_pasangan = $tbuser['id_user'];
                    $rand = rand();
                    $filename = $_FILES['n1']['name'];
                    $n1 = $rand.'_'.$filename;
                    move_uploaded_file($_FILES['n1']['tmp_name'], '../assets/gambar/arsipDone/'.$rand.'_'.$filename);

                    $rand = rand();
                    $filename = $_FILES['n2']['name'];
                    $n2 = $rand.'_'.$filename;
                    move_uploaded_file($_FILES['n2']['tmp_name'], '../assets/gambar/arsipDone/'.$rand.'_'.$filename);

                    $rand = rand();
                    $filename = $_FILES['n3']['name'];
                    $n3 = $rand.'_'.$filename;
                    move_uploaded_file($_FILES['n3']['tmp_name'], '../assets/gambar/arsipDone/'.$rand.'_'.$filename);

                    $rand = rand();
                    $filename = $_FILES['n4']['name'];
                    $n4 = $rand.'_'.$filename;
                    move_uploaded_file($_FILES['n4']['tmp_name'], '../assets/gambar/arsipDone/'.$rand.'_'.$filename);

                    $rand = rand();
                    $filename = $_FILES['n5']['name'];
                    $n5 = $rand.'_'.$filename;
                    move_uploaded_file($_FILES['n5']['tmp_name'], '../assets/gambar/arsipDone/'.$rand.'_'.$filename);

                    $rand = rand();
                    $filename = $_FILES['n6']['name'];
                    $n6 = $rand.'_'.$filename;
                    move_uploaded_file($_FILES['n6']['tmp_name'], '../assets/gambar/arsipDone/'.$rand.'_'.$filename);

                    //query insert
                    $insert = 	mysqli_query($koneksi,"INSERT into tb_arsipDone values('','$id_pasangan','$n1','$n2','$n3','$n4','$n5','$n6')");
                        if ($insert) {
                        # credirect ke page index
                        header("location:../views/admin/arsip.php?pesan=update"); 
                        }
                        else{
                            header("location:../views/admin/arsip.php?pesan=gagal"); 
                        }

    }

    else{
        header("location:../views/admin/arsip.php?pesan=ktp"); 
    }



//mysql_close($host);
?>
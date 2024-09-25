<?php 
    if($_GET['Id']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($koneksi,"delete from pegawai where Id='".$_GET['Id']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus data');location.href='tampil_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus data');location.href='tampil_pegawai.php';</script>";
        }
    }
?>
<?php
if($_POST){
    $id_pegawai=$_POST['id_pegawai'];
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_telp=$_POST['no_telp'];
    $jabatan=$_POST['jabatan'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    if(empty($nama)){
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='register.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='register.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($koneksi,"UPDATE `pegawai` SET `nik`='$nik',`nama`='$nama',`alamat`='$alamat',`jenis_kelamin`='$jenis_kelamin',`no_telp`='$no_telp',`jabatan`='$jabatan',`username`='$username' WHERE `id_pegawai`='$id_pegawai'") or die(mysqli_error($koneksi));
            if($update){
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?Id=".$id."';</script>";
            }
        } else {
            $update=mysqli_query($koneksi,"UPDATE `pegawai` SET `nik`='$nik',`nama`='$nama',`alamat`='$alamat',`jenis_kelamin`='$jenis_kelamin',`no_telp`='$no_telp',`jabatan`='$jabatan',`username`='$username', `password`='".md5($password)."' WHERE `id_pegawai`='$id_pegawai'") or die(mysqli_error($koneksi));
            if($update){
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?Id=".$id."';</script>";
            }
        }
        
    } 
}
?>
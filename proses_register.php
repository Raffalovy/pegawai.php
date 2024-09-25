<?php
if($_POST){
    $nik=$_POST['nik'];
    $nama =$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_telp=$_POST['no_telp'];
    $jabatan=$_POST['id'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='register.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($koneksi,"INSERT INTO `pegawai` (`nik`, `nama`, `alamat`, `jenis_kelamin`, `no_telp`, `jabatan`, `username`, `password`) VALUES ('".$nik."','".$nama."','".$alamat."', '".$jenis_kelamin."','".$no_telp."','".$jabatan."','".$username."','".md5($password)."')") or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='register.php';</script>";
        }
    }
}
?>
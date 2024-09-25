<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tampil Pegawai</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>NAMA PEGAWAI</th><th>NIK</th>
                <th>ALAMAT</th><th>JENIS KELAMIN</th>
                <th>USERNAME</th><th>JABATAN</th><th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_pegawai=mysqli_query($koneksi,"select * from pegawai join jabatan on jabatan.id = pegawai.jabatan");
            $no=0;
            while($data_pegawai=mysqli_fetch_array($qry_pegawai)){
            $no++;?>
            <tr>              
                 <td><?=$no?></td><td><?=$data_pegawai['nama']?></td> <td><?=$data_pegawai['nik']?></td> <td><?=$data_pegawai['alamat']?> </td><td><?=$data_pegawai['jenis_kelamin']?></td> <td><?=$data_pegawai['username']?></td> <td><?=$data_pegawai['nama_jabatan']?></td> <td><a href="ubah_pegawai.php?Id=<?=$data_pegawai['id_pegawai']?>" class="btn btn-success">Ubah</a> | <a href="hapus.php?Id=<?=$data_pegawai['id_pegawai']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <a href="register.php" class="btn btn-primary">Tambah pegawai</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

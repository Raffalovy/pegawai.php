<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ubah Data Pegawai</title>
    <style>
        body {
            background-color: #1c1c1c; /* Latar belakang hitam */
            color: #e0e0e0; /* Teks abu-abu terang */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            margin-top: 50px;
            padding: 30px;
            background-color: #2c2c2c; /* Latar belakang form abu-abu gelap */
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5); /* Efek bayangan untuk tampilan modern */
            max-width: 600px;
        }

        h3 {
            color: #ffffff; /* Warna putih untuk judul */
            font-weight: 600;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: 500;
            color: #d3d3d3; /* Warna label abu-abu terang */
        }

        .form-control {
            background-color: #333333; /* Warna input abu-abu gelap */
            color: #ffffff; /* Teks putih */
            border: none; /* Hilangkan border default */
            margin-bottom: 15px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #555555; /* Warna border fokus */
        }

        .btn-primary {
            background-color: #4f4f4f; /* Tombol abu-abu gelap */
            border-color: #4f4f4f;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #6c757d; /* Warna hover abu-abu lebih terang */
        }

        textarea.form-control {
            resize: none; /* Disable resize */
        }
    </style>
</head>

<body>
    <div class="container">
        <?php 
        include "koneksi.php";
        $qry_get_pegawai = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id_pegawai = '" . $_GET['Id'] . "'");
        $data_pegawai = mysqli_fetch_array($qry_get_pegawai);
        ?>
        <h3>Ubah Pegawai</h3>
        <form action="proses_ubah.php" method="post">
            <input type="hidden" name="id_pegawai" value="<?= $data_pegawai['id_pegawai'] ?>" />
            Nama Pegawai:
            <input type="text" name="nama" value="<?= $data_pegawai['nama'] ?>" class="form-control">
            NIK:
            <input type="text" name="nik" value="<?= $data_pegawai['nik'] ?>" class="form-control">
            Gender:
            <?php
            $arr_jenis_kelamin = array('L' => 'Laki-laki', 'P' => 'Perempuan');
            ?>
            <select name="jenis_kelamin" class="form-control">
                <option>Pilih Jenis Kelamin</option>
                <?php foreach ($arr_jenis_kelamin as $key_jenis_kelamin => $val_jenis_kelamin):
                    $selek = ($key_jenis_kelamin == $data_pegawai['jenis_kelamin']) ? "selected" : "";
                    ?>
                    <option value="<?= $key_jenis_kelamin ?>" <?= $selek ?>><?= $val_jenis_kelamin ?></option>
                <?php endforeach ?>
            </select>
            Alamat:
            <textarea name="alamat" class="form-control" rows="4"><?= $data_pegawai['alamat'] ?></textarea>
            Jabatan:
            <select name="jabatan" class="form-control">
                <option>Pilih Jabatan</option>
                <?php
                $qry_jabatan = mysqli_query($koneksi, "SELECT * FROM jabatan");
                while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                    $selek = ($data_jabatan['id'] == $data_pegawai['jabatan']) ? "selected" : "";
                    echo '<option value="' . $data_jabatan['id'] . '" ' . $selek . '>' . $data_jabatan['nama_jabatan'] . '</option>';
                }
                ?>
            </select>
            Nomor Telepon:
            <input type="text" name="no_telp" value="<?= $data_pegawai['no_telp'] ?>" class="form-control">
            Username:
            <input type="text" name="username" value="<?= $data_pegawai['username'] ?>" class="form-control">
            Password:
            <input type="password" name="password" class="form-control">
            <br>
            <input type="submit" name="simpan" value="Ubah Pegawai" class="btn btn-primary">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>

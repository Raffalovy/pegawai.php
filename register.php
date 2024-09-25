<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Register</title>
    <style>
        body {
            background-color: #1c1c1c; /* Latar belakang hitam */
            color: #e0e0e0; /* Warna teks abu-abu muda */
        }
        .form-control {
            background-color: #333; /* Warna input abu-abu gelap */
            color: #fff; /* Teks putih */
            border: none; /* Menghilangkan border */
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #555; /* Warna border saat fokus */
        }
        .btn-primary {
            background-color: #4f4f4f; /* Tombol abu-abu gelap */
            border: none;
        }
        .btn-primary:hover {
            background-color: #6c757d; /* Warna hover abu-abu yang lebih terang */
        }
        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff; /* Warna teks judul putih */
        }
        form {
            max-width: 600px;
            margin: 50px auto; /* Pusatkan form secara horizontal */
            padding: 30px;
            background-color: #2c2c2c; /* Latar belakang form abu-abu gelap */
            border-radius: 10px; /* Sudut melengkung pada form */
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5); /* Bayangan untuk efek mengambang */
        }
        label {
            color: #e0e0e0; /* Warna label abu-abu terang */
        }
    </style>
</head>
<body>
    <h3>Register</h3>
    <form action="proses_register.php" method="post">
        <div class="mb-3">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nik">NIK:</label>
            <input type="text" name="nik" class="form-control">
        </div>
        <div class="mb-3">
            <label for="no_telp">No telepon:</label>
            <input type="text" name="no_telp" class="form-control">
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin">Jenis kelamin:</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="">Pilih jenis kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" class="form-control" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label for="id">Jabatan:</label>
            <select name="id" class="form-control">
                <option value="">Pilih jabatan</option>
                <?php 
                include "koneksi.php";
                $qry_jabatan = mysqli_query($koneksi, "select * from jabatan");
                while($data_jabatan = mysqli_fetch_array($qry_jabatan)){
                    echo '<option value="'.$data_jabatan['id'].'">'.$data_jabatan['nama_jabatan'].'</option>';    
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="d-grid">
            <input type="submit" name="simpan" value="Register" class="btn btn-primary">
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

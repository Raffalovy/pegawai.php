<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background-color: #1c1c1c; /* Latar belakang hitam */
            color: #e0e0e0; /* Warna teks abu-abu muda */
        }
        .navbar {
            background-color: #333; /* Abu-abu gelap untuk navbar */
        }
        .navbar-brand, .nav-link {
            color: #fff !important; /* Warna putih untuk teks navbar */
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #ccc !important; /* Warna hover untuk link di navbar */
        }
        .home-content {
            padding: 50px;
            text-align: center;
            color: #e0e0e0; /* Warna teks abu-abu muda */
        }
        .home-content h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .home-content p {
            font-size: 1.5rem;
            font-style: italic;
        }
        .container-fluid {
            max-width: 1200px;
        }
        .navbar-toggler-icon {
            filter: invert(100%);
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MyWebsite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_pegawai.php">Daftar Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="home-content">
        <h1>Selamat Datang </h1>
        <p>Jangan Lupa bahagia hari ini.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

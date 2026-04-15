<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard SIM</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f5f5;
        }
        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #1e3a8a;
            color: white;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
        }
        .sidebar a:hover {
            background: #334155;
        }
        .welcome {
            background: #334155;
            color: white;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-light bg-white shadow-sm px-3">
    <span class="navbar-brand">Dashboard</span>
    <span>👤</span>
</nav>

<div class="d-flex">

    <!-- SIDEBAR -->
    <div class="sidebar p-3">
        <h5>SIM Mahasiswa</h5>
        <hr>
        <a href="#">Dashboard</a>
        <a data-bs-toggle="collapse" href="#pelayananMenu" role="button">
    Pelayanan Mahasiswa +
</a>

<div class="collapse ms-3" id="pelayananMenu">
    <a href="#">Surat Keterangan</a>

    <!-- PELAYANAN STATUS -->
<a data-bs-toggle="collapse" href="#statusMenu" class="d-flex justify-content-between align-items-center">
    <span>Pelayanan Status</span>
    <span>+</span>
</a>

<div class="collapse ms-3" id="statusMenu">

    <a href="#">Cuti Kuliah</a>
    <a href="#">Pindah Kelas</a>
    <a href="#">Pengunduran Diri</a>

</div>
    <a href="#">Pelayanan UKT</a>
</div>
        <a data-bs-toggle="collapse" href="#kemahasiswaanMenu" class="d-flex justify-content-between align-items-center">
    <span>Kemahasiswaan</span>
    <span>+</span>
</a>

<div class="collapse ms-3" id="kemahasiswaanMenu">
    <a href="#">Beasiswa</a>
    <a href="#">Pelaporan</a>
    <a href="#">Kompetisi/Lomba</a>
    <a href="#">Pengajuan PKM</a>
    <a href="#">Pendaftaran Asrama</a>
</div>
        <!-- AKADEMIK -->
<a data-bs-toggle="collapse" href="#akademikMenu" class="d-flex justify-content-between align-items-center">
    <span>Akademik</span>
    <span>+</span>
</a>

<div class="collapse ms-3" id="akademikMenu">
    <a href="#">Daftar Ulang</a>
    <a href="#">Daftar Ulang KIPK</a>
    <a href="#">FRS dan KRS</a>
    <a href="#">Nilai Per Semester</a>
    <a href="#">Rekap Kehadiran</a>
    <a href="#">Jadwal Kuliah</a>
    <a href="#">Kuisioner PBM</a>
    <a href="#">Kuisioner Layanan Adm. PBM</a>
    <a href="#">Visi dan Misi Prodi</a>
</div>
        <a data-bs-toggle="collapse" href="#kelulusanMenu" class="d-flex justify-content-between align-items-center">
    <span>Kelulusan</span>
    <span>+</span>
</a>

<div class="collapse ms-3" id="kelulusanMenu">
    <a href="#">Alur Kelulusan</a>
</div>
    </div>

    <!-- CONTENT -->
    <div class="p-4 w-100">

        <!-- WELCOME -->
        <div class="welcome mb-4">
            <h3>Selamat Datang di Sistem Informasi Mahasiswa</h3>
            <p>Silakan update data diri terlebih dahulu</p>
        </div>

        <!-- DATA MAHASISWA -->
        <div class="card mb-4">
            <div class="card-header">DATA DIRI MAHASISWA</div>
            <div class="card-body">
                <table class="table">
                    <tr><td>NIM</td><td>3312511023</td></tr>
                    <tr><td>Nama</td><td>Adetyas Fauzia</td></tr>
                    <tr><td>No HP</td><td>085830079112</td></tr>
                    <tr><td>Email</td><td>adetyasfauzia@gmail.com</td></tr>
                    <tr><td>Alamat</td><td>Batam</td></tr>
                    <tr><td>Prodi</td><td>D3 Teknik Informatika</td></tr>
                    <tr><td>Status</td><td>Aktif</td></tr>
                </table>
            </div>
        </div>

        <!-- PANDUAN -->
        <div class="card">
            <div class="card-header">Panduan Sistem</div>
            <div class="card-body">
                <ul>
                    <li>Manual Daftar Ulang</li>
                    <li>Manual Pembayaran VA</li>
                    <li>Manual KRS</li>
                </ul>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</div>

</body>
</html>
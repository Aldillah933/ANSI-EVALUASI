<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Sistem Informasi Akademik' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e8f5e9; /* hijau muda */
        }
        .navbar {
            background-color: rgb(48, 150, 53) !important; /* hijau tua */
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 30px;
            padding-right: 30px;
            width: 100%;
            position: sticky;
            top: 0;
            z-index: 1020;
        }
        .navbar .nav-link {
            color: white !important;
            font-weight: bold;
        }
        .navbar .nav-link:hover {
            text-decoration: underline;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="w-100 d-flex justify-content-between align-items-center">
    <a class="navbar-brand text-white" href="<?= base_url('/') ?>">Akademik & Akreditasi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon bg-light"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <!-- Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/') ?>">Dashboard</a>
        </li>

        <!-- Data Master -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dataMasterDropdown" role="button" data-bs-toggle="dropdown">
            Data Master
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('/program-studi') ?>">Program Studi</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/dosen') ?>">Dosen</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/mahasiswa') ?>">Mahasiswa</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/mata-kuliah') ?>">Mata Kuliah</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/kriteria-akreditasi') ?>">Kriteria Akreditasi</a></li>
          </ul>
        </li>

        <!-- Evaluasi Akademik -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="evaluasiDropdown" role="button" data-bs-toggle="dropdown">
            Evaluasi Akademik
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('/evaluasi-dosen') ?>">Evaluasi Kinerja Dosen oleh Mahasiswa</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/evaluasi-mk') ?>">Evaluasi Mata Kuliah</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/rekap-nilai') ?>">Rekap Nilai Mahasiswa</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/rekap-kehadiran') ?>">Rekap Kehadiran Dosen dan Mahasiswa</a></li>
          </ul>
        </li>

        <!-- Akreditasi -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="akreditasiDropdown" role="button" data-bs-toggle="dropdown">
            Akreditasi
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('/input-indikator') ?>">Input Indikator Akreditasi</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/upload-bukti') ?>">Upload Bukti Dukung</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/tracking-akreditasi') ?>">Tracking Status Pengisian</a></li>
            <li><a class="dropdown-item" href="<?= base_url('/validasi-dokumen') ?>">Validasi Dokumen</a></li>
          </ul>
        </li>

       

        <!-- Manajemen Pengguna -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="penggunaDropdown" role="button" data-bs-toggle="dropdown">
            Manajemen Pengguna
          </a>
          <ul class="dropdown-menu">
            <li><a href="/logout" class="btn btn-outline-light btn-sm">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="content container">
    <?= $this->renderSection('content') ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

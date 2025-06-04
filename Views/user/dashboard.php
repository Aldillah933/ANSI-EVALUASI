<style>
    html, body {
        margin: 0;
        padding: 0;
        width: 100%;
        font-family: Arial, sans-serif;
        display: flex;
    }

    .sidebar {
        width: 250px;
        height: 100vh;
        background-color: #343a40;
        color: white;
        display: flex;
        flex-direction: column;
        padding: 20px;
        box-sizing: border-box;
        position: fixed;
        top: 0;
        left: 0;
    }

    .sidebar h2 {
        margin-top: 0;
        font-size: 1.5rem;
        margin-bottom: 30px;
        text-align: center;
    }

    .sidebar a {
        color: white;
        text-decoration: none;
        margin-bottom: 20px;
        font-size: 1rem;
        padding: 10px;
        border-radius: 8px;
        transition: background-color 0.3s;
    }

    .sidebar a:hover {
        background-color: #495057;
    }

    .main-content {
        margin-left: 250px;
        width: calc(100% - 250px);
        min-height: 100vh;
    }

    .dashboard-welcome {
        position: relative;
        height: 100vh;
        width: 100%;
        background-image: url('/img/c.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        text-align: center;
        overflow: hidden;
    }

    .dashboard-welcome::before {
        content: '';
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    .dashboard-welcome > * {
        position: relative;
        z-index: 2;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
    }

    .dashboard-welcome h1 {
        font-size: 2.5rem;
        font-weight: bold;
    }

    .dashboard-welcome h2,
    .dashboard-welcome h3 {
        font-size: 1.5rem;
        margin-top: 10px;
    }

    .dashboard-welcome p {
        font-size: 1.1rem;
        margin-top: 20px;
        max-width: 800px;
    }

    @media (max-width: 768px) {
        .sidebar {
            display: none;
        }

        .main-content {
            margin-left: 0;
            width: 100%;
        }

        .dashboard-welcome h1 {
            font-size: 2rem;
        }

        .dashboard-welcome h2,
        .dashboard-welcome h3 {
            font-size: 1.2rem;
        }

        .dashboard-welcome p {
            font-size: 1rem;
        }
    }
</style>

<!-- Sidebar Menu Kiri -->
<div class="sidebar">
    <h2>Dashboard Mahasiswa</h2>
    <a href="<?= base_url('/evaluasi_matkul') ?>">Evaluasi Mata Kuliah</a>
    <a href="<?= base_url('/evaluasi_dosen') ?>">Evaluasi Dosen</a>
    <a class="nav-link" href="<?= base_url('/login') ?>">Logout</a>
</div>

<!-- Konten Utama -->
<div class="main-content">
    <div class="dashboard-welcome">
        <h1>Selamat Datang di Sistem Informasi</h1>
        <h2>Evaluasi Akademik & Akreditasi</h2>
        <h3>Universitas Muhammadiyah Bima</h3>
        <p>"Berjuang hari ini untuk masa depan yang membanggakan."</p>
    </div>
</div>

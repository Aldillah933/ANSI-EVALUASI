<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<style>
    html, body {
        margin: 0;
        padding: 0;
        width: 100%;
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
        font-size: 3rem;
        font-weight: bold;
    }

    .dashboard-welcome h2,
    .dashboard-welcome h3 {
        font-size: 2rem;
        margin-top: 10px;
    }

    .dashboard-welcome p {
        font-size: 1.2rem;
        margin-top: 20px;
        max-width: 800px;
    }

    .menu-section {
        padding: 60px 20px;
        background-color: #f8f9fa;
        text-align: center;
    }

    .menu-section h2 {
        font-size: 2rem;
        margin-bottom: 30px;
        color: #333;
    }

    .menu-cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .menu-card {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        padding: 20px;
        width: 300px;
        transition: transform 0.2s ease;
    }

    .menu-card:hover {
        transform: translateY(-5px);
    }

    .menu-card h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: #007bff;
    }

    .menu-card p {
        font-size: 1rem;
        margin-bottom: 15px;
    }

    .menu-card a {
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }

    .menu-card a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .dashboard-welcome h1 {
            font-size: 2rem;
        }

        .dashboard-welcome h2,
        .dashboard-welcome h3 {
            font-size: 1.3rem;
        }

        .dashboard-welcome p {
            font-size: 1rem;
        }

        .menu-cards {
            flex-direction: column;
            align-items: center;
        }
    }
</style>

<!-- Hero Section -->
<div class="dashboard-welcome">
    <h1>Selamat Datang di Sistem Informasi</h1>
    <h2>Evaluasi Akademik dan Akreditasi Perguruan Tinggi</h2>
    <h3>Universitas Muhammadiyah Bima</h3>
    <p>"Berjuanglah hari ini, agar esok menjadi mahasiswa yang dibanggakan keluarga dan bangsa."</p>
</div>


<?= $this->endSection() ?>

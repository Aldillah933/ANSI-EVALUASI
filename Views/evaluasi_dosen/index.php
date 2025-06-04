<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
    <meta charset="UTF-8">
    <title>Admin - Evaluasi Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Data Evaluasi Dosen</h2>
    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
             
            
                <th>Nama Dosen</th>
                <th>Penilaian</th>
                <th>Komentar</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($evaluasi as $d): ?>
            <tr>
               
                <td><?= esc($d['nama_dosen']) ?></td>
                <td><?= esc($d['penilaian']) ?></td>
                <td><?= esc($d['komentar']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>

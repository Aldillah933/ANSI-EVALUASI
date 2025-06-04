<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Evaluasi Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Data Evaluasi Mata Kuliah</h2>
    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
              
          
                <th>Nama Mata Kuliah</th>
                <th>Penilaian</th>
                <th>Komentar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matkul as $m): ?>
                <tr>
                 
                  
                    <td><?= $m['nama_mata_kuliah'] ?></td>
                    <td><?= $m['penilaian'] ?></td>
                    <td><?= $m['komentar'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>

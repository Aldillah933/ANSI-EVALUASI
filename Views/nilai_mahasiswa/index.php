<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h2>Rekap Nilai Mahasiswa</h2>
<table border="1">
    <thead>
        <tr>
            <th>Nama Mahasiswa</th>
            <th>Mata Kuliah</th>
            <th>Semester</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($nilai as $n): ?>
        <tr>
            <td><?= $n['nama_mahasiswa'] ?></td>
            <td><?= $n['nama_mk'] ?></td>
            <td><?= $n['semester'] ?></td>
            <td><?= $n['nilai'] ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?= $this->endSection() ?>
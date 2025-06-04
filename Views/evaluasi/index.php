<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Semester</th>
            <th>Skor</th>
            <th>Komentar</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach ($evaluasi as $row): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= esc($row['nama_dosen']) ?></td>
                <td><?= esc($row['nama_mk']) ?></td>
                <td><?= esc($row['semester']) ?></td>
                <td><?= esc($row['skor']) ?></td>
                <td><?= esc($row['komentar']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>
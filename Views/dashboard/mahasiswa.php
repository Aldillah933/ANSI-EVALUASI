<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1>Data Mahasiswa</h1>
<a href="<?= base_url('mahasiswa/create') ?>" class="btn btn-primary mb-3">+ Tambah Mahasiswa</a>

<table class="table table-bordered table-striped">
    <thead class="table-success">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Angkatan</th>
            <th>Program Studi</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= esc($mhs['nim']); ?></td>
            <td><?= esc($mhs['nama_mahasiswa']); ?></td>
            <td><?= esc($mhs['angkatan']); ?></td>
            <td><?= esc($mhs['nama_prodi']); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection(); ?>

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h1><?= esc($title) ?></h1>
<a href="<?= base_url('program-studi/create') ?>" class="btn btn-primary mb-3">+ Tambah Program Studi</a>

<table class="table table-bordered table-striped">
    <thead class="table-success">
        <tr>
            <th>Nama Program Studi</th>
            <th>Jenjang</th>
            <th>Status Akreditasi</th>
            <th>Tahun Akreditasi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($program_studi as $ps): ?>
        <tr>
            <td><?= esc($ps['nama_prodi']) ?></td>
            <td><?= esc($ps['jenjang']) ?></td>
            <td><?= esc($ps['status_akreditasi']) ?></td>
            <td><?= esc($ps['tahun_akreditasi']) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection(); ?>

<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<h1>Data Indikator Akreditasi</h1>
<a href="/indikator/create" class="btn btn-success mb-3">+ Tambah Indikator</a>

<table class="table table-bordered table-striped">
    <thead class="table-success">
        <tr>
            <th>No</th>
            <th>Kriteria</th>
            <th>Indikator</th>
            <th>Deskripsi</th>
        </tr>
    </thead>
    <tbody>
    <?php $no = 1; foreach ($indikator as $i): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= esc($i['kriteria']) ?></td>
            <td><?= esc($i['indikator']) ?></td>
            <td><?= esc($i['deskripsi']) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection(); ?>

<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<h1>Data Dosen</h1>
<a href="<?= base_url('dosen/create'); ?>" class="btn btn-primary">+ Tambah Dosen</a>


<table class="table table-bordered table-striped">
    <thead class="table-primary">
        <tr>
            <th>NIDN</th>
            <th>Nama Dosen</th>
            <th>Email</th>
            <th>Program Studi</th>
        
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dosen as $dsn): ?>
        <tr>
            <td><?= $dsn['nidn'] ?></td>
            <td><?= $dsn['nama_dosen'] ?></td>
            <td><?= $dsn['email'] ?></td>
            <td><?= $dsn['nama_prodi'] ?></td>
        
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection(); ?>

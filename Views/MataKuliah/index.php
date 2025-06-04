<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h2>Data Mata Kuliah</h2>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <table class="table table-bordered table-striped">
    <thead class="table-success">
        <tr>
            <th>No</th>
            <th>Kode MK</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Program Studi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach($mataKuliah as $mk): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $mk['kode_mk'] ?></td>
            <td><?= $mk['nama_mk'] ?></td>
            <td><?= $mk['sks'] ?></td>
            <td><?= $mk['semester'] ?></td>
            <td><?= $mk['nama_prodi'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>

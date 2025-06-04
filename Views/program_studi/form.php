<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<h1><?= esc($title) ?></h1>

<form action="<?= base_url('program-studi/store') ?>" method="post">
    <div class="mb-3">
        <label>Nama Program Studi</label>
        <input type="text" name="nama_prodi" class="form-control"
               value="<?= isset($program_studi) ? esc($program_studi['nama_prodi']) : '' ?>" required>
    </div>
    <div class="mb-3">
        <label>Jenjang</label>
        <input type="text" name="jenjang" class="form-control"
               value="<?= isset($program_studi) ? esc($program_studi['jenjang']) : '' ?>" required>
    </div>
    <div class="mb-3">
        <label>Status Akreditasi</label>
        <input type="text" name="status_akreditasi" class="form-control"
               value="<?= isset($program_studi) ? esc($program_studi['status_akreditasi']) : '' ?>" required>
    </div>
    <div class="mb-3">
        <label>Tahun Akreditasi</label>
        <input type="number" name="tahun_akreditasi" class="form-control"
               value="<?= isset($program_studi) ? esc($program_studi['tahun_akreditasi']) : '' ?>" required>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= base_url('program-studi') ?>" class="btn btn-secondary">Kembali</a>
</form>

<?= $this->endSection(); ?>

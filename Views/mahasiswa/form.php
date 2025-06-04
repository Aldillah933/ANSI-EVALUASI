<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h2><?= esc($title) ?></h2>

<form action="<?= base_url('mahasiswa/store') ?>" method="post">
    <div class="mb-3">
        <label>NIM</label>
        <input type="text" name="nim" class="form-control"
               value="<?= isset($mahasiswa) ? esc($mahasiswa['nim']) : '' ?>" required>
    </div>
    <div class="mb-3">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" class="form-control"
               value="<?= isset($mahasiswa) ? esc($mahasiswa['nama']) : '' ?>" required>
    </div>
    <div class="mb-3">
        <label>Program Studi</label>
        <input type="text" name="prodi" class="form-control"
               value="<?= isset($mahasiswa) ? esc($mahasiswa['prodi']) : '' ?>" required>
    </div>
    <div class="mb-3">
        <label>Angkatan</label>
        <input type="number" name="angkatan" class="form-control"
               value="<?= isset($mahasiswa) ? esc($mahasiswa['angkatan']) : '' ?>" required>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= base_url('mahasiswa') ?>" class="btn btn-secondary">Kembali</a>
</form>

<?= $this->endSection() ?>

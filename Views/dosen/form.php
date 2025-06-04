<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<h1><?= $title ?></h1>

<form action="<?= base_url('dosen/store') ?>" method="post">
    <div class="mb-3">
        <label for="nidn" class="form-label">NIDN</label>
        <input type="text" name="nidn" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="nama_dosen" class="form-label">Nama Dosen</label>
        <input type="text" name="nama_dosen" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="nama_prodi" class="form-label">Program Studi</label>
        <select name="nama_prodi" class="form-control" required>
            <option value="">-- Pilih Program Studi --</option>
            <?php foreach ($program_studi as $prodi): ?>
                <option value="<?= $prodi['nama_prodi'] ?>"><?= esc($prodi['nama_prodi']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
</form>

<?= $this->endSection(); ?>

<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h2><?= isset($mata_kuliah) ? 'Edit Mata Kuliah' : 'Tambah Mata Kuliah' ?></h2>

<form action="<?= isset($mata_kuliah) ? base_url('mata-kuliah/update/' . $mata_kuliah['id']) : base_url('mata-kuliah/store') ?>" method="post">
    <div class="mb-3">
        <label for="kode_mk" class="form-label">Kode MK</label>
        <input type="text" name="kode_mk" class="form-control" required value="<?= isset($mata_kuliah) ? esc($mata_kuliah['kode_mk']) : '' ?>">
    </div>

    <div class="mb-3">
        <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
        <input type="text" name="nama_mk" class="form-control" required value="<?= isset($mata_kuliah) ? esc($mata_kuliah['nama_mk']) : '' ?>">
    </div>

    <div class="mb-3">
        <label for="sks" class="form-label">SKS</label>
        <input type="number" name="sks" class="form-control" required value="<?= isset($mata_kuliah) ? esc($mata_kuliah['sks']) : '' ?>">
    </div>

    <div class="mb-3">
        <label for="semester" class="form-label">Semester</label>
        <input type="number" name="semester" class="form-control" required value="<?= isset($mata_kuliah) ? esc($mata_kuliah['semester']) : '' ?>">
    </div>

    <div class="mb-3">
        <label for="prodi_id" class="form-label">Program Studi</label>
        <select name="prodi_id" class="form-control" required>
            <option value="">-- Pilih Program Studi --</option>
            <?php foreach ($program_studi as $prodi): ?>
                <option value="<?= $prodi['prodi_id'] ?>"
                    <?= (isset($mata_kuliah) && $mata_kuliah['prodi_id'] == $prodi['prodi_id']) ? 'selected' : '' ?>>
                    <?= esc($prodi['nama_prodi']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?= $this->endSection() ?>

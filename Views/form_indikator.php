<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<h2>Form Tambah Indikator Akreditasi</h2>

<form action="/indikator/store" method="post">
    <div class="mb-3">
        <label for="kriteria">Kriteria</label>
        <select name="kriteria" class="form-control" required>
            <option value="">-- Pilih Kriteria --</option>
            <option value="Visi dan Misi">Visi dan Misi</option>
            <option value="Tata Pamong">Tata Pamong</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Sumber Daya">Sumber Daya</option>
            <option value="Keuangan">Keuangan</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="indikator">Indikator</label>
        <input type="text" name="indikator" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>


<?= $this->endSection(); ?>

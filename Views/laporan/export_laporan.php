<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h2>Ekspor Laporan</h2>
<a href="<?= base_url('/lap-evaluasi-dosen/pdf') ?>" class="btn btn-danger">Export Evaluasi Dosen (PDF)</a>
<a href="<?= base_url('/lap-kinerja-akademik/excel') ?>" class="btn btn-success">Export Nilai Mahasiswa (Excel)</a>
<?= $this->endSection() ?>

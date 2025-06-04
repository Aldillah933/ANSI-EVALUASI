<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h2>Laporan Evaluasi Dosen</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Dosen</th>
      <th>Mata Kuliah</th>
      <th>Semester</th>
      <th>Skor Rata-rata</th>
      <th>Responden</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($evaluasi as $row): ?>
      <tr>
        <td><?= $row['nama_dosen'] ?></td>
        <td><?= $row['nama_mk'] ?></td>
        <td><?= $row['semester'] ?></td>
        <td><?= $row['skor_rata'] ?></td>
        <td><?= $row['jumlah_responden'] ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?= $this->endSection() ?>

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>



<table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
  <thead>
    <tr style="background-color: #f2f2f2;">
      <th>ID Indikator</th>
      <th>Nilai Indikator</th>
      <th>Status Pengisian</th>
      <th>Dokumen</th>
      <th>Status Validasi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($indikator as $item): ?>
      <tr>
        <td><?= $item['indikator_id'] ?></td>
        <td><?= $item['nilai_indikator'] ?></td>
        <td><?= $item['status_pengisian'] ?></td>
        <td>
          <?= $item['nama_dokumen'] ?? '-' ?>
          <?php if (!empty($item['nama_dokumen'])): ?>
            <a href="<?= base_url($item['file_path'] ?? '#') ?>" target="_blank">[Lihat]</a>
          <?php endif; ?>
        </td>
        <td><?= $item['status_validasi'] ?? 'Belum divalidasi' ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?= $this->endSection() ?>

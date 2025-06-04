<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h3>Upload Dokumen Bukti Akreditasi</h3>

<?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<?php if(session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID Indikator</th>
            <th>Nilai Indikator</th>
            <th>Dokumen Bukti</th>
            <th>Upload Dokumen</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($indikator as $ind): ?>
        <tr>
            <td><?= $ind['indikator_id'] ?></td>
            <td><?= $ind['nilai_indikator'] ?></td>
            <td>
                <?php if (!empty($ind['bukti'])): ?>
                    <ul>
                        <?php foreach($ind['bukti'] as $b): ?>
                            <li>
                                <?= esc($b['nama_dokumen']) ?> -
                                <a href="<?= base_url('upload-bukti/download/' . $b['bukti_id']) ?>" class="btn btn-sm btn-success">Download</a>

                                <a href="<?= base_url('upload-bukti/delete/' . $b['bukti_id']) ?>" onclick="return confirm('Hapus dokumen ini?')">Hapus</a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <em>Belum ada dokumen</em>
                <?php endif; ?>
            </td>
            <td>
                <form action="<?= base_url('upload-bukti/process/' . $ind['indikator_id']) ?>" method="post" enctype="multipart/form-data">
                    <input type="file" name="file_bukti" required>
                    <button type="submit" class="btn btn-primary btn-sm mt-1">Upload</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>

<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>



<!DOCTYPE html>
<html>
<head>
    <title>Validasi Dokumen</title>
</head>
<body>
    <h2>Validasi Dokumen oleh Tim Mutu</h2>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Bukti</th>
                <th>Validator</th>
                <th>Status</th>
                <th>Catatan</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($log_validasi as $log): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $log['bukti_id'] ?></td>
                <td><?= $log['validator_id'] ?></td>
                <td><?= $log['status_validasi'] ?></td>
                <td><?= $log['catatan'] ?></td>
                <td><?= $log['waktu_validasi'] ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
<?= $this->endSection(); ?>
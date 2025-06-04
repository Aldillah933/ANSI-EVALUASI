<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Evaluasi Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Form Evaluasi Dosen</h4>
        </div>
        <div class="card-body">

            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>

            <form action="<?= base_url('evaluasi/saveDosen') ?>" method="post">
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="nama_dosen" class="form-label">Nama Dosen</label>
                    <input type="text" id="nama_dosen" name="nama_dosen" class="form-control" required value="<?= old('nama_dosen') ?>">
                </div>

                <div class="mb-3">
                    <label for="penilaian" class="form-label">Penilaian</label>
                    <select id="penilaian" name="penilaian" class="form-select" required>
                        <option value="" disabled <?= old('penilaian') ? '' : 'selected' ?>>-- Pilih Penilaian --</option>
                        <option value="Sangat Baik" <?= old('penilaian') == 'Sangat Baik' ? 'selected' : '' ?>>Sangat Baik</option>
                        <option value="Baik" <?= old('penilaian') == 'Baik' ? 'selected' : '' ?>>Baik</option>
                        <option value="Cukup" <?= old('penilaian') == 'Cukup' ? 'selected' : '' ?>>Cukup</option>
                        <option value="Kurang" <?= old('penilaian') == 'Kurang' ? 'selected' : '' ?>>Kurang</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="komentar" class="form-label">Komentar</label>
                    <textarea id="komentar" name="komentar" class="form-control" rows="4" required><?= old('komentar') ?></textarea>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>

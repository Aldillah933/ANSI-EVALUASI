<!DOCTYPE html>
<html>
<head>
    <title>Semua Data Akademik & Akreditasi</title>
    <style>
        table { border-collapse: collapse; width: 100%; margin-bottom: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #eee; }
    </style>
</head>
<body>

<h1>Data Tabel Akademik & Akreditasi</h1>

<?php foreach ($semuaData as $tabel => $data): ?>
    <h2><?= ucfirst(str_replace('_', ' ', $tabel)) ?></h2>
    <?php if (!empty($data)): ?>
        <table>
            <thead>
                <tr>
                    <?php foreach (array_keys((array)$data[0]) as $kolom): ?>
                        <th><?= $kolom ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $baris): ?>
                    <tr>
                        <?php foreach ((array)$baris as $nilai): ?>
                            <td><?= $nilai ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p><i>Data kosong</i></p>
    <?php endif; ?>
<?php endforeach; ?>

</body>
</html>

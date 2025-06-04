<tbody>
    <?php $no = 1; if (isset($program_studi)) : ?>
        <?php foreach ($program_studi as $prodi): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= esc($prodi['nama_prodi']) ?></td>
            <td><?= esc($prodi['jenjang']) ?></td>
            <td><?= esc($prodi['status_akreditasi']) ?></td>
            <td><?= esc($prodi['tahun_akreditasi']) ?></td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="5" class="text-center">Data belum tersedia.</td>
        </tr>
    <?php endif; ?>
</tbody>

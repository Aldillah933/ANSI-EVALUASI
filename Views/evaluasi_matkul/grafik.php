<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h2>Grafik Evaluasi Mata Kuliah per Semester</h2>
<canvas id="chartEvaluasi"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('chartEvaluasi').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?= json_encode($semester) ?>,
            datasets: [{
                label: 'Rata-rata Skor Evaluasi',
                data: <?= json_encode($rata_skor) ?>,
                backgroundColor: 'rgba(54, 162, 235, 0.7)'
            }]
        },
        options: {
            scales: {
                y: { beginAtZero: true, max: 5 }
            }
        }
    });
</script>
<?= $this->endSection() ?>
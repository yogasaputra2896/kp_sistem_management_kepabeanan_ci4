<?= $this->extend('layouts/layout') ?>

<?= $this->section('title') ?>Admin Dashboard<?= $this->endSection() ?>

<?= $this->section('pageTitle') ?>
<div class="page-heading">
    <h3>Dashboard Admin</h3>
    <p class="text-subtitle text-muted">Selamat Datang Di Dashboard Admin - Trustway Management System Kepabeanan</p>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<style>
    .stat-card {
        border-radius: 0.75rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transition: transform 0.2s;
    }
    .stat-card:hover {
        transform: translateY(-5px);
    }
    .stat-card .card-body {
        text-align: center;
        padding: 1rem;
    }
    .stat-title {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    .stat-value {
        font-size: 1.2rem;
    }
    .category-title {
        margin-top: 2rem;
        margin-bottom: 1rem;
        font-size: 1.2rem;
        font-weight: 700;
        border-bottom: 2px solid #dee2e6;
        padding-bottom: 0.25rem;
    }
</style>

<!-- User Statistics -->
<div class="category-title mb-3"><i class="bi bi-bar-chart-fill me-2"></i>Statistik User</div>
<div class="row g-3">
    <!-- Total User -->
    <div class="col-md-3 col-6">
        <div class="card text-center stat-card p-3">
            <div class="icon mb-2">
                <i class="bi bi-people-fill fs-2 text-primary"></i>
            </div>
            <div class="stat-title mb-1">Total User</div>
            <div class="stat-value fw-bold"><?= $totalUser ?></div>
        </div>
    </div>

    <!-- User by Role -->
    <?php foreach($userByRole as $u): ?>
        <div class="col-md-2 col-6">
            <div class="card text-center stat-card p-3">
                <div class="icon mb-2">
                    <i class="bi bi-person-fill fs-2 text-secondary"></i>
                </div>
                <div class="stat-title mb-1"><?= ucfirst($u['role']) ?></div>
                <div class="stat-value fw-bold"><?= $u['total'] ?></div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Deleted User -->
    <div class="col-md-3 col-6">
        <div class="card text-center stat-card p-3">
            <div class="icon mb-2">
                <i class="bi bi-trash3-fill fs-2 text-danger"></i>
            </div>
            <div class="stat-title mb-1">Deleted User</div>
            <div class="stat-value fw-bold"><?= $totalDeletedUser ?></div>
        </div>
    </div>
</div>


<!-- Booking Job Statistics -->
<div class="category-title mb-3"><i class="bi bi-bar-chart-fill me-2"></i>Statistik Booking Job</div>
<div class="row g-3">
    <!-- Total Booking Job -->
    <div class="col-md-6 col-6">
        <div class="card text-center stat-card p-3">
            <div class="icon mb-2">
                <i class="bi bi-calendar-check-fill fs-2 text-primary"></i>
            </div>
            <div class="stat-title mb-1">Total Booking Job</div>
            <div class="stat-value fw-bold"><?= $totalBooking ?></div>
        </div>
    </div>

    <!-- Deleted Booking Job -->
    <div class="col-md-6 col-6">
        <div class="card text-center stat-card p-3">
            <div class="icon mb-2">
                <i class="bi bi-trash3-fill fs-2 text-danger"></i>
            </div>
            <div class="stat-title mb-1">Deleted Booking Job</div>
            <div class="stat-value fw-bold"><?= $totalTrashBooking ?></div>
        </div>
    </div>

    <!-- Booking Job by Type -->
    <?php foreach($bookingByType as $b): ?>
        <?php 
            // Tentukan ukuran kolom
            if ($b['type'] == 'import_fcl_nonjaminan' || $b['type'] == 'import_fcl_jaminan') {
                $colClass = 'col-md-3 col-6';
            } else {
                $colClass = 'col-md-2 col-6';
            }

            // Tentukan label dan warna icon
            switch($b['type']) {
                
                case 'import_fcl_jaminan':
                    $label = 'FCL Jaminan';
                    $icon = 'bi-truck text-warning';
                    break;
                case 'import_fcl_nonjaminan':
                    $label = 'FCL Non-Jaminan';
                    $icon = 'bi-truck text-info';
                    break;
                case 'export':
                    $label = 'Export';
                    $icon = 'bi-box-arrow-up-right text-success';
                    break;
                case 'import_lcl':
                    $label = 'LCL';
                    $icon = 'bi-archive text-secondary';
                    break;
                default:
                    $label = 'Lain-lain';
                    $icon = 'bi-question-circle text-muted';
            }
        ?>
        <div class="<?= $colClass ?>">
            <div class="card text-center stat-card p-3">
                <div class="icon mb-2">
                    <i class="bi <?= $icon ?> fs-2"></i>
                </div>
                <div class="stat-title mb-1"><?= $label ?></div>
                <div class="stat-value fw-bold"><?= $b['total'] ?></div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Worksheet Statistics -->
<div class="category-title mb-3"><i class="bi bi-bar-chart-fill me-2"></i>Statistik Worksheet</div>
<div class="row g-3">
    <!-- Total Worksheet -->
    <div class="col-md-4 col-6">
        <div class="card text-center stat-card p-3">
            <div class="icon mb-2">
                <i class="bi bi-journal-text fs-2 text-primary"></i>
            </div>
            <div class="stat-title mb-1">Total Worksheet</div>
            <div class="stat-value fw-bold"><?= $totalWorksheet ?></div>
        </div>
    </div>

    <!-- Worksheet Import -->
    <div class="col-md-4 col-6">
        <div class="card text-center stat-card p-3">
            <div class="icon mb-2">
                <i class="bi bi-box-arrow-in-down-right fs-2 text-warning"></i>
            </div>
            <div class="stat-title mb-1">Worksheet Import</div>
            <div class="stat-value fw-bold"><?= $totalWorksheetImport ?></div>
        </div>
    </div>

    <!-- Worksheet Export -->
    <div class="col-md-4 col-6">
        <div class="card text-center stat-card p-3">
            <div class="icon mb-2">
                <i class="bi bi-box-arrow-up-left fs-2 text-success"></i>
            </div>
            <div class="stat-title mb-1">Worksheet Export</div>
            <div class="stat-value fw-bold"><?= $totalWorksheetExport ?></div>
        </div>
    </div>
</div>



<!-- Top 5 Consignee -->
<div class="card mt-4">
    <div class="card-header">
        <h5><i class="bi bi-fire">Top 5 Consignee</i></h5>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Consignee</th>
                    <th>Total Booking</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($topConsignees as $key => $c): ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $c['consignee'] ?></td>
                        <td><?= $c['total'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Grafik -->
<div class="row mt-4 g-3">
    <div class="col-md-6">
        <div class="card stat-card">
            <div class="card-header"><h5><i class="bi bi-bar-chart-fill me-2"> Grafik Booking Job</i></h5></div>
            <div class="card-body"><canvas id="chartBookingJob"></canvas></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card stat-card">
            <div class="card-header"><h5><i class="bi bi-bar-chart-fill me-2"> Grafik Worksheet Import vs Export</i></h5></div>
            <div class="card-body d-flex justify-content-center">
                <canvas id="chartWorksheet" style="max-width: 250px; max-height: 250px;"></canvas>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Chart Booking Job
    const ctxBooking = document.getElementById('chartBookingJob').getContext('2d');
    new Chart(ctxBooking, {
        type: 'bar',
        data: {
            labels: <?= json_encode(array_column($chartBookingJob, 'type')) ?>,
            datasets: [{
                label: 'Total Booking Job',
                data: <?= json_encode(array_column($chartBookingJob, 'total')) ?>,
                backgroundColor: '#435ebe', // warna bar diubah
                borderColor: '#435ebe',     // border bar sama dengan background
                borderWidth: 1
            }]
        },
        options: { 
            responsive: true, 
            scales: { y: { beginAtZero: true } },
            plugins: { legend: { display: false } } // optional: hilangkan legend
        }
    });


    // Chart Worksheet
    const ctxWorksheet = document.getElementById('chartWorksheet').getContext('2d');
    new Chart(ctxWorksheet, {
        type: 'doughnut',
        data: {
            labels: ['Import', 'Export'],
            datasets: [{
                label: 'Worksheet',
                data: [<?= $chartWorksheet['import'] ?>, <?= $chartWorksheet['export'] ?>],
                backgroundColor: ['#ffc107','#198754'],
                borderColor: ['#ffc107','#198754'],
                borderWidth: 1
            }]
        },
        options: { responsive: true }
    });
</script>

<?= $this->endSection() ?>

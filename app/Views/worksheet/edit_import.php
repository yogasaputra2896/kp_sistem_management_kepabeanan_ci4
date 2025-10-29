<?= $this->extend('layouts/layout') ?>
<!-- Title -->
<?= $this->section('title') ?>Edit Worksheet Import<?= $this->endSection() ?>

<!-- ====================== HEADER ====================== -->
<?= $this->section('pageTitle') ?>
<div class="page-heading mb-4">
    <h3>Edit Worksheet Import</h3>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="card shadow-sm p-4">
    <form action="<?= base_url('worksheet/import/update/' . $worksheet['id']) ?>" method="post">
        <input type="hidden" name="type" value="import">

        <!-- ========== Informasi Utama ========== -->
        <h5 class="mb-3 text-primary fw-bold border-bottom pb-2">Informasi Utama</h5>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>No Worksheet</label>
                <input type="text" class="form-control-plaintext" readonly value="<?= esc($worksheet['no_ws']) ?>">
            </div>
            <div class="col-md-6 mb-3">
                <label>Tanggal Worksheet</label>
                <input type="text" class="form-control-plaintext" readonly value="<?= esc($worksheet['created_at']) ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label>No PIB / No AJU</label>
                <input type="text" name="no_aju" class="form-control" value="<?= esc($worksheet['no_aju']) ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Tanggal PIB / AJU</label>
                <input type="date" name="tgl_aju" class="form-control" value="<?= esc($worksheet['tgl_aju']) ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label>Nopen PIB</label>
                <input type="text" name="pib_nopen" class="form-control" value="<?= esc($worksheet['pib_nopen']) ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label>Tanggal Nopen</label>
                <input type="date" name="tgl_nopen" class="form-control" value="<?= esc($worksheet['tgl_nopen']) ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label>Nama Shipper</label>
                <input type="text" name="shipper" class="form-control" value="<?= esc($worksheet['shipper']) ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label>Consignee</label>
                <input type="text" name="consignee" class="form-control" value="<?= esc($worksheet['consignee']) ?>" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Notify Party (Opsional)</label>
                <input type="text" name="notify_party" class="form-control" value="<?= esc($worksheet['notify_party']) ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label>PO Number (Opsional)</label>
                <input type="text" name="no_po" class="form-control" value="<?= esc($worksheet['no_po']) ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label>IO Number (Opsional)</label>
                <input type="text" name="io_number" class="form-control" value="<?= esc($worksheet['io_number']) ?>">
            </div>

            <div class="col-md-6 mb-3">
                <label>Tanggal SPPB</label>
                <input type="date" name="tgl_sppb" class="form-control" value="<?= esc($worksheet['tgl_sppb']) ?>">
            </div>

            <!-- ========== Informasi Pengiriman ========== -->
            <h5 class="mt-4 mb-3 text-primary fw-bold border-bottom pb-2">Informasi Pengiriman</h5>
            <div class="row">

                <div class="col-md-6 mb-3">
                    <label>Shipping Line</label>
                    <input type="text" name="shipping_line" class="form-control" value="<?= esc($worksheet['shipping_line']) ?>"  required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Port Of Loading (POL)</label>
                    <input type="text" name="pol" class="form-control" value="<?= esc($worksheet['pol']) ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Nama Vessel</label>
                    <input type="text" name="vessel" class="form-control" value="<?= esc($worksheet['vessel']) ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>No Voyage</label>
                    <input type="text" name="no_voyage" class="form-control" value="<?= esc($worksheet['no_voyage']) ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>ETA</label>
                    <input type="date" name="eta" class="form-control" value="<?= esc($worksheet['eta']) ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Lokasi Sandar</label>
                    <input type="text" name="terminal" class="form-control" value="<?= esc($worksheet['terminal']) ?>">
                </div>

            </div>

            <!-- ========== Informasi Dokumen ========== -->
            <h5 class="mt-4 mb-3 text-primary fw-bold border-bottom pb-2">Informasi Dokumen</h5>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>BL</label>
                    <input type="text" name="bl" class="form-control" value="<?= esc($worksheet['bl']) ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Tanggal BL</label>
                    <input type="date" name="tgl_bl" class="form-control" value="<?= esc($worksheet['tgl_bl']) ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Master BL</label>
                    <input type="text" name="master_bl" class="form-control" value="<?= esc($worksheet['master_bl']) ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Tanggal Master</label>
                    <input type="date" name="tgl_master" class="form-control" value="<?= esc($worksheet['tgl_master']) ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>No Invoice</label>
                    <input type="text" name="no_invoice" class="form-control" value="<?= esc($worksheet['no_invoice']) ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Tanggal Invoice</label>
                    <input type="date" name="tgl_invoice" class="form-control" value="<?= esc($worksheet['tgl_invoice']) ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Delivery Order (DO)</label>
                    <select name="do" class="form-select">
                        <option value="">-- Pilih Status DO --</option>
                        <option value="Sudah Ada DO" <?= $worksheet['do'] === 'Sudah Ada DO' ? 'selected' : '' ?>>Sudah Ada DO</option>
                        <option value="Belum Ada DO" <?= $worksheet['do'] === 'Belum Ada DO' ? 'selected' : '' ?>>Belum Ada DO</option>
                    </select>
                </div>


                <div class="col-md-6 mb-3">
                    <label>Tanggal Mati (DO)</label>
                    <input type="date" name="tgl_mati_do" class="form-control" value="<?= esc($worksheet['tgl_mati_do']) ?>">
                </div>

            </div>

            <!-- ========== Informasi Barang ========== -->
            <h5 class="mt-4 mb-3 text-primary fw-bold border-bottom pb-2">Informasi Barang</h5>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Commodity Barang</label>
                    <input type="text" name="commodity" class="form-control" value="<?= esc($worksheet['commodity']) ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Party</label>
                    <input type="text" name="party" class="form-control" value="<?= esc($worksheet['party']) ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Quantity</label>
                    <input type="text" name="qty" class="form-control" value="<?= esc($worksheet['qty']) ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Gross Weight</label>
                    <input type="text" name="gross" class="form-control" value="<?= esc($worksheet['gross']) ?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Net Weight</label>
                    <input type="text" name="net" class="form-control" value="<?= esc($worksheet['net']) ?>">
                </div>

            </div>

            <!-- ========== Catatan & Lainnya ========== -->
            <h5 class="mt-4 mb-3 text-primary fw-bold border-bottom pb-2">Catatan & Lainnya</h5>
            <div class="row">

                <div class="col-md-6 mb-3">
                    <label>Asuransi</label>
                    <select name="asuransi" class="form-select">
                        <option value="">-- Pilih Asuransi --</option>
                        <option value="CIF / CIP" <?= $worksheet['asuransi'] === 'CIF / CIP' ? 'selected' : '' ?>>CIF / CIP</option>
                        <option value="BUAT ASURANSI" <?= $worksheet['asuransi'] === 'BUAT ASURANSI' ? 'selected' : '' ?>>BUAT ASURANSI</option>
                        <option value="ASURANSI SENDIRI" <?= $worksheet['asuransi'] === 'ASURANSI SENDIRI' ? 'selected' : '' ?>>ASURANSI SENDIRI</option>
                    </select>
                </div>


                <div class="col-md-6 mb-3">
                    <label>TOP</label>
                    <select name="top" class="form-select">
                        <option value="">-- Pilih TOP --</option>
                        <option value="PREPAID" <?= $worksheet['top'] === 'PREPAID' ? 'selected' : '' ?>>PREPAID</option>
                        <option value="COLLECT" <?= $worksheet['top'] === 'COLLECT' ? 'selected' : '' ?>>COLLECT</option>
                    </select>
                </div>


                <div class="col-md-12 mb-3">
                    <label>Berita Acara</label>
                    <textarea name="berita_acara" class="form-control" rows="3"><?= esc($worksheet['berita_acara']) ?></textarea>
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-danger" id="checkDataBtn" data-id="<?= $worksheet['id'] ?>">Cek Data</button>
                <a href="<?= base_url('worksheet?type=import') ?>" class="btn btn-secondary">Kembali</a>
            </div>

    </form>
</div>

<script>
    document.getElementById('checkDataBtn').addEventListener('click', function(e) {
        e.preventDefault();

        const btn = this;
        btn.blur(); // langsung hilangkan fokus dari tombol
        const id = <?= $worksheet['id'] ?>;
        const form = document.querySelector('form');

        const formData = new FormData(form);

        // Jalankan updateImport terlebih dahulu
        fetch(`<?= base_url('worksheet/import/update/') ?>${id}`, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) throw new Error('Gagal update data');
                return response.text();
            })
            .then(() => fetch(`<?= base_url('worksheet/checkImport/') ?>${id}`))
            .then(response => response.json())
            .then(data => {
                document.querySelectorAll('.is-empty').forEach(el => el.classList.remove('is-empty'));

                if (data.status === 'complete') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Data Sudah Lengkap!',
                        text: data.message,
                        confirmButtonColor: '#435ebe'
                    }).then(() => btn.blur());
                } else if (data.status === 'incomplete') {
                    const list = data.missing_fields.map(f => `• ${f.label}`).join('<br>');

                    Swal.fire({
                        icon: 'warning',
                        title: 'Data Belum Lengkap',
                        html: `Ada kolom yang masih kosong:<br><br>${list}`,
                        confirmButtonColor: '#435ebe',
                        allowOutsideClick: false
                    }).then(() => {
                        // hilangkan fokus tombol sebelum proses highlight
                        btn.blur();

                        // fokus ke field kosong pertama setelah swal ditutup
                        setTimeout(() => {
                            data.missing_fields.forEach((f, i) => {
                                const el = document.querySelector(`input[name="${f.name}"], select[name="${f.name}"], textarea[name="${f.name}"]`);
                                if (el) {
                                    el.classList.add('is-empty');
                                    if (i === 0) {
                                        el.focus({
                                            preventScroll: false
                                        });
                                        el.scrollIntoView({
                                            behavior: 'smooth',
                                            block: 'center'
                                        });
                                    }
                                }
                            });

                            // hilangkan efek merah setelah 5 detik
                            setTimeout(() => {
                                document.querySelectorAll('.is-empty').forEach(el => el.classList.remove('is-empty'));
                            }, 3000);
                        }, 300);
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: data.message || 'Terjadi kesalahan.',
                        confirmButtonColor: '#435ebe'
                    }).then(() => btn.blur());
                }
            })
            .catch(err => {
                console.error(err);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Terjadi kesalahan saat update atau cek data.',
                    confirmButtonColor: '#435ebe'
                }).then(() => btn.blur());
            });
    });
</script>


<style>
    .is-empty {
        border: 2px solid red !important;
        background-color: #ffe6e6 !important;
        animation: shake 0.2s ease-in-out 0s 2;
    }

    @keyframes shake {

        0%,
        100% {
            transform: translateX(0);
        }

        25% {
            transform: translateX(-5px);
        }

        75% {
            transform: translateX(5px);
        }
    }
</style>


<?= $this->endSection() ?>
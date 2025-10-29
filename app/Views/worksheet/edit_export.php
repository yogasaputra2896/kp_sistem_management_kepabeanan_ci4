<?= $this->extend('layouts/layout') ?>
<!-- Title -->
<?= $this->section('title') ?>Edit Worksheet Export<?= $this->endSection() ?>

<!-- ====================== HEADER ====================== -->
<?= $this->section('pageTitle') ?>
<div class="page-heading">
    <h3>Edit Worksheet Export</h3>
</div>
<?= $this->endSection() ?>

<!-- ====================== CONTENT ====================== -->
<?= $this->section('content') ?>


    <form action="<?= base_url('worksheet/export/update/' . $worksheet['id']) ?>" method="post">
        <input type="hidden" name="type" value="export">

        <div class="row">
            <div class="col-md-4 mb-3">
                <label>No Worksheet</label>
                <input type="text" name="no_ws" class="form-control" value="<?= esc($worksheet['no_ws']) ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>No PEB / No AJU</label>
                <input type="text" name="no_aju" class="form-control" value="<?= esc($worksheet['no_aju']) ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>Shipper</label>
                <input type="text" name="shipper" class="form-control" value="<?= esc($worksheet['shipper']) ?>">
            </div>

            <div class="col-md-4 mb-3">
                <label>Party</label>
                <input type="text" name="party" class="form-control" value="<?= esc($worksheet['party']) ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>Vessel</label>
                <input type="text" name="vessel" class="form-control" value="<?= esc($worksheet['vessel']) ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>No Voyage</label>
                <input type="text" name="no_voyage" class="form-control" value="<?= esc($worksheet['no_voyage']) ?>">
            </div>

            <div class="col-md-4 mb-3">
                <label>POD</label>
                <input type="text" name="pod" class="form-control" value="<?= esc($worksheet['pod']) ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>Shipping Line</label>
                <input type="text" name="shipping_line" class="form-control" value="<?= esc($worksheet['shipping_line']) ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>Commodity</label>
                <input type="text" name="commodity" class="form-control" value="<?= esc($worksheet['commodity']) ?>">
            </div>

            <div class="col-md-4 mb-3">
                <label>Qty</label>
                <input type="text" name="qty" class="form-control" value="<?= esc($worksheet['qty']) ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>Net</label>
                <input type="text" name="net" class="form-control" value="<?= esc($worksheet['net']) ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>Gross</label>
                <input type="text" name="gross" class="form-control" value="<?= esc($worksheet['gross']) ?>">
            </div>

            <div class="col-md-4 mb-3">
                <label>BL</label>
                <input type="text" name="bl" class="form-control" value="<?= esc($worksheet['bl']) ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>Tanggal BL</label>
                <input type="date" name="tgl_bl" class="form-control" value="<?= esc($worksheet['tgl_bl']) ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>Master BL</label>
                <input type="text" name="master_bl" class="form-control" value="<?= esc($worksheet['master_bl']) ?>">
            </div>

            <div class="col-md-4 mb-3">
                <label>Tanggal Master</label>
                <input type="date" name="tgl_master" class="form-control" value="<?= esc($worksheet['tgl_master']) ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>No Invoice</label>
                <input type="text" name="no_invoice" class="form-control" value="<?= esc($worksheet['no_invoice']) ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>Tanggal Invoice</label>
                <input type="date" name="tgl_invoice" class="form-control" value="<?= esc($worksheet['tgl_invoice']) ?>">
            </div>

            <div class="col-md-4 mb-3">
                <label>ETD</label>
                <input type="date" name="etd" class="form-control" value="<?= esc($worksheet['etd']) ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>Asuransi</label>
                <input type="text" name="asuransi" class="form-control" value="<?= esc($worksheet['asuransi']) ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>TOP</label>
                <input type="text" name="top" class="form-control" value="<?= esc($worksheet['top']) ?>">
            </div>

            <div class="col-md-4 mb-3">
                <label>Berita Acara</label>
                <input type="text" name="berita_acara" class="form-control" value="<?= esc($worksheet['berita_acara']) ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>Status</label>
                <select name="status" class="form-select">
                    <option value="not completed" <?= $worksheet['status'] === 'not completed' ? 'selected' : '' ?>>Not Completed</option>
                    <option value="completed" <?= $worksheet['status'] === 'completed' ? 'selected' : '' ?>>Completed</option>
                </select>
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('worksheet?type=export') ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </form>

<?= $this->endSection() ?>

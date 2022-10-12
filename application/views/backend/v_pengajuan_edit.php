<!-- ============================================================== -->
<!-- Start Page Content here - Sahabat Teknik -->
<!-- ============================================================== -->

<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title"><?= $title ?></h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('pengajuan/edit/' . $data->id_pengajuan) ?>" method="post">
                        <div class="mb-3">
                            <input type="hidden" name="id_pengajuan" value="<?= $data->id_pengajuan ?>">
                            <label for="status_pengajuan" class="form-label">Status</label>
                            <select class="form-select <?= form_error('status_pengajuan') ? 'is-invalid' : '' ?>" id="status_pengajuan" name="status_pengajuan">
                                <option value="">-- Pilih Status --</option>
                                <option value="pending" <?= $data->status == 'pending' ? 'selected' : '' ?>>Pending</option>
                                <option value="proses" <?= $data->status == 'proses' ? 'selected' : '' ?>>Proses</option>
                                <option value="selesai" <?= $data->status == 'selesai' ? 'selected' : '' ?>>Selesai</option>
                                <option value="ditolak" <?= $data->status == 'ditolak' ? 'selected' : '' ?>>Ditolak</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= form_error('status_pengajuan') ?>
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="<?= base_url('pengajuan') ?>" class="btn btn-secondary btn-sm"> <i class="uil uil-sign-in-alt"></i> Kembali</a>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->

</div> <!-- content -->
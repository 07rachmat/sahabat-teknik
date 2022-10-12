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


    <div class="row">
        <div class="col-lg-12">
            <form action="<?= base_url('spareparts/edit/' . $data->id_spareparts) ?>" method="post">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="nama">Nama</label>
                            <input type="hidden" name="id_spareparts" value="<?= $data->id_spareparts ?>">
                            <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : '' ?>" id="nama" name="nama" placeholder="Nama" value="<?= $data->nama ?>">
                            <div class="invalid-feedback">
                                <?= form_error('nama') ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="deskripsi">Deskripsi</label>
                            <textarea class="form-control <?= form_error('deskripsi') ? 'is-invalid' : '' ?>" name="deskripsi" id="deskripsi" rows="5" placeholder="Deskripsi"><?= $data->deskripsi ?></textarea>
                            <div class="invalid-feedback">
                                <?= form_error('deskripsi') ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="status_spareparts" class="form-label">Status</label>
                            <select class="form-select <?= form_error('status_spareparts') ? 'is-invalid' : '' ?>" id="status_spareparts" name="status_spareparts">
                                <option value="">-- Pilih Status --</option>
                                <option value="tersedia" <?= $data->status == 'tersedia' ? 'selected' : '' ?>>Tersedia</option>
                                <option value="tidak" <?= $data->status == 'tidak' ? 'selected' : '' ?>>Tidak Tersedia</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= form_error('status_spareparts') ?>
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="<?= base_url('spareparts') ?>" class="btn btn-secondary btn-sm"> <i class="uil uil-sign-in-alt"></i> Kembali</a>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div> <!-- container -->

</div> <!-- content -->
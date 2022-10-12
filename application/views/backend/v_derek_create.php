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
            <form action="<?= base_url('derek/create') ?>" method="post">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="nama_derek">Nama Derek</label>
                                    <input type="text" class="form-control <?= form_error('nama_derek') ? 'is-invalid' : '' ?>" id="nama_derek" name="nama_derek" placeholder="Derek" value="<?= set_value('nama_derek') ?>">
                                    <div class="invalid-feedback">
                                        <?= form_error('nama_derek') ?>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="no_telepon">No Telepon / Whatsapp</label>
                                    <input type="number" class="form-control <?= form_error('no_telepon') ? 'is-invalid' : '' ?>" id="no_telepon" name="no_telepon" placeholder="No Telepon / Whatsapp" value="<?= set_value('no_telepon') ?>">
                                    <div class="invalid-feedback">
                                        <?= form_error('no_telepon') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="alamat">Alamat</label>
                                    <textarea class="form-control <?= form_error('alamat') ? 'is-invalid' : '' ?>" name="alamat" id="alamat" placeholder="Alamat" rows="1"><?= set_value('alamat') ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= form_error('alamat') ?>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori_unit" class="form-label">Unit Kategori</label>
                                    <select class="form-control <?= form_error('kategori_unit') ? 'is-invalid' : '' ?>" id="kategori_unit" name="kategori_unit">
                                        <option value="">-- Pilih Unit Kategori --</option>
                                        <option value="Kendaraan Kecil">Kendaraan Kecil</option>
                                        <option value="Kendaraan Sedang">Kendaraan Sedang</option>
                                        <option value="Kendaraan Besar">Kendaraan Besar</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= form_error('kategori_unit') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="<?= base_url('derek') ?>" class="btn btn-secondary btn-sm"> <i class="uil uil-sign-in-alt"></i> Kembali</a>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div> <!-- container -->

</div> <!-- content -->
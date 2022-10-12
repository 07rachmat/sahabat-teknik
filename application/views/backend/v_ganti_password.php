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
        <div class="col-lg-12">
            <form action="<?= base_url('ganti_password') ?>" method="post">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="password_lama">Password Lama</label>
                            <input type="password" class="form-control <?= form_error('password_lama') ? 'is-invalid' : '' ?>" id="password_lama" name="password_lama" placeholder="Password lama">
                            <div class="invalid-feedback">
                                <?= form_error('password_lama') ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password_baru">Passwor Baru</label>
                            <input type="password" class="form-control <?= form_error('password_baru') ? 'is-invalid' : '' ?>" id="password_baru" name="password_baru" placeholder="Password baru">
                            <div class="invalid-feedback">
                                <?= form_error('password_baru') ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="konfirmasi_password">Konfirmasi Password</label>
                            <input type="password" class="form-control <?= form_error('konfirmasi_password') ? 'is-invalid' : '' ?>" id="konfirmasi_password" name="konfirmasi_password" placeholder="Konfirmasi Password">
                            <div class="invalid-feedback">
                                <?= form_error('konfirmasi_password') ?>
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div> <!-- container -->

</div> <!-- content -->
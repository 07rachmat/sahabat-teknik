<div class="container">
    <div class="row justify-content-center">
        <div class="col-xxl-4 col-lg-5">
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
                <!-- Logo -->
                <div class="card-header pt-2 pb-2 text-center bg-primary text-light">
                    <h4>SAHABAT TEKNIK</h4>
                </div>

                <div class="card-body p-4">

                    <div class="text-center w-75 m-auto">
                        <h4 class="text-dark-50 text-center pb-0 fw-bold">Masuk</h4>
                    </div>

                    <form action="<?= base_url('auth/login_proses') ?>" method="POST">

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input class="form-control" type="text" id="username" name="username" placeholder="Masukkan username Anda" value="<?= set_value('username') ?>" autocomplete="off">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password Anda" autocomplete="off">
                                <div class="input-group-text" data-password="false">
                                    <span class="password-eye"></span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-0 text-center">
                            <button class="btn btn-primary" type="submit"> Login </button>
                        </div>

                    </form>
                </div> <!-- end card-body -->
            </div>
            <!-- end card -->

        </div> <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- end container -->
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
            <form action="<?= base_url('teknisi/edit/' . $data->id_user) ?>" method="post" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="nama_user">Nama</label>
                                    <input type="hidden" name="id_user" id="id_user" value="<?= $data->id_user ?>">
                                    <input type="text" class="form-control <?= form_error('nama_user') ? 'is-invalid' : '' ?>" id="nama_user" name="nama_user" placeholder="Nama" value="<?= $data->nama_user ?>">
                                    <div class="invalid-feedback">
                                        <?= form_error('nama_user') ?>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>" id="username" name="username" placeholder="Username" value="<?= $data->username ?>" readonly>
                                    <div class="invalid-feedback">
                                        <?= form_error('username') ?>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="no_telepon">No Telepon / Whatsapp</label>
                                    <input type="number" class="form-control <?= form_error('no_telepon') ? 'is-invalid' : '' ?>" id="no_telepon" name="no_telepon" placeholder="No Telepon / Whatsapp" value="<?= $data->no_telepon ?>">
                                    <div class="invalid-feedback">
                                        <?= form_error('no_telepon') ?>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control <?= form_error('jenis_kelamin') ? 'is-invalid' : '' ?>">
                                        <option value="">-- Pilih Jenis Kelamin</option>
                                        <option value="L" <?= $data->jenis_kelamin == 'L' ? 'selected' : '' ?>>Laki-laki</option>
                                        <option value="P" <?= $data->jenis_kelamin == 'P' ? 'selected' : '' ?>>Perempuan</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= form_error('jenis_kelamin') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="foto">Foto</label>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img src="<?= base_url() ?>assets//images/users/<?= $data->foto ?>" alt="default-sampul" class="img-thumbnail img-preview">
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control <?= form_error('foto') ? 'is-invalid' : '' ?> img-preview" id="foto" name="foto" accept="image/*" onchange="previewImg()">
                                            <div class="invalid-feedback">
                                                <?= form_error('foto') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="status_teknisi" class="form-label">Status</label>
                                    <select class="form-select <?= form_error('status_teknisi') ? 'is-invalid' : '' ?>" id="status_teknisi" name="status_teknisi">
                                        <option value="">-- Pilih Status --</option>
                                        <option value="aktif" <?= $data->status == 'aktif' ? 'selected' : '' ?>>Aktif</option>
                                        <option value="nonaktif" <?= $data->status == 'nonaktif' ? 'selected' : '' ?>>Tidak Aktif</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= form_error('status_teknisi') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="<?= base_url('teknisi') ?>" class="btn btn-secondary btn-sm"> <i class="uil uil-sign-in-alt"></i> Kembali</a>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div> <!-- container -->

</div> <!-- content -->

<script>
    function previewImg() {
        const foto = document.querySelector('#foto');
        const imgPreview = document.querySelector('.img-preview');
        const fileFoto = new FileReader();

        fileFoto.readAsDataURL(foto.files[0]);

        fileFoto.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
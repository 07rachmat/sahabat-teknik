<!-- ============================================================== -->
<!-- Start Page Content here - Sahabat Teknik -->
<!-- ============================================================== -->

<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <!-- <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title"><?= $title ?></h4>
            </div>
        </div>
    </div> -->
    <!-- end page title -->
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0">
                        <?= $title ?>
                    </h4>
                    <?php
                    if ($data->status == 'ditolak') { ?>
                        <div class="badge bg-danger text-light mb-3">Ditolak</div>
                    <?php } elseif ($data->status == 'pending') { ?>
                        <div class="badge bg-secondary text-light mb-3">Pending</div>
                    <?php } elseif ($data->status == 'proses') { ?>
                        <div class="badge bg-warning text-light mb-3">Proses</div>
                    <?php  } else { ?>
                        <div class="badge bg-success text-light mb-3">Selesai</div>
                    <?php } ?>

                    <h5>Biodata :</h5>

                    <div class="table-responsive">
                        <table class="table table-striped mb-3">
                            <tr>
                                <th style="width: 30%;">Nama Lengkap</th>
                                <td>:</td>
                                <td><?= $data->nama_pelanggan ?></td>
                            </tr>
                            <tr>
                                <th style="width: 30%;">No Telepon / Whatsapp</th>
                                <td>:</td>
                                <td><?= $data->no_telepon ?></td>
                            </tr>
                            <tr>
                                <th style="width: 30%;">Tipe Unit</th>
                                <td>:</td>
                                <td><?= $data->tipe_unit ?></td>
                            </tr>
                            <tr>
                                <th style="width: 30%;">No Plat</th>
                                <td>:</td>
                                <td><?= $data->no_plat ?></td>
                            </tr>
                            <tr>
                                <th style="width: 30%;">Jenis Service</th>
                                <td>:</td>
                                <td><?= $data->jenis_service ?></td>
                            </tr>
                        </table>
                    </div>
                    <!-- end table-responsive -->

                    <h5>Alamat Lokasi:</h5>
                    <p class="text-muted mb-2">
                        <?= $data->alamat_lokasi ?>
                    </p>

                    <h5>Deskripsi Kerusakan :</h5>
                    <p class="text-muted mb-2">
                        <?= $data->deskripsi_kerusakan ?>
                    </p>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="<?= base_url('pengajuan') ?>" class="btn btn-secondary btn-sm"> <i class="uil uil-sign-in-alt"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->

</div> <!-- content -->
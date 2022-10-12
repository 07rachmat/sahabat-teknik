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
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-primary mb-3 btn-sm" onclick="window.location='<?= base_url('derek/create') ?>'">
                            Tambah Data <i class="uil uil-plus"></i>
                        </button>
                    </div>
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>No Telepon</th>
                                <th>Alamat</th>
                                <th>Unit Derek</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data as $row) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->nama_derek ?></td>
                                    <td><?= $row->no_telepon ?></td>
                                    <td><?= $row->alamat ?></td>
                                    <td><?= $row->kategori_unit ?></td>
                                    <td><?= $row->status == 'tersedia' ? '<span class="badge bg-success">Tersedia</span>' : '<span class="badge bg-danger">Tidak Tersedia</span>' ?></span></td>
                                    <td>
                                        <a href="<?= base_url('derek/edit/' . $row->id_derek) ?>" class="btn btn-warning btn-sm me-1"><i class="mdi mdi-pencil"></i> Edit</a>
                                        <a href="<?= base_url('derek/delete/' . $row->id_derek) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')"><i class="mdi mdi-trash-can"></i> Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->

</div> <!-- content -->
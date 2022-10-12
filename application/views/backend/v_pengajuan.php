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
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>No Telepon</th>
                                <th>Alamat</th>
                                <th>Deskripsi</th>
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
                                    <td><?= $row->nama_pelanggan ?></td>
                                    <td><?= $row->no_telepon ?></td>
                                    <td><?= $row->alamat_lokasi ?></td>
                                    <td><?= $row->deskripsi_kerusakan ?></td>
                                    <?php
                                    if ($row->status == 'ditolak') { ?>
                                        <td><span class="badge bg-danger">Ditolak</span></td>
                                    <?php } elseif ($row->status == 'pending') { ?>
                                        <td><span class="badge bg-secondary">Pending</span></td>
                                    <?php } elseif ($row->status == 'proses') { ?>
                                        <td><span class="badge bg-warning">proses</span></td>
                                    <?php  } else { ?>
                                        <td><span class="badge bg-success">Selesai</span></td>
                                    <?php } ?>
                                    <td>
                                        <a href="<?= base_url('pengajuan/detail/' . $row->id_pengajuan) ?>" class="btn btn-info btn-sm me-1"><i class="mdi mdi-eye"></i> Detail</a>
                                        <a href="<?= base_url('pengajuan/edit/' . $row->id_pengajuan) ?>" class="btn btn-warning btn-sm me-1"><i class="mdi mdi-pencil"></i> Ubah Status</a>
                                        <a href="<?= base_url('pengajuan/delete/' . $row->id_pengajuan) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')"><i class="mdi mdi-trash-can"></i> Hapus</a>
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
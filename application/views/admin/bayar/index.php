<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>admin"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Riwayat Pemesanan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Riwayat Pemesanan</h3>
                </div>
                <div class="col-lg-12">
                    <!-- Hapus notifikasi flashdata -->
                    <!-- <?= $this->session->flashdata('message'); ?> -->
                    <div class="table-responsive">
                        <table class="table table-flush dataTable" id="datatable-id" role="grid" aria-describedby="datatable-basic_info">
                            <thead class="thead-dark">
                                <tr role="row">
                                    <th>Kode Pembayaran</th>
                                    <th>Nama Pemesan</th>
                                    <th>Tanggal Pesan</th>
                                    <th>Tanggal Reservasi</th>
                                    <th>Total Pembayaran</th>
                                    <th>Total Sudah Dibayar</th>
                                    <th>Status Pembayaran</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($booking as $mk) {
                                ?>
                                    <tr>
                                        <td><?= $mk['id_detail_menu'] ?></td>
                                        <td><?= $mk['nama_pemesan'] ?></td>
                                        <td><?= $mk['tanggal_pesan'] ?></td>
                                        <td><?= $mk['tanggal_reservasi'] ?></td>
                                        <td><?= $mk['total_pembayaran'] ?></td>
                                        <td><?= $mk['total_sudah_dibayar'] ?></td>
                                        <td><?= $mk['status_pembayaran'] ?></td>
                                        <td>
                                            <?php
                                            if ($mk['bukti_pembayaran'] != 'Kosong') {
                                            ?>
                                                <a href="<?php base_url() ?>pembayaran/detail/<?= $mk['id_booking'] ?>" class="btn btn-sm btn-info btn-sm">Lihat Gambar</a>
                                            <?php
                                            } else {
                                            ?>
                                                Belum Dilampirkan
                                            <?php
                                            } ?>
                                        </td>
                                        <td>
                                            <?php if ($mk['status_pembayaran'] === "Belum Bayar DP") {
                                            ?>
                                                <a href="<?php base_url() ?>pembayaran/edit/<?= $mk['id_booking'] ?>" class="btn btn-sm btn-warning">Verifikasi</a>
                                                <a href="<?php base_url() ?>pembayaran/delete/<?= $mk['id_booking'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus? Jika anda menghapus menu ini maka gambar menu ini ikut terhapus.')" class="btn btn-sm btn-danger"> Hapus</a>
                                            <?php
                                            } ?>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

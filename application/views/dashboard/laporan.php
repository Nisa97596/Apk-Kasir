<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">

    <meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Admin Dashboard</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url("assets/") ?>images/favicon.png">
    <!-- Datatable -->
    <link href="<?= base_url("assets/") ?>vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="<?= base_url("assets/") ?>vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="<?= base_url("assets/") ?>css/style.css" rel="stylesheet">

</head>

<body>
    <div class="container-fluid">
        <div class="row page-titles" style="margin-top:2rem;">
            <div class="d-flex align-items-center my-3" style="padding:4px;">
                <a class="btn btn-square btn-outline-primary"
                    style="margin:4px; font-weight: 400; font-size:1rem; border-radius: 5px; "
                    href="<?= base_url('kasir/') ?>">
                    Transaksi
                </a>
                <a class="btn btn-square  btn-outline-primary"
                    style="margin:4px; font-weight: 400; font-size:1rem;border-radius: 5px;"
                    href="<?= base_url('member/') ?>">
                    Member
                </a>
                <a class="btn btn-square  btn-outline-primary"
                    style="margin:4px; font-weight: 400; font-size:1rem;border-radius: 5px;"
                    href="<?= base_url('log_out/') ?>">
                    Logout
                </a>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Member</h4>
                        <button type="button" class="btn btn-rounded btn-info"
                            style="background-color:#007bff;border:#007bff;" data-bs-toggle="modal"
                            data-bs-target="#tambahMember">
                            <span class="btn-icon-start text-info">
                                <i class="fa fa-plus color-info" style="color:#007bff;"></i>
                            </span>
                            Tambah Data
                        </button>
                    </div>
                    <!-- ADD Form -->
                    <div class="modal fade" id="tambahMember" tabindex="-1" aria-labelledby="tambahDataModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <!-- Modal Body (Form) -->
                                <div class="modal-body">
                                    <form id="tambahDataForm" method="post" action="<?= base_url('Add_member/') ?>">
                                        <!-- Input Nama -->
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="Masukkan nama" required>
                                        </div>

                                        <!-- Input Password -->
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Masukkan email" required>
                                        </div>

                                        <!-- Input No. HP -->
                                        <div class="mb-3">
                                            <label for="no_hp" class="form-label">Telephone</label>
                                            <input type="text" class="form-control" id="telepon" name="telepon"
                                                placeholder="Masukkan no. HP" required>
                                        </div>

                                        <!-- Input Alamat -->
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea class="form-control" id="alamat" name="alamat"
                                                placeholder="Masukkan alamat" required></textarea>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="sudmit" class="btn btn-primary"
                                                id="simpanDataBtn">Simpan</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm" id="example">
                                <thead class=" thead-primary">
                                    <tr>
                                        <th>NO.</th>
                                        <th>Tanggal</th>
                                        <th>Metode Pembayaran</th>
                                        <th>Petugas</th>
                                        <th>Pelanggan</th>
                                        <th>Diskon Member</th>
                                        <th>Diskon Musiman</th>
                                        <th>Total Harga</th>
                                        <th>Bayar</th>
                                        <th>Kembalian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; // Variabel penghitung untuk nomor urut ?>
                                    <?php foreach ($datas as $data): ?>

                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['tanggal'] ?></td>
                                            <td><?= $data['payment_method'] ?></td>
                                            <td><?= $data['username'] ?></td>
                                            <td><?php
                                            // Menampilkan nama pelanggan berdasarkan id_pelanggan
                                            $pelanggan_name = isset($pelanggans[$data['barcode']]) ? $pelanggans[$data['barcode']] : '-';
                                            echo $pelanggan_name;
                                            // var_dump($data['barcode']);
                                            ?></td>
                                            <td><?= $data['diskon_member'] ?></td>
                                            <td><?= $data['diskon_musiman'] ?></td>
                                            <td><?= $data['total_harga'] ?></td>
                                            <td><?= $data['bayar'] ?></td>
                                            <td><?= $data['kembalian'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url("assets/") ?>vendor/global/global.min.js"></script>
    <script src="<?= base_url("assets/") ?>vendor/chart.js/Chart.bundle.min.js"></script>
    <!-- Apex Chart -->
    <script src="<?= base_url("assets/") ?>vendor/apexchart/apexchart.js"></script>

    <!-- Datatable -->
    <script src="<?= base_url("assets/") ?>vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url("assets/") ?>js/plugins-init/datatables.init.js"></script>

    <script src="<?= base_url("assets/") ?>vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <script src="<?= base_url("assets/") ?>js/custom.min.js"></script>
    <script src="<?= base_url("assets/") ?>js/dlabnav-init.js"></script>
    <script src="<?= base_url("assets/") ?>js/demo.js"></script>
    <!-- <script src="<?= base_url("assets/") ?>js/styleSwitcher.js"></script> -->
</body>


</html>b
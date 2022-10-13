<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Service | Sahabat Teknik</title>

    <!-- CSS -->
    <link href="<?= base_url() ?>assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/plugins/owl-carousel/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/plugins/sal/sal.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/theme.css" rel="stylesheet">
    <!-- Fonts/Icons -->
    <link href="<?= base_url() ?>assets/plugins/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/plugins/font-awesome/css/all.css" rel="stylesheet">
</head>

<body data-preloader="1">

    <!-- Header -->
    <div class="header right dark sticky-autohide">
        <div class="container">
            <!-- Logo -->
            <div class="header-logo">
                <h3><a href="#">sahabat teknik</a></h3>
            </div>
            <!-- Menu -->
            <div class="header-menu">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home') ?>#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home') ?>#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('service') ?>">Service</a>
                    </li>
                </ul>
            </div>
            <button class="header-toggle">
                <span></span>
            </button>
        </div><!-- end container -->
    </div>
    <!-- end Header -->

    <div class="section-sm">
        <div class="container">
            <div class="margin-bottom-30">
                <div class="row text-center">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h2 class="fw-light">Service</h2>
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 text-center">
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <form method="post" action="<?= base_url('proses_service') ?>">
                            <div class="row gx-3 gy-0">
                                <div class="col-12 col-sm-6">
                                    <input type="text" id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="number" id="no_telepon" name="no_telepon" placeholder="No Telepon" required>
                                </div>
                            </div>
                            <div class="row gx-3 gy-0">
                                <div class="col-12 col-sm-6">
                                    <input type="text" id="merk_kendaraan" name="merk_kendaraan" placeholder="Merk Kendaraan" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" id="tipe_unit" name="tipe_unit" placeholder="Tipe Unit" required>
                                </div>
                            </div>
                            <textarea name="deskripsi_kerusakan" id="deskripsi_kerusakan" placeholder="Deskripsi Kerusakan"></textarea>
                            <textarea name="alamat_lokasi" id="alamat_lokasi" placeholder="Alamat Lokasi"></textarea>
                            <div class="row gx-3 gy-0">
                                <div class="col-12 col-sm-6">
                                    <input type="text" id="no_plat" name="no_plat" placeholder="No Plat" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" id="jenis_service" name="jenis_service" placeholder="Jenis Service : Panggil Teknisi / Derek" required>
                                </div>
                            </div>
                            <button class="button button-lg button-rounded button-outline-dark-2 mt-3" type="submit">Kirim</button>
                        </form>
                    </div><!-- end contact-form -->
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>

    <footer>
        <div class="section-sm bg-dark">
            <div class="container">
                <div class="row g-2">
                    <div class="col-12 col-md-6 text-center text-md-start">
                        <p>&copy; 2022 Sahabat Teknik</p>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-end">
                        <ul class="list-inline-dash">
                            <li><a href="<?= base_url('home') ?>#home">Home</a></li>
                            <li><a href="<?= base_url('home') ?>#tentang">Tentang</a></li>
                            <li><a href="<?= base_url('service') ?>">Service</a></li>
                        </ul>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div>
    </footer>

    <!-- Scroll to top button -->
    <div class="scrolltotop">
        <a class="button-circle button-circle-sm button-circle-dark" href="#"><i class="bi bi-arrow-up"></i></a>
    </div>
    <!-- end Scroll to top button -->

    <!-- ***** JAVASCRIPTS ***** -->
    <script src="<?= base_url() ?>assets/plugins/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>
    <script src="<?= base_url() ?>assets/plugins/plugins.js"></script>
    <script src="<?= base_url() ?>assets/js/functions.js"></script>
</body>

</html>
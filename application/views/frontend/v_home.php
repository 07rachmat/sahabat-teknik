<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Home | Sahabat Teknik</title>

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
                        <a class="nav-link" href="<?= base_url('home') ?>">Home</a>
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

    <!-- Hero section -->
    <div class="section-xl bg-image parallax" data-bg-src="assets/images/background-1.jpg">
        <div class="bg-black-05">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12 col-lg-8 col-xl-7">
                        <h5 class="fw-light">Teknologi yang memberikan manfaat luar biasa dalam kehidupan. Salah satunya memberikan solusi dalam membantu masalah permesinan anda.</h5>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div>
    </div>
    <!-- end Hero section -->

    <!-- Features section -->
    <div class="section">
        <div class="container text-center icon-4xl">
            <div class="row g-5">
                <!-- Feature box 1 -->
                <div class="col-12 col-lg-4">
                    <div class="text-dark margin-bottom-10">
                        <i class="bi bi-brush"></i>
                    </div>
                    <h5 class="fw-normal">Panggil Teknisi</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                </div>
                <!-- Feature box 2 -->
                <div class="col-12 col-lg-4">
                    <div class="text-dark margin-bottom-10">
                        <i class="bi bi-lightning"></i>
                    </div>
                    <h5 class="fw-normal">Derek</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                </div>
                <!-- Feature box 3 -->
                <div class="col-12 col-lg-4">
                    <div class="text-dark margin-bottom-10">
                        <i class="bi bi-layers"></i>
                    </div>
                    <h5 class="fw-normal">Sparepars</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Features section -->

    <!-- About section -->
    <div class="section border-top" id="tentang">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-12 col-lg-6 order-lg-2">
                    <img class="border-radius-025" src="assets/images/about.jpg" alt="">
                </div>
                <div class="col-12 col-lg-6 order-lg-1">
                    <h3 class="fw-light">Tentang Kami</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end About section -->

    <footer>
        <div class="section-sm bg-dark">
            <div class="container">
                <div class="row g-2">
                    <div class="col-12 col-md-6 text-center text-md-start">
                        <p>&copy; 2022 Sahabat Teknik</p>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-end">
                        <ul class="list-inline-dash">
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Karya Seni Lampung</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/favicon.ico') ?>" />

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor2/bootstrap/css/bootstrap.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor2/animate/animate.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor2/css-hamburgers/hamburgers.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor2/select2/select2.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('css2/util.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css2/main.css'); ?>">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('css/styles.css'); ?>" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('Beranda') ?>">Karya Seni Lampung</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="<?= base_url('Beranda') ?>">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('KaryaSeniCont') ?>">Karya Seni</a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('Kontak') ?>">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content section-->

    <body>
        <div class="">
            <div class="container-contact1">
                <div class="contact1-pic js-tilt" data-tilt>
                    <img class="" src="<?= base_url('images/img-dimessage.png'); ?>" alt="IMG">
                </div>

                <?php echo form_open_multipart('Kontak/kotakmasuk'); ?>
                <span class="contact1-form-title contact1-form validate-form">
                    Kirim Tanggapanmu..
                </span>

                <div class="wrap-input1 validate-input" data-validate="Nama is required">
                    <input class="input1" type="text" name="nama" id="nama" placeholder="Nama" required>
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input1" type="text" name="email" id="email" placeholder="Email" value="<?= set_value('email'); ?>" required>
                    <?= form_error('email'); ?>
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Subjek is required">
                    <input class="input1" type="text" name="subjek" id="subjek" placeholder="Subjek" required>
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Pesan is required">
                    <textarea class="input1" name="pesan" id="pesan" placeholder="Tanggapan Anda.." required></textarea>
                    <span class="shadow-input1"></span>
                </div>

                <div class="container-contact1-form-btn">
                    <button type="submit" class="contact1-form-btn">Kirim Pesan</button>
                </div>
                <?php form_close(); ?>

            </div>
        </div>
    </body>

    <!-- Footer-->

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Lendratno Putra 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('js/scripts.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('vendor2/jquery/jquery-3.2.1.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('vendor2/bootstrap/js/popper.js'); ?>"></script>
    <script src="<?= base_url('vendor2/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('vendor2/select2/select2.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('vendor2/tilt/tilt.jquery.min.js'); ?>"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <!--===============================================================================================-->
    <script src="<?= base_url('js2/main.js'); ?>"></script>
</body>

</html>
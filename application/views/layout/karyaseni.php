<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Karya Seni Lampung</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/favicon.ico') ?>" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('css/styles.css'); ?>" rel="stylesheet" />
    <style>
        h2 {
            font-family: 'Lobster';
            font-size: 40px;
        }
    </style>
</head>

<body background="<?= base_url('images/bg-ks.jpg'); ?>">

    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('Beranda') ?>">Karya Seni Lampung</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="<?= base_url('Beranda') ?>">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('KaryaSeniCont') ?>">Karya Seni</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('Kontak') ?>">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="py-3 gap-2 d-md-flex justify-content-md-end" role="group" aria-label="Basic example" id="kategori">
        <div class="container">
            <h2 class="mb-3 text-center mt-2">Karya Seni Lampung</h2>
            Filter :
            <a method="post" href="<?= base_url('AlatMusik/') ?>">
                <button type="submit" id="alatmusik" onclick="alatmusik()" class="btn btn-outline-primary fw-bold mt-3">Alat Musik</button>
            </a>
            <a method="post" href="<?= base_url('LaguDaerah/') ?>">
                <button type="submit" id="lagudaerah" onclick="lagudaerah()" class="btn btn-outline-danger fw-bold mt-3">Lagu</button>
            </a>
            <a method="post" href="<?= base_url('RumahAdat/') ?>">
                <button type="submit" id="rumahadat" onclick="rumahadat" class="btn btn-outline-success fw-bold mt-3">Rumah Adat</button>
            </a>
            <a method="post" href="<?= base_url('SeniRupa/') ?>">
                <button type="submit" id="senirupa" onclick="senirupa" class="btn btn-outline-success fw-bold mt-3">Seni Rupa</button>
            </a>
            <a method="post" href="<?= base_url('SeniSastraLisan/') ?>">
                <button type="submit" id="senisastralisan" onclick="senisastralisan" class="btn btn-outline-success fw-bold mt-3">Seni Sastra Lisan</button>
            </a>
            <a method="post" href="<?= base_url('SeniTari/') ?>">
                <button type="submit" id="senitari" onclick="senitari" class="btn btn-outline-success fw-bold mt-3">Seni Tari</button>
            </a>
            <a method="post" href="<?= base_url('SeniTeater/') ?>">
                <button type="submit" id="seniteater" onclick="seniteater" class="btn btn-outline-success fw-bold mt-3">Seni Teater</button>
            </a>
        </div>
    </div>
    <!-- Content section-->
    <section class="py-2">
        <div id="cards_landscape_wrap-2">
            <div class="container my-1">
                <?php foreach ($row->result() as $key => $data) { ?>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card mt-3">
                                <img class="image-box" src="<?php echo base_url(); ?>assets/img/<?= $data->image ?>" class="card-img-top" alt="...">
                                <div class="card-body card-flyer">
                                    <h5 class="card-title"><?= $data->nama ?></h5>
                                    <p class="card-text"><?= $data->deskripsi ?></p>
                                    <p class="card-text"><small class="text-muted">Kategori : <a class="fw-bold"><?= $data->kategori ?></a></small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mt-3">
                                <video width="100%" controls>
                                    <source src="<?php echo base_url(); ?>assets/img/<?= $data->video ?>" type="video/mp4" />
                                    Browsermu belum mendukung. Lakukan Upgrade Dahulu!
                                </video>
                                <div class="card-body">
                                    <h5 class="card-title">Video <?= $data->nama ?></h5>
                                    <p class="card-text">Sumber : <?= $data->sumber ?>
                                    <p>
                                    <p class="card-text"><small class="text-muted">Kategori : <a class="fw-bold"><?= $data->kategori ?></a></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Footer-->

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Lendratno Putra</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('js/scripts.js'); ?>"></script>

</body>

</html>
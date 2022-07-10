<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Halaman Admin</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="<?= base_url('css/main.css'); ?>" rel="stylesheet" media="all">
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('Admin') ?>">Halaman Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('Admin') ?>">Upload</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('KotakMasuk') ?>">Kotak Masuk</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('KaryaSeniCont') ?>">Karya Seni</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content section-->
    <?php
    echo $this->session->flashdata('message');
    ?>

    <body>
        <div class="page-wrapper bg-gra-01 p-t-100 p-b-100 font-poppins">
            <div class="wrapper wrapper--w780">
                <div class="card card-3">
                    <div class="card-body">
                        <h2 class="title text-center">Tambah Karya Seni</h2>
                        <?php echo form_open_multipart('Admin/simpansenibaru'); ?>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Nama Karya Seni" name="nama" id="nama">
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control mb-3" name="deskripsi" id="deskripsi" placeholder="Deskripsikan karya seni.." id="deskripsi" style="height: 150px"></textarea>
                            <label for="deskripsi" class="input--style-3 text-dark">Deskripsi Karya Seni</label>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="kategori" class="form-label input--style-3" style="margin-left:12px;">Kategori </label>
                            <div class="form-group">
                                <select id="kategori" class="form-control" name="kategori">
                                    <option>- Pilih Kategori</option>
                                    <option>Alat Musik</option>
                                    <option>Lagu</option>
                                    <option>Rumah Adat</option>
                                    <option>Seni Rupa</option>
                                    <option>Seni Sastra Lisan</option>
                                    <option>Seni Tari</option>
                                    <option>Seni Teater</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label input--style-3">Upload Gambar :</label>
                            <input class="form-control" type="file" placeholder="Belum memilih file" id="image" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label input--style-3">Upload Video :</label>
                            <input class="form-control" type="file" placeholder="Belum memilih file" id="video" name="video">
                        </div>
                        <div class="p-t-10 d-grid gap-2 mt-3">
                            <button class="btn btn--pill btn--green" id="submit" name="submit" type="submit">Submit</button>
                        </div>
                        <?php form_close(); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer-->

        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Adzriel Arrafi 2022</p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>

</html>
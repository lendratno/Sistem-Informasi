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
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('Admin') ?>">Upload</a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('KotakMasuk') ?>">Kotak Masuk</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('KaryaSeniCont') ?>">Karya Seni</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content section-->

    <body>
        <div class="container mb-5 mt-5">
            <h3 class="text-center mb-4 ">Daftar Kotak Masuk</h3>
            <table class="table table-responsive table-bordered table-hover">
                <thead class="text-center table-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subjek</th>
                        <th width="520px" scope="col">Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($row->result() as $key => $data) { ?>
                        <tr>

                            <th class="text-center" scope="row"><?= $data->id ?></th>
                            <td class="text-center"><?= $data->nama ?></td>
                            <td class="text-center"><?= $data->email ?></td>
                            <td class="text-center justify-content-center"><?= $data->subjek ?></td>
                            <td><?= $data->pesan ?></td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
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
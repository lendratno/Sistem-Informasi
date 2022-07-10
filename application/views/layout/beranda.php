<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Karya Seni Lampung</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="css/styles.css" rel="stylesheet" />
</head>

<body>
	<!-- Responsive navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url('Beranda') ?>">Karya Seni Lampung</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= base_url('Beranda') ?>">Beranda</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('KaryaSeniCont') ?>">Karya Seni</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('Kontak') ?>">Kontak</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="py-5 bg-image-full" style="background-image: url('images/bg-awal.png')">
		<!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
		<div style="height: 20rem"></div>
	</div>
	<!-- Content section-->
	<section class="py-5" style="background-image: url('images/bg-sambutan.jpg'); background-size:cover;">
		<div class="container my-2">
			<div class="row ml-8 justify-content-center">
				<div class="col-lg-6 text-center">
					<h2>Halo Sanak Famili!</h2>
					<p class="lead">Selamat datang di situs Karya Seni Lampung</p>
					<p class="mb-0">Kamu dapat mengenal berbagai macam model keindahan dari seni budaya provinsi Lampung, situs ini penuh dengan berbagai informasi karya seni di Lampung. Yuk kita belajar sama-sama dan mengenalinya!</p>
					<a type="button" href="<?= base_url('KaryaSeniCont') ?>" class="btn btn-lg btn-primary mt-4">Yuk kenalin!</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer-->
	<footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; Lendratno Putra 2022</p>
		</div>
	</footer>
	<!-- Bootstrap core JS-->
	<script src=<?= base_url("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"); ?>></script>
	<!-- Core theme JS-->
	<script src=<?= base_url("js/scripts.js"); ?>></script>
</body>

</html>
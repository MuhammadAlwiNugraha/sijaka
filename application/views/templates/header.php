<!DOCTYPE html>
<html>
<style>
	.navbar {
		color: #000000;

	}

	.navbar-nav {
		float: right;
		color: #000000;
		margin-left: 15px;
	}


	.footer {
		position: relative;
		left: 0;
		bottom: 0;
		width: 100%;
		background-color: #ffc05f;
		color: #000000;
		text-align: center;
	}
</style>

<head>
	<title><?= $judul; ?></title>

	<!-- BOOTSTRAP 4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css">

	<!-- FONT AWESOME -->
	<link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- SBADMIN -->
	<link href="<?= base_url('assets/') ?>css/sb-admin.css" rel="stylesheet">

</head>

<body>

	<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #e3f2fd;"> -->
	<!-- <nav class="navbar navbar-expand-lg sticky-top navbar-light" style=" background-color: #ffc05f;"> -->
	<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style=" background-color: #ffc05f;">


		<div class="container ">

			<a class="navbar-brand " href="<?= base_url(); ?>"><strong>SiJaka</strong></a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse flex-grow-0" id="navbarNavAltMarkup">
				<div class="navbar-nav text-right">

					<a class="nav-item nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="<?= base_url(); ?>">SiJaka Kendaraan <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="<?= base_url(); ?>">SiJaka Property <span class="sr-only">(current)</span></a>
					<!-- <a class="nav-item nav-link" href="<?= base_url(); ?>laundry">Daftar Pesanan <span class="sr-only">(current)</span></a> -->

					<div>
						<a class="nav-item button btn btn-outline-dark" style="border-radius: 100px;" href="<?= base_url() ?>auth">Login<span class="sr-only">(current)</span></a>

						<!-- <a class="nav-item btn btn-primary my-2 my-sm-0 mr-2" href="<?= base_url() ?>auth/register">Register<span class="sr-only">(current)</span></a> -->
					</div>

					<!-- <div>
						<?php if ($this->session->set_userdata('role_id') == "0") : ?>
							<li>
								<a class="nav-item button btn btn-outline-dark" style="border-radius: 100px;" href="<?= base_url() ?>auth">Login<span class="sr-only">(current)</span></a>
								<a class="nav-link" href="<?php echo base_url('auth/logout'); ?>">Logout</a>
							</li>
						<?php endif ?>
					</div> -->

				</div>
			</div>

		</div>
	</nav>
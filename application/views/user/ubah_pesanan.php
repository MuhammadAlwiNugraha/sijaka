<div class="container">
	<div class="row mt-3 justify-content-center">
		<div class="col-md-6">

			<!-- <form action="<?= base_url('user/ubah_pesanan') ?>" method="post"> -->
			<form action="" method="post">

				<h1 class="mb-5" style="color: grey;text-align: center">Update Pesanan</h1>

				<div class="card">
					<div class="card-header" style="background-color: grey;color: white"><?= $kebersihan["kode_transaksi"] ?> a/n <?= $kebersihan["nama"] ?></div>

					<div class="card-body">

						<?php if (validation_errors()) : ?>
							<div class="alert alert-danger" role="alert">
								<?= validation_errors(); ?>
							</div>
						<?php endif; ?>

						<?php if ($this->session->flashdata()) : ?>
							<div class="row mt-2">
								<div class="col-md-12">
									<div class="alert alert-info alert-dismissible fade show" role="alert">
										<strong><?= $this->session->flashdata('message'); ?></strong>
									</div>
								</div>
							</div>
						<?php endif; ?>

						<input type="hidden" name="id" value="<?= $kebersihan["id"] ?>">

						<div class="form-group">
							<label for="alamat">Alamat : </label><br>
							<input type="text" name="alamat" class="form-control" id="alamat" value="<?= $kebersihan["alamat"] ?>">
						</div>

						<div class="form-group">
							<label for="keterangan">keterangan : </label><br>
							<input type="text" name="keterangan" class="form-control" id="keterangan" value="<?= $kebersihan["keterangan"] ?>">
						</div>

						<div class="form-group">
							<label for="nohp">No Hp : </label><br>
							<input type="text" name="nohp" class="form-control" id="nohp" value="<?= $kebersihan["nohp"] ?>">
						</div>

						<div class="form-group">
							<label for="kamar">Kamar : </label><br>
							<input type="text" name="kamar" class="form-control" id="kamar" value="<?= $kebersihan["kamar"] ?>">
						</div>


					</div> <!-- card body -->

				</div> <!-- card -->

				<button type="submit" class="btn btn-primary form-control mt-3" style="box-shadow: 5px 10px 30px grey;margin-bottom: 100px">Update</button>

			</form>
		</div>

	</div>
</div>
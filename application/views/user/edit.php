<div class="container">
	<div class="row mt-3 justify-content-center">
		<div class="col-md-6">

			<form action="<?= base_url('user/edit') ?>" method="post">

				<h1 class="mb-5" style="color: grey;text-align: center">Update Profile</h1>

				<div class="card">
					<div class="card-header" style="background-color: grey;color: white">Profile</div>

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

						<div class="form-group">
							<label for="nama">Nama : </label><br>
							<input type="text" name="nama" class="form-control" id="nama" value="<?= $user["nama"] ?>">
						</div>

						<div class="form-group">
							<label for="alamat">Alamat : </label><br>
							<input type="text" name="alamat" class="form-control" id="alamat" value="<?= $user["alamat"] ?>">
						</div>

						<div class="form-group">
							<label for="email">Email : </label><br>
							<input type="text" name="email" class="form-control" id="emil" value="<?= $user["email"] ?>">
						</div>

						<div class="form-group">
							<label for="nohp">No. Hp : </label><br>
							<input type="text" name="nohp" class="form-control" id="nohp" value="<?= $user["nohp"] ?>">
						</div>

						<!-- <div class="form-group row">
							<div class="col-sm-2">Picture</div>
							<div class="col-sm-10">
								<div class="row">
									<div class="col-sm-3">
										<?php echo form_open_multipart('User/unggah'); ?>
										<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
									</div>
									<div class="col-sm-9">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="image" name="image">
											<label class="custom-file-label" for="image">Choose file</label>
										</div>
									</div>
								</div>
							</div>
						</div> -->

					</div> <!-- card body -->

				</div> <!-- card -->

				<button type="submit" value="upload" class="btn btn-primary form-control mt-3" style="box-shadow: 5px 10px 30px grey;margin-bottom: 100px">Update</button>

			</form>
		</div>

	</div>
</div>
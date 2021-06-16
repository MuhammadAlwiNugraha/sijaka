<div class="jumbotron jumbotron-fluid" style="
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
	url(<?= base_url('assets/img/bg2.jpg') ?>); 
	height: 350px;
	background-size: cover;
	background-attachment: fixed;
	background-position: -100px;">

	<div class="container">
		<h1 class="display-4 mt-5" style="color:white;">Selamat Datang di <strong>SiJaka</strong></h1>
	</div>

</div>


<div class="container" style="margin-bottom: 100px;">

	<h2 class="mt-5">Kenapa SiJaka</h2>
	<div class="row mt-5 text-center justify-content-center">
		<div class="card mr-5" style="border-radius: 15px;box-shadow: 13px 13px 30px 5px #eaeaea;">
			<div class="card-body p-5">
				<img src="<?= base_url("assets/img/kendaraan.png") ?>" width="100" class="pb-2">
				<h4>SiJaka Kendaraan</h4>
				<p>
					Lorem ipsum dolor sit amet
				</p>
				<button type="submit" name="submit" class="btn btn-primary btn-user btn-block" style=" background-color: #ffc05f;">Submit</button>
			</div>
		</div>
		<div class="card mr-5" style="border-radius: 15px;box-shadow: 13px 13px 30px 5px #eaeaea;">
			<div class="card-body p-5">
				<img src="<?= base_url("assets/img/property.png") ?>" width="100" class="pb-2">
				<h4>SiJaka Property</h4>
				<p>
					Lorem ipsum dolor sit amet
				</p>
				<button type="submit" name="submit" class="btn btn-primary btn-user btn-block" style=" background-color: #ffc05f;">Submit</button>
			</div>
		</div>
		<div class="card mr-5" style="border-radius: 15px;box-shadow: 13px 13px 30px 5px #eaeaea;">
			<div class="card-body p-5">
				<img src="<?= base_url("assets/img/dua.png") ?>" width="100" class="pb-2">
				<h4>SiJaka Duanana</h4>
				<p>
					Lorem ipsum dolor sit amet
				</p>
				<button type="submit" name="submit" class="btn btn-primary btn-user btn-block" style=" background-color: #ffc05f;">Submit</button>
			</div>
		</div>
	</div>

	<!-- <div class="row mt-5">

		<?php foreach ($kebersihan as $ldr) : ?>
			
			<?php if ($ldr["ulasan"] == "") : ?>
				
			<?php elseif ($ldr["ulasan"]) : ?>

				<h2 class="mt-5">Apa kata mereka?</h2>
				<div class="card mr-5" style="border-radius: 15px; box-shadow: 13px 13px 30px 5px #eee;">
					<div class="card-body p-5">
						<h4><?php echo $ldr["nama"] ?></h4>
						<p style="font-style: italic;">"<?php echo $ldr["ulasan"] ?>"</p>
					</div>
				</div>

			<?php endif; ?>

		<?php endforeach; ?>

	</div> -->

</div>
<div class="container">

  <!-- Page Heading -->

  <div>
    <h1 class="h3 text-gray-800">Selamat Datang <?= $welcome ?></h1>
    <p>Harga Rp 15.000/Kamar</p>
  </div>

  <?php if ($this->session->flashdata()) : ?>
    <div class="row mt-3">
      <div class="col-md-4">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?= $this->session->flashdata('message'); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="row mb-5">
    <?php foreach ($kebersihan as $ldr) : ?>
      <div class="col-md-4">

        <div class="card mt-3 mb-3">

          <div class="card-header">
            <h5 class="text-center">
              <strong class=""><?php echo $ldr["kode_transaksi"] ?></strong>
            </h5>
          </div>

          <div class="card-body">

            <p>Nama : <?php echo $ldr["nama"] ?></p>
            <p>Alamat : <?php echo $ldr["alamat"] ?></p>
            <p>Patokan : <?php echo $ldr["patokan"] ?></p>
            <p>No Hp : <?php echo $ldr["nohp"] ?></p>
            <p>Jumlah Kamar : <?php echo $ldr["kamar"] ?></p>
            <?php $tot = ((int)$ldr["kamar"] * (int)('15000')); ?>
            <p>Tagihan : <?php echo $tot ?></p>
            <!-- <p>Status : <?php echo $ldr["status_service"] ?></p> -->

            <p>Status Pembayaran :

              <?php if ($ldr["status_pembayaran"] == "Belum Bayar") : ?>
                <span class="badge badge-warning">
                  <?php echo $ldr["status_pembayaran"] ?>
                </span>
              <?php elseif ($ldr["status_pembayaran"] == "Lunas") : ?>
                <span class="badge badge-success">
                  <?php echo $ldr["status_pembayaran"] ?>
                </span>
              <?php endif; ?>

            </p>

            <?php if ($ldr["status_service"] == "Service Selesai") : ?>

              <p class="alert alert-success">Terima Kasih, Semoga Harimu Menyenangkan!</p>

            <?php elseif ($ldr["status_service"] == "Cancel") : ?>

              <p class="alert alert-danger">Yah, Kami Sedih Kehilanganmu</p>

            <?php elseif ($ldr["status_service"] == "Tunggu sebentar ya") : ?>

              <p class="alert alert-primary">Tunggu sebentar ya</p>
              <a href="<?= base_url() ?>user/konfirmasi/<?= $ldr["id"] ?>" class="btn btn-primary">Konfirmasi</a>
              <a href="<?= base_url() ?>user/ubah_pesanan/<?= $ldr["id"] ?>" class="btn btn-warning">Ubah</a>
              <a href="<?= base_url() ?>user/cancel/<?= $ldr["id"] ?>" class="btn btn-outline-danger" onclick="return confirm('yakin?');">Cancel</a>

            <?php endif; ?>

          </div>

        </div>

      </div>
    <?php endforeach; ?>

  </div>


</div>
<!-- /.container-fluid
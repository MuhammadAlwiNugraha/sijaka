<!DOCTYPE html>
<html lang="en">
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
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #ffc05f;
    color: #000000;
    text-align: center;
  }

  card {
    background-color: #3196E2;
  }
</style>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css">

  <!-- Custom fonts for this template-->
  <link href="<?= base_url("assets/") ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/') ?>css/sb-admin.css" rel="stylesheet">
  <!-- <link href="<?= base_url("assets/") ?>css/sb-admin-2.min.css" rel="stylesheet"> -->

  <style type="text/css">
    body {
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url(<?= base_url('assets/img/bg2.jpg') ?>);
      background-size: cover;
    }
  </style>

</head>

<body>

  <nav class="navbar navbar-expand-lg sticky-top navbar-light" style=" background-color: #ffc05f;">

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

        </div>
      </div>

    </div>
  </nav>

  <div class="container">

    <div class="row justify-content-center mt-5">

      <div class="col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5" style=" background-color: #3196E2;">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg">
                <div class="p-5">

                  <!-- JUDUL -->
                  <div class="text-center mb-4">
                    <h1 class="mb-1">Login Account</h1>
                    <!-- <small>Gunakan dan Rasakan <strong>kemudahan</strong> dalam Melaundry di SiJaka</small> -->
                  </div>

                  <form class="user" method="post" action="<?= base_url("auth") ?>">

                    <!-- PESAN KONDISI -->
                    <?php if ($this->session->flashdata()) : ?>
                      <div class="row mt-2">
                        <div class="col-md-12">
                          <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong><?= $this->session->flashdata('message'); ?></strong>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>

                    <!-- INPUT EMAIL -->
                    <div class="form-group">
                      <input type="text" name="email" class="form-control form-control-user" id="email" aria-describedby="email" placeholder="Your Email Address..." value="<?= set_value("email") ?>">
                    </div>

                    <!-- PESAN ERROR EMAIL -->
                    <small class="text-danger"><?= form_error("email") ?></small>

                    <!-- INPUT PASSWORD -->
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Your Password">
                    </div>

                    <!-- PESAN ERROR PASSWORD -->
                    <small class="text-danger"><?= form_error("password") ?></small>

                    <!-- LUPA PASSWORD -->
                    <!-- <div class="text-right mb-3">
                      <small>
                        <a class="small" href="">Forgot Password? Reset Here!</a>
                      </small>
                    </div> -->

                    <!-- LOGIN -->
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block" style=" background-color: #ffc05f;">Login Now!</button>

                  </form>

                  <hr>

                  <!-- BUAT AKUN BARU -->
                  <div class="text-center">
                    <a class="text-white" href="<?= base_url() ?>auth/register">Don't Have an Account? Register</a>
                  </div>

                </div> <!-- P-5 -->
              </div> <!-- COL-LG -->
            </div> <!-- ROW -->
          </div> <!-- CARD-BODY -->
        </div> <!-- CARD -->

      </div> <!-- COL-LG-6 -->

    </div> <!-- ROW JUSTIFY -->

  </div> <!-- CONTAINER -->
  <div class="footer">
    <p>SiJaka @ 2021</p>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url("assets/") ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url("assets/") ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url("assets/") ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url("assets/") ?>js/sb-admin-2.min.js"></script>

</body>

</html>
<script>
  <?php if ($this->session->userdata('role_id') == "2") { ?>

    $ss == Admin;

  <?php } else if ($this->session->userdata('role_id') == "1") { ?>

    $ss == < a > "Admin" < /a>;

  <?php } else {
    $ss == "Mitra";
  }; ?>
</script>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <!-- <nav class="navbar navbar-expand-lg sticky-top navbar-light" style=" background-color: #ffc05f;"> -->
    <!-- <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style=" background-color: #ffc05f;"> -->
    <!-- <nav class="navbar navbar-expand-lg sticky-top navbar-light" style=" background-color: #ffc05f;"> -->
    <nav class="navbar navbar-expand navbar-light topbar mb-2 static-top shadow" style=" background-color: #ffc05f;">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <ul class="navbar-nav ml-auto">
        <div class=""></div>
        <li class="navbar dropdown no-arrow">
          <a class="navbar dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="utas"> <?= ($this->session->userdata('nama')) ?></span>
            <!-- <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>"> -->

          </a>
        <li>
      </ul>
    </nav>

    <!-- End of Topbar -->
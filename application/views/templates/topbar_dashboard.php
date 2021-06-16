<script>
  <?php if ($this->session->userdata('role_id') == "2") { ?>

    $ss == Admin;

  <?php } else if ($this->session->userdata('role_id') == "1") { ?>

    $ss == < a > "Admin" < /a>;

  <?php } else {
    $ss == "Mitra";
  }; ?>
</script>
<!-- QUERY MENU -->
<?php

# JOIN => USER_MENU & USER_ACCESS_MENU
# USER_MENU(ID) DENGAN USER_ACCESS_MENU(MENU_ID)

# ATRIBUT : ID & MENU
# 2 ATRIBUT USER_MENU DI JOIN DENGAN TABEL USER_ACCESS_MENU
# PENCOCOKAN USER_MENU(ID) DENGAN USER_ACCESS_MENU(MENU_ID)
# CONDITION : USER_ACCESS_MENU(ROLE_ID) SESUAI DENGAN USER YANG LAGI LOGIN (SESSION SAAT LOGIN)

$userActiveLogin = $this->session->userdata('role_id');

$queryMenu = "SELECT user_menu.id, menu FROM user_menu JOIN user_access_menu
                                  ON user_menu.id = user_access_menu.menu_id
                                  WHERE user_access_menu.role_id = $userActiveLogin
                                  ORDER BY user_access_menu.menu_id ASC
                                  ";

$menu = $this->db->query($queryMenu)->result_array(); // konversi ke array

?>


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
            <span class="utas"> <?php foreach ($menu as $m) : ?>
                <?= $m["menu"] ?>

              <?php endforeach ?></span>
            <!-- <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>"> -->

          </a>
        <li>
      </ul>
    </nav>

    <!-- End of Topbar -->
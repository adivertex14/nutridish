<div class="col-lg-3">
  <nav class="navbar navbar-expand-lg bg-body-tertiary rounded-3 border mt-2">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width:200px">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'home') || !isset($_GET['x'])) ? 'active link-light' : 'link-dark'; ?>" aria-current="page" href="home"><i class="bi bi-house-door-fill"></i> Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'paket') ? 'active link-light' : 'link-dark'; ?>" href="paket"><i class="bi bi-menu-button-wide"></i> Paket Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'pesanan') ? 'active link-light' : 'link-dark'; ?>" href="pesanan"><i class="bi bi-receipt"></i> Pesanan</a>
            </li>
            <?php
            if ($hasil['role'] == 'admin') { ?>
              <li class="nav-item">
                <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'pelanggan') ? 'active link-light' : 'link-dark'; ?>" href="pelanggan"><i class="bi bi-receipt"></i> Pelanggan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'report') ? 'active link-light' : 'link-dark'; ?>" href="report"><i class="bi bi-receipt"></i> Report</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'user') ? 'active link-light' : 'link-dark'; ?>" href="user"><i class="bi bi-receipt"></i> User</a>
              </li>
            <?php } ?>
            <?php
            if ($hasil['role'] == 'konsumen') { ?>
              <li class="nav-item">
                <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'tentang') ? 'active link-light' : 'link-dark'; ?>" href="tentang"><i class="bi bi-file-earmark-person"></i> Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'kontak') ? 'active link-light' : 'link-dark'; ?>" href="kontak"><i class="bi bi-envelope"></i> Hubungi Kami</a>
              </li>
            <?php } ?>

          </ul>

        </div>
      </div>
    </div>
  </nav>
</div>
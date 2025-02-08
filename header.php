<nav class="navbar navbar-expand navbar-dark fixed-top" style="background-color:rgb(128, 0, 32);">
  <div class="container-lg">
    <a class="navbar-brand" href="."><i class="bi bi-flower1"></i> NutriDish</a>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $hasil['nama']; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> Profil</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Pengaturan</a></li>
            <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
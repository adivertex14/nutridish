<?php
session_start();
if (isset($_GET['x']) && $_GET['x'] == 'home') {
  $page = "home.php";
  include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'paket') {
  $page = "paket.php";
  include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'pesanan') {
  $page = "pesanan.php";
  include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'pelanggan') {
  if ($_SESSION['role_nutridish'] == 'admin') {
    $page = "pelanggan.php";
    include "main.php";
  } else {
    $page = "home.php";
    include "main.php";
  }
} elseif (isset($_GET['x']) && $_GET['x'] == 'report') {
  if ($_SESSION['role_nutridish'] == 'admin') {
    $page = "report.php";
    include "main.php";
  } else {
    $page = "home.php";
    include "main.php";
  }
} elseif (isset($_GET['x']) && $_GET['x'] == 'user') {
  if ($_SESSION['role_nutridish'] == 'admin') {
    $page = "user.php";
    include "main.php";
  } else {
    $page = "home.php";
    include "main.php";
  }
} elseif (isset($_GET['x']) && $_GET['x'] == 'kontak') {
  $page = "kontak.php";
  include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'tentang') {
  $page = "tentang.php";
  include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
  include "login.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
  include "proses/proses_logout.php";
} else {
  $page = "home.php";
  include "main.php";
}

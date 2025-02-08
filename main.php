<?php
// session_start();
if (empty($_SESSION['email_nutridish'])) {
  header('location: login');
  exit();
}

include "proses/koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM user WHERE email = '$_SESSION[email_nutridish]'");
$hasil = mysqli_fetch_array($query);


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NutriDish Catering - Aplikasi Catering Makanan Sehat</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body style="height: 3000px;">

  <!-- Header -->
  <?php include "header.php"; ?>
  <!-- End of Header -->

  <div class="container-lg mt-5 pt-2">
    <div class="row">
      <!-- Sidebar -->
      <?php include "sidebar.php" ?>
      <!-- End of Sidebar -->
      <!-- Content -->
      <?php

      include $page;

      ?>

      <!-- End of Content -->

    </div>

    <div class="card-footer text-body-secondary fixed-bottom text-center mb-2">
      Copyright Kelompok 2

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
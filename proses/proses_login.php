<?php
session_start();

include "koneksi.php";

$email = (isset($_POST['email'])) ? htmlentities($_POST['email']) : "";
$password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "";

if (!empty($_POST['submit_validate'])) {
  $query = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' && password = '$password'");
  $hasil = mysqli_fetch_array($query);
  if ($hasil) {
    $_SESSION['email_nutridish'] = $email;
    $_SESSION['role_nutridish'] = $hasil['role'];
    header('location:../home');
  } else { ?>
    <script>
      alert('email dan Password Salah');
      window.location = '../login'
    </script>

<?php

  }
}

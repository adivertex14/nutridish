<?php
include "koneksi.php";

$name = isset($_POST['nama']) ? htmlentities($_POST['nama']) : "";
$email = isset($_POST['email']) ? htmlentities($_POST['email']) : "";
$password = isset($_POST['password']) ? md5($_POST['password']) : "";
$role = isset($_POST['role']) ? htmlentities($_POST['role']) : "";

if (!empty($_POST['input_user_validate'])) {
  // Menggunakan Prepared Statement untuk menghindari SQL Injection
  $stmt = $conn->prepare("INSERT INTO user (nama, email, password, role) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $name, $email, $password, $role);

  if ($stmt->execute()) {
    echo '<script>alert("Data Berhasil Dimasukkan"); window.location="../user";</script>';
  } else {
    echo '<script>alert("Data Gagal Dimasukkan: ' . $stmt->error . '");</script>';
  }

  $stmt->close();
}

<?php
include "koneksi.php";

$id = isset($_POST['id']) ? htmlentities($_POST['id']) : "";
$name = isset($_POST['nama']) ? htmlentities($_POST['nama']) : "";
$email = isset($_POST['email']) ? htmlentities($_POST['email']) : "";
$password = isset($_POST['password']) ? md5($_POST['password']) : "";

if (!empty($_POST['input_user_validate'])) {
  // Menggunakan Prepared Statement untuk menghindari SQL Injection
  $stmt = $conn->prepare("UPDATE user SET nama = ?, email = ?, password = ? WHERE id = ?");

  if ($stmt === false) {
    die('Prepare failed: ' . htmlspecialchars($conn->error));
  }

  $stmt->bind_param("sssi", $name, $email, $password, $id);

  if ($stmt->execute()) {
    echo '<script>alert("Data Berhasil Diperbarui"); window.location="../user";</script>';
  } else {
    echo '<script>alert("Data Gagal Diperbarui: ' . $stmt->error . '");</script>';
  }

  $stmt->close();
}

$conn->close();

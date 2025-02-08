<?php
include "koneksi.php";

$id = isset($_POST['id']) ? htmlentities($_POST['id']) : "";

if (!empty($_POST['input_user_validate'])) {
  // Menggunakan Prepared Statement untuk menghindari SQL Injection
  $stmt = $conn->prepare("DELETE FROM user WHERE id = ?");

  if ($stmt === false) {
    die('Prepare failed: ' . htmlspecialchars($conn->error));
  }

  // Bind hanya id (integer)
  $stmt->bind_param("i", $id);

  if ($stmt->execute()) {
    echo '<script>alert("Data Berhasil Dihapus"); window.location="../user";</script>';
  } else {
    echo '<script>alert("Data Gagal Dihapus: ' . $stmt->error . '");</script>';
  }

  $stmt->close();
}

$conn->close();

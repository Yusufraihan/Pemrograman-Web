<?php
session_start();
require 'function.php';

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

$id = $_GET["id"];

if (hapus($id) > 0) {
  echo "<script>
          alert('Data Berhasil dihapus!');
          document.location.href = 'admin.php';
        </script>";
} else {
  echo "<script>
          alert('Data Gagal dihapus!');
          document.location.href = 'admin.php';
        </script>";
}
?>
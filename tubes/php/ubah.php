<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
require 'function.php';

$id = $_GET['id'];
$b = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil diubah!');
          document.location.href = 'admin.php';
        </script>";
  } else {
    echo "<script>
          alert('Data Gagal diubah!');
          document.location.href = 'admin.php';
        </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data</title>
  <link rel="stylesheet" href="../css/ubah.css">
</head>

<body>
  <div class="container">
    <h3>Form Ubah Data Buku</h3>
    <form action="" method="post">
      <input type="hidden" name="id" id="id" value="<?= $b['id']; ?>">
      <ul>
        <li>
          <label for="cover">Cover : </label><br>
          <input type="text" name="cover" id="cover" required value="<?= $b['cover']; ?>"><br><br>
        </li>
        <li>
          <label for="judulbuku">Judul Buku : </label><br>
          <input type="text" name="judulbuku" id="judulbuku" required value="<?= $b['judul']; ?>"><br><br>
        </li>
        <li>
          <label for="penulis">Penulis : </label><br>
          <input type="text" name="penulis" id="penulis" required value="<?= $b['penulis']; ?>"><br><br>
        </li>
        <li>
          <label for="Penerbit">Penerbit : </label><br>
          <input type="text" name="Penerbit" id="Penerbit" required value="<?= $b['Penerbit']; ?>"><br><br>
        </li>
        <li>
          <label for="harga">Harga : </label><br>
          <input type="text" name="harga" id="harga" required value="<?= $b['harga']; ?>"><br><br>
        </li>
        <br>
        <button type="submit" name="ubah" class="ubah">Ubah Data!</button>
        <button type="submit" class="kembali">
          <a href="admin.php">Kembali</a>
        </button>
      </ul>
    </form>
  </div>
</body>

</html>
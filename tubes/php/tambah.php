<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'function.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil ditambahkan!');
          document.location.href = 'admin.php';
        </script>";
  } else {
    echo "<script>
          alert('Data Gagal ditambahkan!');
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
  <title>Tambah Data</title>
  <link rel="stylesheet" href="../css/tambah.css">
</head>

<body>
  <div class="container">
    <h3>Form Tambah Data Buku</h3>
    <form action="" method="POST">
      <ul>
        <li>
          <div class="form-group">
            <label for="exampleFormControlFile1">Cover : </label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
        </li>
        <li>
          <label for="judulbuku">Judul Buku : </label><br>
          <input type="text" name="judulbuku" id="judulbuku" required><br><br>
        </li>
        <li>
          <label for="penulis">Penulis : </label><br>
          <input type="text" name="penulis" id="penulis" required><br><br>
        </li>
        <li>
          <label for="Penerbit">Penerbit : </label><br>
          <input type="text" name="Penerbit" id="Penerbit" required><br><br>
        </li>
        <li>
          <label for="harga">Harga : </label><br>
          <input type="text" name="harga" id="harga" required><br><br>
        </li>
        <button type="submit" name="tambah" class="tambah">Tambah Data!</button> <br>
        <button type="submit" class="kembali">
          <a href="admin.php">Kembali</a>
        </button>
      </ul>
    </form>
  </div>
</body>

</html>
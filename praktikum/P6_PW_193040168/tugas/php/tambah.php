<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data gagal ditambahkan');
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
  <title>Form Tambah Buku</title>
</head>

<body>
  <h3>Form Tambah Buku</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="cover">Cover</label><br>
        <input type="text" name="cover" id="cover" required><br><br>
      </li>
      <li>
        <label for="judulbuku">Judul Buku</label><br>
        <input type="text" name="judulbuku" id="judulbuku" required><br><br>
      </li>
      <li>
        <label for="penulis">Penulis</label><br>
        <input type="text" name="penulis" id="penulis" required><br><br>
      </li>
      <li>
        <label for="penerbit">Penerbit</label><br>
        <input type="text" name="penerbit" id="penerbit" required><br><br>
      </li>
      <li>
        <label for="harga">Harga</label><br>
        <input type="text" name="harga" id="harga" required><br><br>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>
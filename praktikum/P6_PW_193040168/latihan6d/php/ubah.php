<?php
require 'functions.php';

$id = $_GET['id'];
$b = query("SELECT * FROM buku WHERE id = $id");

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil diubah!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data gagal diubah!');
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
  <title>Form Ubah Data Buku</title>
</head>

<body>
  <h3>Form Ubah Data Buku</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" id="id" value="<?= $b['id']; ?>">
    <ul>
      <li>
        <label for="cover">Cover</label><br>
        <input type="text" name="cover" id="cover" required value="<?= $b['cover']; ?>"><br><br>
      </li>
      <li>
        <label for="judulbuku">Judul Buku</label><br>
        <input type="text" name="judulbuku" id="judulbuku" required value="<?= $b['judul buku']; ?>"><br><br>
      </li>
      <li>
        <label for="penulis">Penulis</label><br>
        <input type="text" name="penulis" id="penulis" required value="<?= $b['penulis']; ?>"><br><br>
      </li>
      <li>
        <label for="penerbit">Penerbit</label><br>
        <input type="text" name="penerbit" id="penerbit" required value="<?= $b['penerbit']; ?>"><br><br>
      </li>
      <li>
        <label for="harga">Harga</label><br>
        <input type="text" name="harga" id="harga" required value="<?= $b['harga']; ?>"><br><br>
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
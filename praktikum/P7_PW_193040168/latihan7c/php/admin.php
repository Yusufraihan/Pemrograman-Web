<?php
// menghubungkan dengan file php lainnya
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $buku = query("SELECT * FROM buku WHERE
              judul LIKE '%$keyword%' OR
              penulis LIKE '%$keyword%' OR
              penerbit LIKE '%$keyword%' OR
              harga LIKE '%$keyword%' ");
} else {
  $buku = query("SELECT * FROM buku");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
  <div class="add">
    <a href="tambah.php">Tambah Data</a>
  </div>
  <div class="logout">
    <a href="logout.php">Logout</a>
  </div>
  <form action="" method="get">
    <input type="text" name="keyword" size="30px" placeholder="Masukkan keyword pencarian ..." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>ID</th>
      <th>DISPLAY</th>
      <th>JUDUL BUKU</th>
      <th>PENUNLIS</th>
      <th>PENERBIT</th>
      <th>HARGA</th>
    </tr>
    <?php if (empty($buku)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data Tidak Ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php $i = 1;
      foreach ($buku as $b) :
      ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <div class="update"><a href="ubah.php?id=<?= $b['id']; ?>"><button>Ubah</button></a></div>
            <div class="delete"><a href="hapus.php?id=<?= $b['id']; ?>" onclick="return confirm('Hapus Data ???')"><button>Hapus</button></a></div>
          </td>
          <td><img width="100px" src="../assets/img/<?= $b["cover"]; ?>"></td>
          <td><?= $b["judul"] ?></td>
          <td><?= $b["penulis"] ?></td>
          <td><?= $b["penerbit"] ?></td>
          <td><?= $b["harga"] ?></td>
        </tr>
        <?php $i++ ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>
</body>

</html>
<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

// Menghubungkan dengan file php lainya
require 'function.php';
$buku = query("SELECT * FROM buku");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $buku = cari($_POST['keyword']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/admin.css">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../assets/img/buku.png" width="80" height="40" class="d-inline-block align-top" alt="">
        <strong><a href="https://www.instagram.com/yusufraihansetiawan/?hl=id" style="text-decoration: none; color: white; font-size: 30px; text-shadow: 3px 2px 1px black;">R Yusuf Raihan S</a></strong>
      </a>
      <div class="col">
        <div class="input-group mr-3">
          <a href="logout.php" class="btn btn-danger ml-auto">Logout</a>
          <a href="tambah.php" class="btn btn-light btn-outline-warning ml-2">Tambah Data!</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- CONTAINER -->
  <div class="container">
    <h3>DAFTAR BUKU</h3>
    <div class="row">
      <div class="col-lg-5">
        <div class="input-group mb-3">
          <form action="" method="POST" class="input-group">
            <input type="text" class="form-control mr-sm-2" name="keyword" placeholder="Search" autocomplete="off">
            <button class="btn btn-light btn-outline-primary" type="submit" name="cari">Search</button>
          </form>
        </div>
      </div>
    </div>
    <!-- TABLE -->
    <table class="table table-bordered table-secondary">
      <thead class="text-center thead-dark">
        <tr>
          <th>#</th>
          <th>Opsi</th>
          <th>Cover</th>
          <th>Judul Buku</th>
          <th>Penulis</th>
          <th>Penerbit</th>
          <th>Harga</th>
        </tr>

        <?php if (empty($buku)) : ?>
          <tr>
            <td colspan="7">
              <h3 style="color: red; font-style: italic;">Data tidak ditemukan!</h3>
            </td>
          </tr>
        <?php else : ?>

          <?php $i = 1; ?>
          <?php foreach ($buku as $b) : ?>
            <tr>
              <td><?= $i; ?></td>
              <td>
                <a href="ubah.php?id=<?= $b['id']; ?>"><button>Ubah</button></a>
                <a href="hapus.php?id=<?= $b["id"]; ?>" onclick="return confirm('Hapus Data ?')"><button>Hapus</button></a>
              </td>
              <td><img src="../assets/img/<?= $b['cover']; ?>" width="100"></td>
              <td><?= $b['judul']; ?></td>
              <td><?= $b['penulis']; ?></td>
              <td><?= $b['penerbit']; ?></td>
              <td><?= $b['harga']; ?></td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        <?php endif; ?>

    </table>
</body>

</html>
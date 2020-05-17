<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$buku = query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin</title>
  <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
  <div class="add">
    <a href="ubah.php"><button>Ubah Data</button></a>
  </div>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr class="main">
      <th>#</th>
      <th>Opsi</th>
      <th>Cover</th>
      <th>Judul Buku</th>
      <th>Penulis</th>
      <th>Penerbit</th>
      <th>Harga</th>
    </tr>

    <?php $i = 1;
    foreach ($buku as $b) :
    ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="ubah.php?id=<?= $b['id'] ?>"><button class="ubah">Ubah</button></a>
          <a href="hapus.php?id<? $b['id'] ?>" onclick="return confirm('Hapus Data??')"><button class="hapus">Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $b["cover"]; ?>"></td>
        <td><?= $b["judul"] ?></td>
        <td><?= $b["penulis"] ?></td>
        <td><?= $b["penerbit"] ?></td>
        <td><?= $b["harga"] ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>
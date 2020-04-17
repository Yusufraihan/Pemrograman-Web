<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$buku = query("SELECT * FROM buku")
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <table border="1" cellpading="10" cellspacing="0">
      <tr>
        <th>Id</th>
        <th>Cover</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Harga</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach ($buku as $b) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td><img src="assets/img/<?= $b['cover']; ?>"></td>
          <td><?= $b['judul buku']; ?></td>
          <td><?= $b['penulis']; ?></td>
          <td><?= $b['penerbit']; ?></td>
          <td><?= $b['harga']; ?></td>
        </tr>
        <?php $i++ ?>
      <?php endforeach; ?>
    </table>
  </div>
</body>

</html>
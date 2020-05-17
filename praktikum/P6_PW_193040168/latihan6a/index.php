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
</head>

<body>
  <div class="container">
    <?php foreach ($buku as $b) : ?>
      <p class="nama">
        <a href="php/detail.php?id=<?= $b['id'] ?>">
          <?= $b["judul"]; ?>
        </a>
      </p>
    <?php endforeach ?>
  </div>
</body>

</html>
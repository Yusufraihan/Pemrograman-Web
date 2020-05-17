<?php
// menghubungkan dengan file php lainnya
require 'php/function.php';

if (isset($_GET['cari'])) {
    $keyword    = $_GET['keyword'];
    $buku = query("SELECT * FROM buku WHERE
                  cover LIKE '%$keyword%' OR
                  judul     LIKE '%$keyword%' OR
                  penulis      LIKE '%$keyword%' OR
                  penerbit  LIKE '%$keyword%' OR
                  harga    LIKE '%$keyword%' ");
} else {
    $buku = query("SELECT * FROM buku");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW193040168</title>
    <style>
        body {
            background-image: url(assets/img/pewdiepie.jpg)
        }

        h2 {
            text-align: center;
            color: #ffffff;
            text-shadow: 3px 2px 1px grey;
        }

        p a {
            color: #ffffff;
            font-size: 20px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h2>DAFTAR BUKU</h2>
    <form action="" method="get">
        <input type="text" name="keyword">
        <button type="submit" name="cari">Cari</button>
    </form>
    <?php if (empty($buku)) : ?>
        <tr>
            <td colspan="7">
                <h3>Data tidak ditemukan!</h3>
            </td>
        </tr>
    <?php else : ?>

        <?php foreach ($buku as $b) : ?>
            <p class="judul buku">
                <a href="php/detail.php?id=<?= $b["id"] ?>">
                    <?= $b["judul"] ?>
                </a>
            </p>
        <?php endforeach; ?>
    <?php endif; ?>

    <a href="php/login.php">
        <button>Masuk ke halaman Admin</button>
    </a>


</body>

</html>
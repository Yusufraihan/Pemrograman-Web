<?php
// Mengecek apakah ada id yang dikirimkan
// Jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}
require 'function.php';

// Mengambil id dari url
$id = $_GET["id"];

// melakukan query dengan parameter id yang diambil dari url
$buku = query("SELECT * FROM buku WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/detail.css">
</head>

<body>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="../assets/img/<?= $buku['cover']; ?>" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?= $buku["judul"]; ?></h5>
                <p class="card-text"><?= $buku["penulis"]; ?></p>
                <p class="card-text"><?= $buku["penerbit"]; ?></p>
                <p class="card-text"><?= $buku["harga"]; ?></p>
                <a href="../index.php" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>

</body>

</html>

<!-- <div class="cover">
            <img src="../assets/img/<?= $buku['cover']; ?>" width="120">
        </div>
        <div class="keterangan">
            <p><?= $buku["cover"]; ?></p>
            <p><?= $buku["judul"]; ?></p>
            <p><?= $buku["penulis"]; ?></p>
            <p><?= $buku["penerbit"]; ?></p>
            <p><?= $buku["harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button> -->
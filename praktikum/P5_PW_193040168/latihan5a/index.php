<?php
// melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die("koneksi keDB gagal");

// memilih database
mysqli_select_db($conn, "pw_193040168") or die("Database salah!");

// query mengambil objek dari tabel didalam database
$result = mysqli_query($conn, "SELECT * FROM buku");


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
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td><img src="assets/img/<?= $row['cover']; ?>"></td>
          <td><?= $row['judul buku']; ?></td>
          <td><?= $row['penulis']; ?></td>
          <td><?= $row['penerbit']; ?></td>
          <td><?= $row['harga']; ?></td>
        </tr>
        <?php $i++ ?>
      <?php endwhile; ?>
    </table>
  </div>
</body>

</html>
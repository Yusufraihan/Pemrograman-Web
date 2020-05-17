<?php
// function untuk melakukan koneksi ke database
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "") or die("kodeksi ke DB gagal");
  mysqli_select_db($conn, "tubes_193040168") or die("Database salah!");

  return $conn;
}

// function untuk melakukan query ke database
function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $sql);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
  $conn = koneksi();

  $cover = htmlspecialchars($data['cover']);
  $judulbuku = htmlspecialchars($data['judul']);
  $penulis = htmlspecialchars($data['penulis']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $harga = htmlspecialchars($data['harga']);


  $query = "INSERT INTO
              buku
            VALUES
            ('', '$cover', '$judulbuku', '$penulis', '$penerbit', '$harga');
  
  ";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
// fungsi untuk menghapus data
function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $cover = htmlspecialchars($data['cover']);
  $judulbuku = htmlspecialchars($data['judul']);
  $penulis = htmlspecialchars($data['penulis']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $harga = htmlspecialchars($data['harga']);

  $query = "UPDATE alat_musik SET
            cover = '$cover',
            judul = '$judulbuku', 
            penulis = '$penulis', 
            penerbit = '$penerbit', 
            harga = '$harga'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);

  // cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username sudah digunakan!');
          </script>";
    return false;
  }
  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambah user baru 
  $query_tambah = "INSERT INTO user 
                  VALUES
                  ('', '$username', '$password')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM buku WHERE
            judul LIKE '%$keyword%' OR
            penulis LIKE '%$keyword%' OR
            penerbit LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
  }

  return $rows;
}

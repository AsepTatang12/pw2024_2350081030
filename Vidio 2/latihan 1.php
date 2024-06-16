<?php
// Koneksi ke DB & pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'PW2024_2350081030')

// Query isi tabel mahasiswa

// ubah data ke dalam array

//tampung ke variabel mahasiswa

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <tr>
      <td>1</td>
      <td><img src="img/foto 1.jpg" width="60"></td>
      <td>2350081030</td>
      <td>Asep Tatang</td>
      <td>aseptatang420@gmail.com</td>
      <td>Teknik Informatika</td>
      <td>
        <a href="">Ubah</a> | <a href="">Hapus</a>
      </td>
    </tr>
  </table>
</body>

</html>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Digital Talent</title>
  <style>
    body {
      font-family: Candara,Verdana,Arial, sans-serif;
      margin: 5px;
      padding: 5px;
      background-color: #f4f4f4; /* Warna latar belakang halaman */
      box-sizing: border-box;
      line-height: 1.5;
    }

    h1 {
      color: #E0F4FF; /* Warna teks header */
      text-align: center; /* Pusatkan teks */
      background-color: #007bff; /* Warna latar belakang header */
      padding: 8px; /* Ruang antara teks dan batas header */
      margin-bottom: 0; /* Ruang antara header dan konten tabel */
    }

    h2 {
      margin: 5px;
      padding: 5px;
      text-align: center;
      background-color: #80B3FF;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin: 10px 0; /* Ruang antara tabel dan elemen lainnya */
    }

    th, td {
      border: 1px solid #ddd; /* Garis batas tabel dan sel */
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #427D9D; /* Warna latar belakang header kolom */
      color: white; /* Warna teks header kolom */
    }

    tr:hover {
      background-color: #f5f5f5; /* Warna latar belakang saat dihover */
    }

    footer {
      text-align: center;
      margin-top: 20px;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
    }
  </style>
</head>
<body>
  <h1>Sistem Informasi Akademik</h1>
  <h2>List Mahasiswa</h2>
  <table class="table table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>NO</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>GENDER</th>
        <th>JURUSAN</th>
        <th>ALAMAT</th>
        <th>NAMA PENGASUH</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include 'koneksi.php';
      $mahasiswa = mysqli_query($koneksi, "SELECT * from db_mahasiswa");
      $no = 1;
      foreach ($mahasiswa as $row) {
        $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki laki';
        echo "<tr>
          <td>$no</td>
          <td>" . $row['nim'] . "</td>
          <td>" . $row['nama'] . "</td>
          <td>" . $jenis_kelamin . "</td>
          <td>" . $row['jurusan'] . "</td>
          <td>" . $row['alamat'] . "</td>
          <td>" . $row['nama_pengasuh'] . "</td>
          <td>
            <a class='btn btn-primary' href='form-edit.php?id_mhs={$row["id_mhs"]}'>Edit</a>
            <a class='btn btn-danger' href='delete.php?id_mhs={$row["id_mhs"]}'>Delete</a>
          </td>
        </tr>";
        $no++;
      }
      ?>
    </tbody>
  </table>
  <footer>
    &copy; 2023 Puthut Baron Tethuko. All rights reserved.
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

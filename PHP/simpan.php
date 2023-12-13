<?php
include 'koneksi.php';
//menyimpan data dalam variable
$nim = $_POST['nim'];
$id_mhs = $_POST['id_mhs'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

//query sql untuk insert data
$query=" INSERT INTO db_mahasiswa SET nim='$nim',nama='$nama',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',alamat='$alamat' ";
mysqli_query($koneksi,$query);

header("location:Beranda.php");
?>
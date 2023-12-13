<?php
include 'koneksi.php';
//menyimpan data dalam variable
$id_wali        = $_POST['id_wali'];
$nama_pengasuh  = $_POST['nama_pengasuh'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat         = $_POST['alamat'];

//query sql untuk insert data
$query = "INSERT INTO wali SET id_wali='$id_wali',nama_wali='$nama_wali',jenis_kelamin='$jenis_kelamin',alamat='$alamat'";
mysqli_query($koneksi,$query);

header("location:Beranda.php");
?>
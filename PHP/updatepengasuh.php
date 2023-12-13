<?php
include 'koneksi.php';
$id_wali        = $_POST['id_wali'];
$nama_pengasuh      = $_POST['nama_pengasuh'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat         = $_POST['alamat'];

$query = "UPDATE wali SET id_wali='$id_wali',nama_pengasuh='$nama_pengasuh',jenis_kelamin='$jenis_kelamin',alamat='$alamat'";

mysqli_query($koneksi,$query);

header("location:Berandapengasuh.php");
?>
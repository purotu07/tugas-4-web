<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$id_wali=$_POST['id_wali'];
$nama_pengasuh =$_POST['nama'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$alamat =$_POST['alamat'];

//query SQL untuk insert data
$query=" UPDATE db_mahasiswa SET nim='$nim',nama='$nama',jurusan='$jurusan',
    jenis_kelamin='$jenis_kelamin',alamat='$alamat',where id_wali='id_wali' ";
mysqli_query($koneksi,$query);

header("location:Berandapengasuh.php");
?>
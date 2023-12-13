<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$id_admin=$_POST['id_admin'];
$nim =$_POST['nim'];
$nama =$_POST['nama'];
$jurusan =$_POST['jurusan'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$alamat =$_POST['alamat'];

//query SQL untuk insert data
$query=" UPDATE admin SET nim='$nim',nama='$nama',jurusan='$jurusan',
    jenis_kelamin='$jenis_kelamin',alamat='$alamat',where id_admin='id_admin' ";
mysqli_query($koneksi,$query);

//mengalihkan halaman ke index.php
header("location:BerandaAdmin.php");
?>
<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$id_mhs=$_POST['id_mhs'];
$nim =$_POST['nim'];
$nama =$_POST['nama'];
$jurusan =$_POST['jurusan'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$alamat =$_POST['alamat'];
$id_wali =$_POST['id_wali'];

//query SQL untuk insert data
$query=" UPDATE db_mahasiswa SET nim='$nim',nama='$nama',jurusan='$jurusan',
    jenis_kelamin='$jenis_kelamin',alamat='$alamat',id_wali='$id_wali' where id_mhs='$id_mhs' ";
mysqli_query($koneksi,$query);

header("location:Beranda.php");
?>
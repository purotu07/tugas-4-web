<?php
include'koneksi.php';
//menyimpan data id ke dalam variabel
$id_mhs=$_GET['id_mhs'];

//query SQL untuk insert data
$query="DELETE from db_mahasiswa where id_mhs='$id_mhs'";
mysqli_query($koneksi,$query);

header("location:Beranda.php");
?>
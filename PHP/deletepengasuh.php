<?php
include'koneksi.php';
//menyimpan data id ke dalam variabel
$id_wali=$_GET['id_wali'];

//query SQL untuk insert data
$query="DELETE from db_mahasiswa where id_wali='$id_wali;'";
mysqli_query($koneksi,$query);

header("location:Beranda.php");
?>
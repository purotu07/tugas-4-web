<?php
include'koneksi.php';
//menyimpan data id ke dalam variabel
$id_admin=$_GET['id_admin'];

//query SQL untuk insert data
$query="DELETE from admin where id_admin='$id_admin'";
mysqli_query($koneksi,$query);

header("location:Beranda.php");
?>
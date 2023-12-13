<?php
include 'koneksi.php';
$id =$_GET['id_admin'];
$mahasiswa = mysqli_query($koneksi,"select * from admin where id_admin='$id'");
$row = mysqli_fetch_array($mahasiswa);

//membuat data jurusan menjadi dinamis dalam bentuk array
$jurusan = array('TEKNIK INFORMATIKA','TEKNIK MESIN','TEKNIK KIMIA','RPL','TKJ');

//membuat function untuk set aktf radio button
function active_radio_button($value,$input){
    //apabila value dari radio sama dengan yang diinput
    $result = $value==$input?'checked':'';
    return $result;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="editAdmin.php">
            <input type="hidden" value="<?php echo $row['id_admin']; ?>" name="id_admin">
            <table>
                <tr><td>NIM</td><td><input type="text" value="<?php echo $row['nim']; ?>" name="nim"></td></tr>
                <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"></td></tr>
                <tr><td>JENIS KELAMIN</td><td>
                    <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin']) ?>> Laki Laki
                    <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin']) ?>> Perempuan
                </td></tr>
            <tr><td>JURUSAN <?php echo $row['jurusan']; ?></td><td>
                    <select name="jurusan">
                        <?php
                        foreach ($jurusan as $j) {
                            echo "<option value='$j' ";
                            echo $row['jurusan'] == $j ? 'selected="selected"' : '';
                            echo ">$j</option>";
                        }
                        ?>
                    </select>
                </td></tr>
                <tr><td>ALAMAT</td><td><input value="<?php echo $row['alamat']; ?>" type="text" name="alamat"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                    <a href="index.php">Kembali</a></td></tr>
            </table>
        </form>
</body>
</html>

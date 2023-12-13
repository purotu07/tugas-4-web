<?php
include 'koneksi.php';
$id_wali = $_GET['id_wali'];
$mahasiswa = mysqli_query($koneksi, "select * from db_mahasiswa where id_wali='$id_wali'");
$row = mysqli_fetch_array($mahasiswa);

// membuat function untuk set aktif radio button
function active_radio_button($value, $input)
{
    // apabila value dari radio sama dengan yang diinput
    $result = $value == $input ? 'checked' : '';
    return $result;
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengasuh</title>
</head>

<body>
    <form method="post" action="edit.php">
        <input type="hidden" value="<?php echo $row['id_wali']; ?>" name="id_wali">
        <table>
            <tr>
                <td>NAMA</td>
                <td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin']) ?>> Laki Laki
                    <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin']) ?>> Perempuan
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input value="<?php echo $row['alamat']; ?>" type="text" name="alamat"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                    <a href="Beranda.php">Kembali</a></td>
            </tr>
        </table>
    </form>
</body>
</html>

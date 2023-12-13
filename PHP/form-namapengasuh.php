<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Form Inputan Nama Pengasuh</title>
    </head>
    <body>
        <form method="post" action="simpanpengasuh.php">
            <table>
                <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
                <tr><td>JENIS KELAMIN</td><td>
                    <input type="radio" name="jenis kelamin" value="L">Laki Laki
                    <input type="radio" name="jenis kelamin" value="P">Perempuan
                </td></tr>
                </td></tr>
                <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>
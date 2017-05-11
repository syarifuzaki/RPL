<?php
include 'koneksi.php';
$title      = $_POST['title'];
$sejarah= mysql_query("select * from sejarah where title='$title'");
$row        = mysql_fetch_array($sejarah);
// membuat data jurusan menjadi dinamis dalam bentuk array


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ajax Jquery - Belajarphp.net</title>
    </head>
    <body>
        <form method="post" action="update.php">
            <input type="hidden" value="<?php echo $row['title'];?>" name="title">
            <table>
                <tr><td>TITLE</td><td><input type="text" value="<?php echo $row['title'];?>" name="title"></td></tr>
                <tr><td>DESKRIPSI</td><td><textarea type="text" value="<?php echo $row['deskripsi'];?>" name="deskripsi" rows="10" cols ="40"></textarea>
				</td></tr>
               
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="#">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>
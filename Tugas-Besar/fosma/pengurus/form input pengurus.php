<!DOCTYPE html>
<html>
    <head>
        <title>Ajax Jquery - Belajarphp.net</title>
    </head>
    <body>
        <form method="post" action="input pengurus.php">
            <table>
                <tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" name="nim"></td></tr>
                <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
                <tr><td>FAKULTAS</td><td>
                        <select name="fakultas">
                            <option value="FIB">FIB</option>
                            <option value="FSRD">FSRD</option>
                            <option value="FKIP">FKIP</option>
							<option value="FEB">FEB</option>
							<option value="FISIP">FISIP</option>
							<option value="FMIPA">FMIPA</option>
							<option value="FK">FK</option>
							<option value="FT">FT</option>
							<option value="FP">FP</option>
							<option value="FH">FH</option>
                        </select>
                    </td></tr>
                <tr><td>JABATAN</td><td><input type="text" name="jabatan"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>
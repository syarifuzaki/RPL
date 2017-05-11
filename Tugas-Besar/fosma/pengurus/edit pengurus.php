<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
		<h3>www.malasngoding.com</h3>
	</div>
	
	<br/>
	
	<a href="tampil pengurus.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$nim = $_GET['nim'];
	$query_mysql = mysql_query("SELECT * FROM pengurus WHERE nim='$nim'")or die(mysql_error());
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
		<tr>
				<td>NIM</td>
				<td>
					<input type="text" name="nim" value="<?php echo $data['nim'] ?>">
				</td>					
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Fakultas <?php echo $data['fakultas']; ?></td>
				<td>
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
							</td>
			</tr>	
			<tr>
				<td>Jabatan</td>
				<td><input type="text" name="jabatan" value="<?php echo $data['jabatan'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>
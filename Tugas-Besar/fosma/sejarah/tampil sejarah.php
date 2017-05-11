<h2>Sejarah Fosma</h2>
<?php
include 'koneksi.php';
$sejarah = mysql_query("select * from sejarah");
while($data = mysql_fetch_array($sejarah)){
		?>
		<tr>
		<br> 
			<td><?php echo $data['title']; echo "<br>"?></td>
			
			<td><?php echo $data['deskripsi']; echo "<br>"?></td>
			
			<td>
				<a class="edit" href="edit sejarah.php?id=<?php echo $data['title']; ?>">Edit</a> |
				<a class="hapus" href="delete sejarah.php?id=<?php echo $data['title']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>


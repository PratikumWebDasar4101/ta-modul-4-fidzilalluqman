<?php  
session_start();
$user = $_SESSION['user'];
?>

<h1 align="center">Tampil Data</h1>
<table border="1" align="center">
	<tr>
		<th>Nama</th>
		<th>Gambar</th>
		<th>Hobby</th>
		<th>Genre Film</th>
		<th>Tempat Wisata</th>
	</tr>
	<tr valign="top">
		<td><?php echo $user['nama']; ?></td>
		<td>
			<img width="300" src="<?php echo $user['filegambar'];  ?>" alt="">
		</td>
		<td>
			<?php
				foreach ($user['hobby'] as $hobby => $value) {
			 		echo $value . '<br>';
			 	} 	
			?>
		</td>
		<td>
			<?php
				foreach ($user['genre_film'] as $genre_film => $value) {
			 		echo $value . '<br>';
			 	} 	
			?>
		</td>
		<td><?php
				foreach ($user['tempat_wisata'] as $tempat_wisata => $value) {
			 		echo $value . '<br>';
			 	} 	
			?></td>
	</tr>
	<tr><td colspan="5"><a href="login.php"><input type="submit" name="logout" value="logout"></a></td></tr>
</table>

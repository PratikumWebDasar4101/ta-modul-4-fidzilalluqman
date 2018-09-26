<!DOCTYPE html>
<html>
<head>
	<title>Form Belanja</title>
</head>
<body>
	<h1 align="center">Form Belanja</h1>
	<table align="center" border="1">
		<form action="proses_belanja.php" method="post">
			<tr>
				<th>Daftar Belanjaan</th>
				<td><input type="checkbox" name="belanjaan[]" 	  value="gula">Gula<br>
					<input type="checkbox" name="belanjaan[]" value="sabun">Sabun<br>
					<input type="checkbox" name="belanjaan[]" value="shampo">Shampo<br>
					<input type="checkbox" name="belanjaan[]" value="kopi">Kopi<br>
					<input type="checkbox" name="belanjaan[]" value="susu">Susu<br></td>
			</tr>
			<tr>
				<th>Jenis Pengiriman</th>
				<td><input type="radio" name="pengiriman" value="jne">JNE<br>
				<input type="radio" name="pengiriman" value="jnt">JNT<br>
				<input type="radio" name="pengiriman" value="pos">POS<br>
				<input type="radio" name="pengiriman" value="wahana">Wahana<br></td>
			</tr>
			<tr>
				<th>Alamat</th>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				 <input type="hidden" name="tanggal" value="<?php echo date("Y/m/d"); ?>">				<td colspan="2"><input style="width: 100%" type="submit" name="submit" value="beli"></td>
			</tr>
		</form>
	</table>
</body>
</html>
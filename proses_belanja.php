<?php  
session_start();

$user = $_SESSION['user'];
$belanjaan = $_POST['belanjaan'];
$pengiriman = $_POST['pengiriman'];
$alamat = $_POST['alamat'];
$tanggal = $_POST['tanggal'];
$harga = 0;
$harga_pengiriman = 0;

for ($i=0; $i <count($belanjaan) ; $i++) { 
	if ($belanjaan[$i] == 'gula') 
		$harga += 15000;
	elseif ($belanjaan[$i] == 'sabun')
		$harga += 20000;
	elseif ($belanjaan == 'shampo' )
		$harga += 18000;
	elseif ($belanjaan == 'kopi')
		$harga += 5000;
	elseif ($belanjaan == 'susu')
		$harga += 3000;
	}
if ($pengiriman == 'jne') 
	$harga_pengiriman = 15000;
if ($pengiriman == 'jnt') 
	$harga_pengiriman = 20000;
if ($pengiriman == 'pos') 
	$harga_pengiriman = 10000;
if ($pengiriman == 'wahana') 
	$harga_pengiriman = 13000;

function total($a, $b){
	return $a + $b;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Belanjaan</title>
</head>
<body>
	<h1 align="center">Data Belanjaan</h1>
	<table align="center" border="1">
		<tr>
			<th>Tanggal</th>
			<td><?php echo $tanggal; ?></td>
		</tr>
		<tr>
			<th>No. Telephone</th>
			<td><?php echo $user['notelp']; ?></td>
		</tr>
		<tr>
			<th>Barang yang dibeli</th>
			<td><?php foreach ($belanjaan as $belanjaan) {
				echo $belanjaan. "<br>";
			} ?></td>
		</tr>
		<tr>
			<th>Pengiriman</th>
			<td><?php echo $pengiriman . " " . $harga_pengiriman; ?></td>
		</tr>
		<tr>
			<th>Total</th>
			<td><?php echo total ($harga, $harga_pengiriman); ?></td>
		</tr>
	</table>
</body>
</html>
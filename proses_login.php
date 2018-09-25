<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 align="center">Login</h1>
<table border="1" align="center">
	<form action="login.php" method="POST">
	<tr>
		<th>Username</th>
		<td><input type="text" name="username" id="username"></td>
	</tr>
	<tr>
		<th>Password</th>
		<td><input type="password" name="password" id="password"></td>
	</tr>
	<tr>
		<td colspan="2"><input style="width: 100%" type="submit" name="submit"></td>
	</tr>
</form> 
</table>
</body>
</html>

<?php  
session_start();
error_reporting(0);
$user = array(
				"username" => "admin",
				"password" => "admin"
			);
if (isset($_POST['submit'])) {
	if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']){
		$_SESSION['username'] = $_POST['username'];
		header("Location: formawal.html");
	}else{
		echo "Username atau Password Tidak Benar";
	}
}
?>

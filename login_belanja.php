<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1 align="center">Login</h1>
	<table align="center" border="1">
		<form action="proses_login_belanja.php" method="post">
			<tr>
				<th>Username</th>
				<td><input type="text" name="username" id="username"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" name="password" id="password"></td>
			</tr>
			<tr>
				<td colspan="2"><input style="width: 100%" type="submit" name="submit" id="submit" value="Login"></td>
			</tr>
		</form>
	</table>
</body>
</html>
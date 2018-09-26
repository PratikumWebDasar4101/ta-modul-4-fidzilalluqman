<?php 
session_start();

$user = array(
	"nama" => "fidzi",
	"username" => "fidzi",
	"password" => "fidzi",
	"notelp" => "089670634399"
);

if ($user["username"] == $_POST["username"] && $user["password"] == $_POST["password"]) {
	$_SESSION["username"] = $user["username"];
	$_SESSION["user"] = $user;
	header("Location: form_belanja.php");
}else {
	header("Location: login_belanja.php");
}
?>
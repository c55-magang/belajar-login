<?php
include("../koneksi.php");
$username = $_POST['username'];
$password = md5($_POST['password']);

$result = $mysql->query("select * from user where username='$username' and password = '$password'");

if ($result->num_rows > 0) {
	// simpan data pengguna di sesi
	$_SESSION['login'] = $result->fetch_assoc();
	header('location: ../rahasia');
} else {
	// jika tidak dapet user
	echo "<script>alert('Username atau password salah!'); window.location='./';</script>";

}
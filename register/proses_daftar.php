<?php
include("../koneksi.php");
$username = $_POST['username'];
$password = md5($_POST['password']);

$daftar = $mysql->query("insert into user(username, password) values('$username', '$password')");

if ($daftar) {
	header('location: ../login');
} else {
	// jika gagal
	echo "<script>alert(\"Gagal medaftarkan! ".$mysql->error."'); window.location=\"./\"</script>";
}
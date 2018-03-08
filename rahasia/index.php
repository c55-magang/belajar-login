<?php
include('../koneksi.php');

if(!cek_login()) {
	header('location: ../login');
} else {
	$user = $_SESSION['login'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Selamat datang</title>
</head>
<body>
	<h1>Selamat datang, <?php echo $user['username'] ?></h1>
	<a href="../logout.php">Logout</a>
</body>
</html>
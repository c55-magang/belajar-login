<?php
include('../koneksi.php');

$name = $_POST['name'];


$simpan = $mysql->query("insert into test (id, name) values('1','$name')");

if ($simpan === true) {
	echo "berhasil menyimpan data";
} else {
	echo "gagal: ".$mysql->error;
}
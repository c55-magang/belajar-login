<?php
session_start();
$mysql = new mysqli('localhost','root','itusihdl','test');

function cek_login () {
	$result = false;
	if (isset($_SESSION['login'])) {
		$result = true;
	}

	return $result;
}
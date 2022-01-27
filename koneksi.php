<?php
$koneksi = mysqli_connect("localhost", "root", "", "202055202084_wasti_torsulu");

if (mysqli_connect_errno()) {
	echo "koneksi Database Gagal:".mysqli_connect_errno();
}

?>
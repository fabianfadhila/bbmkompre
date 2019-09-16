<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "penerimaan_pkl_dinas";
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect($hostname,$username,$password) or die ("Koneksi Gagal");
mysql_select_db($database) or die ("Database Tidak Bisa dibuka");
?>

<?php
include "/../../class/user.php";
$user = new user();

//mengisi atribut dengan hasil dari inputan
$user->email    = $_POST['email'];
$user->password = $_POST['password'];



//menampung hasil dari method create
$error = $user->getLogin();
$yangcocok = $error->num_rows;

if ($yangcocok == 1) {
	if (!isset($_SESSION)) {
		session_start();
	}
	$row = $error->fetch_assoc();
	$_SESSION['admin'] = $row['id_user'];
	$_SESSION['nama'] = $row['username'];
	$_SESSION['gambar'] = $row['gambar'];
	$_SESSION['jabatan'] = $row['jabatan'];


	header("location: ../../admin/index1.php?page=Home");
} else {
	if (!isset($_SESSION)) {
		session_start();
	}
	// $_SESSION['message'] = "Cek Username atau password anda";
	echo "<script type='text/javascript'>
	setTimeout(function () {    
		swal({
			title: 'Login Gagal',
			text:  'Silahkan cek username dan password',
			icon: 'error',
			timer: 1500,
			showCancelButton: false,
			showConfirmButton: false
		});     
	},10);  
	window.setTimeout(function(){ 
		document.location.href='../../index.php';
	} ,2000);    
	</script>";
}

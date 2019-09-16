<?php
include "class/user.php";
$user = new user();

//mengisi atribut dengan hasil dari inputan
$user->email    = $_POST['email'];
$user->password = $_POST['password'];



//menampung hasil dari method create
$error = $user->cek_Login();
$yangcocok = $error->num_rows;
print($yangcocok);
die();
// if ($yangcocok == 1) {
//     $row = $error->fetch_assoc();
//     $_SESSION['admin'] = $row['id_user'];
// } else {
//     if (!isset($_SESSION)) {
//         session_start();
//     }
//     $_SESSION['message'] = "Cek Username atau password anda";
// }

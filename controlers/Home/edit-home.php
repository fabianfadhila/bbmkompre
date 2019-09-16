
<?php
include "/../../class/home.php";
$home = new home();

$home->judul = $_POST['judul'];
$home->lokasi_provinsi = $_POST['lokasi_provinsi'];
$home->telephone = $_POST['telephone'];
$home->email = $_POST['email'];
$home->alamat = $_POST['alamat'];
$home->deskripsi = $_POST['deskripsi'];

$error = $home->update_home();

if (!$error) {
   echo "<script type='text/javascript'>
    setTimeout(function () {    
       swal({
        title: 'Data Tersimpan',
        text:  'Pengajuan Data ',
        icon: 'success',
        timer: 5000,
        showConfirmButton: true
        });     
        },10);  
        window.setTimeout(function(){ 
           document.location.href='index1.php?page=edit-home';
           } ,3000);    
         </script>";
} else {
   echo "$error";
}
?>

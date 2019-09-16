<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include "/../../class/kendaraan.php";
$kendaraan = new kendaraan();

//Untuk Instansiasi Dari Table Keberangkatab
$kendaraan->merek       = $_POST['merek'];
$kendaraan->pemegang    = $_POST['pemegang'];
$kendaraan->plat_nomer  = $_POST['plat_nomer'];
$kendaraan->type        = $_POST['type'];


$error = $kendaraan->add_kendaraan();

if (!$error) {
    echo "<script type='text/javascript'>
    setTimeout(function () {    
     swal({
        title: 'Data Kendaraan Tersimpan',
        text:  'Sukses Menyimpan Data Kendaraan',
        icon: 'success',
        timer: 5000,
        showConfirmButton: true
        });     
        },10);  
        window.setTimeout(function(){ 
         document.location.href='index1.php?page=Lihat-data-kendaraan';
         } ,3000);    
         </script>";
} else {
    echo "$error";
}

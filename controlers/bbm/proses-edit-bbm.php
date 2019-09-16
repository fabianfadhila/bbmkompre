<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include "/../../class/bbm.php";
$bbm = new bbm();

// $bbm->id_kendaraan        = $_POST['id_kendaraan'];
$bbm->id_jenis_bbm    = $_POST['id_jenis_bbm'];
// $bbm->Nama_Peminjam   = $_POST['Nama_Peminjam'];
$bbm->Tanggal_Pinjam  = $_POST['Tanggal_Pinjam'];
$bbm->jumlah_bbm      = $_POST['jumlah_bbm'];
$bbm->harga_satuan    = $_POST['harga_satuan'];
$bbm->total_harga    = $_POST['total_harga'];
$bbm->Keterangan      = $_POST['Keterangan'];
$bbm->id_bbm          = $_POST['id_bbm'];


$foto = $_FILES['foto_bon']['name']; //nama foto
$tmp_foto = $_FILES['foto_bon']['tmp_name']; //tempat foto

$fotobaru = $_POST['id_bbm'] . "_" . date('dmYHis') . "_" . $foto;

$bbm->foto_bon = $fotobaru;

$path = "../assets/images/data_bon/" . $fotobaru; //folder foto setelah diupload

if (move_uploaded_file($tmp_foto, $path)) {
   echo "<script type='text/javascript'>
   setTimeout(function () {    
      swal({
       title: 'Data Ter-Update',
       text:  'Data Berhasil Di Update ',
       icon: 'success',
       timer: 5000,
       showConfirmButton: true
       });     
       },10);  
       window.setTimeout(function(){ 
          document.location.href='index1.php?page=Lihat-data-bbm';
          } ,3000);    
        </script>";
   //sukses
   $error = $bbm->update_bbm();
} else {
   if (!isset($_SESSION)) {
      session_start();
   }
}


?>
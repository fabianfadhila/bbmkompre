
 <?php
  include "/../../class/kendaraan.php";
  $kendaraan = new kendaraan();

  $kendaraan->id_kendaraan          = $_GET['id_kendaraan'];


  $error = $kendaraan->delete_kendaraan();

  if (!$error) {
    echo "<script type='text/javascript'>
   setTimeout(function () {    
     swal({
      title: 'Data Berhasil Di Hapus',
      text:  'Good Job',
      icon: 'success',
      timer: 1500,
      showCancelButton: false,
      showConfirmButton: false
      });     
      },10);  
      window.setTimeout(function(){ 
       document.location.href='index1.php?page=Lihat-data-kendaraan';
       } ,2000);    
       </script>";
  } else {
    echo "$error";
  }
  ?>

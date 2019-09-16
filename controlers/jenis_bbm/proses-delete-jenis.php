 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <?php
  include "/../../class/jenis_bbm.php";
  $jenis_bbm = new jenis_bbm();
  $jenis_bbm->id_jenis_bbm          = $_GET['id_jenis_bbm'];

  $error = $jenis_bbm->delete_jenis();

  if (!$error) {
    echo "<script type='text/javascript'>
   setTimeout(function () {    
     swal({
      title: 'Data Jenis BBM Berhasil Di Hapus',
      text:  'Data Terhapus',
      icon: 'success',
      timer: 1500,
      showCancelButton: false,
      showConfirmButton: false
      });     
      },10);  
      window.setTimeout(function(){ 
       document.location.href='index1.php?page=Lihat-data-jenis-bbm';
       } ,2000);    
       </script>";
  } else {
    echo "$error";
  }
  ?>
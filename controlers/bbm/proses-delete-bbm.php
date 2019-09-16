 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 <?php
  include "/../../class/bbm.php";
  $bbm = new bbm();

  $bbm->id_bbm          = $_GET['id_bbm'];


  $error = $bbm->delete_bbm();

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
       document.location.href='index1.php?page=Lihat-data-bbm';
       } ,2000);    
       </script>";
  } else {
    echo "$error";
  }
  ?>
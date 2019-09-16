 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 <?php
  include "/../../class/user.php";
  $user = new user();

  $user->id_user          = $_GET['id_user'];


  $error = $user->delete_user();

  if (!$error) {
    echo "<script type='text/javascript'>
   setTimeout(function () {    
     swal({
      title: 'Data User Berhasil Di Hapus',
      text:  'Data Terhapus',
      icon: 'success',
      timer: 1500,
      showCancelButton: false,
      showConfirmButton: false
      });     
      },10);  
      window.setTimeout(function(){ 
       document.location.href='index1.php?page=Lihat-data-user';
       } ,2000);    
       </script>";
  } else {
    echo "$error";
  }
  ?>
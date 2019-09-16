 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <?php
    include "/../../class/jenis_bbm.php";
    $jenis_bbm = new jenis_bbm();

    //Untuk Instansiasi Dari Table Keberangkatab
    $jenis_bbm->jenis_bahan_bakar   = $_POST['jenis_bahan_bakar'];
    $jenis_bbm->harga  = $_POST['harga'];

    $error = $jenis_bbm->add_jenis();

    if (!$error) {
        echo "<script type='text/javascript'>
    setTimeout(function () {    
     swal({
        title: 'Data Jenis BBM Tersimpan',
        text:  'Sukses Menyimpan Data Jenis BBM',
        icon: 'success',
        timer: 5000,
        showConfirmButton: true
        });     
        },10);  
        window.setTimeout(function(){ 
         document.location.href='index1.php?page=Lihat-data-jenis-bbm';
         } ,3000);    
         </script>";
    } else {
        echo "$error";
    }
    ?>
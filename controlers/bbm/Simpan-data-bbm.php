 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <?php
    include "/../../class/bbm.php";
    $bbm = new bbm();

    //Untuk Instansiasi Dari Table Keberangkatab
    $bbm->id_kendaraan    = $_POST['id_kendaraan'];
    $bbm->id_jenis_bbm    = $_POST['id_jenis_bbm'];
    $bbm->Nama_Peminjam   = $_POST['Nama_Peminjam'];
    $bbm->Tanggal_Pinjam  = $_POST['Tanggal_Pinjam'];
    $bbm->jumlah_bbm      = 0;
    $bbm->harga_satuan    = 0;
    $bbm->total_harga     = 0;
    $bbm->Keterangan      = $_POST['Keterangan'];


    $error = $bbm->add_bbm();

    if (!$error) {
        echo "<script type='text/javascript'>
    setTimeout(function () {    
     swal({
        title: 'Data Tersimpan',
        text:  'Data BBM Berhasil Disimpan',
        icon: 'success',
        timer: 5000,
        showConfirmButton: true
        });     
        },10);  
        window.setTimeout(function(){ 
         document.location.href='index1.php?page=Lihat-data-bbm';
         } ,3000);    
         </script>";
    } else {
        echo "$error";
    }
    ?>
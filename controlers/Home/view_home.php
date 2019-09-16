
<?php
include "/../../class/pengajuan_pkl.php";
$pengajuan_pkl = new pengajuan_pkl();

//Untuk Instansiasi Dari Table Keberangkatab
$pengajuan_pkl->nama                 = $_POST['nama'];
$pengajuan_pkl->no_hp                = $_POST['no_hp'];
$pengajuan_pkl->email                = $_POST['email'];
$pengajuan_pkl->semester_kelas       = $_POST['semester_kelas'];
$pengajuan_pkl->durasi_pkl           = $_POST['durasi_pkl'];
$pengajuan_pkl->nama_sekolah_kampus  = $_POST['nama_sekolah_kampus'];
$pengajuan_pkl->alamat               = $_POST['alamat'];
$pengajuan_pkl->jurusan              = $_POST['jurusan'];
$pengajuan_pkl->file                 = $_POST['file'];


$error = $pengajuan_pkl->add_pengajuan();

if (!$error) {
   echo "
    <script type='text/javascript'>
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
           document.location.href='index1.php#PengajuanPKL';
           } ,3000);    
           </script>";
} else {
   echo "$error";;
}

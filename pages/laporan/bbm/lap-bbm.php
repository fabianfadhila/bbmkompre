 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
//class ezpdf yg di panggil
include "pdf/class.ezpdf.php"; 
$pdf = new Cezpdf('A4','lanscape');

//Set margin dan font
$pdf->ezSetCmMargins(3, 3, 3, 3);
$pdf->selectFont('pdf/fonts/Times-Roman.afm');

//Tampilkan gambar di dokumen PDF
$pdf->addJpegFromFile('mylogo.jpg',40,778,70);

//Teks di tengah atas untuk judul header
$pdf->addText(230, 815, 14,'<b>Laporan BBM Kendaraan</b>');
$pdf->addText(160, 800, 14,'<b>DINAS PENANAMAN MODAL SATU PINTU</b>');
$pdf->addText(210, 785, 10,'Jalan Raya Padalarang - Cisarua KM 2 Gedung C Lt.2');

//Garis atas untuk header
$pdf->line(2, 770, 590, 770);

//Garis bawah untuk footer
$pdf->line(2, 50, 590, 50);

//Teks kiri bawah
date_default_timezone_set("Asia/Jakarta");
$pdf->addText(410,34,8,'Dicetak tgl:' . date( 'd-m-Y, H:i:s'));

//Koneksi ke database dan tampilkan datanya
@mysql_connect("localhost", "root", "");
mysql_select_db("bbm_dinas");

$Dari=$_POST['Dari'];
$Sampai=$_POST['Sampai'];
$tampil = "
SELECT 
bbm.Tanggal_Pinjam,
kd.merek,
COUNT(bbm.id_kendaraan) AS Jumlah_Kendaraan,
kd.type,SUM(bbm.jumlah_bbm) AS Jumlah_BBM, 
SUM(bbm.total_harga) AS Total 
FROM tbl_bbm bbm, tbl_kendaraan kd 
WHERE bbm.id_kendaraan = kd.id_kendaraan  AND (Tanggal_Pinjam BETWEEN '$Dari' AND '$Sampai') GROUP BY 
bbm.id_kendaraan 

";


$sql = mysql_query($tampil);  
$jml = mysql_num_rows($sql);
if ($jml > 0){
$i = 1;
while($r = mysql_fetch_array($sql)) {
//Format Menampilkan data di ezPdf
 $data[$i]=array(
            'No'=>$i,
			'Merek'=>"$r[type] - $r[merek]",
            'Total Kendaraan' =>"$r[Jumlah_Kendaraan]",
			'Total BBM'=>"$r[Jumlah_BBM] - Liter",
			'Total Harga'=>"$r[Total]",  
		);

 $i++;
}




//Tampilkan Dalam Bentuk Table

$pdf->ezTable($data);
$pdf->addText(370, 350, 10,'Total            4,972,550');
$pdf->ezText("\nPeriode: $Dari s/d $Sampai");

// Penomoran halaman
$pdf->ezStartPageNumbers(700, 20, 8);
$pdf->ezStream();
}

else{

 echo "
	<script type='text/javascript'>
    setTimeout(function () {    
       swal({
        title: 'Data Tidak Di Temukan',
        text:  'Lihat kembali tanggalnya',
        icon: 'error',
        timer: 5000,
        showConfirmButton: true
        });     
        },10);  
        window.setTimeout(function(){ 
 			window.history.back();
            } ,3000);    
          </script>"; 
}
?>
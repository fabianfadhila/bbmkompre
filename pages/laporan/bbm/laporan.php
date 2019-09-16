 <title>Laporan BBM</title>
 <?php
  include "../../../class/bbm.php";
  $bbm = new bbm();
  ?>

 <style type="text/css">
   @media print {
     @page {
       size: landscape
     }
   }
 </style>
 <!-- Breadcrumb-->
 <table width="929" height="472">
   <tr>
     <td width="17">&nbsp;</td>
     <td colspan="5">
       <div align="center"><img src="logo-dinas.png" alt="HEADER" height="117" /></div>
     </td>
     <td width="42">&nbsp;</td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td colspan="5">
       <table class="table table-bordered" border="1" style="border-collapse: collapse;">
         <thead>
           <tr>
             <th width="20" rowspan="2" class="align-middle text-center">No</th>
             <th width="40" rowspan="2" class="align-middle text-center">Merek</th>
             <th width="25" rowspan="2" class="align-middle text-center">Pemegang</th>
             <th width="26" rowspan="2" class="align-middle text-center">No Polisi</th>
             <th width="60" class="align-middle text-center" <?php for ($i = 1; $i <= date('t', mktime(0, 0, 0, $_POST['bulan'], 10, date('Y'))); $i++) { }
                                                              echo 'colspan="' . ($i - 1) . '"';
                                                              ?>>Bulan
               <?php
                $case = date('F', mktime(0, 0, 0, $_POST['bulan'], 10, date('Y')));
                switch ($case) {
                  case 'January':
                    echo "Januari";
                    break;
                  case 'February':
                    echo "Februari";
                    break;
                  case 'March':
                    echo "Maret";
                    break;
                  case 'April':
                    echo "April";
                    break;
                  case 'May':
                    echo "Mei";
                    break;
                  case 'June':
                    echo "Juni";
                    break;
                  case 'July':
                    echo "Juli";
                    break;
                  case 'August':
                    echo "Agustus";
                    break;
                  case 'September':
                    echo "September";
                    break;
                  case 'October':
                    echo "Oktober";
                    break;
                  case 'November':
                    echo "November";
                    break;
                  case 'December':
                    echo "Desember";
                    break;
                  default:
                    # code...
                    break;
                }
                ?></th>
             <th rowspan="2" class="align-middle text-center">Jumlah</th>
             <th width="76" rowspan="2" class="align-middle text-center">Total Harga</th>
           </tr>

           <tr>
             <?php for ($i = 1; $i <= date('t', mktime(0, 0, 0, $_POST['bulan'], 10, date('Y'))); $i++) { ?>
               <th style="width: 10px;" class="
            <?php if (date('D', mktime(0, 0, 0, $_POST['bulan'], $i, date('Y'))) == "Sun" || date('D', mktime(0, 0, 0, $_POST['bulan'], $i, date('Y'))) == "Sat") : ?>
            bg-danger text-light
          <?php endif ?>
          "><?php echo $i ?></th>
             <?php } ?>
           </tr>
         </thead>
         <tbody>
           <?php $no = 1; ?>
           <?php foreach ($bbm->view_bbm() as $data) : ?>
             <?php
                //Variabel Kebutuhan
                $jmlHariKerja = 0;
                $tw = 0;
                $td = 0;
                $th = 0;

                $dl = 0;
                $dp = 0;
                $s = 0;
                $iz = 0;
                $c = 0;
                ?>
             <tr>
               <td><?php echo $no; ?></td>
               <td><?php echo $data['merek'] ?></td>
               <td><?php echo $data['pemegang'] ?></td>
               <td><?php echo $data['plat_nomer'] ?></td>
               <?php $jumlah = 0; ?>
               <?php $hargaz = 0; ?>
               <?php for ($i = 1; $i <= date('t', mktime(0, 0, 0, $_POST['bulan'], 10, date('Y'))); $i++) {

                    $tanggal = date('d-m-Y', mktime(0, 0, 0, $_POST['bulan'], $i, date('Y')));
                    $absen = $bbm->detail_bbm($data['id_bbm'], $tanggal);
                    if ($absen['jumlah_bbm'] == null || $absen['jumlah_bbm'] == "") {
                      echo "<td></td>";
                    } else {
                      echo "<td>" . $absen['jumlah_bbm'] . " </td>";
                      $jumlah +=  $absen['jumlah_bbm'];
                      $hargaz +=  $absen['total_harga'];
                    }
                  }
                  ?>
               <td><?php echo $jumlah ?></td>
               <td><?php echo $hargaz ?></td>
             </tr>
             <?php $no++ ?>
           <?php endforeach ?>
         </tbody>
       </table>
     </td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td><span class="style1"></span></td>
     <td width="193">&nbsp;</td>
     <td width="96">&nbsp;</td>
     <td width="47">&nbsp;</td>
     <td width="47">&nbsp;</td>
     <td width="408">
       <p align="center">Mengetahui<br>
         UMUM</p>
       <p align="center">&nbsp;</p>
       <p align="center">&nbsp;</p>
       <p align="center"><strong><U>Galuh, S.Ag, M.SI</U><br>
         </strong>Pembina Tk. 1<br>
         NIP. 19620310 198312 1 003<strong><br>
         </strong></p>
       <p align="center">&nbsp;</p>
     </td>
     <td>&nbsp;</td>
   </tr>
 </table>
 <script>
   function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
   }
 </script>
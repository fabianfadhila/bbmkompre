<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-info">

        </h3>
        <!-- tools box -->

        <!-- /. tools -->
      </div>
      <?php
      $no   = isset($_GET['no']) ? $_GET['no'] : "";
      $nama  = isset($_GET['nama']) ? $_GET['nama'] : "";
      $pembayaran = isset($_GET['pembayaran']) ? $_GET['pembayaran'] : "";
      $kota  = isset($_GET['kota']) ? $_GET['kota'] : "";
      $tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : "";
      $tgl = explode("-", $tanggal);
      $tglbaru = "$tgl[2]/$tgl[1]/$tgl[0]";
      $nominal = isset($_GET['nominal']) ? $_GET['nominal'] : "0";
      if ($nominal) {
        $uang = number_format($nominal, 0, ',', '.') . "</br>";
        $terbilang = ucwords('' . Terbilang($nominal) . '') . " Rupiah";
      }
      ?>
      <hr>
      <?php if (empty($nominal)) { ?>
        <div class="box-body pad">
          <form action="../pages/laporan/kwitansi/kwitansi.php" method="get">
            <table width="100%" border="0">
              <tr>
                <td width="100">No.</td>
                <td><input type="text" name="no" value="KW/DNS/<?php echo date('i/s/d/m/y'); ?>" readonly class="form-control"></td>
              </tr>
              <tr>
                <td width="100">Diterima dari</td>
                <td><input type="text" name="nama" class="form-control" required></td>
              </tr>
              <tr>
                <td width="100">Nominal Uang</td>
                <td><input type="text" name="nominal" class="form-control" required></td>
              </tr>
              <tr>
                <td width="100">Untuk Pembayaran</td>
                <td>
                  <textarea name="pembayaran" cols="40" class="form-control" rows="3"></textarea>
                </td>
              </tr>
              <tr>
                <td width="100">Kota</td>
                <td><input type="text" name="kota" class="form-control" required></td>
              </tr>
              <tr>
                <td width="100">Tanggal</td>
                <td><input type="date" name="tanggal" class="form-control" required></td>
              </tr>
              <tr>
                <td width="100"></td>
                <td align="right"><input type="submit" value="Buat Kuitansi" class="btn btn-primary"></td>
              </tr>
            </table>
          </form>
        </div>
      <?php } ?>
      <?php if (!empty($nominal)) { ?>
        <table width="800" border="0" cellpadding="4" cellspacing="0" style="border: 1px solid #000;">
          <tr>
            <td rowspan="6" width="120" style="border-right:1px solid #000;"><img src="../../../assets/images/logo-dpmptsp.jpg" height="100"></td>
            <td width="150" valign="top"> No </td>
            <td valign="top"> : <?php echo $no; ?> </td>
          </tr>
          <tr>
            <td valign="top"> Telah Diterima Dari </td>
            <td valign="top"> : <?php echo $nama; ?> </td>
          </tr>
          <tr>
            <td valign="top"> Uang Sejumlah </td>
            <td valign="top"> : <?php echo $terbilang; ?></td>
          </tr>
          <tr>
            <td valign="top"> Untuk Pembayaran </td>
            <td valign="top"> : <?php echo $pembayaran; ?><br></td>
          </tr>
          <tr>
            <td valign="bottom">
              <h3>Rp <?php echo $uang; ?> </h3>
            </td>
            <td valign="top" align="right" height="100"> <?php echo "$kota ",  date('d / M / Y'); ?> </td>
          </tr>
        </table>
        <style>
          a {
            text-decoration: none;
            color: #0903E8;
            font-family: verdana;
          }

          a:hover {
            color: #FA3C3C;
          }
        </style>
      <?php } ?>
      </body>

      </html>
      <?php
      function Terbilang($x)
      {
        $bilangan = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
        if ($x < 12)
          return " " . $bilangan[$x];
        elseif ($x < 20)
          return Terbilang($x - 10) . " Belas";
        elseif ($x < 100)
          return Terbilang($x / 10) . " Puluh" . Terbilang($x % 10);
        elseif ($x < 200)
          return " seratus" . Terbilang($x - 100);
        elseif ($x < 1000)
          return Terbilang($x / 100) . " Ratus" . Terbilang($x % 100);
        elseif ($x < 2000)
          return " seribu" . Terbilang($x - 1000);
        elseif ($x < 1000000)
          return Terbilang($x / 1000) . " Ribu" . Terbilang($x % 1000);
        elseif ($x < 1000000000)
          return Terbilang($x / 1000000) . " Juta" . Terbilang($x % 1000000);
      }
      ?>

      <!-- <?php
            $curl = curl_init();
            $token = "";
            $data = [
              'phone' => '081XXXXXXX',
              'caption' => 'hi', // can be null
              'document' => 'https://xxxx.com/poster.pdf',
            ];

            curl_setopt(
              $curl,
              CURLOPT_HTTPHEADER,
              array(
                "Authorization: $token",
              )
            );
            curl_setopt($curl, CURLOPT_URL, "https://wablas.com/api/send-document");
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            $result = curl_exec($curl);
            curl_close($curl);

            echo "<pre>";
            print_r($result);

            ?> -->
    </div>
  </div>
  </div>
</section>
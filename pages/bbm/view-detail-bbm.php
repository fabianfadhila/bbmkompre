<?php
include '/../../class/bbm.php';
$bbm = new bbm();
$data = null;
if (isset($_GET['id_bbm'])) {
	$data = $bbm->getDetail($_GET['id_bbm']);
}
?>

<?php if ($data) : ?>
	<div class="container-fluid">
		<h1 class="h3 mb-2 text-gray-800">Detail Data Pembelian BBM </h1>
		<div class="row">

			<div class="col-md-6">
				<div class="card shadow mb-4">

					<div class="card-body">
						<table class="table">
							<tr class="text-gray-900">
								<th colspan="1">&nbsp Data Peminjam Kendaraan</th>
								<td> </td>
							</tr>
							<tr class="text-gray-900">
								<th>&nbsp Nama Lengkap :</th>
								<td> <?= $data["Nama"] ?> </td>
							</tr>
							<tr class="text-gray-900">
								<th>&nbsp Tanggal Pinjam :</th>
								<td> <?= $data["Tanggal_Pinjam"] ?> </td>
							</tr>
							<tr class="text-gray-900">
								<th>&nbsp Jenis BBM :</th>
								<td><?= $data["jenis_bahan_bakar"] ?> </td>
							</tr>
							<tr class="text-gray-900">
								<th>&nbsp Jumlah BBM :</th>
								<td><?= $data["jumlah_bbm"] ?> / Liter</td>
							</tr>

							<tr class="text-gray-900">
								<th>&nbsp Harga :</th>
								<td><?= $data["harga_satuan"] ?> * <?= $data["jumlah_bbm"] ?> Liter = <?= $data["total_harga"] ?></td>
							</tr>

							<tr class="text-gray-900">
								<th>&nbsp Keterangan :</th>
								<td><?= $data["keterangan"] ?></td>
							</tr>
							<tr class="text-gray-900">
								<th>&nbsp Foto Bon :</th>
								<td>
									<div class="avatar-flip">
										<img src="../assets/images/data_bon/<?= $data['foto_bon']; ?>" height="150" width="150">
								</td>
							</tr>


						</table>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="card shadow mb-4">

					<div class="card">

						<div class="card-body">
							<table class="table">
								<tr class="text-gray-900">
									<th colspan="1">&nbsp Data Kendaraan :</th>
									<td> </td>
								</tr>
								<tr class="text-gray-900">
									<th>&nbsp Tipe :</th>
									<td> <?= $data["type"] ?> </td>
								</tr>
								<tr class="text-gray-900">
									<th>&nbsp Merek :</th>
									<td> <?= $data["merek"] ?> </td>
								</tr>
								<tr class="text-gray-900">
									<th>&nbsp Plat Nomor :</th>
									<td> <?= $data["plat_nomer"] ?> </td>
								</tr>
								<tr class="text-gray-900">
									<th>&nbsp Pemegang :</th>
									<td> <?= $data["pemegang"] ?> </td>
								</tr>

							</table>
						</div>
					</div>
				</div>
			</div>



		</div>
		<?php

			if (empty($data['foto_bon'])) {
				die();
			}


			?>
		<div class="card shadow mb-4">
			<div class="card-body">
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<h3 class="text-gray-900">Cetak Kwitansi</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body pad">
					<?php
						$no   = isset($_GET['no']) ? $_GET['no'] : "";
						$nama  = isset($_GET['nama']) ? $_GET['nama'] : "";
						$pembayaran = isset($_GET['pembayaran']) ? $_GET['pembayaran'] : "";
						$kota  = isset($_GET['kota']) ? $_GET['kota'] : "";
						$tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : "";
						$tgl = explode("-", $tanggal);
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
								<div class="form-group">
									<label class="text-gray-900">No Kwitansi</label>
									<input type="text" name="no" readonly="readonly" class="form-control" value="KW/DNS/<?php echo date('i/s/d/m/y'); ?>">
								</div>
								<div class="form-group">
									<label class="text-gray-900">Diterima Dari</label>
									<input type="text" name="nama" readonly="readonly" value="<?= $data["Nama"] ?>" class="form-control" required>
								</div>
								<div class="form-group">
									<label class="text-gray-900">Nominal Uang</label>
									<input type="text" name="nominal" readonly="readonly" value="<?= $data["total_harga"] ?>" class="form-control" required>
								</div>
								<div class="form-group">
									<label class="text-gray-900">Untuk Pembayaran</label>
									<textarea name="pembayaran" cols="40" class="form-control" rows="3">Pembelian Bahan Bakar Minyak <?= $data["jenis_bahan_bakar"] ?>   </textarea>
								</div>
								<div class="form-group">
									<label class="text-gray-900">Kota </label> <input type="text" name="kota" readonly="readonly" class="form-control" value="Bandung" required>
								</div>
								<div class="form-group">
									<label class="text-gray-900">Tanggal</label>
									<input type="text" name="tanggal" value="<?= $data["Tanggal_Pinjam"] ?>" class="form-control tanggal" required>
								</div>
								<div class="form-group" align="right">
									<input type="submit" value="Buat Kuitansi" class="btn btn-primary">
								</div>
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
								<td valign="top"> : <?php echo $pembayaran; ?></td>
							</tr>
							<tr>
								<td valign="bottom">
									<h3>Rp <?php echo $uang; ?> </h3>
								</td>
								<td valign="top" align="right" height="100"> <?php echo "$kota, $tglbaru"; ?> </td>
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
								return Terbilang($x - 10) . "belas";
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
					</form>
				</div>
			</div>
			<!-- /.box -->


		</div>
		<!-- /.col-->
	</div>
	</table>

	</div>

	</div>


<?php endif; ?>

<?php
include '/../../class/bbm.php'; 
$bbm = new bbm();
$data = null;
if(isset($_GET['id_bbm'])) {
	$data = $bbm->getDetail($_GET['id_bbm']);
}
?>

<p>

	<!--	<a href="index.php?page=bbm_create" class="btn btn-success">Tambah</a>-->
</p>

<p>
	<?php if($data) : ?>
		<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<h4 class="page-title">View Data BBM </h4>
					<div class="row">
						
						<div class="col-md-6">
							<div class="card">

								<div class="card-body">
									<table class="table">
										<tr bgcolor="#ffffff" >
											<th colspan="1">&nbsp Data Peminjam Kendaraan</th>
											<td> </td>
										</tr>
										<tr bgcolor="#ffffff">
											<th>&nbsp Nama Lengkap</th>
											<td> <?= $data["Nama_Peminjam"] ?> </td>
										</tr>
										<tr bgcolor="#ffffff">
											<th>&nbsp Tanggal Pinjam </th>
											<td> <?= $data["Tanggal_Pinjam"] ?> </td>
										</tr>
										<tr bgcolor="#ffffff">
											<th>&nbsp Jumlah BBM</th>
											<td><?= $data["jumlah_bbm"] ?> </td>
										</tr>

										<tr bgcolor="#ffffff">
											<th>&nbsp Harga</th>
											<td><?= $data["harga_satuan"] ?></td>
										</tr>

										<tr bgcolor="#ffffff">
											<th>&nbsp Keterangan</th>
											<td><?= $data["Keterangan"] ?></td>
										</tr>
									</table>
								</div>
							</div>
						</div>

						<div class="card">

						</div>
						<div class="col-md-6">

							<div class="card">

								<div class="card-body">
									<table class="table">
										<tr bgcolor="#ffffff" >
											<th colspan="1">&nbsp Data Kendaraan</th>
											<td> </td>
										</tr>
										<tr bgcolor="#ffffff">
											<th>&nbsp Tipe</th>
											<td> <?= $data["type"] ?> </td>
										</tr>
										<tr bgcolor="#ffffff">
											<th>&nbsp Merek  </th>
											<td> <?= $data["merek"] ?> </td>
										</tr>
										<tr bgcolor="#ffffff">
											<th>&nbsp Plat Nomor  </th>
											<td> <?= $data["plat_nomer"] ?> </td>
										</tr>
									</table>

								</div>

							</div>
						</div>
					</div>

					

				</div>

			</div>





		</div>

	</div>

</div>

<?php endif; ?>
</p>
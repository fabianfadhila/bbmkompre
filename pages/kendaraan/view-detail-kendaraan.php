<?php
include '/../../class/kendaraan.php';
$kendaraan = new kendaraan();
$data = null;
if (isset($_GET['id_kendaraan'])) {
	$data = $kendaraan->getDetail($_GET['id_kendaraan']);
}
?>

<?php if ($data) : ?>
	<div class="container-fluid">
		<h1 class="h3 mb-2 text-gray-800">View Data kendaraan </h1>
		<div class="row">

			<div class="col-md-12">
				<div class="card shadow mb-4">

					<div class="card-body">
						<table class="table">
							<tr class="text-gray-900">
								<th colspan="1">&nbsp Data Kendaraan Kendaraan</th>
								<td> </td>
							</tr>
							<tr class="text-gray-900">
								<th>&nbsp Merek Kendaraan</th>
								<td> <?= $data["merek"] ?> </td>
							</tr>
							<tr class="text-gray-900">
								<th>&nbsp Pemegang </th>
								<td> <?= $data["pemegang"] ?> </td>
							</tr>
							<tr class="text-gray-900">
								<th>&nbsp Plat Nomer</th>
								<td><?= $data["plat_nomer"] ?> </td>
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

<?php endif; ?>
</p>
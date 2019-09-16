<?php
include '/../../class/user.php';
$user = new user();
$data = null;
if (isset($_GET['id_user'])) {
	$data = $user->getDetail($_GET['id_user']);
}
?>

<p>

	<!--	<a href="index.php?page=user_create" class="btn btn-success">Tambah</a>-->
</p>

<p>
	<?php if ($data) : ?>
		<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<br><br><br><br>
					<div class="col-md-12">

						<div class="card">
							<div class="card-body">
								<table class="table">
									<tr class=".bg-gray-100">
										<th colspan="1">&nbsp</th>
										<td>
											<div class="avatar-flip">
												<img src="../assets/images/user/<?= $data['gambar']; ?>" height="150" width="150">

											</div>
										</td>
									</tr>

									<tr class="text-gray-900">
										<th>&nbsp Nama Lengkap :</th>
										<td> <?= $data["username"] ?> </td>

										<!-- <tr class="text-gray-900">
										<th>&nbsp Password : </th>
										<td> ********** </td>
									</tr> -->
									<tr class="text-gray-900">
										<th>&nbsp Email :</th>
										<td><?= $data["email"] ?> </td>
									</tr>

									<tr class="text-gray-900">
										<th>&nbsp No Telepon :</th>
										<td><?= $data["no_telepon"] ?></td>
									</tr>

									<tr class="text-gray-900">
										<th>&nbsp Jabatan :</th>
										<td><?= $data["jabatan"] ?></td>
									</tr>


								</table>

							</div>

						</div>
					</div>
				</div>




			</div>

		</div>





	<?php endif; ?>
</p>
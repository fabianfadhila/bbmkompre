<?php
include '/../../class/home.php';
$home = new home();


?>

<div>
	<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

		</div>

		<section class="content">
			<div class="row">
				<?php
				$result = $home->view_motor();
				while ($data = $result->fetch_assoc()) :
					?>
					<div class="row">
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col-auto">
											<i class="fa fa-motorcycle fa-3x text-black-300"> &nbsp</i>
										</div>
										<div class="col mr-2">
											<div class=" m-0 font-weight-bold text-primary">Jumlah Motor</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['kendaraan'] ?><small> Unit</small></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					<!-- /.col -->
					<?php
					$result = $home->view_mobil();
					while ($data = $result->fetch_assoc()) :
						?>

						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col-auto">
											<i class="fa fa-car fa-3x text-black-300"> &nbsp </i>
										</div>
										<div class="col mr-2">
											<div class=" m-0 font-weight-bold text-primary">Jumlah Mobil</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['kendaraan'] ?> <small> Unit</small></div>
										</div>

									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>

					<!-- fix for small devices only -->
					<div class="clearfix visible-sm-block"></div>
					<?php
					$result = $home->view_bbm();
					while ($data = $result->fetch_assoc()) :
						?>
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col-auto">
											<i class="fas fa-gas-pump fa-3x text-black-300"> &nbsp </i>
										</div>
										<div class="col mr-2">
											<div class=" m-0 font-weight-bold text-primary">Jumlah BBM Tercatat</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['bbm'] ?> <small>Data</small></div>
										</div>

									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					<!-- /.col -->
					<?php
					$result = $home->view_total();
					while ($data = $result->fetch_assoc()) :
						?>
						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col-auto">
											<i class="fas fa-money-check-alt fa-3x text-black-300"> &nbsp </i>
										</div>
										<div class="col mr-2">
											<div class=" m-0 font-weight-bold text-primary">Jumlah Pengeluaran</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?php echo number_format($data['harga']) ?></div>
										</div>

									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>

					<!-- /.col -->
					<?php
					$curl = curl_init();
					$token = "SPecksLIAmkBVAWsWQkk9hUBTOg0sxV2wVtu9WUavMVzKiXXFOMGKSjZGnfXj74I";
					$data = [
						'phone' => '082129634699',
						'caption' => 'ini sepatu', // can be null
						'image' => 'https://p7.hiclipart.com/preview/238/697/182/nike-air-max-sneakers-air-jordan-shoe-clip-art-basketball-shoes.jpg',
					];

					curl_setopt(
						$curl,
						CURLOPT_HTTPHEADER,
						array(
							"Authorization: $token",
						)
					);
					curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
					curl_setopt($curl, CURLOPT_URL, "https://wablas.com/api/send-image");
					curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
					curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
					$result = curl_exec($curl);
					curl_close($curl);

					echo "<pre>";
					// print_r($result); 	

					?>
					</div>
		</section>
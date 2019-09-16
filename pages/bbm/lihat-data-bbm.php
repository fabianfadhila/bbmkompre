<?php
include '/../../class/bbm.php';
$bbm = new bbm();
$no = 0;
?>

<!-- Main content -->



<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Data BBM</h1>
  <!-- /.box-header -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="index1.php?page=input-data-bbm" class="btn btn-primary"> Tambah </a>
    </div>
    <div class="card-body">
      <div class="box-body">
        <table id="myTable" class="table table-bordered table-striped">
          <thead>
            <tr class="text-gray-900">
              <th>No</th>
              <th>Nama Peminjam</th>
              <th>Tgl Pinjam</th>
              <th>Jumlah BBM</th>
              <th>Total Harga</th>
              <th>Kendaraan</th>
              <th>
                <center>Action</center>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $result = $bbm->view_bbm();
            while ($data = $result->fetch_assoc()) :
              ?>

              <?php $no++; ?>
              <tr class="text-gray-900">
                <td><?php echo $no; ?></td>
                <td width="20%"><?php echo $data['Nama'] ?></td>
                <td><?php echo $data['Tanggal_Pinjam'] ?></td>
                <td><?php echo $data['jenis_bahan_bakar'] ?> : <br> ( <?php echo $data['jumlah_bbm'] ?> - Liter )</td>
                <td><?php echo number_format($data['total_harga'])  ?></td>
                <td>
                  <?php echo $data['type'] ?> - <?php echo $data['merek'] ?> -<br> ( <?php echo $data['plat_nomer'] ?>) &nbsp;
                </td>


                <td align="center">
                  <a href="index1.php?page=view-detail-bbm&id_bbm=<?php echo $data['id_bbm']; ?>"><i class="fa fa-eye fa-lg" alt='Lihat Data'></i></a>&nbsp; - &nbsp;
                  <a href='index1.php?page=update-bbm&id_bbm=<?php echo $data['id_bbm']; ?>'><i class="fa fa-edit fa-lg" alt='Lihat Data'></i></a>&nbsp; - &nbsp;
                  <a href="index1.php?page=delete-bbm&id_bbm=<?php echo $data['id_bbm']; ?>" onclick="if (!confirm(&quot;Apa Anda Yakin Ingin Menghapus Data Ini ?&quot;)) {return false;}"><i class="fa fa-trash fa-lg" alt='Delete'></i></a>
                </td>

              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

<!-- /.content -->

<!-- /.content-wrapper -->
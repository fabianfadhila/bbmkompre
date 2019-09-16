<?php
include '/../../class/kendaraan.php';
$kendaraan = new kendaraan();
$no = 0;
?>

<!-- Main content -->
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Data Kendaraan</h1>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="index1.php?page=input-data-kendaraan" class="btn btn-primary"> Tambah </a>
    </div>
    <div class="card-body">
      <div class="box-body">
        <table id="myTable" class="table table-bordered table-striped">
          <thead>
            <tr class="text-gray-900">
              <th>No</th>
              <th>Merek</th>
              <th>Pemegang</th>
              <th>Plat Nomer</th>
              <th>Type</th>
              <th>
                <center>Action</center>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $result = $kendaraan->view_kendaraan();
            while ($data = $result->fetch_assoc()) :
              ?>

              <?php $no++; ?>
              <tr class="text-gray-900">
                <td><?php echo $no; ?></td>
                <td><?php echo $data['merek'] ?></td>
                <td><?php echo $data['pemegang'] ?></td>
                <td><?php echo $data['plat_nomer'] ?></td>
                <td><?php echo $data['type'] ?></td>


                <td align="center">
                  <a href="index1.php?page=view-detail-kendaraan&id_kendaraan=<?php echo $data['id_kendaraan']; ?>"><i class="fa fa-eye fa-lg" alt='Lihat Data'></i></a>&nbsp; - &nbsp;
                  <a href='index1.php?page=update-data-kendaraan&id_kendaraan=<?php echo $data['id_kendaraan']; ?>'><i class="fa fa-edit fa-lg" alt='Lihat Data'></i></a>&nbsp; - &nbsp;

                  <a href="index1.php?page=delete-kendaraan&id_kendaraan=<?php echo $data['id_kendaraan']; ?>" onclick="if (!confirm(&quot;Apa kamu yakin ingin menghapus data ini ?&quot;)) {return false;}"><i class="fa fa-trash fa-lg" alt='Delete'></i></a>
                </td>

              </tr>
            <?php endwhile; ?>
          </tbody>
          <tfoot>
            <th>No</th>
            <th>Merek</th>
            <th>Pemegang</th>
            <th>Plat Nomer</th>
            <th>Type</th>
            <th>
              <center>Action</center>
            </th>
            </tr>

          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->

<!-- /.content-wrapper -->
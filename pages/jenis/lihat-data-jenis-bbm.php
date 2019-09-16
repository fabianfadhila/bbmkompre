<?php
include '/../../class/jenis_bbm.php';
$jenis_bbm = new jenis_bbm();
$no = 0;
?>

<!-- Main content -->


<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-900">Data Jenis Bahan Bakar Minyak</h1>
  <div class=" card shadow mb-4">
    <div class="card-header py-3">
      <a href="index1.php?page=input-data-jenis-bbm" class="btn btn-primary"> Tambah </a>
    </div>
    <div class="card-body">
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr class="text-gray-900">
              <th>No</th>
              <th>Nama Jenis BBM</th>
              <th>Harga BBM</th>
              <th>
                <center>Action</center>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $result = $jenis_bbm->view_jenis();
            while ($data = $result->fetch_assoc()) :
              ?>

              <?php $no++; ?>
              <tr class="text-gray-900">
                <td><?php echo $no; ?></td>
                <td><?php echo $data['jenis_bahan_bakar'] ?></td>
                <td><?php echo number_format($data['harga'])  ?></td>

                <td align="center">
                  <a href='index1.php?page=update-jenis-bbm&id_jenis_bbm=<?php echo $data['id_jenis_bbm']; ?>'><i class="fa fa-edit fa-lg" alt='Lihat Data'></i></a>&nbsp; - &nbsp;
                  <a href="index1.php?page=delete-jenis&id_jenis_bbm=<?php echo $data['id_jenis_bbm']; ?>" onclick="if 
                     (!confirm(&quot;Apa kamu yakin ingin menghapus data ini ?&quot;)) {return false;}"><i class="fa fa-trash fa-lg" alt='Delete'></i></a>
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
</section>
<!-- /.content -->

<!-- /.content-wrapper -->
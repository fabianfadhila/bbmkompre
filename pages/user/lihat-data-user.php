<?php
include '/../../class/user.php';
$user = new user();
$no = 0;
?>

<!-- Main content -->

<div class="container-fluid">
  <h3 class="box-title">Data user</h3>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="index1.php?page=input-data-user" class="btn btn-primary"> Tambah </a>
    </div>
    <div class="card-body">
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr class="text-gray-900">
              <th>No</th>
              <th>Nama User</th>
              <th>Email</th>
              <th>Jabatan</th>
              <th>Telepon</th>
              <th>
                <center>Action</center>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $result = $user->view_user();
            while ($data = $result->fetch_assoc()) :
              ?>

              <?php $no++; ?>
              <tr class="text-gray-900">
                <td><?php echo $no; ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['jabatan'] ?></td>
                <td><?php echo $data['no_telepon'] ?></td>


                <td align="center">
                  <a href="index1.php?page=view-detail-user&id_user=<?php echo $data['id_user']; ?>"><i class="fa fa-eye fa-lg" alt='Lihat Data'></i></a>&nbsp; - &nbsp;
                  <a href='index1.php?page=update-user&id_user=<?php echo $data['id_user']; ?>'><i class="fa fa-edit fa-lg" alt='Lihat Data'></i></a>&nbsp; - &nbsp;
                  <a href="index1.php?page=delete-user&id_user=<?php echo $data['id_user']; ?>" onclick="if (!confirm(&quot;Apa kamu yakin ingin menghapus data ini ?&quot;)) {return false;}"><i class="fa fa-trash fa-lg" alt='Delete'></i></a>
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

<?php
include '/../../class/user.php'; 
$user = new user();
$data = null;
if(isset($_GET['id_user'])) {
  $data = $user->getDetail($_GET['id_user']);
}
?>
<?php if($data) : ?>
 <section class="content">
   <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title">Update Data user
            <small></small>
          </h3>
          <!-- tools box -->
          <div class="pull-right box-tools">
            <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
            title="Collapse">
            <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
            title="Remove">
            <i class="fa fa-times"></i></button>
          </div>
          <!-- /. tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body pad">
          <form action="index.php?page=proses-edit-user" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" value="<?= $data["id_user"] ?>" name="id_user" >
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" class="form-control" value="<?= $data["username"] ?>" name="username" placeholder="Input Nama Lengkap" required="Data">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" value="<?= $data["email"] ?>" placeholder="Input Email" name="email" required="email">
            </div>
           

         
         <div class="form-group">
          <label>Jabatan</label>
          <input type="text" class="form-control" name="jabatan"  value="<?= $data["jabatan"] ?>" id="nm"  " placeholder="Harga / Liter" required="jabatan">
        </div>           
        <div class="form-group">
          <label>Telepon</label>
          <input type="text" class="form-control" value="<?= $data["no_telepon"] ?>" name="no_telepon" id="txt2"placeholder="Jumlah Liter user" required="no_telepon">
        </div>
        <div class="form-group">
          <label>Password Lama</label>
          <input type="text" class="form-control" name="password" value="<?= $data["password"] ?>" readonly="true" id="txt3" placeholder="Total password" required="email">
        </div>
        <div class="form-group">
          <label>Password Baru</label>
          <input type="text" class="form-control" name="password" value="" id="txt3" placeholder="Total password" required="email">
        </div>     
        <div class="form-group">
          <label>Foto</label>
          <input type="file" class="form-control" name="gambar" value="" id="txt3" placeholder="Gambar" required="gambar">
        </div>     
            
       
        <div class="modal-footer">
          <button type="Reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
          <input type="submit" class="btn btn-primary"  value="Simpan" name="Simpan">
        </div>
      </form>
    </div>
  </div>
  <!-- /.box -->


</div>
<!-- /.col-->
</div>

</section>
<?php endif; ?>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>


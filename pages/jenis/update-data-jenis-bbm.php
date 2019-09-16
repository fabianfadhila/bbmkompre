<?php
include '/../../class/jenis_bbm.php';
$jenis_bbm = new jenis_bbm();
$data = null;
if (isset($_GET['id_jenis_bbm'])) {
  $data = $jenis_bbm->getDetail($_GET['id_jenis_bbm']);
}
?>
<?php if ($data) : ?>
  <div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Update Data Jenis BBM </h1>
    <!-- tools box -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
      </div>
      <div class="card-body">
        <div class="box-body">
          <!-- /. tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body pad">
          <form action="index1.php?page=proses-edit-jenis" method="POST">
            <input type="hidden" class="form-control" value="<?= $data["id_jenis_bbm"] ?>" name="id_jenis_bbm">
            <div class="form-group">
              <label class="text-gray-900">Jenis Bahan Bakar</label>
              <input type="text" class="form-control" value="<?= $data["jenis_bahan_bakar"] ?>" name="jenis_bahan_bakar" placeholder="Input Nama Peminjam" required="Data">
            </div>
            <div class="form-group">
              <label class="text-gray-900"> Harga / Liter</label>
              <input type="text" class="form-control" value="<?= $data["harga"] ?>" placeholder="Pemegang jenis" name="harga" required="pemegang">
            </div>
            <div class="modal-footer">
              <button type="Reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
              <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
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
  $(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
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
    <h1 class="h3 mb-2 text-gray-800">Update Data Kendaran </h1>
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
          <form action="index1.php?page=proses-edit-kendaraan" method="POST">
            <input type="hidden" class="form-control" value="<?= $data["id_kendaraan"] ?>" name="id_kendaraan">
            <div class="form-group">
              <label class="text-gray-900">Merek Kendaraan</label>
              <input type="text" class="form-control" value="<?= $data["merek"] ?>" name="merek" placeholder="Input Nama Peminjam" required="Data">
            </div>
            <div class="form-group">
              <label class="text-gray-900">Pemegang Kendaraan</label>
              <input type="text" class="form-control" value="<?= $data["pemegang"] ?>" placeholder="Pemegang Kendaraan" name="pemegang" required="pemegang">
            </div>
            <div class="form-group">
              <label class="text-gray-900">Plat Nomer</label>
              <input type="text" class="form-control" value="<?= $data["plat_nomer"] ?>" placeholder="Pemegang Kendaraan" name="plat_nomer" required="pemegang">
            </div>
            <div class="form-group">
              <label class="text-gray-900">Pilih Tipe Kendaraan</label>

              <select name="type" class="form-control">
                <?php if ($data["type"] == "Mobil") {
                    $l = "selected=selected";
                  }
                  if ($data["type"] == "Motor") {
                    $x = "selected=selected";
                  } ?>
                <option value="Mobil" <?= $l ?>>Mobil</option>
                <option value="Motor" <?= $x ?>>Motor</option>
              </select>
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
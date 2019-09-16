<?php
include '/../../class/bbm.php';
$bbm = new bbm();
$data = null;
if (isset($_GET['id_bbm'])) {
  $data = $bbm->getDetail($_GET['id_bbm']);
}
// echo "<pre>";
// print_r($data);
// echo "</pre>";

?>
<?php if ($data) : ?>

  <div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Update Data BBM </h1>
    <!-- tools box -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
      </div>
      <div class="card-body">
        <div class="box-body">
          <!-- /.box-header -->
          <div class="box-body pad">
            <form action="index1.php?page=proses-edit-bbm" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" value="<?= $data["id_bbm"] ?>" name="id_bbm">
              <div class="form-group">
                <label class="text-gray-900">Nama Peminjaman</label>
                <input type="text" class="form-control " readonly="true" value="<?= $data["Nama"] ?>" placeholder="Input Tanggal Peminjam" name="" required="Tanggal Peminjaman">
              </div>
          </div>
          <div class="form-group">
            <label class="text-gray-900">Tanggal Peminjaman</label>
            <input type="text" class="form-control tanggal" value="<?= $data["Tanggal_Pinjam"] ?>" placeholder="Input Tanggal Peminjam" name="Tanggal_Pinjam" required="Tanggal Peminjaman">
          </div>
          <div class="form-group">
            <label class="text-gray-900">Pilih Kendaraan</label>
            <input type="text" class="form-control " readonly="true" value="<?= $data["merek"] ?>" placeholder="Input Tanggal Peminjam" name="" required="Tanggal Peminjaman">

          </div>
          <div class="form-group">
            <label class="text-gray-900">Jenis BBM</label>
            <select required="true" class="form-control input-pill" name="id_jenis_bbm" value="<?= $data["jenis_bahan_bakar"] ?>" id="jenis_bahan_bakar" onchange="changeValue(this.value)">

              <?php
                $result = $bbm->getJenis_BBM();
                $jsArray = "var dtMhs = new Array();\n";
                while ($row = $result->fetch_assoc()) {
                  if ($row["id_jenis_bbm"] == $data[id_jenis_bbm]) {
                    echo '<option value="' . $row['id_jenis_bbm'] . '" selected>' . $row['jenis_bahan_bakar'] . '</option>';
                    $jsArray .= "dtMhs['" . $row['id_jenis_bbm'] . "'] = {harga:'" . addslashes($row['harga']) . "'};\n";
                  } else {
                    echo '<option value="' . $row['id_jenis_bbm'] . '">' . $row['jenis_bahan_bakar'] . '</option>';
                    $jsArray .= "dtMhs['" . $row['id_jenis_bbm'] . "'] = {harga:'" . addslashes($row['harga']) . "'};\n";
                  }
                }

                ?>
            </select>
          </div>
          <div class="form-group">
            <label class="text-gray-900">Harga / Liter</label>
            <input type="text" class="form-control" name="harga_satuan" readonly="true" value="<?= $data["harga_satuan"] ?>" id="nm" onkeyup="sum();" placeholder="Harga / Liter" required="Tanggal Peminjaman">
          </div>
          <div class="form-group">
            <label class="text-gray-900">Jumlah BBM</label>
            <input type="number" class="form-control" value="<?= $data["jumlah_bbm"] ?>" name="jumlah_bbm" id="txt2" onkeyup="sum();" placeholder="Jumlah Liter BBM" required="Tanggal Peminjaman">
          </div>
          <div class="form-group">
            <label class="text-gray-900">Total Harga</label>
            <input type="text" class="form-control" name="total_harga" value="<?= $data["total_harga"] ?>" readonly="true" id="txt3" placeholder="Total Harga" required="Tanggal Peminjaman">
          </div>
          <label class="text-gray-900">Foto Bon Pengisian</label>
          <div class="form-group">
            <div class="form-group" align="center">
              <div class="previewWrapper">
                <img class='img-responsive img-rounded' width='150' height='150' src='../assets/images/img-sc.png' id="output_image" />
                <div id="previews">
                </div>
              </div>
              <div class="uploadBtn">
                <span class="btn btn-primary btn-xs">

                  <span>
                    Max file : 1 MB
                    <input type="file" name="foto_bon" accept="image/*" onchange="preview_image(event)" required>
                  </span>
                </span>
              </div>
            </div>
          </div>
          <label class="text-gray-900">Keterangan</label>
          <textarea id="editor1" name="Keterangan" rows="10" cols="80">
          <?= $data["keterangan"] ?>        
        </textarea>
          <div class="modal-footer">
            <button type="Reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
            <input type="submit" class="btn btn-primary" value="Simpan" name="Simpan">
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
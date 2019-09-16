<?php
include '/../../class/user.php';
$user = new user();
$data = null;
if (isset($_GET['id_user'])) {
  $data = $user->getDetail($_GET['id_user']);
}
?>
<?php if ($data) : ?>

  <div class="container-fluid">
    <h3 class="h3 mb-2 text-gray-800">Update Data User</h3>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
      </div>
      <div class="card-body">
        <div class="box-body">
          <!-- /.box-header -->
          <div class="box-body pad">
            <form action="index1.php?page=proses-edit-user" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" value="<?= $data["id_user"] ?>" name="id_user">
              <div class="form-group">
                <label>Update Nama Lengkap</label>
                <input type="text" class="form-control" value="<?= $data["username"] ?>" name="username" placeholder="Input Nama Peminjam" required="username">
              </div>
              <div class="form-group">
                <label>Update Jabatan</label>
                <input type="text" class="form-control" value="<?= $data["jabatan"] ?>" name="jabatan" placeholder="Input Nama Peminjam" required="jabatan">
              </div>
              <div class="form-group">
                <label>Update Passsword</label>
                <input type="Passsword" class="form-control" value="<?= $data["password"] ?>" placeholder="Input Passswordassword" name="password" required="Passsword">
              </div>
              <div class="form-group">
                <label>Update Email</label>
                <input type="email" class="form-control" placeholder="Input Email" value="<?= $data["email"] ?>" name="email" required="email">
              </div>

              <div class="form-group">
                <label>Update No Telephone</label>
                <input type="text" class="form-control" placeholder="Input Email" value="<?= $data["no_telepon"] ?>" name="no_telepon" required="no_telepon">
              </div>

              <label class="text-gray-900">Foto</label>
              <div class="form-group">
                <div class="form-group" align="center">

                  <div class="previewWrapper">

                    <img class='img-responsive img-rounded' width='250' height='350' src='assets/images/user/<?= $data['gambar']; ?>' id="output_image" />
                    <div id="previews">

                    </div>
                  </div>

                  <div class="uploadBtn">
                    <span class="btn btn-primary btn-xs">

                      <span>
                        Max file : 1 MB
                        <input type="text" name="gambar" value="<?= $data["gambar"] ?>">
                        <input type="file" name="gambar" accept="image/*" onchange="preview_image(event)">
                      </span>
                    </span>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="Reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
        <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
      </div>
    </div>
  </div>
  </section>
  </form>
  <script type='text/javascript'>
    function preview_image(event) {
      var reader = new FileReader();
      reader.onload = function() {
        var output = document.getElementById('output_image');
        output.src = reader.result;
      }
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>


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
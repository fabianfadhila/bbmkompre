   <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header">
           <div class="box-header with-border">
            <h3 class="box-title">Edit Data Tentang Kami  </h3>
          </div>
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
          <form>
            <label>Deskripsi Tentang Kami</label>
            <textarea id="editor1" name="editor1" rows="10" cols="80">

            </textarea>
            <input type="text" class="form-control" placeholder="tag berita"><br>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary"  value="Post Berita" name="loginP">
            </div>
          </form>
        </div>
      </div>
      <!-- /.box -->


    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
</section><script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>


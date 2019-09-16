<div class="container-fluid">
	<h1 class="h3 mb-2 text-gray-800">Form Laporan</h1>
</div>
<!-- /.box-header -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
	</div>
	<div class="card-body">
		<div class="box-body">
		</div>
		<div class="box-body pad">
			<form action="../pages/laporan/bbm/laporan.php" target="_blank" method="POST">
				<div class="form-group">
					<label>Dari</label>
					<select class="form-control chosen-select" name="bulan" required>
						<option value="" disabled="" selected>-Pilih Bulan-</option>
						<?php //untuk mengambil data tkk di tabel 
						for ($i = 1; $i <= 12; $i++) { ?>
							<option value="<?php echo $i ?>" <?php if (isset($_POST['bulan'])) {
																		if ($_POST['bulan'] == $i) {
																			echo "selected";
																		}
																	} ?> required><?php echo date('F', mktime(0, 0, 0, $i, 10, date("Y"))); ?></option>
						<?php }
						?>
					</select>

				</div>

				<div class="modal-footer">
					<button type="Reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
					<input type="submit" class="btn btn-primary" value="Lihat" name="Simpan">
				</div>
			</form>
		</div>
	</div>
	<!-- /.box -->


</div>
<!-- /.col-->
</div>
<!-- ./row -->
</section>
<script>
	$(function() {
		// Replace the <textarea id="editor1"> with a CKEditor
		// instance, using default configuration.
		CKEDITOR.replace('editor1')
		//bootstrap WYSIHTML5 - text editor
		$('.textarea').wysihtml5()
	})
</script>
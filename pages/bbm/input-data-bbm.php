   <?php
    include "/../../class/bbm.php";
    $bbm = new bbm();
    ?>

   <div class="container-fluid">
     <h1 class="h3 mb-2 text-gray-800">Form Input Data BBM</h1>
     <!-- tools box -->
     <div class="card shadow mb-4">
       <div class="card-header py-3">
       </div>
       <div class="card-body">
         <div class="box-body">
           <!-- /.box-header -->
           <div class="box-body pad">
             <form action="index1.php?page=proses-simpan" method="POST">
               <div class="form-group">
                 <label class="text-gray-900">Input Nama Peminjam</label>
                 <select class="form-control input-pill" name="Nama_Peminjam">
                   <option>--- Pilih Pegawai ---</option>
                   <?php
                    $result = $bbm->getPegawai();
                    while ($data = $result->fetch_assoc()) {
                      echo "
                    <option value=$data[PegawaiId]>
                     $data[Nama] - $data[NIP]</option>";
                    }
                    ?>
                 </select>
               </div>
               <div class="form-group">
                 <label class="text-gray-900">Tanggal Peminjaman</label>
                 <input type="text" class="form-control tanggal" placeholder="Input Tanggal Peminjam" name="Tanggal_Pinjam" required="Tanggal Peminjaman">
               </div>
               <div class="form-group">
                 <label class="text-gray-900">Pilih Kendaraan</label>
                 <select class="form-control input-pill" name="id_kendaraan">
                   <option>--- Pilih Kendaraan ---</option>
                   <?php
                    $result = $bbm->getKendaraan();
                    while ($data = $result->fetch_assoc()) {
                      echo "
                    <option name='id_kendaraan' value=$data[id_kendaraan]>
                    $data[type] - $data[merek] - $data[pemegang]- $data[plat_nomer]</option>";
                    }
                    ?>
                 </select>
               </div>
               <div class="form-group">
                 <label class="text-gray-900">Jenis BBM</label>
                 <select class="form-control input-pill" name="id_jenis_bbm" id="jenis_bahan_bakar" onchange="changeValue(this.value)">
                   <option>--- Pilih Bahan Bakar ---</option>
                   <?php
                    $result = $bbm->getJenis_BBM();
                    $jsArray = "var dtBBM = new Array();\n";
                    while ($row = $result->fetch_assoc()) {
                      echo '<option value="' . $row['id_jenis_bbm'] . '">' . $row['jenis_bahan_bakar'] . '</option>';
                      $jsArray .= "dtBBM['" . $row['id_jenis_bbm'] . "'] = {harga:'" . addslashes($row['harga']) . "'};\n";
                    }

                    ?>
                 </select>
               </div>
               <!-- <div class="form-group">
                 <label class="text-gray-900">Harga / Liter</label>
                 <input type="text" class="form-control" name="harga_satuan" readonly="true" id="nm" onkeyup="sum();" placeholder="Harga / Liter" required="Tanggal Peminjaman">
               </div>
               <div class="form-group">
                 <label class="text-gray-900">Jumlah BBM / Liter</label>
                 <input type="number" class="form-control" name="jumlah_bbm" id="txt2" onkeyup="sum();" placeholder="Jumlah Liter BBM" required="Tanggal Peminjaman">
               </div>
               <div class="form-group">
                 <label class="text-gray-900">Total Harga</label>
                 <input type="text" class="form-control" name="total_harga" readonly="true" id="txt3" placeholder="Total Harga" required="Tanggal Peminjaman">
               </div> -->
               <!--<div class="form-group">
                 <label class="text-gray-900">Jumlah Strip Akhir BBM</label>
                 <input type="numeric" class="form-control tanggal" placeholder="Input Tanggal Peminjam" name="Tanggal_Pinjam" required="Tanggal Peminjaman">
               </div>-->
               <label class="text-gray-900">Keterangan</label>
               <textarea id="editor1" name="Keterangan" required rows="10" cols="80" placeholder="Keterangan">
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
     <script type="text/javascript">
       <?php echo $jsArray; ?>

       function changeValue(jenis_bahan_bakar) {
         document.getElementById('nm').value = dtBBM[jenis_bahan_bakar].harga;
       };

       function sum() {
         var txtFirstNumberValue = document.getElementById('nm').value;
         var txtSecondNumberValue = document.getElementById('txt2').value;
         var result = parseFloat(txtFirstNumberValue) * parseFloat(txtSecondNumberValue);
         if (!isNaN(result)) {
           document.getElementById('txt3').value = result;
         }
       };
     </script>
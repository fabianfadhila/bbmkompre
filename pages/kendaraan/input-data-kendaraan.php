   <?php
    include "/../../class/bbm.php";
    $bbm = new bbm();
    ?>


   <div class="container-fluid">
     <h1 class="h3 mb-2 text-gray-800">Form Input Data Kendaraan</h1>
     <div class="card shadow mb-4">
       <div class="card-header py-3">
       </div>
       <div class="card-body">
         <div class="box-body">

           <!-- /.box-header -->
           <div class="box-body pad">
             <form action="index1.php?page=proses-simpan-kendaraan" method="POST">
               <div class="form-group">
                 <label class="text-gray-900">Input Merek Kendaraan</label>
                 <input type="text" class="form-control" name="merek" placeholder="Input Nama Merek Kendaraan..." required="Data">
               </div>
               <div class="form-group">
                 <label class="text-gray-900">Input Pemegang Kendaraan</label>
                 <input type="text" class="form-control" placeholder="Input Nama Pemegang Kendaraan..." name="pemegang" required="true">
               </div>
               <div class="form-group">
                 <label class="text-gray-900">Plat Nomer Kendaraan</label>
                 <input type="text" class="form-control" name="plat_nomer" placeholder="Plat Nomer Kendaraan..." required="true">
               </div>
               <div class="form-group">
                 <label class="text-gray-900">Type Kendaraan</label>
                 <select class="form-control" name="type">
                   <option value="">--Pilih Type Kendaraan--</option>
                   <option value="Motor">Motor</option>
                   <option class="Mobik">Mobil</option>
                 </select>
               </div>


               <div class="coverWrapper" align="center">
                 <div class="previewWrapper">

                   <div class="modal-footer">
                     <button type="Reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                     <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
                   </div>
             </form>
           </div>
         </div>
       </div>
     </div>
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

     <script type="text/javascript">
       <?php echo $jsArray; ?>

       function changeValue(jenis_bahan_bakar) {
         document.getElementById('nm').value = dtMhs[jenis_bahan_bakar].harga;
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
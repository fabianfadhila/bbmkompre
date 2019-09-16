   <?php
    include "/../../class/bbm.php";
    $bbm = new bbm();
    ?>


   <div class="container-fluid">
     <h1 class="h3 mb-2 text-gray-800">Form Input Data Jenis BBM</h1>
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
           <form action="index1.php?page=proses-simpan-jenis-bbm" method="POST">
             <div class="form-group">
               <label class="text-gray-900">Nama Bahan Bakar</label>
               <input type="text" class="form-control" name="jenis_bahan_bakar" placeholder="Nama Bahan Bakar..." required="Data">
             </div>
             <div class="form-group">
               <label class="text-gray-900">Harga Bahan Bakar</label>
               <input type="Number" class="form-control" placeholder="Harga Bahan Bakar..." name="harga" required="Tanggal Peminjaman">
             </div>
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
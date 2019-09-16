   <?php
    include "/../../class/bbm.php";
    $bbm = new bbm();
    ?>

   <div class="container-fluid">
     <h3 class="h3 mb-2 text-gray-800">Form Input Data User </h3>
     <div class="card shadow mb-4">
       <div class="card-header py-3">
       </div>
       <div class="card-body">
         <div class="box-body">
           <!-- /.box-header -->
           <div class="box-body pad">
             <form action="index1.php?page=proses-simpan-user" method="POST" enctype="multipart/form-data">
               <div class="form-group">
                 <label class="text-gray-900">Input Nama Lengkap</label>
                 <input type="text" class="form-control" name="username" placeholder="Input Nama Lengkap.." required="username">
               </div>
               <div class="form-group">
                 <label class="text-gray-900">Input Jabatan</label>
                 <input type="text" class="form-control" name="jabatan" placeholder="Input Jabatan.." required="jabatan">
               </div>
               <div class="form-group">
                 <label class="text-gray-900">Passsword</label>
                 <input type="password" class="form-control" placeholder="Input Passsword" name="password" required="Passsword">
               </div>
               <div class="form-group">
                 <label class="text-gray-900">Email</label>
                 <input type="email" class="form-control" placeholder="Input Email" name="email" required="email">
               </div>

               <div class="form-group">
                 <label class="text-gray-900">No Telephone</label>
                 <input type="text" class="form-control" placeholder="Input Email" name="no_telepon" required="no_telepon">
               </div>

               <label class="text-gray-900">Foto</label>
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
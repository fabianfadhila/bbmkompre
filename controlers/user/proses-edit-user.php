
<?php
include "/../../class/user.php";
$user = new user();

$user->id_user         = $_POST['id_user'];
$user->username        = $_POST['username'];
$user->password        = $_POST['password'];
$user->email           = $_POST['email'];
$user->no_telepon      = $_POST['no_telepon'];
$user->jabatan         = $_POST['jabatan'];
$namafile = $_FILES['gambar']['name'];
$user->gambar = $namafile;

$target_dir = "../assets/images/user/";
$target_file = $target_dir . basename($namafile);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false) {
        echo "";
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "
<script type='text/javascript'>
setTimeout(function () {    
   swal({
    title: 'Data Gagal Tersimpan',
    text:  'Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.',
    icon: 'success',
    timer: 5000,
    showConfirmButton: true
    });     
    },10);  
    window.setTimeout(function(){ 
       document.location.href='index1.php?page=input-data-user';
       } ,3000);    
       </script>";

    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) { } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


$error = $user->update_user();

if (!$error) {
    echo "
    <script type='text/javascript'>
    setTimeout(function () {    
       swal({
        title: 'Data Tersimpan',
        text:  'Sukses Mencatat Data user',
        icon: 'success',
        timer: 5000,
        showConfirmButton: true
        });     
        },10);  
        window.setTimeout(function(){ 
           document.location.href='index1.php?page=Lihat-data-user';
           } ,3000);    
           </script>";
} else {
    echo "$error";
}
?>

        <?php
        include "koneksi.php";
        die();
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $cek = mysql_num_rows(mysql_query("SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'"));
            $data = mysql_fetch_array(mysql_query("SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'"));
            die();
            if ($cek > 0) {

                session_start();
                $_SESSION['id_user'] = $data['id_user'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['password'] = $data['password'];


                echo "
                    <script type='text/javascript'>
                    setTimeout(function () {    
                        swal({
                            title: 'Login Berhasil',
                            text:  'Selamat Datang ',
                            icon: 'success',
                            timer: 5000,
                            showConfirmButton: true
                            });     
                            },10);  
                            window.setTimeout(function(){ 
                                document.location.href='admin/index1.php';
                                } ,3000);   
                                </script>";
            } else {
                echo "
                                <script type='text/javascript'>
                                setTimeout(function () {    
                                    swal({
                                        title: 'Anda Tidak Bisa Login',
                                        text:  'Cek Username dan password',
                                        icon: 'error',
                                        timer: 5000,
                                        showConfirmButton: true
                                        });     
                                        },10);  
                                        window.setTimeout(function(){ 
                                            document.location.href='index1.php';
                                            } ,3000);   
                                            </script>";
            }
        }
        ?>


                                    
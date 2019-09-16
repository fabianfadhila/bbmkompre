        <?php
        include "koneksi.php";
        IF(ISSET($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $cek = mysql_num_rows(mysql_query("SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'"));
            $data = mysql_fetch_array(mysql_query("SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'"));

            if(isset($_POST['g-recaptcha-response'])){
                $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
                $response = @file_get_contents($api_url);
                $data = json_decode($response, true);

                IF($cek > 0)
                {

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
                                document.location.href='admin/';
                                } ,3000);   
                                </script>";


                            }else{
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
                                            document.location.href='index.php';
                                            } ,3000);   
                                            </script>";
                                        }
                                    }
                                }
                                    ?>


                                    
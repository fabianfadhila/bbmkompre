 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <?php
	include "Database.php";


	class user
	{

		public $email;
		public $password;
		public $jabatan;
		public $gambar;
		public $no_telepon;
		public $id_user;

		public function view_user()
		{
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "SELECT * FROM tbl_user";
			$data = $dbConnect->query($sql);
			$dbConnect = $db->close();
			return $data;
		}
		public function getLogin()
		{
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "SELECT * FROM tbl_user WHERE email = '{$this->email}' AND password ='{$this->password}'";
			$data = $dbConnect->query($sql);
			$dbConnect = $db->close();
			return $data;
		}

		public function cek_Login()
		{

			$db = new Database();
			$dbConnect = $db->connect();
			$sql1 = "SELECT * from tbl_user where email = '{$this->email}' && password ='{$this->password}'";
			$sql1 = $dbConnect->query($sql1);

			$data = $sql1->fetch_assoc();
			$email = $data['email'];
			$username = $data['username'];
			$jabatan = $data['jabatan'];
			$gambar = $data['gambar'];
			$no_telepon = $data['no_telepon'];
			$id_user = $data['id_user'];


			if ($email == $this->email) {

				session_start();
				$_SESSION['email'] = $email;
				$_SESSION['username'] = $username;
				$_SESSION['no_telepon'] = $no_telepon;
				$_SESSION['jabatan'] = $jabatan;
				$_SESSION['gambar'] = $gambar;
				$_SESSION['id_user'] = $id_user;

				header("location:admin/index1.php?page=Home");
			} else {

				//memanggil tampilan create kembali
				echo "<script type='text/javascript'>
 			setTimeout(function () {    
 				swal({
 					title: 'Login Gagal',
 					text:  'Silahkan cek username dan password',
 					icon: 'error',
 					timer: 1500,
 					showCancelButton: false,
 					showConfirmButton: false
 					});     
 					},10);  
 					window.setTimeout(function(){ 
 						document.location.href='index.php';
 						} ,2000);    
 						</script>";
			}
		}


		public function add_user()
		{
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "INSERT INTO tbl_user 
 					(username,password,email,no_telepon,jabatan,gambar) values 
 					('{$this->username}',
 					'{$this->password}',
 					'{$this->email}',
 					'{$this->no_telepon}',
 					'{$this->jabatan}',
 					'{$this->gambar}')";
			$data = $dbConnect->query($sql);
			$error = $dbConnect->error;
			$dbConnect = $db->close();
			return $error;
		}

		public function getDetail($id_user)
		{
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "SELECT * From tbl_user
 					WHERE id_user='{$id_user}'";
			$data = $dbConnect->query($sql);
			$dbConnect = $db->close();
			return $data->fetch_array();
		}


		public function update_user()
		{
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "UPDATE tbl_user SET 
 					username = '{$this->username}',
 					password = '{$this->password}',
 					email = '{$this->email}', 
 					no_telepon = '{$this->no_telepon}', 
 					jabatan = '{$this->jabatan}',
 					gambar = '{$this->gambar}'
 					where id_user = '{$this->id_user}'";
			$data = $dbConnect->query($sql);
			$error = $dbConnect->error;
			$dbConnect = $db->close();
			return $error;
		}

		public function delete_user()
		{
			$db = new Database();
			//membuka koneksi
			$dbConnect = $db->connect();
			//query menyimpan data
			$data = mysqli_query($dbConnect, "DELETE FROM tbl_user WHERE id_user='{$this->id_user}'");
			//eksekusi query diatas
			//menampung error query simpan data
			$error = $dbConnect->error;
			//menutup koneksi
			$dbConnect = $db->close();
			//mengembalikan nilai error
			return $error;
		}
	}
	?>
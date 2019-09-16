<?php
include "Database.php";


class kendaraan {
	
	public $merek;
	public $pemegang;
	public $plat_nomer;
	public $type;

	public function view_kendaraan() {
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT * From view_kendaraan";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data;
	}

	public function add_kendaraan(){
		$db = new Database();
		$dbConnect = $db->connect();
		$sql ="INSERT INTO tbl_kendaraan (merek,pemegang,plat_nomer,type) values 
		('{$this->merek}',
		'{$this->pemegang}',
		'{$this->plat_nomer}',
		'{$this->type}')";
		$data = $dbConnect->query($sql);
		$error = $dbConnect->error;
		$dbConnect = $db->close();
		return $error;
	}
	
	public function getDetail($id_kendaraan){
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT * From tbl_kendaraan
		WHERE id_kendaraan = '{$id_kendaraan}'";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data->fetch_array();
	}


	public function update_kendaraan(){
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "UPDATE tbl_kendaraan SET merek = 
		'{$this->merek}',pemegang = '{$this->pemegang}',plat_nomer = '{$this->plat_nomer}', 
		type = '{$this->type}'
		where id_kendaraan = '{$this->id_kendaraan}'";
		$data = $dbConnect->query($sql);
		$error = $dbConnect->error;
		$dbConnect = $db->close();
		return $error;

	}

	public function delete_kendaraan() {
		$db = new Database();
		//membuka koneksi
		$dbConnect = $db->connect();
		//query menyimpan data
		$data =mysqli_query($dbConnect,"DELETE FROM tbl_kendaraan WHERE id_kendaraan='{$this->id_kendaraan}'");
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
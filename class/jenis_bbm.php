<?php
include "Database.php";


class jenis_bbm
{

	public $jenis_bbm;
	public $harga;

	public function view_jenis()
	{
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT * from tbl_jenis";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data;
	}

	public function add_jenis()
	{
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "INSERT INTO tbl_jenis 
		(jenis_bahan_bakar,harga) values 
		('{$this->jenis_bahan_bakar}',
		'{$this->harga}')";
		$data = $dbConnect->query($sql);
		$error = $dbConnect->error;
		$dbConnect = $db->close();
		return $error;
	}

	public function getDetail($id_jenis_bbm)
	{
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT * From tbl_jenis
		WHERE id_jenis_bbm = '{$id_jenis_bbm}'";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data->fetch_array();
	}

	public function update_jenis_bbm()
	{
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "UPDATE tbl_jenis SET 
		id_jenis_bbm = '{$this->id_jenis_bbm}',
		jenis_bahan_bakar = '{$this->jenis_bahan_bakar}', 
		harga = '{$this->harga}'
		where id_jenis_bbm = '{$this->id_jenis_bbm}'";
		$data = $dbConnect->query($sql);
		$error = $dbConnect->error;
		$dbConnect = $db->close();
		return $error;
	}

	public function delete_jenis()
	{
		$db = new Database();
		//membuka koneksi
		$dbConnect = $db->connect();
		//query menyimpan data
		$data = mysqli_query($dbConnect, "DELETE FROM tbl_jenis WHERE id_jenis_bbm='{$this->id_jenis_bbm}'");
		//eksekusi query diatas
		//menampung error query simpan data
		$error = $dbConnect->error;
		//menutup koneksi
		$dbConnect = $db->close();
		//mengembalikan nilai error
		return $error;
	}
}

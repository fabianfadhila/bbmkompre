<?php
include "Database.php";


class bbm
{

	public $id_bbm;
	public $Nama_Peminjam;
	public $Tanggal_Pinjam;
	public $jumlah_bbm;
	public $harga_satuan;
	public $Keterangan;
	public $total_harga;
	public $type;
	public $merek;
	public $plat_nomer;
	public $jenis_bahan_bakar;
	public $foto_bon;


	public function view_bbm()
	{
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT tbl_bbm.id_bbm,pegawai.Nama , 
		tbl_bbm.Tanggal_Pinjam,
		tbl_kendaraan.merek,
		tbl_kendaraan.plat_nomer,
		tbl_kendaraan.type,
		tbl_kendaraan.pemegang,
		 tbl_bbm.jumlah_bbm,
		 tbl_jenis.jenis_bahan_bakar, 
		 tbl_bbm.total_harga FROM pegawai INNER JOIN tbl_bbm ON pegawai.PegawaiId = tbl_bbm.Nama_Peminjam 
		 INNER JOIN tbl_kendaraan ON tbl_bbm.id_kendaraan = tbl_kendaraan.id_kendaraan INNER JOIN tbl_jenis ON tbl_jenis.id_jenis_bbm = tbl_bbm.id_jenis_bbm";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data;
	}


	public function detail_bbm($id_bbm, $bulan)
	{
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT * FROM tbl_bbm WHERE id_bbm = '{$id_bbm}' and Tanggal_Pinjam = '{$bulan}'";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data->fetch_array();
	}



	public function add_bbm()
	{
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "INSERT INTO tbl_bbm 
		(id_kendaraan,id_jenis_bbm,Nama_Peminjam,Tanggal_Pinjam,jumlah_bbm,harga_satuan,total_harga,Keterangan,foto_bon) values 
		('{$this->id_kendaraan}',
		'{$this->id_jenis_bbm}',
		'{$this->Nama_Peminjam}',
		'{$this->Tanggal_Pinjam}',
		'{$this->jumlah_bbm}',
		'{$this->harga_satuan}',
		'{$this->total_harga}',
		'{$this->Keterangan}',
		'{$this->foto_bon}')";
		$data = $dbConnect->query($sql);
		$error = $dbConnect->error;
		$dbConnect = $db->close();
		return $error;
	}
	public function getJenis_BBM()
	{
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT * FROM view_jenis_bbm";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data;
	}
	public function getKendaraan()
	{
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT * FROM view_kendaraan";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data;
	}
	public function getPegawai()
	{
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT * FROM Pegawai";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data;
	}
	public function getDetail($id_bbm)
	{
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT
		pegawai.Nama, 
		tbl_bbm.id_bbm,
		tbl_bbm.Tanggal_Pinjam,
		tbl_bbm.jumlah_bbm,
		tbl_bbm.harga_satuan,
		tbl_bbm.keterangan,
		tbl_bbm.total_harga,
		tbl_bbm.foto_bon,
		tbl_kendaraan.merek,
		tbl_kendaraan.plat_nomer,
		tbl_kendaraan.pemegang,
		tbl_kendaraan.type, 
		tbl_jenis.jenis_bahan_bakar 
		FROM pegawai INNER JOIN tbl_bbm ON pegawai.PegawaiId = tbl_bbm.Nama_Peminjam 
		INNER JOIN tbl_kendaraan ON tbl_bbm.id_kendaraan = tbl_kendaraan.id_kendaraan 
		INNER JOIN tbl_jenis ON tbl_jenis.id_jenis_bbm = tbl_bbm.id_jenis_bbm WHERE tbl_bbm.id_bbm = '{$id_bbm}'";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data->fetch_array();
	}


	public function update_bbm()
	{
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "UPDATE tbl_bbm SET 
		id_jenis_bbm = '{$this->id_jenis_bbm}',
		Tanggal_Pinjam = '{$this->Tanggal_Pinjam}', 
		jumlah_bbm = '{$this->jumlah_bbm}',
		harga_satuan = '{$this->harga_satuan}',
		total_harga = '{$this->total_harga}', 
		Keterangan = '{$this->Keterangan}',
		foto_bon = '{$this->foto_bon}'
		where id_bbm = '{$this->id_bbm}'";
		$data = $dbConnect->query($sql);
		$error = $dbConnect->error;
		$dbConnect = $db->close();
		return $error;
	}

	public function delete_bbm()
	{
		$db = new Database();
		//membuka koneksi
		$dbConnect = $db->connect();
		//query menyimpan data
		$data = mysqli_query($dbConnect, "DELETE FROM tbl_bbm WHERE id_bbm='{$this->id_bbm}'");
		//eksekusi query diatas
		//menampung error query simpan data
		$error = $dbConnect->error;
		//menutup koneksi
		$dbConnect = $db->close();
		//mengembalikan nilai error
		return $error;
	}
}

<?php
include "Database.php";


class home {

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


	public function view_motor() {
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT COUNT(id_kendaraan) AS kendaraan FROM tbl_kendaraan WHERE TYPE='Motor'";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data;
	}

	public function view_mobil() {
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT COUNT(id_kendaraan) AS kendaraan FROM tbl_kendaraan WHERE TYPE='Mobil'";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data;
	}


	public function view_bbm() {
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT COUNT(id_bbm) AS bbm FROM tbl_bbm";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data;
	}


	public function view_total() {
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT SUM(total_harga) AS harga FROM tbl_bbm";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data;
	}

}
?>
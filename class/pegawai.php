<?php
include "Database.php";


class pegawai
{

	public $Nama;
	public $NIP;


	public function getData()
	{
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT * From Pegawai";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data;
	}
	public function getDetail($PegawaiId)
	{
		$db = new Database();
		$dbConnect = $db->connect();
		$sql = "SELECT * From pegawai
		WHERE PegawaiId = '{$PegawaiId}'";
		$data = $dbConnect->query($sql);
		$dbConnect = $db->close();
		return $data->fetch_array();
	}
}

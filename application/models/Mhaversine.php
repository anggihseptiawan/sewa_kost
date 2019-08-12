<?php

class Mhaversine extends CI_Model
{
	private $table = "kostan";

	public function getKostan($where = array())
	{
		$tipe_kost = !empty($where['tipe_kost']) ? $where['tipe_kost'] : "";
		$tipe_bayar = !empty($where['tipe_bayar_kost']) ? $where['tipe_bayar_kost'] : "";
		$harga_kost = !empty($where['harga_kost']) ? $where['harga_kost'] : "";
		$fasilitas_kost = !empty($where['fasilitas_kost']) ? $where['fasilitas_kost'] : "";

		if ($tipe_kost){
			$this->db->or_where("type_kost", $tipe_kost);
		}

		if ($tipe_bayar)
		{
			$this->db->or_where("type_bayar_kost", $tipe_bayar);
		}

		if ($harga_kost){
			if ($harga_kost == "murah"){
				$this->db->or_where("harga_kost","<=", 300000);
			}elseif ($harga_kost == "sedang"){
				$this->db->or_where("harga_kost BETWEEN 310000 AND 800000");
			}else{
				$this->db->or_where("harga_kost",">=", 810000);
			}
		}
		if ($fasilitas_kost){
			foreach ($fasilitas_kost as $item) {
				$this->db->or_like("fasilitas_kost", $item);
			}
		}
		return $this->db->get("kostan")->result();
	}

	public function getDistanceBetween($latitude1, $longitude1, $latitude2, $longitude2, $unit = 'Mi', $id)
	{
		$theta = $longitude1 - $longitude2;
		$distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta)));
		$distance = acos($distance);
		$distance = rad2deg($distance);
		$distance = $distance * 60 * 1.1515;
		switch ($unit) {
			case 'Mi':
				break;
			case 'Km' :
				$distance = $distance * 1.609344;
		}
		$distance = round($distance, 2);
//		if ($distance <= 5) {
			$this->db->insert("score", array("kostan_id" => $id, "distance" => $distance));
//		}
	}
}

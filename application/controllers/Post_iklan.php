<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_iklan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("MpostIklan", "postiklan");
	}

	public function index()
	{
		$data['title'] = 'Posting iklan';

		$this->load->view('templates/header', $data);
		$this->load->view('post_iklan');
		$this->load->view('templates/footer');
	}

//	public function ulangi()
//	{
//		redirect("post_iklan","refresh");
//	}

	public function post_iklan_kostan()
	{
		$input = $this->input->post();
//		echo "<pre>";
//		print_r($input);
//		echo json_encode($input['fasilitas']);
		$type_kost = $input["type_kost"];
		$nama_kost = $input["nama"];
		$alamat_kost = $input["alamat"];
		$latitude_kost = $input["latitude"];
		$longitude_kost = $input["longitude"];
		$no_telp = $input["no_telp"];
		$harga_sewa = $input["hrg_sewa"];
		$deskripsi = $input["deskripsi"];
		$fasilitas = json_encode($input["fasilitas"]);
		echo $this->session->userdata("email")."ok";
		die();
		$params = array(
			'user_id' => $this->session->userdata('user_id'),
			'nama_kost' => $nama_kost,
			'alamat_kost' => $alamat_kost,
			'type_kost' => $type_kost,
			'type_bayar_kost' => $harga_sewa,
			'fasilitas_kost' => $fasilitas,
			'harga_kost' => $harga_sewa,
			'latitude' => $latitude_kost,
			'longitude' => $longitude_kost,
			'deskripsi_kost' => $deskripsi,
			'created_at' => date("Y-m-d H:i:s")
		);
		$insert = $this->postiklan->post_iklan_kostan($params);;
		if ($insert > 0) {
			$this->session->set_flashdata("msg", "Data kosan berhasil disimpan.");
		} else {
			$this->session->set_flashdata("msg", "Data kosan gagal disimpan.");
		}
		redirect("lists");
	}

}

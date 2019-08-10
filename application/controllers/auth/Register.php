<?php

class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mregister", "register");
	}

	public function index()
	{
		$data['title'] = 'Register';

		$this->load->view('templates/header', $data);
		$this->load->view('auth/register');
		$this->load->view('templates/footer');
	}

	public function register()
	{
		$nama = $this->input->post("nama");
		$email = $this->input->post("email");
		$password = md5($this->input->post("password"));
		$params = array("nama" => $nama, "username" => $email, "password" => $password, "created_at" => date("Y-m-d H:i:s"), "leve1" => 1);
		$where = array("username" => $email);
		$cek = $this->register->cek($where);
		if (empty($cek)) {
			$insert = $this->register->register($params);
			if ($insert > 0){
				echo  json_encode(array('status' => true));
			}else{
				echo  json_encode(array('status' => false));
			}
		}else{
			echo  json_encode(array('status' => false));
		}
	}
}

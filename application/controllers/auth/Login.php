<?php

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mlogin", "login");
	}

	public function index()
	{
		$data['title'] = 'login';

		$this->load->view('templates/header', $data);
		$this->load->view('auth/login');
		$this->load->view('templates/footer');
	}

	public function cek()
	{
		$username = $this->input->post("log_username");
		$password = md5($this->input->post("log_password"));
		$cek = $this->login->cek(array("username" => $username, "password" => $password));
		if (!empty($cek->username)) {
//			$data_session = array("status" => true,"user_id" => $cek->user_id, "email" => $username, "nama" => $cek->nama, "level" => $cek->level);
			$this->session->set_userdata("status",true);
			$this->session->set_userdata("user_id", $cek->user_id);
			$this->session->set_userdata("email", $username);
			$this->session->set_userdata("nama", $cek->nama);
			$this->session->set_userdata("level", $cek->level);

			redirect("profile", "refresh");
		} else {
			redirect("login", "refresh");
		}
	}

	public function out()
	{
//		$this->session->sess_destroy();
		session_destroy();
		redirect("login", 'refresh');
	}
}

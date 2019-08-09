<?php

class MpostIklan extends CI_Model{
	private $table = "kostan";
	public function post_iklan_kostan($params)
	{
		$this->db->insert($this->table,$params);
		return $this->db->affected_rows();
	}

	public function edit_post_iklan_kostan()
	{

	}
}

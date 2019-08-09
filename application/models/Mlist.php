<?php

class Mlist extends CI_Model{
	private $table = "kostan";
	public function getList()
	{
		return $this->db->get($this->table)->result();
	}
}

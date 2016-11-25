<?php

if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');

class M_login extends CI_Model{

	public function __construct(){

 

	parent::__construct();

}

	public function takeUser($username, $password, $access)

{

			$this->db->select('*');

			$this->db->from('ebcadmin');

			$this->db->where('username', $username);

			$this->db->where('password', $password);

			$this->db->where('access', $access);

			$query = $this->db->get();

 

	return $query->num_rows();

}

public function userData($username)

{

		$this->db->select('username');

		$this->db->select('access');

		$this->db->where('username', $username);

		$query = $this->db->get('ebcadmin');

 

return $query->row();

 

}

 

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Users_model extends CI_Model {
	 
	/**
	 * Constructor 
	 *
	 */
	 
	function __Construct()
    {
        parent::__Construct();
    }
	
	
	// --------------------------------------------------------------------
		
	/**
	 * Get Users
	 *
	 * @access	private
	 * @param	array	conditions to fetch data
	 * @return	object	object with result set
	 */
	 function getUsers($conditions=array(),$fields='')
	 {
	 	
		parent::__construct(); 
		
		
		if(count($conditions)>0)		
	 		$this->db->where($conditions);
			
		$this->db->from('ci_users');

		$this->db->order_by("ci_users.user_id", "asc");

		
		if($fields!='')
				$this->db->select($fields);
		else 		
	 		$this->db->select('ci_users.user_id,ci_users.user_name,ci_users.user_email,ci_users.online');
		
		$result = $this->db->get();
		
		return $result;
		

      }//End of getUsers Function


	public function validate($data) {

	$condition = "user_name =" . "'" . $data['uname'] . "' AND " . "user_password =" . "'" . $data['pword'] . "'";
	$this->db->select('*');
	$this->db->from('ci_users');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();

	if ($query->num_rows() == 1) {
	return true;
	} else {
	return false;
	}
	}


	public function read_user_information($username) {// you can use any name  in this function  but make sure its is the same as in the condition (e.g. $username as $username ) in the $condition

	$condition = "user_name =" . "'" . $username . "'";
	$this->db->select('*');
	$this->db->from('ci_users');
	$this->db->where($condition);
	

	$this->db->limit(1);
	$query = $this->db->get();

	if ($query->num_rows() == 1) {

		$rs = $query->row();
		

		
	return $query->result();
	} else {
	return false;
	}
	}

 }
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Edusoft_mod extends CI_Model {

	//this model is to get the data from the database.
	public function adlog(){
		

			$this->db->select('*');
			$this->db->from('edusoft_user');
			$this->db->where('uname', $username);
			$this->db->where('pword', $password);
			$query = $this->db->get();
			return $query->num_rows();
			}




		//$query=$this->db->get('edusoft_user');//the edusoft_user is the name of your table in the database

			//return $query->result(); // return result for multiple row

	//}

	

	public function validate($data) {

	$condition = "username =" . "'" . $data['uname'] . "' AND " . "password =" . "'" . $data['pword'] . "'";
	$this->db->select('*');
	$this->db->from('edusoft_user');
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

	$condition = "username =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from('edusoft_user');
		$this->db->where($condition);
		$this->db->limit(1);
	$query = $this->db->get();
		if ($query->num_rows() == 1) {
		return $query->result();
		} else {
		return false;
		}
		}

	public function contact_process($contact_pro){

		$this->db->insert('edusoft_contact_msg', $contact_pro);
		
	}

	public function get_fristname($username){

		$condition = "username =" . "'" . $username . "'";
		$this->db->select('firstname');
		$this->db->from('edusoft_stu_details');
		$this->db->where($condition);
		$this->db->limit(1);
	$query = $this->db->get();
		if ($query == True) {
		return $query->result();
		} else {
		return false;
		}
		}
	

	public function stu_validate($data) {

	$condition = "username =" . "'" . $data['uname'] . "' AND " . "password =" . "'" . $data['pword'] . "'";
	$this->db->select('*');
	$this->db->from('edusoft_stalite_user');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();

	if ($query->num_rows() == 1) {
	return true;
	} else {
	return false;
	}
	}


public function read_stailte_info($username) {// you can use any name  in this function  but make sure its is the same as in the condition (e.g. $username as $username ) in the $condition

	$condition = "username =" . "'" . $username . "'";
	$this->db->select('*');
	$this->db->from('edusoft_stalite_user');
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
	// Student registration edit begin Here

/// here start the student forgot password model

function recover_password($recover){


	$condition = "username =" . "'" . $recover['uname'] . "'";
	$this->db->select('password');
	$this->db->from('edusoft_stalite_user');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();

	if ($query->num_rows() == 1) {
	$val = $query->row();
	return $val->password;    

	} else {
	return false;
	}
	}


	function password_reset($uname,$new_pass){

		$this->db->where('username', $uname);
		$query= $this->db->update('edusoft_stu_details', $new_pass);
		$query2= $this->db->update('edusoft_stalite_user', $new_pass);
		return $this->db->affected_rows() > 0;

		
		//$afftectedRows = $this->db->affected_rows($query);
		//if (num_rows() == 1) {
		//	return True;
		//
	//	} else {
	//return false;
	//}
			//$afftectedRows = $this->db->affected_rows();
		}


///here ends the student forgot password model


// here starts the count bar model

function count()
{

    $count = $this->db->select ('id, COUNT(id) AS count', false);
                 $this->db->from('edusoft_stu_details');
                  $this->db->get()->result();
}


// here ends the count bar model


			// Function To Fetch All Students Record /// put this in the admin panel profile
			function show_students(){
			$query = $this->db->get('edusoft_stu_details');
			$query_result = $query->result();
			return $query_result;
			}


			// Function To Fetch Selected Student Record
			function show_student_id($data){
			$this->db->select('*');
			$this->db->from('edusoft_stu_details');
			$this->db->where('id', $data);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
			}


			// Update Query For Selected Student
			function update_student_id1($id,$data){
			$this->db->where('id', $id);
			$this->db->update('edusoft_stu_details', $data);
			}


	// Student registration edit ends here


	

			// here starts the students' model function


			public function validating($data) {

	$condition = "username =" . "'" . $data['uname'] . "' AND " . "password =" . "'" . $data['pword'] . "'";
	$this->db->select('*');
	$this->db->from('edusoft_stu_details');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();

	if ($query->num_rows() == 1) {
		return true;
	} else {
	return false;
	}
	}


	public function read_user_info($username) {// you can use any name  in this function  but make sure its is the same as in the condition (e.g. $username as $username ) in the $condition

	$condition = "username =" . "'" . $username . "'";
	$this->db->select('*');
	$this->db->from('edusoft_stu_details');
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

		
			// here ends the students' model function

// here starts the VC student mail model function
	public function show_all_stu_message() {
			$this->db->select('*');
			$this->db->from('edusoft_vc_mail');
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
			return $query->result();
			} else {
			return false;
			}
}


///////////////////////////////////////////////////////////////////


// here starts the VC model message selection


			// Function To Fetch Selected Student Record
			function read_message($id){
			$this->db->select('*');
			$this->db->from('edusoft_vc_mail');
			$this->db->where('id', $id);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
			}
///////////////////////////////////////////////////////////////////


			public function add_sci_payment($add)
{


		$this->db->insert('edusoft_fee_prices',$add);
}



	
 // here starts fee prices selection

// here begin the frontend student registration into the database

	public function frontend_student($frontend_addstudent){

		$this->db->insert('edusoft_stu_details', $frontend_addstudent );
	}

	public function insert_login($user_login){


		$this->db->insert('edusoft_stalite_user', $user_login );
	}


// here ends the frontend student registration into the database 
	public function show_prices() {



			$this->db->select('*');
			$this->db->from('edusoft_fee_prices');
			$this->db->join('edusoft_course', 'edusoft_course.course_id = edusoft_fee_prices.course_id', 'left');


					$query = $this->db->get();

			if ($query->num_rows() >= 0) {
			return $query->result();
			} else {
			return false;
			}
		}
////////////////////////////////////////////////

}

	?>
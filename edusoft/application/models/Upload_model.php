<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload_model extends CI_Model {
public function __construct()
{
parent::__construct();
}
function add_image($data)
{
$this->db->insert('edusoft_uploads',$data);

  
}

function image($data, $user)
{



$this->db->where('username', $user);
$this->db->update('edusoft_stu_details',$data);

	
}


//here starts the model to update the parent column on the edusoft_stu_details table

public function parent($add , $fname)
{



$this->db->where('firstname', $fname);
$this->db->update('edusoft_stu_details',$add);

}

// here ends the model to update the parent column on the edusoft_stu_details table



// here starts the count bar model

function add_student_image($file)
{
$this->db->insert('edusoft_uploads',$data);
}

function student_image($filee, $user)
{



$this->db->where('username', $user);
$this->db->update('edusoft_stu_details',$filee);

}
// here ends the count bar model

}
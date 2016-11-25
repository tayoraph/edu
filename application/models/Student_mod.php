<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class Student_mod extends CI_Model {

public function show_all_data() {
$this->db->select('*');
$this->db->from('edusoft_stu_details');
$query = $this->db->get();
if ($query->num_rows() > 0) {
return $query->result();
} else {
return false;
}
}







//  // this  ends selecting by department above


// this  starts selecting by department 


public function show_dept($dept) {
$condition = "edusoft_department.dept_name =" . "'" . $dept . "'";
$this->db->select('*');
$this->db->from('edusoft_department');
$this->db->join('edusoft_stu_details', 'edusoft_stu_details.dept_id = edusoft_department.dept_id', 'left');
$this->db->join('edusoft_course', 'edusoft_stu_details.course_id = edusoft_course.course_id', 'left');
$this->db->join('edusoft_faculty', 'edusoft_stu_details.faculty_id = edusoft_faculty.faculty_id', 'left');


$this->db->where($condition);
//$this->db->limit(1);         // WHEN YOU LIMIT IT TO A NUMBER , ou will only get that number of list.
$query = $this->db->get();

if ($query->num_rows() >= 0) {
return $query->result();
} else {
return false;
}
}







//  // this  ends selecting by department above

public function show_course($course) {
$condition = "edusoft_course.course_name =" . "'" . $course . "'";	
$this->db->select('*');
$this->db->from('edusoft_course');
$this->db->join('edusoft_stu_details', 'edusoft_stu_details.course = edusoft_course.id' , 'left');
//$this->db->join('city', 'city.user_id = users.id','left');
//$this->db->join('post', 'post.user_id = users.id','left');
//$this->db->join('friends', 'friends.user_id = users.id','left');
$this->db->where($condition);
//$this->db->limit(1);         // WHEN YOU LIMIT IT TO A NUMBER , ou will only get that number of list.
$query = $this->db->get();
if ($query->num_rows() >= 0) {
return $query->result();
} else {
return false;
}
}
// this  starts selecting by Matric number  below


public function show_matricno($matricno) {
$condition = "matricno =" . "'" . $matricno . "'";
$this->db->select('*');
$this->db->from('edusoft_stu_details');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}

// this  ends selecting by matric number above

public function show_data_by_id($id) {
$condition = "id =" . "'" . $id . "'";
$this->db->select('*');
$this->db->from('edusoft_stu_details');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}

public function show_data_by_date($date) {
$condition = "emp_date_of_join =" . "'" . $date . "'";
$this->db->select('*');
$this->db->from('edusoft_stu_details');
$this->db->where($condition);
$query = $this->db->get();
if ($query->num_rows() > 0) {
return $query->result();
} else {
return false;
}
}

public function show_data_by_date_range($data) {
$condition = "emp_date_of_join BETWEEN " . "'" . $data['date1'] . "'" . " AND " . "'" . $data['date2'] . "'";
$this->db->select('*');
$this->db->from('edusoft_stu_details');
$this->db->where($condition);
$query = $this->db->get();
if ($query->num_rows() > 0) {
return $query->result();
} else {
return false;
}
}



// here begins the stalite profile model

public function stalite_profile($uname) {
$condition = "username =" . "'" . $uname . "'";
$this->db->select('*');
$this->db->from('edusoft_stu_details');
$this->db->join('edusoft_course', 'edusoft_course.course_id = edusoft_stu_details.course_id', 'left');
$this->db->join('edusoft_department', 'edusoft_department.dept_id = edusoft_stu_details.dept_id', 'left');
$this->db->join('edusoft_faculty', 'edusoft_faculty.faculty_id = edusoft_stu_details.faculty_id', 'left');
$this->db->join('edusoft_uploads', 'edusoft_uploads.img_name = edusoft_stu_details.img_name', 'left');

$this->db->where($condition);
$query = $this->db->get();
if ($query->num_rows() > 0) {
return $query->result();
} else {
return false;
}
}


		// here ends the stalite profile model


// this  starts selecting by department 


public function payment_view($uname) {
$condition = "edusoft_stu_details.username =" . "'" . $uname . "'";
$this->db->select('*');
$this->db->from('edusoft_stu_details');
$this->db->join('edusoft_course', 'edusoft_course.course_id = edusoft_stu_details.course_id', 'left');
$this->db->join('edusoft_fee_prices', 'edusoft_fee_prices.course_id = edusoft_course.course_id', 'left');

$this->db->where($condition);
//$this->db->limit(1);         // WHEN YOU LIMIT IT TO A NUMBER , ou will only get that number of list.
$query = $this->db->get();

if ($query->num_rows() >= 0) {
return $query->result();
} else {
return false;
}
}

////////////////////////////////////////////////////////////////////////

////////////////tution fee get starts here//////////

public function tution_get($tutionfee) {
	//$conditions = "edusoft_stu_details.username =" . "'" . $uname . "'";
$condition = "edusoft_course.course_name =" . "'" . $tutionfee['course'] . "' AND " . "edusoft_fee_prices.level =" . "'" . $tutionfee['level'] . "'";
$this->db->select('*');
$this->db->from('edusoft_fee_prices');
$this->db->join('edusoft_course', 'edusoft_course.course_id = edusoft_fee_prices.course_id', 'left');
$this->db->join('edusoft_stu_details', 'edusoft_stu_details.present_level = edusoft_fee_prices.level', 'left');
$this->db->where($condition );
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() != 0) {
return $query->result();
} else {
echo "no data";
}
}


////////////////////tution fee get ends here/////////////////


// selecting student courses starts here///

function show_student_course($level, $course){
	$condition = "edusoft_course.course_name =" . "'" . $course . "' AND " . "edusoft_all_courses.level =" . "'" . $level . "'";

$this->db->select('*');
$this->db->from('edusoft_all_courses');
//$this->db->join('edusoft_department', 'edusoft_department.dept_id = edusoft_all_courses.dept_id', 'left');
$this->db->join('edusoft_course', 'edusoft_course.course_id = edusoft_all_courses.discipline_id', 'left');
$this->db->where($condition );

$query = $this->db->get();
if ($query->num_rows() != 0) {
return $query->result();
} else {
echo "no data";

}

}
/// selecting student courses ends here////
}


<?php


class delete_ctrl extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('Delete_model');
$this->load->library('session');
}
// Function to Fetch selected record from database.
function show_student_id() {
$id = $this->uri->segment(3);
$data['students'] = $this->Delete_model->show_students();
$data['single_student'] = $this->Delete_model->show_student_id($id);
$this->load->view('delete', $data);
}

// this is the delete function of each selected student. 
 function delete_student(){
$id = $this->uri->segment(3);
$data['single_student'] = $this->Delete_model->show_student_id($id);
$this->load->view('each_student_delete', $data);
}

 
// Function to Delete selected record from database.
function delete_student_id() {
$id = $this->uri->segment(3);
$this->Delete_model->delete_student_id($id);
$this->show_student_id();
}
}
?>
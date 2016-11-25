<?php
if (isset($this->session->userdata['is_logged_in'])) {
$username = ($this->session->userdata['username']);
$password = ($this->session->userdata['password']);
$firstname=  ($this->session->userdata['firstname']);
$lastname = ($this->session->userdata['lastname']);
$level = ($this->session->userdata['present_level']);
$course = ($this->session->userdata['course']);
$department= ($this->session->userdata['department']);
$image= ($this->session->userdata['image']);
$image_ext= ($this->session->userdata['image_ext']);
//$level_course= ($this->session->userdata['level_cou']);
$this->session->mark_as_temp($username, 30);

} else {
header("location:". base_url()."stulogin"); 
}
?>


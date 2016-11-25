<?php
if (isset($this->session->userdata['is_logged_in'])) {
$username = ($this->session->userdata['username']);
 $password = ($this->session->userdata['password']);

} else {
header("location:". base_url()."index"); // "admin is the name of the route file you want to redirect to"
}
?>
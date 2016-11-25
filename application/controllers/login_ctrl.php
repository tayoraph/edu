<?php
if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');

class Login_ctrl extends CI_Controller

{

public function __construct()

{

parent::__construct();

$this->load->model('M_login');

$this->load->helper('url');

}

public function index()

{

$session = $this->session->userdata('isLogin');

if($session == FALSE)

{

redirect('Login_ctrl/login_form');

}else

{

redirect('<?php echo base url();?>');

}

}

public function login_form()

{

$this->form_validation->set_rules('un', 'Username', 'required|trim|xss_clean');

$this->form_validation->set_rules('pw', 'Password', 'required|md5|xss_clean');

$this->form_validation->set_error_delimiters('<span class="error">', '</span>');

if($this->form_validation->run()==FALSE)

{

$this->load->view('student_login');

}else

{

$username = $this->input->post('un');

$password = $this->input->post('pw');

$cek = $this->M_login->takeUser($username, $password, 1);

if($cek <> 0)

{

$this->session->set_userdata('isLogin', TRUE);

$this->session->set_userdata('un',$username);

redirect('stureg');

}else

{

?>

<script>

alert('Failed Login: Check your username and password!');

history.go(-1);

</script>

<?php

}

}


}



public function process()

{

if($this->session->userdata('isLogin') == TRUE)

{

redirect('login/login_form');

}else

{

$this->load->view('home_v');

}

public function logout()

{

$this->session->sess_destroy();

redirect('login/login_form');

}

}

?>

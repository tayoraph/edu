<?php

class Student_ctrl extends CI_controller {
	

	function __construct()
{
parent::__construct();
$this->load->helper(array('form', 'url'));
$this->load->model('upload_model');
$this->load->model('Edusoft_mod');
$this->load->model('Student_mod');

}

	

	//public function index(){// this is the homepage function 

public function validate_credentials(){



			  $this->load->model('Edusoft_mod');

        $data = array(

        		// this is just like $_post("username") bla bla bla 
        		'uname' => $this->input->post('un'),

        		'access' => $this->input->post('access'),

        		'pword' => md5($this->input->post('pw'))

        		);

       
	

        //$result = $this->login_database->login($data);

        $query = $this->Edusoft_mod->validate($data);

        if($query == TRUE)//if the user's creadential validated

        {

            		$username = $this->input->post('un');
            		$access = $this->input->post('access');

            		$result = $this->Edusoft_mod->read_user_information($username);

         if ($result != false) {

            $data = array(

                'username' => $this->input->post('un'),
                'password' => $this->input->post('pw'),
                'access' => $this->input->post('access'),
                 'firstname' => $this->input->post('fn'),

               /* 'fname' => $result[0]->firstname,

                'lname' => $result[0]->lastname,*/

                
                'is_logged_in' => true

            );

          
            $this->session->set_userdata($data);
            	redirect('stalite');

           



        }

        }

        else{

            $this->error();           

        }

    }




		 function  stureg(){// this is the student registration form function

			

		 	// this is using form validation below.

			$this->load->library('form_validation'); 

			$this->form_validation->set_rules('ln', '', 'required');
			$this->form_validation->set_rules('fn', '', 'required');
			$this->form_validation->set_rules('un', '', 'trim|required|min_length[5]|max_length[12]|xss_clean');
			$this->form_validation->set_rules('pw', '', 'trim|required|matches[pwconf]|md5');
			$this->form_validation->set_rules('sex', '', 'required');
			$this->form_validation->set_rules('pwconf', '', 'trim|required');
			$this->form_validation->set_rules('em', '', 'trim|required|valid_email');


		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('student_reg');
		}
		else
		{
			$this->load->view('usersaccess');
		}

		}
function frontend_add_upload_submit(){    


	// here begins the student registration form insertion into the database

		{    

	// the insert function  for the student registration page 

		if($this->input->post('submit'))
{
	

			// image  insertion file
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']    = '1024';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
		$error = array('error' => $this->upload->display_errors());
		$this->load->view('student_reg', $error);
		}
		else
		{

// The below start the query to insert into the student table 

			$frontend_addstudent = array(
					"firstname"=>$this->input->post('fn'),
					"lastname"=>$this->input->post('ln'),
					"sex"=>$this->input->post('sex'),
					"email"=>$this->input->post('em'),
					"username"=>$this->input->post('un'),
					"password"=>md5($this->input->post('pw')),
					"confirmpassword"=>md5($this->input->post('pwconf')));
			
			$user_login = array(
				"username"=>$this->input->post('un'),
				"password"=>md5($this->input->post('pw')),
				"confirmpassword"=>md5($this->input->post('pwconf'))
				);
			
			$this->Edusoft_mod->frontend_student($frontend_addstudent);

			$this->Edusoft_mod->insert_login($user_login);
		//$this->db->insert('edusoft_stu_details', $frontend_addstudent); /// 
					//redirect('Adminlogin');


			$this->session->set_userdata($frontend_addstudent);

// The below ends the query to insert into the student table 

	// the below  start the query to update the student table with the image so as to be able to query the student and call the image at the same time.

					$data=$this->upload->data();
					//$this->thumb($data);
					$file=array(
					'img_name'=>$data['raw_name'],
					'thumb_name'=>$data['raw_name'].'_thumb',
					'ext'=>$data['file_ext'],
					'upload_date'=>time()
					);
					$this->upload_model->add_image($file);
					$data = array('upload_data' => $this->upload->data());


					$dataa['message'] = ' Welcome to Edusoft <br />Your Details has been Inserted Successfully';
					$this->load->view('student_reg', $dataa);

					

					$data=$this->upload->data();
					//$this->thumb($data);
					$file=array(
					'img_name'=>$data['raw_name'],

					);
						// I set my update condition to a variable here and pass it to the model 
					$user=$this->input->post('un');
					$this->upload_model->image($file, $user);
					$firstname = array("firstname"=>$this->input->post('fn'));

					
					}
					
					}
				}

			function thumb($data)
					{
					$config['image_library'] = 'gd2';
					$config['source_image'] =$data['full_path'];
					$config['create_thumb'] = TRUE;
					$config['maintain_ratio'] = TRUE;
					$config['width'] = 275;
					$config['height'] = 250;
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();


					
					}
}
	// here ends the student's registration form insertion into the database 	
				



		function formprocess(){    // the insert function  for the student registration page 

				$regform = array(
					"firstname"=>$this->input->post('fn'),
					"lastname"=>$this->input->post('ln'),
					"sex"=>$this->input->post('sex'),
					"email"=>$this->input->post('em'),
					"username"=>$this->input->post('un'),
					"password"=>md5($this->input->post('pw')),
					"confirmpassword"=>md5($this->input->post('pwconf')));

					$this->db->insert('edusoft_stu_details', $regform); /// edusoft_stu_details is the 														name of ur table in d database
 			$this->session->set_userdata($regform);
					redirect('Upload_file');



		} 	

		// this function is for student login form .
		function stuform(){
		$this->load->view('student_login');

		}

		// this function is for student login form ends here .

// here begins the student passport file upload codes

		

	function upload_file()
	{
		$this->load->view('file_upload', array('error' => ' ' ));
	}

	function do_upload()
{
if($this->input->post('upload'))
{
$config['upload_path'] = './uploads/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size']    = '1024';
$config['max_width']  = '1024';
$config['max_height']  = '768';
$this->load->library('upload', $config);
if ( ! $this->upload->do_upload())
{
$error = array('error' => $this->upload->display_errors());
$this->load->view('Upload', $error);
}
else
{

	// the below is the ctrl that allows to insert into the edusoft_uploads table

$data=$this->upload->data();
$this->thumb($data);
$file=array(
'img_name'=>$data['raw_name'],
'thumb_name'=>$data['raw_name'].'_thumb',
'ext'=>$data['file_ext'],
'upload_date'=>time()
);
$this->upload_model->add_student_image($file);
$data = array('upload_data' => $this->upload->data());
$this->load->view('upload_success', $data);

// the below is the ctrl that allows to insert into the edusoft_stu_details table
$data=$this->upload->data();
$this->thumb($data);
$filee=array(
'img_name'=>$data['raw_name'],

$user = ($this->session->userdata['username'])
);
$this->upload_model->student_image($filee , $user);
}
}
else
{
redirect(site_url('Upload'));
}
}
function thumb1($data)
{
$config['image_library'] = 'gd2';
$config['source_image'] =$data['full_path'];
$config['create_thumb'] = TRUE;
$config['maintain_ratio'] = TRUE;
$config['width'] = 275;
$config['height'] = 250;
$this->load->library('image_lib', $config);
$this->image_lib->resize();
}



/// end of student file upload

/// here begins the student forgot password function 

function forgot_password(){

			$this->load->view("forgot_password");
}



function recover_password(){

			$recover = array(
        		'uname' => $this->input->post('un'));

				$username= $this->input->post('un');//reusing the post in another function
        		$this->session->keep_flashdata('info', $username);// I passed the username into the next function below i.e enter_new_password


       		 $query = $this->Edusoft_mod->recover_password($recover);
        if($query == TRUE)//if the user's creadential validated

        {
        	$recover['uname']= $this->input->post('un');
        	
        	$this->load->view('new_password', $recover);
        	
        	
           
        }

        

        else{

           
            	$wrong_data['noemail'] = "The email you gave is invalid ,kindly put in the correct Email. ";

            	$this->load->view('forgot_password', $wrong_data);        

        }
}
// new password starts here
        function enter_new_password(){
			$uname= $this->session->flashdata('info'); // I collected this session details from the above function recover_password using flash data
			$new_pass = array(
					"password"=>md5($this->input->post('pw')),
					"confirmpassword"=>md5($this->input->post('pwconf'))
						
						);

			$password= $this->Edusoft_mod->password_reset($uname,$new_pass);
		
		if($password == TRUE){
			$passw['correct']  = " Your password has been change successfully , you may now login";
			$this->load->view('forgot_password', $passw);
	
        } else{

        	$passwr['pass']  = "You haven't reset your password,  Please try again  ";
			$this->load->view('forgot_password', $passwr);
        }


/// new password ends here 
/// Here ends the student login function

		}
/// here ends the student forget password function 


// here starts the update of students profile


		function show_student() {

		$id = $this->uri->segment(3);
		$data['students'] = $this->Edusoft_mod->show_students();
		$this->load->view('stuprofile', $data);
		}
		
		function show_student_id() {
		$id = $this->uri->segment(3);
		$data['single_student'] = $this->Edusoft_mod->show_student_id($id);
		$this->load->view('edit_student', $data);
		}


		

		function update_student_id1() {
		$id= $this->input->post('id');
		$data = array(
						"firstname"=>$this->input->post('fn'),
						"lastname"=>$this->input->post('ln'),
						"sex"=>$this->input->post('sex'),
						"email"=>$this->input->post('em'),
						"matricno"=>$this->input->post('mt'),
						"department"=>$this->input->post('dt'),
						"faculty"=>$this->input->post('fa'),
						"course_id"=>$this->input->post('co'),
						"username"=>$this->input->post('un'));

		$this->Edusoft_mod->update_student_id1($id,$data);
		$this->show_student_id();

	redirect('show_student');


	//redirect('Upload_file');

	}
	


	/// here ends the updates of students profile

	// here starts the student login function 

	public function error(){ // This is the error function included in the validate_credentials.

			$this->load->view('error');

		}


	public function validate_students_credentials(){

        $data = array(

        		// this is just like $_post("username") bla bla bla 
        		'uname' => $this->input->post('un'),
        		'pword' => md5($this->input->post('pw'))
        		);
        		 //$result = $this->login_database->login($data);

        $query = $this->Edusoft_mod->stu_validate($data);
        if($query == TRUE)//if the user's creadential validated

        {
        	$username = $this->input->post('un');
            $result = $this->Edusoft_mod->read_user_info($username);
         if ($result != false) {

            $data = array(
                'username' => $this->input->post('un'),
                'password' => $this->input->post('pw'),
            
                'is_logged_in' => true
            );
            $this->session->set_userdata($data);
            	

            	redirect('Student_ctrl/show_student_username');
        }

        }

        else{

            $this->error();           

        }
// Here ends the student login function

		}

		
// here starts the stalite login function 
	public function Stalite_vali_credentials(){ 
		$this->load->library('email');

	// this is used to collect the data and store in database

        $data = array(
        		'uname' => $this->input->post('un'),
        		'pword' => md5($this->input->post('pw'))
        		);
        //$result = $this->login_database->login($data);

        $query = $this->Edusoft_mod->stu_validate($data);
        if($query == TRUE)//if the user's creadential validated
       			 {
            		$username = $this->input->post('un');
            		$access = $this->input->post('access');
            		$result = $this->Edusoft_mod->read_stailte_info($username);

         if ($result != false) {

            $session = array(

                'username' => $this->input->post('un'),
                'password' => $this->input->post('pw'),
                'access' => $this->input->post('access'),
          /* 'fname' => $result[0]->firstname,

                'lname' => $result[0]->lastname,*/
 			 'is_logged_in' => true
 );
            $this->session->set_userdata($session);
            	redirect('stalitehome');
        }

        }
  	else{
      $wrong['nouser'] = "Invalid Login!!!, Please check your details before login again ";

            	$this->load->view('stulogin', $wrong);   
           // $this->error();                   

        }

    }


    		public function stalitehome(){ 

			$this->load->view('Stalite_home_view');

		}

		// here ends the student login function 



		// here starts stalite profile ctrl function 

		function stalite_profile() {
			$uname = ($this->session->userdata['username']);
		$data['stalite'] = $this->Student_mod->stalite_profile($uname);
		$this->load->view('Stalite_profile_view', $data);
		}


			// here ends stalite profile ctrl function 


		// here starts stalite profile ctrl function 

		function stalite_fee() {
			$uname = ($this->session->userdata['username']);
		$data['fee'] = $this->Student_mod->payment_view($uname);

		$this->load->view('Student_payment_view', $data);
		}
	

		


			// here ends sta


// here starts stalite message to VC ctrl function 

		function maildvc() {

			$this->load->library('form_validation'); 

			$this->form_validation->set_rules('uMsg', '', 'required');
				
		

		if ($this->form_validation->run() == FALSE)
		{

			$this->load->view('mail_vc');
		}
		else
		{
			redirect('vcmail');
		}

		}
			
		
	


// here ends stalite profile ctrl function 


// here starts stalite message process to VC ctrl function 

		function vc_mail_pro_student(){   

				$stumsg = array(
					 "sender_username"=>($this->session->userdata['username']),
					 "sender"=> "student",
					"message"=>$this->input->post('uMsg'));
					$this->db->insert('edusoft_vc_mail', $stumsg); /// 
					redirect('mailingvc');
		} 	


// here ends stalite profile ctrl function 



// here starts stalite payment method for generating level tution fee ctrl function 

		function level_fee_get(){   
				$tutionfee = array(
				"course" => $this->input->post('co'),
        		"level" =>$this->input->post('lv')
        		);

		$data['tution'] = $this->Student_mod->tution_get($tutionfee); 

					
		$this->load->view('Tution_get', $data);
		} 	

public function tutionget(){ 

			$this->load->view('Tution_get');

		}
// here ends stalite payment method for generating level tution fee ctrl function 


// here starts the methods for counting all registered student

// here ends the methods for counting all registered student


}
?>
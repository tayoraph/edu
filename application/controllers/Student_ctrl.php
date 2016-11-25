<?php

class Student_ctrl extends CI_controller {
	

	function __construct()
{
parent::__construct();
$this->load->helper(array('form', 'url'));
$this->load->model('upload_model');
$this->load->model('Edusoft_mod');
$this->load->model('Student_mod');
$this->load->helper('date');
}



//  testing form validation starta here

function omr() {
        //Including validation library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('dname', 'firstname', 'required');

        //Validating Email Field
        $this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

        //Validating Mobile no. Field
        $this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|min_length[11]|max_length[20]');

        $this->form_validation->set_rules('dob', 'Date of birth', 'required'); 
        
  //trim|required|min_length[11]|max_length[20]|xss_clean'
        //Validating Address Field
        $this->form_validation->set_rules('ln', 'lastname', 'required');

        //Validating League Field
        //$this->form_validation->set_rules('dleague', 'League', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Omrvinsert');
        } else {
            //Setting values for tabel columns
            $data = array(
                'Student_Name' => $this->input->post('dname'),
                'Student_Email' => $this->input->post('demail'),
                'Student_Mobile' => $this->input->post('dmobile'),
                'Student_church_dept1' => $this->input->post('dic'),
                'Student_church_dept2' => $this->input->post('dic2'),
                'Student_church_dept3' => $this->input->post('dic3'),
                'Student_Lastname' => $this->input->post('ln'),
                'industry'      => $this->input->post('ind'),
                'Student_Dept'      => $this->input->post('dc'),
               // 'Student_Reg_visiting' => $this->input->post('rv'),
                'Student_Dob'           => $this->input->post('dob'),
                'Student_yoe'           => $this->input->post('oou')
          


            );

           

            $num = $data['Student_Mobile'];
            $exist = $this->Omrminsert->mobile_exist($num);
           // print_r($exist[0]->student_Lastname);
            if($exist) { 

              $data['message'] = 'Phone number already exist on <br/>'
                    .$exist[0]->student_name . ' ' .$exist[0]->student_Lastname;
                 $this->load->view('Omrvinsert', $data);
                }
            else{
            //Transfering data to Model
            $this->Omrminsert->form_insert($data);

          
            $data['message'] = 'Data Inserted Successfully';

                // setting up the email response starts here


            $config = Array(        
            'protocol' => 'sendmail',
            'smtp_host' => 'www.omrsp.com',
            'smtp_port' => 25,
            'smtp_user' => 'admin@omrsp.com',
            'smtp_pass' => 'Emmanuel13',
            'smtp_timeout' => '4',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
        );
              $this->load->library('email', $config);

              //$this->email->set_newline("\r\n");


                 $firstn= $this->input->post('dname');

                 $lastn = $this->input->post('ln');

                 $holdersemail= $this->input->post('demail');

                 $adminemail= 'admin@omrsp.com';

                 $cc= 'tayoraph@gmail.com, ojosipeayo@gmail.com';

                $groupname= ' CCCOOUCWSP ALUMNI (OMR)';
                 

                


              $this->email->from($adminemail ,'OMR');
                    $this->email->to($holdersemail);
                    $this->email->cc($cc);
                    //$this->email->bcc('them@their-example.com');

                    $this->email->subject('Registration confirmation');



                     $dataa = array(
             
                    'userName'=> 'OLAJIDE OMOTAYO',
                    'firstn'=> $this->input->post('dname'),
                    'lastn'  => $this->input->post('ln'),
                    'groupname'=> ' CCCOOUCWSP ALUMNI (OMR)'
                       );

                      $config['mailtype'] = 'html';

                    $body = $this->load->view('Omremail.php',$dataa,TRUE);

                   

                    $this->email->message($body);  
                  
                    $this->email->send();                 

                // seting up the email response ends here 


   // setting up auto message confirmation to registrant starts here 
    
            $msgun='cccspomr';
            $msgpw='business';
            $name= $this->input->post('dname');
            $msgsender='OMR';
            $msgmobile= $this->input->post('dmobile');

            $msg=" Greetings ".$name." U ve successfully registered your details, Do check ur mail regulary for info as regards OMR.Cheers";
           
            //$sendmsg='www.estoresms.com/smsapi.php?username=$megun&password=$msgpw&sender=$msgsender&recipient=$msgmobile&message=$msg&';


 $api ="http://estoresms.com/smsapi.php?username=".urlencode($msgun)."&password=".urlencode($msgpw)."&sender=".urlencode($msgsender)."&recipient=".urlencode($msgmobile)."&message=".urlencode($msg);
                
   $sendmsg= file_get_contents($api);


           // $sendmsg='www.estoresms.com/smsapi.php?username=cccspomr&password=business&sender=omr&recipient=08067824358&message=hello testing&';
         

            //www.estoresms.com/smsapi.php?username=cccspomr&password=business&sender=omr&recipient=08067824358&message=hello%20testing&
            
      // setting up auto message confirmation to registrant ends here  


            //Loading View
            $this->load->view('Omrvinsert', $data);
            
        }
    }
 } 


//testing form validation ends here
	

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

			
		 	 $this->load->helper(array('form', 'url'));
		 	// this is using form validation below.

			$this->load->library('form_validation'); 

			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

			$this->form_validation->set_rules('ln', 'Lastname', 'required');
			$this->form_validation->set_rules('fn', 'Firstname', 'required');
			$this->form_validation->set_rules('un', 'Username', 'trim|required|min_length[5]|max_length[12]');
			$this->form_validation->set_rules('pw', 'Password', 'trim|required|matches[pwconf]');
			$this->form_validation->set_rules('sex', 'Sex', 'required');
			$this->form_validation->set_rules('pwconf', 'Confirm Password', 'trim|required|matches[pw]');
			$this->form_validation->set_rules('em', 'Email', 'trim|required|valid_email');


		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('student_reg');
		}
		else
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
			$passw['correct']  = " Your password has been change successfully , you may now login " ;
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
						"dept_id"=>$this->input->post('dt'),
						"present_level"=>$this->input->post('level'),
						"faculty_id"=>$this->input->post('fa'),
						"course_id"=>$this->input->post('co'),
						"username"=>$this->input->post('un'));

		$update = $this->Edusoft_mod->update_student_id1($id,$data);

		if ($update = True){

			$reply['message'] = "<strong>" . " You have successfully updated the profile. "; 

			redirect('show_student' , $reply );
		}	else{

			$response['error'] = "You update was not successful, Please try again  "; 

		//$this->load->view('edit_student' , $response , $name)
		
		redirect('show_student' , $response , $name);

		}
	//	$this->show_student_id();

	//redirect('show_student');


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

 			 // Using the variable in another function 
 			
 );		$this->session->keep_flashdata('info', $username);
//// selecting and storing the stduent profile in the session starts here//
            $uname= $this->input->post('un');
         $data['stalite'] = $this->Student_mod->stalite_profile($uname);

		// showing your database result in your controller is below

		//echo $data['stalite']->sex;
		foreach($data['stalite'] as $item):
		//echo $item ->sex;
		//echo $item ->firstname;
		///echo $item ->lastname;
		//echo $item ->course_name;
		//echo $item ->dept_name;
		
		endforeach;



		$Stu_details = array(
                'firstname' => $item ->firstname,
				'lastname' => $item ->lastname,
				'course' => $item ->course_name,
				'department' => $item ->dept_name,
				'present_level' => $item ->present_level,   
				'image' => $item ->img_name, 
				'image_ext' => $item ->ext,         
               
            );
		  $this->session->set_userdata($Stu_details);
// selecting and storing the user profile in the session  ends here
            $this->session->set_userdata($session);
            	redirect('stalitehome');
        }

        }
  	else{
      $wrong['nouser'] = "Invalid Login!!!, Please check your details before login again ";

            	$this->load->view('student_login', $wrong);   
           // $this->error();                   

        }

    }


    		public function stalitehome(){ 

			$this->load->view('Stalite_home_view');

		}

		// here ends the student login function 



		// here starts stalite profile ctrl function 

		function stalite_profile() {
			$uname1= $this->session->flashdata('info');
			$uname = ($this->session->userdata['username']);
		$data['stalite'] = $this->Student_mod->stalite_profile($uname);

		// showing your database result in your controller is below

		//echo $data['stalite']->sex;
		foreach($data['stalite'] as $item):
		//echo $item ->sex;
		//echo $item ->firstname;
		///echo $item ->lastname;
		//echo $item ->course_name;
		//echo $item ->dept_name;
		
		endforeach;



		$Stu_details = array(
                'firstname' => $item ->firstname,
				'lastname' => $item ->lastname,
				'course' => $item ->course_name,
				'department' => $item ->dept_name,
				'present_level' => $item ->present_level,   
				'image' => $item ->img_name, 
				'image_ext' => $item ->ext,         
               
            );
		  $this->session->set_userdata($Stu_details);

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


// here starts stalite message to VCe ctrl function 

		function maildvc() {

			$this->load->library('form_validation'); 
			
			$this->form_validation->set_rules('', 'Firstname', 'required');
				
			$this->form_validation->set_rules('uMsg', 'Subject', 'required');
			$this->form_validation->set_rules('sub', 'Message', 'required');

		
		if ($this->form_validation->run() == FALSE)		{
			
			$this->load->view('mail_vc');

		}
		else
		{
			$date = date('Y-m-d H:i:s'); 

	

		
			$stumsg = array(
					 "sender_username"=>($this->session->userdata['username']),
					 "sender"=> "student",
					 "mail_subject"=>$this->input->post('sub'),
					 "ip_address"=>$this->input->ip_address(),
					 "date"=>$date,
					"message"=>$this->input->post('uMsg'));
				
				$message = $this->input->post('uMsg');

				$us = ($this->session->userdata['username']);
		
	$mail = $this->Edusoft_mod->vc_mail_pro($stumsg); 


			

			// returning the name for appreciation 
		if ($mail = True){


			$mail_con['reply'] = "Your Message has being recieved by the VC, Expect a response soon"; 

					$this->load->view('mail_vc' , $mail_con);

		}	else {

			
				$mail_not['noreply'] = "Your Message has not been sent , please try again"; 

					$this->load->view('mail_vc' , $mail_not);

		}
		}
		}
			
		
	


// here ends stalite profile ctrl function 





// here starts stalite payment method for generating level tution fee ctrl function 

		function level_fee_get(){   
				$tutionfee = array(
				"course" => $this->input->post('co'),
        		"level" =>$this->input->post('lv')
        		);

				$level = $this->input->post('lv');
			if($level == 'empty'){

			$pay['fee']  = "Your level is empty, get in touch with the school admin to update your records";

			$this->load->view('Tution_get', $pay);

		}else{	

		$data['tution'] = $this->Student_mod->tution_get($tutionfee); 

					
		$this->load->view('Tution_get', $data);
	}
		} 	


// here ends stalite payment method for generating level tution fee ctrl function 


// here starts the course form registration

 function course_form(){

 	$level = ($this->session->userdata['present_level']);
    $course = ($this->session->userdata['course']);


	if($level == 'empty'){

			$pay['fee']  = "Your level is empty, get in touch with the school admin to update your records";

			$this->load->view('stalite_course', $pay);

		}else{

 $dat['courses'] = $this->Student_mod->show_student_course($level, $course);


 		//foreach($dat['courses'] as $it):
		//echo $it ->course;
		//$level_cou['levcou'] =$it ->course;
		//$level_course = array(
         //      'level_cou' => $it ->course ) ;            
 		// $this->session->set_userdata($level_course);
	
 	 	//$level_course['levcou'] = $co;
		
	//echo $level_course['levcou'];
		//$level_course = array(

            //   'level_cou' => $it ->course
            //   
      // );	
//endforeach;
		//$this->session->set_userdata($level_course);
	
		$this->load->view('stalite_course', $dat);



 

		////////////////////////////////////////////////

 	/**$this->load->library('form_validation'); 
			
			$this->form_validation->set_rules('cor1', 'course1', 'required');
				
			$this->form_validation->set_rules('cor2', 'course2', 'required');
			$this->form_validation->set_rules('sub', 'Message', 'required');

		
		if ($this->form_validation->run() == FALSE)		{
			
			$this->load->view('student_course_form');

		}
		else
		{
			$date = date('Y-m-d H:i:s'); 
 }
**/

// here ends the course form registration


}

}

}

?>
<?php



	class Edusoft_ctrl extends CI_controller {

		function __construct()
{
parent::__construct();
$this->load->helper(array('form', 'url'));
$this->load->model('upload_model');
$this->load->model('Edusoft_mod');
$this->load->model('Student_mod');
$this->load->model('Users_model');
$this->load->helper('date');


}
			/// here begins frontend pages functions

			public function index(){// this is the homepage function 



			$this->load->view('index');

		}		


		 function aboutus(){// this is the homepage function 



			$this->load->view('about');

		}	


		 function contactus(){// this is the homepage function 


		 	if($this->input->post('submit'))
		{

			$date = date('Y-m-d H:i:s'); 

	

		$contact_pro = array(
					"Name"=>$this->input->post('na'),
					"email"=>$this->input->post('em'),
					"mobile"=>$this->input->post('mob'),
					"message"=>$this->input->post('msg'),
					"sender_ip_address"=>$this->input->ip_address(),
					"date_sent"=>$date
					);

		$result = $this->Edusoft_mod->contact_process($contact_pro);

			$name= $this->input->post('na'); // returning the name for appreciation 
		if ($result = True){

			$reply['message'] = "<strong>" . "Thank you "  . $name .  "</strong>" . " .  <br /> Your Message has being recieved, We will get back to you soonest"; 

			$this->load->view('contact' , $reply );

		}	else{

			$response['error'] = "Your Message has NOT being recieved, Please try again or call our support line on {08067824358} "; 

		$this->load->view('contact' , $response , $name);

		}	
		}else{
		 	// this is using form validation below.

			$this->load->library('form_validation'); 
			$this->form_validation->set_rules('na', 'Firstname', 'required');
			$this->form_validation->set_rules('em', 'Email', 'trim|required|valid_email|xss_clean');
			$this->form_validation->set_rules('mob', 'Mobile', 'required');			
			$this->form_validation->set_rules('msg', 'Subject', 'required');

		if ($this->form_validation->run() == FALSE)		{
			
			$this->load->view('contact');

		}
		else
		{
			redirect('index');
		}

		}

		}	


		



			/// here ends frontend pages functions


		 function administrator(){// this is the admin login page function



			$this->load->view('admin_login');

		}

		function newadmin(){//. 



			$this->load->view('adminuser');

		}


		function profile(){// this function is loading the student's profile. 



			$this->load->view('stuprofile');

		}

		function access(){// this function is loading the users access page. 



			$this->load->view('usersaccess');

		}


		public function accesspro(){// this function is loading the users level page. 

	 		$this->load->view('useraccesspro');

			

		}


	function show_tution(){ // this is adminlogin page function



			$this->load->view('Payment_entered');

		}

		


	function admin(){ // this is adminlogin page function



			$this->load->view('admin_view');

		}



			// Logout function below. 

	 function logout(){
			    $this->session->unset_userdata=array();
			    $this->session->sess_destroy();
			    //$data['main_content'] = 'login_form';
			    //$this->load->view('login');
			    $this->index();
			    }

// here starts the error function included in the validate_credentials.

	public function error(){ 

			$this->load->view('error');

		}
// here ends the error function included in the validate_credentials.


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
        if($query == TRUE)//if the user's credential validated
        {

            		$username = $this->input->post('un');
            		$result = $this->Edusoft_mod->read_user_information($username);
         if ($result != false) {

         	
         
    $name['names'] = $this->Edusoft_mod->get_fristname($username);
         	

            $data = array(
                'username' => $this->input->post('un'),
                'password' => $this->input->post('pw'),
                'access' => $this->input->post('access'),
                'firstname' => $this->input->post('fn'),
                'is_logged_in' => true            );

            $this->session->set_userdata($data);

            
         	

            	$this->load->view('admin_view', $name, $data);
            
        }
        }

        else{

        	$error['message'] = ' Invalid login details ';
        	$this->load->view('admin_login', $error);
            //$this->error();           

        }

    }





    ///here starts add students in admin 


		function  add_new_student(){// this is the student registration form function

			

		 	// this is using form validation below.

			$this->load->library('form_validation'); 

			$this->form_validation->set_rules('ln', '', 'required');
			$this->form_validation->set_rules('fn', '', 'required');
			$this->form_validation->set_rules('un', '', 'trim|required|min_length[5]|max_length[12]|xss_clean');
			$this->form_validation->set_rules('pw', '', 'trim|required|matches[pwconf]|md5|min_length[7]');
			$this->form_validation->set_rules('sex', '', 'required');
			$this->form_validation->set_rules('pwconf', '', 'trim|required|min_length[7]');
			$this->form_validation->set_rules('em', '', 'trim|required|valid_email');
			$this->form_validation->set_rules('fa', '', 'required');
			$this->form_validation->set_rules('mt', '', 'required');
			$this->form_validation->set_rules('co', '', 'required');
			$this->form_validation->set_rules('dt', '', 'required');


		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('add_new_student');
		}
		else
		{
			$this->load->view('usersaccess');
		}

		}


// here starts the function for parent form upload
		function parent()
				{
				$this->load->view('Parent_details');
				}

		
		
// here ends the function for parent form upload


			
			function upload_file_admin()
	{
		$this->load->view('admin_file_upload', array('error' => ' ' ));
	}

	function admin_do_upload()
	{
		$configs['upload_path'] = './uploads/';
		$configs['allowed_types'] = 'gif|jpg|png';
		$configs['max_size']	= '100';
		$configs['max_width']  = '1024';
		$configs['max_height']  = '768';

		$this->load->library('upload', $configs);
		

		if ( ! $this->upload->admin_do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('admin_file_upload', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());



			$this->load->view('admin_upload_certificates', $data);
		}
	}

		// here ends add students in admin




function add_upload_submit(){    

	// the insert function  for the student registration page 

		if($this->input->post('submit'))
{
	
			// image  insertion file
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

// The below start the query to insert into the student table 

			$addstudent = array(
					"firstname"=>$this->input->post('fn'),
					"lastname"=>$this->input->post('ln'),
					"sex"=>$this->input->post('sex'),
					"email"=>$this->input->post('em'),
					"username"=>$this->input->post('un'),
					"matricno"=>$this->input->post('mt'),
					"department"=>$this->input->post('dt'),
					"faculty"=>$this->input->post('fa'),
					"course_id"=>$this->input->post('co'),
					"password"=>md5($this->input->post('pw')),
					"confirmpassword"=>md5($this->input->post('pwconf')));
			
					$this->db->insert('edusoft_stu_details', $addstudent); /// 
					//redirect('Adminlogin');


						$this->session->set_userdata($addstudent);

// The below ends the query to insert into the student table 

	// the below  start the query to update the student table with the image.

					$data=$this->upload->data();
					$this->thumb($data);
					$file=array(
					'img_name'=>$data['raw_name'],
					'thumb_name'=>$data['raw_name'].'_thumb',
					'ext'=>$data['file_ext'],
					'upload_date'=>time()
					);
					$this->upload_model->add_image($file);
					$data = array('upload_data' => $this->upload->data());
					$this->load->view('Parent_details', $data);


					$data=$this->upload->data();
					$this->thumb($data);
					$file=array(
					'img_name'=>$data['raw_name'],

					);
						// I set my update condition to a variable here and pass it to the model 
					$user=$this->input->post('un');
					$this->upload_model->image($file, $user);
					$firstname = array("firstname"=>$this->input->post('fn'));

					return $this;
					}
					}
					else
					{
					redirect(site_url('Upload'));
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

// Here is the method for inserting the parent details into the student table and parent table.
function add_student_pro(){   

				$add = array(
					"parent_name"=>$this->input->post('fn'),
					"parent_mobile"=>$this->input->post('co'));

				
				$fname = ($this->session->userdata['firstname']);
				$this->upload_model->Parent($add, $fname);
				
					redirect('Payment');
		
}

		
// Here ends  the method for inserting the parent details into the student table and parent table.


// here starts the function for parent form upload
		public function make_payment()
				{
				$this->load->view('Payment');
				}



	///////////////////////////////////////////////////////////////
// Here begins the select by table columns e.g departments, faculties, courses, e.t.c.





public function department() {
$data['show_table'] = $this->view_table();
$this->load->view('Show_search', $data);
}
public function view_table(){
$result = $this->Student_mod->show_all_data();
if ($result != false) {
return $result;
} else {
return 'Database is empty !';
}
}
// department selection function 



public function select_by_department() {
$dept = $this->input->post('dept');
if ($dept != "") {
$result = $this->Student_mod->show_dept($dept);
if ($result != false) {
$data['result_display'] = $result;
} else {
$data['result_display'] = "No record found !";
}
} else {
$data = array(
'id_error_message' => "department field is required"
);
}
$data['show_table'] = $this->view_table();
$this->load->view('Show_search', $data);
}

// Department selection function ends here 

public function select_by_course() {
$course = $this->input->post('course');
if ($course != "") {
$result = $this->Student_mod->show_course($course);
if ($result != false) {
$data['result_display'] = $result;
} else {
$data['result_display'] = "No record found !";
}
} else {
$data = array(
'id_error_message' => "department field is required"
);
}
$data['show_table'] = $this->view_table();
$this->load->view('Show_search', $data);
}

//////////////////////////////


// Matric number selection function starts here 

public function select_by_matricno() {
$matricno = $this->input->post('matricno');
if ($matricno != "") {
$matricresult = $this->Student_mod->show_matricno($matricno);
if ($matricresult != false) {
$data['result_display'] = $matricresult;
} else {
$data['result_display'] = "No record found !";
}
} else {
$data = array(
'id_error_message' => "Matric field is required"
);
}
$data['show_table'] = $this->view_table();
$this->load->view('Show_search', $data);
}

// Matric number selection function ends here 


// id selection function starts here 


public function select_by_id() {
$id = $this->input->post('id');
if ($id != "") {
$result = $this->Student_mod->show_data_by_id($id);
if ($result != false) {
$data['result_display'] = $result;
} else {
$data['result_display'] = "No record found !";
}
} else {
$data = array(
'id_error_message' => "Id field is required"
);
}
$data['show_table'] = $this->view_table();
$this->load->view('Show_search', $data);
}

// id selection function starts here 

// Date selection function starts here 

public function select_by_date() {
$date = $this->input->post('date');
if ($date != "") {
$result = $this->employee_database->show_data_by_date($date);

if ($result != false) {
$data['result_display'] = $result;
} else {
$data['result_display'] = "No record found !";
}
} else {
$data['date_error_message'] = "Date field is required";
}
$data['show_table'] = $this->view_table();
$this->load->view('Show_search', $data);
}
//Date selection function ends here 


// Date selection function starts here 
public function select_by_date_range() {
$date1 = $this->input->post('date_from');
$date2 = $this->input->post('date_to');
$data = array(
'date1' => $date1,
'date2' => $date2
);
if ($date1 == "" || $date2 == "") {
$data['date_range_error_message'] = "Both date fields are required";
} else {
$result = $this->employee_database->show_data_by_date_range($data);
if ($result != false) {
$data['result_display'] = $result;
} else {
$data['result_display'] = "No record found !";
}
}
$data['show_table'] = $this->view_table();
$this->load->view('Show_search', $data);
}



// date range selection function ends here 








// here starts the function for VC mail viewing
		public function view_student_mail()
				{

				$this->load->view('Vc_stumail_view');
				}



	///////////////////////////////////////////////////////////////





// here begin the VC inbox selection

	public function vc_student_inbox(){
			$id = $this->uri->segment(3);
		$data['mail'] = $this->Edusoft_mod->show_all_stu_message();
		$this->load->view('Vc_stu_mail', $data);
		}



		
///////////////////////////////////////////////////////////////



// here begins the VC message selection


			function view_vc_message() {
		$id = $this->uri->segment(3);
		$data['read'] = $this->Edusoft_mod->read_message($id);
		$this->load->view('View_vc_msg', $data);
		}



/////////////////////////////////////////////////////////////////

//admin payment starts here.


		public function admin_payment()
				{

				$this->load->view('Payment_list');
				}


/////////////////////////////////////////////////////////////////


//admin payment starts here.


		function price_add(){   

				$add = array(
					
					"level"=>$this->input->post('lv'),
					"course_id" => $this->input->post('dpsci'),
					"tution_fee"=>$this->input->post('sci'));

				
					
				
				$this->Edusoft_mod->add_sci_payment($add);
			

			
					redirect('fee/select');
				}



	
		public function show_course_fee(){
		
			$data['result'] = $this->Edusoft_mod->show_prices();
			
			$this->load->view('Payment_entered_list', $data);
	
			
}
			


/////////////////////////////////////////////////////////////////


////////////////////here starts datagrid test///////////////


public function datagrid(){



			$this->load->view('datagrid');

		}		

public function datagrid_two(){



			$this->load->view('datagrid/sample8');

		}		


/////////////////////here ends datagrid test////////////////
	

////////////////////here starts chat test///////////////

		public function chat(){

			$this->load->view('chat/chat.php');

		}		

/////////////////////here ends chat test/////////////////
	
/////////////////////chat login starts here//////////////	


	public function validate_cred(){
			   $data = array(
        		// this is just like $_post("username") bla bla bla 
        		'uname' => $this->input->post('un'),
        		'pword' => $this->input->post('pw')
        		);
          $query = $this->Users_model->validate($data);
        if($query == TRUE)//if the user's creadential validated
        {
            		$username = $this->input->post('un');
            		$result = $this->Users_model->read_user_information($username);
         if ($result != false) {
            $data = array(
                'username' => $this->input->post('un'),
                'password' => $this->input->post('pw'),
                'is_logged_in' => true
            );
            $this->session->set_userdata($data);
            	redirect('Chat');
        }
        }
        else{
            $this->error();           
        }

    }
/////////////////////////chat ligin ends here/////////////////
}




?>
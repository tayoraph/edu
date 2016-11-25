<?php



	class Bimcom_ctrl extends CI_controller {

		function __construct()
{
parent::__construct();
$this->load->helper(array('form', 'url'));

$this->load->model('Bimcom_mod');
$this->load->helper('date');

}



	function New_poll(){
		$this->load->view('New_poll');
		
	}
	
	function index(){
		$this->load->view('firstbimbom');
		
	}
	
	
	function poll(){   
	$date = date('Y-m-d H:i:s'); 

 $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //Validating Name Field
        $this->form_validation->set_rules('sta', 'staff', 'required');

        //Validating Email Field
        $this->form_validation->set_rules('sc', 'Score', 'required');

        //Validating Mobile no. Field
        $this->form_validation->set_rules('party', 'Party', 'required');

        

        if ($this->form_validation->run() == FALSE) {
    
           $this->load->view('New_poll' );
           
         
        } else {

				$stumsg = array(
					"party_abbreviation"=>$this->input->post('party'),
					"entered_by_user"=>$this->input->post('sta'),
					"party_score"=>$this->input->post('sc'),
					"polling_unit_uniqueid"=>$this->input->post('pol'),
					"user_ip_address"=>$this->input->ip_address(),
					"date_entered"=>$date,
					
					);
					$this->db->insert('announced_pu_results', $stumsg); 
					$data['message']= "Poll result inserted successfully";
					 $this->load->view('New_poll', $data);
		} 	
		
	
	}

		
		function show_student() {

		$id = $this->uri->segment(3);
		$result = $this->Bimcom_mod->show_dept($dept);
		$this->load->view('Bimcom_view', $data);
		}

		function show_student_id() {
		$id = $this->uri->segment(3);
		$data['single_student'] = $this->Bimcom_mod->show_student_id($id);
		$this->load->view('edit_student', $data);
		}

			// department selection function 



		public function bimcom() {
		$dept = $this->input->post('dept');
		if ($dept != "") {
		$result = $this->Bimcom_mod->show_dept($dept);
		if ($result != false) {
		$data['result_display'] = $result;
		} else {
		$data['result_display'] = "No record found !";
		}
		} else {
		$data = array(
		'id_error_message' => "Select a Polling unit"
		);
		}
		
		$this->load->view('firstbimbom', $data);
		}

		// Department selection function ends here 




	function local(){
		$this->load->view('lga');
		
	}
public function lga() {
		$dept = $this->input->post('dept');
		if ($dept != "") {
		$result = $this->Bimcom_mod->lga($dept);
		if ($result != false) {
		$data['display'] = $result;
		} else {
		$data['display'] = "No record found !";
		}
		} else {
		$data = array(
		'id_error_message' => "Select a Polling unit"
		);
		}
		
		$this->load->view('lga', $data,$dept);
		}

		// Department selection function ends here 




}
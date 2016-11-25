<?php
class Upload extends CI_Controller {


function __construct()
{
parent::__construct();
$this->load->helper(array('form', 'url'));
$this->load->model('upload_model');
}
function index()
{
$this->load->view('admin_file_upload', array('error' => ' ' ));
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
$this->upload_model->add_image($file);
$data = array('upload_data' => $this->upload->data());
$this->load->view('upload_success', $data);

// the below is the ctrl that allows to insert into the edusoft_stu_details table
$data=$this->upload->data();
$this->thumb($data);
$filee=array(
'img_name'=>$data['raw_name'],

);
$this->upload_model->image($filee);
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




	// function to select particular student email for file upload

	
// function adding image upload and submit together begins here

function test(){


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
			$this->load->view('test', array('error' => ' ' ));

		}
		else
		{
			$this->load->view('adminhome');
		}

		}


	

// function adding image upload and submit together ends here



}
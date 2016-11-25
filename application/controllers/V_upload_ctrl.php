<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');

 
class V_upload_ctrl extends CI_Controller {
 
    //variable for storing error message
    private $error;
    //variable for storing success message
    private $success;
 
    function __construct() {
        parent::__construct();
        $this->load->model('upload_model');
        //load this to validate the inputs in upload form
        $this->load->library('form_validation');
    }
 
    //appends all error messages
    private function handle_error($err) {
        $this->error .= $err . "rn";
    }
 
    //appends all success messages
    private function handle_success($succ) {
        $this->success .= $succ . "rn";
    }

    // loading the videos view file.
    function add_videos()
    {
                          
        $this->load->view('videos_upload');
        
    }

    // uploading the video file. 
    public function add_videos_upload() {
        if ($this->input->post('video_upload')) {
            //set preferences
            //file upload destination
            $upload_path = './Videos/';
            $config['upload_path'] = $upload_path;
            //allowed file types. * means all types
            $config['allowed_types'] = 'wmv|mp4|avi|mov';
            //allowed max file size. 0 means unlimited file size
            $config['max_size'] = '0';
            //max file name size
            $config['max_filename'] = '255';
            //whether file name should be encrypted or not
            $config['encrypt_name'] = FALSE;
            //store video info once uploaded
            $video_data = array();
            //check for errors
            $is_file_error = FALSE;
            //check if file was selected for upload
            if (!$_FILES) {
                $is_file_error = TRUE;
                $this->handle_error('Choose a video file.');
            }
            //if file was selected then proceed to upload
            if (!$is_file_error) {
                //load the preferences
                $this->load->library('upload', $config);
                //check file successfully uploaded. 'video_name' is the name of the input
                if (!$this->upload->do_upload('video_name')) {
                    //if file upload failed then catch the errors
                    $this->handle_error($this->upload->display_errors());
                    $is_file_error = TRUE;
                } else {
                    //store the video file info
                    $video_data = $this->upload->data();
                }
            }




            // There were errors, we have to delete the uploaded video
            if ($is_file_error) {
                if ($video_data) {
                    $file = $upload_path . $video_data['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
                }
            } else {
                $data['video_name'] = $video_data['file_name'];
                $data['video_path'] = $upload_path;
                $data['video_type'] = $video_data['file_type'];
                $data['ext'] = $video_data['file_ext'];
               
                $file_db=array(
                'video_name'=> $data['video_name'],
                'ext'=> $data['ext'],
                'upload_date'=>time()
                );
                $video= $this->upload_model->add_image($file_db);
                $data2 = array('upload_data' => $this->upload->data());

if($video = true){
                $this->handle_success('Video was successfully uploaded');
            }
        }
        //load the error and success messages
        $data['errors'] = $this->error;
        $data['success'] = $this->success;
        //load the view along with data


        $this->load->view('videos_upload', $data);
    }
 
}


// updating the index videos 

     function index_video_update(){
 if($this->input->post('submit')){
        $update_video = array(
             "video_names"=>$this->input->post('pos1'),
                    );

            $firstagain = $this->input->post('pos1');
          
            $upload_update= $this->upload_model->position1($update_video);
            
                if ($upload_update = True){
            $Suc['update1']= ' Your video ' . $firstagain . ' has been updated to position 1';
                
          $this->load->view('videos_upload', $Suc);


 }
    
}
}

 function index_video_update2(){
 if($this->input->post('submit')){
        $update_video2 = array(
            "video_names"=>$this->input->post('pos1'),
                    );

            $firstagain = $this->input->post('pos1');
          
            $upload_update= $this->upload_model->position2($update_video2);
            
                if ($upload_update = True){
            $Suc['update1']= ' Your video ' . $firstagain . ' has been updated to position 2';
                
          $this->load->view('videos_upload', $Suc);


 }
    
}
}

 function index_video_update3(){
 if($this->input->post('submit')){
        $update_video3 = array(
             "video_names"=>$this->input->post('pos1'),
                    );

            $firstagain = $this->input->post('pos1');
         
            $upload_update= $this->upload_model->position3($update_video3);
            
                if ($upload_update = True){
            $Suc['update1']= ' Your video ' . $firstagain . ' has been updated to position 3';
                
          $this->load->view('videos_upload', $Suc);


 }
    
}
}

 function index_video_update4(){
 if($this->input->post('submit')){
        $update_video4 = array(
             "video_names"=>$this->input->post('pos1'),
                    );

            $firstagain = $this->input->post('pos1');
           
            $upload_update= $this->upload_model->position4($update_video4);
            
                if ($upload_update = True){
            $Suc['update1']= ' Your video ' . $firstagain . ' has been updated to position 4';
                
          $this->load->view('videos_upload', $Suc);


 }
    
}
}

}
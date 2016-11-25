    <?php

include("includes/sessions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Video Upload</title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url();?>fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url();?>css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/icheck/flat/green.css" rel="stylesheet">


  <script src="<?php echo base_url();?>js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>
  


      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
         
         

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>         </h2>


                   

                  <ul class="nav navbar-right panel_toolbox">
                    <li>

                       
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                    <div class="profile_img">

                      <!-- end of image cropping -->
                      <div id="crop-avatar">
                        <!-- Current avatar -->
                        <div class="avatar-view" title="Change the avatar">
                         
          <!-- passport start here         -->
      <a href="#"><i class="fa fa-chevron-up"></i></a>
                  <!-- passport ends here         -->
                    </div>

       <!-- Cropping modal -->
 <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
       <div class="modal-dialog modal-lg">
           <div class="modal-content">
    <form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
          <div class="modal-header">
           <button class="close" data-dismiss="modal" type="button">&times;</button>
              <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                        </div>
                    <div class="modal-body">
                       <div class="avatar-body">

           <!-- Upload image and data -->
     <div class="avatar-upload">
       <input class="avatar-src" name="avatar_src" type="hidden">
          <input class="avatar-data" name="avatar_data" type="hidden">
                <label for="avatarInput">Local upload</label>
              <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                            </div>

           <!-- Crop and preview -->
           <div class="row">
             <div class="col-md-9">
                    <div class="avatar-wrapper"></div>
                          </div>
                        <div class="col-md-3">
              <div class="avatar-preview preview-lg"></div>
               <div class="avatar-preview preview-md"></div>
              <div class="avatar-preview preview-sm"></div>
                                 </div>
                                    </div>

                 <div class="row avatar-btns">
                           <div class="col-md-9">
                             <div class="btn-group">
                <button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">Rotate Left</button>
         <button class="btn btn-primary" data-method="rotate" data-option="-15" type="button">-15deg</button>
          <button class="btn btn-primary" data-method="rotate" data-option="-30" type="button">-30deg</button>

          <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button">-45deg</button>
                                        </div>
                           <div class="btn-group">
          <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">Rotate Right</button>

         <button class="btn btn-primary" data-method="rotate" data-option="15" type="button">15deg</button>

       <button class="btn btn-primary" data-method="rotate" data-option="30" type="button">30deg</button>
                                          
      <button class="btn btn-primary" data-method="rotate" data-option="45" type="button">45deg</button>
                                        </div>
                                      </div>
                                      <div class="col-md-3">
     <button class="btn btn-primary btn-block avatar-save" type="submit">Done</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                  
                              </form>
                            </div>
                          </div>
                        </div>
                        <!-- /.modal -->

                        <!-- Loading state -->
                        <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                      </div>
                      <!-- end of image cropping -->

                    </div>
                  


                       <!-- below is the side navigation bar -->

                    <?php  include ('includes/prof_bar.php');?>

                    <!-- above is the side navigation bar -->

                      <?php  include ('includes/files_bar.php');?>



                  <div class="col-md-9 col-sm-9 col-xs-12">

                    <div class="profile_title">
                      <div class="col-md-6">
                        <h2></h2>
        <div class="message_wrapper">               

        <h4 class="heading"> 


</div>

       
    

  <?php echo form_open_multipart('add_videos_upload');?>
<div>

<h3> show uploaded videos here.</h3>

 <div id="container">
            
            <div id="body">
                <p>Select a video file to upload</p>
                <?php
                if (isset($success) && strlen($success)) {
                    echo '<div class="success">';
                    echo '<p>' . $success . '</p>';
                    echo '</div>';
                    
                    //traditional video play
                    echo '<object width="338" height="300">
                      <param name="src" value="' . $video_path . '/' . $video_name . '">
                      <param name="autoplay" value="false">
                      <param name="controller" value="true">
                      <param name="bgcolor" value="#333333">
                      <embed type="' . $video_type . '" src="' . $video_path . '/' . $video_name . '" autostart="false" loop="false" width="338" height="300" controller="true" bgcolor="#333333"></embed>
                      </object>';
 
                    //HTML5 video play
                    /*echo '<video width="320" height="240" controls>
                      <source src="' . $video_path . '/' . $video_name . '" type="' . $video_type . '">
                      Your browser does not support the video tag.
                      </video>';*/
                }
                if (isset($errors) && strlen($errors)) {
                    echo '<div class="error">';
                    echo '<p>' . $errors . '</p>';
                    echo '</div>';
                }
                if (validation_errors()) {
                    echo validation_errors('<div class="error">', '</div>');
                }
                ?>
        <?php
     $attributes = array('name' => 'video_upload_form', 'id' => 'video_upload_form');
                echo form_open_multipart($this->uri->uri_string(), $attributes);
                ?>
                <p><input name="video_name" id="video_name" readonly="readonly" type="file" /></p>
                <p><input name="video_upload" value="Upload Video" type="submit" /></p>
                <?php
                echo form_close();
                ?>
            </div>
 
        </div>
        <p>  <br />  <em>Max file upload size is 4 megabytes</em></p>


<h2> Selecting the videos to show in the home page </h2>
<!-- Video position 1-->

<!-- setting the response from controller starts here-->
<?php  if (isset($update1)){?>
  <CENTER><h3 style="color:blue;">

    <?php echo $update1;?>
    </h3></CENTER><br>
    <?php }; ?>


    <?php  if (isset($notupdate1)){?>
  <CENTER><h3 style="color:blue;">

    <?php echo $notupdate1;?>
    </h3></CENTER><br>
    <?php }; ?>

<!-- setting the response from controller ends here-->


<form method="post" action ="<?php echo base_url();?>update_videos">
<label> Position 1</label>
<select name="pos1">
  <?php  
// Open a directory, and read its contents
         $dir = "./Videos/";
  if (is_dir($dir)){
          if ($dh = opendir($dir)){
            while (($file['allfiles'] = readdir($dh)) !== false){
              //echo "filename:" . $file['allfiles'] . "<br>";?>
  <option value="<?php echo $file['allfiles'];?>">

  <?php echo $file['allfiles'];?> </option>
<?php }
}
}
?>
  </select>
   <br />
  <input type="submit" Value ="submit" name="submit">
</form>
<br />
<br />
<!-- Video position 2-->

<form method="post" action ="<?php echo base_url();?>update_videos2">
<label> Position 2</label>
<select name="pos1">
  <?php  
// Open a directory, and read its contents
         $dir = "./Videos/";
  if (is_dir($dir)){
          if ($dh = opendir($dir)){
            while (($file['allfiles'] = readdir($dh)) !== false){
              //echo "filename:" . $file['allfiles'] . "<br>";?>
  <option value="<?php echo $file['allfiles'];?>">

  <?php echo $file['allfiles'];?> </option>
<?php }
}
}
?>
  </select>
   <br />
  <input type="submit" Value ="submit" name="submit">
</form>
<br />
<br />
<!-- Video position 3-->

<form method="post" action ="<?php echo base_url();?>update_videos3">
<label> Position 3</label>
<select name="pos1">
  <?php  
// Open a directory, and read its contents
         $dir = "./Videos/";
  if (is_dir($dir)){
          if ($dh = opendir($dir)){
            while (($file['allfiles'] = readdir($dh)) !== false){
              //echo "filename:" . $file['allfiles'] . "<br>";?>
  <option value="<?php echo $file['allfiles'];?>">

  <?php echo $file['allfiles'];?> </option>
<?php }
}
}
?>
  </select>
   <br />
  <input type="submit" Value ="submit" name="submit">
</form>
<br />
<br />
<!-- Video position 4-->

<form method="post" action ="<?php echo base_url();?>update_videos4">
<label> Position 4</label>
<select name="pos1">
  <?php  
// Open a directory, and read its contents
         $dir = "./Videos/";
  if (is_dir($dir)){
          if ($dh = opendir($dir)){
            while (($file['allfiles'] = readdir($dh)) !== false){
              //echo "filename:" . $file['allfiles'] . "<br>";?>
  <option value="<?php echo $file['allfiles'];?>">

  <?php echo $file['allfiles'];?> </option>
<?php }
}
}
?>
  </select>
   <br />
  <input type="submit" Value ="submit" name="submit">
</form>



                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



        <?php include ("includes/footer.php");?>
</body>

</html>





    <?php

include ("includes/session_confirm.php");

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

  <title>Student's Profile</title>

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
  <ol> <?php foreach ($single_student as $students): ?>   

    
    </ol>
  


      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>   
  You are here to edit  <?php echo $students->firstname; ?> 's Profile   
                          
      
         </h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

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


                    <img src="<?php echo base_url();?>uploads/<?php echo $students->img_name;?>.jpg
                    " alt=""><a href="#"><i class="fa fa-chevron-up"></i></a>
        
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
                                <!-- <div class="modal-footer">
                                                  <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                                </div> -->
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

                    <?php  include ('includes/admin_navigation_bar.php');?>

                    <!-- above is the side navigation bar -->





                  <div class="col-md-9 col-sm-9 col-xs-12">

                    <div class="profile_title">
                      <div class="col-md-6">
                        <h2>   <?php echo $students->firstname; ?>   
                          <?php echo $students->lastname; ?> 's Profile</h2>
        <div class="message_wrapper">               

        <h4 class="heading"> 


</div>




      

    


       <form class="form-horizontal form-label-left" novalidate method= "post"  action= "<?php echo base_url();?>update_student" >

                    

                    <span class="section"> 
                          
                    </span>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Id <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="occupation" type="text" value=" <?php echo $students->id; ?>"  name="id" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">firstname <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="fn" value = " <?php echo $students->firstname; ?>" placeholder="EDUSOFT name" required="required" type="text">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">lastname<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" id="email" value = " <?php echo $students->lastname; ?>"name="ln" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" id="email2" value = " <?php echo $students->email; ?>" name="em" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                     <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Sex <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" id="email2" value = " <?php echo $students->sex; ?>" name="sex" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Username<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="url" id="website" value = " <?php echo $students->username; ?>" name="un" required="required" placeholder=" " class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    
                     <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Date registered<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="url" id="website" value = " <?php echo $students->date; ?>" name="date" required="required" placeholder="www.website.com" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                          <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Faculty</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="select2_single form-control" tabindex="-1" name="fa">
                       
                          <option value="">Select faculty</option>
                                  <option value="1">Science</option>
                                  <option value="2">Arts</option>
                                  <option value="3">Education</option>
                                  <option value="4">Management Science</option>
                        </select>
                      </div>
                    </div>



                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Department</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="select2_single form-control" tabindex="-1" name="dt">
                         
                               <option value="">Select Department</option>
                                  <option value="1">Microbiology</option>
                                  <option value="2">Accounting</option>
                                  <option value="3">English</option>
                        </select>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Course</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="select2_single form-control" tabindex="-1" name="co">
                       
                          <option value="">Select Student's Course</option>
                                  <option value="1">Microbiology</option>
                                  <option value="2">Biochemistry</option>
                                  <option value="3">Accounting</option>
                                  <option value="4">English</option>
                                  <option value="5">Law</option>
                                  <option value="6">Medicine</option>
                        </select>
                      </div>
                    </div>


                       <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Matric Number<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="url" id="website" value = "<?php echo $students->matricno ; ?> " name="mt" required="required" placeholder=" " class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                          

                     


                      


                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <input type="submit" class="btn btn-primary"value="Cancel" name=Cancel>
                        <input id="send" type="submit" class="btn btn-success"value="Update <?php echo $students->username; ?> " name=submit>
                      </div>
                    </div>
                  </form>
  <?php endforeach; ?>
                  
                      </div>
                      <div class="col-md-6">
                        <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                          <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                          <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                        </div>
                      </div>
                    </div>
                    <!-- start of user-activity-graph -->
                    <div id="graph_bar" style="width:100%; height:280px;"></div>
                    <!-- end of user-activity-graph -->

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">search by departmenr</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">search by Username</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Search by faculty</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">search by Matric No</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                          <!-- start recent activity -->
                          <ul class="messages">
                            <li>
                              <img src="<?php echo base_url();?>images/img.jpg" class="avatar" alt="Avatar">
                              <div class="message_date">
                                <h3 class="date text-info">24</h3>
                                <p class="month">May</p>
                              </div>
                              <ol>
   

                              <div class="message_wrapper">
                                <h4 class="heading">Desmond Davison</h4>
                                <blockquote class="message"></blockquote>
                                <br />
                                <p class="url">
                                  <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                  <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                </p>
                              </div>
                            </li>
                            
                          </ul>
                          <!-- end recent activity -->


                           
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">


                          <!-- end user projects -->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                            photo booth letterpress, commodo enim craft beer mlkshk </p>
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

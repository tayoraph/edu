



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

  <title>Tution Payment List</title>

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
<link rel="stylesheet" href="<?php echo base_url();?>assets/datagridcss/dgstyle.css">
<script src="<?php echo base_url();?>assets/datagridjs/dgscripts.js"></script>

        <?php

  include ("Phpmydatagrid.class.php");
  
  $objGrid = new datagrid;
  
  $objGrid -> friendlyHTML();

  $objGrid -> pathtoimages("<?php echo base_url();?>assets/datagridimages");

  $objGrid -> closeTags(true);  
  
  $objGrid -> form('edusoft_fee_prices', true);
  
  $objGrid -> methodForm("post"); 
  
  $objGrid -> total("tution_fee,workeddays");
  
  $objGrid -> searchby("id,tution_fee,course_id");
  
  //$objGrid -> linkparam("sess=".$_REQUEST["sess"]."&username=".$_REQUEST["username"]);   
  
  $objGrid -> decimalDigits(2);
  
  $objGrid -> decimalPoint(",");
  
  $objGrid -> conectadb("localhost", "omrcocor", "8Vopt@#4dC22", "omrcocor_cccoousp");
  
  $objGrid -> tabla ("edusoft_fee_prices");

  /* Allow Add, edit, delete or view records */
  $objGrid -> buttons(true,true,true,true);
  
  /* Keyfield must be defined to identify each row */
  $objGrid -> keyfield("id");

  /* A code is related with some transactions. so is very dificult to someone to try to do unauthorized process */
  /* There are a internal code but you can made it strong by setting this function" */
  $objGrid -> salt("Some Code4Stronger(Protection)");

  $objGrid -> TituloGrid("Tution Fee payment details");

  $objGrid -> FooterGrid("<div style='float:left'>&copy; 2007 Herosoftware.com</div>");

  $objGrid -> datarows(5);
  
  $objGrid -> paginationmode('links');

  $objGrid -> orderby("course_id", "DESC");

  $objGrid -> noorderarrows();
  
  $objGrid -> FormatColumn("id", "Serial Number", 5, 5, 1, "50", "center", "integer");
  $objGrid -> FormatColumn("course_id", "Course", 30, 30, 0, "150", "left");
  $objGrid -> FormatColumn("tution_fee", "Tution Fee", 30, 30, 0, "150", "right");
  $objGrid -> FormatColumn("level", "Level", 5, 5, 0, "50", "center");
  //$objGrid -> FormatColumn("afiliation", "Afiliation Date", 10, 10, 0, "100", "center", "date:dmy:/");
  //$objGrid -> FormatColumn("status", "Status", 5, 5, 0, "60", "left", "select:1_Single:2_Married:3_Divorced");
  //$objGrid -> FormatColumn("active", "Active", 2, 2, 0,"50", "center", "check:No:Yes");
  //$objGrid -> FormatColumn("salary", "Salary", 10, 10, 0, "90", "right", "money:&euro;");
  //$objGrid -> FormatColumn("workeddays", "Work days", 5, 2, 0, "50", "right", "integer");

  //$objGrid -> where ("active = '1'");

  $objGrid -> setHeader();
?>

</head>



      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>   

      
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
                  <h2>User Report <small>Activity report</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
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
                          <img src="images/picture.jpg" alt="Avatar">
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

                    <?php  include ('includes/prof_bar.php');?>

                    <!-- above is the side navigation bar -->





                  <div class="col-md-9 col-sm-9 col-xs-12">



       <?php include ('includes/count_bar.php');?>



                    <div class="profile_title">
                      <div class="col-md-6">
                        
        <div class="message_wrapper">               



<h2> Check all tution fee Below</h2>

            


<?php 
  $objGrid -> grid();
  
  $objGrid -> desconectar();
?>





        <h4 class="heading"> 
        
    </ol></h4>



</div>




                  
                      </div>
                    
                    </div>
                    <!-- start of user-activity-graph -->
                    <div id="graph_bar" style="width:100%; height:280px;"></div>
                    <!-- end of user-activity-graph -->

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      
                          


                      
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                          <!-- start recent activity -->
                          <ul class="messages">
                            


                            
                          </ul>




                         
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

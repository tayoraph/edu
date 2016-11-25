


<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Edusoft| New Student Registration</title>

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



<body style="background:url(<?php echo base_url();?>images/img1.jpg)">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">

<?php  //include ("includes/registration_form.php");

  if (isset($error)){?>
  <CENTER><h3 style="color:orange;">

    <?php echo $error;?>
    </h3></CENTER><br>
    <?php }; 


  if (isset($message)){?>
  <CENTER><h3 style="color:orange;">

    <?php echo $message;?>
    </h3></CENTER><br>
    <?php }; ?>

<!--<?php// echo validation_errors(); ?>-->
          <form class="form-horizontal form-label-left" novalidate  action="<?php echo base_url();?>stureg" method="post" enctype='multipart/form-data' >
            <h1>Fill form to register </h1>

            <h3> All fields are <strong></strong><em>Compulsory</em></strong></h3>
            <div>
            <?php echo form_error('fn'); ?>
              <input type="text" name ="fn" class="form-control" placeholder="Firstname" required="" />
            
            </div>

            <div>
            <?php echo form_error('ln'); ?>
              <input type="text" name ="ln" class="form-control" placeholder="Lastname" required="" />
              

            </div> 

            <div>
            <?php echo form_error('sex'); ?>
              <input type="text" name ="sex" class="form-control" placeholder="Sex" required="" />
             
            </div>

            <div>
            <?php echo form_error('un'); ?>
              <input type="text" name ="un" class="form-control" placeholder="Username" required="" />
            
            </div>
            
            <div>
            <?php echo form_error('pw'); ?>
              <input type="password" name ="pw" class="form-control" placeholder="Password" required="" />
            
            </div>

            <div>
            <?php echo form_error('pwconf'); ?>
              <input type="password" name ="pwconf" class="form-control" placeholder=" Confirm Password" required="" />
            </div>

            <div>
            <?php echo form_error('em'); ?>
              <input type="email" name ="em" class="form-control" placeholder="Email" required="" />
            
            </div>

             <img src="<?php echo base_url();?>assets/images/load3.jpg" alt=""><br />

              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Select Your Passport<span class="required">*</span>
                      </label>
              <input id="name" type='file'   name='userfile' placeholder="Firstname" required="required" size='15'>

              <br /><br />
                 
            <div>
            <?php echo form_submit(array('id' => 'submit', 'value' => 'Register' )); ?>
                <?php echo form_close(); ?>
             
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">Already a Student ?
                <a href="<?php echo base_url();?>stulogin" class="to_register"> Log in to view your profile </a>
              </p>
              <div class="clearfix"></div>
              <br />
               <a href="<?php echo base_url();?>" class="to_register"> Back to Home </a>
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Edusoft</h1>

                    <p> HERO Software. &copy 2016 All Rights Reserved.</p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
     
    </div>
  </div>

</body>

</html>



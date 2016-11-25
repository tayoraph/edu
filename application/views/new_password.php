
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Edusoft</title>

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



<body style="background:url(<?php echo base_url();?>images/img2.jpg);">
<?php if (isset($uname)){?>
  <CENTER><h3 style="color:Brown;">

    <?php //echo $uname;?>
    </h3></CENTER><br>
    <?php }; ?>
  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
           <form method= "post" action= "<?php echo base_url();?>enter_new_password">
            <h1>Reset Your Password </h1>
 
            <div>
              <input type="password" class="form-control" name =" pw" placeholder="Password" required="" />
            </div>

            <div>
              <input type="password" class="form-control" name =" pwconf" placeholder="confirm Password" required="" />
            </div>
              <br />
            <div>
              <input type ="submit" name ="submit" Value = "Reset Password"/>
               <a class="reset_pass" href="<?php echo base_url();?>stulogin">Go back to Login</a>
            </div>

                  
                

                 <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">New to Edusoft ?
                <a href="<?php echo base_url();?>stureg" class="to_register"> Register </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <a href="<?php echo base_url();?>" class="to_register"> Back to Home </a>
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Edusoft</h1>

                <p> Hezekaih Software  &copy 2016 All Rights Reserved. </p>
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
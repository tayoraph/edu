


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



<body style="background:url(<?php echo base_url();?>images/.jpg)">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>
<ol>
    <?php foreach ($students as $student): ?>
    <li><a href="<?php echo base_url() . "Student_ctrl/show_student_id/" . $student->id; ?>"><?php echo $student->firstname; ?></a></li>
    <?php endforeach; ?>
    </ol>
<!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
<?php foreach ($single_student as $student): ?>
    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">


        
    </div>
    <div id="detail">


         <form method ="post" action= "<?php echo base_url() . "update_student"?>">
            <h1>Update your profile </h1>

            

              <div>
              <input type="text" name ="id" class="form-control" placeholder="" required=""  value="<?php echo $student->id; ?>"/>
            </div>


            <div>
              <input type="text" name ="fn" class="form-control" placeholder="Firstname" required=""  value="<?php echo $student->firstname; ?>"/>
            </div>

            <div>
              <input type="text" name ="ln" class="form-control" placeholder="Lastname" required="" value="<?php echo $student->lastname; ?>" />
            </div>

            <div>
              <input type="text" name ="sex" class="form-control" placeholder="Sex" required="" value="<?php echo $student->sex; ?>" />
            </div>

            <div>
              <input type="text" name ="un" class="form-control" placeholder="Username" required="" value="<?php echo $student->username; ?>"/>
            </div>
            
            

            <div>
              <input type="email" name ="em" class="form-control" placeholder="Email" required="" value="<?php echo $student->email; ?>"/>
            </div>

            <div>
              <input class="btn btn-default submit" type = "submit" name = "submit" value="update"/>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <
              <div class="clearfix"></div>
              <br />
             <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Edusoft</h1>

                    <p> Hezekaih Software. &copy 2016 All Rights Reserved.</p>
              </div>
            </div>

          </form>-->
          <!-- form -->
          <?php endforeach; ?>
        </section>
        <!-- content -->
      </div>
     
    </div>
  </div>

</body>

</html>



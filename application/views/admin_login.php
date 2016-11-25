<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Admin login</title>
    
    
    
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

        <link rel="stylesheet" href="<?php echo base_url();?>css/style2.css">

    
    
    
  </head>

  <body>

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

<div class="login">
  <div class="login-header">
    <h1>Admin Login</h1>
  </div>
  <?php if (isset($message)){?>
  <CENTER><h3 style="color:orange;">

    <?php echo $message;?>
    </h3></CENTER><br>
    <?php }; ?>
  <div class="login-form">
  <form method= "post"  action= "<?php echo base_url();?>adminhome" >
    <h3>Username:</h3>
    <input type="text" name ="un" placeholder="Username"/><br>
    <h3>Password:</h3>
    <input type="password" name= "pw" placeholder="Password"/>
    <br>
               <p> <tr>

              <td>Level</td>

              <td>:</td>

              <td><select name="access" class="inputan">

              <option value="Choose Access Level">Choose Access Level</option>

              <option value="Admin">Admin</option>

              <option value="Lecturer">Lecturer</option>
              <option value="Student">Student</option>

              <option value="None">None</option>

              </select></td>

              </tr></p>

       <br />
    <input type="submit" value="Login" name ="submit" class="login-button"/>
    <br>
   
    <h6 class="no-access"><a href="#"> Can't access your account?</a></h6>

    </form>
  </div>
</div>
<div class="error-page">
  <div class="try-again">Error: Try again?</div>
</div>

<a href="<?php echo base_url();?>" style-decoration="none"> Back to homepage </a>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

        <script src="<?php echo base_url();?>js/index1.js"></script>

    
    
    
  </body>
</html>

		<?php include ("includes/session_confirm.php");?>
<!DOCTYPE HTML>
<html>
<head>
<title> Register Courses  </title>

<?php include ("includes/ft.header.php");?>



	<!--End-image-slider---->
	<div class="wrap">
	  <div class="main">
					<div class="bottom-grids">
				 
					<h3 style=" color: #042b94;  background-color:#d25816; width:20%; font-weight:bold;">Welcome <?php
echo $firstname . ' ' . $lastname; 
 ?> </h3>
 <br />
<h4 style=" color: #f21133;  background-color:#154745;  font-weight:bold;"> <?php
echo ' Department :' . ' ' . $department;
 ?></h4>



					<?php include ("includes/student_view_link.php");?>

							<div class="bottom-grid2 bottom-mid">
									<h3></h3>
									<span></p>


	
<?php  if (isset($fee)){?>
  <CENTER><h3 style="color:blue;">

    <?php echo $fee;?>
    </h3></CENTER><br>
    <?php }; ?>



<?php  if ($courses){?>

<table style="width:100%; color:#07222f; border: 1px solid blue;background-color: #f1f1c1;">
<tr style="font-weight: bold; color: #d28f0f; ">
    <th>Courses</th>
    <th>Course Code</th> 
    <th>Semester</th>
 </tr>
<?php 

foreach($courses as $it){?>

 <tr style="border: 1px solid blue">
    <td style="color: #480460;  border-color:#0c5f9c; "><?php echo $it->course;?></td>
     <td style="color: #fb5757; border-color: #0c5f9c;"><?php echo $it->course_code;?></td>
      <td style="color: #31270d; border-color: #0c5f9c; font-style:italic;"><?php echo $it->semester;?></td>
  </tr>
  </table>
<div class="col span_2_of_3">
				  <div class="contact-form">

	<form method="post" action="<?php echo base_url();?>contactus">
<!--<span style="color:red;">*</span>-->

					    	<div>
						    	 <span><label><?php echo form_label('course 2 '); ?> <br/><?php echo form_error('co2'); ?> <br/><?php echo form_error('co2'); ?></label></span>
						    	<span><select name="co2">
  <option value="<?php echo $it->course;?>"><?php echo $it->course;?></option>
 
</select>

</span> 

						    	<span><label><?php echo form_label('course 2_code '); ?> <br/><?php echo form_error('code2'); ?> <br/><?php echo form_error('course 2_code'); ?></label></span>
						    	<span><select name="co2">
  <option value="<?php echo $it->course_code;?>"><?php echo $it->course_code;?></option>
 
</select>

</span> 
						    </div>
						    <div>
						    	 <span><label><?php echo form_label('course 2 '); ?> <br/><?php echo form_error('co2'); ?> <br/><?php echo form_error('co2'); ?></label></span>
						    	<span><select name="co2">
  <option value="<?php echo $it->course;?>"><?php echo $it->course;?></option>
 
</select>

</span> 

						    	<span><label><?php echo form_label('course 2_code '); ?> <br/><?php echo form_error('code2'); ?> <br/><?php echo form_error('course 2_code'); ?></label></span>
						    	<span><select name="co2">
  <option value="<?php echo $it->course_code;?>"><?php echo $it->course_code;?></option>
 
</select>

</span> 
						    </div>
						    <div>
						    	 <span><label><?php echo form_label('course 2 '); ?> <br/><?php echo form_error('co2'); ?> <br/><?php echo form_error('co2'); ?></label></span>
						    	<span><select name="co2">
  <option value="<?php echo $it->course;?>"><?php echo $it->course;?></option>
 
</select>

</span> 

						    	<span><label><?php echo form_label('course 2_code '); ?> <br/><?php echo form_error('code2'); ?> <br/><?php echo form_error('course 2_code'); ?></label></span>
						    	<span><select name="co2">
  <option value="<?php echo $it->course_code;?>"><?php echo $it->course_code;?></option>
 
</select>

</span> 
						    </div>
						    
						  <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit' , )); ?>
					      <?php echo form_close(); ?>


</div>
</div>
<?php }} 

else
{ echo " You are not our student ";}?>
								

<?php  if (isset($levcou)){?>
  <CENTER><h3 style="color:blue;">

    <?php echo $levcou;?>
    </h3></CENTER><br>
    <?php }; ?>




	



 					
					</div>
  				</div>	


								    </div>



								</div>

						  <div class="bottom-grid3 bottom-last">
									<h3>Passport</h3>
									
									<br />
									<img src="<?php echo base_url();?>uploads/<?php echo $image;?><?php echo $image_ext;?>"
                   						   alt="">
               <?php include ("includes/Student_view_rightlink.php");  ?>
								</div>
								<div class="clear"> </div>
			</div>
	     </div>
	</div>
		<?php include ("includes/ft.footer.php");?>
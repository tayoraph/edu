<!DOCTYPE HTML>
<html>
<head>
<title>Edusoft | Contact Us </title>

<?php include ('includes/ft.header.php');?>




<div class="wrap">
	<div class="main">
		   <div class="contact">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3>Edusoft </h3>
						    	<p>Ikeja , Lagos </p>
						   		
						<p>Phone:08067824358</p>
				   		
				 	 	<p>Email: <span>admin@herosoftware.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">


				  	<h3>Contact Us</h3>

			<?php 	if (isset($error)){?>
  <CENTER><h3 style="color:red;">

    <?php echo $error;?>
    </h3></CENTER><br>
    <?php }; ?>


 <?php  if (isset($message)){?>
  <CENTER><h3 style="color:blue;">

    <?php echo $message;?>
    </h3></CENTER><br>
    <?php }; ?>

 
 <!--<?php if(validation_errors()) { ?>
<div class="alert alert-warning">
<?php echo validation_errors(); ?>
</div>
<?php } ?>-->
					   <form method="post" action="<?php echo base_url();?>contactus">
<!--<span style="color:red;">*</span>-->

					    	<div>
						    	 <span><label><?php echo form_label('NAME '); ?> <br/><?php echo form_error('na'); ?></label></span>
						    	<span><input  type="text" class="textbox" name= "na"></span> 
						    </div>
						    <div>
						    	<span><label><?php echo form_label('EMAIL '); ?> <?php echo form_error('em'); ?></label></span>
						    	<span><input  type="text" class="textbox" name= "em"></span>
						    </div>
						    <div>
						     	<span><label><?php echo form_label('MOBILE '); ?> <?php echo form_error('mob'); ?></label></span>
						    	<span><input  type="text" class="textbox" name= "mob"></span>
						    </div>
						    <div>
						    	<span><label><?php echo form_label('SUBJECT '); ?> <?php echo form_error('msg'); ?></label></span>
						    	<span><textarea name="msg"> </textarea></span>
						    </div>
						  <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit' , )); ?>
					      <?php echo form_close(); ?>
					</div>
  				</div>	
  				<div class="clear"></div>			
	    </div>
	</div>
</div>
	

	<?php include('includes/ft.footer.php'); ?>

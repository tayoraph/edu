<!DOCTYPE HTML>
<html>
<head>
<title>Upload Successful</title>
<?php include ("includes/ft.pages.header.php");?>



</body>
</html>







<div class="wrap">
	<div class="main">
		<div class="about-top">
				 <div class="lsidebar1 span_1_of_a offers_list">
				      <h3>Testimonials</h3>
				     	<div class="testimonials">
		  					 <h3>Skillsset Educational Institute<span><a href="www.omrcoc.org/skillsset">Register with us to be a programmer</a></span></h3>
		  					 <p><span class="quotes"></span>We train in information Technology<span class="quotes-down"></span></p>
		  				</div>
		  				<div class="testimonials">
		  					 <h3>Edusoft <span><a href="http://hezekaihsoft.com"> Visit Us</a></span></h3>
		  					 <p><span class="quotes"></span>A wonderful school management system you will forever love for your school.<span class="quotes-down"></span></p>
		  				</div>
		  				

		  				<div class="testimonials">
		  					
		  					 <span class="quotes">  
		  				</div>
				  </div>
					 <div class="cont1 span_2_of_a about_desc">
				      <img src="<?php echo base_url();?>assets/images/succ1.jpg" alt="">


				       <h3>Your passport was successfully uploaded!</h3>

					<ul>
							<?php foreach ($upload_data as $item => $value):?>
									<li><?php echo $item;?>: <?php echo $value;?></li>
									<?php endforeach; ?>
					</ul>

							<p><?php echo anchor('Upload_file', 'Upload Another File!'); ?></p>

								<center><p><a href="#"> Back to step 1</a> | <a href="#"> Go to step 3</a></p></center>
		    			   <div class="clear"></div> 
			  				 </div>
			  		   </div>	
				      <div class="clear"></div> 			
		   		</div>
			</div>
	</div>
	<?php include ("includes/ft.pages.footer.php");?>
<!DOCTYPE HTML>
<html>
<head>
<title> Edusoft | Home </title>

<?php include ("includes/ft.header.php");?>


  

   

	<!--End-image-slider---->
	<div class="wrap">
	  <div class="main">
		<div class="section group">
		<?php  if ($video1){?>
					<?php foreach($video1 as $it){?>
	<div class="col_1_of_4 span_1_of_4">	
  						
				
			<video width="200" height="200" controls>
  				<source src="<?php echo base_url();?>Videos/<?php echo $it->video_names;?>">
  
			</video>
					
						</div>
<?php }};?>

			
				
				
				
				<div class="clear"></div>
			</div>

<!--Second image slider starts here-->

	<?php include ("jsslider.php");?>

<!--Second image slider ends here-->

			<div class="bottom-grids">
				  <div class="bottom-grid1">
							<h3>Shortcuts</h3>
							
							<ul>
								<li><a href="<?php echo base_url();?>stureg"><img src="<?php echo base_url();?>assets/images/marker1.png"> Registration	</a></li>
								<li><a href="#"><img src="<?php echo base_url();?>assets/images/marker1.png"> Grades</a></li>
								<li><a href="#"><img src="<?php echo base_url();?>assets/images/marker1.png"> transcripts</a></li>
								<li><a href="<?php echo base_url();?>stulogin"><img src="<?php echo base_url();?>assets/images/marker1.png"> Payment tution fees</a></li>
								<li><a href="<?php echo base_url();?>parent"><img src="<?php echo base_url();?>assets/images/marker1.png"> Parent Portal</a></li>
								<li><a href="#"><img src="<?php echo base_url();?>assets/images/marker1.png"> Gallery</a></li>
								<li><a href="<?php echo base_url();?>chat"><img src="<?php echo base_url();?>assets/images/marker1.png"> Chats</a></li>
								<li><a href="<?php echo base_url();?>stulogin"> Student's Profile</a></li>
								<li><a href="#"><img src="<?php echo base_url();?>assets/images/marker1.png"> Network Management</a></li>
								<div class="clear"> </div>
							 </ul><br>
									
					</div>
								<div class="bottom-grid2 bottom-mid">
									<h3>Adminstration </h3>
									<span></p>
									<div class="gallery">
										<ul>
												<li><a href="<?php echo base_url();?>assets/images/t-pic4.jpg"><img src="<?php echo base_url();?>assets/images/pic4.jpg" alt=""></a></li>
												<li><a href="<?php echo base_url();?>assets/images/t-pic5.jpg"><img src="<?php echo base_url();?>assets/images/pic5.jpg" alt=""></a></li>
												<li><a href="<?php echo base_url();?>assets/images/t-pic6.jpg"><img src="<?php echo base_url();?>assets/images/pic6.jpg" alt=""></a></li>
												<li><a href="<?php echo base_url();?>assets/images/t-pic7.jpg"><img src="<?php echo base_url();?>assets/images/pic7.jpg" alt=""></a></li>
												<li><a href="<?php echo base_url();?>assets/images/t-pic8.jpg"><img src="<?php echo base_url();?>assets/images/pic8.jpg" alt=""></a></li>
												<li><a href="<?php echo base_url();?>assets/images/t-pic9.jpg"><img src="<?php echo base_url();?>assets/images/pic9.jpg" alt=""></a></li>
												<li><a href="<?php echo base_url();?>assets/images/t-pic10.jpg"><img src="<?php echo base_url();?>assets/images/pic10.jpg" alt=""></a></li>
												<li><a href="<?php echo base_url();?>assets/images/t-pic11.jpg"><img src="<?php echo base_url();?>assets/images/pic11.jpg" alt=""></a></li>
												<li><a href="<?php echo base_url();?>assets/images/t-pic12.jpg"><img src="i<?php echo base_url();?>assets/mages/pic12.jpg" alt=""></a></li>
											<div class="clear"> </div>
										</ul><br>
										
								    </div>
								</div>
							    <div class="bottom-grid3 bottom-last">
									<h3>Be informed that ......</h3>
									
									<p>Edusoft is a School Management Software. </p>
									<p>Make your Demand today.</p>
									<p>Second Semester for this session has Resumed.</p>
									<p>Tution Fee for All stalites will be closing on 13th May 2006.</p>
									<p>Make sure you fill your course forms after tution fee payment.</p>
									<br>
									<a href="#" class="button">Read More</a>
									
	
								</div>
								<div class="clear"> </div>
			</div>
	     </div>
	</div>
	

	<?php include ("includes/ft.footer.php");?>
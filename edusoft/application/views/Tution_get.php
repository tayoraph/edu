<?php include ("includes/sessions.php");?>
<!DOCTYPE HTML>
<html>
<head>
<title> Stalite Tution Payment </title>

<?php include ("includes/ft.header.php");?>



	<!--End-image-slider---->
	<div class="wrap">
	  <div class="main">
		
			<div class="bottom-grids">
				 

					<?php include ("includes/student_view_link.php");?>



								<div class="bottom-grid2 bottom-mid">
									<h3> welcome <?php $uname = ($this->session->userdata['username']);echo $uname;  





									?></h3>
									<span>


	


	<?php include ("includes/Tution_get_result.php");	?>


		</div>
	

											
<?php include ("includes/Student_view_rightlink.php");	?>



	
						
								    </div>
								</div>

						


								<div class="clear"> </div>
			</div>
	     </div>
	</div>
	

	<?php include ("includes/ft.footer.php");?>


<?php include ("includes/sessions.php");?>
<!DOCTYPE HTML>
<html>
<head>
<title> Stalite Tution Payment </title>

<?php include ("includes/ft.header.php");?>

<?php
if (isset($fee)) {
echo "<h3><u></u></h3>";
if ($fee == 'No record found !') {

} else {
echo "<table class='result_table'>";
foreach ($fee as $f) { 
	

}}}
	
?>

	<!--End-image-slider---->
	<div class="wrap">
	  <div class="main">
		 <div class="contact">
			<div class="bottom-grids">
				 

					<?php include ("includes/student_view_link.php");?>



								<div class="bottom-grid2 bottom-mid">
									<h3> Your username is  <?php $uname = ($this->session->userdata['username']);echo $uname;  





									?></h3>
									<span>


	


	

		</div>
	

			<?php include ("includes/Tution_form.php");	?>								



	
						


								    </div>
								</div>

						


								<div class="clear"> </div>
			</div>
	     </div>
	</div>
	

	<?php include ("includes/ft.footer.php");?>
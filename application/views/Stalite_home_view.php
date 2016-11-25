<?php include ("includes/sessions.php");?>
<!DOCTYPE HTML>
<html>
<head>
<title> Stalite Home </title>

<?php include ("includes/ft.header.php");?>



	<!--End-image-slider---->
	<div class="wrap">
	  <div class="main">
		
			<div class="bottom-grids">
				 

					<?php include ("includes/student_view_link.php");?>



								<div class="bottom-grid2 bottom-mid">
									<h3> </h3>
									<span></p>

<?php
if (isset($stalite)) {
echo "<h2><u><?php echo $value->firstname $value->lastname?></u></h2>";
if ($stalite == 'No record found !') {

} else {
echo "<table class='result_table'>";
echo '<tr><th> ID</th><th>Student Name</th><th>Matric Number</th><th>Matric no</th><th>Mobile</th><tr/>';
foreach ($stalite as $value) {
echo '<tr>' . '<td class="e_id">' . $value->id . '</td>' . '<td>' . $value->firstname . '</td>' . '<td class="j_date">' . $value->matricno . '</td>' . '<td>' . $value->course . '</td>' . '<td class="mob">' . $value->sex . '</td>' . '<tr/>';
}
echo '</table>';
}
}
?>					welcome <?php $uname = ($this->session->userdata['username']);

											
											echo $uname; 
											?>

	




								    </div>
								</div>
  <div class="bottom-grid3 bottom-last">
									
							
									
               <?php include ("includes/Student_view_rightlink.php");  ?>
								</div>


						


								<div class="clear"> </div>
			</div>
	     </div>
	</div>
	

	<?php include ("includes/ft.footer.php");?>
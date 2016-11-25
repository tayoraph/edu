
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
echo "<h3><u>Result</u></h3>";
if ($stalite == 'No record found !') {

} else {
echo "<table class='result_table'>";
foreach ($stalite as $value) { 
?>

 <table style="width:100%">
  <tr>
    <td>ID</td>
    <td><?php echo $value->id;?></td>
    <td></td>
  </tr>
  <tr>
    <td>STUDENT NAME</td>
    <td><?php echo $value->firstname	;?></td>
    <td></td>
  </tr>

  <tr>
    <td>COURSE</td>
    <td><?php echo $value->course_name;?></td>
    <td></td>
  </tr>
  <tr>
    <td>Department</td>
    <td><?php echo $value->dept_name;?></td>
    <td></td>
  </tr>
  <tr>
    <td>Faculty</td>
    <td><?php echo $value->facname;?></td>
    <td></td>
  </tr>
<tr>
    <td>MATRIC NUMBER</td>
    <td><?php echo $value->matricno;?></td>
    <td></td>
</tr>
<tr>
      <td>SEX</td>
    <td><?php echo $value->sex;?></td>
    <td></td>
  </tr>

  <tr>
      <td>Present Level</td>
    <td><?php echo $value->present_level;?></td>
    <td></td>
  </tr>

</table> 

<?php
//echo '<tr><th> ID</th><th>Student Name</th><th>Matric Number</th><th>Course</th><th>Mobile</th><tr/>';


//echo '<tr>' . '<td class="e_id">' . $value->id . '</td>' . '<td>' . $value->firstname . '</td>' . '<td class="j_date">' . $value->matricno . '</td>' . '<td>' . $value->course . '</td>' . '<td class="mob">' . $value->sex . '</td>' . '<tr/>';
}
//echo '</table>';
}
}
?>
								




	



								    </div>



								</div>

						  <div class="bottom-grid3 bottom-last">
									<h3>Passport</h3>
									
									<br />
									<img src="<?php echo base_url();?>uploads/<?php echo $value->img_name;?><?php echo $value->ext;?>"
                   						 "  alt="">
               <?php include ("includes/Student_view_rightlink.php");  ?>
								</div>


								<div class="clear"> </div>
			</div>
	     </div>
	</div>
	

	<?php include ("includes/ft.footer.php");?>
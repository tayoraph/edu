

<!DOCTYPE HTML>
<html>
<head>
<title>Upload Passport</title>

<?php include ("includes/ft.pages.header.php");?>



				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<?php echo $error;?>

<h2> You have completed step 1. <em><strong>Please proceed to step 2 by uploading your Passport</strong></em></h2> 
					    
<br /> <br />
					    <?php echo form_open_multipart('file_Uploaded');?>
<img src="<?php echo base_url();?>assets/images/load3.jpg" alt="">

<div>
<span><input type="file" name="userfile" size="20" /></span>
</div>
<br /><br />

<div>
<span><input type="submit" value="Upload Your Passport" name="upload"/></span>
</div>

<br />
<p> Only gif or jpg or png formats are allowed. <br />  <em>Max file upload size is 90kb</em></p>
</form>
					</div>
  				</div>	
  				<div class="clear"></div>			
	    </div>
	</div>
</div>

    

 <button><a href='#'> Edit Your Profile Here</a></p></button>



				
			




<?php include ("includes/ft.pages.footer.php");?>
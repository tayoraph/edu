

<div class="col span_2_of_3">
				  <div class="contact-form">
<h3>Only Click the below button to pay for present level</h3>



					    <form method="post" action="<?php echo base_url();?>tution/get">
					    	<div>
						    	<span><label>Present Level</label></span>
						    	<span><input name="lv" type="text"  value  ="<?php echo $f->present_level;?>" readonly

						    	class="textbox"/></span>
						    </div>
						    
						    <div>
						    	<span><label>course</label></span>
						    	<span><input name="co" type="text"    value = "<?php echo $f->course_name;?>" readonly
						    			class="textbox"></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Generate Payment Details" name="submit"></span>
						  </div>
					    </form>		

</div></div>
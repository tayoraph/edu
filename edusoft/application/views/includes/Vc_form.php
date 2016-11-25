<h3>send a mail to the VC</h3>

					    <form method="post" action="<?php echo base_url();?>vcmail">
					    	<div>
						    	<span><label>Username</label></span>
						    	<span><input name="un" type="text" disabled="disabled" placeholder= "<?php $uname = ($this->session->userdata['username']);
						    	echo $uname;  ?>"

						    	class="textbox"></span>
						    </div>
						    
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="uMsg" placeholder="kindly write your request as brief as possible"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Send to VC" name="submit"></span>
						  </div>
					    </form>
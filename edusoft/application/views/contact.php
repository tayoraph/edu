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

    <?php echo validation_errors(); ?>

    <?php echo form_open('contactus'); ?>
					   
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input  type="text" class="textbox" name= "na"></span>
						    </div>
						    <div>
						    	<span><label>EMAIL</label></span>
						    	<span><input  type="text" class="textbox" name= "em"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input  type="text" class="textbox" name= "mob"></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="msg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit" name="submit"></span>
						  </div>
					    </form>
					</div>
  				</div>	
  				<div class="clear"></div>			
	    </div>
	</div>
</div>
	

	<?php include('includes/ft.footer.php'); ?>


	<form class="form-horizontal form-label-left" novalidate  action="<?php echo base_url();?>Student_registration" method="post" enctype='multipart/form-data' >
            <h1>Fill form to register </h1>

            <h3> All fields are <strong></strong><em>Compulsory</em></strong></h3>
            <div>
              <input type="text" name ="fn" class="form-control" placeholder="Firstname" required="" />
            </div>

            <div>
              <input type="text" name ="ln" class="form-control" placeholder="Lastname" required="" />
            </div>

            <div>
              <input type="text" name ="sex" class="form-control" placeholder="Sex" required="" />
            </div>

            <div>
              <input type="text" name ="un" class="form-control" placeholder="Username" required="" />
            </div>
            
            <div>
              <input type="password" name ="pw" class="form-control" placeholder="Password" required="" />
            </div>

            <div>
              <input type="password" name ="pwconf" class="form-control" placeholder=" Confirm Password" required="" />
            </div>

            <div>
              <input type="email" name ="em" class="form-control" placeholder="Email" required="" />
            </div>

             <img src="<?php echo base_url();?>assets/images/load3.jpg" alt=""><br />

              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Select Your Passport<span class="required">*</span>
                      </label>
              <input id="name" type='file'   name='userfile' placeholder="Firstname" required="required" size='15'>

              <br /><br />
                 
            <div>
              <input class="btn btn-default submit" type = "submit" name ="submit" value="Register"/>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">Already a Student ?
                <a href="<?php echo base_url();?>stulogin" class="to_register"> Log in to view your profile </a>
              </p>
              <div class="clearfix"></div>
              <br />
               <a href="<?php echo base_url();?>" class="to_register"> Back to Home </a>
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Edusoft</h1>

                    <p> HERO Software. &copy 2016 All Rights Reserved.</p>
              </div>
            </div>
          </form>
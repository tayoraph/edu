<div class="footer">
			<div class="wrap">
			<div class="footer-grids">
				<h3>Login to chat</h3>
		

<form class="form-horizontal form-label-left" novalidate method= "post"  action= "<?php echo base_url();?>Edusoft_ctrl/validate_cred" >

                    

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Username <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="occupation" type="text" value=""  name="un" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" size ="20">
                      </div>
                    </div>

                  <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Password <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="occupation" type="text" value=""  name="pw" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                  

                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        
                        <input id="send" type="submit" value= "Login" name="submit" class="btn btn-success" />
                      </div>
                    </div>
                  </form>
				</div>

			<!--	<div class="footer-grid">
					<h3>RECENT POSTS</h3>
					<ul>
						<li><a href="#">Vestibulum felis</a></li>
						<li><a href="#">Mauris at tellus</a></li>
						<li><a href="#">Donec ut lectus</a></li>
						<li><a href="#">vitae interdum</a></li>
					</ul>
				</div>-->
				<div class="footer-grid">
					<h3>USEFUL INFO</h3>
					<ul>
						<li><a href="<?php echo base_url();?>Aboutus">About Us </a></li>
						<li><a href="<?php echo base_url();?>stureg">New Student Registration</a></li>
						<li><a href="<?php echo base_url();?>">Videos</a></li>
						<li><a href="<?php echo base_url();?>contactus">Contact US </a></li>
						<li><a href="<?php echo base_url();?>select/fee">Daragrid</a></li>
					</ul>
				</div>
				<div class="footer-grid footer-lastgrid">
					<h3>CONTACT US</h3>
					<p>Lagos Nigeria</p>
					<div class="footer-grid-address">
						<p>Tel.+234-806-782-4358</p>
						<p></p>
						<p>Email:<a class="email-link" href="#">info@hezekaihsoftware.com</a></p>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="copy-right">
			 <p>Design by <a href="http://hezekaihsoftware.com/">Hezekaih Software</a></p>
		    </div>
		</div>
	</div>
</body>
</html>

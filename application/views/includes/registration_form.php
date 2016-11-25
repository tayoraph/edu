 <form class="form-horizontal form-label-left" novalidate  action="<?php echo base_url();?>Admin_add" method="post" enctype='multipart/form-data' >


                    <span class="section"> 
                          
                    </span>

                    
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">firstname <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="fn" value = "" placeholder="Firstname" required="required" type="text">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">lastname<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="email" value = ""name="ln" placeholder="lastname" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" id="email2" value = " " placeholder="email" name="em" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                     <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Sex <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" id="email2" value = "" placeholder="Sex" name="sex" data-validate-linked="sex" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Username<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="website" value = "" name="un" required="required" placeholder="Username " class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    

                     <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Password<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password" id="website" value = "" name="pw" required="required" placeholder="Password " class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                     <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Confirm Password<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password" id="website" value = "" name="pwconf" required="required" placeholder="password " class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                   

                          <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Faculty</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="select2_single form-control" tabindex="-1" name="fa">
                       
                          <option value="">Select faculty</option>
                                  <option value="1">Science</option>
                                  <option value="2">Arts</option>
                                  <option value="3">Education</option>
                                  <option value="4">Management Science</option>
                        </select>
                      </div>
                    </div>



                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Department</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="select2_single form-control" tabindex="-1" name="dt">
                         
                               <option value="">Select Department</option>
                                  <option value="1">Microbiology</option>
                                  <option value="2">Accounting</option>
                                  <option value="3">English</option>
                        </select>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Course</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="select2_single form-control" tabindex="-1" name="co">
                       
                          <option value="">Select Student's Course</option>
                                  <option value="1">Microbiology</option>
                                  <option value="2">Biochemistry</option>
                                  <option value="3">Accounting</option>
                                  <option value="4">English</option>
                                  <option value="5">Law</option>
                                  <option value="6">Medicine</option>
                        </select>
                      </div>
                    </div>


                       <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Matric Number<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="url" id="website" value = "" name="mt" required="required" placeholder=" " class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                          

                     
                       <img src="<?php echo base_url();?>assets/images/load3.jpg" alt=""><br />

                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Select Your Passport<span class="required">*</span>
                      </label>

           

                        <input id="name" type='file'   name='userfile' placeholder="Firstname" required="required" size='15'>
                 
                      <br />


                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <button ><a href="<?php echo base_url();?>show_student" class="btn btn-primary"value="Cancel" name=Cancel>Cancel</a></button>
                        <input id="send" type="submit" class="btn btn-success"value="Add student" name="submit">
                      </div>
                    </div>
                  </form>
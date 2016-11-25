<center><h1>  Input for a new polling Unit</h1>  

 
  <?php if (isset($message)) { ?> 
                <CENTER><h3 style="color:orange;"><?php echo $message; ?></h3></CENTER><br>
            <?php } ?> 
   <form class="form-horizontal form-label-left" novalidate  action="<?php echo base_url();?>Bimcom_ctrl/poll" method="post"  >


                    <span class="section"> 
                          
                    </span>

                    
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Score <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="sc" value = "" placeholder="score" required="required" type="text">
                      </div>
                    </div>
<br />
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">staff<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" value = ""name="sta" placeholder="Staff Name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                    
<br/>
                    
                          <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Party </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="select2_single form-control" tabindex="-1" name="party">
                       
                            <option value="">Select Party</option>
                                  <option value="PDP">PDP</option>
                                  <option value="ACN">ACN</option>
                                  <option value="ASDP">ASDP</option>
                                  <option value="SDP">SDP</option>
                        </select>
                      </div>
                    </div>

<br />
    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"> unit Unique Id<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="email" value = ""name="pol" placeholder="polling Unit unique id" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                     
                     
           <br/> 


                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        
                        <input id="send" type="submit" class="btn btn-success"value="Add details" name="submit">
                      </div>
                    </div>
                  </form>
                  
                  <br/>
                   <?php  //echo $this->input->ip_address();?>                          
<a href= "<?php echo base_url();?>Bimcom_ctrl">Click for Question 1</a>  |

                          
                          
                          
<a href= "<?php echo base_url();?>Bimcom_ctrl/local"> Click for Question 2</a>  |

                          
                          
                          
<a href= "<?php echo base_url();?>Bimcom_ctrl/poll"> Click for Question 3</a>  </center>
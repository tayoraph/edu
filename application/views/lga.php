<center><form class="form-horizontal form-label-left" novalidate  action="<?php echo base_url();?>Bimcom_ctrl/lga" method="post" >


                    <span class="section"> 
                          
                    </span>

                    
                    

                          <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Local Goverment Area</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="select2_single form-control" tabindex="-1" name="dept">
                       <br />
                          <option value="">Select lga</option>
                                  <option value="35">35</option>
                                  <option value="19">15</option>
                                  <option value="17">22</option>
                                  <option value="34">34</option>
                                   
                        </select>
                      </div>
                    </div>
                    <br />


                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                      
                        <input id="send" type="submit" class="btn btn-success"value="Fetch Result" name="submit">
                      </div>
                    </div>
                  </form>




<?php if (isset($display)) {
                          echo "<p><u>Result</u></p>";
                          if ($display == 'No record found !') {
                          echo $display;
                          } else {
                          echo "<table class='result_table'>";
                          echo '<tr><th>Total score = </th><tr/>';
                          foreach ($display as $values) {
                          echo '<tr>' . '<td>' . $values->party_score . '<tr/>';
                          }
                          
                         
                          echo '</table>';

                          
                          }
                          }
                          ?>
                          
                          
                          
<a href= "<?php echo base_url();?>Bimcom_ctrl/local"> Back to home page</a>  
<br/>
                          
<a href= "<?php echo base_url();?>Bimcom_ctrl">Click for Question 1</a>  |

                          
                          
                          
<a href= "<?php echo base_url();?>Bimcom_ctrl/local"> Click for Question 2</a>  |

                          
                          
                          
<a href= "<?php echo base_url();?>Bimcom_ctrl/poll"> Click for Question 3</a>  </center>
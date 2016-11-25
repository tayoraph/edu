<center><form class="form-horizontal form-label-left" novalidate  action="<?php echo base_url();?>Bimcom_ctrl/bimcom" method="post" >


                    <span class="section"> 
                          
                    </span>

                    
                    

                          <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Poll Name</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="select2_single form-control" tabindex="-1" name="dept">
                       <br />
                          <option value="">Select Poll name</option>
                                  <option value="8">Sapele Ward 8 PU _</option>
                                  <option value="9">Primary School in Aghara</option>
                                  <option value="10">Ishere Primary School  Aghara</option>
                                  <option value="11">Igini Primary School</option>
                                   <option value="12">Umukwapa poll unit 1</option>
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


<?php if (isset($result_display)) {
                          echo "<p><u>Result</u></p>";
                          if ($result_display == 'No record found !') {
                          echo $result_display;
                          } else {
                          echo "<table class='result_table'>";
                          echo '<tr><th>Party ID</th><th> Abbrevation</th><th>Poll Unit Name</th><th>Party Score</th><tr/>';
                          foreach ($result_display as $value) {
                          echo '<tr>' . '<td class="e_id">' . $value->polling_unit_uniqueid . '</td>' . '<td>' . $value->party_abbreviation  . '</td>' . '<td class="j_date">' . $value->polling_unit_name. '</td>' .  '<td ">' . $value->party_score. '</td>' . '<tr/>';
                          }
                          
                        

                          echo '</table>';
                          }
                          

                          }
                          ?>

<a href= "#"> Back to top</a>  

<p>
                          <br/>
<a href= "<?php echo base_url();?>Bimcom_ctrl">Click for Question 1</a>  |

                          
                          
                          
<a href= "<?php echo base_url();?>Bimcom_ctrl/local"> Click for Question 2</a>  |

                          
                          
                          
<a href= "<?php echo base_url();?>Bimcom_ctrl/poll"> Click for Question 3</a>  </center>
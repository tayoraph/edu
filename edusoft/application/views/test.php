<form action="<?php echo base_url();?>Admin_test" method="post" enctype='multipart/form-data'>
            <p> Name of Student</p>
             <input class="header_input" type="text" name="fn" />
             <p>Username</p>
             <input class="header_input" type="text" name="un" />
             <p> Password</p>
             <input class="header_input" type="text" name="pw" />
            <br/><span class="input_headers"><p>lastname</p></span>
            <textarea class="textarea_input" rows="10" cols="30" name="ln">
            </textarea><br />

            <img src="<?php echo base_url();?>assets/images/load3.jpg" alt="">

            Select File: <input type='file' name='userfile' size='10' /><br />
            <input type="submit" class="submit" name ="submit"/>
            </form>


      <?php 
if (isset($read_set_value)) {
echo $read_set_value;
}
if (isset($message_display)) {
echo $message_display;
}
?>
                 


    <?php
                          // select by departments starts here

                          echo form_open('select/department');
                          echo form_label('Search By Department : ');
                          $data = array('name' => 'dept','placeholder' => "Please Enter student's department"
                          );
                          echo form_input($data);
                          echo "<div class='error_msg'>";
                          if (isset($id_error_message)) { echo $id_error_message;
                          }

                          echo "</div>";
                          echo form_submit('submit', 'Get Student Details');
                          echo form_close();
                          // select by departments ends here

                                   echo '<br />';
                          // select by Matric number starts here

                          echo form_open('Edusoft_ctrl/select_by_matricno');
                          echo form_label('Search by Matric No: ');
                          $data = array('name' => 'matricno','placeholder' => " Enter student's Matric number"
                          );
                          echo form_input($data);
                          echo "<div class='error_msg'>";
                          if (isset($id_error_message)) { echo $id_error_message;
                          }

                          echo "</div>";
                          echo form_submit('submit', 'Get Student Details');
                          echo form_close();
                          // select by Matric number ends here

                                   echo '<br />';
                         

                                   echo '<br />';


                                   // select by course starts here
                          echo form_open('Edusoft_ctrl/select_by_course');
                          echo form_label('Search by Course : ');
                          $data = array(
                          'type' => 'text',
                          'name' => 'course',
                          'placeholder' => 'Type course'
                          );
                          echo form_input($data);
                          echo "<div class='error_msg'>";
                          if (isset($date_error_message)) {
                          echo $date_error_message;
                          }
                          echo "</div>";
                          echo form_submit('submit', 'Get Student Details');
                          echo form_close();

                          // select by date ends here
                            echo '<br />';

                          // select by date starts here
                          echo form_open('Edusoft_ctrl/select_by_date');
                          echo form_label('Search by Date : ');
                          $data = array(
                          'type' => 'date',
                          'name' => 'date',
                          'placeholder' => 'yyyy-mm-dd'
                          );
                          echo form_input($data);
                          echo "<div class='error_msg'>";
                          if (isset($date_error_message)) {
                          echo $date_error_message;
                          }
                          echo "</div>";
                          echo form_submit('submit', 'Get Student Details');
                          echo form_close();

                          // select by date ends here
                            echo '<br />';

                          // select by parent starts here
                          echo form_open('Edusoft_ctrl/select_by_parent');
                          echo form_label('Search by Parent: ');
                          $data = array(
                          'type' => 'text',
                          'name' => 'pa',
                          'placeholder' => 'parent surname'
                          );
                          echo form_input($data);
                          echo "<div class='error_msg'>";
                          if (isset($date_error_message)) {
                          echo $date_error_message;
                          }
                          echo "</div>";
                          echo form_submit('submit', 'Get Student Details');
                          echo form_close();

                          // select by parent ends here
?>      

                                <br />


        


                         <?php

                      // Result Display starts here
                      


                          if (isset($result_display)) {
                          echo "<p><u>Result</u></p>";
                          if ($result_display == 'No record found !') {
                          echo $result_display;
                          } else {
                          echo "<table class='result_table' style='width:100%'>";
                          echo '<tr><th>Student ID</th><th> Name</th><th>Department</th><th>faculty</th><th>Course</th><th>Matric No</th><tr/>';
                          foreach ($result_display as $value) {
                          echo '<tr>' . '<td class="e_id">' . $value->id . '</td>' . '<td>' . $value->firstname  . " " . $value->lastname. '</td>' . '<td class="j_date">' . $value->dept_name. '</td>' . '<td>' . $value->facname . '</td>' . '<td class="mob">' . $value->course_name . '<td>' . $value->matricno . '</td>' . '<tr/>';
                          }
                          echo '</table>';
                          }
                          }
                          ?>



<!--///////////////////////////////////////////////////////////////////////////////-->


<!--<?php //-->//  This will call the entire student in the database
/**if (isset($show_table)) {
echo "<div class='emp_table'>";
if ($show_table == 'Database is empty !') {
echo $show_table;
} else {
echo '<caption>Employee Table</caption>';
echo "<table width='500px'>";
echo '<tr><th class="e_id">Employee ID</th><th>Employee Name</th><th>Joining Date</th><tr/>';
foreach ($show_table as $value) {
echo "<tr>" . "<td class='e_id'>" . $value->id . "</td>" . "<td>" . $value->firstname . "</td>" . "<td>" . $value->date . "</td>" . "<tr/>";
}
echo '</table>';
}
echo "</div>";
}
?>**/
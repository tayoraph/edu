<?php include ('includes/sessions.php');?>


<html>
<head>
<title> Search Students</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>

<body>
<div id="main">
<div id="note"><span><b>Note : </b></span> Search by your choice </div>
<div class="message">
<?php 
if (isset($read_set_value)) {
echo $read_set_value;
}
if (isset($message_display)) {
echo $message_display;
}
?>
</div>

<div id="show_form">
<h2>CodeIgniter Select By Department ID And Date</h2>
<?php
// select by departments starts here

echo form_open('Edusoft_ctrl/select_by_department');
echo form_label('Select By Department : ');
$data = array('name' => 'dept','placeholder' => "Please Enter student's department"
);
echo form_input($data);
echo "<div class='error_msg'>";
if (isset($id_error_message)) { echo $id_error_message;
}

echo "</div>";
echo form_submit('submit', 'Show Record');
echo form_close();
// select by departments ends here


// select by Matric number starts here

echo form_open('Edusoft_ctrl/select_by_matricno');
echo form_label('Search Student Matric Number: ');
$data = array('name' => 'matricno','placeholder' => " Enter student's Matric number"
);
echo form_input($data);
echo "<div class='error_msg'>";
if (isset($id_error_message)) { echo $id_error_message;
}

echo "</div>";
echo form_submit('submit', 'Show Record');
echo form_close();
// select by Matric number ends here


// select by id starts here
echo form_open('Edusoft_ctrl/select_by_id');
echo form_label('Select By ID : ');
$data = array('name' => 'id','placeholder' => 'Please Enter ID'
);
echo form_input($data);
echo "<div class='error_msg'>";
if (isset($id_error_message)) { echo $id_error_message;
}

echo "</div>";
echo form_submit('submit', 'Show Record');
echo form_close();
// select by id ends here



// select by date starts here
echo form_open('select_tutorial/select_by_date');
echo form_label('Select By Date : ');
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
echo form_submit('submit', 'Show Record');
echo form_close();

// select by date ends here


// select by date starts here
echo form_open('select_tutorial/select_by_parent');
echo form_label('Select By Parent: ');
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
echo form_submit('submit', 'Show Record');
echo form_close();

// select by date ends here


// select by date range starts here

echo form_open('select_tutorial/select_by_date_range');
echo form_label('Select By Range Of Dates : ');
echo "From : ";

$data = array(
'type' => 'date',
'name' => 'date_from',
'placeholder' => 'yyyy-mm-dd'
);
echo form_input($data);
echo " To : ";

$data = array(
'type' => 'date',
'name' => 'date_to',
'placeholder' => 'yyyy-mm-dd'
);
echo form_input($data);
echo "<div class='error_msg'>";
if (isset($date_range_error_message)) {
echo $date_range_error_message;
}
echo form_submit('submit', 'Show Record');
echo form_close();

// select by date range ends here
?>
<div class="message">
<?php
if (isset($result_display)) {
echo "<p><u>Result</u></p>";
if ($result_display == 'No record found !') {
echo $result_display;
} else {
echo "<table class='result_table'>";
echo '<tr><th>Student ID</th><th> Name</th><th>Department</th><th>faculty</th><th>Course</th><tr/>';
foreach ($result_display as $value) {
echo '<tr>' . '<td class="e_id">' . $value->id . '</td>' . '<td>' . $value->firstname  . " " . $value->lastname. '</td>' . '<td class="j_date">' . $value->name. '</td>' . '<td>' . $value->faculty . '</td>' . '<td class="mob">' . $value->course . '</td>' . '<tr/>';
}
echo '</table>';
}
}
?>

</div>
</div>


<!--///////////////////////////////////////////////////////////////////////////////-->


</div>
</body>
</html>
<?php
if (isset($tution)) {
echo "<h3><u>Tution Fee</u></h3>";
if ($tution == 'No record found !') {

} else {
echo "<table class='result_table'>";
foreach ($tution as $t) { 
//if ($f->level == $f->present_level){
?>


 <table style="width:100%">
  
  <tr>
    <td><h1>level </h1></td>
    <td><h3> <?php echo $t->level	;?></h3></td>
    <td></td>
  </tr>

  <tr>
    <td><h1>Tution fee</h1></td>
    <td><h3> <?php echo $t->tution_fee;?></h3></td>
    <td></td>
  </tr>
<tr>
   
    <td><h3> </h3><form method='POST' action='https://voguepay.com/pay/'>

<input type='hidden' name='v_merchant_id' value='8034-0035830' />
<input type='hidden' name='merchant_ref' value='234-567-890' />

<input type='hidden' name='memo' value='Tution fee' />



<input type='hidden' name='tution fee' value='tution fee' />
<input type='hidden' name='description_2' value=' <center> TUTION FEE PAYMENT <br />
for</center>
<br />
<br />
Matric No:  <?php echo $t->matricno;?>.
<br /> 
<br /> 
Full Name :  <?php echo $t->lastname;?>  <?php echo $t->firstname;?>.
<br /> 
<br /> 
Course :  <?php echo $t->course_name;?>.
<br /> 
<br /> 
Level = <?php echo $t->level;?>' />
<input type='hidden' name='price_2' value='<?php echo $t->tution_fee;?>' />



<input type='hidden' name='developer_code' value='tennis' />
<input type='hidden' name='store_id' value='' />

<input type='hidden' name='total' value='<?php echo $t->tution_fee;?>' />

<input type='image' src='http://voguepay.com/images/buttons/make_payment_blue.png' alt='Submit' />

</form>	</td>
    <td></td>
  </tr>
</table> 
											
<?}}}?>

		</div>
	

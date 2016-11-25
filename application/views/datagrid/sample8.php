<?php /*
Copyright (c) 2007, Gurú Sistemas and/or Gustavo Adolfo Arcila Trujillo
All rights reserved.
www.gurusistemas.com

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

    * Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
    * Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer
	  in the documentation and/or other materials provided with the distribution.
    * Neither the name of the Gurú Sistemas Intl nor Gustavo Adolfo Arcila Trujillo nor the names of its contributors may be used to
	  endorse or promote products derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS  "AS IS"  AND ANY EXPRESS  OR  IMPLIED WARRANTIES, INCLUDING, 
BUT NOT LIMITED TO,  THE IMPLIED WARRANTIES  OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.  IN NO EVENT
SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,  INDIRECT,  INCIDENTAL, SPECIAL, EXEMPLARY,  OR CONSEQUENTIAL 
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF  USE, DATA, OR PROFITS;  OR BUSINESS 
INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE 
OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. 

Please remember donating is one way to show your support, copy and paste in your internet browser the following link to make your donation
https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=tavoarcila%40gmail%2ecom&item_name=phpMyDataGrid%202007&no_shipping=0&no_note=1&tax=0&currency_code=USD&lc=US&bn=PP%2dDonationsBF&charset=UTF%2d8

For more info, samples, tips, screenshots, help, contact, forum, please visit phpMyDataGrid site  
http://www.gurusistemas.com/indexdatagrid.php

For contact author: tavoarcila at gmail dot com or info at gurusistemas dot com
*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>phpMyDatagrid - Sample file</title>

<?php

	include ("phpmydatagrid.class.php");
	
	$objGrid = new datagrid;
	
	$objGrid -> friendlyHTML();

	$objGrid -> pathtoimages("./images/");

	$objGrid -> closeTags(true);  
	
	$objGrid -> form('edusoft_fee_prices', true);
	
	$objGrid -> methodForm("post"); 
	
	$objGrid -> total("tution_fee,workeddays");
	
	$objGrid -> searchby("id,tution_fee,course_id");
	
	//$objGrid -> linkparam("sess=".$_REQUEST["sess"]."&username=".$_REQUEST["username"]);	 
	
	$objGrid -> decimalDigits(2);
	
	$objGrid -> decimalPoint(",");
	
	$objGrid -> conectadb("localhost", "omrcocor", "8Vopt@#4dC2", "omrcocor_cccoousp");
	
	$objGrid -> tabla ("edusoft_fee_prices");

	/* Allow Add, edit, delete or view records */
	$objGrid -> buttons(true,true,true,true);
	
	/* Keyfield must be defined to identify each row */
	$objGrid -> keyfield("id");

	/* A code is related with some transactions. so is very dificult to someone to try to do unauthorized process */
	/* There are a internal code but you can made it strong by setting this function" */
	$objGrid -> salt("Some Code4Stronger(Protection)");

	$objGrid -> TituloGrid("Tution Fee payment details");

	$objGrid -> FooterGrid("<div style='float:left'>&copy; 2016 Herosoftware.com</div>");

	$objGrid -> datarows(5);
	
	$objGrid -> paginationmode('links');

	$objGrid -> orderby("course_id", "DESC");

	$objGrid -> noorderarrows();
	
	$objGrid -> FormatColumn("id", "Serial Number", 5, 5, 1, "50", "center", "integer");
	$objGrid -> FormatColumn("course_id", "Course", 30, 30, 0, "150", "left");
	$objGrid -> FormatColumn("tution_fee", "Tution Fee", 30, 30, 0, "150", "right");
	$objGrid -> FormatColumn("level", "Level", 5, 5, 0, "50", "center");

	$objGrid -> where ("active = '1'");

	$objGrid -> setHeader();
?>
</head>

<body>
<?php 
	$objGrid -> grid();
	
	$objGrid -> desconectar();
?>
</body>
</html>

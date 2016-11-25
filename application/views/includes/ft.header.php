<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsiveslides.css">
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1500,
			        maxheight:350,
			        speed: 600
			      });
			});
		  </script>

<script type="text/javascript" src="js/jquery.lightbox.js"></script>
<link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen">
	<script type="text/javascript">
		$(function() {
			$('.gallery a').lightBox();
		});
   </script>

<style type="text/css">
	
#sddm
{	margin: 0;
	padding: 0;
	z-index: 30}

#sddm li
{	margin: 0;
	padding: 0;
	list-style: none;
	float: left;
	font: bold 13px arial}

#sddm li a
{	display: block;
	margin: 0 1px 0 0;
	padding: 4px 10px;
	width: 100px;
	background: #5970B2;
	color: orange;
	text-align: center;
	text-decoration: none}

#sddm li a:hover
{	background: #49A3FF}


.overlay{
  position: relative;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 10;
 
}

#sddm div
{	position: absolute;
	visibility: hidden;
	margin: 0;
	padding: 0;
	background: #EAEBD8;
	}

	#sddm div a
	{	position: relative;
		display: block;
		margin: 0;
		padding: 5px 10px;
		width: auto;
		white-space: nowrap;
		text-align: left;
		text-decoration: none;
		background: #ccf6eb;
		color: orange;
		font: 11px arial}

	#sddm div a:hover
	{	background: #49A3FF;
		color: #FFF}


</style>


   <!-- test javascript slide show-->


   <script language="JavaScript1.1">
<!--

/*
JavaScript Image slideshow:
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free JavaScript here!
*/

var slideimages=new Array()
var slidelinks=new Array()
function slideshowimages(){
for (i=0;i<slideshowimages.arguments.length;i++){
slideimages[i]=new Image()
slideimages[i].src=slideshowimages.arguments[i]
}
}

function slideshowlinks(){
for (i=0;i<slideshowlinks.arguments.length;i++)
slidelinks[i]=slideshowlinks.arguments[i]
}

function gotoshow(){
if (!window.winslide||winslide.closed)
winslide=window.open(slidelinks[whichlink])
else
winslide.location=slidelinks[whichlink]
winslide.focus()
}

//-->
</script>
</head>
<body>
<div class="header">
	<div class="wrap">
		<div class="header-top">
			<div class="logo">
				<a href="index.php"><img src="<?php echo base_url();?>assets/images/edulogo.png" alt=""/></a>
			</div>
			<div class="telephone">
				<span><img src="<?php echo base_url();?>assets/images/watch.png" "style=margin-right=10px" alt=""/>Edusoft</span><span class="number">+234-8067824358</span>
		    </div>
			<div class="clear"></div>
		</div>
	</div>

	<div  class="">
		<div class="wrap">
		<div  class="overlay">
		<ul id="sddm">
    <li><a href="<?php echo base_url();?>" 
        onmouseover="mopen('m1')" 
        onmouseout="mclosetime()">Home</a>
        <div id="m1" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <a href="<?php echo base_url();?>adminlogin">Admin Login</a>
        <a href="<?php echo base_url();?>stulogin">Student Login</a>
        
        </div>
    </li>
    <li><a href="<?php echo base_url();?>stureg" 
        onmouseover="mopen('m2')" 
        onmouseout="mclosetime()">Our Students</a>
        <div id="m2" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <a href="<?php echo base_url();?>stulogin">Student Profile</a>
        <a href="<?php echo base_url();?>stureg">Register</a>
        <a href="<?php echo base_url();?>access">Online Payment of Tution Fee</a>
        <a href="<?php echo base_url();?>">Transcript </a>
        </div>
    </li>
   <li><a href="<?php echo base_url();?>access">Users Access</a></li>
   <li><a href="<?php echo base_url();?>stureg">Register</a></li>
   <li><a href="<?php echo base_url();?>">Admission </a></li>
	<li><a href="<?php echo base_url();?>contactus">Contact Us</a></li>
    
</ul>
<div style="clear:both"></div>
</div>
		
			
	     </div>
	</div>
</div>
      <!--start-image-slider---->
		<div class="image-slider">

		<!-- Slideshow 1 -->
		  <ul class="rslides" id="slider1">
		    <li><img src="<?php echo base_url();?>assets/images/lsch4.jpg" alt=""></li>
			<!--<li><img src="<?php echo base_url();?>assets/images/sch3.jpg" alt=""></li>
			<li><img src="<?php echo base_url();?>assets/images/sch7.jepg" alt=""></li>
		   <!--  <li><img src="<?php echo base_url();?>assets/images/banner4.jpg" alt=""></li>-->
		  </ul>
	    <!-- Slideshow 2 -->
	   </div>

<script type="text/javascript">
var timeout	= 500;
var closetimer	= 0;
var ddmenuitem	= 0;
// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();
	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';
}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}
// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}
// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}
// close layer when click-out
document.onclick = mclose; 
</script>
<a href="javascript:gotoshow()"><img src="<?php echo base_url();?>/assets/images/sch1.jpg" name="slide" border=0 width=1500 height=350></a>
<script>
<!--

//configure the paths of the images, plus corresponding target links
slideshowimages("<?php echo base_url();?>/assets/images/edusoft.png",
                "<?php echo base_url();?>/assets/images/sch3.jpg",
                "<?php echo base_url();?>/assets/images/sch8.jpg")

slideshowlinks("<?php echo base_url();?>",
                "<?php echo base_url();?>stulogin",
                "<?php echo base_url();?>adminlogin"
                )

//configure the speed of the slideshow, in miliseconds
var slideshowspeed=5000

var whichlink=0
var whichimage=0
function slideit(){
if (!document.images)
return
document.images.slide.src=slideimages[whichimage].src
whichlink=whichimage
if (whichimage<slideimages.length-1)
whichimage++
else
whichimage=0
setTimeout("slideit()",slideshowspeed)
}
slideit()

//-->
</script>

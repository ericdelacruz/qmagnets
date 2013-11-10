<?php include("admin/includes/include.php");  ?>

<!DOCTYPE HTML>
<html>
<head>
<?php include("includes/common_script.php"); ?>
<?php
if(file_exists("includes/metatags/meta-".basename($_SERVER['PHP_SELF']))) {
	include("includes/metatags/meta-".basename($_SERVER['PHP_SELF'])); 
} else {
	// ONCE META TAG NOT FOUND USE THE DEFAULT TITLE TAG
	echo '<title>Qmagnets</title>';
}
?>
</head>
<body>
<div id="main_area">
  <div class="main"> 
    <!--===================start header part===================-->
    <header>
      <div class="header_area">
        <?php include("includes/currency.php");  ?>
        <div class="nav_bg"> 
          <!--====================start nav part====================-->
          <?php include("includes/menu.php");  ?>
          <!--====================start nav part====================-->
           <?php include("includes/search.php");?>
        </div>
         <?php // include("includes/banner.php");  ?>
      </div>
    </header>
    <!--===================end header part===================--> 
    <!--===================Start section part===================-->
    <section>
    <div class="body_area">
         <div class="body_box">
          <div class="body_left_area">
          <div class="body_text_area">
            <div class="body_heading_bg">
              <h1> <a href="buy.php" style="color:#6d94cd; font-weight:bold; font-size:18px; text-decoration:none">OF50-3 </a></h1>
              <br>
              
            </div>
           
            <div class="about_body_text_box" align="justify">
           
            <img src="images/OF50-3hr.jpg" width="450" height="450"> 
            <br>       
       			                   <a href="buy.php" style="color:#6d94cd; font-weight:bold; font-size:18px; text-decoration:none">  OF50-3 </a>

   
<br>
45 MGOe (N45) Neodymium Rare Earth

Octapolar

Penetration = 35mm or 1.4"

Width = 50mm or 2"

Thickness = 3mm or 0.12"

Pull Force = Pending

Flux Plate attached

Plastic casing


	
    <br><br>
    
   <h2> How to Use</h2>
<br><br>
<div>
<img src="images/Lower-Back-OF50-3B.jpg" width="450" height="600">
<br><br><br>
In this example, the OF50-3 is producing a magnetic field gradient over the adjacent vertebral levels of L4/5 and L5/S1. This device was designed to cover two adjacent spinal levels, which cannot be achieved with the QF28-6 devices, since they need to kept separated by the width of the device.

Since each lumbar spinal level (lower back) is around 25mm (2") apart, a QF28-6 device will only cover the one level and one removed, such as L3/4 and L5/S1.

Being 5cm wide with a large surface area and 8 active regions, the OF50-3 device is ideal to apply on large bruises for faster recovery after injury.

The two QF28-6 devices to the left are covering the PSIS's which are located at the dimples on either side of the spine. This will cover the sacral nerves which includes the sciatic nerve. 
 
 </div>  
            
             </div>
            <div class="left_bottom_img"><img src="images/body_left_bottom_img.jpg" alt="" border="0"></div>
            </div>
          </div>
          
        <div class="body_right_area">
          <?php include("includes/yourpain.php");  ?>
          <?php include("includes/blog.php");      ?>
          </div>  
          
        </div>
        </div>
    </section>
    <!--===================end section part===================--> 
    <!--===================Start footer part===================-->
    <footer>
      <?php include("includes/footer.php"); ?>
    </footer>
    <!--===================end footer part===================--> 
  </div>
</div>
</body>
</html>

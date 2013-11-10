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
              <h1> <a href="buy.php" style="color:#6d94cd; font-weight:bold; font-size:18px; text-decoration:none">HF28-6 </a>(Formerly ProH)</h1>
              <br>
              
            </div>
           
            <div class="about_body_text_box" align="justify">
           
            <img src="images/HF28-6hr.jpg" width="400" height="400"> 
            <br>       
       			                   <a href="buy.php" style="color:#6d94cd; font-weight:bold; font-size:18px; text-decoration:none">  HF28-6  </a>

   
<br>




Hexapolar

Penetration = 25mm or 1"

Width = 28mm or 1.12"

Thickness = 6mm or 0.25"

Pull Force =

Flux Plate attached

Plastic casing

<br><br>
<font style="color:#06F; font-weight:bold">$77.00</font>

	
    <br><br>
    
   <h2> How to Use</h2>
<br><br>
<div>
<img src="images/Dosimetry-Hexapolar.jpg" width="400" height="400">
<br><br><br>
Dosimetry on the HF28-6 shows the alternating poles. The red segments represent recordings over the positive poles and blue the negative.

The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the six clear lines represent the biologically active areas of the magnet.

See the explanation of magnetic field gradients and how Q magnets work pages for a more detailed explanation. 
 <br><br><br><br>
 
While the HF28-6 has more active areas within the magnet (six), it has less of a penetration. Hence it may not be as effective on the areas where a deeper penetration is required such as over the lumbar spine (lower back). It is likely to be more effective over the smaller joints such as the shoulder, knee, elbow, ankle and over the neck.
 
 <br>
<br>
<img src="images/shoulder-pain.jpg" height="267" width="400">
 
<br><br><br>
Applying Q magnets with QFix28 double sided adhesive 	
<br><br>


<iframe width="400" height="400" src="//www.youtube.com/embed/4AlRljSMCC0" frameborder="0" allowfullscreen></iframe>
<br><br><br>
<img src="images/neck-pain-QF28-3-3-tape.jpg" width="400" height="400">
<br><br>
Neck placement adhesive using Hypafix, also called Fixomull or Cover-Roll.

All registered trademarks of BSN Medical. 
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

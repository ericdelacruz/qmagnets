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
              <h1> <a href="buy.php" style="color:#6d94cd; font-weight:bold; font-size:18px; text-decoration:none">OF28-6</a></h1>
              <br>
              
            </div>
           
            <div class="about_body_text_box" align="justify">
           
            <img src="images/QF28-6hr.jpg" width="400" height="400"> 
            <br>       
       			                   <a href="buy.php" style="color:#6d94cd; font-weight:bold; font-size:18px; text-decoration:none">  OF28-6 </a>

   
<br>


45 MGOe (N45) Neodymium Rare Earth

Quadrapolar

Penetration = 50mm or 2"

Width = 28mm or 1.12"

Thickness = 6mm or 0.25"

Pull Force = 262N, 26.7kgf, 59lbf

Flux Plate attached

Plastic casing



	
    <br><br>
    
   <h2> How to Use</h2>
<br><br>
<div>
<img  src="images/Dosimetry-Quadrapolar.jpg" width="400" height="400">
<br><br><br>
Dosimetry on the QF28-6 shows the alternating poles. The red segments represent recordings over the positive poles and blue the negative.

The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the four clear lines represent the biologically active areas of the magnet.

See the explanation of magnetic field gradients and how Q magnets work pages for a more detailed explanation.  
 <br><br>
 Video showing basic placement for lower back pain.
 <br>
<br>
Also see <a href="lowerback.php" style="color:#6d94cd; font-weight:bold; font-size:12px; text-decoration:none">lower back pain placement </a> for more information.
<br><br>
<iframe width="400" height="400" src="//www.youtube.com/embed/5ikYTdJTEJQ" frameborder="0" allowfullscreen></iframe>
<br><br>
<img src="images/Lower-Back-QF28-6-3.jpg" width="400" height="400">
<br><br>
The QF28-6 device produces a very focused and deep penetrating magnetic field gradient and hence is best suited for use on the lower back, upper back and larger joints such as hip, shoulder and knee.

It is the thickest of all the Q magnet models which should be taken into account when considering comfortability. Small framed individuals may be more comfortable wearing the QF28-3 model which is much slimmer.

QF28-6 or QF28-3 Q magnets can be affixed to the skin with the double sided adhesive, QFix28 or with sports tape over the top.

They can also be sewn into back braces once the best placements have been determined. 
<br><br>
Applying Q magnets with QFix28 double sided adhesive
<br>
<iframe width="400" height="400" src="//www.youtube.com/embed/4AlRljSMCC0" frameborder="0" allowfullscreen></iframe>
<br><br><br>
<img src="images/Lower-Back-QF28-6-3-tape.jpg" width="400" height="400">
<br><br>
Lower Back Pain placement adhesive using Hypafix, also called Fixomull or Cover-Roll.

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

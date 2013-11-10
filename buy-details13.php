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
              <h1> <a href="buy.php" style="color:#6d94cd; font-weight:bold; font-size:18px; text-decoration:none">QF15-3 </a></h1>
              <br>
              
            </div>
           
            <div class="about_body_text_box" align="justify">
           
            <img src="images/QF15-3hr.jpg" width="400" height="400"> 
            <br>       
       	                   <a href="buy.php" style="color:#6d94cd; font-weight:bold; font-size:18px; text-decoration:none"> QF15-3  </a>
 
<br>


Quadrapolar

Penetration = 25mm or 1"

Width = 15mm or 0.6"

Thickness = 3mm or 0.12"

Pull Force =

Flux Plate attached

Plastic casing



<br><br>
<font style="color:#06F; font-weight:bold">$20.00</font>

	
    <br><br>
    
   <h2> How to Use</h2>
<br><br>
<div>
<img src="images/Dosimetry-Quadrapolar.jpg" width="400" height="400">
<br><br><br>
Dosimetry on the Quadrapolar magnet showing the alternating poles. The red segments represent recordings over the positive poles and blue the negative.
<br><br>
The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the four clear lines represent the biologically active areas of the magnet.
<br><br>
See the explanation of magnetic field gradients and how Q magnets work pages for a more detailed explanation. 

<br><br>
Video showing correct placement for the elbow. For the demonstration, a larger device is being used, but either the QF15-3 or QF15-2 could also be used for the elbow.
<br><br>
Also see <a href="" style="color:#6d94cd; font-weight:bold; font-size:14px; text-decoration:none">elbow pain placement</a> for more information. 
 <br><br>
 <iframe width="400" height="315" src="//www.youtube.com/embed/XRUkY4hM-hE" frameborder="0" allowfullscreen></iframe>
<br><br>
There are two different models in the QF15 family, 15mm diameter Q magnets - QF15-3 and QF15-2. While there is negligible difference in the depth of penetration between the two, the thicker the magnet, the denser and stronger the magnetic flux. So as a general rule, use the thickest device that is comfortable and practical to wear. In addition, the smaller the device, the more accurate the placement is needed. If the Q magnet is slightly off position, the field will not reach the target tissue and it will have little or no effect. 
<br><br>
The QF15-3 device is seen here (left) on the outside of a child's ankle.
<br><br>
<img src="images/ankle-pain1.jpg">
<br><br>
<img src="images/ankle-pain-tape.jpg">
<br><br>
Any of the devices can be sewn into or onto braces once the best placements have been determined. They can also be placed inside of socks or tubular elastic material such as <a href="#" style="color:#6d94cd; font-weight:bold; font-size:14px; text-decoration:none"> tubigrip</a>.
 <br><br>
 <a href="#" style="color:#6d94cd; font-weight:bold; font-size:14px; text-decoration:none">Ankle pain placement</a> (left) with adhesive tape using Hypafix, also called Fixomull or Cover-Roll.
 <br><br>
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

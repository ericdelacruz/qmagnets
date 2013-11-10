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
              <h1> <a href="buy.php" style="color:#6d94cd; font-weight:bold; font-size:18px; text-decoration:none">QF20-4  </a></h1>
              <br>
              
            </div>
           
            <div class="about_body_text_box" align="justify">
           
            <img src="images/QF20-4hr.jpg" width="400" height="400"> 
            <br>       
       	                   <a href="buy.php" style="color:#6d94cd; font-weight:bold; font-size:18px; text-decoration:none">  QF20-4   </a>
 
<br>







Quadrapolar

Penetration = 32mm or 1.28"

Width = 20mm or 0.8"

Thickness = 4mm or 0.16"

Pull Force =

Flux Plate attached

Plastic casing


<br><br>
<font style="color:#06F; font-weight:bold">$36.00</font>

	
    <br><br>
    
   <h2> How to Use</h2>
<br><br>
<div>
<img src="images/Dosimetry-Hexapolar.jpg" width="400" height="400">
<br><br><br>
Dosimetry on the Quadrapolar magnet showing the alternating poles. The red segments represent recordings over the positive poles and blue the negative.
<br><br>
The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the four clear lines represent the biologically active areas of the magnet.
<br><br>
See the explanation of magnetic field gradients and how Q magnets work pages for a more detailed explanation. 
 <br><br><br><br>
Video showing correct placement for the ankle. For the demonstration, a larger device is being used, but any of the 20mm diameter Q magnets QF20 are appropriate for the ankle.
<br>
Also see <a href="#" style="color:#6d94cd; font-weight:bold; font-size:14px; text-decoration:none" > ankle pain placement</a> for more information. 
<br><br>
<iframe width="400" height="315" src="//www.youtube.com/embed/BEg4NrRR5I8" frameborder="0" allowfullscreen></iframe>
<br><br>
There are four different models of the QF20 family, 20mm diameter Q magnets - QF20-5, QF20-4, QF20-3 and QF20-2. While the depth of penetration does not vary a lot between the thinest and thickest, the thicker the magnet, the denser and stronger the magnetic flux. So as a general rule, use the thickest device that is comfortable and practical to wear. 
<br><br>
The QF20-5 device is seen here (left) on the outside of the elbow over the lateral epicondyle which is the placement for <a href="#" style="color:#6d94cd; font-weight:bold; font-size:14px; text-decoration:none"> tennis elbow</a>.
<br><br>
Any of the devices can be sewn into or onto braces once the best placements have been determined. They can also be placed inside of socks or tubular elastic material such as <a href="#" style="color:#6d94cd; font-weight:bold; font-size:14px; text-decoration:none">tubigrip</a>.  
<br><br>
<img src="images/elbow-pain1.jpg">
<br><br>
Use of a QF20 model over the <a href="#" style="color:#6d94cd; font-weight:bold; font-size:14px; text-decoration:none">ankle</a>. 
<br><br>
<img src="images/ankle-pain.jpg">

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

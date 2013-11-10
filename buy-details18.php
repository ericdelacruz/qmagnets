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
              <h1> <a href="buy.php" style="color:#6d94cd; font-weight:bold; font-size:18px; text-decoration:none">Q6-1.5 X 100</a></h1>
              <br>
              
            </div>
           
            <div class="about_body_text_box" align="justify">
           
            <img src="images/Q6-1.5X100.jpg" width="400" height="400"> 
            <br>       
       	                   <a href="buy.php" style="color:#6d94cd; font-weight:bold; font-size:18px; text-decoration:none">Q6-1.5 X 100</a>
 
<br>


Quadrapolar

Penetration = 5mm or 0.2"

Width = 6mm or 0.24"

Thickness = 1.5mm or 0.06"

Pull Force =

No Flux Plate attached
No plastic casing


<br><br>
<font style="color:#06F; font-weight:bold">$300.00</font>

	
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
 <iframe width="400" height="315" src="//www.youtube.com/embed/HNWmfrbaa4k" frameborder="0" allowfullscreen></iframe>
<br><br>
The smallest Q magnets are used for small joints such as the fingers and held in place with Qfix6 round plasters which can be added to your order. 
<br><br>
The Q6-1.5 is the only Q magnet model that does not have a flux plate attached which combined with its small size, means it has a very shallow penetration. This is despite it being composed of some of the strongest magnetic material on earth at a 13,500 Gauss or 1.35 Tesla internal rating. 
<br><br>

<br><br>
<img src="images/hand-pain.jpg"> 
<br><br><br>
The Q6-1.5 is a great device for trigger points. Other ways of stimulating trigger points include acupuncture or dry-needling. Often though, these techniques do not hold very long after the treatment since the needle has to be removed.
<br><br>
The beauty of Q magnets is that they can be worn 24/7 without risk so to the therapy works non-stop. 
<br><br>
QF10-2 or QF10-3 Q magnets should be used if the Q6-1.5 are not powerful enough to effect the trigger point. 
<br><br>
<iframe width="400" height="315" src="//www.youtube.com/embed/3f1g7FtyI6A" frameborder="0" allowfullscreen></iframe>
 
 
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

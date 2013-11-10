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
              <h1> Q Bonus Package-<a href="buy.php" style="color:#6d94cd; font-weight:bold; font-size:18px; text-decoration:none">For the active athlete</a></h1>
              <br>
              
            </div>
           
            <div class="about_body_text_box" align="justify">
           <font color="#6d94cd" size="+1">  Ask about our bulk discount team packages.</font><br><br>
            <img src="images/QBPAAhr.jpg" width="400" height="400"> 
            <br>       
       			                     Package Includes

    1 X OF50-3
    2 X QF28-6 (not shown in photo)
    2 X QF28-3
    2 X QF20-3
    3 X QF10-2
    Bonus QFix28 X 10
    Bonus Q6-1.5 X 6 plus QFix6 plaster
    Bonus Q Bag
    Free shipping
    1 X Trigger Point Locator (recommended but not included)

	
    <br><br>
    
   <h2> How to Use</h2>
  
   <br>
   <br>
   Video showing basic placement for lower back pain.<br>

Also see<a href="lowerback.php"  style="color:#6d94cd; font-weight:bold; font-size:12px; text-decoration:none"> lower back pain placement</a> for more information. <br>
 
   <br>

<iframe width="400" height="400" src="//www.youtube.com/embed/5ikYTdJTEJQ" frameborder="0" allowfullscreen></iframe> 

<br><br>
<div>
<img src="images/Lower-Back-OF50-3B.jpg" width="400" height="400">
<br>
In this example, the OF50-3 is producing a magnetic field gradient over the adjacent vertebral levels of L4/5 and L5/S1.

The two QF28-6 devices are covering the PSIS's which are located at the dimples on either side of the spine. This will cover the sacral nerves which includes the sciatic nerve. 
<br><br>
<img src="images/Lower-Back-QF28-6-3.jpg" width="400" height="400">
<br><br><br>
QF28-6 or QF28-3 Q magnets can be affixed to the skin with the double sided adhesive, QFix28 or with sports tape over the top.

They can also be sewn into back braces once the best placements have been determined. 
<br><br>
Applying Q magnets with QFix28 double sided adhesive
<br><br>
<iframe width="400" height="400" src="//www.youtube.com/embed/4AlRljSMCC0" frameborder="0" allowfullscreen></iframe>
<br><br>
<img src="images/Lower-Back-QF28-6-3-tape.jpg" width="400" height="400">
<br>
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

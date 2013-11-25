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
<style>
a{
color:#CCB363;
	font-size: 12px;
	text-decoration:none
}
.customContentStyle { }
.customContentStyle h3 { margin-bottom:5px; }
.customContentStyle p { line-height:150%; margin-bottom:16px; }
.customContentStyle ol { padding-left:30px; }
.customContentStyle ol li { margin-bottom:5px; }
</style>

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
              <h1> Lower back pain</h1>
            </div>
            <div class="about_body_text_box">
			<div class="body_left_text_area customContentStyle" id="static-content">
			<h3><a href="bodymap.php">Your Pain</a>  >> Q magnet Prescription for lower back pain:</h3><br />
             <div class="centered"><a href="images/Slide2.jpg"><img src="images/lowback.gif"></a>
             <br><a href="images/Slide2.jpg" class="links">Click on image for more details.</a> </div>
            <br><br>
            <div style="text-align:justified; font-weight:regular">
            The first device is placed at the base of the spine just above the cleavage in the buttocks. The second and third devices are placed over the dimples on either side of the spine just over the buttocks. The fourth device is placed midline on the spine. To find this placement, draw a line between the highest portion of each hipbone and place the device where the line crosses the midline on the back on the spine. The fifth device is placed midline on the spine, approximately 50mm (2 inches) above the fourth device.
           <br><br><br>
           <div class="centered"><iframe width="420" height="315" src="//www.youtube.com/embed/5ikYTdJTEJQ" frameborder="0" allowfullscreen></iframe></div>
           <br>
             <div class="centered"><a href="images/Slide3.jpg"><img src="images/hip1.gif"></a>
             <br><a href="images/Slide3.jpg" class="links">Click on image for more details.</a> </div><br>
			 
<p>If relief is not found from the low back array, try the following placement:</p>
<p>Alternative low back placement <br />
The <strong>first and second devices</strong> are placed over the dimples on either side of the spine just over the buttocks. The third device is placed over a "bridge" of tape approximately 25mm (1 inch) below the cleavage of the buttocks. Create a "bridge" by placing a piece of tape from one buttocks across to the other. Place directly on top of the "bridge" of tape with a double-stick adhesive. Secure the Qmagnet in place with an added piece of tape over the top of the device.  </p>
<p><a href="http://qmagnets.com/blog/category/pain-testimonies/lower-back-pain" class="links">Click here for Q magnet testimonies for lower back pain</a></p>
<table class="tablelist1" cellspacing="0" cellpadding="0" width="100%">
<thead>
 <tr>
  <td width="25%"><span>Pain Level</span></td>
  <td width="30%"><span>Order Quantity</span></td>
  <td width="45%"><span>Shopping Cart</span></td>
 </tr>
</thead>
<tbody>
 <tr>
    <td><span>Severe and Complex</span></td>
    <td><span>1 X OF50-3, 1 X QF28-6, 2 X QF28-3</span></td>
    <td><span><a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&amp;pid=1b82966b354ef58947b63439d670c82b"><img src="images/cart.jpg" alt="Add to shopping cart" width="134" height="23" border="0" /></a> $334.00 each</td>
  </tr>
 <tr>
    <td><span>Severe</span></td>
    <td><span>4 X QF28-6</span></td>
    <td><span><a href="http://www.1shoppingcart.com/app/netcart.asp?MerchantID=96291&amp;ProductID=3366276"><img src="images/cart.jpg" alt="Add to shopping cart" width="134" height="23" border="0" /></a> $276.00 each</span></td>
  </tr>
 <tr>
    <td><span>Moderate</span></td>
    <td><span>2 X QF28-3 + 2 X QF20-5</span></td>
    <td><span><a href="http://www.1shoppingcart.com/app/netcart.asp?MerchantID=96291&amp;ProductID=3366278"><img src="images/cart.jpg" alt="Add to shopping cart" width="134" height="23" border="0" /></a> $196.00 each</span></td>
  </tr>
</tbody>
<tfoot>
 <tr>
  <td colspan="3"><span>For best value purchase the <a href="products.php#QBP">Q Bonus Package</a></span></td>
 </tr>
</tfoot>
</table>

  
<?php include('includes/note.php'); ?>
</div>
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

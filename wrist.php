<?php include("admin/includes/include.php"); ?>

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
.customContentStyle { }
.customContentStyle h3 { margin-bottom:5px; }
.customContentStyle p { ; margin-bottom:16px; }
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
              <h1>Wrist Pain</h1>
            </div>
            <div class="about_body_text_box">
				<div id="cse-results" style="display: none;"></div><div class="body_left_text_area customContentStyle" id="static-content">
<h3><a href="bodymap.php">Your Pain</a> &gt;&gt; Q magnet Prescription for wrist pain:</h3>

<div style="text-align:center;"><p><a href="images/Slide15.jpg"><img src="images/wrist.gif" alt="Wrist" /></a></p><a href="images/Slide15.jpg">Click image for more details.</a></div>
<p>&nbsp;</p>
<p>Placement is in the center or midline on the wrist. Placement is found by bending the hand toward the body, creating a wrist fold. Place the device at the center of the wrist fold just over lapping the fold. If place correctly it will be in the way of the natural bend of the wrist. </p>


 
<table class="tablelist1" cellspacing="0" cellpadding="0" width="100%">
<thead>
 <tr>
  <td width="25%"><span>Pain Level</span></td>
  <td width="35%"><span>Order Quantity</span></td>
  <td width="40%"><span>Shopping Cart</span></td>
 </tr>
</thead>
<tbody>
 <tr>
    <td><span>Severe</span></td>
    <td><span>1 X QF28-3</span></td>
    <td><span><a href="http://www.1shoppingcart.com/app/netcart.asp?MerchantID=96291&ProductID=3366292"><img src="images/cart.jpg" alt="Add to shopping cart" width="134" height="23" border="0" /></a> $59.00 </td>
  </tr>
 <tr>
    <td><span>Moderate</span></td>
    <td><span>1 X QF20-3</span></td>
    <td><span><a href="http://www.1shoppingcart.com/app/netcart.asp?MerchantID=96291&ProductID=3366293"><img src="images/cart.jpg" alt="Add to shopping cart" width="134" height="23" border="0" /></a> $33.00</span></td>
  </tr>
</tbody>
<tfoot>
 <tr>
  <td colspan="3"><span>For best value purchase the <a href="products.php">Q Bonus Package</a></span></td>
 </tr>
</tfoot>
</table>

<?php include('includes/note.php'); ?>
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

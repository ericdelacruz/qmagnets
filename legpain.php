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
              <h1>Leg Pain</h1>
            </div>
            <div class="about_body_text_box">
				<div id="cse-results" style="display: none;"></div><div class="body_left_text_area customContentStyle" id="static-content">
<h3><a href="bodymap.php">Your Pain</a> &gt;&gt; Q magnet Prescription for leg pain:</h3>

<div style="text-align:center;"><p><img src="images/legpain.gif" alt="Leg Pain" /></p></div>
<p>&nbsp;</p>

<p style="text-align:center;"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="437" height="370" id="viddler_90ec80ab"><param name="movie" value="http://www.viddler.com/player/90ec80ab/" /><param name="allowScriptAccess" value="always" /><param name="allowFullScreen" value="true" /><embed src="http://www.viddler.com/player/90ec80ab/" width="437" height="370" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" name="viddler_90ec80ab"></embed></object></p>

<p>This placement varies individually. If you have localized pain, try placing the device directly over the area of discomfort. For sports injuries, place the devices approximately 25mm apart (1 inch) along the affected muscle(s).</p>

<p style="text-align:center"><a href="http://www.qmagnets.com/blog/category/pain-testimonies/leg-pain">Click here for Q magnet testimonies for leg pain.</a></p>

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
    <td><span>2 X QF28-3</span></td>
    <td><span><a href="http://www.1shoppingcart.com/app/netcart.asp?MerchantID=96291&ProductID=3366288"><img src="images/cart.jpg" alt="Add to shopping cart" width="134" height="23" border="0" /></a> $118.00</td>
  </tr>
 <tr>
    <td><span>Moderate</span></td>
    <td><span>2 X QF20-3</span></td>
    <td><span><a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=b3fe6613c2bd4ee4b7cd055ed141d43f"><img src="images/cart.jpg" alt="Add to shopping cart" width="134" height="23" border="0" /></a> $66.00 </span></td>
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

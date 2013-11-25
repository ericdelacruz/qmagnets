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
             <h1>Neck and Shoulder Pain</h1>
            </div>
            <br><br>
            <div class="about_body_text_box"><div class="body_left_text_area customContentStyle">
              <h3><a href="bodymap.php">Your Pain</a>  >> Q magnet Prescription for neck and shoulder pain:</h3>
              <p class="centered">
                <a href="images/Slide4.jpg"><img src="images/NS-3device.gif"><br />
                  Click on image for more details.
                </a> 
              </p>
            <p>
              Neck and shoulder pain can be treated with Q magnet devices with a three or four magnet placement.
            </p>
           <p>
            <span class="strong">Three Q magnet Placement:</span>
            <br><br>
            Find the bulge at the base of the neck, this is the 7th cervical vertebra. If you go just above the bulge, that is the space between the 6th and 7th cervical vertebrae. The  first device is placed approximately 40mm (1.5 inches) to the left of the midline. The second device is placed at the same level approximately 40mm (1.5 inches) to the right of midline.
            <br><br>
            To find the first and second placements at the base of the neck easily, place them to the right and left of the midline at the points that are tender when pressed. The  third device  is placed approximately 50mm (2 inches) above the bulge at the base of the neck at the 4th cervical vertebra. For most people, this level is usually the hairline.
          </p>
           
          <p class="centered"><iframe width="420" height="315" src="http://www.youtube.com/embed/qpwKh-tYUvQ?feature=player_detailpage" frameborder="0" allowfullscreen></iframe></p>
          
          <p class="centered">
            <a href="images/Slide5.jpg"><img src="images/NS-4device.gif">
            <br>
            Click on image for more details</a>
          </p>
		       <p><span class="strong">Four Q magnet Placement:</span>
          <br><br>
          Find the bulge at the base of the neck, this is the 7th cervical vertebra. If you go just above the bulge, that is the space between the 6th and 7th cervical vertebrae.The first device is placed approximately 40mm (1.5 inches) to the left of the midline. The second device is placed at the same level approximately 40mm (1.5 inches) to the right of midline.   
          </p>
          <p>
          To find the first and second placements at the base of the neck easily, place them to the right and left of the midline at the points that are tender when pressed. The third device is placed approximately 50mm (2 inches) above the bulge at the base of the neck at the 4th cervical vertebra. For most people, this level is usually the hairline. The fourth placement is midline below the bulge at the base of the neck
          </p>
            <a href="http://qmagnets.com/blog/category/pain-testimonies/neck-pain" class="links">
              Click here for Q magnet testimonies for neck pain.
            </a>
          <table class="tablelist1" width="100%">
            <thead><tr>
              <td><span>Pain Level </span></td>
              <td><span>Order Quantity</span></td>
              <td><span>Shopping Cart</span></td>
            </tr>
            </thead>
            <tbody>
              <tr>
                <td><span>Severe </span></td>
                <td><span>2 X QF28-3 + 2 X QF20-3 (4 device array)</span></td>
                <td><span><a href="http://www.1shoppingcart.com/app/netcart.asp?MerchantID=96291&amp;ProductID=3366213"><img width="134" height="23" border="0" alt="Add to shopping cart" src="images/cart.jpg"></a> $184.00</span></td>
              </tr>
              <tr>
                <td><span>Severe </span></td>
                <td><span>1 X QF28-3 + 2 X QF20-3 (3 device array)</span></td>
                <td><span><a href="http://www.1shoppingcart.com/app/netcart.asp?MerchantID=96291&amp;ProductID=3366224"><img width="134" height="23" border="0" alt="Add to shopping cart" src="images/cart.jpg"></a> $125.00</span></td>
              </tr>
              <tr>
                <td><span>Moderate</span></td>
                <td><span>3 X QF20-3</span></td>
                <td><span><a href="http://www.1shoppingcart.com/app/netcart.asp?MerchantID=96291&amp;ProductID=3366228"><img width="134" height="23" border="0" alt="Add to shopping cart" src="images/cart.jpg"></a> $99.00 </span></td>
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

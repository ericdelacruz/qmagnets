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
             <h1>Hip Pain</h1>
            </div>
            <div class="about_body_text_box">
			<div class="body_left_text_area customContentStyle">
				 
              <h3> <a href="bodymap.php">Your Pain</a> >> Q magnet Prescription for Hip pain:</h3>
             <p class="centeredImageLink">
              <div class="centered"><a href="images/Slide9.jpg" class="links">
                <img src="images/hipfront.gif"><br>
                Click on image for more details.
              </a></div>
            </p>
           <p>
           The first device is placed midway between the inner thigh and hip at the groin fold in the front. The second device is placed at the joint space at the hipbone. Feel for the hip bone by gently swing the leg forward and back on the affected side. Place a Qmagnet directly over this joint space or groove.
          </p>
           <div class="centered">
              <iframe width="420" height="315" src="http://www.youtube.com/embed/fvZPKXL1Mb0?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
            </div>
           <br><br>
           <p class="centeredImageLink">
            <div class="centered"><a href="images/Slide10.jpg" class="links">
              <img src="images/hipside.gif"><br/><br/>
             Click on image for more details</a></div>
          </p>
          <p>
          Remember to balance yourself by holding on to a chair or other secure surface to prevent a fall. The third device is placed at the groove or indentation felt on the side of the hip by gently extending the leg backward. A combination of all three is recommended.   
        </p>
          <a href="http://qmagnets.com/blog/category/pain-testimonies/hip-pain">Click here for Q magnet testimonies for hip pain</a>

          <table class="tablelist1" width="100%">
            <thead>
              <tr>
                <td width="100"><span>Pain Level</span></td>
                <td width="130"><span>Order Quantity</span></td>
                <td><span>Shopping Cart</span></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span>Severe</span> </td>
                <td><span>2 X QF28-6, 1  X QF28-3</span></td>
                <td><a href="http://www.1shoppingcart.com/app/netcart.asp?MerchantID=96291&amp;ProductID=3366348"><img width="134" height="23" border="0" alt="Add to shopping cart" src="images/cart.jpg"></a> $197.00</td>
              </tr>
              <tr>
                <td><span>Moderate</span></td>
                <td><span>3 X QF20-3</span></td>
                <td><a href="http://www.1shoppingcart.com/app/netcart.asp?MerchantID=96291&amp;ProductID=3366349"><img width="134" height="23" border="0" alt="Add to shopping cart" src="images/cart.jpg"></a> $99.00</td>
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

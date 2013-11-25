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
               <h1>Shoulder Pain</h1>
            </div>
            <br><br>
            <div class="about_body_text_box" ><div class="body_left_text_area customContentStyle">
              <h3> <a href="bodymap.php">Your Pain</a> >> Q magnet Prescription for  shoulder pain:</h3>
              <p class="centered ImageLink">
                <a href="images/Slide11.jpg"><img src="images/shoulderF.gif"><br>
                Click on image for more details.</a> 
            </p>
            <p><span class="strong">Front of Shoulder</span><br><br>             
             Joint pain of the shoulder can be treated with Qmagnet devices as shown by placing a device over the joint space in the front and back and on the top part of the arm. Use at least three devices. To find the joint space in front, raise and lower the affected arm while gently pressing in front of the base of the shoulder. Place a Qmagnet device in the space felt in front of the shoulder joint.
            </p>
           <p class="centered ImageLink">
           <iframe width="420" height="315" src="http://www.youtube.com/embed/H2Onh0jaark?feature=player_detailpage" frameborder="0" allowfullscreen></iframe><br /><br />
             <a href="images/Slide12.jpg"><img src="images/shoulderB.gif"><br>
              Click on image for more details
            </a>
          </p>
          <p><span class="strong">Back Shoulder</span><br><br>
            To find the joint space in back, again, raise and lower the affected arm while gently pressing in back of the shoulder. Place a Qmagnet device in the space felt in back of the shoulder joint. To find the joint space on the top part of the arm, raise and lower the affected arm while gently pressing just below the shoulder bone on the top of the arm. Place a Qmagnet device in the space felt just below the shoulder bone.<br><br>
            A combination of all three devices is recommended.
          </p>
          <p class="centered ImageLink">
            <a href="images/Slide13.jpg"><img src="images/shoulderA.gif"><br>
              Click on image for more details.
            </a>
          </p>
          <p><span class="strong">Acute Shoulder</span><br><br>
            Pain due to overuse and strain may benefit by placement of the device in the area previously described for tension discomfort of the neck as well as placement on areas of the shoulder which are tender or uncomfortable due to overuse and strain. For a common placement for pain and muscle tenderness use a two-device array over the area of muscle tenderness on the back and an additional one in the joint space in the front as described above. <br><br>
            A combination of all three will be most effective for all shoulder pains.
          </p>
          <p>
            <a href="http://qmagnets.com/blog/category/pain-testimonies/shoulder-pain" class="links">
              Click here for Q magnet testimonies for shoulder pain.</a>
          </p>
          <table class="tablelist1" width="100%">
            <thead>
              <tr>
                <td><span>Pain Level </span></td>
                <td><span>Order Quantity</span></td>
                <td><span>Shopping Cart</span></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span>Severe </span></td>
                <td><span>3 X QF28-3</span></td>
                <td><span><a href="http://www.1shoppingcart.com/app/netcart.asp?MerchantID=96291&amp;ProductID=3366241"><img width="134" height="23" border="0" alt="Add to shopping cart" src="images/cart.jpg"></a> $177.00</span></td>
              </tr>
              <tr>
                <td><span>Moderate</span></td>
                <td><span>3 X QF20-3</span></td>
                <td><span><a href="http://www.1shoppingcart.com/app/netcart.asp?MerchantID=96291&amp;ProductID=3366248"><img width="134" height="23" border="0" alt="Add to shopping cart" src="images/cart.jpg"></a> $99.00</span></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="3"><span>For best value purchase the <a href="products.php#QBP">Q Bonus Package</a></span></span></td>
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

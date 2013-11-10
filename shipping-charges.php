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
              <h1> Q magnet Shipping Options - Times & Charges</h1>
            </div>
            <div class="about_body_text_box">
				<div id="cse-results" style="display: none;"></div><div class="body_left_text_area customContentStyle" id="static-content">
				
<p>All orders over $200 will be shipped free with standard delivery services. Please see following options for shipping, simply select your choice in the <a href="products.php">shopping cart</a> after filling in your shipping address details.</p>
<h3>INTERNATIONAL SHIPPING OPTIONS:</h3>
<style>
td { text-align:left; }
</style>
<table width="100%" class="tablelist1">
 <thead>
  <tr>
   <td><span>Shipping Method</span></td>
   <td width="180"><span>Normal Delivery Times</span></td>
   <td width="80"><span>Price</span></td>
  </tr>
 </thead>
 <tbody>
  <tr>
   <td><span>Orders over $200 - International Registered Post</span></td>
   <td><span>5-10 working days</span></td>
   <td><span>Free</span></td>
  </tr>
  <tr>
   <td><span> Orders over $200 - <a href="#ECI">Express Courier International</a></span></td>
   <td><span>2-5 working days</span></td>
   <td><span>$35.00</span></td>
  </tr>
  <tr>
   <td><span>Orders below $200 - International Registered Post</a></span></td>
   <td><span>5-10 working days</span></td>
   <td><span>$27.00</span></td>
  </tr>
  <tr>
   <td><span> Orders below $200 - <a href="#ECI">Express Courier International</a></span></td>
   <td><span>2-5 working days</span></td>
   <td><span>$55.00</span></td>
  </tr>
  <tr>
   <td><span>International Registered Post - For Q6-1.5 and plasters only, where they can be shipped in a standard envelope.</span></td>
   <td><span>5-10 working days</span></td>
   <td><span>$8.00</span></td>
  </tr>
 </tbody>
</table>

<h3>AUSTRALIAN SHIPPING OPTIONS:</h3>
<table width="100%" class="tablelist1">
 <thead>
  <tr>
   <td><span>Shipping Method</span></td>
   <td width="180"><span>Normal Delivery Times</span></td>
   <td width="80"><span>Price</span></td>
  </tr>
 </thead>
 <tbody>
  <tr>
   <td><span>Orders over $200 - Express Post Platinum</span></td>
   <td><span>    Next Day within the network</span></td>
   <td><span>Free</span></td>
  </tr>
  <tr>
   <td><span>Orders below $200 - Express Post Platinum</span></td>
   <td><span>Next Day within the network</span></td>
   <td><span>$11.00</span></td>
  </tr>
  <tr>
   <td><span> Registered Post - For Q6-1.5 and plasters only, where they can be shipped in a standard envelope.</span></td>
   <td><span>1-3 working days</span></td>
   <td><span>$6.50</span></td>
  </tr>
 </tbody>
</table>
				
				<p>Most Q magnets are packaged and shipped in a box 220mm X 160mm X 77mm (8.6' X 6.3' X 3').</p>
				<p><a href="http://auspost.com.au/internationalpost/products/eci/index.html" target="_blank">Express Courier International</a> is a premium express service which provides online tracking and a signature on delivery. </p>
				<p>Normal delivery times are provided by the carrier, <a href="http://auspost.com.au/index.html" target="_blank">Australia Post</a> and its affiliates in the relevant countries. While in the majority of cases deliveries are made within these times, there are factors outside of our control such as customs, border security or <a href="http://www.usps.com/international/serviceupdates.htm" target="_blank">Transportation Security Administration</a> (TSA) in the USA that can delay some deliveries. Where possible we will do our best to keep you informed in cases where delivery times might be delayed.</p>
				
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

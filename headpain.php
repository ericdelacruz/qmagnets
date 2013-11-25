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
            <div class="body_heading_bg_big">
              <h1> <a href="conditions.php">Your Condition</a> >> Q magnet Prescription for Headaches or Migraine:</h1>
             
            </div>
            <br><br>
            <div class="about_body_text_box"><div class="body_left_text_area customContentStyle">
              <p class="centered ImageLink">
                <a href="images/Slide22.jpg">
                  <img src="images/headpain.gif">
                  <br>
                  Click on image for more details.
                </a> 
              </p>
             <p>
               There are two main placements for headaches or migraines. The first is over the temples as shown in the diagram above.
               <br><br>
                The second placement is over the occiput or basilar artery which is at the base of the skull - see video below for exact placement. If the migraine or headache originates from the neck, then you will most likely need to follow the <a href="neckpain.php"> Q magnet prescription for Neck Pain  </a> as well.
                <br><br>
                See the beginning of the <a href="#" >Good Medicine </a>program which shows a patient being treated for migraines. 
             </p>
               <div class="centered"><iframe width="420" height="315" src="http://www.youtube.com/embed/gb4IOsc-I00?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
               
               <p> <a href="http://qmagnets.com/blog/category/condition-testimonies/headache" > Click here for Q magnet testimonies for headaches.</a></p>
			   </div>
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
                  <td><span>2 X QF28-3</span></td>
                  <td><span><a href="http://www.qmagnets.com/buy-QF28-3.php"><img width="134" height="23" border="0" alt="" src="images/cart.jpg"></a></span></td>
                </tr>
                <tr>
                  <td><span>Mild</span></td>
                  <td><span>1  X Q6-1.5 6 Pack</span></td>
                  <td><span><a href="http://www.qmagnets.com/buy-Q6-15.php"><img width="134" height="23" border="0" alt="" src="images/cart.jpg"></a></span></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <td colspan="3"><span>For best value purchase the <a href="products.php#QBP">Q  Bonus Package</a></span></td>
                </tr>
                </tfoot>
              </table>
                <br>
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

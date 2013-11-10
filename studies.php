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
.customContentStyle p { line-height:150%; margin-bottom:6px; }
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
              <h1>Q magnet – Case Studies</h1>
            </div>
            <div class="about_body_text_box">
				<div id="cse-results" style="display: none;"></div><div class="body_left_text_area customContentStyle" id="static-content">
<p>The following single case studies were presented at professional health conferences and should give health practitioners and the general public a better understanding of the applications of Q magnets and how effective they can be at relieving the symptoms of pain.</p>
<br />
<p><strong>Conference:</strong>	  Sports Medicine Australia - Queensland 2001<br />
<strong>Title:</strong>   Neuromagnetic Treatment Following Whiplash in an Equestrian Sportsman</p>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="560" height="469">
<param name="movie" value="swf/NeuromagneticTreatmentFollowingWhiplashinEquestrianSportsman.swf" />
<param name="quality" value="high" />
<embed src="swf/NeuromagneticTreatmentFollowingWhiplashinEquestrianSportsman.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="560" height="469">
</embed>
</object>
<br />
<br />
<p><strong>Conference:</strong>	  International Conference of Physiotherapy - Sydney 2002 <br />
<strong>Title:</strong>   Neuromagnetic Treatment For Chronic Cervical Headaches</p>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="560" height="469">
<param name="movie" value="swf/IntPhysioConf2002.swf" />
<param name="quality" value="high" />
<embed src="swf/IntPhysioConf2002.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="560" height="469">
</embed>
</object>
<br />
<br />

<p style="text-align:center;"><a href="products.php"><img src="images/order-now-button.gif" alt="Order Now" /></a><br />Order your Qmagnets risk free now!  Choose from our range of economical packages, shipped to your home. </p>
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

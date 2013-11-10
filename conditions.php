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
              <h1>What's your condition?</h1>
            </div>
            <div class="about_body_text_box">
              <div class="contentWrapper">Q magnets are a Medical device intended to produce a magnetic flux field over a superficial body site to potentially provide comfort or localized temporary relief of minor aches and pains (e.g., from muscle soreness/stiffness, arthritis etc.). The magnet is typically applied directly to the skin with adhesive.</div>
              <div class="contentWrapper">Neither the information on this website or the technology is intended to be a substitute for any medical treatment that is recommended or prescribed by your doctor or health care professional.</div>
              <div class="contentWrapper">For painful conditions that are localised to certain areas of the body, please refer to the <a href="bodymap.php">Body Map</a> for placement recommendations.</div>
              <div class="contentWrapper">Please see tips for looking after skin when applying Qmagnets - FAQ.</div>
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

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
            <div class="body_heading_bg_big">
              <h1>Physiotherapist, Dianne Hermans receives Dorothy Hopkins Award research grant.</h1>
            </div>
            <div class="about_body_text_box">
              <p>September, 2009</p><p><br />  The Dorothy Hopkins Award for Clinic Study is made available  to financial members  of the Australian Physiotherapy Association who meet the selection criteria. </p><p>&nbsp;</p><p>Dianne Hermans is  currently enrolled in a RHD Masters program at Griffith  University and is conducting a double-blind Randomised Controlled Trial  using  Q magnets. The study...&quot;Effect and Effect mechanisms of neuromagnetic treatment  for pain of knee osteoarthritis&quot; is currently in its feasibility phase.</p><p>&nbsp;</p><p><a href="http://www.lifestyle100.com/site/about/QMagnet_Stories.html">Dianne'sprofile</a> is available at her clinic website. </p><p>&nbsp;</p><p>END</p>
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

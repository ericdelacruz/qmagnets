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
              <h1>Lions Players Use Special Magnets To Stay Match Fit</h1>
            </div>
            <div class="about_body_text_box">
              <p>March 26, 2009<br />  Some of the Brisbane Lions team use medical magnets specially developed by neurologists    to help minimise pain related to on-field injuries and to speed the recovery    process. The magnets differ from household magnets and other magnets sold for    pain relief, because each device contains four alternating magnetic poles, hencethe name - &lsquo;quadraploar&rsquo; or &lsquo;Q magnets&rsquo;.</p><p>&nbsp;</p><p>Nathan Carlos, head physio at the Lions explains,</p><p>&ldquo;As part of the demands of professional sport, injury management is of paramount  importance. Any device to improve pain and aid the recovery process is something  of extreme value to the playing group. Brisbane Lions use Q magnets for pain relief,  improved motor recruitment and fracture healing.&rdquo;</p><p>&nbsp;</p><p>The reason the Q magnets are so effective for pain relief is that the four magnets  work together to create a very steep magnetic field gradient that penetrates deep  into the body and interrupts pain signals to the brain.</p><p>Q magnets are used by many physiotherapists for sports-related injuries and pain  as well as for general pain, particularly back pain<br />  .</p><p>Brisbane Lions players Jamie Charman and Daniel Merrett use Q magnets. Jamie says,</p><p>&ldquo;I use Q magnets for managing occasional bouts of lower back pain and find  considerable difference in pain and range of motion on the days I wear the magnets.  They form part of my total recovery process from game and training stress.&rdquo;</p><p>&nbsp;</p><p>and Daniel adds,</p><p>&ldquo;As a professional athlete I will maximise the healing and recovery tools  recommended by the medical staff. The quadrapolar technology of Q magnets has a  great effect on pain reduction which allows me to progress through my rehab stages  and get back on the field sooner.&rdquo;</p>
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

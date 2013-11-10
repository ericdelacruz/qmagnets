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
</head>
<body>

<div style="color:#FFF">

</div>

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
         <?php //include("includes/banner.php");  ?>
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
			
              <h1>Q magnets Press Room</h1>
            </div>
            <div class="about_body_text_box">
              <div class="res_body_left_text_area">
             Q magnets are a world leader in the research, design and manufacture of therapeutic static magnets. Please <a href="contact.php">contact us</a> for media enquiries.<br><br>
             <a id="media"></a><h2>Q magnets in the news:</h2>
              </div>
              <div class="press_room_box">
                <div class="press_room_img_area">
                  <div class="press_room_img_box"><a href="images/CM_QMarticle_120428.jpg"><img src="images/press_room_img1.jpg" alt="" width="199" height="189" border="0"></a></div>
                  <div class="press_room_text_con"><a href="http://www.couriermail.com.au/business/your-business/brisbane-company-attracting-sports-people-to-magnet-relief-therapy/story-fn7ve1pb-1226341534521">April 28/29, 2012; Pg 79 Article in The Courier-Mail Weekend - Brisbane company attracting sports people to magnet relief therapy. </a> 
                  <br><br>
                  Click on the image for newspaper view and link for online version.</div>
                </div>
                <div class="press_room_img_area">
                  <div class="press_room_img_box"><a href="http://qmagnets.com/blog/news/q-magnets-featured-in-run-4-your-life-magazine.html"><img src="images/press_room_img2.jpg" alt="" width="199" height="189" border="0"></a></div>
                  <div class="press_room_text_con"><a href="http://qmagnets.com/blog/news/q-magnets-featured-in-run-4-your-life-magazine.html">Feb/Mar, 2012; Pg 10 Article in Run4 Your Life magazine - What's Hot section. </a></div>
                </div>
                <div class="press_room_img_area">
                  <div class="press_room_img_box"><a href="http://qmagnets.com/blog/news/q-magnets-featured-in-bicycling-australia-magazine.html" target="_blank"><img src="images/Bicycling-Australia.jpg" alt="Bicycling-Australia" width="199" height="189" /></a></div>
                  <div class="press_room_text_con"><a href="http://qmagnets.com/blog/news/q-magnets-featured-in-bicycling-australia-magazine.html" target="_blank">Jan/Feb, 2012; Pg 35 Article in Bicycling Australia magazine - Top Gear section </a></div>
                </div>
                <div class="press_room_img_area">
                  <div class="press_room_img_box"><a href="http://www.baysidebulletin.com.au/news/features/articles/health/new-devices-claims-to-stop-severe-pain/2211289.aspx?storypage=0"><img src="images/press_room_img3.jpg" alt="" width="199" height="189" border="0"></a></div>
                  <div class="press_room_text_con"><a href="http://www.baysidebulletin.com.au/news/features/articles/health/new-devices-claims-to-stop-severe-pain/2211289.aspx?storypage=0">AJune 28, 2011; Pg 41 Article in the Bayside Bulletin - New Device Stops Severe Pain</a></div>
                </div>
              </div>
              <div class="press_room_link_area"><a id="press_release"></a><h2>Press Releases:</h2>
              <ul>
              <li><a href="downloads/Australian-company-develops-most-powerful-pain-relief-magnet.pdf">November 21, 2011; Australian Company Develops Most Powerful Pain Relief Magnet in the World.</a></li>
              <li><a href="press-hexapole.php">November 1, 2009; Hexapole magnet takes medicalgrade magnets into a new era.</a></li>
              <li><a href="press-simon-black.php">October, 2009; Dianne Hermans interviews Simon Black of the Brisbane Lions.</a></li>
              <li><a href="press-dorothy-hopkins-award.php">September, 2009; Physiotherapist, Dianne Hermans receives research grant from Dorothy Hopkins Award.</a></li>
              <li><a href="press-lions.php"> March 26, 2009; Lions players use special magnets to stay match fit</a></li>
              </ul>
              </div>
            </div>
            <div class="left_bottom_img"><img src="images/body_left_bottom_img.jpg" alt="" border="0"></div>
            </div>
          </div>
          <div class="body_right_area">
          <?php include("includes/yourpain.php");  ?>
          <?php include("includes/blog.php"); ?>
            
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

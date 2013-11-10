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
              <h1>Q Magnet / Nikken Comparison </h1>
            </div>
            <div class="about_body_text_box">
				<div id="cse-results" style="display: none;"></div><div class="body_left_text_area customContentStyle" id="static-content">
				
<p>Quadrapolar or Q magnets as compared with Nikken’s magnetic products. Nikken’s distributors often talk about total magnetic coverage when making comparisons with their elastomag sports wraps.</p>
<p>When discussing the pain relieving properties of magnets and their ability to interrupt the pain message it is vital to understand that there is an active part of the magnet and a non-active part. The design of the quadrapolar or Q magnet produces a perfectly balanced and focused magnetic field gradient. The interaction of the four North/South or +/- poles generates the steepest field gradient and hence has the greatest physiologic effect.</p>
<p>Image 1: Computer generated rated magnetic field map of the Quadrapolar array. <a href="magnetictherapypublishedresearch.php#researchpaper_eb_mclean_2001"> Static Magnetic Fields for the treatment of Pain. McLean MJ et al.</a></p>
<p><img src="images/graphcopy_new.jpg" /></p>
		
<p>Click on this link <a href="how-Q-magnets-work.php">SCIENCE</a> to see the science behind the Quadrapolar magnet for an explanation of the active part of the quadrapolar magnet and its physiologic effect on nerves as compared to the more common bipolar static magnets. </p>
<p>The active part of the magnet is the steep field gradient that exists in between the adjacent poles of opposing polarity. You can see from how Nikken’s product has evolved that they have attempted to harness the steep gradient produced by the N S N S interaction of the magnets. </p>
<p>&nbsp;</p>
<p>Image 2: Design from 1996 Nu-Magnetics patent that Nikken used in its products </p>
<p><img src="images/clip_image002_001.jpg" /></p>
<p>You can see how this design creates multiple N S N S or + - + - quadrapolar arrays over the surface of the magnet. </p>
<p>&nbsp;</p>
<p>Image 3: Current design used by Nikken from 1999 Nu-Magnetics patent </p>
<p><img src="images/clip_image002_002.jpg" /></p>
<p>Both designs have multiple N S N S interactions that produce multiple steep field gradients distributed across the magnetic pads. This is of benefit to consumers who do not learn where to strategically place the active part of the magnets over the correct nerves. Since there are multiple active parts of the magnet, there is a better chance that it will in fact cover the offending nerve. The down side of Nikken’s design is that the effectiveness of the active part of the magnet is diminished as the steepness and strength of the gradient is dissipated over multiple sites on the magnetic strip. </p>
<p>Quadrapolar or Q magnets focus the active part of the magnet at the four mid points between the opposite poles, see <a href="magnetictherapypublishedresearch.php#researchpaper_eb_mclean_2001">research paper</a>. The focus and magnetic energy produced by the quadrapolar or Q magnet and the steepness of the field gradient has the greatest physiologic effect of blocking or interrupting the pain signal travelling along the body’s nerve pathways. This is particularly important when a clinician is looking to have an effect over the dorsal column (the large nerves travelling the length of the spine). </p>
<p>By using the tools and <a href="bodymap.php">recommended placements provided</a>, a consumer can simply find the best places to attach the magnets to the body which will provide the most effective relief from pain of any therapeutic magnet on the market. </p>
<p>Health practitioners who use Q magnets as an adjunct in their treatment of pain can demonstrate to their patients the most effective places to use their Q magnets for the greatest pain relief. </p>
<p style="text-align:center;">Click on the Order Now button below to place your order.<br />
<a href="products.php"><img src="images/order-now-button.gif" alt="Order Now!" /></a> </p>

				
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

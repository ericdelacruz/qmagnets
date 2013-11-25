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
              <h1>Why magnet design matters? </h1>
            </div>
            <div class="about_body_text_box">
				<div id="cse-results" style="display: none;"></div><div class="body_left_text_area customContentStyle" id="static-content">
				 
<p>There is a lot more to magnets than the North and South pole contained in all common bipolar magnets. Where the strength of a magnetic field changes with distance there exists a field gradient which occurs equally at the North or South pole.</p>
<p> Magnetic materials are attracted to field gradients and NOT to a uniform or what physicists call a homogeneous field. This is well illustrated with the cow magnet. Cow magnets are used by cattle farmers to safely collect any metal objects such as nails or barbed wire their animal might ingest. Because the cow magnet produces a field gradient along the length of its shaft, metal objects will neatly stick to its sides. This is how it works...</p>

<div style="text-align:center; overflow:hidden;">
<img src="images/Cow-magnet-nails-450lr.jpg" width="200" style="float:left; margin-right:10px;" /><img src="images/Cow-magnet-filings-450lr.jpg" width="200" style="float:left" />
</div><p>&nbsp;</p>

<p>The magnets in the cow magnet are arranged so that each pole joins with the like pole of the adjoining magnet. This sets up a steep field gradient where the magnets are forced into position. Like poles repel so the cow magnet has to be assembled in a way that adjoining magnets are "forced" into place and secured there. The image above on the right shows iron filings sprinkled over the same cow magnet. The filings reveal where the like poles face each other.</p>
<p>Along the length of a long bipolar magnet, there exists a strong field gradient only at the ends of the magnet. Along the shaft of the magnet the field is effectively uniform, hence there is no force of attraction between the magnet and nail along the shaft, the results of which can be seen in the image below. As you can imagine, this magnet would mean almost certain death to a cow, that's why magnet design matters!</p>
<p>The same principle applies to magnetic design for therapeutic purposes. Cell and animal studies and controlled trials on humans show that different magnetic devices have different effects, see <a href="magnetic-therapy-relevant-research.php#researchpaper_em_mclean_1991">research on magnetic therapy</a>. Neuromagnetics Australia is a world leader in the design and manufacture of magnet devices for therapeutic purposes, particularly for pain and injury recovery.</p>
<p>The image below to the right shows how iron filings are attracted to the ends of the magnet and along the shaft where the field is uniform the filings follow a straight line.</p>
		
<div style="text-align:center; overflow:hidden;">
<img src="images/BipolarNails-450-lr.jpg" width="200" style="float:left; margin-right:10px;" /><img src="images/Bipolarfilings-450lr.jpg" width="200" style="float:left" />
</div><p>&nbsp;</p>
<p>The design of Q magnets for therapeutic effects is even more complicated as the research on <a href="magnetic-therapy-relevant-research.php#researchpaper_eb_mclean_2001">cell studies undertaken by neurologists at Vanderbilt Medical University</a> showed (<a href="downloads/Pub-TreatPain.pdf">Static Magnetic Fields for the Treatment of Pain</a>); the active region of the magnet is where the field gradient is perpendicular to the local field vector. This can be seen with iron filings on a Q magnet. See more about <a href="how-Q-magnets-work.php">how magnets help with pain</a> here. </p>
<div class="centered">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="350" height="306" align="baseline" title="Quadrapolar magnet with iron filings">
<param name="movie" value="/swf/Qmagnets ProQ.swf" />
<param name="quality" value="high" />
<embed src="/swf/Qmagnets ProQ.swf" width="350" height="306" align="baseline" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash"></embed>
</object>
</div>
<br />
<div class="centered">
<a href="products.php"><img src="images/order-now-button.gif" alt="Order Now!" /></a>
<p>Order your Qmagnets risk free now!  Choose from our range of economical packages, shipped to your home. </p>
</div>
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

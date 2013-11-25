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
              <h1>Magnetic Resonance Imaging</h1>
            </div>
            <div class="about_body_text_box">
				<div id="cse-results" style="display: none;"></div><div class="body_left_text_area customContentStyle" id="static-content">
				<h3>How The Development of Magnetic Resonance Imaging (MRI) Illustrates What's Possible With Magnetic Fields. </h3>
				
<p><img src="images/mri.jpg" class="imgLeft" width="220" style="border:1px solid #FFF;" />The breakthrough in the discovery of both the MRI for imaging and Q magnets for pain relief is found in magnetic field gradients. While the MRI is a state-of-the-art diagnostic instrument, its story shows how gradient modulated magnetic fields can be applied to improve the lives of patients. </p>
<p> In simple terms the MRI detects the concentration of protons within the body, most of which make up water molecules. Using magnetic field gradients and radio frequency the MRI is able to produce a two dimensional image which roughly correlates to the concentration of water. Hence bone and cavities show up as black and fat very light. Different tissue types respond differently and this is how a radiologist is able to make sense of the MRI films.</p>
<p><img src="images/mri2.jpg" class="imgRight" />Some 30 years after their initial discovery, Paul Lauterbur and Sir Peter Mansfield won the <a href="http://nobelprize.org/nobel_prizes/medicine/laureates/2003/perspectives.html" target="_blank">2003 Nobel Prize in medicine</a> for resolving how to use magnetic field gradients to generate two dimensional images. Like the period before the discovery of the MRI, most practitioners and observers of magnetic therapy are stuck in the old North and South Pole paradigm, but the science has moved on. The common bipolar magnet generates a uniform magnetic field with negligible field gradient or variation. Bringing North and South poles together such as in the Quadrapolar array, generates <a href="magnetic-field-gradients.php" target="_blank">steep field gradients</a> which produce rapid changes in field strength.</p>
<p><img src="images/graphcopy_new.jpg" class="imgLeft" width="230" />This can be difficult to conceptualise as magnetic fields are invisible and as a vector quantity have both magnitude and direction i.e. are positive or negative. One way to observe the flow of magnetic field lines is by sprinkling iron filings over different magnet arrangements. Field gradients are strongest at either pole of a magnet and this is where the greatest force is exerted on iron filings, other magnets or charged particles. That's why when you sprinkle iron filings on a bar magnet most of them are attracted to the ends. Where the field lines are straight, the gradient is running parallel with the field lines as can be seen with the bipolar magnet (see Image A below). </p>
<p>Image B shows the original design by Dr Holcomb of four bipolar magnets arranged in a quadrapolar array. Notice the sharp changes in direction of the iron filings, these follow the field gradient and the directional changes between the poles where they align horizontally show that the gradient at that point is running perpendicular to the field lines. This is vitally important as the cell studies on the <a href="downloads/Pub-TreatPain.pdf" target="_blank">biological effects of magnetic fields</a> show that the maximally effective region is where the gradient is predominantly perpendicular to the local field vector. </p>
<p>Image C shows iron filings sprinkled over the new Q magnet design with a quadrapolar array within one magnetic body. You may notice a more accentuated change of direction and a longer horizontal alignment in the flow of the iron filings. This is because there is no "wasted space" between the poles that exist with the original design and hence there is a greater interaction between the poles. </p>
<p>Finally Image D is the new ProH hexapole magnet where you can see the iron filings form around six poles. This shows that there are more active regions in the hexapole model since there are six gradient zones running horizontally instead of four. </p>

<div class="mricols">
	<div class="mricol1">
	
<div class="mribox">
<h3>Image A - Bipolar Magnet</h3>
	<div style="padding:10px 5px; text-align:center">
	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="250" height="160" align="absmiddle" title="Bipolar magnet with iron filings">
	<param name="movie" value="/swf/Qmagnets Bipolar.swf" />
	<param name="quality" value="high" />
	<embed src="swf/Qmagnets Bipolar.swf" width="250" height="160" align="absmiddle" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash"></embed>
	</object>
	</div>
</div>

 
 
<div class="mribox">
<h3>Image B - Quadrapolar Array</h3>
	<div style="padding:10px 5px; text-align:center">
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="250" height="160" align="baseline" title="Quadrapolar magnet with iron filings">
		<param name="movie" value="/swf/Qmagnets ProQ.swf" />
		<param name="quality" value="high" />
		<embed src="swf/Qmagnets ProQ.swf" width="250" height="160" align="baseline" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash"></embed>
		</object>
	</div>
</div>


<div class="mribox">
<h3>Schematic representation of quadrapole</h3>
	<div style="padding:10px 5px; text-align:center">
		<img src="images/Quadrapole.jpg" alt="schematic representation of Quadrapole" width="250" />
	</div>
</div>

	</div>
	<div class="mricol2">
	

<div class="mribox">
<h3>Image C - Quadrapolar Magnet</h3>
	<div style="padding:10px 5px; text-align:center">
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="250" height="160" align="absmiddle" title="Quadrapolar array with iron filings">
		<param name="movie" value="/swf/Qmagnets Quad Array.swf" />
		<param name="quality" value="high" />
		<embed src="swf/Qmagnets Quad Array.swf" width="250" height="160" align="absmiddle" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash"></embed>
		</object>
	</div>
</div>
	
<div class="mribox">
<h3>Image D - Hexapolar Magnet</h3>
	<div style="padding:10px 5px; text-align:center">
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="250" height="160" align="texttop" title="Hexapolar magnet with iron filings">
		<param name="movie" value="/swf/Qmagnets ProH.swf" />
		<param name="quality" value="high" />
		<embed src="swf/Qmagnets ProH.swf" width="250" height="160" align="texttop" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash"></embed>
		</object>
	</div>
</div>

<div class="mribox">
<h3>Schematic representation of hexapole</h3>
	<div style="padding:10px 5px; text-align:center">
		<img src="images/Hexapole.jpg" alt="schematic representation of hexapole" width="250" />
	</div>
</div>
	

	</div>
</div>

<p>Dr Holcomb's ground breaking research on gradient producing static magnetic fields will one day be recognised as every bit as significant as the discovery of the MRI. His research can be very simplistically summarised as...</p>

<h3 class="h3gold">(Magnet Strength + Magnet Size) X Field Gradient = Therapeutic Effect</h3>
<p>Where Tesla (or Gauss) is the strength of the magnet (which along with the size, determines the depth of penetration) and Gradient (running perpendicular to the local field vector) is the change in the field strength over distance. The therapeutic effect is pain relief, reduced inflammation and normalising local circulation. </p>

<p>See the following links for more detailed infromation on MRI...</p>

<p><a href="http://hyperphysics.phy-astr.gsu.edu/hbase/nuclear/mri.html">http://hyperphysics.phy-astr.gsu.edu/hbase/nuclear/mri.html</a></p>
<p><a href="http://en.wikipedia.org/wiki/Magnetic_resonance_imaging">Wikipedia entry</a></p>


<p style="text-align:center;"><a href="products.php"><img src="images/order-now-button.gif" alt="Order Now" /></a><br />Order your Qmagnets risk free now!  Choose from our range of economical packages, shipped to your home. </p>



<style>
.mricols { overflow:hidden; text-align:left; }
	.mricol1 { float:left; width:270px; }
	.mricol2 { float:right; width:270px; }
	
		.mribox { background:#333; border:1px solid #333; margin-bottom:10px; }
		.mribox h3 { padding:5px 15px; background:#222; }
	
</style>
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

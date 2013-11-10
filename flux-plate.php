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
              <h1>Flux Plate and Magnetic Field Depth of Penetration</h1>
            </div>
            <div class="about_body_text_box">
				<div id="cse-results" style="display: none;"></div><div class="body_left_text_area customContentStyle" id="static-content">
<p>The name of Q magnet models which contain the letter F indicates that they have a flux plate. This includes <a href="buy-details16.php">QF10-2</a>, <a href="buy-details14.php">QF15-2</a>, <a href="buy-details11.php">QF20-2</a>, <a href="buy-details8.php">QF28-6</a> and <a href="buy-details5.php">OF50-3</a>, while the <a href="buy-details18.php">Q6-1.5</a> model does not possess a flux plate. </p>
<p><strong>Essentially the flux plate has been incorporated into the Q magnet design to shield the magnet and prevent "flux leakage". To drive the magnetic field deeper into the body and focus the energy through the tissue and nerves where it has its therapeutic effect. </strong></p>
<p>The image below to the left shows a Q magnet with no flux plate. The field of any isolated symmetrical magnet will emit magnet flux symmetrically and equally through the north and south poles. The problem with this is that magnetic fields diminish very rapidly and you want the field to penetrate through the tissue and nerves of the body, not to be "wasted" in the air away from your body.</p>
<p>The image to the right illustrates the Q magnet magnetic field with an attached flux plate. The plate shields the magnetic field and drives it deeper into the body. It focuses the magnetic flux lines and the <a href="magnetic-field-gradients.php">field gradient</a> through the tissue of the body. </p>


<div class="mricols">
	<div class="mricol1">
	
		<div class="mribox">
			<h3>Q magnet with no flux plate<span>Magnetic field is of equal strength both into and away from the body.</span></h3>
			<div style="padding:10px 5px; text-align:center">
			<img src="images/flux-plate-nil.jpg" alt="Flux Plate" width="230" />
			</div>
		</div>
	</div>
	<div class="mricol2">
	
		<div class="mribox">
			<h3>Q magnet with flux plate<span> Magnetic field penetrates deeper into the body. </span></h3>
			<div style="padding:10px 5px; text-align:center">
				<img src="images/flux-plate.jpg" alt="Flux Plate" width="230" />
			</div>
		</div>
	</div>
</div>

<p>One of the problems with wearing some of the larger more powerful neodymium rare-earth magnets is they tend to get stuck to large metal objects while being worn. While the flux plate causes the magnetic field directed into the body to become stronger, it is also weaker directed away from the body. Hence, your Q magnet device is less likely to stick to large metal objects while you are wearing them. It also makes them easier to handle and separate when they become stuck together. </p>
<p>The important message from this is make sure when applying your devices that the flux plate is positioned to the outside of the body and not towards the skin. Many Q magnet customers have made this mistake and found the devices were not as effective when applied incorrectly. </p>

<style>
.mricols { overflow:hidden; text-align:left; }
	.mricol1 { float:left; width:270px; }
	.mricol2 { float:right; width:270px; }
	
		.mribox { background:#333; border:1px solid #333; margin-bottom:10px; }
		.mribox h3 { padding:5px 15px; background:#222; }
		.mribox h3 span { font-weight:normal; display:block; font-size:11px; }
	
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

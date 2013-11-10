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
              <h1>The Q Separator For Easy Separation Of Q Magnets</h1>
            </div>
            <div class="about_body_text_box">
				<div id="cse-results" style="display: none;"></div><div class="body_left_text_area customContentStyle" id="static-content">
				
<p>The second generation Q magnets are very powerful quadrapolar (four alternating poles on one surface) magnets within one magnetic body. They are made from some of the most powerful rare earth, neodymium magnetic material known. This provides a deeper penetrating magnetic field, a steeper field gradient and a powerful therapeutic effect on the body.</p>
<p>One of the consequences of this design is the attraction forces between the Q magnets. When storing your Q magnets, keep the white plastic separator between them and try not to allow the active sides of two devices come together (the active side of the Q magnet is not the sticker side, it is the silver or gold plated side). </p>
<p><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="327" height="240" hspace="20" vspace="20" align="left" border="5" class="imgLeft" title="Q Separator Flash">    <param name="movie" value="images/Q_SeparatorLg.swf" />    <param name="quality" value="high" /><param name="BGCOLOR" value="#000000" />    <embed src="images/Q_SeparatorLg.swf" width="327" height="240" hspace="20" vspace="20" align="left" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#000000"></embed>  </object>If your Q magnets do stick together, they can be very difficult to separate. This is why we have designed the Q separator. Simply place one magnet into the cavity and slide off the top one as seen in the video to the left. If you have difficulty removing the Q magnet that remains in the cavity, give the Q Separator a tap in the palm of your hand or on a soft solid surface. The Q magnet should fall out either into your hand or onto the soft surface.</p>
<p>If you do not have a Q separator, the easiest way to separate the Q magnets is to place the edge of the bottom one against the lip of a solid square edge like a table or bench and push against the top Q magnet with both thumbs. The top Q magnet will slide off.</p>
<p>Storing your Q magnets for long periods while stuck together will not diminish the strength of the magnetic field. This is simply a precaution to make them easier to handle.</p>
<p>Never try to pull or twist your Q magnet apart, only use a shearing or sliding force. </p>
				
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

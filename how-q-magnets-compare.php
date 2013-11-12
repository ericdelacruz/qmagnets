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
              <h1>How Q magnets Compare to other Magnetic Products</h1>
            </div>
            <div class="about_body_text_box">
				<div id="cse-results" style="display: none;"></div><div class="body_left_text_area customContentStyle" id="static-content">
				
<p>Before comparing magnetic products one must first consider what effect they are supposed to produce on the body. For instance the magnets contained in jewellery are going to have completely different properties to Q magnets and would not be comparing apples with apples. The majority of magnets sold with health claims are the same magnets used for industrial purposes that have simply been resold to the public, usually within braces or wraps. </p>
<p>Many websites make unsubstantiated and/or misleading claims and embellish their story in order to make their magnets appear somehow special or different. In nearly every case they are simply common bipolar magnets that might come with a clever way to wear them.</p>
<p>Q magnets are not only different to any other magnet on the market, they are the only device we know of that is sold as a medical device, have their own unique serial number and all design elements have been based on <a href="how-Q-magnets-work.php">scientific research</a> and customer feedback. Q magnets are used by health professionals around the world for the treatment of pain and to restore function. </p>

<h3>The unique features of Q magnets are as follows:</h3>
<ol>
	<li>They are a Quadrapolar magnet with four alternating poles within the one magnetic body and have been designed this way to produce <a href="magnetic-field-gradients.php">steep magnetic field gradients</a>. The research shows that it is not the magnetic field strength that is the determining factor in alleviating pain, but the field gradient. </li>
	<li>They combine some of the strongest static magnet material available, neodymium rare earth with a 1.3 Tesla rating with the latest magnetising techniques to produce a compact but extremely strong therapeutic magnet that penetrates a stronger field gradient deeper into the body. </li>
	<li>The outer side has a flux shield attached which is made of high grade magnetic stainless steel which drives the field deeper into the body and further enhances the field gradient. Qmagnet Field LinesThis also insulates the outer side of the magnet so it is less likely to get stuck to steel items while they are being worn. <img src="images/Qmag-field-lines.jpg" class="imgRight imgPadLeft imgSizeMid" /></li>
	<li>The newest model has more curved edges so there is less chance of getting your fingers pinched if they clap together. </li>
	<li>The high quality sticker on the outside of the device displays the orientation arrow as well the medical device ARTG number as well as a unique serial number. Since every device has a unique serial number, we are able to implement our quality assurance program and fulfil our post-market surveillance obligations for medical devices. </li>
	<li>The magnets have extra strength plating to reduce the chance of scratching or breaking and most models come in either gold or silver to reduce the risk of skin allergies.</li>
</ol>

<p>Some competing products claim to sell unipolar magnets, however unipolar or monopole magnets do not exist. Every magnet that has a North or Positive pole, will also have a corresponding South or Negative pole. </p>
<p>For an example of unsubstantiated claims, this company sells electromagnetic protection products and state in <a href="http://www.item-bioenergy.com/infocenter/StrengthRatingsofTherapeuticMagnets.pdf" target="_blank">their sales literature</a> that the FDA recommend a safe limit for magnetic field strength of 50mT. If you actually look at the <a href="http://vm.cfsan.fda.gov/~frf/forum97/97J04.htm" target="_blank">FDA document</a> they reference, there are many glaring omissions. There was no noticeable effect with exposure to this magnetic field, but the most important was that the study was referring to a low frequency pulsed electromagnetic magnetic field and not a static magnetic field. We point this out as some customers enquire if Q magnets are safe. The World Health Organisation recently issues a report that we have on our website that confirms that <a href="faq.php#Anchor-Safe-1135">static magnetic fields under 2 Tesla are safe for humans</a>. </p>

				
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

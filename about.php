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
              <h1>About Q magnets</h1>
            </div>
            <div class="about_body_text_box">
              <div id="cse-results" style="display: none;"></div>
                <div class="body_left_text_area" id="static-content">
                  <p>Neuromagnetics Australia  Pty Ltd is a world leader in the research, design and manufacture of static  magnet medical devices that generate magnetic flux field gradients for the  treatment of acute and chronic pain, fracture healing and chronic dysfunction.</p>
                  <p>Our signature product, Q  magnets are patent pending and  designed based on medical research and extensive clinical testing and feedback.</p>
                  <p>Q is for Quadrapolar for  the exclusive  four alternating magnetic poles within the one magnetic  body. Each  device is listed with the Australian <a href="http://www.tga.gov.au/devices/devices.htm" target="_blank">Therapeutic Goods Administration</a> as a Class I Medical Device for the  temporary relief of pain ARTG 132324.</p>
                  <p>Work with the first  Quadrapolar magnets was pioneered by Dr Robert Holcomb, who was an Associate  Professor of Neurology at Vanderbilt University in 1989. Years of research were  conducted at the Vanderbilt University Medical Centre, Centre for  Neuromagnetics. For a summary of this work, see the 5 minute
                  <a href="magnetic-therapy-tv.php">Good Medicine video feature</a> on our website. </p>
                  <p>The next generation  Quadrapolar magnet or Q magnet was developed in 2007 by James &amp; Dianne  Hermans. 2009 saw
                        the development of the Hexapolar magnet (6 alternating poles) and 2010 the launch of the Octapolar  magnet (8 alternating poles) which increase the active areas of the magnet. Research and design is ongoing as new and improved features and  applications are developed to make Q magnets more user friendly and to enhance  their therapeutic effect. </p>
                  <p>Dianne
                    Hermans worked extensively with Dr Holcomb in the early 2000's before he left the project. Dianne is the principal physiotherapist of <a href="http://www.lifestyle100.com/site/about/Q-Magnet-Stories.html" target="_blank">Lifestyle
                      Therapies, a clinic that specialises in the treatment of complex and chronic pain.</a></p>
                  <p>Many scientific papers have been published by scientists including Associate Professor
                        of Neurology, Dr Michael McLean and are available on the <a href="magnetic-therapy-relevant-research.php" target="_blank">published research on magnetic therapy</a> page. A weaker device with four bipolar magnets arranged in a
                        Quadrapolar array, was sold  under the trade mark Magna Bloc from 1999 to 2006.</p>
                  <div class="innerpagenav">
                        <p align="left">Neuromagnetics  Australia Pty Ltd manufactures and distributes the Quadrapolar or Q magnet. </p>
                  </div>
                  <div class="contentWrapper">
                    <a id="who-we-are"></a><h2>Who We Are</h2>
                    <p class="content">
                      Who we are...
                    </p>
                  </div>
                  <div class="contentWrapper">
                      <a id="our-values"></a><h2>Our Values</h2>
                    <p class="content">
                      Our Values...
                    </p>
                  <div class="contentWrapper">
                  </div>
                      <a id="our-mission"></a><h2>Our Mission</h2>
                    <p class="content">
                      Our Values...
                    </p>
                  </div>
                    <table width="461">
                      <tr>
                        <td width="157"><img src="images/jim.jpg" alt="" height="201" width="157" border="0" /></td>
                        <td width="116"></td>
                        <td width="172"><a href="http://www.australianmade.com.au/company/comp1845.asp" target="_blank"><img src="images/Australianmadeowned.jpg" width="163" height="198" border="0" /></a></td>
                      </tr>
                      <tr>
                        <td><p style="margin-bottom: 0">James Hermans<br />
                            Managing Director</p></td>
                      </tr>
                    </table>
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

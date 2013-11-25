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

.newLinks { margin-bottom:30px; }
.newLinks li { }
.newLinks li a { color:#FFDD99; line-height:150%; }

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
              <h1> Magnetic Therapy Information on the Web</h1>
            </div>
            <div class="about_body_text_box">
				<div id="cse-results" style="display: none;"></div><div class="body_left_text_area customContentStyle" id="static-content">
				
<p>Since we see many articles on the web with regard to magnetic therapy, we decided to create a page to assist you with your own research. These articles are both positive and negative and are not necesarily specific to Q magnets. </p>
<ol class="newLinks">
	<li><a target="_blank" href="http://abcnews.go.com/Technology/PainManagement/story?id=4104480&page=1">abc News Jan 9, 2008 - Magnets Can Reduce Inflammation, at Least in Rats, New Research Shows</a></li>
	<li><a target="_blank" href="http://oscar.virginia.edu/x12114.xml">University of Virginia Jan 9, 2008 - Healing Value Of Magnets Demonstrated In Biomedical Engineering Study</a></li>
	<li><a target="_blank" href="http://nccam.nih.gov/health/magnet/magnetsforpain.htm">US National Centre for Complementary and Alternative Medicine article on Magnets for Pain - accessed May, 2009</a></li>
</ol>

<p>US National Centre for Complementary and Alternative Medicine article on Magnets for Pain - accessed May, 2009 Makes no reference to Dr Holcomb's work or magnetic field gradients. States thatstatic magnetic fields do not change; but when ions flow through a steep field gradient,the effect simulates a changing field.</p>
<ul class="newLinks" style="list-style:disc; margin-left:30px;">
	<li><a href="http://www.sciencedaily.com/releases/2007/08/070808092857.htm" target="_blank">Science Daily Aug 9, 2007 - The strongest magnet in the world at 26.8 Tesla</a></li>
	<li><a href="http://news.bbc.co.uk/1/hi/health/6683757.stm" target="_blank">BBC News May 24, 2007 - Magnets help regrow brain cells</a></li>
	<li><a href="http://www.virtualcancercentre.com/pda/news.asp?artid=9335" target="_blank">UCSF Children's Hospital March 17, 2007 - Using magnets to correct sunken chest;</a></li>
</ul>

<p> FDA approve magnets as safe for long term exposure.</p>
<ol class="newLinks">
<li><a href="http://www.timesonline.co.uk/tol/news/uk/article735146.ece" target="_blank">Times Online Feb 26, 2006 - NHS approve Magnetic Leg Wrap for doctor's prescription</a></li>
<li><a href="http://www.sciencedaily.com/releases/2004/12/041217104054.htm" target="_blank">Science Daily Dec 17, 2004 - Magnetic Bracelets Reduce The Pain Of Osteoarthritis, Study Finds</a></li>
<li><a href="http://www.sciencedaily.com/releases/1999/09/990909071842.htm" target="_blank">Science Daily Sep 9, 1999 - Another article criticising the effectiveness of magnetic therapy but makes no reference to magnetic field gradients but tries to compare some therapeutic magnets to fridge magnets which is just laughable.</a></li>
<li><a href="http://sound-ideas.info/Sceptics.htm#Healing_with_Magnets" target="_blank">A running discourse refuting a magnetic therapy skeptic - well worth a read.</a></li>
</ol>

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

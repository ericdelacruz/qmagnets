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
       <?php include("includes/banner.php");  ?>
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
              <h1>Magnetic Therapy Resources</h1>
            </div>
            <div class="about_body_text_box">
              <div class="res_body_left_text_area"><h2>Q magnet Prescription for trigeminal neuralgia:</h2><br>
              The following are links to articles and reports available in the public domain that relate to research and reports into magnetic therapy from credible agencies such as universities and government bodies.
              </div>
                <table class="tablelist2">
                    <thead>
                      <tr>
                      <td>Publication</td>
                      <td>Summary</td>
                      <td> Link</td>
                    </tr>
                  </thead>
                  <tr>
                    <td >Static Fields by WHO</td>
                    <td>A 369 page in depth report on static magnets
                      including field gradients</td>
                    <td><a href="downloads/Environmental-Health-Criteria-Static-Fields.pdf">Get PDF</a></td>
                  </tr>
                  <tr>
                    <td>The International Commission on
                      Non-Ionizing Radiation Protection
                      (2009) by WHO</td>
                    <td>WHO report on safe exposure to magnetic
                      fields. In summary, exposure below 2 Tesla or
                      20,000 Gauss was deemed to be safe for
                      humans</td>
                    <td><a href="downloads/ICNIRP-guidelines-on-limits-of-exposure-to-static-magnetic-fields-2009.pdf">Get PDF</a></td>
                  </tr>
                  <tr>
                    <td>National Center for Complementary
                      and Alternative Medicine (2005)
                      research report into magnetic therapy.</td>
                    <td>Questions and Answers About Using Magnets
                      To Treat Pain. This report reveals how little
                      they understand about therapeutic magnets
                      as they do not even mention magnetic field
                      gradients</td>
                    <td><a href="downloads/NCCAM-questions-and-answers-about-using-magnets-to-treat-pain.pdf">Get PDF</a></td>
                  </tr>
                  <tr>
                    <td>Health Effects of Exposure to EMF by
                      Scientific Committee on Emerging and
                      Newly Identified Health Risks</td>
                    <td>A 2009 report on health effects of both
                      electromagnetic and static magnetic fields.</td>
                    <td><a href="downloads/Health-effects-of-exposure-to-EMF.pdf">Get PDF</a></td>
                  </tr>
                  <tr>
                    <td>Historical Perspective of Magnetism;
                      From Thales to Lauterbur, or From the
                      Loadstone to MR maging: Magnetism
                      and Medicine.</td>
                    <td>From - Radiology 1991; 180:593-612.</td>
                    <td><a href="downloads/Radiology_1991_180_593-612.pdf">Get PDF</a></td>
                  </tr>
                  <tr>
                    <td>Magnetism in Medicine: A Handbook</td>
                    <td>PDF includes the first chapter on the History
                      of Magnetism</td>
                    <td><a href="downloads/The-History-of-Magnetism-in-Madicine.pdf">Get PDF</a></td>
                  </tr>
                  <tr>
                    <td>Many other full research papers and links to abstracts</td>
                    <td>Available on the Q magnet website</td>
                    <td><a href="magnetic-therapy-relevant-research.php">Go</a></td>
                  </tr>
                </table>
              
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

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
              <h1>Terms and Conditions</h1>
            </div>
            <div class="about_body_text_box">
				<div id="cse-results" style="display: none;"></div><div class="body_left_text_area customContentStyle" id="static-content">
				
				<p>Please read these Terms and Conditions carefully and completely, as your continued use of the qmagnets.com web site (the “Site”) confirms your unconditional acceptance of, and is subject to, the following terms and conditions.  If you do not accept these terms and conditions, do not use the site.  Neuromagnetics Australia Pty Ltd (the "Site Owner"), may in its sole discretion, revise these Terms and Conditions at any time; therefore, you should visit this page periodically to review these Terms and Conditions.  You shall be responsible for reviewing and becoming familiar with any such revisions.  Use of the Site by you following such any revision constitutes your acceptance of the terms and conditions of the Terms and Conditions as revised.</p>
				
				<h3>Personal Information:</h3>
				<p>The Site contains a Blog and the Site Owner encourages users to make a post regarding your experiences using Q magnets. You understand that you are not required to post any personal information. However, if you voluntarily choose to include personal information in your postings on the Site's Blog, you may do so. You understand and agree that the Site Owner in no way encourages contributors to disclose private information, including your e-mail addresses, on the Site's Blog.</p>
				<p>You understand and agree that the Site Owner and its directors, officers, employees and agents are not liable for the disclosure of any personal information which you voluntarily include in your posts. You recognise that you have no legitimate expectation of privacy in any information which you voluntarily disclose on Qmagnets.com/blog, and hereby waive any constitutional, statutory or common law right to privacy which you might otherwise claim in such information.</p>
				<p>You understand and agree that Site Owner may collect and utilise any personal information which you voluntarily provide, and may combine the personal information collected from you with information from others to provide a better user experience.</p>
					
				<h3>Acceptable User Conduct:</h3>
				<p><strong>Responsibility for Reviewing Content</strong> You are also responsible for the interpretation of the content that is posted on the Site. You must evaluate, and bear all risks associated with the use of any content, including any reliance on the accuracy, completeness, or usefulness of such Content.</p>
				<p>Responsibility for Posting Content All information, data, text, software, music, sound, photographs, graphics, video, messages, or any other materials whatsoever (collectively, "Content"), whether publicly posted or privately transmitted, is the sole responsibility of the person from whom such Content originated. This means that you, and not the Site Owner, are entirely responsible for all content that you upload, post, email or otherwise transmits via Qmagnets.com.</p>
				
				<h3> Your contributions to content on qmagnets.com should: </h3>
				<ol>
					<li>Be a true reflection of your experiences</li>
					<li>Increase the knowledge of other readers </li>
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

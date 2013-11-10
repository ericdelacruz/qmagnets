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
            <div class="body_heading_bg_big">
              <h1>Following are  TV shows investigating Dr Robert Holcomb's original        research while at Vanderbilt Medical University.</h1>
              
            </div>
            <div class="about_body_text_box">
            <h4 align="left">The videos below mention the name Magna Bloc which           was used to describe the first quadrapolar magnets used for pain. The trade          name Magna Bloc is no longer used, Q magnets are the next generation Quadrapolar          magnet that are smaller, more powerful,  with a <a href="magnetic-field-gradients.php">steeper field gradient</a> and greater therapeutic effect than the original Magna Bloc. </h4>
            <p align="left">&nbsp;</p>
            <h4 align="left"><br />
            </h4>
            <h3 align="left">Good Medicine: Channel 9, Australia, 20th October 1999</h3>
            <p>
              <iframe width="480" height="360" src="http://www.youtube.com/embed/IHbaGTIGA7w" frameborder="0" allowfullscreen></iframe>
            </p>
            <p>&nbsp;</p>
            <h3 align="left">Dateline: US, 10th May 1998</h3>
            <iframe width="480" height="360" src="http://www.youtube.com/embed/pMv8ry75aos" frameborder="0" allowfullscreen></iframe>
            <!-- main cell ends below  -->
            </td>
            <td width="50" background="../img/Right-Margin.gif"></td>
            </tr>
            <tr>
              <p>&nbsp;</p>
            <tr>
              <td width="50" background="../img/Left-Margin.gif"><p>&nbsp;</p>
                <h3 align="left">Healthcast, Channel 4 News. Nashville: 1998</h3>
                <h3>
            <iframe width="480" height="360" src="http://www.youtube.com/embed/CvmsKzwJ4D0" frameborder="0" allowfullscreen></iframe>
                </h3>
                <p>&nbsp;</p>
                <h3 align="left">This short video was produced by the Vanderbilt Medical University School Of Nursing:</h3>
                <h3>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="437" height="370" id="viddler_e632cd74">
        <param name="movie" value="http://www.viddler.com/player/e632cd74/" />
        <param name="allowScriptAccess" value="always" />
        <param name="allowFullScreen" value="true" />
        <embed src="http://www.viddler.com/player/e632cd74/" width="437" height="370" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" name="viddler_e632cd74"></embed>
      </object>
    </h3>
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

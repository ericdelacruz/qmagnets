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
              <h1> <a href="buy.php" style="color:#6d94cd; font-weight:bold; font-size:18px; text-decoration:none">QFix6 Plasters for 6mm Q magnet adhesive</a></h1>
              <br>
              
            </div>
           
            <div class="about_body_text_box" align="justify">
           
            <img src="images/Q6-1.5X6hr.jpg" width="400" height="400"> 
            <br>       
       	                 
 
<br>



 Single sided round plaster

- 20mm diameter

- 12 plasters per sheet

- For use with Q6-1.5

- Plaster only

- Magnets sold seperately


<br><br>
See video for application demonstration...

	
    <br><br>
    
   <iframe width="400" height="315" src="http://www.youtube.com/embed/HNWmfrbaa4k?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>

  
            
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

<?php include("admin/includes/include.php");  ?>

<!DOCTYPE HTML>
<html>
<head>
<?php include("includes/common_script.php"); ?>
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
          <nav>
            <?php include("includes/menu.php");  ?>
          </nav>
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
              <h1>Subscribe to Q magnets News</h1>
            </div>
            <div class="sub_body_text_box">
              <div id="cse-results" style="display: none;"></div><div class="body_left_text_area" id="static-content">The people behind the company behind Q magnets are busy working away researching and developing new and improved ways to use both static magnets and/or electrotherapy agents to develop better, safer and more effective methods to treat both acute and chronic pain.<br><br><br>
                Enter your details here and we will keep you informed of what's going here at Q magnets.
                <div class="subscribe_form">
                <div class="sub_field_con">
                  <div class="sub_feild_box">Enter Your First Name:</div>
                  <input type="text" name="textfield2" style="width:216px; height:18px" class="sub_textfield" />
                </div>
                <div class="sub_field_con">
                  <div class="sub_feild_box">Enter your Email:</div>
                  <input type="text" name="textfield2" style="width:216px; height:18px" class="sub_textfield" />
                </div>
                <div class="sub_send_button"><a href="#"><img src="images/sub_send_button.png" alt="" width="207" height="28" border="0"></a></div>
                </div>
              </div>
             </div>
            <div class="left_bottom_img"><img src="images/body_left_bottom_img.jpg" alt="" border="0"></div>
            </div>
          </div>
          
          <div class="body_right_area">
          <?php include("includes/yourpain.php");  ?>
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

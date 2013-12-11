<?php include("admin/includes/include.php");  ?>

<!DOCTYPE HTML>
<html>
<head>
<?php include("includes/common_script.php"); ?>
<?php
$meta = 'meta/meta-'.$id.'.php';
if(file_exists($meta)) { include $meta;
} else{
  include 'meta/meta-home.php';
  echo '<title>Subscribe to Q magnets News</title>';
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
<form accept-charset="UTF-8" action="https://pj139.infusionsoft.com/app/form/process/2efaf27fbf8d88652634aca2c0bf3895" class="infusion-form" method="POST" name="Sign up for newsletter">
<input type="hidden" value="" name="screenResolution" id="screenResolution" />
<input type="hidden" value="" name="pluginList" id="pluginList" />
<input type="hidden" value="" name="javaEnabled" id="javaEnabled" />
<input name="inf_form_xid" type="hidden" value="2efaf27fbf8d88652634aca2c0bf3895" />
<input name="inf_form_name" type="hidden" value="Sign up for newsletter" />
<input name="infusionsoft_version" type="hidden" value="1.29.8.42" />
<input type="hidden" name="inf-3JwkwyvKbIhPmmg6" class="inf-d2e3e2b6f6946880265856166a29bbf6" />
<p><label for="inf_field_FirstName">First Name *</label><br /><input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" value="" placeholder="Name"/></p>
<p><label for="inf_field_Email">Email *</label><br /><input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" value="" placeholder="Email" /></p>
<img alt="captcha" border="0px" name="captcha" onclick="reloadJcaptcha();" src="https://pj139.infusionsoft.com/Jcaptcha/img.jsp" title="If you can't read the image, click it to get another one." width="150" />
<script type="text/javascript">function reloadJcaptcha() {var now = new Date();if (document.images) {document.images.captcha.src = 'https://pj139.infusionsoft.com/Jcaptcha/img.jsp?reload=' + now}}</script>
<p><label for="captcha.typed">Enter the above code:</label><br />
<input class="infusion-field-input-container" id="captcha.typed" name="captcha.typed" type="text" /></p>
<p><input type="image" src="images/signup_button.png" /></p>
</form>

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

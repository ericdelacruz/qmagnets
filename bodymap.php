<?php include("admin/includes/include.php");  ?>

<!DOCTYPE HTML>

<html>
<head>
<meta name="description" content="Treatment protocols for Q magnets. Click on the body map to find detailed descriptions of applications for Q magnet treatment of pain." />
<meta name="keywords" content="Treatment protocols, how to use magnets, magnetic therapy, magnets for pain, magnetic pain relief, magnetic therapy for pain, health magnets, therapeutic magnets" />
<title>Q magnet Treatment Protocols</title>
<?php include("includes/common_script.php"); ?>
<style>
a {
	color: #CCB363;
	font-size: 12px;
	text-decoration: none
}
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
      <h1><font style="font-size:24px"> Where is your pain?</font></h1>
    </div>
    <div class="about_body_text_box" align="center" > Click on the<a href="bodymap.php#bodymap" style="font-size: 14px; color:#CCB363"> body map</a> to locate the area of your pain or if you have the following conditions to learn how to use your Q magnets: <br>
      <br>
      <a id="bodymap" name="bodymap"></a>
      <img src="images/bodyMap.gif" width="450" height="500" border="0" usemap="#map">
      <map name="map">
        <area shape="rect" coords="123,458,157,476" href="footpain.php">
        <area shape="rect" coords="232,436,271,458" href="anklepain.php">
        <area shape="rect" coords="165,335,194,353" href="kneepain.php">
        <area shape="rect" coords="292,289,315,307" href="legpain.php">
        <area shape="rect" coords="106,215,133,233" href="hippain.php">
        <area shape="rect" coords="301,178,356,194" href="lowerback.php">
        <area shape="rect" coords="94,178,147,200" href="abdominalpain.php">
        <area shape="rect" coords="185,153,220,169" href="elbow.php">
        <area shape="rect" coords="302,95,360,119" href="upperback.php">
        <area shape="rect" coords="353,59,426,82" href="neckshoulder.php">
        <area shape="rect" coords="214,86,277,103" href="shoulderpain.php">
        <area shape="rect" coords="62,52,107,75" href="jawpain.php">
        <area shape="rect" coords="138,50,170,71" href="toothpain.php">
        <area shape="rect" coords="13,210,38,227" href="wrist.php">
      </map>
      <br>
      <br>
      See <a href="conditions.php" style="font-size: 14px; color:#CCB363; text-decoration:none">Your Conditions </a>for Q magnet prescriptions for certain conditions. <br>
      <br>
      <br>
      <a href="faq.php" style="font-size: 14px; color:#CCB363; text-decoration:none" >Please see tips for looking after skin when applying Qmagnets - FAQ.</a> </div>
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

<?php include("admin/includes/include.php"); 

$selectedCurrency = (isset($_GET['site_currency']) ? $_GET['site_currency'] : $_SESSION['site_currency']);
$fileLang = "includes/languages/lang.".$selectedCurrency.".php";
require($fileLang); 
?>



<!DOCTYPE HTML>
<html>
<head>
<?php include("includes/common_script.php"); ?>
<?php
if(file_exists("includes/metatags/meta-".basename($_SERVER['PHP_SELF']))) {
	include("includes/metatags/meta-".basename($_SERVER['PHP_SELF'])); 
} else {
	// ONCE META TAG NOT FOUND USE THE DEFAULT TITLE TAG
	
$str = $selPro->name;

if(strpos($str,'<a href="products.php#') === false) { $prodTitle=$str; }
else {
$new_str = explode('<a href="products.php#',$str);
$nstr = str_replace("</a>","",$new_str[1]);
$postStr = strpos($nstr, '">');
$postStrE = $postStr + strlen('">');
$prodTitle=substr_replace($nstr, "", 0,$postStrE);
}
	if($selPro->empty==false) { echo '<title>Buy Q magnets - '.$prodTitle.' Model</title>'; }
	else { header("Location: 404.php"); }
}
?>
<style>
.clr { clear:both }
.customContentStyle { }
.customContentStyle h3 { margin-bottom:5px; }
.customContentStyle p { line-height:150%; margin-bottom:16px; }
.customContentStyle ol { padding-left:30px; }
.customContentStyle ol li { margin-bottom:5px; }

.mainproDesc { overflow:hidden; margin-bottom:20px; }
.clr { width:890px }
	.proImgSide { float:left; width:300px; }
	.containsSide { float:right; width:250px; }
	.containsSide ul { list-style:disc; }
	.containsSide ul li { padding-bottom:4px; }
	.containsSide .priceTag { padding:10px 0px 5px 0px }
	.containsSide .priceTag span { font-weight:bold; font-size:16px; color:#cc9900; }
	
.pro_contents { border:1px solid #333; padding:10px 0px; border-width:1px 0px; overflow:hidden; }
.pro_contents h3 { border-bottom:1px solid #333; padding-bottom:8px; }
.imgLeft { margin-right:10px !important; }

</style>
</head>
<body>
<div id="main_area">
  <div class="main"> 
    <!--===================start header part===================-->
    <header>
      <div class="header_area">
        <?php include("includes/currency.php"); ?>
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
          <div class="body_left_area" style="width:100%; padding-top:10px">
		  <?php if($selPro->empty==false) { ?>
          <div class="body_text_area" style="width:100%;">
            <div class="body_heading_bg" style="width:100%; background:url('<?=SITE?>images/body_left_heading_bg_pro.jpg')">
              <h1><a href="products.php#Q13Blanket">Q13Blanket</a></h1>
            </div>
            <div class="about_body_text_box" style="width:100%; padding:0px;">
				<div id="cse-results" style="display: none;"></div><div style="padding:15px 15px 15px 15px; width:auto" class="body_left_text_area customContentStyle" id="static-content">

					<div class="mainproDesc">
						<div class="proImgSide">
							<img src="images/Q13Blanket.jpg" width="600" />
						</div>
						
						<div class="containsSide">
							<ul>
								<li>2 X <a href="products.php#QF28-6">QF28-6</a></li>
								<li>2 X <a href="products.php#QF28-3">QF28-3</a></li>
								<li>Bonus <a href="products.php#QFix28">QFix28</a> X 10 </li>
								<li>Bonus <a href="products.php#Q6-1.5">Q6-1.5</a> X 6 plus <a href="products.php#QFix6">QFix6</a> plaster </li>
								<li>Bonus <a href="products.php#QBag">Q Bag</a></li>
							</ul>
							<div class="priceTag">Price: &nbsp; <span><?=$symbol?> 100.00</span></div>
							<a href="#"><img src="images/cart.jpg" alt="Add to Cart" /></a>
						</div>
					</div>
		
					<div class="pro_contents">
<h3>How to Use</h3>
<p><img src="images/Dosimetry-Quadrapolar.jpg" width="300" class="imgLeft" />Dosimetry on the QF28-6 shows the alternating poles. The red segments represent recordings over the positive poles and blue the negative.</p>
<p>The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the four clear lines represent the biologically active areas of the magnet.</p>
<p>See the explanation of <a href="magnetic-field-gradients.php">magnetic field gradients</a> and <a href="how-Q-magnets-work.php">how Q magnets work</a> pages for a more detailed explanation. </p>
<div class="clr"></div><br />

<p><img src="images/shoulder-pain.jpg" width="300" class="imgLeft" /> <br /><br />While the HF28-6 has more active areas within the magnet (six), it has less of a penetration. Hence it may not be as effective on the areas where a deeper penetration is required such as over the lumbar spine (lower back). It is likely to be more effective over the smaller joints such as the <a href="shoulderpain.php">shoulder</a>, <a href="kneepain.php">knee</a>, <a href="elbowpain.php">elbow</a>, <a href="anklepain.php">ankle</a> and over the <a href="neckshoulder.php">neck</a>.</p>
<div class="clr"></div><br />

<div style="text-align:center;padding-top:10px">
<p>Applying Q magnets with QFix28 double sided adhesive<br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/4AlRljSMCC0" frameborder="0" allowfullscreen></iframe></p>
</div>

<p><img src="images/neck-pain-QF28-3-3-tape.jpg" width="300" class="imgLeft "/><br /><br /><br /><br />Neck placement adhesive using Hypafix, also called Fixomull or Cover-Roll.  </p>
<p>All registered trademarks of BSN Medical. </p>
					</div>
				
				</div>
             </div>
            <div class="left_bottom_img"><img src="images/body_left_bottom_img.jpg" alt="" border="0" width="920"></div>
            </div>
			<?php } ?>
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

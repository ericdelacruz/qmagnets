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
.customContentStyle ul { padding-left:20px; list-style:disc; margin-bottom:10px; }
.customContentStyle ul li { }
.customContentStyle ul li a { font-weight:bold; font-size:14px; display:block; padding-bottom:4px; }
.customContentStyle ul li li a { font-size:12px; }
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
              <h1>Find a trained health professional</h1>
            </div>
            <div class="about_body_text_box">
				<div id="cse-results" style="display: none;"></div><div class="body_left_text_area customContentStyle" id="static-content">
<h3>Find a trained health professional who can provide advice and treatment to compliment and enhance the effect of your Q magnets:</h3>
<p>Click on the country and state to find a therapist. Q magnets a relatively new treatment protocol and it will gradually expand across the globe. If you are a treating therapist and would like to become accredited, please <a href="mailto:info@qmagnets.com">contact us</a> to learn more about our live and online practitioner education sessions. </p>

<ul>
	<li>
		<a href="#Australia">Australia</a>	
		<ul>	
			<li><a href="#ACT">Canberra</a></li>
			<li><a href="#NSW">New South Whales</a></li>
			<li><a href="#NT">Northern Territory</a></li>
			<li><a href="#QLD">Queensland</a></li>
			<li><a href="#SA">South Australia</a></li>
			<li><a href="#TAS">Tasmania</a></li>
			<li><a href="#VIC">Victoria</a></li>
			<li><a href="#WA">Western Australia</a></li>
		</ul>
	</li>
	<li>
		<a href="#NewZealand">New Zealand</a>	
		<ul>	
			<li><a href="#NI">North Island</a></li>
			<li><a href="#SI">South Island</a></li>
		</ul>
	</li>
</ul>	


<h2><a id="Australia"></a>Australia</h2>	<br />
<div>
	<h3><a id="ACT"></a>Canberra</h3>
	<br />
	
	<h3><a id="NSW"></a>New South Whales</h3>
	<br />
	
	<p><a href="http://www.takecontrol.com.au/index.htm" target="_blank">Take Control Active Rehab</a><br />
	Unit 4, 91 Mulga Road<br />
	Oatley, NSW 2223<br />
	Ph: 02 9570 7800</p>
	<br />
	
	<h3><a id="NT"></a>Northern Territory</h3>
	<br />
	
	<h3><a id="QLD"></a>Queensland</h3>
	<p>Bribie Island Physiotherapy<br />
	213 First Ave<br />
	Bongaree, QLD 4507<br />
	Ph: 07 3408 0000</p>
	<p>Imogen Cusack (Physiotherapist)<br />
	Oxley, QLD 4075<br />
	Ph: 0410 584 229</p>
	<p><a href="http://www.lifestyle100.com/site/about/QMagnet_Stories.html" target="_blank">Lifestyle Therapies (Physiotherapists)</a><br />
	209 Manly Rd<br />
	Manly West, QLD 4179<br />
	Ph: 07 3396 9111</p>
	<p>Nambour Chiropractic Centre<br />
	38 Price Street<br />
	Nambour, QLD 4560<br />
	Ph: 07 5441 4181</p>
	<p><a href="http://www.qsmc.net.au/" target="_blank">Queensland Sports Medicine Centre</a><br />
	Ground Level Gabba Cricket Ground<br />
	Cnr Stanley & Main Street<br />
	Woolloongabba, QLD 4102<br />
	Ph: 07 3891 2000</p>
	<p><a href="http://www.revivestudio.com.au/" target="_blank">Revive Studio for Pilates and Physiotherapy</a><br />
	337 Waterworks Road<br />
	Ashgrove, QLD 4060<br />
	Ph: 07 3366 0500</p>
	<p><a href="http://www.uqsportsandrehab.com.au/" target="_blank">UQ Sports & Rehab (Physiotherapists)</a><br />
	Sir William Macgregor Drv<br />
	St Lucia, QLD 4067<br />
	Ph: 07 3871 0633</p>
	<br />
	
	
	<h3><a id="SA"></a>South Australia</h3>
	<p><a href="http://www.massageplus.com.au/">Massage Plus</a><br />
	3rd Floor, 47 South Terrace<br />
	Adelaide, SA 5000<br />
	Ph: 08 8231 4933</p>
	<br />
	
	<h3><a id="TAS"></a>Tasmania</h3>
	<br />
	
	<h3><a id="VIC"></a>Victoria</h3>
	<p><a href="http://www.clinicalpilates.com/" target="_blank">DMA Clinical Pilates & Physiotherapy</a><br />
	1 Yarra Street<br />
	South Yarra, VIC 3141<br />
	03 9827 4511</p>
	<p><a href="http://www.psmgroup.com.au/" target="_blank">Peninsula Sports Medicine Group</a><br />
	83-85 Cranbourne Rd<br />
	Langwarrin, VIC 3910<br />
	Ph: 03 9789 1233</p>
	
	<h3><a id="WA"></a>Western Australia</h3>
</div>
			

<h2><a id="NewZealand"></a>New Zealand</h2>	<br />
<div>
	<h3><a id="NI"></a>North Island</h3>
	<p>Edwards Physiotherapy<br />
	CLM Health & Fitness<br />
	45C Mt Wellington Hwy<br />
	Mt Wellington, Auckland<br />
	Ph: 09 570 4525<br />
	e: doug@edwardsphysio.co.nz </p>
	<p><a href="http://www.bodyzone.net.nz/" target="_blank">Bodyzone Physiotherapy</a><br />
	100 Whitford Rd<br />
	Howick, Auckland<br />
	Ph: 09 535-0006 </p>
	<p><a href="http://www.painrelief.co.nz/" target="_blank">Pain Management & Rehabilitation Services</a><br />
	Unit 7, Northcote Office Park, 94 Grey St<br />
	Palmerstone North 4410<br />
	Ph: 06 353 8722</p>
	<br />
	
	<h3><a id="SI"></a>South Island </h3>
</div>			
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

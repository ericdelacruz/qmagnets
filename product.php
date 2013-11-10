<?php include("admin/includes/include.php"); 

$selectedCurrency = (isset($_GET['site_currency']) ? $_GET['site_currency'] : $_SESSION['site_currency']);
$fileLang = "includes/languages/lang.".$selectedCurrency.".php";
require($fileLang); 

$listPro['QBPLBP'] = (object) array(
								'name'=>'Q Bonus Package - <a href="products.php#QBP">Lower Back Pain</a>',
								'image'=>'QBPLBPhr.jpg',
								'price'=>$QBPLBP['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=198989bbd2a44b9b93d29d1b42d51533',
								'cartlink'=>$QBPLBP['link'],
								'contains'=>array(
												'2 X <a href="products.php#QF28-6">QF28-6</a>',
												'2 X <a href="products.php#QF28-3">QF28-3</a>',
												'Bonus <a href="products.php#QFix28">QFix28</a> X 10 ',
												'Bonus <a href="products.php#Q6-1.5">Q6-1.5</a> X 6 plus <a href="products.php#QFix6">QFix6</a> plaster ',
												'Bonus <a href="products.php#QBag">Q Bag</a>',
												'Free shipping '
												),
								'contents'=>'
<h3>How to Use</h3>
<div style="text-align:center;padding-top:10px">
<p>Video showing basic placement for lower back pain.<br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/5ikYTdJTEJQ" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="lowerback.php">lower back pain</a> placement for more information.</p>
</div>
<div class="clr"></div>
<p><img src="images/Lower-Back-QF28-6-3.jpg" width="260" class="imgLeft" /> <br /><br /><br /><br /><br /><br /><br /><br /><br />QF28-6 or QF28-3 Q magnets can be affixed to the skin with the double sided adhesive, QFix28 or with sports tape over the top.</p>
<p>They can also be sewn into back braces once the best placements have been determined. </p>
<div class="clr"></div>

<div style="text-align:center;padding-top:10px">
<p>Applying Q magnets with QFix28 double sided adhesive<br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/4AlRljSMCC0" frameborder="0" allowfullscreen></iframe></p>
</div>

<p><img src="images/Lower-Back-QF28-6-3-tape.jpg" width="260" class="imgLeft "/><br /><br /><br /><br /><br /><br /><br />Lower Back Pain placement adhesive using Hypafix, also called Fixomull or Cover-Roll. </p>
<p>All registered trademarks of BSN Medical. </p>
								','empty'=>false);
								

$listPro['QBPCLBP'] = (object) array(
								'name'=>'Q Bonus Package - <a href="products.php#QBPCLBP">Complex Lower Back Pain </a>',
								'image'=>'QBPCLBPhr.jpg',
								'price'=>$QBPCLBP['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=198989bbd2a44b9b93d29d1b42d51533',
								'cartlink'=>$QBPCLBP['link'],
								'contains'=>array(
												'2 X <a href="products.php#QF28-6">QF28-6</a>',
												'2 X <a href="products.php#QF28-3">QF28-3</a>',
												'Bonus <a href="products.php#QFix28">QFix28</a> X 10 ',
												'Bonus <a href="products.php#Q6-1.5">Q6-1.5</a> X 6 plus <a href="products.php#QFix6">QFix6</a> plaster ',
												'Bonus <a href="products.php#QBag">Q Bag</a>',
												'Free shipping '
												),
								'contents'=>'
<h3>How to Use</h3>
<div style="text-align:center;padding-top:10px">
<p>Video showing basic placement for lower back pain.<br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/5ikYTdJTEJQ" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="lowerback.php">lower back pain</a> placement for more information.</p>
</div>
<div class="clr"></div>
<p><img src="images/Lower-Back-QF28-6-3.jpg" width="260" class="imgLeft" /> <br /><br /><br /><br /><br /><br /><br /><br /><br />QF28-6 or QF28-3 Q magnets can be affixed to the skin with the double sided adhesive, QFix28 or with sports tape over the top.</p>
<p>They can also be sewn into back braces once the best placements have been determined. </p>
<div class="clr"></div>

<div style="text-align:center;padding-top:10px">
<p>Applying Q magnets with QFix28 double sided adhesive<br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/4AlRljSMCC0" frameborder="0" allowfullscreen></iframe></p>
</div>

<p><img src="images/Lower-Back-QF28-6-3-tape.jpg" width="260" class="imgLeft "/><br /><br /><br /><br /><br /><br /><br />Lower Back Pain placement adhesive using Hypafix, also called Fixomull or Cover-Roll. </p>
<p>All registered trademarks of BSN Medical. </p>
								','empty'=>false);
								
$listPro['QBPGU'] = (object) array(
								'name'=>'Q Bonus Package - <a href="products.php#QBPGU">General Use</a>',
								'image'=>'QBPLBPhr.jpg',
								'price'=>$QBPGU['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=f86ce86bb6724677a5d46d79d36c8c03',
								'cartlink'=>$QBPGU['link'],
								'contains'=>array(
												'2 X <a href="products.php#QF28-3">QF28-3</a>',
												'2 X <a href="products.php#QF20-3">QF20-3</a>',
												'Bonus <a href="products.php#QFix28">QFix28</a> X 10 ',
												'Bonus <a href="products.php#Q6-1.5">Q6-1.5</a> X 6 plus <a href="products.php#QFix6">QFix6</a> plaster ',
												'Bonus <a href="products.php#QBag">Q Bag</a>',
												'Free shipping '
												),
								'contents'=>'
<h3>How to Use</h3><br />
<p><img src="images/shoulder-pain.jpg" class="imgLeft" alt="shoulder pain" /> QF28-3 ans QF20-3 used for shoulder pain</p>
<div class="clr"></div><br />
<p><img src="images/ankle-pain3.jpg" alt="ankle pain" /> </p>
<div class="clr"></div>
<p><img src="images/ankle-pain-tape.jpg" class="imgLeft"  alt="ankle pain tape" /> QF20-3 Q magnets can be affixed to the skin with the double sided adhesive or with sports tape over the top.</p>
<div class="clr"></div>

<div style="text-align:center;padding-top:10px">
<p>Applying Q magnets with QFix28 double sided adhesive<br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/4AlRljSMCC0" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="lowerback.php">lower back pain</a> placement for more information.</p>
</div>

<div class="clr"></div>
<p><img src="images/Lower-Back-QF28-6-3-tape.jpg" width="260" class="imgLeft "/><br /><br /><br /><br /><br /><br /><br />Lower Back Pain placement adhesive using Hypafix, also called Fixomull or Cover-Roll. </p>
<p>All registered trademarks of BSN Medical. </p>
								','empty'=>false);
								
$listPro['QBPAA'] = (object) array(
								'name'=>'Q Bonus Package - <a href="products.php#QBPAA">Active Athlete</a>',
								'image'=>'QBPLBPhr.jpg',
								'price'=>$QBPAA['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=f86ce86bb6724677a5d46d79d36c8c03',
								'cartlink'=>$QBPAA['link'],
								'contains'=>array(
												'1 X <a href="products.php#OF50-3">OF50-3</a>',
												'2 X <a href="products.php#QF28-6">QF28-6</a> (not shown)',
												'2 X <a href="products.php#QF28-3">QF28-3</a>',
												'2 X <a href="products.php#QF20-3">QF20-3</a>',
												'3 X <a href="products.php#QF10-2">QF10-2</a>',
												'Bonus <a href="products.php#QFix28">QFix28</a> X 10',
												'Bonus <a href="products.php#Q6-1.5">Q6-1.5 X 6</a> plus QFix6 plaster',
												'Bonus <a href="products.phpproducts.php#QBag">Q Bag</a>',
												'<a href="products.php#TPL">Trigger Point Locator</a> (recommended but not included)',
												'Free shipping '
												),
								'contents'=>'
<h3>How to Use</h3><br />
<p><img src="images/shoulder-pain.jpg" class="imgLeft" alt="shoulder pain" /> QF28-3 ans QF20-3 used for shoulder pain</p>
<div class="clr"></div><br />
<p><img src="images/ankle-pain3.jpg" alt="ankle pain" /> </p>
<div class="clr"></div>
<p><img src="images/ankle-pain-tape.jpg" class="imgLeft"  alt="ankle pain tape" /> QF20-3 Q magnets can be affixed to the skin with the double sided adhesive or with sports tape over the top.</p>
<div class="clr"></div>

<div style="text-align:center;padding-top:10px">
<p>Applying Q magnets with QFix28 double sided adhesive<br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/4AlRljSMCC0" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="lowerback.php">lower back pain</a> placement for more information.</p>
</div>

<div class="clr"></div>
<p><img src="images/Lower-Back-QF28-6-3-tape.jpg" width="260" class="imgLeft "/><br /><br /><br /><br /><br /><br /><br />Lower Back Pain placement adhesive using Hypafix, also called Fixomull or Cover-Roll. </p>
<p>All registered trademarks of BSN Medical. </p>
								','empty'=>false);
								
$listPro['QF28-6'] = (object) array(
								'name'=>'<a href="products.php#QF28-6">QF28-6</a>',
								'image'=>'QF28-6hr.jpg',
								'price'=>$QF286['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=91c78856b40d47b4a71d3c2270bf1dbb',
								'cartlink'=>$QF286['link'],
								'contains'=>array(
												'45 MGOe (N45) Neodymium Rare Earth',
												'Quadrapolar',
												'Penetration = 50mm or 2"',
												'Width = 28mm or 1.12"',
												'Thickness = 6mm or 0.25"',
												'<a href="pull-force.php">Pull Force</a> = 262N, 26.7kgf, 59lbf',
												'<a href="flux-plate.php">Flux Plate</a> attached',
												'Plastic casing'
												),
								'contents'=>'
<h3>How to Use</h3>
<p><img src="images/Dosimetry-Quadrapolar.jpg" width="300" class="imgLeft" />Dosimetry on the QF28-6 shows the alternating poles. The red segments represent recordings over the positive poles and blue the negative.</p>
<p>The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the four clear lines represent the biologically active areas of the magnet.</p>
<p>See the explanation of <a href="magnetic-field-gradients.php">magnetic field gradients</a> and <a href="how-Q-magnets-work.php">how Q magnets work</a> pages for a more detailed explanation. </p>
<div style="clear:both"></div>
<div style="text-align:center;padding-top:10px">
<p>Video showing basic placement for lower back pain.<br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/5ikYTdJTEJQ" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="lowerback.php">lower back pain</a> placement for more information.</p>
</div>

<p><img src="images/Lower-Back-QF28-6-3.jpg" width="260" class="imgLeft" /> The QF28-6 device produces a very focused and deep penetrating magnetic field gradient and hence is best suited for use on the lower back, upper back and larger joints such as hip, shoulder and knee.</p>
<p>It is the thickest of all the Q magnet models which should be taken into account when considering comfortability. Small framed individuals may be more comfortable wearing the <a href="products.php#QF28-3">QF28-3</a> model which is much slimmer.</p>
<p>QF28-6 or QF28-3 Q magnets can be affixed to the skin with the double sided adhesive, QFix28 or with sports tape over the top.</p>
<p>They can also be sewn into back braces once the best placements have been determined. </p>
<div class="clr"></div>

<div style="text-align:center;padding-top:10px">
<p>Applying Q magnets with QFix28 double sided adhesive<br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/4AlRljSMCC0" frameborder="0" allowfullscreen></iframe></p>
</div>

<p><img src="images/Lower-Back-QF28-6-3-tape.jpg" width="260" class="imgLeft "/>Lower Back Pain placement adhesive using Hypafix, also called Fixomull or Cover-Roll. </p>
<p>All registered trademarks of BSN Medical. </p>
								','empty'=>false);
								
$listPro['QF28-3'] = (object) array(
								'name'=>'<a href="products.php#QF28-3">QF28-3</a>',
								'image'=>'QF28-3hr.jpg',
								'price'=>$QF283['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=dd1766d1094249ffbf2f65649ce15c16',
								'cartlink'=>$QF283['link'],
								'contains'=>array(
												'45 MGOe (N45) Neodymium Rare Earth',
												'Quadrapolar',
												'Penetration = 48mm or 1.92"',
												'Width = 28mm or 1.12"',
												'Thickness = 3mm or 0.12"',
												'<a href="pull-force.php">Pull Force</a> = 206N, 21 kgf, 46lbf',
												'<a href="flux-plate.php">Flux Plate</a> attached',
												'Plastic casing'
												),
								'contents'=>'
<h3>How to Use</h3>
<p><img src="images/Dosimetry-Quadrapolar.jpg" width="300" class="imgLeft" />Dosimetry on the QF28-6 shows the alternating poles. The red segments represent recordings over the positive poles and blue the negative.</p>
<p>The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the four clear lines represent the biologically active areas of the magnet.</p>
<p>See the explanation of <a href="magnetic-field-gradients.php">magnetic field gradients</a> and <a href="how-Q-magnets-work.php">how Q magnets work</a> pages for a more detailed explanation. </p>
<div style="clear:both"></div>
<div style="text-align:center;padding-top:10px">
<p>Video showing basic placement for lower back pain.<br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/5ikYTdJTEJQ" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="lowerback.php">lower back pain</a> placement for more information.</p>
</div>

<p><img src="images/Lower-Back-QF28-6-3.jpg" width="260" class="imgLeft" /> The QF28-3 device is slimmer than the <a href="products.php#QF28-6">QF28-6</a> device and may be more comfortable to wear, especially for lean individuals with a small frame. The QF28-3 device is best suited for use on the lower back, upper back and larger joints such as hip, shoulder and knee.</p>
<p>QF28-6 or QF28-3 Q magnets can be affixed to the skin with the double sided adhesive, QFix28 or with sports tape over the top. </p>
<p>They can also be sewn into back braces once the best placements have been determined. </p>
<div class="clr"></div><br />

<p><img src="images/shoulder-pain.jpg" width="260" class="imgLeft" /> <br /><br />Use of QF28-3 over the <a href="shoulderpain.php">shoulder</a>. </p>
<div class="clr"></div><br />

<div style="text-align:center;padding-top:10px">
<p>Applying Q magnets with QFix28 double sided adhesive<br /?
<iframe width="420" height="315" src="http://www.youtube.com/embed/4AlRljSMCC0" frameborder="0" allowfullscreen></iframe></p>
</div>

<p><img src="images/Lower-Back-QF28-6-3-tape.jpg" width="260" class="imgLeft "/><br /><br /><br /><br />Lower Back Pain placement adhesive using Hypafix, also called Fixomull or Cover-Roll. </p>
<p>All registered trademarks of BSN Medical. </p>
								','empty'=>false);
								
$listPro['HF28-6'] = (object) array(
								'name'=>'<a href="products.php#HF28-6">HF28-6</a> (Formerly ProH)',
								'image'=>'HF28-6hr.jpg',
								'price'=>$HF286['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=dd1766d1094249ffbf2f65649ce15c16',
								'cartlink'=>$HF286['link'],
								'contains'=>array(
												'45 MGOe (N45) Neodymium Rare Earth',
												'Hexapolar',
												'Penetration = 25mm or 1.0"',
												'Magnet Width = 28mm or 1.12"',
												'Magnet Thickness = 6mm or 0.25"',
												'<a href="pull-force.php">Pull Force</a> = pending',
												'<a href="flux-plate.php">Flux Plate</a> attached',
												'Plastic casing'
												),
								'contents'=>'
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
								','empty'=>false);
$listPro['QF20-3'] = (object) array(
								'name'=>'<a href="products.php#QF20-3">QF20-3</a>',
								'image'=>'QF20-3hr.jpg',
								'price'=>$QF203['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=447c7b68932b4e2b952973ac561c91a2',
								'cartlink'=>$QF203['link'],
								'contains'=>array(
												'Quadrapolar',
												'Penetration = 31mm or 1.24"',
												'Width = 20mm or 0.8"',
												'Thickness = 3mm or 0.12"',
												'<a href="pull-force.php">Pull Force</a> = ',
												'<a href="flux-plate.php">Flux Plate</a> attached',
												'Plastic casing'
												),
								'contents'=>'
<h3>How to Use</h3>
<p><img src="images/Dosimetry-Quadrapolar.jpg" width="300" class="imgLeft" />Dosimetry on the QF28-6 shows the alternating poles. The red segments represent recordings over the positive poles and blue the negative.</p>
<p>The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the four clear lines represent the biologically active areas of the magnet.</p>
<p>See the explanation of <a href="magnetic-field-gradients.php">magnetic field gradients</a> and <a href="how-Q-magnets-work.php">how Q magnets work</a> pages for a more detailed explanation. </p>
<div style="clear:both"></div>
<div style="text-align:center;padding-top:10px">
<p>Video showing correct placement for the ankle. For the demonstration, a larger device is being used, but any of the 20mm diameter Q magnets QF20 are appropriate for the ankle. 
<iframe width="420" height="315" src="http://www.youtube.com/embed/BEg4NrRR5I8" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="anklepain.php">ankle pain placement</a> for more information. </p>
</div>

<p><img src="images/neck-pain-QF28-3-4.jpg" width="260" class="imgLeft" /> There are four different models of the QF20 family, 20mm diameter Q magnets - <a href="product.php?name=QF20-5">QF20-5</a>, <a href="product.php?name=QF20-4">QF20-4</a>, <a href="product.php?name=QF20-3">QF20-3</a> and <a href="product.php?name=QF20-2">QF20-2</a>. While the depth of penetration does not vary a lot between the thinest and thickest, the thicker the magnet, the denser and stronger the magnetic flux. So as a general rule, use the thickest device that is comfortable and practical to wear. </p>
<p>The QF20-3 devices are seen here (left) on either side of the neck used in conjunction with the QF28-3 devices for <a href="neckshoulder.php">chronic neck pain</a>.</p>
<p>Any of the devices can be sewn into or onto braces once the best placements have been determined. They can also be placed inside of socks or tubular elastic material such as <a href="http://www.sportstek.net/tubigrip.htm">tubigrip</a>. </p>
<div class="clr"></div><br />

<p><img src="images/elbow-pain4.jpg" width="260" class="imgLeft" /> There are four different models of the QF20, 20mm diameter Q magnets - <a href="product.php?name=QF20-5">QF20-5</a>, <a href="product.php?name=QF20-4">QF20-4</a>, <a href="product.php?name=QF20-3">QF20-3</a> and <a href="product.php?name=QF20-2">QF20-2</a>. While the depth of penetration does not vary a lot between the thinest and thickest, the thicker the magnet, the denser and stronger the magnetic flux. So as a general rule, use the thickest device that is comfortable and practical to wear.</p>
<p>The QF20-2 device is seen here (left) on the inside of the elbow over the medial epicondyle which is the placement for <a href="elbow.php">golfers elbow</a>.</p>
<p>Any of the devices can be sewn into or onto braces once the best placements have been determined. They can also be placed inside of socks or tubular elastic material such as <a href="http://www.sportstek.net/tubigrip.htm">tubigrip</a>.</p>
<div class="clr"></div><br />

<p><img src="images/ankle-pain.jpg" width="260" class="imgLeft "/><br /><br />Use of a QF20 model over the <a href="anklepain.php">ankle</a>.  </p>
<p>All registered trademarks of BSN Medical. </p>
								','empty'=>false);
$listPro['QF15-3'] = (object) array(
								'name'=>'<a href="products.php#QF15-3">QF15-3</a>',
								'image'=>'QF15-3hr.jpg',
								'price'=>$QF153['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=4b919eeb8adf4b5e85039f1cc36dd16c',
								'cartlink'=>$QF153['link'],
								'contains'=>array(
												'Quadrapolar',
												'Penetration = 25mm or 1"',
												'Width = 15mm or 0.6"',
												'Thickness = 3mm or 0.12"',
												'<a href="pull-force.php">Pull Force</a> = ',
												'<a href="flux-plate.php">Flux Plate</a> attached',
												'Plastic casing'
												),
								'contents'=>'
<h3>How to Use</h3>
<p><img src="images/Dosimetry-Quadrapolar.jpg" width="300" class="imgLeft" />Dosimetry on the QF28-6 shows the alternating poles. The red segments represent recordings over the positive poles and blue the negative.</p>
<p>The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the four clear lines represent the biologically active areas of the magnet.</p>
<p>See the explanation of <a href="magnetic-field-gradients.php">magnetic field gradients</a> and <a href="how-Q-magnets-work.php">how Q magnets work</a> pages for a more detailed explanation. </p>
<div style="clear:both"></div>
<div style="text-align:center;padding-top:10px">
<p>Video showing correct placement for the elbow. For the demonstration, a larger device is being used, but either the QF15-3 or QF15-2 could also be used for the elbow.
<iframe width="420" height="315" src="http://www.youtube.com/embed/XRUkY4hM-hE" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="elbow.php">elbow pain placement</a> for more information. </p>
</div>

<p><img src="images/ankle-pain1.jpg" width="260" class="imgLeft" />  There are two different models in the QF15 family, 15mm diameter Q magnets - <a href="product.php?name=QF15-3">QF15-3</a> and <a href="product.php?name=QF15-2">QF15-2</a>. While there is negligible difference in the depth of penetration between the two, the thicker the magnet, the denser and stronger the magnetic flux. So as a general rule, use the thickest device that is comfortable and practical to wear. In addition, the smaller the device, the more accurate the placement is needed. If the Q magnet is slightly off position, the field will not reach the target tissue and it will have little or no effect. </p>
<p>The QF15-3 device is seen here (left) on the outside of a child\'s ankle.</p>
<div class="clr"></div><br />

<p><img src="images/ankle-pain-tape.jpg" width="260" class="imgLeft" /> Any of the devices can be sewn into or onto braces once the best placements have been determined. They can also be placed inside of socks or tubular elastic material such as <a href="http://www.sportstek.net/tubigrip.htm">tubigrip</a>. </p>
<p><a href="anklepain.php">Ankle painL</a> placement (left) with adhesive tape using Hypafix, also called Fixomull or Cover-Roll. </p>
<p>All registered trademarks of BSN Medical. </p>
<div class="clr"></div><br />
								');
$listPro['QF15-2'] = (object) array(
								'name'=>'<a href="products.php#QF15-2">QF15-2</a>',
								'image'=>'QF15-2hr.jpg',
								'price'=>$QF152['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=4b919eeb8adf4b5e85039f1cc36dd16c',
								'cartlink'=>$QF152['link'],
								'contains'=>array(
												'Quadrapolar',
												'Penetration = 24mm or 0.96"',
												'Width = 15mm or 0.6"',
												'Thickness = 2mm or 0.08"',
												'<a href="pull-force.php">Pull Force</a> = ',
												'<a href="flux-plate.php">Flux Plate</a> attached',
												'Plastic casing'
												),
								'contents'=>'
<h3>How to Use</h3>
<p><img src="images/Dosimetry-Quadrapolar.jpg" width="300" class="imgLeft" />Dosimetry on the QF28-6 shows the alternating poles. The red segments represent recordings over the positive poles and blue the negative.</p>
<p>The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the four clear lines represent the biologically active areas of the magnet.</p>
<p>See the explanation of <a href="magnetic-field-gradients.php">magnetic field gradients</a> and <a href="how-Q-magnets-work.php">how Q magnets work</a> pages for a more detailed explanation. </p>
<div style="clear:both"></div>
<div style="text-align:center;padding-top:10px">
<p>Video showing correct placement for the elbow. For the demonstration, a larger device is being used, but either the QF15-3 or QF15-2 could also be used for the elbow.
<iframe width="420" height="315" src="http://www.youtube.com/embed/XRUkY4hM-hE" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="elbow.php">elbow pain placement</a> for more information. </p>
</div>

<p><img src="images/ankle-pain1.jpg" width="260" class="imgLeft" />  There are two different models in the QF15 family, 15mm diameter Q magnets - <a href="product.php?name=QF15-3">QF15-3</a> and <a href="product.php?name=QF15-2">QF15-2</a>. While there is negligible difference in the depth of penetration between the two, the thicker the magnet, the denser and stronger the magnetic flux. So as a general rule, use the thickest device that is comfortable and practical to wear. In addition, the smaller the device, the more accurate the placement is needed. If the Q magnet is slightly off position, the field will not reach the target tissue and it will have little or no effect. </p>
<p>The QF15-3 device is seen here (left) on the outside of a child\'s ankle.</p>
<div class="clr"></div><br />

<p><img src="images/ankle-pain-tape.jpg" width="260" class="imgLeft" /> Any of the devices can be sewn into or onto braces once the best placements have been determined. They can also be placed inside of socks or tubular elastic material such as <a href="http://www.sportstek.net/tubigrip.htm">tubigrip</a>. </p>
<p><a href="anklepain.php">Ankle painL</a> placement (left) with adhesive tape using Hypafix, also called Fixomull or Cover-Roll. </p>
<p>All registered trademarks of BSN Medical. </p>
<div class="clr"></div><br />
								','empty'=>false);
$listPro['QF10-2'] = (object) array(
								'name'=>'<a href="products.php#QF10-2">QF10-2</a>',
								'image'=>'QF10-2hr.jpg',
								'price'=>$QF102['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=a7efb0b84412437696a770408cfc0f33',
								'cartlink'=>$QF102['link'],
								'contains'=>array(
												'Quadrapolar',
												'Penetration = 14mm or 0.56"',
												'Width = 10mm or 0.4"',
												'Thickness = 2mm or 0.08"',
												'<a href="pull-force.php">Pull Force</a> = ',
												'<a href="flux-plate.php">Flux Plate</a> attached',
												'Plastic casing'
												),
								'contents'=>'
<h3>How to Use</h3>
<p><img src="images/Dosimetry-Quadrapolar.jpg" width="300" class="imgLeft" />Dosimetry on the QF28-6 shows the alternating poles. The red segments represent recordings over the positive poles and blue the negative.</p>
<p>The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the four clear lines represent the biologically active areas of the magnet.</p>
<p>See the explanation of <a href="magnetic-field-gradients.php">magnetic field gradients</a> and <a href="how-Q-magnets-work.php">how Q magnets work</a> pages for a more detailed explanation. </p>
<div style="clear:both"></div>
<div style="text-align:center;padding-top:10px">
<p>Video showing correct placement for the elbow. For the demonstration, a larger device is being used, but either the QF15-3 or QF15-2 could also be used for the elbow.
<iframe width="420" height="315" src="http://www.youtube.com/embed/XRUkY4hM-hE" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="elbow.php">elbow pain placement</a> for more information. </p>
</div>

<p><img src="images/hand-pain1.jpg" width="260" class="imgLeft" />  There are two different models in the QF10 family, 10mm diameter Q magnets - <a href="product.php?name=QF10-3">QF10-3</a> and <a href="product.php?name=QF10-2">QF10-2</a>. While there is negligible difference in the depth of penetration between the two, the thicker the magnet, the denser and stronger the magnetic flux. So as a general rule, use the thickest device that is comfortable and practical to wear. In addition, the smaller the device, the more accurate the placement is needed. If the Q magnet is slightly off position, the field will not reach the target tissue and it will have little or no effect. </p>
<p>The QF10-2 device is seen here (left) on the wrist.</p>
<div class="clr"></div><br />

<div style="text-align:center;padding-top:10px">
<p>QF10 Q magnets should also be used on trigger points when the <a href="product.php?name=Q6-1.5">Q6-1.5</a> is not powerful enough to effect the tissue. <br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/3f1g7FtyI6A" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="elbow.php">elbow pain placement</a> for more information. </p>
</div>

<p><img src="images/wrist-pain.jpg" width="260" class="imgLeft" /> Any of the devices can be sewn into or onto braces once the best placements have been determined. They can also be placed inside of socks or tubular elastic material such as <a href="http://www.sportstek.net/tubigrip.htm">tubigrip</a>. </p>
<p><a href="wrist.php">Wrist pain placement</a> (left) with adhesive tape using Hypafix, also called Fixomull or Cover-Roll. </p>
<p>All registered trademarks of BSN Medical. </p>
<div class="clr"></div><br />
								','empty'=>false);
$listPro['QF10-3'] = (object) array(
								'name'=>'<a href="products.php#QF10-3">QF10-3</a>',
								'image'=>'QF10-3hr.jpg',
								'price'=>$QF103['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=fff3eef0a7b64fc396992dd12071a5e7',
								'cartlink'=>$QF103['link'],
								'contains'=>array(
												'Quadrapolar',
												'Penetration = 15mm or 0.6"',
												'Width = 10mm or 0.4"',
												'Thickness = 3mm or 0.12',
												'<a href="pull-force.php">Pull Force</a> = ',
												'<a href="flux-plate.php">Flux Plate</a> attached',
												'Plastic casing'
												),
								'contents'=>'
<h3>How to Use</h3>
<p><img src="images/Dosimetry-Quadrapolar.jpg" width="300" class="imgLeft" />Dosimetry on the QF28-6 shows the alternating poles. The red segments represent recordings over the positive poles and blue the negative.</p>
<p>The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the four clear lines represent the biologically active areas of the magnet.</p>
<p>See the explanation of <a href="magnetic-field-gradients.php">magnetic field gradients</a> and <a href="how-Q-magnets-work.php">how Q magnets work</a> pages for a more detailed explanation. </p>
<div style="clear:both"></div>
<div style="text-align:center;padding-top:10px">
<p>Video showing correct placement for the elbow. For the demonstration, a larger device is being used, but either the QF15-3 or QF15-2 could also be used for the elbow.
<iframe width="420" height="315" src="http://www.youtube.com/embed/XRUkY4hM-hE" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="elbow.php">elbow pain placement</a> for more information. </p>
</div>

<p><img src="images/hand-pain1.jpg" width="260" class="imgLeft" />  There are two different models in the QF10 family, 10mm diameter Q magnets - <a href="product.php?name=QF10-3">QF10-3</a> and <a href="product.php?name=QF10-2">QF10-2</a>. While there is negligible difference in the depth of penetration between the two, the thicker the magnet, the denser and stronger the magnetic flux. So as a general rule, use the thickest device that is comfortable and practical to wear. In addition, the smaller the device, the more accurate the placement is needed. If the Q magnet is slightly off position, the field will not reach the target tissue and it will have little or no effect. </p>
<p>The QF10-2 device is seen here (left) on the wrist.</p>
<div class="clr"></div><br />

<div style="text-align:center;padding-top:10px">
<p>QF10 Q magnets should also be used on trigger points when the <a href="product.php?name=Q6-1.5">Q6-1.5</a> is not powerful enough to effect the tissue. <br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/3f1g7FtyI6A" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="elbow.php">elbow pain placement</a> for more information. </p>
</div>

<p><img src="images/wrist-pain.jpg" width="260" class="imgLeft" /> Any of the devices can be sewn into or onto braces once the best placements have been determined. They can also be placed inside of socks or tubular elastic material such as <a href="http://www.sportstek.net/tubigrip.htm">tubigrip</a>. </p>
<p><a href="wrist.php">Wrist pain placement</a> (left) with adhesive tape using Hypafix, also called Fixomull or Cover-Roll. </p>
<p>All registered trademarks of BSN Medical. </p>
<div class="clr"></div><br />
								','empty'=>false);
								
$listPro['Q6-15'] = (object) array(
								'name'=>'<a href="products.php#Q6-1.5">Q6-1.5 X 6 (includes 1 sheet of QFix6)</a>',
								'image'=>'Q6-1.5X6hr.jpg',
								'price'=>$Q615['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=fff3eef0a7b64fc396992dd12071a5e7',
								'cartlink'=>$Q615['link'],
								'contains'=>array(
												'Quadrapolar',
												'Penetration = 5mm or 0.2"',
												'Width = 6mm or 0.24"',
												'Thickness = 1.5mm or 0.06"',
												'<a href="pull-force.php">Pull Force</a> = ',
												'<a href="flux-plate.php">Flux Plate</a> attached',
												'Plastic casing'
												),
								'contents'=>'
<h3>How to Use</h3>
<p><img src="images/Dosimetry-Quadrapolar.jpg" width="300" class="imgLeft" />Dosimetry on the QF28-6 shows the alternating poles. The red segments represent recordings over the positive poles and blue the negative.</p>
<p>The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the four clear lines represent the biologically active areas of the magnet.</p>
<p>See the explanation of <a href="magnetic-field-gradients.php">magnetic field gradients</a> and <a href="how-Q-magnets-work.php">how Q magnets work</a> pages for a more detailed explanation. </p>
<div style="clear:both"></div>
<div style="text-align:center;padding-top:10px">
<p>Video showing application of Q6-1.5 with Qfix6 plasters. 
<iframe width="420" height="315" src="http://www.youtube.com/embed/HNWmfrbaa4k" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="elbow.php">elbow pain placement</a> for more information. </p>
</div>

<p><img src="images/hand-pain.jpg" width="260" class="imgLeft" />The smallest Q magnets are used for small joints such as the fingers and held in place with <a href="products.php#QFix6">Qfix6</a> round plasters which can be added to your order. </p>
<p>The Q6-1.5 is the only Q magnet model that does not have a flux plate attached which combined with its small size, means it has a very shallow penetration. This is despite it being composed of some of the strongest magnetic material on earth at a 13,500 Gauss or 1.35 Tesla internal rating. </p>
<div class="clr"></div><br />

<div style="text-align:center;padding-top:10px">
<p>The <a href="product.php?name="Q6-15">Q6-1.5</a> is a great device for trigger points. Other ways of stimulating trigger points include acupuncture or dry-needling. Often though, these techniques do not hold very long after the treatment since the needle has to be removed. <br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/3f1g7FtyI6A" frameborder="0" allowfullscreen></iframe>
<br />The beauty of Q magnets is that they can be worn 24/7 without risk so to the therapy works non-stop. <br />
<a href="product.php?name=QF10-2">QF10-2</a> or <a href="product.php?name=QF10-3">QF10-3</a> Q magnets should be used if the Q6-1.5 are not powerful enough to effect the trigger point. 
</p>
</div>
								','empty'=>false);
								
$listPro['Q6-15x100'] = (object) array(
								'name'=>'<a href="products.php#Q6-1.5X100">Q6-1.5 X 100</a>',
								'image'=>'Q6-1.5X100.jpg',
								'price'=>$Q615x['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=fff3eef0a7b64fc396992dd12071a5e7',
								'cartlink'=>$Q615x['link'],
								'contains'=>array(
												'Quadrapolar',
												'Penetration = 5mm or 0.2"',
												'Width = 6mm or 0.24"',
												'Thickness = 1.5mm or 0.06"',
												'<a href="pull-force.php">Pull Force</a> = ',
												'<a href="flux-plate.php">Flux Plate</a> attached',
												'Plastic casing'
												),
								'contents'=>'
<h3>How to Use</h3>
<p><img src="images/Dosimetry-Quadrapolar.jpg" width="300" class="imgLeft" />Dosimetry on the QF28-6 shows the alternating poles. The red segments represent recordings over the positive poles and blue the negative.</p>
<p>The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the four clear lines represent the biologically active areas of the magnet.</p>
<p>See the explanation of <a href="magnetic-field-gradients.php">magnetic field gradients</a> and <a href="how-Q-magnets-work.php">how Q magnets work</a> pages for a more detailed explanation. </p>
<div style="clear:both"></div>
<div style="text-align:center;padding-top:10px">
<p>Video showing application of Q6-1.5 with Qfix6 plasters. 
<iframe width="420" height="315" src="http://www.youtube.com/embed/HNWmfrbaa4k" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="elbow.php">elbow pain placement</a> for more information. </p>
</div>

<p><img src="images/hand-pain.jpg" width="260" class="imgLeft" />The smallest Q magnets are used for small joints such as the fingers and held in place with <a href="products.php#QFix6">Qfix6</a> round plasters which can be added to your order. </p>
<p>The Q6-1.5 is the only Q magnet model that does not have a flux plate attached which combined with its small size, means it has a very shallow penetration. This is despite it being composed of some of the strongest magnetic material on earth at a 13,500 Gauss or 1.35 Tesla internal rating. </p>
<div class="clr"></div><br />

<div style="text-align:center;padding-top:10px">
<p>The <a href="product.php?name="Q6-15">Q6-1.5</a> is a great device for trigger points. Other ways of stimulating trigger points include acupuncture or dry-needling. Often though, these techniques do not hold very long after the treatment since the needle has to be removed. <br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/3f1g7FtyI6A" frameborder="0" allowfullscreen></iframe>
<br />The beauty of Q magnets is that they can be worn 24/7 without risk so to the therapy works non-stop. <br />
<a href="product.php?name=QF10-2">QF10-2</a> or <a href="product.php?name=QF10-3">QF10-3</a> Q magnets should be used if the Q6-1.5 are not powerful enough to effect the trigger point. 
</p>
</div>
								','empty'=>false);
								
								
$listPro['QFix-6'] = (object) array(
								'name'=>'QFix6 Plasters for 6mm Q magnet adhesive',
								'image'=>'Q6-1.5X6hr.jpg',
								'price'=>$QFix6['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=fff3eef0a7b64fc396992dd12071a5e7',
								'cartlink'=>$QFix6['link'],
								'contains'=>array(
												'Single sided round plaster',
												'20mm diameter',
												'12 plasters per sheet',
												'For use with <a href="products.php#Q6-1.5">Q6-1.5</a>',
												'Plaster only',
												'Magnets sold seperately'
												),
								'contents'=>'
<h3 style="width:890px">How to Use</h3>
<div style="text-align:center;padding-top:10px">
<p>See video for application demonstration...<br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/HNWmfrbaa4k" frameborder="0" allowfullscreen></iframe></p>
</div>

								','empty'=>false);
								
$listPro['QF20-5'] = (object) array(
								'name'=>'<a href="products.php#QF20-5">QF20-5</a>',
								'image'=>'QF20-5hr.jpg',
								'price'=>$QF205['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=fff3eef0a7b64fc396992dd12071a5e7',
								'cartlink'=>$QF205['link'],
								'contains'=>array(
												'Quadrapolar',
												'Penetration = 33mm or 1.32"',
												'Width = 20mm or 0.8"',
												'Thickness = 5mm or 0.2"',
												'<a href="pull-force.php">Pull Force</a> = ',
												'<a href="flux-plate.php">Flux Plate</a> attached',
												'Plastic casing'
												),
								'contents'=>'
<h3>How to Use</h3>
<p><img src="images/Dosimetry-Quadrapolar.jpg" width="300" class="imgLeft" />Dosimetry on the QF28-6 shows the alternating poles. The red segments represent recordings over the positive poles and blue the negative.</p>
<p>The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the four clear lines represent the biologically active areas of the magnet.</p>
<p>See the explanation of <a href="magnetic-field-gradients.php">magnetic field gradients</a> and <a href="how-Q-magnets-work.php">how Q magnets work</a> pages for a more detailed explanation. </p>

<div style="text-align:center;padding-top:10px">
<p>Video showing correct placement for the ankle. For the demonstration, a larger device is being used, but any of the 20mm diameter Q magnets QF20 are appropriate for the ankle. <br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/BEg4NrRR5I8" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="anklepain.php">ankle pain placement</a> for more information. </p>
</div>

<p><img src="images/elbow-pain1.jpg" width="260" class="imgLeft" /> There are four different models of the QF20 family, 20mm diameter Q magnets - <a href="product.php?name=QF20-5">QF20-5</a>, <a href="product.php?name=QF20-4">QF20-4</a>, <a href="product.php?name=QF20-3">QF20-3</a> and <a href="product.php?name=QF20-2">QF20-2</a>. While the depth of penetration does not vary a lot between the thinest and thickest, the thicker the magnet, the denser and stronger the magnetic flux. So as a general rule, use the thickest device that is comfortable and practical to wear. </p>
<p>The QF20-5 device is seen here (left) on the outside of the elbow over the lateral epicondyle which is the placement for <a href="elbow.php">tennis elbow</a>.</p>
<p>Any of the devices can be sewn into or onto braces once the best placements have been determined. They can also be placed inside of socks or tubular elastic material such as <a href="http://www.sportstek.net/tubigrip.htm">tubigrip</a>. </p>
<div class="clr"></div><br />


<p><img src="images/ankle-pain.jpg" width="260" class="imgLeft" /> <br /><br />Use of a QF20 model over the <a href="anklepain.php">ankle</a>. </p>
<div class="clr"></div><br />
								');
								
$listPro['QF20-4'] = (object) array(
								'name'=>'<a href="products.php#QF20-4">QF20-4</a>',
								'image'=>'QF20-4hr.jpg',
								'price'=>$QF204['price'],
								'cartlink'=>$QF204['link'],
								'contains'=>array(
												'Quadrapolar',
												'Penetration = 32mm or 1.28"',
												'Width = 20mm or 0.8"',
												'Thickness = 4mm or 0.16"',
												'<a href="pull-force.php">Pull Force</a> = ',
												'<a href="flux-plate.php">Flux Plate</a> attached',
												'Plastic casing'
												),
								'contents'=>'
<h3>How to Use</h3>
<p><img src="images/Dosimetry-Quadrapolar.jpg" width="300" class="imgLeft" />Dosimetry on the QF28-6 shows the alternating poles. The red segments represent recordings over the positive poles and blue the negative.</p>
<p>The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the four clear lines represent the biologically active areas of the magnet.</p>
<p>See the explanation of <a href="magnetic-field-gradients.php">magnetic field gradients</a> and <a href="how-Q-magnets-work.php">how Q magnets work</a> pages for a more detailed explanation. </p>

<div style="text-align:center;padding-top:10px">
<p>Video showing correct placement for the ankle. For the demonstration, a larger device is being used, but any of the 20mm diameter Q magnets QF20 are appropriate for the ankle. <br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/BEg4NrRR5I8" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="anklepain.php">ankle pain placement</a> for more information. </p>
</div>

<p><img src="images/elbow-pain1.jpg" width="260" class="imgLeft" /> There are four different models of the QF20 family, 20mm diameter Q magnets - <a href="product.php?name=QF20-5">QF20-5</a>, <a href="product.php?name=QF20-4">QF20-4</a>, <a href="product.php?name=QF20-3">QF20-3</a> and <a href="product.php?name=QF20-2">QF20-2</a>. While the depth of penetration does not vary a lot between the thinest and thickest, the thicker the magnet, the denser and stronger the magnetic flux. So as a general rule, use the thickest device that is comfortable and practical to wear. </p>
<p>The QF20-5 device is seen here (left) on the outside of the elbow over the lateral epicondyle which is the placement for <a href="elbow.php">tennis elbow</a>.</p>
<p>Any of the devices can be sewn into or onto braces once the best placements have been determined. They can also be placed inside of socks or tubular elastic material such as <a href="http://www.sportstek.net/tubigrip.htm">tubigrip</a>. </p>
<div class="clr"></div><br />


<p><img src="images/ankle-pain.jpg" width="260" class="imgLeft" /> <br /><br />Use of a QF20 model over the <a href="anklepain.php">ankle</a>. </p>
<div class="clr"></div><br />
								','empty'=>false);
$listPro['QF20-3'] = (object) array(
								'name'=>'QF20-3',
								'image'=>'QF20-3hr.jpg',
								'price'=>$QF203['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=447c7b68932b4e2b952973ac561c91a2',
								'cartlink'=>$QF203['link'],
								'contains'=>array(
												'Quadrapolar',
												'Penetration = 31mm or 1.24"',
												'Width = 20mm or 0.8"',
												'Thickness = 3mm or 0.12"',
												'<a href="pull-force.php">Pull Force</a> = ',
												'<a href="flux-plate.php">Flux Plate</a> attached',
												'Plastic casing'
												),
								'contents'=>'
<h3>How to Use</h3>
<p><img src="images/Dosimetry-Quadrapolar.jpg" width="300" class="imgLeft" />Dosimetry on the QF28-6 shows the alternating poles. The red segments represent recordings over the positive poles and blue the negative.</p>
<p>The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the four clear lines represent the biologically active areas of the magnet.</p>
<p>See the explanation of <a href="magnetic-field-gradients.php">magnetic field gradients</a> and <a href="how-Q-magnets-work.php">how Q magnets work</a> pages for a more detailed explanation. </p>

<div style="text-align:center;padding-top:10px">
<p>Video showing correct placement for the ankle. For the demonstration, a larger device is being used, but any of the 20mm diameter Q magnets QF20 are appropriate for the ankle. <br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/BEg4NrRR5I8" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="anklepain.php">ankle pain placement</a> for more information. </p>
</div>

<p><img src="images/elbow-pain1.jpg" width="260" class="imgLeft" /> There are four different models of the QF20 family, 20mm diameter Q magnets - <a href="product.php?name=QF20-5">QF20-5</a>, <a href="product.php?name=QF20-4">QF20-4</a>, <a href="product.php?name=QF20-3">QF20-3</a> and <a href="product.php?name=QF20-2">QF20-2</a>. While the depth of penetration does not vary a lot between the thinest and thickest, the thicker the magnet, the denser and stronger the magnetic flux. So as a general rule, use the thickest device that is comfortable and practical to wear. </p>
<p>The QF20-5 device is seen here (left) on the outside of the elbow over the lateral epicondyle which is the placement for <a href="elbow.php">tennis elbow</a>.</p>
<p>Any of the devices can be sewn into or onto braces once the best placements have been determined. They can also be placed inside of socks or tubular elastic material such as <a href="http://www.sportstek.net/tubigrip.htm">tubigrip</a>. </p>
<div class="clr"></div><br />


<p><img src="images/ankle-pain.jpg" width="260" class="imgLeft" /> <br /><br />Use of a QF20 model over the <a href="anklepain.php">ankle</a>. </p>
<div class="clr"></div><br />
								','empty'=>false);
$listPro['QF20-2'] = (object) array(
								'name'=>'<a href="products.php#QF20-2">QF20-2</a>',
								'image'=>'QF20-2hr.jpg',
								'price'=>$QF202['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=135351ace0ce4cafb24f3bd245d21362',
								'cartlink'=>$QF202['link'],
								'contains'=>array(
												'Quadrapolar',
												'Penetration = 30mm or 1.2"',
												'Width = 20mm or 0.8"',
												'Thickness = 2mm or 0.08"',
												'<a href="pull-force.php">Pull Force</a> = ',
												'<a href="flux-plate.php">Flux Plate</a> attached',
												'Plastic casing'
												),
								'contents'=>'
<h3>How to Use</h3>
<p><img src="images/Dosimetry-Quadrapolar.jpg" width="300" class="imgLeft" />Dosimetry on the QF28-6 shows the alternating poles. The red segments represent recordings over the positive poles and blue the negative.</p>
<p>The small gap between the poles is where the opposite poles cancel each other out and the net field strength is zero. However, this is where the magnetic field gradient is steepest and the four clear lines represent the biologically active areas of the magnet.</p>
<p>See the explanation of <a href="magnetic-field-gradients.php">magnetic field gradients</a> and <a href="how-Q-magnets-work.php">how Q magnets work</a> pages for a more detailed explanation. </p>

<div style="text-align:center;padding-top:10px">
<p>Video showing correct placement for the ankle. For the demonstration, a larger device is being used, but any of the 20mm diameter Q magnets QF20 are appropriate for the ankle. <br />
<iframe width="420" height="315" src="http://www.youtube.com/embed/BEg4NrRR5I8" frameborder="0" allowfullscreen></iframe>
<br />Also see <a href="anklepain.php">ankle pain placement</a> for more information. </p>
</div>

<p><img src="images/elbow-pain1.jpg" width="260" class="imgLeft" /> There are four different models of the QF20 family, 20mm diameter Q magnets - <a href="product.php?name=QF20-5">QF20-5</a>, <a href="product.php?name=QF20-4">QF20-4</a>, <a href="product.php?name=QF20-3">QF20-3</a> and <a href="product.php?name=QF20-2">QF20-2</a>. While the depth of penetration does not vary a lot between the thinest and thickest, the thicker the magnet, the denser and stronger the magnetic flux. So as a general rule, use the thickest device that is comfortable and practical to wear. </p>
<p>The QF20-5 device is seen here (left) on the outside of the elbow over the lateral epicondyle which is the placement for <a href="elbow.php">tennis elbow</a>.</p>
<p>Any of the devices can be sewn into or onto braces once the best placements have been determined. They can also be placed inside of socks or tubular elastic material such as <a href="http://www.sportstek.net/tubigrip.htm">tubigrip</a>. </p>
<div class="clr"></div><br />


<p><img src="images/ankle-pain.jpg" width="260" class="imgLeft" /> <br /><br />Use of a QF20 model over the <a href="anklepain.php">ankle</a>. </p>
<div class="clr"></div><br />
								','empty'=>false);

$listPro['OF50-3'] = (object) array(
								'name'=>'<a href="products.php#OF50-3">OF50-3</a>',
								'image'=>'OF50-3hr.jpg',
								'price'=>$OF503['price'],
								//'cartlink'=>'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&pid=be1eccee2f034558be6632a467a20b0c',
								'cartlink'=>$OF503['link'],
								'contains'=>array(
												'45 MGOe (N45) Neodymium Rare Earth',
												'Octapolar',
												'Penetration = 35mm or 1.4"',
												'Width = 50mm or 2"',
												'Thickness = 3mm or 0.12"',
												'<a href="pull-force.php">Pull Force</a> = Pending',
												'<a href="flux-plate.php">Flux Plate</a> attached',
												'Plastic casing'
												),
								'contents'=>'
<h3>How to Use</h3>

<p><img src="images/Lower-Back-OF50-3B.jpg" width="260" class="imgLeft" />In this example, the OF50-3 is producing a magnetic field gradient over the adjacent vertebral levels of L4/5 and L5/S1. This device was designed to cover two adjacent spinal levels, which cannot be achieved with the QF28-6 devices, since they need to kept separated by the width of the device. </p>
<p>Since each lumbar spinal level (lower back) is around 25mm (2") apart, a QF28-6 device will only cover the one level and one removed, such as L3/4 and L5/S1. </p>
<p>Being 5cm wide with a large surface area and 8 active regions, the OF50-3 device is ideal to apply on large bruises for faster recovery after injury. </p>
<p>The two QF28-6 devices to the left are covering the PSIS\'s which are located at the dimples on either side of the spine. This will cover the sacral nerves which includes the sciatic nerve.  </p>
<div class="clr"></div><br />
								','empty'=>false);
$listPro['empty'] = (object) array('empty'=>true);


$selPro = (!isset($listPro[(isset($_GET['name']) ? (!empty($_GET['name']) ? $_GET['name'] : 'empty' ) : 'empty' )]) ? $listPro['empty'] : $listPro[(isset($_GET['name']) ? (!empty($_GET['name']) ? $_GET['name'] : 'empty' ) : 'empty' )] );

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
              <h1><?=$selPro->name;?></h1>
            </div>
            <div class="about_body_text_box" style="width:100%; padding:0px;">
				<div id="cse-results" style="display: none;"></div><div style="padding:15px 15px 15px 15px; width:auto" class="body_left_text_area customContentStyle" id="static-content">
<style>
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
</style>
					<div class="mainproDesc">
						<div class="proImgSide">
							<img src="images/<?=$selPro->image; ?>" width="600" />
						</div>
						
						<div class="containsSide">
							<ul>
								<?php foreach($selPro->contains as $v) { echo '<li>'.$v.'</li>'; } ?>
							</ul>
							<div class="priceTag">Price: &nbsp; <span><?=$symbol?> <?=$selPro->price; ?></span></div>
							<a href="<?=$selPro->cartlink;?>"><img src="images/cart.jpg" alt="Add to Cart" /></a>
						</div>
					</div>
		
					<div class="pro_contents">
					<?=$selPro->contents?>
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

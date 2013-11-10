
<?php include("admin/includes/include.php");  ?>
<!DOCTYPE HTML>
<html>
<head>
<?php include("includes/common_script.php"); 

$fileLang = "includes/languages/lang.".$_SESSION['site_currency'].".php";
require($fileLang); 

// meta tags used in default buy now page 
include("includes/metatags/meta-products.php");
 ?> 

 
 
 
 
<?php

/* DESCRIPTIONS FOR PRODUCTS */

 include('buy-desc.php'); ?>
 
	
<!--====================banner part====================-->

</head>
<body>


<script language="javascript">
function moveTo(optionValue) {
    if(optionValue=="") return false;
    window.location=''+optionValue;
}
</script>	



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
    <?php //include("includes/banner.php");  ?>
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
      <h1>Purchase Q magnets</h1>
    </div>
    <div class="about_body_text_box">
      <div id="cse-results" style="display: none;"></div><div class="body_left_text_area" id="static-content">There are 13 available Q magnet models, starting from as little as <a href="#QF10-2">$10 each</a>. These can be added to your shopping cart and purchased individually below. For best value, choose one of the <a href="#QBP">Q Bonus Packages</a>, additional devices can be added if required. Or you can go to "<a href="bodymap.php">How To Use</a>" and purchase the recommended combinations for specific pain conditions or download the <a href="downloads/Qmagnets_Gen3_Fax_Aust_Retail_0311.pdf">Fax Order Form</a>. Orders over $200 receive free shipping anywhere in the world, see the <a href="shipping-charges.php">shipping charges</a> page for more detailed information. <br>
        <br>
      <?php echo $page_label; ?>
		 <?php /*?><?php echo "CURRENCY" . $_SESSION['curr'];if(($_SESSION['curr']!='yen')){ ?>
		 
		商品は日本での販売の為の薬事認可を取得しておりません。									
		従いまして、注文の際にはお客様ご自身の責任において注文していただけますよう宜しくお願いします。									
						
		
		
		 <?php }?><?php */?>
		
	  </div>
      <div class="buy_now_body_box">
        <div class="buy_now_box_heading">Q Bonus Package - Lower Back Pain     </div>
        <div class="buy_now_img_box"><a href="buy-QBPLBP.php"><img src="images/buy_now_img3.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php
		echo $pro_list['q-bonus-package-lower-back-pain']['desc'];
		?>
          <br>
          <h2>
            
            <?php echo $symbol.' '.$QBPLBP['price']; ?>
           
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="<?php echo $QBPLBP['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
          
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-QBPLBP.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box">
        <div class="buy_now_box_heading">Q Bonus Package - Complex Lower Back Pain    </div>
        <div class="buy_now_img_box"><a href="buy-QBPCLBP.php"><img src="images/buy_now_img3.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php
		echo $pro_list['q-bonus-package-complex-lower-back-pain']['desc']
		?>
          <br>
            <h2>
            
            <?php echo $symbol.' '.$QBPCLBP['price']; ?>
           
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="<?php echo $QBPCLBP['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-QBPCLBP.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box">
        <div class="buy_now_box_heading">Q Bonus Package - General Use   </div>
        <div class="buy_now_img_box"><a href="buy-QBPGU.php"><img src="images/buy_now_img3.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['q-bonus-package-general-use']['desc']; ?>
          <br>
             <h2>
           
            <?php echo $symbol.' '.$QBPGU['price']; ?>
          
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
          
            <a href="<?php echo $QBPGU['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
          
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-QBPGU.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box">
        <div class="buy_now_box_heading">Q Bonus Package - Active Athlete     </div>
        <div class="buy_now_img_box"><a href="buy-QBPAA.php"><img src="images/body_img.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['q-bonus-package-active-athlete']['desc']; ?>
          <br>
             <h2>
           
            <?php echo $symbol.' '.$QBPAA['price']; ?>
            
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="<?php echo $QBPAA['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-QBPAA.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="OF50-3"></a>
        <div class="buy_now_box_heading">OF50-3</div>
        <div class="buy_now_img_box"><a href="buy-OF50-3.php"><img src="images/OF50-3.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['of50-3']['desc']; ?>
          <br>
            <h2>
          
            <?php echo $symbol.' '.$OF503['price']; ?>
          
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="<?php echo $OF503['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-OF50-3.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF28-6"></a>
        <div class="buy_now_box_heading">QF28-6 (Formerly ProQ)</div>
        <div class="buy_now_img_box"><a href="buy-QF28-6.php"><img src="images/QF28-6.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qf28-6-formerly-proq']['desc']; ?>
		<br>
             <h2>
           
            <?php echo $symbol.' '.$QF286['price']; ?>
            
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="<?php echo $QF286['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-QF28-6.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF28-3"></a>
        <div class="buy_now_box_heading">QF28-3</div>
        <div class="buy_now_img_box"><a href="buy-QF28-3.php"><img src="images/QF28-3.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qf28-3']['desc']; ?>
		<br>
            <h2>
            
            <?php echo $symbol.' '.$QF283['price']; ?>
            
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
          
            <a href="<?php echo $QF283['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-QF28-3.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="HF28-6"></a>
        <div class="buy_now_box_heading">HF28-6 (Formerly ProH)  </div>
        <div class="buy_now_img_box"><a href="buy-HF28-6.php"><img src="images/HF28-6.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['hf28-6formerly-proh']['desc']; ?>
          <br>
             <h2>
            
            <?php echo $symbol.' '.$HF286['price']; ?>
          
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="<?php echo $HF286['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-HF28-6.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF20-5"></a>
        <div class="buy_now_box_heading">QF20-5 (Formerly PlusQ)    </div>
        <div class="buy_now_img_box"><a href="buy-QF20-5.php"><img src="images/QF20-5.jpg" alt="" width="199" height="189" border="0" /></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qf20-5-formerly-plusq']['desc']; ?>
          <br>
           <h2>
            
            <?php echo $symbol.' '.$QF205['price']; ?>
            
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="<?php echo $QF205['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-QF20-5.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF20-4"></a>
        <div class="buy_now_box_heading">QF20-4     </div>
        <div class="buy_now_img_box"><a href="buy-QF20-4.php"><img src="images/QF20-4.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qf20-4']['desc']; ?>
          <br>
            <h2>
         
            <?php echo $symbol.' '.$QF204['price']; ?>
       
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="<?php echo $QF204['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-QF20-4.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF20-3"></a>
        <div class="buy_now_box_heading">QF20-3    </div>
        <div class="buy_now_img_box"><a href="buy-QF20-3.php"><img src="images/QF20-3.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php  echo $pro_list['qf20-3']['desc']; ?>
          <br>
             <h2>
           
            <?php echo $symbol.' '.$QF203['price']; ?>
           
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="<?php echo $QF203['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-QF20-3.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF20-2"></a>
        <div class="buy_now_box_heading">QF20-2    </div>
        <div class="buy_now_img_box"><a href="buy-QF20-2.php"><img src="images/QF20-2.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qf20-2']['desc']; ?>
		<br>
           <h2>
           
            <?php echo $symbol.' '.$QF202['price']; ?>
          
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="<?php echo $QF202['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
          
			
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-QF20-2.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF15-3"></a>
        <div class="buy_now_box_heading">QF15-3     </div>
        <div class="buy_now_img_box"><a href="buy-QF15-3.php"><img src="images/QF15-3.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qf15-3']['desc']  ?>
          <br>
            <h2>
            
            <?php echo $symbol.' '.$QF153['price']; ?>
          
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="<?php echo $QF153['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-QF15-3.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF15-2"></a>
        <div class="buy_now_box_heading">QF15-2      </div>
        <div class="buy_now_img_box"><a href="buy-QF15-2.php"><img src="images/QF15-2.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qf15-2']['desc']; ?>
          <br>
            <h2>
            
            <?php echo $symbol.' '.$QF152['price']; ?>
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
         
            <a href="<?php echo $QF152['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-QF15-2.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF10-3"></a>
        <div class="buy_now_box_heading">QF10-3     </div>
        <div class="buy_now_img_box"><a href="buy-QF10-3.php"><img src="images/QF10-3.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qf10-3']['desc']; ?>
          <br>
             <h2>
          
            <?php echo $symbol.' '.$QF103['price']; ?>
           
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="<?php echo $QF103['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-QF10-3.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF10-2"></a>
        <div class="buy_now_box_heading">QF10-2    </div>
        <div class="buy_now_img_box"><a href="buy-QF10-2.php"><img src="images/QF10-2.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qf10-2']['desc']; ?>
          <br>
            <h2>
           
            <?php echo $symbol.' '.$QF102['price']; ?>
           
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="<?php echo $QF102['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-QF10-2.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="Q6-1.5"></a>
        <div class="buy_now_box_heading">Q6-1.5 -Pack of 6 with plaster sheet     </div>
        <div class="buy_now_img_box"><a href="buy-Q6-15.php"><img src="images/Q6-1.5X6.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['q6-15-pack-of-6-with-plaster-sheet']['desc']; ?>
          <br>
          <h2>
            
            <?php echo $symbol.' '.$Q615['price']; ?>
         
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="<?php echo $Q615['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-Q6-15.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box">
        <div class="buy_now_box_heading">Q6-1.5 -Pack of 100     </div>
        <div class="buy_now_img_box"><a href="buy-Q6-15x100.php"><img src="images/Q6-1.5X100.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">See Q6-1.5 above<br><br>


          <br>
          <h2>
           
            <?php echo $symbol.' '.$Q615x['price']; ?>
            
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="<?php echo $Q615x['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-Q6-15x100.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="TPL"></a>
        <div class="buy_now_box_heading">Pointer Pal - Trigger Point Locator     </div>
        <div class="buy_now_img_box"><a href="trigger-point-locator.php"><img src="images/Point-Pal.gif" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text"><font style=" font-size:10px">
		<?php echo $pro_list['pointer-pal-trigger-point-locator']['desc']; ?>
          <br>
            <h2>
          
            <?php echo $symbol.' '.$TPL['price']; ?>
            
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="<?php echo $TPL['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="trigger-point-locator.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box">
        <div class="buy_now_box_heading">Comffit Digital TENS     </div>
        <div class="buy_now_img_box"><img src="images/comffit-tens.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['comffit-digital-tens']['desc']; ?>
          <br>
         <h2>
            
            <?php echo $symbol.' '.$CDT['price']; ?>
            
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="<?php echo $CDT['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="javascript:void" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QFix28"></a>
        <div class="buy_now_box_heading">QFix28 - Pack of 20</div>
        <div class="buy_now_img_box"><a href="http://youtu.be/4AlRljSMCC0" target="_blank"><img src="images/QfixPro.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qfix28-pack-of-20']['desc']; ?>
          <br>
         <h2>
           
            <?php echo $symbol.' '.$QFix28['price']; ?>
         
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="<?php echo $QFix28['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="http://www.youtube.com/watch?v=4AlRljSMCC0&feature=youtu.be" target="_blank" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box">
        <div class="buy_now_box_heading">QFix33 - Pack of 20     </div>
        <div class="buy_now_img_box"><a href="http://youtu.be/4AlRljSMCC0"><img src="images/QfixPro.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qfix33-pack-of-20']['desc']; ?>
          <br>
             <h2>
           
            <?php echo $symbol.' '.$QFix33['price']; ?>
         
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="<?php echo $QFix33['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="http://www.youtube.com/watch?v=4AlRljSMCC0&feature=youtu.be" target="_blank" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QFix6"></a>
        <div class="buy_now_box_heading">QFix6</div>
        <div class="buy_now_img_box"><a href="buy-QFix-6.php"><img src="images/QfixMini.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qfix6']['desc']; ?>
          <br>
            <h2>
            
            <?php echo $symbol.' '.$QFix6['price']; ?>
          
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="<?php echo $QFix6['link']; ?>
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-QFix-6.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box">
        <div class="buy_now_box_heading">Information Guide     </div>
        <div class="buy_now_img_box"><a href="http://www.mcssl.com/SecureCart/ViewCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&sctoken=8e75333fb8564c608a6fe435c1459aef&bhcp=1" target="_blank">
        <img src="images/TL09INFORMATION_GUIDEweb.jpg" alt="" width="199" height="189" border="0">
        </a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['information-guide']['desc']; ?>
          <br>
            <h2>
           
            <?php echo $symbol.' '.$IG['price']; ?>
           
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="<?php echo $IG['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="javascript:void" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box">
        <div class="buy_now_box_heading">Practitioner Box     </div>
        <div class="buy_now_img_box"><img src="images/TL09QMAGNET_BOXweb.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		
		<?php echo $pro_list['practitioner-box']['desc']; ?>
          <br>
          <h2>
           
            <?php echo $symbol.' '.$PB['price']; ?>
            
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
		  </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="<?php echo $PB['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="javascript:void" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box">
        <div class="buy_now_box_heading">Q Separator    </div>
        <div class="buy_now_img_box"><a href="q-separator.php"><img src="images/TL09WOOD_BLOCK1web.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['q-separator']['desc']; ?>
          <br>
             <h2>
           
            <?php echo $symbol.' '.$QSep['price']; ?>
            
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="<?php echo $QSep['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
         
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="q-separator.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QBag"></a>
        <div class="buy_now_box_heading">Q Bag     </div>
        <div class="buy_now_img_box"><img src="images/TL09QMAGNETS_SILVER_BAGweb.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['q-bag']['desc']; ?>
          <br>
            <h2>
           
            <?php echo $symbol.' '.$QBag['price']; ?>
           
           
          </h2>
          <h2>
          <select class="currencySelector">         
           <option value="us"<?php echo ($_SESSION['site_currency']=='us' ? ' selected="true"' : ''); ?>>USD</option>
           <option value="aus"<?php echo ($_SESSION['site_currency']=='aus' ? ' selected="true"' : ''); ?>>AUD</option>         
           <option value="jap"<?php echo ($_SESSION['site_currency']=='jap' ? ' selected="true"' : ''); ?>>JPY</option>
           <option value="can"<?php echo ($_SESSION['site_currency']=='can' ? ' selected="true"' : ''); ?>>CAD</option>
           <option value="brit"<?php echo ($_SESSION['site_currency']=='brit' ? ' selected="true"' : ''); ?>>GBP</option>
           <option value="euro"<?php echo ($_SESSION['site_currency']=='euro' ? ' selected="true"' : ''); ?>>EUR</option>
           <option value="hong"<?php echo ($_SESSION['site_currency']=='hong' ? ' selected="true"' : ''); ?>>HKD</option>
           <option value="sing"<?php echo ($_SESSION['site_currency']=='sing' ? ' selected="true"' : ''); ?>>SGD</option>
           <option value="new"<?php echo ($_SESSION['site_currency']=='new' ? ' selected="true"' : ''); ?>>NZD</option>
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="<?php echo $QBag['link']; ?>" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="javascript:void" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>  
      
      
      
      
      
      
      
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

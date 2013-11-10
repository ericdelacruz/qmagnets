<?php session_start(); 
if(isset($_SESSION['curr']))
{
	$_SESSION['curr']="sgd";
}

?>
<?php $price_id=isset($_REQUEST['price_id'])?$_REQUEST['price_id']:"";  ?>
<?php include("admin/includes/include.php");  ?>
<!DOCTYPE HTML>
<html>
<head>
<?php include("includes/common_script.php"); ?>

<?php

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
      <div id="cse-results" style="display: none;"></div><div class="body_left_text_area" id="static-content">There are 13 available Q magnet models, starting from as little as $10 each. These can be added to your shopping cart and purchased individually below. For best value, choose one of the Q Bonus Packages, additional devices can be added if required. Or you can go to "How To Use" and purchase the recommended combinations for specific pain conditions or download the Fax Order Form. Orders over $200 receive free shipping anywhere in the world, see the shipping charges page for more detailed information. <br>
        <br>
       This is Pagina: SINGAPOORI
		 <?php /*?><?php echo "CURRENCY" . $_SESSION['curr'];if(($_SESSION['curr']!='yen')){ ?>
		 
		商品は日本での販売の為の薬事認可を取得しておりません。									
		従いまして、注文の際にはお客様ご自身の責任において注文していただけますよう宜しくお願いします。									
						
		
		
		 <?php }?><?php */?>
		
	  </div>
      <div class="buy_now_body_box">
        <div class="buy_now_box_heading">Q Bonus Package - Lower Back Pain     </div>
        <div class="buy_now_img_box"><a href="buy-details.php"><img src="images/buy_now_img3.jpg" alt="" width="199" height="189" border="0"></a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['q-bonus-package-lower-back-pain']['desc']; ?>
          <br>
           <h2>
           
            
            SGD $ 375.92
           
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=680
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
           
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box">
        <div class="buy_now_box_heading">Q Bonus Package - Complex Lower Back Pain    </div>
        <div class="buy_now_img_box"><img src="images/buy_now_img3.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['q-bonus-package-complex-lower-back-pain']['desc']; ?>
          <br>
            <h2>
           
         
            SGD $ 588.01
            
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=682
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details2.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box">
        <div class="buy_now_box_heading">Q Bonus Package - General Use   </div>
        <div class="buy_now_img_box"><img src="images/buy_now_img3.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['q-bonus-package-general-use']['desc']; ?>
          <br>
            <h2>
           
           
            SGD $ 323.85
         
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=678
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
			
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details3.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box">
        <div class="buy_now_box_heading">Q Bonus Package - Active Athlete     </div>
        <div class="buy_now_img_box"><img src="images/body_img.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['q-bonus-package-active-athlete']['desc']; ?>
          <br>
           <h2>
           
           
            SGD $ 748.03
          
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
          
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=684
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
          
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details4.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="OF50-3"></a>
        <div class="buy_now_box_heading">OF50-3</div>
        <div class="buy_now_img_box"><img src="images/OF50-3.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['of50-3']['desc']; ?>
          <br>
            <h2>
           
            
            SGD $ 212.09 	
        
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
          
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=676
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details5.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF28-6"></a>
        <div class="buy_now_box_heading">QF28-6 (Formerly ProQ)     </div>
        <div class="buy_now_img_box"><img src="images/QF28-6.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qf28-6-formerly-proq']['desc']; ?>
          <br>
           <h2>
          
            SGD $ 100.33
       
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=666
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details6.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF28-3"></a>
        <div class="buy_now_box_heading">QF28-3     </div>
        <div class="buy_now_img_box"><img src="images/QF28-3.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
<?php echo $pro_list['qf28-3']['desc']; ?>
		<br>
          <h2>
           
         
            SGD $ 87.63
           
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
       
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=664
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
          
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details7.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="HF28-6"></a>
        <div class="buy_now_box_heading">HF28-6 (Formerly ProH)  </div>
        <div class="buy_now_img_box"><img src="images/HF28-6.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['hf28-6formerly-proh']['desc']; ?>
          <br>
           <h2>
           
            
            SGD $ 110.49
           
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=674
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details8.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF20-5"></a>
        <div class="buy_now_box_heading">QF20-5 (Formerly PlusQ)    </div>
        <div class="buy_now_img_box"><img src="images/QF20-5.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qf20-5-formerly-plusq']['desc']; ?>
          <br>
            <h2>
           
           
            SGD $ 60.96
            
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=662
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details9.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF20-4"></a>
        <div class="buy_now_box_heading">QF20-4     </div>
        <div class="buy_now_img_box"><img src="images/QF20-4.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qf20-4']['desc']; ?>
          <br>
         <h2>
          
            SGD $ 57.15
            
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
          
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=660
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details10.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF20-3"></a>
        <div class="buy_now_box_heading">QF20-3    </div>
        <div class="buy_now_img_box"><img src="images/QF20-3.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php  echo $pro_list['qf20-3']['desc']; ?>
          <br>
          <h2>
           
            
            SGD $ 53.34
           
          </h2>
          <h2>
          <select name="cur"  onchange="javascript:ajax_curr(this.value)">          
           <option <?php if(isset($_SESSION['curr'])){echo "selected";}?>><?php if(isset($_SESSION['curr'])){echo strtoupper($_SESSION['curr']);} else { echo "Select Currency";}?></option>
           <option value="aud">AUD</option>
           <option value="usd">USD</option>
           <option value="yen">JPY</option>
           <option value="can">CAD</option>
           <option value="gbr">GBP</option>
           <option value="eur">EUR</option>
           <option value="hkg">HKD</option>
           <option value="sin">SJD</option>
           <option value="nzl">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
            
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=654
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
          
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details11.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF20-2"></a>
        <div class="buy_now_box_heading">QF20-2    </div>
        <div class="buy_now_img_box"><img src="images/QF20-2.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php  echo $pro_list['qf20-2']['desc']; ?>
		<br>
            <h2>
        
            SGD $ 49.53
                 
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=652
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
       
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details12.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF15-3"></a>
        <div class="buy_now_box_heading">QF15-3     </div>
        <div class="buy_now_img_box"><img src="images/QF15-3.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php  echo $pro_list['qf15-3']['desc']; ?>
          <br>
           <h2>
           
        
            SGD $ 31.75
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=650
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
         
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details13.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF15-2"></a>
        <div class="buy_now_box_heading">QF15-2      </div>
        <div class="buy_now_img_box"><img src="images/QF15-2.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php  echo $pro_list['qf15-2']['desc']; ?>
          <br>
           <h2>
           
          
            SGD $ 49.53
          
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=702
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
         
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details14.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF10-3"></a>
        <div class="buy_now_box_heading">QF10-3     </div>
        <div class="buy_now_img_box"><img src="images/QF10-3.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qf10-3']['desc']; ?>
          <br>
          <h2>
           
           
            SGD $ 29.21
            
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=648
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
			
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details15.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QF10-2"></a>
        <div class="buy_now_box_heading">QF10-2    </div>
        <div class="buy_now_img_box"><img src="images/QF10-2.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qf10-2']['desc']; ?>
          <br>
            <h2>
           
          
            SGD $ 17.78
           
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=644
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details16.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="Q6-1.5"></a>
        <div class="buy_now_box_heading">Q6-1.5 -Pack of 6 with plaster sheet     </div>
        <div class="buy_now_img_box"><img src="images/Q6-1.5X6.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['q6-15-pack-of-6-with-plaster-sheet']['desc']; ?>
          <br>
           <h2>
           
           
            SGD $ 41.91
            
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=686
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details17.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box">
        <div class="buy_now_box_heading">Q6-1.5 -Pack of 100     </div>
        <div class="buy_now_img_box"><img src="images/Q6-1.5X100.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">See Q6-1.5 above<br><br>


          <br>
           <h2>
           
            
            SGD $ 457.20 	
              
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=688
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details18.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="TPL"></a>
        <div class="buy_now_box_heading">Pointer Pal - Trigger Point Locator     </div>
        <div class="buy_now_img_box"><img src="images/Point-Pal.gif" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['pointer-pal-trigger-point-locator']['desc']; ?>
          <br>
           <h2>
           
         
            SGD $ 97.79
          
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=696
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
          
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details19.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="CDT"></a>
        <div class="buy_now_box_heading">Comffit Digital TENS     </div>
        <div class="buy_now_img_box"><img src="images/comffit-tens.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['comffit-digital-tens']['desc']; ?>
          <br>
           <h2>
           
           
            SGD $ 158.75
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=702
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
          
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="#" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QFix28"></a>
        <div class="buy_now_box_heading">QFix28 - Pack of 20    </div>
        <div class="buy_now_img_box"><img src="images/QfixPro.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qfix28-pack-of-20']['desc']; ?>
          <br>
           <h2>
           
            
            SGD $ 16.51
          
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=692
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
           
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="http://www.youtube.com/watch?v=4AlRljSMCC0&feature=youtu.be" target="_blank" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QFix33"></a>
        <div class="buy_now_box_heading">QFix33 - Pack of 20     </div>
        <div class="buy_now_img_box"><img src="images/QfixPro.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['qfix33-pack-of-20']['desc']; ?>
          <br>
            <h2>
           
        
            SGD $ 158.75
        
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=702
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
         
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="http://www.youtube.com/watch?v=4AlRljSMCC0&feature=youtu.be" target="_blank" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QFix6"></a>
        <div class="buy_now_box_heading">QFix6    </div>
        <div class="buy_now_img_box"><img src="images/QfixMini.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text"><?php echo $pro_list['qfix6']['desc']; ?>
          <br>
           <h2>
           
           
            SGD $ 3.75
            
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=694
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
			
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="buy-details20.php" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="InformationGuide"></a>
        <div class="buy_now_box_heading">Information Guide     </div>
        <div class="buy_now_img_box"><a href="http://www.mcssl.com/SecureCart/ViewCart.aspx?mid=BDA24534-D9B5-4373-886C-06EB27E1F088&sctoken=8e75333fb8564c608a6fe435c1459aef&bhcp=1" target="_blank">
        <img src="images/TL09INFORMATION_GUIDEweb.jpg" alt="" width="199" height="189" border="0">
        </a>
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['information-guide']['desc']; ?>
          <br>
            <h2>
           
            SGD $ 20.96
       
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
           
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=698
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
          
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="javascript:void" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="PratitionerBox"></a>
        <div class="buy_now_box_heading">Practitioner Box     </div>
        <div class="buy_now_img_box"><img src="images/TL09QMAGNET_BOXweb.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['practitioner-box']['desc']; ?>
          <br>
          <h2>
           
    
            SGD $ 82.55
           
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=700
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
        
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="javascript:void" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QSeparator"></a>
        <div class="buy_now_box_heading">Q Separator    </div>
        <div class="buy_now_img_box"><img src="images/TL09WOOD_BLOCK1web.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['q-separator']['desc']; ?>
          <br>
           <h2>
            
            
            SGD $ 158.75
           
          </h2>
          <h2>
          <select name="cur"  onchange="javascript:ajax_curr(this.value)">          
           <option <?php if(isset($_SESSION['curr'])){echo "selected";}?>><?php if(isset($_SESSION['curr'])){echo strtoupper($_SESSION['curr']);} else { echo "Select Currency";}?></option>
           <option value="aud">AUD</option>
           <option value="usd">USD</option>
           <option value="yen">JPY</option>
           <option value="cad">CAD</option>
           <option value="gbp">GBP</option>
           <option value="eur">EUR</option>
           <option value="hkd">HKD</option>
           <option value="sgd">SGD</option>
           <option value="nzd">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
           
            
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=702
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
          </div>
          <!--<div class="click_link"><a href="#">Click for More Details >></a></div> -->
        </div>
         <a href="javascript:void" style="color:#CCB363; font-weight:bold; font-size:14px; text-decoration:none">Click for More Details</a>
      </div>
      
      <div class="buy_now_body_box"><a id="QBag"></a>
        <div class="buy_now_box_heading">Q Bag     </div>
        <div class="buy_now_img_box"><img src="images/TL09QMAGNETS_SILVER_BAGweb.jpg" alt="" width="199" height="189" border="0">
       
        </div>
        <div class="buy_now_img_text">
		<?php echo $pro_list['q-bag']['desc']; ?>
          <br>
           <h2>
           
            
            SGD $ 6.35
          
           
          </h2>
          <h2>
           <select onChange="moveTo(this.options[this.selectedIndex].value);">         
           <option value=""><?php if(basename($_SERVER['PHP_SELF'])=='singbuy.php'){ echo "SGD"; }  ?></option>
           <option value="ausbuy.php">AUD</option>
           <option value="buy.php">USD</option>
           <option value="japbuy.php">JPY</option>
           <option value="canbuy.php">CAD</option>
           <option value="britbuy.php">GBP</option>
           <option value="eurobuy.php">EUR</option>
           <option value="hongbuy.php">HKD</option>
           <option value="singbuy.php">SGD</option>
           <option value="newbuy.php">NZD</option>
           
          </select>
          </h2>
          <div class="add_to_shopping_button">
          
            
            <a href="https://pj139.infusionsoft.com/app/manageCart/addProduct?productId=690
" target="_blank"><img src="images/add_to_shopping_button.png" alt="" width="154" height="27" border="0"></a>
            
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

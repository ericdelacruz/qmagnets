

 <!--<div class="translation-links">
  <a class="english" data-lang="English"><img alt="English" title="English" src="En_flag.png"></a>
  <a class="spanish" data-lang="Spanish"><img alt="Spanish" title="Spanish" src="Es_flag.png"></a>
  <a class="french" data-lang="French"><img alt="French" title="French" src="Fr_flag.png"></a>
  <a class="german" data-lang="German"><img alt="German" title="German" src="De_flag.png"></a>
</div>-->

<script>
$(document).ready(function() {
	$('.flag_img a').click(function(){
		$('#currencyInput .currencyInput').val($(this,'a').attr('rel'));
		$('#currencyInput').submit();
		return false;
	});

	$('.currencySelector').change(function(){
		$('#currencyInput .currencyInput').val($(this).val());
		$('#currencyInput').submit();
		return false;
	});
});
</script>

<div class="top_area">

          <div class="local_bg">Local Currency Purchase</div>
          <div class="flag_icon_area translation-links">
		  <form method="post" id="currencyInput"><input type="hidden" name="currency" class="currencyInput" /></form>
           	<div class="flag_img"><a href="" rel="us"><img src="images/flag_img8.jpg" alt="" width="23" height="14" border="0" title="USD"></a></div>
            <div class="flag_img"> <a href="products.php" rel="aus"><img src="images/flag_img1.jpg" alt="" width="23" height="14" border="0" title="AUD"></a></div>
            <div class="flag_img"><a href="products.php" rel="can"><img src="images/flag_img2.jpg" alt="" width="23" height="14" border="0" title="CAD"></a></div>             
            <div class="flag_img"><a href="products.php" rel="hong"> <img src="images/flag_img3.jpg" alt="" width="23" height="14" border="0" title="HKD" ></a></div>
            <div class="flag_img"><a href="products.php" rel="jap"><img src="images/flag_img4.jpg" alt="" width="23" height="14" border="0" title="YEN"></a></div>
            <div class="flag_img"><a href="products.php" rel="new"><img src="images/flag_img5.jpg" alt="" width="23" height="14" border="0" title="NZD"></a></div>
            <div class="flag_img"><a href="products.php" rel="sing"><img src="images/flag_img6.jpg" alt="" width="23" height="14" border="0" title="SGD"></a></div>
            <div class="flag_img"><a href="products.php" rel="brit"><img src="images/flag_img7.jpg" alt="" width="23" height="14" border="0" title="GBP"></a></div>            
            <div class="flag_img" style="padding:0px; margin:0px;"><a href="products.php" rel="euro"><img src="images/flag_img9.jpg" alt="" width="23" height="14" border="0" title="EUR"></a></div>
          </div>
</div>


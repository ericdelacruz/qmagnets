<?php  
include("includes/include.php");
if($_SESSION['login_id']=='')
	{
	 echo "<script>window.location.href='index.php'</script>";
	}
	
	/*include("fckeditor/fckeditor.php") ;
    $sBasePath="fckeditor/";*/
	
    $submit=isset($_REQUEST['submit'])?$_REQUEST['submit']:""; 
	$address=isset($_REQUEST['address'])?$_REQUEST['address']:"";
	$email =isset($_REQUEST['email'])?$_REQUEST['email']:"";	
	$phoneaus=isset($_REQUEST['phoneaus'])?$_REQUEST['phoneaus']:"";
	$linkedin=isset($_REQUEST['linkedin'])?$_REQUEST['linkedin']:"";
	$google=isset($_REQUEST['google'])?$_REQUEST['google']:"";
	$fax=isset($_REQUEST['fax'])?$_REQUEST['fax']:"";
	$phone=isset($_REQUEST['phone'])?$_REQUEST['phone']:"";
	$facebook=isset($_REQUEST['facebook'])?$_REQUEST['facebook']:"";
	$twitter=isset($_REQUEST['twitter'])?$_REQUEST['twitter']:"";
	$blog=isset($_REQUEST['blog'])?$_REQUEST['blog']:"";
	$youtube=isset($_REQUEST['youtube'])?$_REQUEST['youtube']:"";
	
	$retcode =isset($_REQUEST['retcode'])?$_REQUEST['retcode']:"";
	
	if(!empty($submit))
	{
		
	
	
	   $rs=mysql_query("update admin_information set  admin_email='".$email."', address='".$address."' , linkedin='".$linkedin."', google='".$google."', youtube='".$youtube."', fax='".$fax."', phone='".$phone."',twitter='".$twitter."', facebook='".$facebook."',phoneaus='".$phoneaus."',blog='".$blog."'
	    
	 	where fld_id='".$_SESSION['login_id']."' ");  
	 if($rs)
	 {
	   echo "<script>window.location.href='site_config.php?retcode=1'</script>";
	 }
	 else
	 {
	    echo "<script>window.location.href='site_config.php?retcode=2'</script>";
	 }
	}
	  $retcode=isset($_REQUEST['retcode'])?$_REQUEST['retcode']:""; 

			if($retcode==1)
			{
			 $msg="Your site configurations is saved.";
			}
			if($retcode==2)
			{
			 $msg="Failed to save site configurations.";
			}	
$row_ad_mail=mysql_fetch_array(mysql_query("select * from admin_information where fld_id='".$_SESSION['login_id']."' "));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/common_script.php");?>
<script language="javascript">
 function check()
 {
 
 /*++++++++++++++++++no blank characters+++++++++++++++++++++*/
    //var whiteSpace = " ";
	//var start = 0;
	
 /*++++++++++++++++++no blank characters+++++++++++++++++++++*/ 
 if(document.getElementById('admin_email1').value=='')
  {
	 // document.getElementById('msg_error').innerHTML="Please enter your old password.";
	  document.getElementById('admin_email1').style.borderColor="red";
	  document.getElementById('admin_email1').focus();
	  return false;
  }
 else
  {
   document.getElementById('admin_email1').style.borderColor="";
  }
 

	 if(document.getElementById('admin_phone1').value=='' )   
	{
	//document.getElementById('msg_error').innerHTML="Please enter your retype password."; 
		document.getElementById('admin_phone1').style.borderColor="red";
		document.getElementById('admin_phone1').focus();
		 return false;
	}
	else
    { 
      document.getElementById('admin_phone1').style.borderColor="";
    }
	
  
	  
 }
 
function cls()
 {
    //alert("Close");
    document.getElementById('success').style.display='none';
	//document.getElementById('success').style.display='none';
 }
</script>
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
	   width : "400",
		mode : "textareas",		
		
		theme : "simple"
	});
</script>





</head>
<body id="homepage">
<!-- Top Header Start -->
<?php include("includes/header.php");?>
<!-- Top Header End -->
<!-- Top Breadcrumb Start -->
<?php include("includes/breadcrumb.php");?>
<!-- Top Breadcrumb End -->
<!-- Right Side/Main Content Start -->
<div id="rightside">
  <!-- Content Box Start -->
  <?php //include("includes/bar.php");?>
  <!-- Content Box End -->
  <!-- Graphs Box Start -->
  <?php //include("includes/graph.php");?>
  <!-- Graphs Box End -->
  <!-- Alternative Content Box Start -->
  <?php //include("includes/content.php");?>
  <!-- Alternative Content Box End -->
  <?php //include("includes/form.php");?>
  <?php //include("includes/display.php");?>
  <div style="clear:both;"></div>
  <!-- Content Box Start -->
   <div class="contentcontainer">
    <div class="headings alt">
      <h2>Site Configuration Box</h2>
    </div>
    <div style="clear:both;"></div>
   
    <?php
			if($retcode==1){
			?>
    <div class="status success" id="success"  onclick="cls()">
      <p class="closestatus"><a href="javascript:void(0)" title="Close"  onclick="cls()">x</a></p>
      <p><img src="img/icons/icon_success.png" alt="Success" /><span>Success!</span> <?php echo $msg; ?></p>
    </div>
    <?php 
		  }
		  if($retcode==2){
		 ?>
    <div class="status error" id="error">
      <p class="closestatus"><a href="javascript:void(0)" title="Close"  onclick="cls()">x</a></p>
      <p><img src="img/icons/icon_error.png" alt="Error" /><span>Error!</span><?php echo $msg; ?></p>
    </div>
    <?php
		 }
		 ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return check();"  >
      <div class="contentbox">
	  
		
        <p>
          <label for="textfield"><strong>Address:</strong></label>
          <textarea  name="address"  id="address"  rows="5" cols="15" style="width: 50%"><?php echo $row_ad_mail['address']; ?></textarea>
        </p>
        
       
 
        <p>
          <label for="textfield"><strong> Email:</strong></label>
          <input type="text" name="email" id="email" value="<?php echo $row_ad_mail['admin_email']; ?>"  autocomplete="off" class="inputbox" />
          <br />
          
        </p>
        
         <p>
          <label for="textfield"><strong> Phone from Australia:</strong></label>
          <input type="text" name="phoneaus" id="phoneaus" value="<?php echo $row_ad_mail['phoneaus']; ?>"  autocomplete="off" class="inputbox" />
          <br />
          
        </p>
        
        <p>
          <label for="textfield"><strong> Phone from rest of the world:</strong></label>
          <input type="text" name="phone" id="phone" value="<?php echo $row_ad_mail['phone']; ?>"  autocomplete="off" class="inputbox" />
          <br />
          
        </p>
        
         <p>
          <label for="textfield"><strong> Fax:</strong></label>
          <input type="text" name="fax" id="fax" value="<?php echo $row_ad_mail['fax']; ?>"  autocomplete="off" class="inputbox" />
          <br />
          
        </p>
        
        
		<p>
          <label for="textfield"><strong> Facebook:</strong></label>
          <input type="text" name="facebook" id="facebook" value="<?php echo $row_ad_mail['facebook']; ?>"  autocomplete="off" class="inputbox" />
          <br />
          
        </p>
		
		<p>
          <label for="textfield"><strong> Twitter:</strong></label>
          <input type="text" name="twitter" id="twitter" value="<?php echo $row_ad_mail['twitter']; ?>"  autocomplete="off" class="inputbox" />
          <br />
          
        </p>
        
        <p>
          <label for="textfield"><strong> Linkedin:</strong></label>
          <input type="text" name="linkedin" id="linkedin" value="<?php echo $row_ad_mail['linkedin']; ?>"  autocomplete="off" class="inputbox" />
          <br />
          
        </p>
        
        <p>
          <label for="textfield"><strong> Youtube:</strong></label>
          <input type="text" name="youtube" id="youtube" value="<?php echo $row_ad_mail['youtube']; ?>"  autocomplete="off" class="inputbox" />
          <br />
          
        </p>
        
        <p>
          <label for="textfield"><strong> Google+:</strong></label>
          <input type="text" name="google" id="google" value="<?php echo $row_ad_mail['google']; ?>"  autocomplete="off" class="inputbox" />
          <br />
          
        </p>
        
         <p>
          <label for="textfield"><strong> Blog:</strong></label>
          <input type="text" name="blog" id="blog" value="<?php echo $row_ad_mail['blog']; ?>"  autocomplete="off" class="inputbox" />
          <br />
          
        </p>
        
        
        
        
       
        
        <input type="submit"  class="btn" name="submit" value="Save"/>
      </div>
    </form>
  </div>
  <!-- Content Box End -->
  <?php include("includes/footer.php");?>
</div>
<!-- Right Side/Main Content End -->
<!-- Left Dark Bar Start -->
<?php include("includes/leftpanel.php");?>
<!-- Left Dark Bar End -->
<!-- Notifications Box/Pop-Up Start -->
<?php //include("includes/notifications.php");?>
<!-- Notifications Box/Pop-Up End -->
<script type="text/javascript" src="http://dwpe.googlecode.com/svn/trunk/_shared/EnhanceJS/enhance.js"></script>
<script type='text/javascript' src='http://dwpe.googlecode.com/svn/trunk/charting/js/excanvas.js'></script>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js'></script>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js'></script>
<script type='text/javascript' src='scripts/jquery.wysiwyg.js'></script>
<script type='text/javascript' src='scripts/visualize.jQuery.js'></script>
<script type="text/javascript" src='scripts/functions.js'></script>
<!--[if IE 6]>
    <script type='text/javascript' src='scripts/png_fix.js'></script>
    <script type='text/javascript'>
      DD_belatedPNG.fix('img, .notifycount, .selected');
    </script>
    <![endif]-->
</body>
</html>

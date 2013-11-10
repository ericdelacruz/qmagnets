<?php  
include("includes/include.php");
if($_SESSION['login_id']=='')
	{
	 echo "<script>window.location.href='index.php'</script>";
	}
ini_set('max_upload_filesize', 8388608);  
//ini_set('memory_limit', '-1');	
include('thump_function.php');

$page=isset($_REQUEST['page'])?$_REQUEST['page']:"";	
$mode=isset($_REQUEST['mode'])?$_REQUEST['mode']:"";

$service_id=isset($_REQUEST['service_id'])?$_REQUEST['service_id']:"";
$service_name=isset($_REQUEST['service_name'])?$_REQUEST['service_name']:"";
$description=isset($_REQUEST['description'])?$_REQUEST['description']:"";

$submit=isset($_REQUEST['submit'])?$_REQUEST['submit']:"";
$image1=isset($_REQUEST['image1'])?$_REQUEST['image1']:"";
$timage1=isset($_REQUEST['timage1'])?$_REQUEST['timage1']:"";



if($_FILES['image']['name']!="")
{
$image=time().'.'.substr($_FILES['image']['name'],strlen($_FILES['image']['name'])-3,3);
}
else
{
$image="";
}

if($_FILES['timage']['name']!="")
{
$timage='t'.time().'.'.substr($_FILES['timage']['name'],strlen($_FILES['timage']['name'])-3,3);
}
else
{
$timage="";
}
/*if($_FILES['mimage']['name']!="")
{
$mimage='m'.time().'.'.substr($_FILES['mimage']['name'],strlen($_FILES['mimage']['name'])-3,3);
}
else
{
$mimage="";
}*/

$pathToImages = 'service_images/normal_img/';
$pathToThumbs = 'service_images/thumb_img/';
/*$pathToMThumbs = 'product_images/middle_img/';*/
$thumbWidth   = 205;
$thumbHeight  = 276;
/*$mthumbWidth   = 245;
$mthumbHeight  = 210;*/
$dest="service_images/normal_img/".$image;
$dest1="service_images/thumb_img/".$timage;
/*$dest2="product_images/normal_img/".$mimage;*/

if(!empty($submit))
{

     move_uploaded_file($_FILES['image']['tmp_name'],$dest);
	 move_uploaded_file($_FILES['timage']['tmp_name'],$dest1);
	 /*move_uploaded_file($_FILES['mimage']['tmp_name'],$dest2);*/
	 
  if($mode=='add')
   {  	
   //print_r($_POST); exit;
    $sql_ins="INSERT INTO `service` (`service_name` ,`description` ,`input_date`,`image`,`thumb`)
	VALUES ('".$service_name."','".$description."','".date('Y-m-d')."','".$image."','".$timage."')"; 
	$res_ins=mysql_query($sql_ins);	
	
   }
   if($mode=='edit')
	 {
		if($_FILES['image']['name']=='')
		{
		$image=$image1;
		}
		else
		{
		   if(is_file($pathToImages.$image1))
			{
			  @unlink($pathToImages.$image1);			  
			}			
			move_uploaded_file($_FILES['image']['tmp_name'],$dest);	        
		 }
		 
	   if($_FILES['timage']['name']=='')
		{
		$timage=$timage1;
		}
		else
		{		  
			if(is_file($pathToImages.$timage1))
			{
			  @unlink($pathToImages.$timage1);			 
			}			
	        move_uploaded_file($_FILES['timage']['tmp_name'],$dest1);	       
		 }
		 
	/* if($_FILES['mimage']['name']=='')
		{
		$mimage=$mimage1;
		}
		else
		{		  
			if(is_file($pathToImages.$mimage1))
			{
			  @unlink($pathToImages.$mimage1);			 
			}			
	        move_uploaded_file($_FILES['timage']['tmp_name'],$dest2);	       
		 }*/
		
	   $sql_ins="update `service` set
		  `service_name`='".$service_name."',	  
		  `description`= '".$description."',
		  `image`= '".$image."',
		   `thumb`= '".$timage."'
		 
		   where service_id='".$service_id."'"; 
		$res_ins=mysql_query($sql_ins);	 

	 }  
    ?>
   
	   <script language="javascript">
        window.location.href='manage_service.php?retcode=1?page=<?php echo $page; ?>';
       </script>
   <?php

}
$sql_show="select * from service where service_id='".$service_id."' ";
$res_show=mysql_query($sql_show);
$row_user=mysql_fetch_array($res_show);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/common_script.php");?>
<script language="javascript" src="js/jquery.js"></script>
<script language="javascript" type="text/javascript">


 function validate_product(str)
 { 
 
 if(document.getElementById('service_name').value=='')
    {
	 // document.getElementById('msg_error').innerHTML="Please enter your old password.";
	  document.getElementById('service_name').style.borderColor="red";
	  document.getElementById('service_name').focus();
	  return false;
     }
 else
  {
	 document.getElementById('service_name').style.borderColor="";
   }
   
  if(document.getElementById('description').value=='')
    {
	 // document.getElementById('msg_error').innerHTML="Please enter your old password.";
	  document.getElementById('description').style.borderColor="red";
	  document.getElementById('description').focus();
	  return false;
     }
 else
  {
	 document.getElementById('description').style.borderColor="";
   } 
   

   if(str=='add')
    {
	 var imagePath = document.application_form.image.value;
	 var pathLength = imagePath.length;
	 var lastDot = imagePath.lastIndexOf(".");
	 var fileType = imagePath.substring(lastDot,pathLength);
	 if((fileType == ".gif") || (fileType == ".jpg") || (fileType == ".png") || (fileType == ".GIF") || (fileType == ".JPG") || (fileType == ".PNG")) {
	  return true;
	 } else {
	  document.getElementById('msg_error').innerHTML="Only upload gif,GIF,jpg,JPG,png,PNG extension image."; 	  
	  return false;
 
    	}
	
    }
	
	if(str=='edit')
    {
	 var imagePath = document.application_form.image.value;
	 var pathLength = imagePath.length;
	 var lastDot = imagePath.lastIndexOf(".");
	 var fileType = imagePath.substring(lastDot,pathLength);
		 if(document.application_form.image.value!='')
		 {
		  if((fileType == ".gif") || (fileType == ".jpg") || (fileType == ".png") || (fileType == ".GIF") || (fileType == ".JPG") || (fileType == ".PNG")) {
		  return true;
		  } else {
		  document.getElementById('msg_error').innerHTML="Only upload gif,GIF,jpg,JPG,png,PNG extension image."; 	  
		  return false;
	 
			}
		 }	
	
    }
   
	 
} 
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
         <div class="contentcontainer med left">
            <div class="headings alt">
                <h2>Mehndi & Salon Add Service Box</h2>
            </div>
			<div style="clear:both;"></div>
			<!-- <div id="msg_error" style="color:#FF0000; font-weight:bold;">
                <h2><?php echo $msg; ?></h2>
            </div>-->
			<?php
			if($retcode==1){
			?>
		<div class="status success" id="success"  onclick="cls()">
        	<p class="closestatus"><a href="change_admin_pass.php" title="Close" >x</a></p>
        	<p><img src="img/icons/icon_success.png" alt="Success" /><span>Success!</span> <?php echo $msg; ?></p>
        </div>
		 <?php 
		  }
		  if($retcode==2){
		 ?>
		 <div class="status error" id="error">
        	<p class="closestatus"><a href="change_admin_pass.php" title="Close"  onclick="cls()">x</a></p>
        	<p><img src="img/icons/icon_error.png" alt="Error" /><span>Error!</span><?php echo $msg; ?></p>
        </div>
		 <?php
		 }
		 ?>
			  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="application_form" onSubmit="return validate_product('<?php echo $mode ?>');" enctype="multipart/form-data">
                                  <input type="hidden" name="mode"  id="mode" value="<?php echo $mode; ?>" />
                                  <input type="hidden" name="service_id" value="<?php echo $service_id; ?>" />
                                  <input type="hidden" name="page" value="<?php echo $page; ?>" />
            <div class="contentbox">
            	
            		
					
					<p>
                        <label for="textfield"><strong>Service Name:</strong></label>
                        <input type="text" name="service_name" id="service_name"   value="<?php echo $row_user['service_name']; ?>"   autocomplete="off" class="inputbox" /> 
                       <!-- <span class="smltxt">(This is an example of a small descriptive text for input)</span>-->
                    </p>
					<p>
                        <label for="textfield"><strong>Description:</strong></label>
                      <textarea class="text-input textarea" id="wysiwyg" name="description" rows="10" cols="75"><?php echo $row_user['description']; ?></textarea>
                        <!--<span class="smltxt">(This is an example of a small descriptive text for input)</span>-->
                    </p>
					<p>
                        <label for="textfield"><strong>Service Small Image:</strong></label>
                        <input type="file" name="timage" id="timage" /> <!--<img src="img/loading.gif" alt="Loading" /> Uploading... -->
                        <span class="smltxt">(Small image width 231px, height 163px)</span>
                    </p>
					<?php
									if($mode=='edit')
									{
									?>
                              <tr>
                                <td align="right" >
                                  <input type="hidden" name="timage1" value="<?php echo $row_user['thumb']; ?>" style="width:220px;"/> </td>
                                <td>
                                  <?php
									   if(is_file($pathToThumbs.$row_user['thumb']))
									   {
									  ?>
                                  <img src="<?php echo $pathToThumbs.$row_user['thumb']; ?>" width="100" height="120"  />
                                      
                                  <?php
									   }
									   ?>
								</td>							  
						      </tr>
                              <?php
									}
									?> 
						<p>
                        <label for="textfield"><strong>Service Large Image:</strong></label>
                        <input type="file" name="image" id="image" /> <!--<img src="img/loading.gif" alt="Loading" /> Uploading... -->
                        <span class="smltxt">(Small image width 279px, height 152px)</span>
                    </p>
					<?php
									if($mode=='edit')
									{
									?>
                              <tr >
                                <td >
                                  <input type="hidden" name="image1" value="<?php echo $row_user['image']; ?>" style="width:220px;"/> </td>
                                <td>
                                  <?php
									   if(is_file($pathToImages.$row_user['image']))
									   {
									   
									  ?>
                                  <img src="<?php echo $pathToImages.$row_user['image']; ?>"  width="150" height="190"/>
                                      
                                  <?php
									   }
									   ?>                                </td>							  
						      </tr>
                              <?php
									}
									?>
									<br/>
									<br/>
                    <!--<p>
                        <label for="errorbox"><span class="red"><strong>Missing field:</strong></span></label>
                        <input type="text" id="errorbox" class="inputbox errorbox" /> <img src="img/icons/icon_missing.png" alt="Error" /> <br />
                        <span class="smltxt red">(This is some warning text for the above field)</span>
                    </p>-->

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

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


$submit=isset($_REQUEST['submit'])?$_REQUEST['submit']:"";
$pdf1=isset($_REQUEST['pdf1'])?$_REQUEST['pdf1']:"";

$pathToHandbook = 'service_pdf/';

$dest="service_pdf/".$pdf;


if($_FILES['pdf']['name']!="")
{
$pdf=time().'.'.substr($_FILES['pdf']['name'],strlen($_FILES['pdf']['name'])-3,3);
}
else
{
$pdf="";
}

$pathToImages = 'service_pdf/';

if(!empty($submit))
{

     move_uploaded_file($_FILES['pdf']['tmp_name'],$dest);
	
	 
  if($mode=='add')
   {  	
   //print_r($_POST); exit;
    $sql_ins="INSERT INTO `service` (`service_name` `input_date`,`pdf`)
	VALUES ('".$service_name."','".date('Y-m-d')."','".$pdf."')"; 
	$res_ins=mysql_query($sql_ins);	
	
   }
   if($mode=='edit')
	 {
		if($_FILES['pdf']['name']=='')
		{
		$image=$image1;
		}
		else
		{
		   if(is_file($pathToHandbook.$pdf1))
			{
			  @unlink($pathToHandbook.$pdf1);			  
			}			
			move_uploaded_file($_FILES['pdf']['tmp_name'],$dest);	        
		 }
		 

		
	   $sql_ins="update `service` set
                   `pdf`= '".$pdf."'
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
   


   if(str=='add')
    {
	 var pdfPath = document.application_form.pdf.value;
	 var pathLength = pdfPath.length;
	 var lastDot = pdfPath.lastIndexOf(".");
	 var fileType = pdfPath.substring(lastDot,pathLength);
	 if((fileType == ".pdf") || (fileType == ".PDF")) {
	  return true;
	 } else {
	  document.getElementById('msg_error').innerHTML="Only upload pdf extension file."; 	  
	  return false;
 
    	}
	
    }
	
	if(str=='edit')
    {
	 var pdfPath = document.application_form.pdf.value;
	 var pathLength = pdfPath.length;
	 var lastDot = pdfPath.lastIndexOf(".");
	 var fileType = pdfPath.substring(lastDot,pathLength);
		 if(document.application_form.pdf.value!='')
		 {
		  if((fileType == ".pdf") || (fileType == ".PDF")) {
		  return true;
		  } else {
		  document.getElementById('msg_error').innerHTML="Only upload pdf extension file."; 	 
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
                <h2>Customizer Handbook Add/Edir Upload Box</h2>
            </div>
			<div style="clear:both;"></div>
			 <div id="msg_error" style="color:#FF0000; font-weight:bold;">
                <h2><?php echo $msg; ?></h2>
            </div>
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
                        <label for="textfield"><strong>Handbook Name:</strong></label>
                        <input type="text" name="service_name" id="service_name"   value="<?php echo $row_user['service_name']; ?>"   autocomplete="off" class="inputbox" /> 
                       <!-- <span class="smltxt">(This is an example of a small descriptive text for input)</span>-->
                    </p>
					
					
                        <label for="textfield"><strong>Customiser Handbook Pdf:</strong></label>
                        <input type="file" name="pdf" id="pdf" /> <!--<img src="img/loading.gif" alt="Loading" /> Uploading... -->
                        
                    </p>
					<?php
									if($mode=='edit')
									{
									?>
                              <tr >
                                <td >
                                  <input type="hidden" name="pdf1" value="<?php echo $row_user['pdf']; ?>" style="width:220px;"/> </td>
                                <td>
                                  <?php
									   if(is_file($pathToHandbook.$row_user['pdf']))
									   {
									   
									  ?>
                                  <img src="<?php echo $pathToHandbook.$row_user['pdf']; ?>"  width="150" height="190"/>
                                      
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

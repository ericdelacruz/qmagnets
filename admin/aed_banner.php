<?php  
include("includes/include.php");
if($_SESSION['login_id']=='')
{
	echo "<script>window.location.href='index.php'</script>";
}
ini_set('max_upload_filesize', 8388608);  
//ini_set('memory_limit', '-1');	
//include('thump_function.php');

$page=isset($_REQUEST['page'])?$_REQUEST['page']:"";	
$mode=isset($_REQUEST['mode'])?$_REQUEST['mode']:"";

$banid=isset($_REQUEST['banid'])?$_REQUEST['banid']:"";
$title=isset($_REQUEST['title'])?$_REQUEST['title']:"";
$body=isset($_REQUEST['body'])?$_REQUEST['body']:"";
$submit=isset($_REQUEST['submit'])?$_REQUEST['submit']:"";
$apply=isset($_REQUEST['apply'])?$_REQUEST['apply']:"";
$image1=isset($_REQUEST['image1'])?$_REQUEST['image1']:"";


if($_FILES['image']['name']!="")
{
	 $image=time().'.'.end(explode(".",$_FILES['image']['name']));
}
else
{
	$image="";
}



$pathToImages = 'banner/';


 $dest=$pathToImages.$image; 

$maxheight=312;
$maxwidth=920;
	
if(!empty($submit))
{
	$valid=1;

	if($mode=='add' && $valid==1 )
   	{
		if(!is_uploaded_file($_FILES['image']['tmp_name']))
		{
			$err="Please browse an image";
			$valid=0;
		}
	}
	
	if(is_uploaded_file($_FILES['image']['tmp_name']) && $valid==1 )
	{
		$imgproperties1=getimagesize($_FILES['image']['tmp_name']); //0=width, 1=height, 2=type, 3=Attribute, mime=image type    	
		if($imgproperties1[0]<>$maxwidth && $valid=1)
		{
			$err="Width: ".$imgproperties1[0]."px, Upload Image of mentioned width";
			$valid=0;
		}
		if($imgproperties1[1]<>$maxheight && $valid=1)
		{
			$err="Height: ".$imgproperties1[1]."px, Upload Image of mentioned Height";
			$valid=0;
		}
	}
	
	if($valid==1 && $mode=='add')
   	{  	
		move_uploaded_file($_FILES['image']['tmp_name'],$dest);

  		$sql_ins="INSERT INTO `banner` set `banner`='".$image."'"; 
		$res_ins=mysql_query($sql_ins);	
		
		if(!mysql_error())
		{
		?>
			<script language="javascript">
            	window.location.href='manage_banner.php?retcode=1&page=<?php echo $page; ?>';
            </script>
        <?php
		}	
	}
	
		
	if($valid==1 && $mode=='edit')
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
		 
		$sql_ins="update `banner` set `banner`= '".$image."' where `banid`='".$banid."'";
		$res_ins=mysql_query($sql_ins);	 
		
		if(!mysql_error())
		{ 
    	?>
    		<script language="javascript">
        		window.location.href='manage_banner.php?retcode=1?page=<?php echo $page; ?>';
       		</script>
   		<?php
		}
	} 	
}
  


       
    if(!empty($apply))
	{
		//print_r($_POST); exit;
    	$valid=1;
		if($mode=='add' && $valid==1 )
   		{
			if(!is_uploaded_file($_FILES['image']['tmp_name']))
			{
			$err="Please browse an image";
			$valid=0;
			}
		}
		
		if(is_uploaded_file($_FILES['image']['tmp_name']) && $valid==1 )
		{
			$imgproperties1=getimagesize($_FILES['image']['tmp_name']); //0=width, 1=height, 2=type, 3=Attribute, mime=image type    	
			if($imgproperties1[0]<>$maxwidth && $valid=1)
			{
				$err="Width: ".$imgproperties1[0]."px, Upload Image of mentioned width";
				$valid=0;
			}
			if($imgproperties1[1]<>$maxheight && $valid=1)
			{
				$err="Height: ".$imgproperties1[1]."px, Upload Image of mentioned Height";
				$valid=0;
			}
		}
		
		if($valid==1 && $mode=='add')
   		{  	
			move_uploaded_file($_FILES['image']['tmp_name'],$dest);

  			$sql_ins="INSERT INTO `banner` set `banner`='".$image."'"; 
			$res_ins=mysql_query($sql_ins);	
			$ids=mysql_insert_id();
			
    			 header("location:aed_banner.php?banid=$ids&mode=edit&page=$page");
				
		}
	
		if($valid==1 && $mode=='edit')
		{
			if($_FILES['image']['name']=='')
			{
				$image=$image1;
			}
			else
			{
				if(is_file($pathToImages.$image1))
				{
			  		unlink($pathToImages.$image1);			  
				}			
			move_uploaded_file($_FILES['image']['tmp_name'],$dest);	        
		 	}
		 
		$sql_ins="update `banner` set `banner`= '".$image."' where `banid`='".$banid."'";
		$res_ins=mysql_query($sql_ins);
		header("location:aed_banner.php?banid=$banid&mode=edit&page=$page");
	
		}
	
	}
    

$sql_show="select * from banner where banid='".$banid."' ";
$res_show=mysql_query($sql_show);
$row_user=mysql_fetch_array($res_show);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/common_script.php");?>
<script language="javascript" src="js/jquery.js"></script>
<script language="javascript" type="text/javascript">
<style type='text/css'> .test1{float:center;margin:.5em 0;margin-right:10px;border:0px solid #999; padding:2px; width: 300px}</style>
<script language="JavaScript" type="text/javascript">
function getImgSize(imgSrc)
{
var newImg = new Image();
newImg.src = imgSrc;
var width = newImg.width;

if (width > 300)
{

document.getElementById('img_2').className = 'test1';


}
else
{
alert ('width is: ' + width + ' so Image is correct');
}
}
</script>
<script language="JavaScript" type="text/javascript">
function validate_management(str)
{ 
   if(document.getElementById('title').value=='')
     {
	  document.getElementById('msg_error').innerHTML="Please enter the title for the banner.";
	  document.getElementById('title').style.borderColor="red";
	  document.getElementById('title').focus();
	  return false;
      }
	 else
	  {
	   document.getElementById('title').style.borderColor="";
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

<script language="javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
	<script language="javascript" type="text/javascript" src="tiny_mce/plugins/tinybrowser/tb_tinymce.js.php"></script>
	
	<script type="text/javascript">
        tinyMCE.init({
        // General options
        file_browser_callback : "tinyBrowser",
		mode : "textareas",
        theme : "advanced",
        width: "900",
        height: "300",
		plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
		
		
        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "silver",

        // Example content CSS (should be your site CSS)
        content_css : "css/example.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "js/template_list.js",
        external_link_list_url : "js/link_list.js",
        external_image_list_url : "js/image_list.js",
        media_external_list_url : "js/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
		
		
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
                <h2>Banner Add Edit Box</h2>
            </div>
			<div style="clear:both;"></div>
			 <div id="msg_error" style="color:#FF0000; font-weight:bold;">
                <h2>
				
				</h2>
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
			  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="application_form" onSubmit="return validate_management('<?php echo $mode ?>');" enctype="multipart/form-data">
              <input type="hidden" name="mode"  id="mode" value="<?php echo $mode; ?>" />
              <input type="hidden" name="banid" value="<?php echo $row_user['banid']; ?>" />
              <input type="hidden" name="page" value="<?php echo $page; ?>" />
            	<div class="contentbox"> 
				    <div id="msg_error" style="color:#FF0000; font-weight:bold;">
                       <h2><?php echo $msg; ?></h2>
                    </div>          		
					
                    
                    <table>
         			 <tr>
          			    <td style="color:#F00"><?php
						if($err<>"")
						{
							echo $err;
							
						}
						
						?></td>
            		</tr>
          			 </table>
					<p>
                        <label for="textfield"><strong> Banner Image:</strong>(Size of the image should be 920 X 312)</label>
                        <input type="file" name="image" id="image" /> <!--<img src="img/loading.gif" alt="Loading" /> Uploading... -->
                        <span class="smltxt"></span>
                    </p>
					<?php
					if($mode=='edit')
					{
					?>
                    <p>
                    	<table border="0" cellpadding="0" cellspacing="0">          
                        <tr >
                        	<td >
                                  <input type="hidden" name="image1" value="<?php echo $row_user['banner']; ?>" style="width:220px;"/> 
                            </td>
                            <td>
                                  <?php
									   if(is_file($pathToImages.$row_user['banner']))
									   {
									   
									  ?>
                                  <img src="<?php echo $pathToImages.$row_user['banner']; ?>"  width="200" height="150"/>
                                      
                                  <?php
									   }
									   ?>
                            </td>
						</tr>
                        </table>
                    </p> 
                    <?php } ?>    
                  
                   <!--<p>
                        <label for="textfield"><strong>Body:</strong></label>
                      <textarea  name="body" rows="15" cols="70" style="width: 50%"><?php echo stripslashes($row_user['content']); ?></textarea>
					 <?php /*?> <?php      
							   $oFCKeditor = new FCKeditor('body') ;
							   $oFCKeditor->BasePath = $sBasePath ;
							   $oFCKeditor->Width="700";
							   $oFCKeditor->Height="400";
							   $techspecify=$row['fckeditor'];
							   $oFCKeditor->Value  = stripslashes($row_user['body']);
							   $oFCKeditor->Create() ; 
                                                                 
							?><?php */?>
                    </p>-->

                <input type="submit"  class="btn" name="submit" value="Save"/> 
				<a href="manage_banner.php"><input type="cancel"  class="btnalt" name="cancel" value="Cancel"/></a>
				<!--<input type="submit"  class="btn" name="apply" value="Apply"/> -->
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

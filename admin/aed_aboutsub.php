<?php  
include("includes/include.php");
if($_SESSION['login_id']=='')
	{
	 echo "<script>window.location.href='index.php'</script>";
	}
ini_set('max_upload_filesize', 8388608);  
//ini_set('memory_limit', '-1');	
include('thump_function.php');
include("fckeditor/fckeditor.php") ;
$sBasePath="fckeditor/";
$page=isset($_REQUEST['page'])?$_REQUEST['page']:"";	
$mode=isset($_REQUEST['mode'])?$_REQUEST['mode']:"";
$about_id=isset($_REQUEST['about_id'])?$_REQUEST['about_id']:"";
$submenu=isset($_REQUEST['submenu'])?$_REQUEST['submenu']:"";
$menu=isset($_REQUEST['menu'])?$_REQUEST['menu']:"";
$submenu_id=isset($_REQUEST['submenu_id'])?$_REQUEST['submenu_id']:"";
$body=isset($_REQUEST['body'])?addslashes($_REQUEST['body']):"";

$submit=isset($_REQUEST['submit'])?$_REQUEST['submit']:"";



if(!empty($submit))
{
	
	
    
    if($mode=='add')
     {  	
  
  
  	
	
   $sql_ins="INSERT INTO `about_sub` set `content`='".$body."', `submenu_id`='".$submenu_id."',`menu_id`='".$menu."'"; 
	$res_ins=mysql_query($sql_ins);	
	?>
     <script language="javascript">
        window.location.href='manage_aboutsub.php?retcode=1&page=<?php echo $page; ?>';
  </script>
    <?php
	
	
   }
   ?>
  
   <?php
   
    
   		if($mode=='edit')
		{
		
		
	 	
	 $sql_ins="update `about_sub` set				  	
				  `content`= '".$body."',
				  `submenu_id`='".$submenu_id."',
				  `menu_id`='".$menu."'
				  
				   where asub_id='".$about_id."'"; 
				   
		$res_ins=mysql_query($sql_ins);	
		
		?>
        <script language="javascript">
        window.location.href='manage_aboutsub.php?retcode=1&page=<?php echo $page; ?>';
       </script>
       <?php
	 }  
}
    ?>
   
	
  
   <?php
$sql_show="select * from about_sub where asub_id='".$about_id."' ";
$res_show=mysql_query($sql_show);
$row_user=mysql_fetch_array($res_show);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/common_script.php");?>
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
<script language="javascript" type="text/javascript">
 function validate_product(str)
 {  
  if(document.getElementById('title').value=='')
    {
	  document.getElementById('msg_error').innerHTML="Please enter title.";
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

<script language="javascript" type="text/javascript"> 
function display_sub_menu(menu_id)
{
	
		
		//alert(menu_id)
		var xmlhttp = false;
					
		try
		{
			//If the Javascript version is greater than 5.
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
			//alert ("You are using Microsoft Internet Explorer.");
		}
		catch (e)
		{
			//If not, then use the older active x object.
			try
			{
				//If we are using Internet Explorer.
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				//alert ("You are using Microsoft Internet Explorder");
			}
			catch (E)
			{
				//Else we must be using a non-IE browser.
				xmlhttp = false;
			}
		}
		
		//If we are using a non-IE browser, create a javascript instance of the object.
		if (!xmlhttp && typeof XMLHttpRequest != 'undefined')
		{
			xmlhttp = new XMLHttpRequest();
			//alert ("You are not using Microsoft Internet Explorer");
		}
		
			
		serverPage = "ajax_submenu.php?menu_id="+menu_id;
		
		//alert(serverPage);
		xmlhttp.open("GET", serverPage);
		xmlhttp.onreadystatechange = function()
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
				
				 document.getElementById('submenu').innerHTML = xmlhttp.responseText;
				
				
				}
				 
				 
			}
		
		
		//alert(retval);
		
		xmlhttp.send(null);
		
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
    <div style="clear:both;"></div>
        <!-- Content Box Start -->
         <div class="contentcontainer">
            <div class="headings altheading">
                <h2>Page Content Add / Edit <span style="padding-right:100px;"><a href="../" style="text-decoration:none; border:0px;" target="_blank"><img src="img/icons/preview.png" alt="Edit" height="25" width="90" border="0" /></a></span></h2>
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
            <input type="hidden" name="menu_id" value="<?php echo $row_user['menu_id']; ?>" />
              <input type="hidden" name="about_id" value="<?php echo $row_user['asub_id']; ?>" />
              <input type="hidden" name="page" value="<?php echo $page; ?>" />
            <div class="contentbox">
            	    <div id="msg_error" style="color:#FF0000; font-weight:bold;">
                       <h2><?php echo $msg; ?></h2>
                    </div>
                    <p>
                    <h3>Menu</h3>
                    </p>
                    <!--onChange="display_sub_menu(this.name)"-->
					<p>
                    <?php $query_menu=mysql_query("select * from menu ");  ?>
					<select id="menu" name="menu" onChange="display_sub_menu(this.value)">
                    <option value="">---Select Menu---</option>
                    <?php while($fetch_menu=mysql_fetch_array($query_menu))
						{
						 $menuid = $fetch_menu['menu_id'];  ?>
                    <option value="<?php echo $fetch_menu['menu_id'];  ?>"<?php if($fetch_menu['menu_id']==$row_user['menu_id']){?>selected="selected"<?php } ?>><?php echo $fetch_menu['menu'];  ?></option>
                    <?php } ?>
                    </select>		
					</p>	
                    <p>
                    <h3>Sub Menu</h3>
                    </p> 
					
					<?php 
					//echo "select * from sub_menu where submenu_id='".$row_user['submenu_id']."' order by submenu_id desc";
					$q_aboutsub=mysql_query("select * from sub_menu where menu_id='".$row_user['menu_id']."'");   ?>
					<div id=submenu>
            		<p>
					<select name="submenu_id" id="submenu_id">
                   <?php if($mode=='add'){?> <option value="">---Select Sub Menu---</option><?php }?>
					<?php while($f_aboutsub=mysql_fetch_array($q_aboutsub)){  ?>
					<option  value="<?php echo $f_aboutsub['submenu_id']; ?>"<?php if($f_aboutsub['submenu_id']==$row_user['submenu_id']){?> selected="selected"<?php } ?>>
					<?php echo $f_aboutsub['submenu']; ?></option>
					<?php }?>
					</select>
					
					
					</p>
					 </div>   
									
									
					<p>
                        <label for="textfield"><strong>Content:</strong></label>
                      <textarea  name="body" rows="15" cols="70" style="width: 50%"><?php echo stripslashes($row_user['content']); ?></textarea>
					
                    </p>
                <input type="submit"  class="btn" name="submit" value="Save"/> 
				<a href="manage_aboutsub.php"><input type="cancel"  class="btnalt" name="cancel" value="Cancel"/></a>
				<!--<input type="submit"  class="btn" name="apply" value="Apply"/>--> 
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

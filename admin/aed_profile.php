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
$mode=isset($_REQUEST['mode'])?$_REQUEST['mode']:"add";
$about_id=isset($_REQUEST['about_id'])?$_REQUEST['about_id']:"";
$title=isset($_REQUEST['title'])?addslashes($_REQUEST['title']):"";
$body=isset($_REQUEST['body'])?addslashes($_REQUEST['body']):"";
$submit=isset($_REQUEST['submit'])?$_REQUEST['submit']:"";
$apply=isset($_REQUEST['apply'])?$_REQUEST['apply']:"";

if(!empty($submit))
{
    
    if($mode=='add')
     {  	
  
  // echo "INSERT INTO `welcome` set `welcome`='".$body."'"; exit;
   $sql_ins="INSERT INTO `profile` set `content`='".$body."',`title`='".$title."'"; 
	$res_ins=mysql_query($sql_ins);	
	
	
   
   ?>
   <script language="javascript">
        window.location.href='manage_profile.php?retcode=1&page=<?php echo $page; ?>';
       </script>
       
   <?php }?>
   <?php if($mode=='edit')
	 {
		
		 
	 	
		
	 $sql_ins="update `profile` set
				  	
				  `content`= '".$body."',
				  `title`= '".$title."'
				  
				   where pid='".$about_id."'";  
		$res_ins=mysql_query($sql_ins);	
		
		?>
        <script language="javascript">
        window.location.href='manage_profile.php?retcode=1&page=<?php echo $page; ?>';
       </script>
       <?php
	 }  
}
    ?>
   
	
   <?php
$sql_show="select * from profile where pid='".$about_id."' ";
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
                <h2>Profile Add / Edit <span style="padding-right:100px;"><a href="../" style="text-decoration:none; border:0px;" target="_blank"><img src="img/icons/preview.png" alt="Edit" height="25" width="90" border="0" /></a></span></h2>
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
             <!-- <input type="hidden" name="category_id" value="<?php echo $category_id; ?>" />-->
              <input type="hidden" name="about_id" value="<?php echo $row_user['pid']; ?>" />
              <input type="hidden" name="page" value="<?php echo $page; ?>" />
            <div class="contentbox">
            	    <div id="msg_error" style="color:#FF0000; font-weight:bold;">
                       <h2><?php echo $msg; ?></h2>
                    </div>
            		
				<p>
                        <label for="textfield"><strong>Title:</strong></label>
                        <input type="text" name="title" id="title"   value="<?php echo $row_user['title']; ?>"    class="inputbox" /> 
                      
                    </p>
                    <?php /*?><p>
                        <label for="textfield"><strong>Meat Title:</strong></label>
                        <input type="text" name="metatitle" id="metatitle"   value="<?php echo $row_user['metatitle']; ?>"    class="inputbox" /> 
                       <!-- <span class="smltxt">(This is an example of a small descriptive text for input)</span>-->
                    </p>
                    <p>
                        <label for="textfield"><strong>Meat Key:</strong></label>
                        <input type="text" name="metakey" id="metakey"   value="<?php echo $row_user['metakey']; ?>"    class="inputbox" /> 
                       <!-- <span class="smltxt">(This is an example of a small descriptive text for input)</span>-->
                    </p>
					<p>
                        <label for="textfield"><strong>Meat Description:</strong></label>
                       
                       <textarea name="metadesc" id="metadesc"  cols="" rows=""><?php echo stripslashes($row_user['metadesc']); ?></textarea>
                    </p>
                    <p>
                        <label for="textfield"><strong>Short Description:</strong></label>
                        <textarea name="shortdesc" id="shortdesc"  cols="" rows=""><?php echo stripslashes($row_user['shortdesc']); ?></textarea>
 
                       <!-- <span class="smltxt">(This is an example of a small descriptive text for input)</span>-->
                    </p><?php */?>
					<!--<p>
                        <label for="textfield"><strong>Image:</strong></label>
                        <input type="file" name="image" id="image" /> <!--<img src="img/loading.gif" alt="Loading" /> Uploading... 
                        <span class="smltxt">(Small image width 404px, height 720px)</span>
                    </p>-->
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
                                  <img src="<?php echo $pathToImages.$row_user['image']; ?>"  width="169" height="119"/>
                                      
                                  <?php
									   }
									   ?>                                </td>							  
						      </tr>
                              <?php
									}
									?>
									<br/>
									
					<p>
                        <label for="textfield"><strong>Body:</strong></label>
                      <textarea  name="body" rows="15" cols="70" style="width: 50%"><?php echo stripslashes($row_user['content']); ?></textarea>
					 
                    </p>
                <input type="submit"  class="btn" name="submit" value="Save"/> 
				<a href="manage_profile.php"><input type="cancel"  class="btnalt" name="cancel" value="Cancel"/></a>
				 
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

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
$image1=isset($_REQUEST['image1'])?$_REQUEST['image1']:"";
$image=isset($_REQUEST['image'])?addslashes($_REQUEST['image']):"";
$content=isset($_REQUEST['content'])?addslashes($_REQUEST['content']):"";
$schedule=isset($_REQUEST['schedule'])?addslashes($_REQUEST['schedule']):"";
$topics=isset($_REQUEST['topics'])?addslashes($_REQUEST['topics']):"";
$title=isset($_REQUEST['title'])?addslashes($_REQUEST['title']):"";
$date=isset($_REQUEST['date'])?addslashes($_REQUEST['date']):"";

$submit=isset($_REQUEST['submit'])?$_REQUEST['submit']:"";

if($_FILES['image']['name']!="")
{
	 $image=time().'.'.end(explode(".",$_FILES['image']['name']));
}
else
{
	$image="";
}

$thumbWidth   = 100;
$thumbHeight  = 100;

$pathToImages = 'event_img/normal/';
$pathToThumbs = 'event_img/thumb/';


 $dest=$pathToImages.$image; 


if(!empty($submit))
{
    
	
	if(move_uploaded_file($_FILES['image']['tmp_name'],$dest))
	  	{
	   createThumbs($pathToImages,$pathToThumbs,$thumbWidth,$thumbHeight,$image);	
	    
	  	}	
    
    if($mode=='add')
     {  	
  // print_r($_POST); exit;
  // echo "INSERT INTO `welcome` set `welcome`='".$body."'"; exit;
  		move_uploaded_file($_FILES['image']['tmp_name'],$dest);
  	
	 
 $sql_ins="INSERT INTO `events` set `content`='".$content."',`title`='".$title."',`topics`='".$topics."',`image`='".$image."',`date`='".$date."',`schedule`='".$schedule."'"; 
	$res_ins=mysql_query($sql_ins);	
	?>
     <script language="javascript">
        window.location.href='manage_events.php?retcode=1&page=<?php echo $page; ?>';
  </script>
    <?php
	
	
   }
   ?>
  
   <?php
   
    
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
			  @unlink($pathToThumbs.$image1);
			  	  
			}			
			move_uploaded_file($_FILES['image']['tmp_name'],$dest);	        
		 } 
	 	
	 $sql_ins="update `events` set				  	
				  `content`='".$content."',`title`='".$title."',`topics`='".$topics."',`image`='".$image."',`date`='".$date."',`schedule`='".$schedule."'
				   where eid='".$about_id."'"; 
				   
		$res_ins=mysql_query($sql_ins);	
		
		?>
        <script language="javascript">
        window.location.href='manage_events.php?retcode=1&page=<?php echo $page; ?>';
       </script>
       <?php
	 }  
}
    ?>
   
	
  
   <?php
$sql_show="select * from events where eid='".$about_id."' ";
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

<link type="text/css" href="css/ui-lightness/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
<script type="text/javascript" src="jquery/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="jquery/timepicker.js"></script>

<script type="text/javascript">
$(function() {
    $('#date').datepicker({
    	duration: '',
        showTime: false,
        constrainInput: true,
		dateFormat:'yy-mm-dd'
     });
});
</script>


<!--<link rel="stylesheet" href="include/ui-1.10.0/ui-lightness/jquery-ui-1.10.0.custom.min.css" type="text/css" />
<link rel="stylesheet" href="jquery.ui.timepicker.css?v=0.3.2" type="text/css" />

<script type="text/javascript" src="include/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="include/ui-1.10.0/jquery.ui.core.min.js"></script>
    <script type="text/javascript" src="include/ui-1.10.0/jquery.ui.widget.min.js"></script>
    <script type="text/javascript" src="include/ui-1.10.0/jquery.ui.tabs.min.js"></script>
    <script type="text/javascript" src="include/ui-1.10.0/jquery.ui.position.min.js"></script>
    <script type="text/javascript" src="jquery.ui.timepicker.js?v=0.3.2"></script>
	
<script type="text/javascript">
            $(document).ready(function() {
                $('#time1').timepicker({
                    showLeadingZero: false,
                    onHourShow: tpStartOnHourShowCallback,
                    onMinuteShow: tpStartOnMinuteShowCallback
                });
                $('#time2').timepicker({
                    showLeadingZero: false,
                    onHourShow: tpEndOnHourShowCallback,
                    onMinuteShow: tpEndOnMinuteShowCallback
                });
            });

            function tpStartOnHourShowCallback(hour) {
                var tpEndHour = $('#time2').timepicker('getHour');
                // all valid if no end time selected
                if ($('#time2').val() == '') { return true; }
                // Check if proposed hour is prior or equal to selected end time hour
                if (hour <= tpEndHour) { return true; }
                // if hour did not match, it can not be selected
                return false;
            }
            function tpStartOnMinuteShowCallback(hour, minute) {
                var tpEndHour = $('#time2').timepicker('getHour');
                var tpEndMinute = $('#time2').timepicker('getMinute');
                // all valid if no end time selected
                if ($('#time2').val() == '') { return true; }
                // Check if proposed hour is prior to selected end time hour
                if (hour < tpEndHour) { return true; }
                // Check if proposed hour is equal to selected end time hour and minutes is prior
                if ( (hour == tpEndHour) && (minute < tpEndMinute) ) { return true; }
                // if minute did not match, it can not be selected
                return false;
            }

            function tpEndOnHourShowCallback(hour) {
                var tpStartHour = $('#time1').timepicker('getHour');
                // all valid if no start time selected
                if ($('#time1').val() == '') { return true; }
                // Check if proposed hour is after or equal to selected start time hour
                if (hour >= tpStartHour) { return true; }
                // if hour did not match, it can not be selected
                return false;
            }
            function tpEndOnMinuteShowCallback(hour, minute) {
                var tpStartHour = $('#time1').timepicker('getHour');
                var tpStartMinute = $('#time1').timepicker('getMinute');
                // all valid if no start time selected
                if ($('#time1').val() == '') { return true; }
                // Check if proposed hour is after selected start time hour
                if (hour > tpStartHour) { return true; }
                // Check if proposed hour is equal to selected start time hour and minutes is after
                if ( (hour == tpStartHour) && (minute > tpStartMinute) ) { return true; }
                // if minute did not match, it can not be selected
                return false;
            }

        </script>-->
		
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
                <h2>Solutions Add / Edit <span style="padding-right:100px;"><a href="../" style="text-decoration:none; border:0px;" target="_blank"><img src="img/icons/preview.png" alt="Edit" height="25" width="90" border="0" /></a></span></h2>
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
            
              <input type="hidden" name="about_id" value="<?php echo $row_user['eid']; ?>" />
              <input type="hidden" name="page" value="<?php echo $page; ?>" />
            <div class="contentbox">
            	    <div id="msg_error" style="color:#FF0000; font-weight:bold;">
                       <h2><?php echo $msg; ?></h2>
                    </div>
            		
				
                
                			
                  <p>
                  <label for="title"><strong>Event Title:</strong></label>
                  <input type="text" name="title" id="title" value="<?php echo $row_user['title'];  ?>" class="inputbox" />
                  </p>         
					
                       <p>
                        <label for="textfield"><strong>Event Image:</strong></label>
                        
                        <input type="file" name="image" id="image" /> 
                        <span class="smltxt"></span>
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
                                  <img src="<?php echo $pathToImages.$row_user['image']; ?>"  width="169" height="119"/>
                                      
                                  <?php
									   }
									   ?>                                </td>							  
						      </tr>
                              <?php
									}
					
					     		?>		
									
                    <p>
                        <label for="date"><strong>Event Date:</strong></label>
                      <input type="text" name="date" id="date"  value="<?php echo stripslashes($row_user['date']); ?>" />
					
                    </p>                   
                   
                   <p>
                        <label for="textfield"><strong>Event Schedule(Time, Session, Venue,etc.):</strong></label>
                      <textarea  name="schedule" rows="15" cols="70" style="width: 50%"><?php echo stripslashes($row_user['schedule']); ?></textarea>
					
                    </p>      
                    
                                    
					<p>
                        <label for="textfield"><strong>Topics Covered:</strong></label>
                      <textarea  name="topics" rows="15" cols="70" style="width: 50%"><?php echo stripslashes($row_user['topics']); ?></textarea>
					
                    </p>
                    				
					<p>
                        <label for="textfield"><strong>Event Content:</strong></label>
                      <textarea  name="content" rows="15" cols="70" style="width: 50%"><?php echo stripslashes($row_user['content']); ?></textarea>
					
                    </p>
                <input type="submit"  class="btn" name="submit" value="Save"/> 
				<a href="manage_events.php"><input type="cancel"  class="btnalt" name="cancel" value="Cancel"/></a>
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

<?php  
include("includes/include.php");
if($_SESSION['login_id']=='')
	{
	 echo "<script>window.location.href='index.php'</script>";
	}
	
	include("fckeditor/fckeditor.php") ;
    $sBasePath="fckeditor/";

	$mode=isset($_REQUEST['mode'])?$_REQUEST['mode']:"";
	$pageid=isset($_REQUEST['pageid'])?$_REQUEST['pageid']:"";	
	$pagetitle=isset($_REQUEST['pagetitle'])?$_REQUEST['pagetitle']:"";
	$pageheading=isset($_REQUEST['pageheading'])?$_REQUEST['pageheading']:"";
	$pagecontent=isset($_REQUEST['pagecontent'])?addslashes($_REQUEST['pagecontent']):"";
	$submit=isset($_REQUEST['submit'])?$_REQUEST['submit']:"";
	$apply=isset($_REQUEST['apply'])?$_REQUEST['apply']:"";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/common_script.php");?>
<script language="javascript">
 function check()
 {
 if(document.getElementById('pagetitle').value=='')
  {
	 // document.getElementById('msg_error').innerHTML="Please enter your old password.";
	  document.getElementById('pagetitle').style.borderColor="red";
	  document.getElementById('pagetitle').focus();
	  return false;
  }
 else
  {
   document.getElementById('pagetitle').style.borderColor="";
  }  
 if(document.getElementByName('pagecontent').value=='')
  {
	 // document.getElementById('msg_error').innerHTML="Please enter your old password.";
	  document.getElementByName('pagecontent').style.borderColor="red";
	  document.getElementByName('pagecontent').focus();
	  return false;
  }
 else
  {
   document.getElementByName('pagecontent').style.borderColor="";
  } 
 }
 function cls()
 {
   
    document.getElementById('error').style.display='none';
	document.getElementById('success').style.display='none';
 }
</script>
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
	   width : "550",
		mode : "textareas",
		theme : "simple"
	});
</script>
</head>
<body id="homepage">
<?php
	if(!empty($submit))
	{
		if($mode=='add')
		{		
		 $qry = "insert into `table_page` set `pagetitle`='$pagetitle',`pageheading`='$pageheading',pagecontent='".$pagecontent."',createdate='".date('Y-m-d')."' ";
		}
		if($mode=='edit')
		{		
		$qry = "update `table_page` set `pagetitle`='$pagetitle',`pageheading`='$pageheading',pagecontent='".$pagecontent."' where `pageid`='".$pageid."'";
		mysql_query($qry) or die (mysql_error());
		
		}
		if(mysql_query($qry))
		{
			echo "<script>window.location.href='manage_page.php?retcode=1&page=$page'</script>";
		}
		else
		{
			echo "<script>window.location.href='manage_page.php?retcode=2&page=$page'</script>";
		}
	}
	if(!empty($apply))
	 {
	        if($mode=='add')
		    {		
		     $qry = "insert into `table_page` set `pagetitle`='$pagetitle',`pageheading`='$pageheading',pagecontent='".$pagecontent."',createdate='".date('Y-m-d')."' ";
		    }
			if($mode=='edit')
			{		
			$qry = "update `table_page` set `pagetitle`='$pagetitle',`pageheading`='$pageheading',pagecontent='".$pagecontent."' where `pageid`='".$pageid."'";
			mysql_query($qry) or die (mysql_error());
			
			}
			if(mysql_query($qry))
			{
				echo "<script>window.location.href='aed_page.php?pageid='".$pageid."'&mode=edit&page=$page'</script>";
			}
			else
			{
				echo "<script>window.location.href='manage_page.php?retcode=2&page=$page'</script>";
			}
	    
	   }
	
		$cat_qry = "select * from `table_page` where `pageid`='".$pageid."'";
		$cat_res = mysql_query($cat_qry);
		$cat_row = mysql_fetch_array($cat_res);		
		$pageid = $cat_row['pageid'];
	
?>
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
                <h2>Add Article Content <span style="padding-right:100px;"><a href="../" style="text-decoration:none; border:0px;" target="_blank"><img src="img/icons/preview.png" alt="Edit" height="25" width="90" border="0" /></a></span></h2>
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
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="application_form" enctype="multipart/form-data" onSubmit="return check();">
			<input type="hidden" name="pageid" value="<?php echo $pageid;?>">
            <input type="hidden" name="page" value="<?php echo $page;?>">
            <input type="hidden" name="mode" id="mode" value="<?php echo $mode;?>">
            <div class="contentbox">
            	
            		<p>
                        <label for="textfield"><strong>Page Title:</strong></label>
                        <input type="text" name="pagetitle" id="pagetitle"  value="<?php echo $cat_row['pagetitle'];?>"   class="inputbox" /> <br />
                        <!--<span class="smltxt">(This is an example of a small descriptive text for input)</span>-->
                    </p>
                    <p>
                        <label for="textfield"><strong>Page Heading:</strong></label>
                        <input type="text" name="pageheading" id="pageheading"  value="<?php echo $cat_row['pageheading'];?>"   class="inputbox" /> <br />
                        <!--<span class="smltxt">(This is an example of a small descriptive text for input)</span>-->
                    </p>
					
					<p>
                        <label for="textfield"><strong>Description:</strong></label>
                     <!-- <textarea  name="pagecontent" rows="15" cols="70" style="width: 50%"><?php echo $cat_row['pagecontent']; ?></textarea>-->
					  <?php      
							   $oFCKeditor = new FCKeditor('pagecontent') ;
							   $oFCKeditor->BasePath = $sBasePath ;
							   $oFCKeditor->Width="700";
							   $oFCKeditor->Height="400";
							   $techspecify=$row['fckeditor'];
							   $oFCKeditor->Value  = stripslashes($cat_row['pagecontent']);
							   $oFCKeditor->Create() ; 
							   
                                                                 
							?>
					 
                        <!--<span class="smltxt">(This is an example of a small descriptive text for input)</span>-->
                    </p>
					<br/>
                   
                <input type="submit"  class="btn" name="submit" value="Save"/> 
				<a href="manage_page.php">
				<input type="cancel"  class="btnalt" name="cancel" value="Cancel"/></a>
				<input type="submit"  class="btn" name="apply" value="Apply"/> 
				
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

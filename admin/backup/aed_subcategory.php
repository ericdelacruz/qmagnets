<?php
//////////// checking for login authentication
	include("includes/include.php");
	if($_SESSION['login_id']=='')
	{
	 echo "<script>windows.location.href='index.php'</script>";
	}
	
///////////Parameter setting list	
	$page=isset($_REQUEST['page'])?$_REQUEST['page']:"";	
	
	$category_id=isset($_REQUEST['category_id'])?$_REQUEST['category_id']:"";
	$category_name=isset($_REQUEST['category_name'])?$_REQUEST['category_name']:"";
	$submit=isset($_REQUEST['submit'])?$_REQUEST['submit']:"";
	
///////////Add, Edit, Fetch Operation

    if(!empty($submit))
	{
	  if($mode=='add')
	   {
	      $sql_subcat="insert into `table_category` set `category_name`='".$category_name."' ,`input_date`='".date('y-m-d')."' ";
		
		  //$res_add=mysql_query($sql_add);
	   }
	  if($mode=='edit')
	   {
	    
	    $sql_subcat="update `table_category` set `category_name`='".$category_name."' where `category_id`='".$category_id."' "; 
		 mysql_query($sql_subcat) or die(mysql_error()); 
	   } 
	  if(mysql_query($sql_subcat))
	  {
	   echo "<script>window.location.href='manage_category.php?retcode=1&page=$page'</script>";
	  } 
	  else
	  {
	    echo "<script>window.location.href='manage_category.php?retcode=0&page=$page'</script>";
	  }
	}
	
	$sql_cat="select * from `table_category` where `category_id`='".$category_id."' ";
	$res_cat=mysql_query($sql_cat);
	$row_cat=mysql_fetch_array($res_cat);
	$category_id =$row_cat['category_id'];
	$category_name=$row_cat['category_name'];
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/common_script.php");?>
<script language="javascript">
 function check()
 {
    if(document.getElementById('category_name').value=='')
    {
	 // document.getElementById('msg_error').innerHTML="Please enter your old password.";
	  document.getElementById('category_name').style.borderColor="red";
	  document.getElementById('category_name').focus();
	  return false;
     }
	 else
	  {
	   document.getElementById('category_name').style.borderColor="";
	  }
    
	
 }  
 function cls()
 {
   
    document.getElementById('error').style.display='none';
	document.getElementById('success').style.display='none';
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
                <h2>Add Cetegory</h2>
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
								  <input type="hidden" name="category_id" value="<?php echo $category_id;?>">
                                  <input type="hidden" name="page" value="<?php echo $page;?>">
                                  <input type="hidden" name="mode" id="mode" value="<?php echo $mode;?>">
            <div class="contentbox">
            	
            		
					<p>
                        <label for="textfield"><strong>Category Name:</strong></label>
                        <input type="text" name="category_name" id="category_name"  autocomplete="off" class="inputbox" value="<?php echo $row_cat['category_name']; ?>" /> <br />
                       <!-- <span class="smltxt">(This is an example of a small descriptive text for input)</span>-->
                    </p>
					
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

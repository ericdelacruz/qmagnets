<?php  
include("includes/include.php");
if($_SESSION['login_id']=='')
	{
	 echo "<script>window.location.href='index.php'</script>";
	}
$del_c_id=isset($_REQUEST['del_c_id'])?$_REQUEST['del_c_id']:"";
//$price=isset($_REQUEST['price'])?trim($_REQUEST['price']):"";
$title =isset($_REQUEST['title'])?trim($_REQUEST['title']):"";
//$category_id=isset($_REQUEST['category_id'])?trim($_REQUEST['category_id']):"";	
$message=isset($_REQUEST['message'])?trim($_REQUEST['message']):"";	
$email=isset($_REQUEST['email'])?trim($_REQUEST['email']):"";	
$retcode=isset($_REQUEST['retcode'])?$_REQUEST['retcode']:"";
$mode=isset($_REQUEST['mode'])?$_REQUEST['mode']:"";
$about_id=isset($_REQUEST['about_id'])?$_REQUEST['about_id']:"";
$chk_id=implode(',',$_REQUEST['chk_id']);  
$send=isset($_REQUEST['send'])?$_REQUEST['send']:"";
$subscribe=isset($_REQUEST['subscribe'])?$_REQUEST['subscribe']:"";
$page=isset($_REQUEST['page'])?$_REQUEST['page']:"";
if($subscribe=='subs')
  {
	        
			 
		  	$email = implode(",",array_unique($_POST['email']));
			$message = addslashes($_POST['message']);  // Retrieve POST data
	     if(isset($email))
		 {  // Check if selections were made
	     for ($k = 0; $k < count($email); $k++)
	        {
			  $from=pickname("admin_information","fld_id","admin_email",1); 
			  $to=$email;					   
			  $sub="News Letter From Hothum";			   
			  $headers="MIME-Version: 1.0\r\n";
			  $headers.="Content-type: text/html; charset=ISO-8859-1\r\n";										
			  $headers.="From: $from \r\n";	
			  if(mail($to,$sub,$message,$headers))
			  {
			  echo "<script>window.location.href='manage_subscribe.php?retcode=1&page=$page'</script>";
			  }									
			}
			
		}
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/common_script.php");?>
<script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
<script type="text/javascript">
hs.graphicsDir = 'highslide/graphics/';
hs.outlineType = 'rounded-white';
hs.wrapperClassName = 'draggable-header';
hs.width=800;
hs.height=400;
</script>
<link href="styles/pagination.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="js/jquery.js"></script>
<script language="javascript">
jQuery(document).ready(function() {
	 jQuery('#chkall').click(function() {
	  jQuery('#frm1 input:checkbox').attr('checked',this.checked)
	 });		  
})
 function checkdel(str)
 {
  
   var j=0;
	     for(var i=0;i<document.application_form.elements.length;i++)
		 {
		   if(document.application_form.elements[i].checked==true)
		   {
			 j++;   
		   }
		 }
		 if(j==0)
		 {
		 document.getElementById('msg_error').innerHTML="Please checked atleast one checkbox."; 
		 return false;	 
		 }
		 else
		 {
		  if(str=='act')
		  {
		  var ok=confirm('Are you sure want to active these record(s).')
		   document.getElementById('mode').value="actall";
		  }

		  if(str=='inact')
		  {
		  var ok=confirm('Are you sure want to inactive these record(s).')
		   document.getElementById('mode').value="inactall";
		  }
		  if(str=='del')
		  {
		  var ok=confirm('Are you sure want to delete these record(s).')
		   document.getElementById('mode').value="delall";
		  }
		   if(ok==true)
		   {
		    //return true;			
		     document.getElementById('frm1').submit();
		   }
		   
		 }
		 
 }
 
 function check()
{  
    if(document.getElementById("message").value=="")	
	{	
		document.getElementById('msg_error').innerHTML='Please Write Something';
		document.getElementById("message").style.borderColor='red';
		document.getElementById("message").focus();
		return false;
	}	
	else	{	
		document.getElementById("message").style.borderColor='';
	}
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
<?php
	
    $tbl_name="subscribe";      
    $adjacents = 3;
    $targetpage = $_SERVER['PHP_SELF'].'?category_id='.$category_id.'&product_name='.$product_name.'&page';	
    $limit = 10; 
	$page = @$_GET['page'];   
   
    $query = "SELECT * FROM ".$tbl_name ." where 1";
	if($category_id!='')
		 {
		 $query.=" AND category_id='".$category_id."' ";
		 }		
		 if($product_name!='')
		 {
		 $query.=" AND product_name like '%".$product_name."%'   ";
		 }
    $total_res=mysql_query($query);
    $total_pages = mysql_num_rows($total_res);  
	 
    include('pagination.php');	    ////////////////pagination page
    
	if($_REQUEST['page']=='all')
	{
	  $sql=$query." order by `subscribe_id` desc ";
	 $start=0;
	}
	else
	{
	 $sql=$query." order by `subscribe_id` desc LIMIT $start, $limit";
	}
	//echo $sql;
    $result = mysql_query($sql);
   
   
?>  
	 <!-- Top Header Start -->
		<?php include("includes/header.php");?>
	 <!-- Top Header End --> 
	        
     <!-- Top Breadcrumb Start -->
        <?php include("includes/breadcrumb.php");?>
     <!-- Top Breadcrumb End -->
	 
     
    <!-- Right Side/Main Content Start -->
    <div id="rightside">
    
 
        <!-- Alternative Content Box Start -->
         <div class="contentcontainer">
            <div class="headings altheading">
                <h2>Manage Newsletter
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<!--<span style="padding-right:100px;"><a href="aed_services.php?mode=add" style="text-decoration:none; border:0px; "><img src="img/icons/addanother.png" alt="Edit" height="25" width="90" border="0" /></a></span>-->
				<span style="padding-right:100px;"><a href="../" style="text-decoration:none; border:0px;" target="_blank"><img src="img/icons/preview.png" alt="Edit" height="25" width="90" border="0" /></a></span>
				</h2>
            </div>
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="frm1" name="application_form" onsubmit="return check();" >
                                  
            <div class="contentbox">
            	<table width="100%">
                	<thead>
                    	<tr>
						
                        	
												
							 <th>Email</th>
                             
                            
                        </tr>
                    </thead>
                    <tbody>
						<tr>
                        	<td style=" color:#F00" id="msg_error"></td>
                        </tr>
                    	<tr>
						
						 <td>   <select name="email[]" multiple="multiple">
                            <?php  while($row = mysql_fetch_array($result)){?>
                            <option value="<?php echo $row['subscribe_id'];  ?>"><?php echo $row['email'];  ?>(<?php echo $row['name'];?>)</option>
                            <?php }?>
                            
                            </select>
                                                  
                      </td>             
                       </tr>
                       <tr>
                       
                       		<td>Message Area</td>
                       </tr>
                       <tr>
                       		<td><textarea name="message"><?php $message;  ?></textarea></td>
                       
                       </tr>
                           
                       <tr>
                      <td> 
                      <input type="hidden" name="subscribe" value="subs" />
                      <input type="image" name="send" src="../images/send_button.png" /></td>
                       
                       </tr>     
                             
                            
                            
                            
                     
						
                                
                                
                    </tbody>
                </table>
				<?php
				if(!empty($pagination))
				{
				?>
                <ul style="text-align:right;">
                	
                    <li><?php echo $pagination;?></li>
                    
                </ul>
				<?php
				}
				?>
                <div style="clear: both;"></div>
            </div>
            </form>
        </div>
        <!-- Alternative Content Box End -->
       
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

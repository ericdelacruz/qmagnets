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
$body=isset($_REQUEST['body'])?trim($_REQUEST['body']):"";	
//$search=isset($_REQUEST['search'])?$_REQUEST['search']:"";	
$retcode=isset($_REQUEST['retcode'])?$_REQUEST['retcode']:"";
$mode=isset($_REQUEST['mode'])?$_REQUEST['mode']:"";
$about_id=isset($_REQUEST['about_id'])?$_REQUEST['about_id']:"";
$chk_id=implode(',',$_REQUEST['chk_id']);  
$pathToImages = 'about_img/normal/';
$pathToThumbs = 'about_img/thumb/';
if($mode=="feature")
{    
	$qry_del = "update table_service set feature =0 WHERE product_id='".$del_c_id."' ";
	mysql_query($qry_del);	
}
if($mode=="unfeature" )
{
	$qry_del = "update table_service set feature =1 WHERE product_id='".$del_c_id."' ";
	mysql_query($qry_del);
}
if($mode=='del')
{
$sql_g="select * from about where about_id='".$del_c_id."' ";
$res_g=mysql_query($sql_g);
while($row_g=mysql_fetch_array($res_g))
 {
 if(is_file($pathToImages.$row_g['image']))
	 {
	 @unlink($pathToImages.$row_g['image']);
	 @unlink($pathToImages.$row_g['timage']);
	 //@unlink($pathToImages.$row_g['mthumb']);
	 }
 }
 mysql_query("delete from about where about_id='".$del_c_id."'"); 
 mysql_query("delete from table_whychooseus where product_id='".$del_c_id."'"); 
 
}	
if($retcode==1)
{
 $msg='Data has saved.';
 
}
$chk_id=implode(',',$_REQUEST['chk_id']);
 if($mode=="delall")
 {
     $chk_id=implode(',',$_REQUEST['chk_id']);  
	$sql_g="select * from table_service where product_id IN($chk_id) ";
    $res_g=mysql_query($sql_g);
    while($row_g=mysql_fetch_array($res_g))
	{
	 
	   if(is_file($pathToImages.$row_g['image']))
		 {
		 @unlink($pathToImages.$row_g['image']);
		 @unlink($pathToThumbs.$row_g['timage']);
		 }
    }		 
    mysql_query("delete from aboute where about_id IN($chk_id) ");   
	
    mysql_query("delete from about where about_id IN($chk_id) ");   
	$msg="Deletion operation successfully done.";	
  
 } 
 if($mode=="actall")
 {
 
    mysql_query("update table_service set feature=0 where product_id IN($chk_id) ");   
	$msg="Active operation successfully done.";	
  
 } 
 if($mode=="inactall")
 {
  
    mysql_query("update about set feature=1 where about_id IN($chk_id) ");   
	$msg="Inactive operation successfully done.";	
  
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
 
</script>
</head>
<body id="homepage">
<?php
	
    $tbl_name="start_sub";      
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
	  $sql=$query." order by `ssub_id` desc ";
	 $start=0;
	}
	else
	{
	 $sql=$query." order by `ssub_id` desc LIMIT $start, $limit";
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
                <h2>Manage Start Your New Business Sub Menu Pages
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<!--<span style="padding-right:100px;"><a href="aed_about.php?mode=add" style="text-decoration:none; border:0px; "><img src="img/icons/addanother.png" alt="Edit" height="25" width="90" border="0" /></a></span>-->
				<span style="padding-right:100px;"><a href="../" style="text-decoration:none; border:0px;" target="_blank"><img src="img/icons/preview.png" alt="Edit" height="25" width="90" border="0" /></a></span>
				</h2>
            </div>
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="frm1" name="application_form" >
                                   <input type="hidden" name="type" value="<?php echo $type; ?>" />
            <div class="contentbox">
            	<table width="100%">
                	<thead>
                    	<tr>
						    <th>Sub Menu</th>                    	
							 <th width="50%" >Body</th>
                            <th >Actions</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
									if($total_pages>0)
									{
											$i = $start;
											while($row = mysql_fetch_array($result))
											{
											$id=$row['ssub_id'];
											$submenu=$row['submenu_id'];	
									?>
                    	<tr>
							<?php 
							
								$query_submenu=mysql_query("select * from sub_menu where submenu_id='".$submenu."'");
								$fetch_submenu=mysql_fetch_array($query_submenu);
							
							?>
						    <td>
                            	<?php echo $fetch_submenu['submenu'];   ?>
                            	
                            </td>
                       
							<td>
							<?php echo stripslashes(substr($row['content'],0,400)."......");?>
							</td>
                            
                            <td>
							    <?php
								
										if($row['feature']==0)
										  {
										  ?>
                                         <!-- <a href="<?php echo $_SERVER['PHP_SELF'];?>?del_c_id=<?php echo $row['about_id'];?>&mode=unfeature" onClick="Javascript: return confirm('Are You sure want to inactive this record?')" class="LinkText6"><img src="img/icons/approve.gif" height="15" width="15" border="0" title="Click to inactive" /></a>-->&nbsp;&nbsp;&nbsp;&nbsp;
                                          
                                          <?php
										  }
										  else
										  {
										  ?>
										<!--  <a href="<?php echo $_SERVER['PHP_SELF'];?>?del_c_id=<?php echo $id;?>&mode=feature" onClick="Javascript: return confirm('Are You sure want to active this record?')" class="LinkText6"><img src="img/icons/disapprove.gif"  height="15" width="15" border="0" title="Click to active" /></a>-->&nbsp;&nbsp;&nbsp;&nbsp;
										  <?php
                                          }
										 ?>
                            	<a href="aed_startsub.php?about_id=<?php echo $row['ssub_id'];?>&mode=edit&page=<?php echo $page; ?>" title="Edit Page"><img src="img/icons/edit_icon.jpg" alt="Edit" height="15" width="15" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
								<!--<a href="<?php echo $_SERVER['PHP_SELF']?>?del_c_id=<?php echo $row['about_id'];?>&mode=del&page=<?php echo $page; ?>" title="Delete" onclick="return confirm('Are you sure to delete this record?');"><img src="img/icons/trash_icon.jpg" alt="Delete" height="15" width="15" border="0"/></a>-->
								<a href="view_about.php?about_id=<?php echo $row['ssub_id'];;?>" onclick="return hs.htmlExpand(this, { objectType: 'iframe' } )"><img src="img/icons/view.gif" alt="Approve" /></a>
                            	<!--<a href="#" title=""><img src="img/icons/icon_approve.png" alt="Approve" /></a>
                                <a href="#" title=""><img src="img/icons/icon_unapprove.png" alt="Unapprove" /></a>
                                <a href="#" title=""><img src="img/icons/icon_delete.png" alt="Delete" /></a>        -->                    
								</td>
                        </tr>
						<?php 
												$i++;
										}
									?>
                                
                                    <?php		
									}
									else
									{		
									?> 
							<tr>
                        	<td class="smltxt red" align="center" colspan="6">No page content available now!!</td>
                            </tr>
								  
								<?php
								  }
								/**---------------------- Pagination Step 3 --------------------------------**/
								?>
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

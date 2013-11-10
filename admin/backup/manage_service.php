<?php  
include("includes/include.php");
if($_SESSION['login_id']=='')
	{
	 echo "<script>window.location.href='index.php'</script>";
	}
$del_c_id=isset($_REQUEST['del_c_id'])?$_REQUEST['del_c_id']:"";
$price=isset($_REQUEST['price'])?trim($_REQUEST['price']):"";
$service_name =isset($_REQUEST['service_name'])?trim($_REQUEST['service_name']):"";
$description=isset($_REQUEST['description'])?trim($_REQUEST['description']):"";	

$retcode=isset($_REQUEST['retcode'])?$_REQUEST['retcode']:"";
$mode=isset($_REQUEST['mode'])?$_REQUEST['mode']:"";
$service_id=isset($_REQUEST['service_id'])?$_REQUEST['service_id']:"";
$chk_id=implode(',',$_REQUEST['chk_id']);  
$pathToImages = 'service_images/normal_img/';
$pathToThumbs = 'service_images/thumb_img/';
/*$pathToMThumbs = 'service_images/middle_img/';*/


if($mode=="feature")
{    
	$qry_del = "update service set feature =0 WHERE service_id='".$del_c_id."' ";
	mysql_query($qry_del);	
}

if($mode=="unfeature" )
{
	$qry_del = "update service set feature =1 WHERE service_id='".$del_c_id."' ";
	mysql_query($qry_del);
}


if($mode=='del')
{
$sql_g="select * from service where service_id='".$del_c_id."' ";
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
 mysql_query("delete from service where service_id='".$del_c_id."'"); 
 
}	
if($retcode==1)
{
 $msg='Data has saved.';
 
}

$chk_id=implode(',',$_REQUEST['chk_id']);

 if($mode=="delall")
 {
    echo"chk_id=". $chk_id=implode(',',$_REQUEST['chk_id']);  
	$sql_g="select * from service where service_id IN($chk_id) ";
    $res_g=mysql_query($sql_g);
    while($row_g=mysql_fetch_array($res_g))
	{
	 
	   if(is_file($pathToImages.$row_g['image']))
		 {
		 @unlink($pathToImages.$row_g['image']);
		 @unlink($pathToThumbs.$row_g['timage']);
		 }
    }		 
    mysql_query("delete from service where service_id IN($chk_id) ");   
	
    mysql_query("delete from service where service_id IN($chk_id) ");   
	$msg="Deletion operation successfully done.";	
  
 } 
 if($mode=="actall")
 {
 
    mysql_query("update service set feature=0 where service_id IN($chk_id) ");   
	$msg="Active operation successfully done.";	
  
 } 
 if($mode=="inactall")
 {
  
    mysql_query("update service set feature=1 where service_id IN($chk_id) ");   
	$msg="Inactive operation successfully done.";	
  
 } 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/common_script.php");?>
<!--++++++++++++++++++++++highslide++++++++++++++++++++++++++-->
<!--
	1 ) Reference to the files containing the JavaScript and CSS.
	These files must be located on your server.
-->

<script type="text/javascript" src="highslide/highslide.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="highslide/highslide-ie6.css" />
<![endif]-->



<!--
    2) Optionally override the settings defined at the top
    of the highslide.js file. The parameter hs.graphicsDir is important!
-->

<script type="text/javascript">
//<![CDATA[
hs.registerOverlay({
	html: '<div class="closebutton" onclick="return hs.close(this)" title="Close"></div>',
	position: 'top right',
	fade: 2 // fading the semi-transparent overlay looks bad in IE
});


hs.graphicsDir = 'highslide/graphics/';
hs.wrapperClassName = 'borderless';
//]]>
</script>
<!--++++++++++++++++++++++highslide end ++++++++++++++++++++++++++-->
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
	
    $tbl_name="service";      
    $adjacents = 3;
    $targetpage = $_SERVER['PHP_SELF'].'?service_id='.$service_id.'&service_name='.$service_name.'&page';	
    $limit = 10; 
	$page = @$_GET['page'];   
   
    $query = "SELECT * FROM ".$tbl_name ." where 1";
	if($category_id!='')
		 {
		 $query.=" AND service_id='".$service_id."' ";
		 }		
		 if($service_name!='')
		 {
		 $query.=" AND service_name like '%".$service_name."%'   ";
		 }
    $total_res=mysql_query($query);
    $total_pages = mysql_num_rows($total_res);  
	 
    include('pagination.php');	    ////////////////pagination page
    
	if($_REQUEST['page']=='all')
	{
	  $sql=$query." order by `service_id` desc ";
	 $start=0;
	}
	else
	{
	 $sql=$query." order by `service_id` desc LIMIT $start, $limit";
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
        <!-- Alternative Content Box Start -->
         <div class="contentcontainer">
            <div class="headings altheading">
                <h2>Manage Static Page</h2>
            </div>
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="frm1" name="application_form" >
                                   <input type="hidden" name="type" value="<?php echo $type; ?>" />
            <div class="contentbox">
            	<table width="100%">
                	<thead>
                    	<tr>
						<th width="10%"><input  type="checkbox" name="chkall"  id="chkall"  /></th>
						 <th width="9%">Srl No.</th>
						   <th width="23%">Service Image</th>
                        	<th width="17%">Service Name</th>
                            <th width="24%">Service Desc.</th>
                            <th width="17%">Actions</th>
                          
                        </tr>
                    </thead>
                    <tbody>
					<?php
									if($total_pages>0)
									{
											$i = $start;
											while($row = mysql_fetch_array($result))
											{
											$id=$row['service_id'];	
									?>
                    	<tr>
						<td align="center"><input type="checkbox" name="chk_id[]" value="<?php echo $id;?>" /></td>
						<td align="center"><?php echo $i+1; ?></td>
						    <td>
							<?php 										
							if(is_file($pathToThumbs.$row['thumb']))
						     {?>                                
   <a href="<?php echo $pathToImages.$row['image']; ?>" class="highslide" onclick="return hs.expand(this)"><img src="<?php echo $pathToThumbs.$row['thumb']; ?>"  border="1" width="150" height="100" /></a>
                                         
                              <?php
								}
						     ?>
							</td>
                        	<td><?php echo $row['service_name'];?> </td>
							
							<td>
							<?php echo substr($row['description'],0,200); ?>
							</td>
                            
                            <td>
							    <?php
								
										if($row['feature']==0)
										  {
										  ?>
                                          <a href="<?php echo $_SERVER['PHP_SELF'];?>?del_c_id=<?php echo $id;?>&mode=unfeature" onClick="Javascript: return confirm('Are You sure want to inactive this record?')" class="LinkText6"><img src="img/icons/approve.gif" height="15" width="15" border="0" title="Click to inactive" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                          
                                          <?php
										  }
										  else
										  {
										  ?>
										  <a href="<?php echo $_SERVER['PHP_SELF'];?>?del_c_id=<?php echo $id;?>&mode=feature" onClick="Javascript: return confirm('Are You sure want to active this record?')" class="LinkText6"><img src="img/icons/disapprove.gif"  height="15" width="15" border="0" title="Click to active" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
										  <?php
                                          }
										 ?>
                            	<a href="aed_service.php?service_id=<?php echo $id;?>&mode=edit&page=<?php echo $page; ?>" title="Edit Page"><img src="img/icons/edit_icon.jpg" alt="Edit" height="15" width="15" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="<?php echo $_SERVER['PHP_SELF']?>?del_c_id=<?php echo $id;?>&mode=del&page=<?php echo $page; ?>" title="Delete" onclick="return confirm('Are you sure to delete this record?');"><img src="img/icons/trash_icon.jpg" alt="Delete" height="15" width="15" border="0"/></a>
                            	<!--<a href="#" title=""><img src="img/icons/icon_approve.png" alt="Approve" /></a>
                                <a href="#" title=""><img src="img/icons/icon_unapprove.png" alt="Unapprove" /></a>
                                <a href="#" title=""><img src="img/icons/icon_delete.png" alt="Delete" /></a>        -->                    </td>
                            
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
                        	<td class="smltxt red" align="center">No page content available now!!</td>
                            </tr>
								  
								<?php
								  }
								/**---------------------- Pagination Step 3 --------------------------------**/
								?>
                    </tbody>
                </table>
				<input type="hidden" name="mode" id="mode" value="" />
                               
                                <input type="button" name="del" id="delall" value="Delete" onclick="checkdel('del');" />
                                &nbsp;&nbsp;                               
                                <input type="button" name="active" id="active" value="Active" onclick="checkdel('act');" />
                                 &nbsp;&nbsp;                               
                                <input type="button" name="inactive" id="inactive" value="Inactive" onclick="checkdel('inact');" />
                <!--<div class="extrabottom">
                	<ul>
                    	<li><img src="img/icons/icon_edit.png" alt="Edit" /> Edit</li>
                        <li><img src="img/icons/icon_approve.png" alt="Approve" /> Approve</li>
                        <li><img src="img/icons/icon_unapprove.png" alt="Unapprove" /> Unapprove</li>
                        <li><img src="img/icons/icon_delete.png" alt="Delete" /> Remove</li>
                    </ul>
                    <div class="bulkactions">
                    	<select>
                        	<option>Select bulk action...</option>
                        </select>
                        <input type="submit" value="Apply" class="btn" />
                    </div>
                </div>-->
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

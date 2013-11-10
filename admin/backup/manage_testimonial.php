<?php  
include("includes/include.php");
if($_SESSION['login_id']=='')
	{
	 echo "<script>window.location.href='index.php'</script>";
	}
$retcode=isset($_REQUEST['retcode'])?$_REQUEST['retcode']:"";
$testimonial_id=isset($_REQUEST['testimonial_id'])?$_REQUEST['testimonial_id']:"";
$mode=isset($_REQUEST['mode'])?$_REQUEST['mode']:"";
$company_name=isset($_REQUEST['company_name'])?trim($_REQUEST['company_name']):"";
$search=isset($_REQUEST['search'])?$_REQUEST['search']:"";
if($mode=='del')
{
 mysql_query("delete from table_testimonial  where testimonial_id='".$testimonial_id."'");
}
if($retcode==1)
{
 $msg='Data has saved.';
}
if($mode=='fea')
{
mysql_query("update table_testimonial set status=1 where testimonial_id='".$testimonial_id."' ");
}

 if($mode=='unfea')
{
mysql_query("update table_testimonial set status=0 where testimonial_id='".$testimonial_id."' ");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mange User</title>
<link href="css/global.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="popcalendar/cal2.js"></script>
<script language="javascript" src="popcalendar/cal_conf2.js"></script>
<script language="javascript" src="js/jquery.js"></script>
<script language="javascript" src="js/validate_user_jquery.js"></script>
<link href="css/pagination.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php
	
    $tbl_name="table_testimonial";      
    $adjacents = 3;
    $targetpage = $_SERVER['PHP_SELF']."?page";  	
    $limit = 10; 
	$page = @$_GET['page'];   
   
    $query = "SELECT * FROM ".$tbl_name ." where 1";
    $total_res=mysql_query($query);
    $total_pages = mysql_num_rows($total_res);  
	 
    include('pagination.php');	    ////////////////pagination page
    
	if($_REQUEST['page']=='all')
	{
	  $sql=$query." order by `testimonial_id` desc ";
	 $start=0;
	}
	else
	{
	 $sql=$query." order by `testimonial_id` desc LIMIT $start, $limit";
	}
	
    $result = mysql_query($sql);  

?>   

<table width="1002" border="0" align="center" cellpadding="0" cellspacing="0">
  <?php
  include("includes/header.php");
  ?>
  <tr>
    <td align="left" valign="top"><table width="1002" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="10" class="spacer"></td>
    <td width="220" bgcolor="#FFFFFF" align="left" valign="top">
	<?php
     include("includes/left_panel.php");
     ?>
	
	</td>
    <td width="10" align="left" valign="top" class="spacer"></td>
    <td align="left" valign="top" class="spacer"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
	  <td align="center" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold; color: #CC0033" height="20" >&nbsp;<?php echo $msg; ?></td>
	  </tr>
	  <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="10" height="37" align="left" valign="top"><img src="images/body_heading_l.jpg" width="10" height="37" /></td>
        <td height="37" align="left" valign="middle" class="heading_body">Testimonials Management(<?php echo $total_pages;?>)</td>
      </tr>
    </table>
	</td>
      </tr>
      <tr>
	  <td align="center">
        <!--<form name="srh" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
        <table width="86%" border="0" cellpadding="1" cellspacing="1" >
           <tr>
            <td width="29%" align="right" class="txt_new1">Company Name &nbsp;</td>             
            <td width="34%" class="txt_new2">
            <input type="text" name="company_name" value="<?php //echo $company_name;?>" />
            </td>
            <td width="29%" align="right" class="txt_new1"><input type="submit" name="search" value="Search" />&nbsp;</td>             
            <td width="34%" class="txt_new2">
            
            </td>
            
          </tr>
        
           
        </table>
        </form>-->
      </td>
	  </tr>
      <tr>
        <td align="left" valign="top" ><table width="100%" border="0">
          <tr>
            <td height="630" align="left" valign="top" > 
								  <form action="add_category_final.php" method="post" name="application_form" onsubmit="return validate_category();">
								  <table width="100%" border="0" cellspacing="0" cellpadding="4">
<tr bgcolor="#009900">
                                         <td width="8%" align="left" class="new_txt1">Sl.No.</td>
                              <td width="51%" align="left" class="new_txt1">Testimonials</td>
                              <td width="28%" align="left" class="new_txt1">Author</td>
                             
                              <td width="13%" align="left" class="new_txt1">Action</td>
								    </tr>                                
									<?php
									 if($total_pages>0)
									  {
											$i = 0;
											while($row = mysql_fetch_array($result))
											{											
										   if($i%2 == 0)
												{
													$style = "#FFFFFF";
												}
												else
												{
													$style = "#CCCCCC";
												}
									?>
                                    <tr bgcolor="<?php echo $style;?>" >
                                    <td align="left" class="new_txt2">
									  	<?php echo $i+1;?>									  </td> 
                                      <td align="left" class="new_txt2">
									  	<?php echo substr(strip_tags($row['description']),0,100);?>									  </td> 
                                     
                                    
                                        <td align="left" class="new_txt2">
									  	<?php 
										if($row['author_id']==0)
										{
										 $author="Admin";
										 $url='';
										}
										else
										{
										 $rw_usr=mysql_fetch_array(mysql_query("select * from user where user_id='".$row['author_id']."' "));
										 $author=$rw_usr['first_name'];
										 $url=$row['url'];
										}
										echo $author;
										echo "<br>$url";
										?>
									 </td>   
                                               
                                      <td align="left" class="new_txt2">
									  	<?php if($row['status']==1){ ?>
                                       <a href="<?php echo $_SERVER['PHP_SELF']?>?testimonial_id=<?php echo $row['testimonial_id'];?>&mode=unfea&page=<?php echo $page; ?>" onclick="return confirm('Are you sure want to unfeature this testimonial?');"><img src="images/approve.gif" border="0" /></a><?php } else {?>  
                                      <a href="<?php echo $_SERVER['PHP_SELF']?>?testimonial_id=<?php echo $row['testimonial_id'];?>&mode=fea&page=<?php echo $page; ?>" onclick="return confirm('Are you sure want to feature this testimonial?');"> <img src="images/disapprove.gif" border="0" /></a><?php }?>  
                                        <a href="aed_testimonial.php?testimonial_id=<?php echo $row['testimonial_id'];?>&mode=edit&page=<?php echo $page; ?>">Edit</a>&nbsp;
										<a href="<?php echo $_SERVER['PHP_SELF']?>?testimonial_id=<?php echo $row['testimonial_id'];?>&mode=del&page=<?php echo $page; ?>" onclick="return confirm('Are you sure want to delete this record ?');">Delete</a> 
                                        <!--<a href="user_payment_details.php?fld_member_testimonial_id=<?php //echo $row['fld_member_testimonial_id'];?>">View</a>-->                                        </td>               
								    </tr>
							    	<?php 
												$i++;
											}
									?> 
								
								  
								<?php
								/**---------------------- Pagination Step 3 --------------------------------**/
								?>
								<?php
									if(!empty($pagination))
									{
								?>
								
					
								<tr>
								<td  align="center" colspan="6">
									<?php echo $pagination;?>
								</td>
								</tr>
								<?php
									}
								}
								else
								{
								?>
                                <td  align="center" colspan="6">
									<b>No record Found!</b>
								</td>
                                <?php
								}	
								?>

						   
									
						  </table>
					    </form></td>
          </tr>
        </table></td>
      </tr>
      
    </table></td>
    <td width="10" class="spacer"></td>
  </tr>
  
  
</table></td>
  </tr>
  <?php include("includes/footer.php");?>
</table>
</body>
</html>

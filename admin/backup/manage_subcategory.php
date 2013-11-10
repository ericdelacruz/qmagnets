<?php
//////////// checking for login authentication
	include("includes/include.php");
	if($_SESSION['login_id']=='')
	{
	 echo "<script>windows.location.href='index.php'</script>";
	}
	
///////////Parameter setting list	

     $category_id=isset($_REQUEST['category_id'])?$_REQUEST['category_id']:"";
	 $category_name=isset($_REQUEST['category_name'])?$_REQUEST['category_name']:"";
	 $mode=isset($_REQUEST['mode'])?$_REQUEST['mode']:"";
     $msg=isset($_REQUEST['msg'])?$_REQUEST['msg']:"";
     $retcode=isset($_REQUEST['retcode'])?$_REQUEST['retcode']:"";	
	 
//////////Deletion perform here

     if($mode=="del")
	  {
	   $sql_del_cat="delete  from `table_category` where `category_id`='".$category_id."' ";
	   $res_del_cat=mysql_query($sql_del_cat);
	   echo "<script>windows.location.href='".$_SERVER['PHP_SELF']."'</script>";
	  }
	  
	  if($retcode==1)
	  {
	  $msg="Sub Category has saved";
	  }
	
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/common_script.php");?>
<link href="styles/pagination.css" rel="stylesheet" type="text/css" />
</head>
<body id="homepage">
<?php
/////////////// php code for pagination

        $tbl_name="subcat_main";
		$adjacents=3;
		$targetpage = $_SERVER['PHP_SELF']."?page"; 
		$limit=25;
		$page=@$_GET['page'];
		$query = "SELECT * FROM ".$tbl_name ." where 1";
		$total_res=mysql_query($query);
		$total_pages = mysql_num_rows($total_res);  
	 
		include('pagination.php');	    ////////////////pagination function included
		
		if($_REQUEST['page']=='all')
		{
		  $sql=$query." order by `subcat_id` desc ";
		 $start=0;
		}
		else
		{
		 $sql=$query." order by `subcat_id` desc LIMIT $start, $limit";
		}
		
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
                <h2>Manage Sub-Category</h2>
            </div>
            <div class="contentbox">
            	<table width="100%">
                	<thead>
                    	<tr>
						    <th width="22%">Srl. No.</th>
                        	<th width="22%">Category Name</th>
                           
                            <th width="13%">Actions</th>
                          <!--  <th width="5%"><input name="" type="checkbox" value="" id="checkboxall" /></th>-->
                        </tr>
                    </thead>
                    <tbody>
					<?php
									///////// row wise data fetch
									if($total_pages>0)
									{
									  $i=$start;
									  while($row=mysql_fetch_array($result))
									  {
									    $category_id=$row['category_id'];
										
										$category_name=$row['category_name'];
										
									?>
                    	<tr>
                        	<td><?php echo $i;?></td>
                            <td><?php echo $category_name;?></td>
                            <td>
                            	<a href="aed_category.php?category_id=<?php echo $category_id;?>&mode=edit&page=<?php echo $page; ?>" title="Edit"><img src="img/icons/icon_edit.png" alt="Edit" /><b style="text-decoration:none;"> Edit</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="<?php echo $_SERVER['PHP_SELF']?>?category_id=<?php echo $category_id;?>&mode=del&page=<?php echo $page; ?>" title="Delete" onclick="return confirm('Are you sure to delete this record?');"><img src="img/icons/icon_delete.png" alt="Delete" /><b style="text-decoration:none;">Delete</b></a>
                            	<!--<a href="#" title=""><img src="img/icons/icon_approve.png" alt="Approve" /></a>
                                <a href="#" title=""><img src="img/icons/icon_unapprove.png" alt="Unapprove" /></a>
                                <a href="#" title=""><img src="img/icons/icon_delete.png" alt="Delete" /></a>        -->                    </td>
                           <!-- <td><input type="checkbox" value="" name="checkall" /></td>-->
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
                        	<td align="center" style="color:#FF0000; font-weight:bold; font-size:14px;">No page content available now!!</td>
                            </tr>
								  
								<?php
								  }
								/**---------------------- Pagination Step 3 --------------------------------**/
								?>
                    </tbody>
                </table>
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

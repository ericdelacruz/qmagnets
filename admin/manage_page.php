<?php  

include("includes/include.php");

if($_SESSION['login_id']=='')

	{

	 echo "<script>window.location.href='index.php'</script>";

	}

$del_c_id=isset($_REQUEST['del_c_id'])?$_REQUEST['del_c_id']:"";

$mode=isset($_REQUEST['mode'])?$_REQUEST['mode']:"";

$msg=isset($_REQUEST['msg'])?$_REQUEST['msg']:"";

$retcode=isset($_REQUEST['retcode'])?$_REQUEST['retcode']:"";	



  if($retcode==1)

  {

   $msg='Page content has saved.';

  }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?php include("includes/common_script.php");?>

<link href="styles/pagination.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="highslide/highslide-with-html.js"></script>

<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />



<script type="text/javascript">

hs.graphicsDir = 'highslide/graphics/';

hs.outlineType = 'rounded-white';

hs.wrapperClassName = 'draggable-header';

hs.width=800;

hs.height=400;

</script>

</head>

<body id="homepage">

<?php

	

    $tbl_name="table_page";      

    $adjacents = 3;

    $targetpage = $_SERVER['PHP_SELF']."?page";  	

	$start=0;

    $limit =10; 

	$page = @$_GET['page'];   

   

    $query = "SELECT * FROM ".$tbl_name ." where 1";

    $total_res=mysql_query($query);

    $total_pages = mysql_num_rows($total_res);  

	 

    include('pagination.php');	    ////////////////pagination page

    

	if($_REQUEST['page']=='all')

	{

	  $sql=$query." order by `pageid` desc ";

	  $start=0;

	}

	else

	{

	 $sql=$query." order by `pageid` desc LIMIT $start, $limit";

	}

	

    $result = mysql_query($sql);  



?>  

	 <!-- Top Header Start -->

		<?php include("includes/header.php");?>

	 <!-- Top Header End --> 

	        

     <!-- Top Breadcrumb Start -->

        <?php include("includes/breadcrumb.php");?>



    <div id="rightside">



        <!-- Alternative Content Box Start -->

         <div class="contentcontainer">

            <div class="headings altheading">

                <h2>Manage Article Content

				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				<!--<span style="padding-right:100px;"><a href="aed_page.php?mode=add" style="text-decoration:none; border:0px; "><img src="img/icons/addanother.png" alt="Edit" height="25" width="90" border="0" /></a></span>-->

				<span style="padding-right:100px;"><a href="../" style="text-decoration:none; border:0px;" target="_blank"><img src="img/icons/preview.png" alt="Edit" height="25" width="90" border="0" /></a></span>

				</h2>

            </div>

            <div class="contentbox">

            	<table width="100%">

                	<thead>

                    	<tr>
                            <th width="22%">Title</th>
                        	<th width="22%">Heading</th>

                            <th width="60%">Content</th>

                            <th width="13%">Actions</th>

                          <!--  <th width="5%"><input name="" type="checkbox" value="" id="checkboxall" /></th>-->

                        </tr>

                    </thead>

                    <tbody>

					<?php

									if($total_pages>0)

									{

											$i = $start;

											while($row = mysql_fetch_array($result))

											{

											$pageid=$row['pageid'];	

									?>

                    	<tr>
                            <td><?php echo $row['pagetitle'];?></td>
                        	<td><?php echo $row['pageheading'];?></td>

                            <td><?php echo strip_tags(substr($row['pagecontent'],0,400));?></td>

                            <td align="center">

                            	<a href="aed_page.php?pageid=<?php echo $pageid;?>&mode=edit&page=<?php echo $page; ?>" title="Edit Page"><img src="img/icons/edit_icon.jpg" alt="Edit" height="20" width="20" border="0" /></a>

                            	<a href="view_detail.php?pageid=<?php echo $pageid;?>" onclick="return hs.htmlExpand(this, { objectType: 'iframe' } )"><img src="img/icons/view.gif" alt="Approve" /></a>

                               <!-- <a href="#" title=""><img src="img/icons/icon_unapprove.png" alt="Unapprove" /></a>

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

                        	<td></td>

                            <td style="font-style:normal; color:#006699; font-weight:bold">No Page Content Available Now.....</td>

                            <td align="center">

                            </td>

                          

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


<?php  
include("includes/include.php");
if($_SESSION['login_id']=='')
	{
	 echo "<script>window.location.href='index.php'</script>";
	}
	//print_r($_POST); exit;
ini_set('max_upload_filesize', 10388608);  
//ini_set('memory_limit', '-1');	
//include('thump_function.php');
include('class.upload.php');
include("fckeditor/fckeditor.php") ;
$sBasePath="fckeditor/";
$page=isset($_REQUEST['page'])?$_REQUEST['page']:"";	
$mode=isset($_REQUEST['mode'])?$_REQUEST['mode']:"";
///$catid=isset($_REQUEST['catid'])?$_REQUEST['catid']:"";
$id=isset($_REQUEST['id'])?$_REQUEST['id']:"";
$submit=isset($_REQUEST['submit'])?$_REQUEST['submit']:"";
$apply=isset($_REQUEST['apply'])?$_REQUEST['apply']:"";
$image1=isset($_REQUEST['image1'])?$_REQUEST['image1']:"";
$catid2=isset($_REQUEST['catid2'])?$_REQUEST['catid2']:"";
$itemid=isset($_REQUEST['itemid'])?$_REQUEST['itemid']:"";
$del_c_id=isset($_REQUEST['del_c_id'])?$_REQUEST['del_c_id']:"";
$retcode=isset($_REQUEST['retcode'])?$_REQUEST['retcode']:"";
$is_cover=isset($_REQUEST['is_cover'])?$_REQUEST['is_cover']:"";


$width   = 165;
$height  = 179;


$pathToImages = 'gallery/normal/';
$pathToThumbs = 'gallery/thumb/';
$dest=$pathToImages.$image;

if($mode=='del')
{
$sql_g="select * from gallery where galid='".$del_c_id."' ";
$res_g=mysql_query($sql_g);
while($row_g=mysql_fetch_array($res_g))
{
	if(is_file($pathToImages.$row_g['image']))
	{
		@unlink($pathToImages.$row_g['image']);
	 	@unlink($pathToThumbs.$row_g['timage']);
	}
 }
 mysql_query("delete from gallery where galid='".$del_c_id."'"); 
 
}	



if(!empty($submit))
{
     
		
	 $nm=explode(".",$_FILES['image']['name']);
			$ext=$nm[1];
			$file_name=rand()."_".time();
			$file = $file_name.'.'.$ext;
			$foo = new Upload($_FILES['image']);
			if ($foo->uploaded) 
			{
			 	 // save uploaded image with a new name
				  $foo->file_new_name_body = $file_name;
				  $foo->Process($pathToImages);
				  if ($foo->processed) {
					//echo 'Uploaded';
				  } else {
					$msg=$foo->error;
					$valid=0;
				  }

				 // save uploaded image with a new name,
				 // resized to small thumbnail //
				 $foo->file_new_name_body		= 't'.$file_name;
				 $foo->image_resize			= true;
				 $foo->image_ratio_fill		= true;
				 $foo->image_y					= $height;
				 $foo->image_x					= $width;
				 $foo->image_background_color = '#F2F2F2';
				 $foo->Process($pathToThumbs);
				 $foo->processed;	 	
			}
	  		
		
	
	 

   $sql_ins="INSERT INTO `gallery` set `image`='".$file."',`timage`='t".$file."',`catid`='".$itemid."',`input_date`='".date('Y'."-".'m'."-".'d')."'"; 
	$res_ins=mysql_query($sql_ins);	
	
	 
   
   ?>
   <script language="javascript">
        window.location.href='aed_gallery.php?retcode=1&page=<?php echo $page; ?>&mode=add&itemid=<?php echo $itemid;  ?>';
       </script>
       
  
   

   
	  
   <?php
   
}
 //echo "select * from gallery where `gid`='".$id."' "; 
$sql_show="select * from gallery where `galid`='".$id."' "; 
$res_show=mysql_query($sql_show);
$row_user=mysql_fetch_array($res_show);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/common_script.php");?>

<link href="styles/pagination.css" rel="stylesheet" type="text/css" />
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
<?php if($mode=='add'){ ?>
 function validate_product(str)
 {  
  if(document.getElementById('image').value=='')
    {
	  document.getElementById('msg_error').innerHTML="Please browse an image.";
	  document.getElementById('image').style.borderColor="red";
	  document.getElementById('image').focus();
	  return false;
     }
  else
   {
	 document.getElementById('image').style.borderColor="";
   }   
}
<?php }?> 


</script>



	<link type="text/css" href="css/ui-lightness/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
	<script type="text/javascript" src="jquery/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="jquery/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="jquery/timepicker.js"></script>
    
    
    <script type="text/javascript">

function getActive(int)

{

//var portfolio_id = <?php //echo $portfolio_id ?>;

//alert(int);

if (window.XMLHttpRequest)

  {// code for IE7+, Firefox, Chrome, Opera, Safari

  xmlhttp=new XMLHttpRequest();

  }

else

  {// code for IE6, IE5

  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

  }

xmlhttp.onreadystatechange=function()

  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)

    {

    document.getElementById("isfeature").innerHTML=xmlhttp.responseText;

	

    }

  } 

var url="make_feature.php?is_cover="+int+"&catid=<?php echo $_REQUEST['itemid'];?>";// alert(url);

xmlhttp.open("GET","make_feature.php?is_cover="+int+"&catid=<?php echo $_REQUEST['itemid'];?>",true);

xmlhttp.send();

}

</script>
</head>
<body id="homepage">
<!--<script type="text/javascript">
$(function() {
    $('#date').datepicker({
    	duration: '',
        showTime: false,
        constrainInput: false
     });
	
});
</script>-->


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
                <h2>Gallery Add / Edit <span style="padding-right:100px;"><a href="../" style="text-decoration:none; border:0px;" target="_blank"><img src="img/icons/preview.png" alt="Edit" height="25" width="90" border="0" /></a></span></h2>
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
               <input type="hidden" name="itemid"  id="itemid" value="<?php echo $itemid; ?>" />
              
              <input type="hidden" name="id" value="<?php echo $row_user['galid']; ?>" />
              <input type="hidden" name="page" value="<?php echo $page; ?>" />
              
               <?php
	
    $tbl_name="gallery";	      
    $adjacents = 3;
    $targetpage = $_SERVER['PHP_SELF'].'?id='.$id.'&page';	
    $limit = 16; 
	$page = @$_GET['page'];   
   
    $query = "SELECT * FROM ".$tbl_name ." where catid='".$itemid."'";
	if($category_id!='')
	{
		$query.=" AND id='".$id."' ";
	}		
		 
    $total_res=mysql_query($query);
    $total_pages = mysql_num_rows($total_res);  
	 
    include('pagination.php');	    ////////////////pagination page
    
	if($_REQUEST['page']=='all')
	{
	  $sql=$query." order by `galid` desc ";
	 $start=0;
	}
	else
	{
	 $sql=$query." order by `galid`  asc LIMIT $start, $limit";
	 
	}
	//echo $sql;
    $result = mysql_query($sql);
	 
   

?>   
              
            <div class="contentbox">
            	    <div id="msg_error" style="color:#FF0000; font-weight:bold;">
                       <h2><?php echo $msg; ?></h2>
                    </div>
                    <?php
						$q_cat=mysql_query("select * from category where catid='".$itemid."' ");
						$f_cat=mysql_fetch_array($q_cat);
						
					?>
                    <input type="hidden" name="catid" value="<?php echo $f_cat['catid']; ?>" />
            		<p>
                    	<?php if($mode=='add' && $retcode=='4'){  ?>
                    	<h3>Upload Images for&nbsp;<font color="#006699"><?php echo $f_cat['category'];  ?></font>&nbsp;Album</h3>
                        <?php } ?>
                       
                        <?php
						if($mode=='add' && $retcode=='1'){	
							$q_cat2=mysql_query("select * from category where catid='".$itemid."' ");
							$f_cat2=mysql_fetch_array($q_cat2);
						?>	
                        <h3>Upload Images for&nbsp;<font color="#006699"><?php echo $f_cat2['category'];  ?></font>&nbsp;Album</h3>
                        <?php } ?>
                        
                        <?php
						if($mode=='del' ){	
							$q_cat3=mysql_query("select * from category where catid='".$itemid."' ");
							$f_cat3=mysql_fetch_array($q_cat3);
						?>	
                        <h3>Upload Images for&nbsp;<font color="#006699"><?php echo $f_cat3['category'];  ?></font>&nbsp;Album</h3>
                        <?php } ?>
                    </p>        
                       
                   
					<p>
                        <label for="textfield"><strong>Image:</strong></label>
                        
                        <input type="file" name="image" id="image" /> <!--<img src="img/loading.gif" alt="Loading" /> Uploading... -->
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
									   ?>  
                                   
                                 </td>	
                                 						  
						      </tr>
                              <?php
									}
								?>
									<br/>
									
					
                <input type="submit"  class="btn" name="submit" value="Save"/> 
			<a href="manage_galcat.php"><input type="cancel"  class="btnalt" name="cancel" value="Cancel"/></a>
				
                <br /><br />
                
                
       
       <table width="100%">
          <thead>
            <tr>
             
              <th width="6%">Srl No.</th>
              <th width="6%">Category</th>
              <th width="16%">Image</th>
              <th>Input Date</th>  
              <th>Cover Image</th>            
              <th width="18%">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
						if($total_pages>0)
						{
								$i = $start;
								while($row = mysql_fetch_array($result))
								{
								$id=$row['galid'];	
						?>
            <tr>
             
              <td align="center"><?php echo $i+1; ?></td>
              
              
               <td>
							<?php 										
							$rw_cat=mysql_fetch_array(mysql_query("select * from category where catid='".$row['catid']."' "));
							echo $rw_cat['category'];?>						
              </td>
							

            
              <td><?php 										
							if(is_file($pathToImages.$row['image']))
						     {
							
							 ?>
                <a href="<?php echo $pathToImages.$row['image']; ?>" class="highslide" onClick="return hs.expand(this)"><img src="<?php echo $pathToImages.$row['image']; ?>"  border="1" width="150" height="100" /></a>
                <?php
								}
						     ?></td>
                             
                             <td><?php echo $row['input_date'];  ?></td>
                 			<td><label class="radio">

							<input name="is_cover" type="radio" value="<?php echo $row['galid'];?>" onClick="getActive(this.value)" <?php if($row['is_cover']=='1') echo "checked";?>/>

									
						    </label> </td>          
                             
             
              
              <td><?php 
								
										 ?>
              <!--  <a href="aed_gallery.php?id=<?php echo $row['galid'];?>&mode=edit&page=<?php echo $page; ?>&catid=<?php echo $row['catid']; ?>" title="Edit Page"><img src="img/icons/edit_icon.jpg" alt="Edit" height="15" width="15" border="0" /></a>-->&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo $_SERVER['PHP_SELF']?>?del_c_id=<?php echo $row['galid'];?>&mode=del&page=<?php echo $page; ?>&itemid=<?php echo $row['catid'];; ?>" title="Delete" onClick="return confirm('Are you sure to delete this record?');"><img src="img/icons/trash_icon.jpg" alt="Delete" height="15" width="15" border="0"/></a> 
               <!-- <a href="<?php echo $_SERVER['PHP_SELF']?>?id=<?php echo $row['gid'];?>&mode=feature&page=<?php echo $page; ?>" title="Approve"><img src="img/icons/approve.gif" alt="Approve" onclick="return confirm('Are you sure to Approve this record?');" /></a>
                                <a href="<?php echo $_SERVER['PHP_SELF']?>?id=<?php echo $row['gid'];?>&mode=unfeature&page=<?php echo $page; ?>" title="Disapprove" onclick="return confirm('Are you sure to Disapprove this record?');"><img src="img/icons/disapprove.gif" alt="Unapprove" /></a>
                                <a href="#" title=""><img src="img/icons/icon_delete.png" alt="Delete" /></a>-->       </td>
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
              <td class="smltxt red" align="center" colspan="5">No page content available now!!</td>
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

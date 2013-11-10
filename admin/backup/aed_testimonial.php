<?php  
include("includes/include.php");
if($_SESSION['login_id']=='')
	{
	 echo "<script>window.location.href='index.php'</script>";
	}
	
	include("fckeditor/fckeditor.php") ;
    $sBasePath="fckeditor/";
	
$page=isset($_REQUEST['page'])?$_REQUEST['page']:"";	
$testimonial_id=isset($_REQUEST['testimonial_id'])?$_REQUEST['testimonial_id']:"";
$title=isset($_REQUEST['title'])?$_REQUEST['title']:"";	
$description=isset($_REQUEST['description'])?$_REQUEST['description']:"";		
$msg=isset($_REQUEST['msg'])?$_REQUEST['msg']:"";
$mode=isset($_REQUEST['mode'])?$_REQUEST['mode']:"";
$submit=isset($_REQUEST['submit'])?$_REQUEST['submit']:"";
if(!empty($submit))
{

 if($mode=='edit')
 { 
 mysql_query("update table_testimonial set title='".$title."',description='".$description."' where testimonial_id='".$testimonial_id."' ");
 }
 if($mode=='add')
 {
 mysql_query("insert into table_testimonial set title='".$title."',description='".$description."',input_date='".date('Y-m-d')."'  ");
 }
  ?>
  <script language="javascript">
       window.location.href='manage_testimonial.php?retcode=1&page=<?php echo $page;?>';
       </script>
 <?php      
}
 $row_plan=mysql_fetch_array(mysql_query("select * from table_testimonial where testimonial_id='".$testimonial_id."'"));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Index</title>
<link href="css/global.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="popcalendar/cal2.js"></script>
<script language="javascript" src="popcalendar/cal_conf2.js"></script>
<script language="javascript" src="js/jquery.js"></script>
<script language="javascript" src="js/validate_user_jquery.js"></script>
<script language="javascript">
 function check()
 {
    //var name=document.getElementById('title').value;
    var code=document.getElementById('description').value;

/* if(name=='')
		    {
		    document.getElementById('msg_error').innerHTML="Please enter title."; 
        	document.getElementById('title').focus();
			return false;
			}*/
 if(code=='')
		    {
		    document.getElementById('msg_error').innerHTML="Please enter testimonial."; 
        	//document.getElementById('testimonial').focus();
			return false;
			}
		
 }
</script>
</head>
<body>
<table width="941" border="0" align="center" cellpadding="0" cellspacing="0">
  <?php
  include("includes/header.php");
  ?>
  <tr>
    <td align="left" valign="top"><table width="941" border="0" cellspacing="0" cellpadding="0">
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
	  <td>&nbsp;</td>
	  </tr>
	  <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="10" height="37" align="left" valign="top"><img src="images/body_heading_l.jpg" width="10" height="37" /></td>
       <td height="37" align="left" valign="middle" class="heading_body"><?php echo ucfirst($mode); ?> Testimonials&nbsp; </td>
      </tr>
    </table>
	</td>
      </tr>
      
      <tr>
        <td align="left" valign="top" class="background_1"><table width="100%" border="0">
          <tr>
            <td height="630" align="left" valign="top" > <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onSubmit="return check();"  >
            											<input type="hidden" name="testimonial_id" value="<?php echo $testimonial_id; ?>" />
                                        <input type="hidden" name="mode" value="<?php echo $mode; ?>" />
                                        <input type="hidden" name="page" value="<?php echo $page; ?>" />
								  <table width="100%" border="0" cellspacing="0" cellpadding="4" >
								   <tr class="background_1">                               
                                   <td>&nbsp;</td>
                                   <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                   <td width="76%" id="msg_error" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold; color: #CC0033;">
                                   <?php echo $msg; ?>                                   </td>
							        </tr>
                                    <tr class="background_1">
                                      <td width="3%" class="txt_new3">&nbsp;</td>
                                      <td width="20%" align="right" class="new_txt1">Testimonial Title <span class="txt_red">*</span></td>
                                      <td width="5%" align="center" class="txt_new3">:</td>
                                      <td width="72%">
                                 <input type="text" name="title" id="title" style="width:275px;" class="new_txt2" value="<?php echo $row_plan['title']; ?>" ></td>  
								    </tr>                           
                                    <tr class="background_1">
                                      <td width="3%" class="txt_new3">&nbsp;</td>
                                      <td width="16%" align="right" valign="top" class="new_txt1">Testimonials</td>
                                      <td width="5%" align="center" valign="top" class="txt_new3">:</td>
                                      <td width="76%" >
                             <?php      
								$oFCKeditor = new FCKeditor('description') ;
                                                                                       $oFCKeditor->BasePath = $sBasePath ;
                                                                                       $oFCKeditor->Width="550";
                                                                                       $oFCKeditor->Height="400";
                                                                                       $techspecify=$row['fckeditor'];
                                                                                       $oFCKeditor->Value  = $row_plan['description'];
                                                                                       $oFCKeditor->Create() ; 
                                                                 
							?>							
                               <!-- <textarea name="description" style="width:450px; height:150px;" id="description" ><?php echo $row_plan['description']; ?></textarea>-->
                                      </td>  
								    </tr>
									  
									  
									 
									  <tr class="background_1">
									  <td colspan="3" >&nbsp;</td>
									   <td><table width="100%" border="0">
  <tr>
    <td  align="left"><input type="submit" class="btn" name="submit" value="Save"></td>
    <td width="6%">&nbsp;</td>
  </tr></table> 									   </td>
									  </tr>
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

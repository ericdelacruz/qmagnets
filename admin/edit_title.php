<?php
//////////// checking for login authentication
@session_start();
include("includes/include.php");

///////////Parameter setting list	
	$id=isset($_REQUEST['id'])?$_REQUEST['id']:"";	
    $mode=isset($_REQUEST['mode'])?$_REQUEST['mode']:"";
	
	$link=isset($_REQUEST['link'])?$_REQUEST['link']:"";
	$submit=isset($_REQUEST['submit'])?$_REQUEST['submit']:"";
	

///////////Add, Edit, Fetch Operation


    if(!empty($submit)){

	  if($mode=="edit")
	   {
	  
	    $sql_cat="update `table_whychooseus` set `link`='".addslashes($link)."' where `id`='".$id."' ";
		 mysql_query($sql_cat) or die(mysql_error()); 
	   } 
		  if(mysql_query($sql_cat))
		  {
		   echo "<script>parent.window.location.href='manage_rightmenu.php'</script>";
		   
		  } 
	 
	}
	
	$sql_cat="select id,link from `table_whychooseus` where `id`='".$id."' ";
	$res_cat=mysql_query($sql_cat);
	$row_cat=mysql_fetch_array($res_cat);
	
	$link=$row_cat['link'];
	
	
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php //require_once("include/common_script.php");?>
<script language="javascript">
function check()
{
 if(document.getElementById('link').value=='')
  {
	  //document.getElementById('msg_error').innerHTML="Please enter your name.";
	  document.getElementById('link').style.borderColor="red";
	  document.getElementById('link').focus();
	  return false;
  }
   else
  {
   document.getElementById('link').style.borderColor="";
  }
   
 
}


</script>
</head>
<body>
 <form id="rename" name="rename" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return check();">
 <input type="hidden" name="id" value="<?php echo $id;?>">
 <input type="hidden" name="mode" id="mode" value="edit">
	<table width="100%" border="0" cellspacing="5" cellpadding="5">
	  <tr>
		<td width="25%" scope="row" style="color:#333333;">Title</td>
		<td width="75%"><input type="text" name="link" id="link" style="width:300px;" height="30" value="<?php echo stripslashes($link);?>"/></td>
	  </tr>
	  <tr>
		<td scope="row">&nbsp;</td>
		<td>
		<input type="hidden"  name="submit" value="Save">
		<input type="submit"  class="btn" name="submit" value="Save"/></td>
	  </tr>
	  <tr>
		<td scope="row">&nbsp;</td>
		<td>&nbsp;</td>
	  </tr>
	</table>
</form>

</body>
</html>

<?php 

include("includes/include.php");
$pathToImage='welcome_img/thumb/';
$about_id=isset($_REQUEST['about_id'])?$_REQUEST['about_id']:"";

if($_SESSION['login_id']=='')

	{

	 echo "<script>window.location.href='index.php'</script>";

	}

    $query = "SELECT * FROM  welcome where welcome_id='".$about_id."' ";

    $total_res=mysql_query($query);

    $row_content = mysql_fetch_array($total_res);

	  

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

</head>



<div >



		<p><b><u>Welcome Title</u></b></p>
        <p><?php echo $row_content['title']; ?></p>
		<p><b><u>Welcome Content</u></b></p>
		<p><?php echo stripslashes($row_content['welcome']);?></p>
		
	</div>

 </div>               

</body>

</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
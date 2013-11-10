<?php
include("includes/include.php");
if($_SESSION['login_id']=='' && $_SESSION['agent_id']=='')
	{
	 echo "<script>window.location.href='index.php'</script>";
	}
	

$is_cover=isset($_REQUEST['is_cover'])?$_REQUEST['is_cover']:"";	
$catid=isset($_REQUEST['catid'])?$_REQUEST['catid']:"";
//echo "update table_product_image set isfeature='0' where image_id='".$isfeature."' and product_id='".$product_id."' "; exit;
mysql_query("update gallery set is_cover='0' where catid='".$catid."' ");
mysql_query("update gallery set is_cover='1' where galid='".$is_cover."' and catid='".$catid."'");

?>
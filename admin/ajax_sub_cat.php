<?php
include("includes/include.php");
if($_SESSION['login_id']=='')
	{
	 echo "<script>window.location.href='index.php'</script>";
	}
?>
		
		<?php
			 $qry_cat2 = "select * from `subcat_main` where `category_id`='".$_GET['category_id']."'";
			$qry_cat2 = mysql_query($qry_cat2);
			if(mysql_num_rows($qry_cat2))
			{
				echo '<select name="subcat_id" size="1">';
				while($qry_cat_res2 = mysql_fetch_array($qry_cat2))
				{
					$subcat_id = $qry_cat_res2['subcat_id'];
					$subcat_name = $qry_cat_res2['subcat_name'];
		?>			
					<option value="<?php echo $subcat_id;?>"><?php echo $subcat_name;?></option>
		<?php		
					
				}	
				echo '</select>';
			}
			else
			{
				echo '<select name="subcat_id" size="1" id="subcat_id">';
				echo '<option value="">-- Select --</option>';
				echo '</select>';
			}
		?>							
		
 


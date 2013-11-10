<?php
include("includes/include.php");
if($_SESSION['login_id']=='')
	{
	 echo "<script>window.location.href='index.php'</script>";
	}
	
	
	
?>
		
		<?php
			 $qry_cat2 = "select * from `sub_menu` where `menu_id`='".$_GET['menu_id']."'"; 
			
			$qry_cat2 = mysql_query($qry_cat2);
			if(mysql_num_rows($qry_cat2))
			{
			?>	
			<select name="submenu_id" id="submenu_id" size="1" >
            <?php
				
				while($qry_cat_res2 = mysql_fetch_array($qry_cat2))
				{
					$submenu_id = $qry_cat_res2['submenu_id'];
					$submenu = $qry_cat_res2['submenu'];
		?>			
					<option value="<?php echo $submenu_id;?>"><?php echo $submenu;?></option>
		<?php		
					
				}
				
		
				echo '</select>';
			}
			
		?>	
      
        
   
  
  
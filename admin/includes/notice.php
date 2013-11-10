<?php
 include("includes/include.php");
 	$user_type = $_SESSION['type'];
	if($user_type == 'admin')
	{
		$user = 'Administrator';	
	}
	if($user_type == 'client')
	{
		$user = 'Client';	
	}
	if($user_type == 'surveyor')
	{
		$user = 'Surveyor';	
	}
	
    $sql_admin_login = "select * from `admin_information` where `fld_id`='".$_SESSION['login_id']."'";
	$result_admin_login = mysql_query($sql_admin_login);
	$row_admin_login    = mysql_fetch_assoc($result_admin_login);
	?>
<style type="text/css">
.block_dashboard {
	/*padding-bottom:150px;*/
	padding-left:50px;
	float:left;
}
.box.first {
	margin-top: 20px;
}
.box.round {
	border-radius: 5px 5px 0 0;
}
.box {
	background: none repeat scroll 0 0 #FFFFFF;
	margin-bottom: 20px;
	margin-left: -8px;
	padding: 10px;
}
.box h2 {
	background: none repeat scroll 0 0 #E6F0F3;
	border-bottom: 1px solid #B3CBD6;
	border-radius: 5px 5px 0 0;
	color: #1B548D;
	font-size: 1.2em;
	font-weight: bold;
	margin: -10px -10px 0;
	padding: 10px 12px;
}
ul.shortcut-buttons-set {
	list-style-type: none;
	width: 100%;
}
ul.shortcut-buttons-set li {
	background: none repeat scroll 0 center transparent;
	float: left;
	list-style: none outside none;
	margin: 0 15px 0 0;
	padding: 0 !important;
}
.shortcut-button {
	border: 1px solid #CCCCCC;
	display: block;
	margin: 0 0 20px;
	width: 120px;
}
.shortcut-button span {
	border: 1px solid #FFFFFF;
	color: #555555;
	display: block;
	font-size: 13px;
	line-height: 1.3em;
	padding: 15px 10px;
	text-align: center;
}
.shortcut-button span img {
	margin-bottom: 10px;
}
ul.shortcut-buttons-set li a {
	color: #000;
	font-weight:bold;
	text-decoration: none;
}
ul.shortcut-buttons-set li a:hover {
	color:#333;
}
</style>

<!-- Content Box Start -->
<div class="contentcontainer">
  <div class="headings">
    <h2>Dashboard</h2>
  </div>
  <div class="contentbox">
    <div class="box round first"> 
      <!--<h2>Administrative Area</h2>
                <div style="float:left; text-align:left;width:80%;"><strong>Administrative Area</strong></div>-->
      <div class="block_dashboard">
        
        <ul class="shortcut-buttons-set">
          <!-- Replace the icons URL's with your own -->
          <li> <a class="shortcut-button" href="site_config.php"> <span> <img src="img/dash_image/admin.png" alt="icon" height="60px"><br>
            Administrative Settings </span> </a> </li>
            <li> <a class="shortcut-button" href="change_admin_pass.php"> <span> <img src="img/dash_image/password.png" alt="icon" height="60px"><br>
            Change Password </span> </a> </li>
             
         </ul>
         </div>
         <div style="clear: both;"></div>
         
         <div class="block_dashboard">
         	<ul class="shortcut-buttons-set">
           
           
           
           <li> <a class="shortcut-button" href="manage_welcome.php"> <span> <img src="img/dash_image/Welcome-128.png" alt="icon" height="78px"><br>
           Welcome </span> </a> </li>
           
           
          
           
           
            
           
           
           <li> <a class="shortcut-button" href="manage_banner.php" title="Manage Banner"> <span> <img src="img/dash_image/banner_design.png" alt="icon" height="78px"><br>
           Banner </span> </a> </li>
           
           <li> <a class="shortcut-button" href="manage_scroller.php" title="Manage Scroller"> <span> <img src="img/dash_image/banner_design2.png" alt="icon" height="78px"><br>
           Scroller </span> </a> </li>
           
            
          
           
            
           
           </ul>
         </div>
         
         <div style="clear: both;"></div>
         
         <div class="block_dashboard">
         <ul class="shortcut-buttons-set">
                 	
           
         
           
        
           
          
           
          
           
            
           </ul>
         </div>
        
          
      
    </div>
    <div style="clear: both;"></div>
  </div>
</div>
<!-- Content Box End -->
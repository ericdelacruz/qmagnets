<?php
	@session_start();
	
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
?>
    
          <!-- <li>
                <ul class="navigation">
                    <li class="heading selected">Current Section</li>
                  <li><a href="#" title="">Section link here</a></li>
                    <li><a href="#" title="">Section link here</a></li>
                    <li><a href="#" title="">Section link here</a></li>
                </ul>
            </li>	  -->
        <!-- Left Dark Bar Start -->
    <div id="leftside">
    	<div class="user">
        	<!--<img src="img/avatar.png" width="44" height="44" class="hoverimg" alt="Avatar" />-->
			<img  src="img/logo.png" width="44" height="44"  alt="Admin" />
            <p>Logged in as:</p>
            <p class="username"><?php  echo $user; ?></p>
            <p class="userbtn"><a href="home.php" title="">Home</a></p>
            <p class="userbtn"><a href="logout.php" title="" onclick="return confirm('Are you sure want to sign out?');">Log out</a></p>
        </div>
        <!--<div class="notifications">
        	<p class="notifycount"><a href="" title="" class="notifypop">10</a></p>
            <p><a href="" title="" class="notifypop">New Notifications</a></p>
            <p class="smltxt">(Click to open notifications)</p>
        </div>-->
        
        <ul id="nav">
        	
            <li>
                <a class="collapsed heading">Manage Admin</a>
                 <ul class="navigation">
                    <li><a href="change_admin_pass.php"  title="Change Password." >Change Password</a></li>
                    <li><a href="site_config.php" title="Site Configuration.">Site Configuration</a></li>
                    <!--<li><a href="aed_welcome.php" title="Welcome.">About Pest Control</a></li>-->
                  <!--  <li><a href="donate.php" title="Donate.">Donate</a></li>-->
                    <li><a href="logout.php"  onclick="return confirm('Are you sure want to sign out?');" title="Log Out">Logout</a></li>
                </ul>
            </li>
            
             <li>
                <a class="collapsed heading">Manage Banner </a>
                 <ul class="navigation">
                    <li><a href="manage_banner.php"  title="manage banner." >Manage Banner</a></li>
                 <li><a href="aed_banner.php?mode=add" title="add banner.">Add Banner</a></li>
                  
                </ul>
            </li> 
             <li>
                <a class="collapsed heading">Manage Scroller </a>
                 <ul class="navigation">
                    <li><a href="manage_scroller.php"  title="manage banner." >Manage Scroller</a></li>
                 <li><a href="aed_scroller.php?mode=add" title="add banner.">Add Scroller</a></li>
                  
                </ul>
            </li> 
            
           <!--   <li>
                <a class="collapsed heading">Manage Welcome</a>
                 <ul class="navigation">
                    <li><a href="manage_welcome.php"  title="manage welcome." >Manage Welcome</a></li>
                  <li><a href="aed_welcome.php?mode=add" title="add welcome.">Add Welcome</a></li>
                  
                </ul>
            </li> -->
            
            
           <!-- </li> 
               <li>
                <a class="collapsed heading">Manage About</a>
                 <ul class="navigation">
                    <li><a href="manage_about.php"  title="manage about." >Manage About</a></li>
                 <li><a href="aed_about.php?mode=add" title="add about.">Add About</a></li> 
                  
                </ul>
            </li> -->
            
            
            
             <!--  <li>
                <a class="collapsed heading">Manage Starting</a>
                 <ul class="navigation">
                    <li><a href="manage_starting.php"  title="manage starting." >Manage Starting</a></li>
                <li><a href="aed_starting.php?mode=add" title="add starting.">Add Starting</a></li> 
                  
                </ul>
            </li> -->
            
            
           
             <!-- <li>
                <a class="collapsed heading">Manage Growing</a>
                <ul class="navigation">
                    <li><a href="manage_growing.php"  title="manage growing." >Manage Growing</a></li>
                <li><a href="aed_growing.php?mode=add" title="add growing.">Add Growing</a></li>
                  
                </ul>
            </li> -->
            
            
           
            <!--   <li>
              <a class="collapsed heading">Manage Community</a>
                 <ul class="navigation">
                    <li><a href="manage_com.php"  title="manage community." >Manage Community</a></li>
               <li><a href="aed_com.php?mode=add" title="add community.">Add Community</a></li>
                  
                </ul>
            </li>--> 
            
             
            
        <!--    <li>
                <a class="collapsed heading">Manage Right Banner </a>
                 <ul class="navigation">
                    <li><a href="manage_right_banner.php"  title="manage right banner." >Manage  Right Banner </a></li>
          <li><a href="aed_right_banner.php?mode=add" title="add scroller.">Add  Right Banner</a></li>
                  
                </ul>
            </li>-->
            
            
        <!--    <li>
                <a class="collapsed heading">Manage Events </a>
                 <ul class="navigation">
                    <li><a href="manage_events.php"  title="manage events." >Manage Events </a></li>
                 <li><a href="aed_events.php?mode=add" title="add events.">Add Events</a></li>
                  
                </ul>
            </li>
            
            <li>
                <a class="collapsed heading">Manage Submenus </a>
                 <ul class="navigation">
                    <li><a href="manage_submenu.php"  title="manage events." >Manage Submenus </a></li>
                 <li><a href="aed_submenu.php?mode=add" title="add events.">Add Submenus</a></li>
                  
                </ul>
            </li>
            
             <li>
                <a class="collapsed heading">Manage Page Content  </a>
                 <ul class="navigation">
                    <li><a href="manage_aboutsub.php"  title="manage content pages." >Manage Content</a></li>
                 <li><a href="aed_aboutsub.php?mode=add" title="add content pages.">Add Content</a></li>
                  
                </ul>
            </li>
            
            
        <li>
                <a class="collapsed heading">Manage Start Sub  </a>
                 <ul class="navigation">
                    <li><a href="manage_startsub.php"  title="manage start sub pages." >Manage Start Sub</a></li>
                 <li><a href="aed_startsub.php?mode=add" title="add start sub pages.">Add Start Sub</a></li>
                  
                </ul>
            </li>
            
             <li>
                <a class="collapsed heading">Manage Growing Sub  </a>
                 <ul class="navigation">
                    <li><a href="manage_growingsub.php"  title="manage growing sub pages." >Manage Growing Sub</a></li>
                 <li><a href="aed_growingsub.php?mode=add" title="add growing sub pages.">Add Growing Sub</a></li>
                  
                </ul>
            </li>
			 
             
              <li>
                <a class="collapsed heading">Manage Community Sub  </a>
                 <ul class="navigation">
                    <li><a href="manage_comsub.php"  title="manage community sub pages." >Manage Com Sub</a></li>
                 <li><a href="aed_comsub.php?mode=add" title="add community sub pages.">Add Com Sub</a></li>
                  
                </ul>
            </li>
            
            <li>
                <a class="collapsed heading">Manage Gallery </a>
                 <ul class="navigation">
                    <li><a href="manage_galcat.php"  title="manage gallery ." >Manage Gallery </a></li>
                 <li><a href="aed_galcat.php?mode=add" title="add gallery category.">Add Gallery Category</a></li>
                  
                </ul>
            </li>
            
              <li>
                <a class="collapsed heading">Manage News </a>
                 <ul class="navigation">
                    <li><a href="manage_news.php"  title="manage news ." >Manage News </a></li>
                 <li><a href="aed_news.php?mode=add" title="add news .">Add News</a></li>
                  
                </ul>
            </li>
            
            
              <li>
                <a class="collapsed heading">Manage Links </a>
                 <ul class="navigation">
                    <li><a href="manage_links.php"  title="manage knowledge links ." >Manage Links </a></li>
                <li><a href="aed_links.php?mode=add" title="add knowledge links .">Add Links</a></li> 
                  
                </ul>
            </li>
            
              <li>
                <a class="collapsed heading">Manage Blog</a>
                 <ul class="navigation">
                    <li><a href="manage_blog.php"  title="manage blog ." >Manage Blog </a></li>
                 <li><a href="aed_blog.php?mode=add" title="add blog .">Add Blog</a></li> 
                  
                </ul>
            </li>
           <li>
                <a class="collapsed heading">Manage Gallery  </a>
                 <ul class="navigation">
                    <li><a href="manage_gallery.php"  title="manage gallery ." >Manage Gallery </a></li>
                 <li><a href="aed_gallery.php?mode=add" title="add gallery .">Add Gallery </a></li>
                  
                </ul>
            </li> -->
			 
			 
                        
             
        </ul>
        
    </div>
    <!-- Left Dark Bar End --> 